@extends('layout.app')
@section('title', 'show')
@section('tampilan')
<section class="relative isolate overflow-hidden px-4 py-16 md:py-24" style="background-image: url('https://raw.githubusercontent.com/jangaris/homeimage/refs/heads/main/unity.webp');">

    <div class="mx-auto max-w-4xl">
        <article class="overflow-hidden rounded-3xl border border-white/10 bg-white/5 shadow-2xl shadow-black/40 backdrop-blur-xl">

            <header class="flex flex-col items-center gap- bg-cyan-900 from-sky-500/10 to-fuchsia-500/10 p-8 text-center md:flex-row md:text-left">
                 <div class="relative shrink-0">
                    <img class="relative h-36 w-36 rounded-full object-cover ring-4 ring-slate-950 md:h-40 md:w-40"src="{{ $item['image'] }}" alt="Foto {{ $item['image'] }}">
                </div>
                <div class="min-w-0 ms-4">
                    <h2 class="text-3xl font-extrabold tracking-tight text-white md:text-4xl">
                        {{ $item['judul'] }}
                    </h2>

                    <div class="mt-4 flex flex-wrap justify-center gap-2 md:justify-start">
                        <span class="rounded-full bg-sky-500/20 px-3 py-1 text-xs font-semibold text-sky-100 ring-1 ring-inset ring-sky-300/30">
                            {{ $item['ringkasan'] }}
                        </span>
                        <span class="rounded-full bg-fuchsia-500/20 px-3 py-1 text-xs font-semibold text-fuchsia-100 ring-1 ring-inset ring-fuchsia-300/30">
                            {{ $item['deskripsi'] }}
                        </span>
                    </div>
                </div>
            </header>

            <div class="grid gap-8 p-8 md:grid-cols-5">

                <div class="space-y-6 md:col-span-3">
                    <div>
                        <h3 class="mb-2 text-sm font-semibold uppercase tracking-widest text-sky-300">kategori</h3>
                        <p class="leading-relaxed text-slate-200">{{ $item['kategori'] }}</p>
                    </div>

                    <div>
                        <h3 class="mb-3 text-sm font-semibold uppercase tracking-widest text-sky-300">tahun</h3>
                        <ul class="space-y-3 text-slate-200">
                            <li class="flex items-center gap-3">
                                <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-white/10 text-sky-300">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21s7-5.686 7-11a7 7 0 10-14 0c0 5.314 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
                                </span>
                                <span>{{ $item['tahun'] }}</span>
                            </li>
                        </ul>
                    </div>

                    <a href="{{ $item['link'] }}"
                       class="group inline-flex items-center gap-2 rounded-xl bg-sky-400 from-sky-500 to-indigo-500 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-sky-500/30 transition duration-300 hover:-translate-y-0.5 focus:outline-none focus:ring-4 focus:ring-sky-400/40">
                        lihat situs Saya
                        <svg class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6l6 6-6 6"/></svg>
                    </a>
                </div>

                <div class="md:col-span-2">
                    <h3 class="mb-4 text-sm font-semibold uppercase tracking-widest text-sky-300">Teknologi</h3>
                    <ol class="relative space-y-6 border-s border-white/15 ps-6">
                        @foreach ($item['teknologi'] as $bahasa)
                            <li class="relative">
                                <time class="text-xs font-semibold text-fuchsia-300">{{ $bahasa}}</time>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </article>
    </div>
</section>

