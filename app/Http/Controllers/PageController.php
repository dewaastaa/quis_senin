<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Welcome Page / Landing Page
     * Initial welcome screen with an "Enter Website" button
     */
    public function welcome()
    {
        $judulAplikasi  = "DEWA'S PORTFOLIO";
        $namaMahasiswa  = "Dewa Putu Winaya";
        $nim            = "2501010261";
        $mataKuliah     = "Web Programming";
        $pesan          = "Welcome to my portfolio website. Built using the Laravel 12 framework on a Laragon local server.";

        return view('pages.welcome', compact(
            'judulAplikasi',
            'namaMahasiswa',
            'nim',
            'mataKuliah',
            'pesan'
        ));
    }

    /**
     * Page 1: Home
     * Demonstrates dynamic variables passed from Controller to Blade View
     */
    public function home()
    {
        $namaAplikasi    = "Portfolio";
        $namaMahasiswa   = "Dewa Putu Winaya";
        $nim             = "2501010261";
        $mataKuliah      = "Web Programming";
        $semester        = "Semester 3 - Academic Year 2026/2027";
        $serverInfo      = "Laragon (Apache / Nginx & PHP " . PHP_VERSION . ")";
        $pesanSambutan   = "Welcome to my Web Programming practical project built using the Laravel 12 framework.";
        $waktuAkses      = date('l, F j, Y - g:i A');

        return view('pages.home', compact(
            'namaAplikasi',
            'namaMahasiswa',
            'nim',
            'mataKuliah',
            'semester',
            'serverInfo',
            'pesanSambutan',
            'waktuAkses'
        ));
    }

    /**
     * Page 2: About Me (Personal Profile)
     * Demonstrates data iteration using Blade @while loop directive
     */
    public function about()
    {
        // 1. Personal Profile Data (iterated with @while in view)
        $biodata = [
            ['label' => 'Full Name', 'nilai' => 'Dewa Putu Winaya', 'icon' => 'fa-solid fa-id-card'],
            ['label' => 'Student ID (NIM)', 'nilai' => '2501010261', 'icon' => 'fa-solid fa-hashtag'],
            ['label' => 'Study Program', 'nilai' => 'AI Informatics', 'icon' => 'fa-solid fa-laptop-code'],
            ['label' => 'Faculty', 'nilai' => 'Faculty of Informatics & Communication Technology', 'icon' => 'fa-solid fa-building-columns'],
            ['label' => 'University', 'nilai' => 'Institut Bisnis dan Teknologi Indonesia (INSTIKI)', 'icon' => 'fa-solid fa-graduation-cap'],
            ['label' => 'Address', 'nilai' => 'Br. Baturiti Kelod, Kerambitan, Tabanan, Bali', 'icon' => 'fa-solid fa-location-dot'],
            ['label' => 'Email', 'nilai' => 'dwpy@mail.com', 'icon' => 'fa-solid fa-envelope'],
            ['label' => 'Academic Status', 'nilai' => 'Active Student', 'icon' => 'fa-solid fa-circle-check'],
        ];

        // 2. Educational Background Data (iterated with @while in view)
        $riwayatPendidikan = [
            [
                'jenjang'   => 'Primary School',
                'institusi' => 'SD Negeri 1 Baturiti',
                'periode'   => '2013 - 2019',
                'status'    => 'Graduated',
                'deskripsi' => 'Completed primary school education with good academic records.',
            ],
            [
                'jenjang'   => 'Junior High School',
                'institusi' => 'SMP Negeri 1 Kerambitan',
                'periode'   => '2019 - 2022',
                'status'    => 'Graduated',
                'deskripsi' => 'Completed junior high school education with interest in English and sciences.',
            ],
            [
                'jenjang'   => 'Senior High School',
                'institusi' => 'SMA Negeri 1 Kerambitan',
                'periode'   => '2022 - 2025',
                'status'    => 'Graduated (Natural Sciences)',
                'deskripsi' => 'Completed senior high school education majoring in Natural Sciences (MIPA).',
            ],
            [
                'jenjang'   => 'Undergraduate Degree',
                'institusi' => 'Institut Bisnis dan Teknologi Indonesia (INSTIKI)',
                'periode'   => '2025 - Present',
                'status'    => 'Currently Enrolled (Semester 3)',
                'deskripsi' => 'Pursuing Bachelor of Computer Science in AI Informatics, studying fullstack web development, Laravel framework, and machine learning.',
            ],
        ];

        // 3. Hobbies & Interests Data (iterated with @while in view)
        $hobi = [
            ['nama' => 'Gaming', 'icon' => 'fa-solid fa-gamepad', 'keterangan' => 'Playing Mobile Legends and Valorant with friends'],
            ['nama' => 'Photography', 'icon' => 'fa-solid fa-camera', 'keterangan' => 'Capturing moments, landscapes, and street photography'],
            ['nama' => 'Motorcycle Touring', 'icon' => 'fa-solid fa-motorcycle', 'keterangan' => 'Traveling and exploring scenic roads with friends'],
            ['nama' => 'Drawing & Sketching', 'icon' => 'fa-solid fa-pencil', 'keterangan' => 'Creating sketches and creative artwork with friends'],
        ];

        return view('pages.about', compact('biodata', 'riwayatPendidikan', 'hobi'));
    }

    /**
     * Page 3: Photo Gallery
     * Local photos loaded from the public/images/ directory
     */
    public function gallery()
    {
        // Photos stored in: public/images/
        $galeri = [
            [
                'judul'     => 'Friends',
                'foto'      => 'foto1.jpg',
                'deskripsi' => 'Juztine',
            ],
            [
                'judul'     => 'Friends',
                'foto'      => 'foto2.jpg',
                'deskripsi' => 'Daniaz',
            ],
            [
                'judul'     => 'Me',
                'foto'      => 'foto3.jpg',
                'deskripsi' => 'Myself',
            ],
            [
                'judul'     => 'Friends',
                'foto'      => 'foto4.jpg',
                'deskripsi' => 'Mirah',
            ],
            [
                'judul'     => 'Friends',
                'foto'      => 'foto5.jpg',
                'deskripsi' => 'Aceng',
            ],
            [
                'judul'     => 'Campus Activity',
                'foto'      => 'foto6.jpg',
                'deskripsi' => 'Campus Documentation & Activities',
            ],
        ];

        return view('pages.gallery', compact('galeri'));
    }
}
