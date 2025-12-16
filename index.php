<?php
$page_title = "Milka | Салон красоты";
include __DIR__ . '/includes/header.php';
?>

<section class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden">
    <div class="absolute top-0 right-0 w-1/3 h-full bg-rose-50/50 hidden lg:block z-0"></div>
    <div class="absolute top-1/2 left-10 w-64 h-64 rounded-full bg-amber-100/30 blur-3xl -translate-y-1/2 z-0"></div>
    <div class="container mx-auto px-6 relative z-10 grid lg:grid-cols-12 gap-12 items-center">
        <div class="lg:col-span-7 text-center lg:text-left pt-10 lg:pt-0">
            <div class="reveal">
                <span class="inline-block py-1 px-3 border border-stone-200 rounded-full text-[10px] uppercase tracking-[0.3em] text-stone-500 mb-6 bg-white/50 backdrop-blur-sm">Est. 2019</span>
            </div>
            <h1 class="text-6xl md:text-8xl lg:text-9xl font-serif leading-[0.9] text-stone-900 mb-8 reveal" style="transition-delay: 100ms;">
                Искусство <br>
                <span class="italic text-stone-400 font-light ml-4 lg:ml-12">быть</span> <br>
                собой
            </h1>
            <p class="text-stone-500 text-lg md:text-xl font-light max-w-lg mx-auto lg:mx-0 mb-12 leading-relaxed reveal" style="transition-delay: 200ms;">
                Пространство интеллектуальной красоты, где каждая деталь создана для вашего комфорта и уверенности.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-6 reveal" style="transition-delay: 300ms;">
                <button id="hero-book-btn" class="px-10 py-5 bg-stone-900 text-white text-xs uppercase tracking-[0.2em] hover:bg-rose-400 transition duration-500 rounded-full">
                    Записаться онлайн
                </button>
                <a href="<?php echo $base_url; ?>/services/" class="text-xs uppercase tracking-[0.2em] border-b border-stone-300 pb-1 hover:border-stone-900 hover:text-stone-900 text-stone-500 transition duration-300">
                    Наши услуги
                </a>
            </div>
        </div>
        <div class="lg:col-span-5 relative mt-10 lg:mt-0 reveal" style="transition-delay: 400ms;">
            <div class="relative z-10 img-zoom-container rounded-t-[10rem] rounded-b-[2rem] overflow-hidden shadow-2xl aspect-[3/4] group">
                <img src="<?php echo $base_url; ?>/assets/images/main.jpg" alt="Muse Salon Interior" class="w-full h-full object-cover img-zoom">
                <div class="absolute bottom-8 right-8 w-24 h-24 bg-white/90 backdrop-blur-md rounded-full flex items-center justify-center animate-[spin_10s_linear_infinite]">
                    <svg viewBox="0 0 100 100" width="80" height="80" class="fill-stone-800">
                        <defs>
                            <path id="circle" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" />
                        </defs>
                        <text font-size="11.5" font-family="Manrope" font-weight="bold" letter-spacing="2">
                            <textPath xlink:href="#circle">
                                MILKA BEAUTY STUDIO •
                            </textPath>
                        </text>
                    </svg>
                </div>
            </div>
            <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-rose-200 rounded-full blur-3xl -z-10 opacity-60"></div>
        </div>
    </div>
</section>

<div class="py-8 bg-stone-900 text-white overflow-hidden border-y border-stone-800">
    <div class="marquee-container">
        <div class="marquee-content text-xl md:text-2xl font-serif italic tracking-wider opacity-80">
            <span class="mx-8">Маникюр & Педикюр</span> • <span class="mx-8">Перманентный макияж</span> • <span class="mx-8">Ресницы</span> • <span class="mx-8">Брови</span> • <span class="mx-8">Визаж</span>
            <span class="mx-8">Маникюр & Педикюр</span> • <span class="mx-8">Перманентный макияж</span> • <span class="mx-8">Ресницы</span> • <span class="mx-8">Брови</span> • <span class="mx-8">Визаж</span>
        </div>
    </div>
    <noscript>
        <div class="text-center text-xl md:text-2xl font-serif italic tracking-wider opacity-80 py-2">
            <span class="mx-4">Маникюр & Педикюр</span> • <span class="mx-4">Перманентный макияж</span> • <span class="mx-4">Ресницы</span> • <span class="mx-4">Брови</span> • <span class="mx-8">Визаж</span>
        </div>
    </noscript>
