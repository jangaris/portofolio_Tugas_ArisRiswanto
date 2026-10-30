<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body>


<nav class="fixed top-0 z-20 w-full border-b border-b-black bg-black shadow-sm">
    <div class="mx-auto flex flex-wrap items-center justify-between p-4">
        <a href="/" class="flex items-center gap-3">
            <span class="text-xl font-bold text-blue-600">
                Portofolio
            </span>
        </a>
        <ul class="flex gap-6 font-medium">
            <li>
                <a href="{{route('beranda')}}" class="text-white hover:text-blue-600">
                    Beranda
                </a>
            </li>
            <li>
                <a href="{{route('keahlian')}}" class=text-white hover:text-blue-600">
                    Keahlian
                </a>
            </li>
            <li>
                <a href="{{route('proyek.index')}}" class=text-white hover:text-blue-600">
                    Project
                </a>
            </li>
            <li>
                <a href="{{route('profil')}}" class=text-white hover:text-blue-600">
                    Profile
                </a>
            </li>
        </ul>
    </div>
</nav>

<main>
    @yield('tampilan')
</main>

<footer class="fixed bottom-0 left-0 z-20 w-full border-t border-gray-700 bg-black p-4 shadow-sm md:p-6">
    <div class="text-center">
        <span class="text-sm text-white">
            © 2026
            <a href="#" class="hover:underline">
                Portofolio
            </a>.
            Aris Riswanto
        </span>
    </div>
</footer>

  </body>
</html>