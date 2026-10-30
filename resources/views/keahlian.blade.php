@extends('layout.app')
@section('title', 'keahlian')
@section('tampilan')
<section id="keahlian" class="relative isolate overflow-hidden px-4 py-16 md:py-24" style="background-image: url('https://raw.githubusercontent.com/jangaris/homeimage/refs/heads/main/unity.webp');">


    <div class="mx-auto max-w-6xl">
        <div class="mb-12 text-center">
            <span class="mb-3 inline-block rounded-full border border-white/20 bg-white/10 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-sky-200 backdrop-blur">
                Keahlian
            </span>
            <h2 class="text-3xl font-extrabold tracking-tight text-white md:text-5xl">
                Apa yang
                <span class=" bg-sky-500 from-sky-300 via-cyan-200 to-fuchsia-300 bg-clip-text text-transparent">bisa saya lakukan</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($keahlian as $skill)
                <article class="group relative overflow-hidden rounded-2xl border border-white/10 bg-white/5 shadow-xl shadow-black/30 backdrop-blur-xl transition duration-300 hover:-translate-y-2 hover:border-sky-300/40 hover:shadow-sky-500/20">
                    
                        <div class="relative h-44 overflow-hidden">
                            <img
                                class="h-full w-full object-cover"
                                src="{{ $skill['gambar'] }}"
                                alt="{{ $skill['nama'] }}"
                                onerror="this.style.display='none'">

                            <div class="absolute inset-0 from-slate-950/80 to-transparent"></div>
                        </div>


                    <div class="p-6 text-center">
                        <span class="inline-flex items-center rounded-full bg-sky-500/20 px-3 py-1 text-xs font-semibold text-sky-100 ring-1 ring-inset ring-sky-300/30">
                            <svg class="me-1.5 h-3.5 w-3.5" aria-hidden="true" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.122 17.645a7.185 7.185 0 0 1-2.656 2.495 7.06 7.06 0 0 1-3.52.853 6.617 6.617 0 0 1-3.306-.718 6.73 6.73 0 0 1-2.54-2.266c-2.672-4.57.287-8.846.887-9.668A4.448 4.448 0 0 0 8.07 6.31 4.49 4.49 0 0 0 7.997 4c1.284.965 6.43 3.258 5.525 10.631 1.496-1.136 2.7-3.046 2.846-6.216 1.43 1.061 3.985 5.462 1.754 9.23Z"/></svg>
                            {{ $skill['nama'] }}
                        </span>

                        <p class="mt-4 text-base leading-relaxed text-slate-200">
                            {{ $skill['deskripsi'] }}
                        </p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

