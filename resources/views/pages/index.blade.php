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
                    <img src="{{ asset('assets/images/banner.png') }}" alt="Изображение" class="margin-left-auto">
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
                        <div class="flex flex-col gap-10">
                            <h3 class="text-xl">Адрес:</h3>
                            <p class="text-xs">ул. Профсоюзная, 34 цокольный этаж</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
