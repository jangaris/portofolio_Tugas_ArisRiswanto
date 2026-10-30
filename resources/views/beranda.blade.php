@extends('layout.app')
@section('title', 'beranda')
@section('tampilan')

<section class="relative isolate overflow-hidden bg-slate-950">
    <div class="absolute inset-0 -z-20 bg-center bg-cover bg-no-repeat opacity-40"
         style="background-image: url('https://raw.githubusercontent.com/jangaris/homeimage/refs/heads/main/unity.webp');"></div>
    <div class="mx-auto max-w-4xl px-4 py-24 text-center lg:py-48">

        <div class="mb-8 inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-1.5 text-sm text-sky-100 backdrop-blur">
            <span class="relative flex h-2.5 w-2.5">
             <span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-emerald-400"></span>
            </span>
            Terbuka untuk kolaborasi & peluang baru
        </div>


        <h1 class="mb-6 text-4xl font-extrabold tracking-tight text-white md:text-6xl lg:text-7xl">
            Halo, saya
            <span class="bg-blue-400 from-sky-300 via-cyan-200 to-fuchsia-300 bg-clip-text text-transparent">
                {{ $nama }}
            </span>
        </h1>

        {{-- Jurusan & kampus sebagai chip --}}
        <div class="mb-8 flex flex-wrap items-center justify-center gap-3">
            <span class="inline-flex items-center gap-2 rounded-full bg-sky-500/20 px-4 py-2 text-sm font-medium text-sky-100 ring-1 ring-inset ring-sky-300/30 md:text-base">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0v7m-6-4.5v-3.2l6 3.2 6-3.2v3.2"/></svg>
                {{ $jurusan }}
            </span>
            <span class="inline-flex items-center gap-2 rounded-full bg-fuchsia-500/20 px-4 py-2 text-sm font-medium text-fuchsia-100 ring-1 ring-inset ring-fuchsia-300/30 md:text-base">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18M5 21V10l7-5 7 5v11M9 21v-6h6v6"/></svg>
                {{ $kampus }}
            </span>
        </div>

        <p class="mx-auto mb-10 max-w-2xl text-base leading-relaxed text-slate-200 md:text-xl">
            {{ $deskrip_singkat }}
        </p>

        <div class="flex flex-col items-center justify-center gap-4 sm:flex-row">
            <a href="{{route('profil')}}"
               class="group inline-flex items-center justify-center gap-2 rounded-xl bg-blue-400 from-sky-500 to-indigo-500 px-7 py-3.5 text-base font-semibold text-white shadow-lg shadow-sky-500/30 transition duration-300 hover:-translate-y-0.5 hover:shadow-sky-500/50 focus:outline-none focus:ring-4 focus:ring-sky-400/40">
                Lihat Portofolio
                <svg class="h-5 w-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6l6 6-6 6"/></svg>
            </a>
            <a href="mailto::{{ $email }}"
               class="inline-flex items-center justify-center rounded-xl border border-white/30 bg-white/10 px-7 py-3.5 text-base font-semibold text-white backdrop-blur transition duration-300 hover:bg-white/20 focus:outline-none focus:ring-4 focus:ring-white/20">
                Hubungi Saya
            </a>
        </div>
    </div>

    <div class="absolute bottom-6 left-1/2 hidden -translate-x-1/2 animate-bounce text-white/60 md:block">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
    </div>
</section>


