@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')
    <div>
        <div class="container py-24">
            <div class="flex justify-between items-center gap-9">
                <div class="flex items-start flex-col gap-12 w-1/2">
                    <div class="flex flex-col gap-7">
                        <h1 class="text-5xl">Пейте чай Ахмад -  ведь Рамзан Кадыров наш брат</h1>
                        <p>"Наслаждайтесь моментом с нашим чаем: вкус, который создаёт восхитительные впечатления.".</p>
                    </div>
                    <a class="button" href="#">Купить</a>
                </div>
                <div class="">
                    <img src="{{ asset('public/assets/images/banner.png') }}" alt="Изображение" class="margin-left-auto">
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class=" py-24 bg-green-700">
            <div class="flex justify-center items-center gap-7">
                <div class="flex items-start flex-col gap-12 w-8/12 ">
                    <div class="flex flex-col gap-12 text-left">
                        <h1 class="text-5xl">О нашей компании</h1>
                        <p class="text-xl text-left leading-relaxed">
                            Aхмад Сила (Ахмад Теа) является российским представителем известного британского чайного бренда Ahmad Tea Ltd., который является одной из древнейших семейных чайных компаний мира. Основатели Ahmad Tea сохраняют высокий стандарт качества чая, поддерживаемый с момента создания компании и до нашего времени, несмотря на коммерческие цели.

                            Компания Ахмад Сила специализируется на продаже классического индийского чая, включая такие виды как Classic Black Tea, которые обладают множеством здоровья и психологически положительными свойствами, такими как восстановление сил, заряд энергии и вдохновение.
                            
                            Ахмад Сила работает совместно с ООО "СДС-ФУДС", что демонстрирует серьезность и профессионализм компании в области импорта и дистрибуции чая в Россию.
                            

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container py-24">
            <div class="flex justify-beetwen items-center gap-7">
                <div class="flex items-start flex-col gap-12 w-1/2">
                    <div class="flex flex-col gap-7">
                        <h1 class="text-5xl">Контакты</h1>
                        <div class="flex justify-center items-center gap-10">
                            <div class="flex flex-col gap-2">
                                <h3 class="2text-xl">Адрес:</h3>
                                <p class="2text-xs">ул. Профсоюзная, 34 цокольный этаж</p>
                            </div>
                            <div class="flex gap-2">
                                <h3 class="2text-xl">Телефон:</h3>
                                <p class="2text-xs">+7999999999</p>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="2text-xl">Соцсети:</h3>
                                <a href=""><p class="2text-xs">Вконтакте</p></a>
                                <a href=""><p class="2text-xs">Инстаграмм</p></a>
                                <a href=""><p class="2text-xs">Телеграмм</p></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class=" py-24 bg-green-700">
            <div class="flex justify-center items-center gap-7">
                <div class="flex items-start flex-col gap-12 w-8/12 ">
                    <div class="flex flex-col gap-12 text-left">
                        <h1 class="text-5xl">Ahmad</h1>
                        <div class="flex gap-10 border-t py-4 border-white transition  ">
                            <p class="text-xl">Лучшие урожаи и сборы от ферм в Китае, Тайване и Тайланде</p>
                            <p class="text-xl">Работаем с поставщиками напрямую, выстраиваем дружеские отношения, получаем от них лучшую продукцию</p>
                            <img src="{{ asset('public/assets/images/benefits-1.png') }}" alt="Изображение" class="rounded">
                        </div>
                        <div class="flex gap-10 border-t py-4 border-white transition  ">
                            <p class="text-xl">13 лет
                            в чайной индустрии</p>
                            <p class="text-xl">За это время набрали колоссальный опыт и экспертизу - знаем о чае всё и даже больше</p>
                            <img src="{{ asset('public/assets/images/benefits-2.png') }}" alt="Изображение" class="rounded">
                        </div>
                        <div class="flex gap-10 border-t border-b py-4 border-white transition  ">
                            <p class="text-xl">Система
                            лояльности
                            </p>
                            <p class="text-xl">С каждой покупки возвращаем 5% бонусами, которыми можно оплатить до 50% от любой покупки в чайных
                                1000 бонусов при регистрации
                            </p>
                            <img src="{{ asset('public/assets/images/benefits-3.png') }}" alt="Изображение" class="rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
