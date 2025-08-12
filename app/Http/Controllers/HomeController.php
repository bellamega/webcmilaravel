<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Pastikan ini ada jika kamu berencana menggunakan Request

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama (homepage).
     * Ini akan dipanggil oleh route '/' di web.php.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Jika kamu punya data artikel yang ingin ditampilkan,
        // kamu bisa uncomment baris di bawah ini dan pastikan model Article ada
        // use App\Models\Article; // Tambahkan ini di bagian atas file jika menggunakan model
        // $articles = Article::latest()->take(3)->get();
        // return view('home', compact('articles'));

        // Untuk saat ini, cukup kembalikan view 'home' tanpa data tambahan
        return view('home');
    }
}