</div>

<section id="about" class="py-24 md:py-32 bg-[#faf9f6] overflow-hidden">
    <div class="container mx-auto px-12">
        <div class="flex flex-col lg:flex-row items-start gap-16 lg:gap-24">
            <div class="lg:w-5/12 relative reveal">
            <img src="<?php echo $base_url; ?>/assets/images/glavniya-okno.jpg" alt="Atmosphere" class="w-full h-auto rounded-[2rem] shadow-xl brightness-95">
                <div class="absolute bottom-10 right-0 lg:right-[-2.5rem] bg-white p-4 md:p-6 shadow-lg rounded-lg max-w-[200px] hidden lg:block">
                    <p class="font-serif italic text-lg md:text-xl leading-tight text-stone-800">"Красота — это обещание счастья"</p>
                </div>
            </div>

            <div class="lg:w-7/12 pt-10 reveal">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-serif text-stone-900 mb-10 leading-snug">
                    Философия <br>
                    <span class="italic text-rose-400 ml-0 md:ml-16">естественности</span>
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-10">
                    <div>
                        <p class="text-stone-600 font-light leading-relaxed mb-6">
                            В мире шума и скоростей мы создали оазис тишины. Milka — это не просто студия красоты, это место силы, где вы можете выдохнуть и посвятить время самому главному человеку в вашей жизни — себе.
                        </p>
                        <p class="text-stone-600 font-light leading-relaxed">
                            Мы отказались от шаблонных решений. Каждый визит начинается с диалога, чтобы результат превзошел ваши ожидания, но остался верен вашей природе.
                        </p>
                    </div>
                    <div class="flex flex-col justify-start md:justify-between mt-8 md:mt-0">
                        <ul class="space-y-6">
                            <li class="flex items-start gap-4 group">
                                <span class="w-12 h-[1px] bg-stone-400 mt-3 group-hover:bg-rose-400 transition duration-300"></span>
                                <div>
                                    <h4 class="font-serif text-xl text-stone-800 mb-1">Премиум материалы</h4>
                                    <p class="text-xs text-stone-500 uppercase tracking-wider">Dyson, Davines, Kevin Murphy</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4 group">
                                <span class="w-12 h-[1px] bg-stone-400 mt-3 group-hover:bg-rose-400 transition duration-300"></span>
                                <div>
                                    <h4 class="font-serif text-xl text-stone-800 mb-1">Экспертность</h4>
                                    <p class="text-xs text-stone-500 uppercase tracking-wider">Топ-мастера с опытом 5+ лет</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4 group">
                                <span class="w-12 h-[1px] bg-stone-400 mt-3 group-hover:bg-rose-400 transition duration-300"></span>
                                <div>
                                    <h4 class="font-serif text-xl text-stone-800 mb-1">Сервис 360°</h4>
                                    <p class="text-xs text-stone-500 uppercase tracking-wider">Парковка, кофе-бар, консьерж</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-end mb-20 reveal">
            <div>            
                <h2 class="text-5xl md:text-6xl font-serif text-stone-900">Услуги</h2>
            </div>
            <a href="<?php echo $base_url; ?>/services/" class="hidden md:inline-flex items-center text-stone-500 hover:text-rose-400 transition duration-300 text-xs uppercase tracking-widest border-b border-transparent hover:border-rose-400 pb-1 mt-6 md:mt-0">
                Смотреть все услуги
            </a>
        </div>
        <div class="mb-20 reveal">
            <h3 class="text-3xl font-serif italic text-stone-400 mb-8 border-b border-stone-100 pb-4">Перманентный макияж</h3>
            <div class="grid md:grid-cols-2 gap-x-16 gap-y-8">
                <a href="<?php echo $base_url; ?>/services/haircut.php" class="flex justify-between items-baseline group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <span class="text-xl text-stone-800 group-hover:text-rose-400 transition duration-300 relative z-10">Брови</span>
                        <div class="h-[1px] bg-stone-200 w-full mt-2 group-hover:w-0 transition-all duration-500"></div>
                    </div>
                    <span class="text-stone-500 font-serif italic text-lg">8000 ₽</span>
                </a>

                <a href="<?php echo $base_url; ?>/services/complex-coloring.php" class="flex justify-between items-baseline group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <span class="text-xl text-stone-800 group-hover:text-rose-400 transition duration-300">Межресничный лайнер</span>
                        <div class="h-[1px] bg-stone-200 w-full mt-2 group-hover:w-0 transition-all duration-500"></div>
                    </div>
                    <span class="text-stone-500 font-serif italic text-lg">5000 ₽</span>
                </a>
                <a href="<?php echo $base_url; ?>/services/coloring.php" class="flex justify-between items-baseline group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <span class="text-xl text-stone-800 group-hover:text-rose-400 transition duration-300">Губы</span>
                        <div class="h-[1px] bg-stone-200 w-full mt-2 group-hover:w-0 transition-all duration-500"></div>
                    </div>
                    <span class="text-stone-500 font-serif italic text-lg">8000 ₽</span>
                </a>
                <a href="<?php echo $base_url; ?>/services/hair-care.php" class="flex justify-between items-baseline group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <span class="text-xl text-stone-800 group-hover:text-rose-400 transition duration-300">Удаление ремувером</span>
                        <div class="h-[1px] bg-stone-200 w-full mt-2 group-hover:w-0 transition-all duration-500"></div>
                    </div>
                    <span class="text-stone-500 font-serif italic text-lg">1500 ₽</span>
                </a>
                <a href="<?php echo $base_url; ?>/services/hair-care.php" class="flex justify-between items-baseline group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <span class="text-xl text-stone-800 group-hover:text-rose-400 transition duration-300">Коррекция</span>
                        <div class="h-[1px] bg-stone-200 w-full mt-2 group-hover:w-0 transition-all duration-500"></div>
                    </div>
                    <span class="text-stone-500 font-serif italic text-lg">от 2500 ₽</span>
                </a>
                <a href="<?php echo $base_url; ?>/services/hair-care.php" class="flex justify-between items-baseline group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <span class="text-xl text-stone-800 group-hover:text-rose-400 transition duration-300">Рефреш</span>
                        <div class="h-[1px] bg-stone-200 w-full mt-2 group-hover:w-0 transition-all duration-500"></div>
                    </div>
                    <span class="text-stone-500 font-serif italic text-lg">от 4000 ₽</span>
                </a>
            </div>
        </div>
        <div class="mb-20 reveal">
            <h3 class="text-3xl font-serif italic text-stone-400 mb-8 border-b border-stone-100 pb-4">Ногтевой сервис</h3>
            <div class="grid md:grid-cols-2 gap-x-16 gap-y-8">
                <a href="<?php echo $base_url; ?>/services/manicure.php" class="flex justify-between items-baseline group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <span class="text-xl text-stone-800 group-hover:text-rose-400 transition duration-300">Маникюр</span>
                        <div class="h-[1px] bg-stone-200 w-full mt-2 group-hover:w-0 transition-all duration-500"></div>
                    </div>
                    <span class="text-stone-500 font-serif italic text-lg">от 900 ₽</span>
                </a>
                <a href="<?php echo $base_url; ?>/services/pedicure.php" class="flex justify-between items-baseline group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <span class="text-xl text-stone-800 group-hover:text-rose-400 transition duration-300">Педикюр</span>
                        <div class="h-[1px] bg-stone-200 w-full mt-2 group-hover:w-0 transition-all duration-500"></div>
                    </div>
                    <span class="text-stone-500 font-serif italic text-lg">от 2100 ₽</span>
                </a>
            </div>
        </div>
        <div class="mb-20 reveal">
            <h3 class="text-3xl font-serif italic text-stone-400 mb-8 border-b border-stone-100 pb-4">Брови и ресницы</h3>
            <div class="grid md:grid-cols-2 gap-x-16 gap-y-8">
                <a href="<?php echo $base_url; ?>/services/manicure.php" class="flex justify-between items-baseline group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <span class="text-xl text-stone-800 group-hover:text-rose-400 transition duration-300">Оформление бровей</span>
                        <div class="h-[1px] bg-stone-200 w-full mt-2 group-hover:w-0 transition-all duration-500"></div>
                    </div>
                    <span class="text-stone-500 font-serif italic text-lg">от 900 ₽</span>
                </a>
                <a href="<?php echo $base_url; ?>/services/pedicure.php" class="flex justify-between items-baseline group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <span class="text-xl text-stone-800 group-hover:text-rose-400 transition duration-300">Оформление ресниц</span>
                        <div class="h-[1px] bg-stone-200 w-full mt-2 group-hover:w-0 transition-all duration-500"></div>
                    </div>
                    <span class="text-stone-500 font-serif italic text-lg">от 900 ₽</span>
                </a>
            </div>
        </div>
        <div class="text-center mt-16 reveal">
            <button id="services-book-btn" class="px-10 py-4 border border-stone-800 text-stone-800 hover:bg-stone-800 hover:text-white transition duration-300 rounded-full uppercase text-xs tracking-[0.2em]">
                Записаться на процедуру
            </button>
        </div>
    </div>
