<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
        private function dataProyek(): array
    {
        return [
            1 => [
                'id' => 1,
                'judul' => 'Website Profil Kelas drumben',
                'kategori' => 'Web',
                'tahun' => 2025,
                'ringkasan' => 'Website sederhana berisi profil dan kegiatan kelas.drumben',
                'deskripsi' => 'Proyek untuk mengenang masa masa kegiatan saat dulu SMK bersama teman teman, Dibuat dengan cinta pakai HTML, CSS, dan Bootstrap.',
                'teknologi' => ['HTML', 'CSS', 'Bootstrap'],
                'peran' => 'Pengembang front-end',
                'link' => 'https://jangarisriswanto.github.io/drambend.github.io/',
                'image' => 'https://raw.githubusercontent.com/jangaris/homeimage/refs/heads/main/gambar/kenangan.png'
            ],
            2 => [
                'id' => 2,
                'judul' => 'Aplikasi quizz',
                'kategori' => 'Aplikasi',
                'tahun' => 2025,
                'ringkasan' => 'teka teki untuk berpikir secara logika',
                'deskripsi' => 'Aplikasi kecil untuk mengharuskan kita berpikir logic',
                'teknologi' => ['HTML', 'JavaScript'],
                'peran' => 'Pengembang tunggal',
                'link' => 'https://jangarisriswanto.github.io/quizizstress.io/',
                'image' => 'https://raw.githubusercontent.com/jangaris/homeimage/refs/heads/main/gambar/quizz2.png'
                ],
                3 => [
                    'id' => 3,
                    'judul' => 'Media Belajar mengingat',
                    'kategori' => 'Pendidikan',
                    'tahun' => 2026,
                    'ringkasan' => 'Media pembelajaran berbasis web untuk melatih daya ingat',
                    'deskripsi' => 'Media belajar berisi gambar yang harus mencari gambar yang sama',
                    'teknologi' => ['HTML', 'CSS', 'JavaScript'],
                    'peran' => 'Perancang materi dan antarmuka',
                    'image' => 'https://raw.githubusercontent.com/jangaris/homeimage/refs/heads/main/gambar/quiz1.png',
                'link' => 'https://jangarisriswanto.github.io/gem_memory/',
            ],
            4 => [
                'id' => 4,
                'judul' => 'belaja buat texy mengetik',
                'kategori' => 'Web',
                'tahun' => 2026,
                'ringkasan' => 'Proyek iseng saat smk',
                'deskripsi' => 'Website di bangun tanpa database.',
                'teknologi' => ['Javascript', 'HTML'],
                'peran' => 'Pengembang tunggal',
                'link' => 'https://jangaris.github.io/hari_raya_idul_fitri/',
                'image' => 'https://raw.githubusercontent.com/jangaris/homeimage/refs/heads/main/kt.png'
            ],
            5 => [
                'id' => 5,
                'judul' => 'informasi berbasis web',
                'kategori' => 'Web',
                'tahun' => 2026,
                'ringkasan' => 'Proyek saat ikut lomba di SMK',
                'deskripsi' => 'Website yang dibangun untuk menerapkan bagaimana hidup di era digital',
                'teknologi' => ['css', 'html', 'Bootstrap'],
                'peran' => 'Pengembang tunggal',
                'link' => 'https://jangaris.github.io/hidup_di_era_digital/',
                'image' => 'https://raw.githubusercontent.com/jangaris/homeimage/refs/heads/main/gambar/digital.png'
            ],
        ];
    }

    public function index()
    {
        $proyek = $this->dataProyek();

        return view('project.homeProject', compact('proyek'));
    }

    public function show($id)
    {
        $proyek = $this->dataProyek();
        abort_unless(isset($proyek[$id]), 404);

        return view('project.showProject', ['item' => $proyek[$id]]);
    }
}
