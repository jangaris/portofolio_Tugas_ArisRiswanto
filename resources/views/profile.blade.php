@extends('layout.app')
@section('title', 'profile')
@section('tampilan')
<section class="relative isolate overflow-hidden  px-4 py-16 md:py-24" style="background-image: url('https://raw.githubusercontent.com/jangaris/homeimage/refs/heads/main/unity.webp');">

    <div class="mx-auto max-w-4xl">
        <article class="overflow-hidden rounded-3xl border border-white/10 bg-white/5 shadow-2xl shadow-black/40 backdrop-blur-xl">

            <header class="flex flex-col items-center gap- bg-cyan-900 from-sky-500/10 to-fuchsia-500/10 p-8 text-center md:flex-row md:text-left">
                <div class="min-w-0">
                    <h2 class="text-3xl font-extrabold tracking-tight text-white md:text-4xl">
                        {{ $profil['nama'] }}
                    </h2>
                    <p class="mt-1 text-lg font-medium text-sky-300">{{ $profil['prodi'] }}</p>
                    <p class="text-slate-300">{{ $profil['kampus'] }}</p>

                    <div class="mt-4 flex flex-wrap justify-center gap-2 md:justify-start">
                        <span class="rounded-full bg-sky-500/20 px-3 py-1 text-xs font-semibold text-sky-100 ring-1 ring-inset ring-sky-300/30">
                            NIM {{ $profil['nim'] }}
                        </span>
                        <span class="rounded-full bg-fuchsia-500/20 px-3 py-1 text-xs font-semibold text-fuchsia-100 ring-1 ring-inset ring-fuchsia-300/30">
                            Kelas {{ $profil['kelas'] }}
                        </span>
                    </div>
                </div>
            </header>

            <div class="grid gap-8 p-8 md:grid-cols-5">

                <div class="space-y-6 md:col-span-3">
                    <div>
                        <h3 class="mb-2 text-sm font-semibold uppercase tracking-widest text-sky-300">Tentang Saya</h3>
                        <p class="leading-relaxed text-slate-200">{{ $profil['tentang'] }}</p>
                    </div>

                    <div>
                        <h3 class="mb-3 text-sm font-semibold uppercase tracking-widest text-sky-300">Kontak</h3>
                        <ul class="space-y-3 text-slate-200">
                            <li class="flex items-center gap-3">
                                <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-white/10 text-sky-300">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l9 6 9-6M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z"/></svg>
                                </span>
                                <a href="mailto:{{ $profil['email'] }}" class="break-all hover:text-sky-300">{{ $profil['email'] }}</a>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-white/10 text-sky-300">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21s7-5.686 7-11a7 7 0 10-14 0c0 5.314 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
                                </span>
                                <span>{{ $profil['kota'] }}</span>
                            </li>
                        </ul>
                    </div>

                    <a href="mailto:{{ $profil['email'] }}"
                       class="group inline-flex items-center gap-2 rounded-xl bg-sky-400 from-sky-500 to-indigo-500 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-sky-500/30 transition duration-300 hover:-translate-y-0.5 focus:outline-none focus:ring-4 focus:ring-sky-400/40">
                        Hubungi Saya
                        <svg class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6l6 6-6 6"/></svg>
                    </a>
                </div>

                <div class="md:col-span-2">
                    <h3 class="mb-4 text-sm font-semibold uppercase tracking-widest text-sky-300">Pendidikan</h3>
                    <ol class="relative space-y-6 border-s border-white/15 ps-6">
                        @foreach ($profil['pendidikan'] as $p)
                            <li class="relative">
                                <time class="text-xs font-semibold text-fuchsia-300">{{ $p['tahun'] }}</time>
                                <h4 class="font-semibold text-white">{{ $p['institusi'] }}</h4>
                                <p class="text-sm text-slate-300">{{ $p['keterangan'] }}</p>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </article>
    </div>
</section>