</section>

<section id="promo" class="py-24 bg-rose-50/30 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-96 h-96 bg-rose-100 rounded-full blur-3xl opacity-50 -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-amber-50 rounded-full blur-3xl opacity-50 translate-x-1/3 translate-y-1/3"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16 reveal">
            <h2 class="text-4xl md:text-5xl font-serif text-stone-900">Особые привилегии</h2>
            <p class="text-stone-500 mt-4 max-w-lg mx-auto font-light">Эксклюзивные предложения для наших любимых гостей</p>
        </div>
        <div class="grid lg:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition duration-500 group reveal cursor-pointer">
                <div class="text-5xl font-serif text-rose-300 mb-6 opacity-50 group-hover:opacity-100 transition">-20%</div>
                <h3 class="text-2xl font-serif text-stone-800 mb-2">Welcome Визит</h3>
                <p class="text-stone-500 font-light text-sm leading-relaxed mb-6">
                    Скидка на первое посещение любого мастера. Познакомьтесь с уровнем нашего сервиса.
                </p>
                <div class="w-12 h-12 rounded-full border border-stone-200 flex items-center justify-center group-hover:bg-stone-800 group-hover:border-stone-800 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-5 h-5 text-stone-400 group-hover:text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </div>
            </div>
            <div class="bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition duration-500 group reveal cursor-pointer" style="transition-delay: 100ms;">
                <div class="text-5xl font-serif text-amber-300 mb-6 opacity-50 group-hover:opacity-100 transition">-15%</div>
                <h3 class="text-2xl font-serif text-stone-800 mb-2">День Рождения</h3>
                <p class="text-stone-500 font-light text-sm leading-relaxed mb-6">
                    Дарим скидку 3 дня до и после вашего праздника. Шампанское в подарок каждому имениннику.
                </p>
                <div class="w-12 h-12 rounded-full border border-stone-200 flex items-center justify-center group-hover:bg-stone-800 group-hover:border-stone-800 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-5 h-5 text-stone-400 group-hover:text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </div>
            </div>
            <div class="bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-xl transition duration-500 group reveal cursor-pointer" style="transition-delay: 200ms;">
                <div class="text-5xl font-serif text-stone-300 mb-6 opacity-50 group-hover:opacity-100 transition">SET</div>
                <h3 class="text-2xl font-serif text-stone-800 mb-2">Маникюр + Педикюр</h3>
                <p class="text-stone-500 font-light text-sm leading-relaxed mb-6">
                    Комплексная услуга в 4 руки за 2 часа. Экономьте время, не экономя на качестве.
                </p>
                <div class="w-12 h-12 rounded-full border border-stone-200 flex items-center justify-center group-hover:bg-stone-800 group-hover:border-stone-800 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-5 h-5 text-stone-400 group-hover:text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="team" class="py-24 bg-[#faf9f6]">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 reveal">
            <h2 class="text-5xl md:text-6xl font-serif text-stone-900">Мастера</h2>
            <p class="text-stone-500 text-sm mt-4 md:mt-0 max-w-xs text-right">Люди, которые создают магию каждый день</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="group cursor-pointer reveal">
                <div class="relative overflow-hidden rounded-[1rem] mb-4 aspect-[3/4]">
                    <img src="<?php echo $base_url; ?>/assets/images/gallery-1.jpg" alt="Elena" class="w-full h-full object-cover transition duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-stone-900/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end p-6">
                        <span class="text-white text-xs uppercase tracking-widest border border-white/30 px-3 py-1 rounded-full backdrop-blur-sm">Топ-стилист</span>
                    </div>
                </div>
                <h3 class="text-2xl font-serif text-stone-900">Елена Волкова</h3>
                <p class="text-rose-400 text-xs uppercase tracking-wider mt-1 opacity-0 group-hover:opacity-100 transition transform -translate-y-2 group-hover:translate-y-0">Арт-директор</p>
            </div>
            <div class="group cursor-pointer reveal" style="transition-delay: 100ms;">
                <div class="relative overflow-hidden rounded-[1rem] mb-4 aspect-[3/4]">
                    <img src="<?php echo $base_url; ?>/assets/images/gallery-1.jpg" alt="Marina" class="w-full h-full object-cover transition duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-stone-900/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end p-6">
                        <span class="text-white text-xs uppercase tracking-widest border border-white/30 px-3 py-1 rounded-full backdrop-blur-sm">Врач</span>
                    </div>
                </div>
                <h3 class="text-2xl font-serif text-stone-900">Марина Ким</h3>
                <p class="text-rose-400 text-xs uppercase tracking-wider mt-1 opacity-0 group-hover:opacity-100 transition transform -translate-y-2 group-hover:translate-y-0">Косметолог</p>
            </div>
            <div class="group cursor-pointer reveal" style="transition-delay: 200ms;">
                <div class="relative overflow-hidden rounded-[1rem] mb-4 aspect-[3/4]">
                    <img src="<?php echo $base_url; ?>/assets/images/gallery-1.jpg" alt="Anna" class="w-full h-full object-cover transition duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-stone-900/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end p-6">
                        <span class="text-white text-xs uppercase tracking-widest border border-white/30 px-3 py-1 rounded-full backdrop-blur-sm">Nail-эксперт</span>
                    </div>
                </div>
                <h3 class="text-2xl font-serif text-stone-900">Анна Соколова</h3>
                <p class="text-rose-400 text-xs uppercase tracking-wider mt-1 opacity-0 group-hover:opacity-100 transition transform -translate-y-2 group-hover:translate-y-0">Мастер маникюра</p>
            </div>
            <div class="group cursor-pointer reveal" style="transition-delay: 300ms;">
                <div class="relative overflow-hidden rounded-[1rem] mb-4 aspect-[3/4]">
                    <img src="<?php echo $base_url; ?>/assets/images/gallery-1.jpg" alt="Daria" class="w-full h-full object-cover transition duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-stone-900/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end p-6">
                        <span class="text-white text-xs uppercase tracking-widest border border-white/30 px-3 py-1 rounded-full backdrop-blur-sm">Визажист</span>
                    </div>
                </div>
                <h3 class="text-2xl font-serif text-stone-900">Дарья Иванова</h3>
                <p class="text-rose-400 text-xs uppercase tracking-wider mt-1 opacity-0 group-hover:opacity-100 transition transform -translate-y-2 group-hover:translate-y-0">Make-up Artist</p>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-5xl font-serif text-stone-900 mb-12 text-center reveal">Бьюти-журнал</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <article class="group cursor-pointer reveal">
                <div class="overflow-hidden rounded-[1.5rem] mb-6 aspect-[4/3]">
                    <img src="<?php echo $base_url; ?>/assets/images/gallery-1.jpg" alt="Makeup" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                </div>
                <div class="flex items-center space-x-3 text-xs text-stone-400 uppercase tracking-widest mb-3">
                    <span class="text-rose-400">Тренды</span>
                    <span>•</span>
                    <span>12 Марта</span>
                </div>
                <h3 class="text-2xl font-serif text-stone-900 group-hover:text-rose-400 transition duration-300 leading-tight">
                    5 главных трендов в макияже этой весны
                </h3>
            </article>
            <article class="group cursor-pointer reveal" style="transition-delay: 100ms;">
                <div class="overflow-hidden rounded-[1.5rem] mb-6 aspect-[4/3]">
                    <img src="<?php echo $base_url; ?>/assets/images/gallery-1.jpg" alt="Skin" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                </div>
                <div class="flex items-center space-x-3 text-xs text-stone-400 uppercase tracking-widest mb-3">
                    <span class="text-rose-400">Уход</span>
                    <span>•</span>
                    <span>10 Марта</span>
                </div>
                <h3 class="text-2xl font-serif text-stone-900 group-hover:text-rose-400 transition duration-300 leading-tight">
                    Домашний уход: ошибки, которые портят кожу
                </h3>
            </article>
            <article class="group cursor-pointer reveal" style="transition-delay: 200ms;">
                <div class="overflow-hidden rounded-[1.5rem] mb-6 aspect-[4/3]">
                    <img src="<?php echo $base_url; ?>/assets/images/gallery-1.jpg" alt="Hair" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                </div>
                <div class="flex items-center space-x-3 text-xs text-stone-400 uppercase tracking-widest mb-3">
                    <span class="text-rose-400">Волосы</span>
                    <span>•</span>
                    <span>05 Марта</span>
                </div>
                <h3 class="text-2xl font-serif text-stone-900 group-hover:text-rose-400 transition duration-300 leading-tight">
                    Секреты идеального блонда без вреда
                </h3>
            </article>
        </div>
    </div>
</section>

<!-- Booking Modal -->
<div id="booking-modal" class="fixed inset-0 z-[100] hidden">
    <div id="modal-backdrop" class="absolute inset-0 bg-stone-900/60 backdrop-blur-sm transition-opacity"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#faf9f6] w-full max-w-lg p-10 rounded-[2rem] shadow-2xl">
        <div class="flex justify-between items-center mb-8">
            <h3 class="text-3xl font-serif text-stone-900">Запись на визит</h3>
            <button id="modal-close-btn" class="text-stone-400 hover:text-rose-500 transition transform hover:rotate-90 duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <form class="space-y-6" id="booking-form">
            <div>
                <label for="name" class="sr-only">Ваше имя</label>
                <input type="text" id="name" placeholder="Ваше имя" required class="w-full bg-white border-none px-6 py-4 rounded-xl focus:ring-2 focus:ring-rose-200 outline-none transition placeholder:text-stone-400 shadow-sm text-stone-800">
            </div>
            <div>
                <label for="phone" class="sr-only">Телефон</label>
                <input type="tel" id="phone" placeholder="Телефон" required class="w-full bg-white border-none px-6 py-4 rounded-xl focus:ring-2 focus:ring-rose-200 outline-none transition placeholder:text-stone-400 shadow-sm text-stone-800">
            </div>
            <div>
                <label for="service" class="sr-only">Выберите услугу</label>
                <select id="service" class="w-full bg-white border-none px-6 py-4 rounded-xl focus:ring-2 focus:ring-rose-200 outline-none transition text-stone-600 shadow-sm cursor-pointer">
                    <option>Парикмахерский зал</option>
                    <option>Маникюр / Педикюр</option>
                    <option>Косметология</option>
                    <option>Макияж</option>
                </select>
            </div>
            <button type="submit" class="w-full bg-stone-900 text-white py-4 rounded-xl uppercase tracking-widest text-xs font-bold hover:bg-rose-400 transition duration-300 mt-4">
                Отправить заявку
            </button>
        </form>
        <p class="text-center text-stone-400 text-[10px] mt-6 uppercase tracking-widest">Нажимая кнопку, вы соглашаетесь с обработкой персональных данных</p>
    </div>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>