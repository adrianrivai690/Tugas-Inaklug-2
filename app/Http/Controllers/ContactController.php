<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Tampilkan halaman Hubungi Kami
     */
    public function index()
    {
        return view('hubungi-kami');
    }

    /**
     * Proses form Hubungi Kami
     */
    public function store(Request $request)
    {
        // === 1. Validasi input ===
        $validator = Validator::make($request->all(), [
            'name'            => 'required|string|max:255',
            'email'           => 'required|email|max:255',
            'company'         => 'nullable|string|max:255',
            'phone'           => 'required|string|max:20',
            'message'         => 'required|string|min:10',
            'g-recaptcha-response' => 'required'
        ], [
            'name.required'   => 'Nama wajib diisi',
            'email.required'  => 'Email wajib diisi',
            'email.email'     => 'Format email tidak valid',
            'phone.required'  => 'Nomor telepon wajib diisi',
            'message.required'=> 'Pesan wajib diisi',
            'message.min'     => 'Pesan minimal 10 karakter',
            'g-recaptcha-response.required' => 'Verifikasi reCAPTCHA wajib dilakukan',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // === 2. Verifikasi reCAPTCHA v2 ===
        try {
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret'   => config('services.recaptcha.secret_key'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]);

            $result = $response->json();

            if (empty($result['success']) || $result['success'] !== true) {
                return response()->json([
                    'success' => false,
                    'message' => 'Verifikasi reCAPTCHA gagal. Silakan coba lagi.'
                ], 400);
            }
        } catch (\Exception $e) {
            Log::error('reCAPTCHA Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan pada verifikasi reCAPTCHA.'
            ], 500);
        }

        // === 3. Simpan pesan ke database ===
        try {
            ContactMessage::create([
                'name'       => $request->name,
                'email'      => $request->email,
                'company'    => $request->company,
                'phone'      => $request->phone,
                'message'    => $request->message,
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Pesan Anda berhasil dikirim! Tim kami akan segera menghubungi Anda.'
            ]);
        } catch (\Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan. Silakan coba lagi nanti.'
            ], 500);
        }
    }
}
