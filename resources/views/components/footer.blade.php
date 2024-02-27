<footer class="border-t border-white border-opacity-25">
    <div class="container py-5 flex flex-wrap items-center justify-between gap-7">
        <a href="{{ route('index.index') }}"><img src="{{ asset('public/assets/images/logo.svg') }}" alt="Изображение" class="max-w-24 max-h-24"></a>
        <ul class="items-center gap-14">
            <li><a class="h-5 hover:border-b border-white pb-2 transition" href="{{ route('index.index') }}">Главная</a></li>
            <li><a class="h-5 hover:border-b border-white pb-2 transition" href="{{ route('index.catalog') }}">Каталог</a></li>
            <li><a class="h-5 hover:border-b border-white pb-2 transition" href="#">О нас</a></li>
        </ul>
        <ul class="items-center gap-14">
            <li><a class="h-5 hover:border-b border-white pb-2 transition" href="{{ route('auth.loginPage') }}">Вход</a></li>
            <li><a class="h-5 hover:border-b border-white pb-2 transition" href="{{ route('auth.registerPage') }}">Регистрация</a></li>
        </ul>
        <div class="flex flex-wrap items-center gap-7">

        </div>
    </div>
</footer>
