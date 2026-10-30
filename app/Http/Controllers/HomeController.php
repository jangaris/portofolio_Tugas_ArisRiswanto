<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'nama' => 'Aris Riswanto',
            'jurusan' => 'Pendidikan Teknologi Informasi',
            'kampus' => 'Universitas Muhammadiyah Tasikmalaya',
            'deskrip_singkat' => 'Halo, saya mahasiswa yang suka belajar pemrograman dan membangun hal-hal baru.',
            'email' => 'jangaris450@gmail.com',
        ];
        return view('beranda', $data);
    }
        public function profil()
    {
        $profil = [
            'nama' => 'Aris Riswanto',
            'nim' => 'C24****002',
            'kelas' => 'PTI',
            'prodi' => 'Pendidikan Teknologi Informasi',
            'kampus' => 'Universitas Muhammadiyah Tasikmalaya',
            'email' => 'jangaris450@gmail.com',
            'kota' => 'Tasikmalaya, Jawa Barat',
            'tentang' => 'Mahasiswa Pendidikan Teknologi Informasi yang tertarik pada pemograman, desain antarmuka, dan teknologi pembelajaran. Saat ini sedang mendalami AI Agent',
            'pendidikan' => [
                ['tahun' => '2022 - sekarang', 'institusi' => 'Universitas Muhammadiyah Tasikmalaya','keterangan' => 'S1 Pendidikan Teknologi Informasi'],
                ['tahun' => '2019 - 2022','institusi' => 'SMK As-Syafiiyah','keterangan' => 'RPL'],
            ],
        ];

        return view('profile', compact('profil'));
    }
        public function keahlian()
    {
        $keahlian = [
            ['nama' => 'HTML & CSS','deskripsi' => 'Membuat struktur dan tampilan halaman web yang rapi dan responsif.', 'gambar' => 'https://raw.githubusercontent.com/jangaris/homeimage/refs/heads/main/gambar/HC.jpeg'],
            ['nama' => 'PHP','deskripsi' => 'Pemrograman sisi server dasar dan pengolahan data.','gambar' => 'https://raw.githubusercontent.com/jangaris/homeimage/refs/heads/main/gambar/php.jpeg'],
            ['nama' => 'Laravel', 'deskripsi' => 'Routing, Controller, dan Blade Template pada pola MVC.', 'gambar' => 'https://raw.githubusercontent.com/jangaris/homeimage/refs/heads/main/gambar/laravel.jpeg'],
            ['nama' => 'JavaScript','deskripsi' => 'Interaksi dasar pada halaman web.', 'gambar' => 'https://raw.githubusercontent.com/jangaris/homeimage/refs/heads/main/gambar/js.jpeg'],
            ['nama' => 'Git & GitHub', 'deskripsi' => 'Version control dan dokumentasi proyek lewat repository.', 'gambar' => 'https://raw.githubusercontent.com/jangaris/homeimage/refs/heads/main/gambar/gG.jpeg'],
            ['nama' => 'Desain UI', 'deskripsi' => 'Menyusun tata letak dan navigasi yang mudah dipahami.', 'gambar' => 'https://raw.githubusercontent.com/jangaris/homeimage/refs/heads/main/gambar/UI.jpeg'],
        ];

        return view('keahlian', compact('keahlian'));
    }
}
