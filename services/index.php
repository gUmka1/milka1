<?php
$page_title = "Услуги | Milka | Салон красоты";
include_once __DIR__ . '/../includes/header.php';
?>

<!-- Banner Section -->
<section class="relative min-h-[60vh] flex items-center justify-center pt-20 overflow-hidden bg-stone-900">
    <div class="absolute inset-0 z-0">
        <img src="<?php echo $base_url; ?>/assets/images/hero.jpg" alt="Наши услуги" class="w-full h-full object-cover opacity-60">
    </div>
    <div class="container mx-auto px-6 relative z-10 text-center">
        <div class="max-w-3xl mx-auto">
            <span class="inline-block py-1 px-3 border border-stone-200 rounded-full text-[10px] uppercase tracking-[0.3em] text-stone-200 mb-6 bg-black/30 backdrop-blur-sm">Наше меню</span>
            <h1 class="text-5xl md:text-7xl font-serif leading-[0.9] text-white mb-6">Услуги</h1>
            <p class="text-stone-200 text-lg md:text-xl font-light max-w-2xl mx-auto leading-relaxed">
                Комплексный подход к вашей красоте и уверенности
            </p>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service Category 1 -->
            <div class="bg-[#faf9f6] rounded-[2rem] overflow-hidden shadow-sm hover:shadow-xl transition duration-500 group reveal">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="<?php echo $base_url; ?>/assets/images/about.jpg" alt="Парикмахерские услуги" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-serif text-stone-900 mb-4">Парикмахерское искусство</h3>
                    <p class="text-stone-600 font-light mb-6">
                        Индивидуальные стрижки, окрашивание и уход за волосами от топ-мастеров.
                    </p>
                    <a href="<?php echo $base_url; ?>/#services" class="inline-flex items-center text-stone-800 group-hover:text-rose-400 transition duration-300 text-xs uppercase tracking-widest border-b border-transparent group-hover:border-rose-400 pb-1">
                        Смотреть услуги
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Service Category 2 -->
            <div class="bg-[#faf9f6] rounded-[2rem] overflow-hidden shadow-sm hover:shadow-xl transition duration-500 group reveal" style="transition-delay: 100ms;">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="<?php echo $base_url; ?>/assets/images/about.jpg" alt="Ногтевой сервис" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-serif text-stone-900 mb-4">Ногтевой сервис</h3>
                    <p class="text-stone-600 font-light mb-6">
                        Профессиональный маникюр, педикюр и дизайн ногтей с использованием премиальных материалов.
                    </p>
                    <a href="<?php echo $base_url; ?>/#services" class="inline-flex items-center text-stone-800 group-hover:text-rose-400 transition duration-300 text-xs uppercase tracking-widest border-b border-transparent group-hover:border-rose-400 pb-1">
                        Смотреть услуги
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Service Category 3 -->
            <div class="bg-[#faf9f6] rounded-[2rem] overflow-hidden shadow-sm hover:shadow-xl transition duration-500 group reveal" style="transition-delay: 200ms;">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="<?php echo $base_url; ?>/assets/images/about.jpg" alt="Косметология" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-serif text-stone-900 mb-4">Косметология</h3>
                    <p class="text-stone-600 font-light mb-6">
                        Эстетические процедуры для лица и тела от врачей-косметологов с медицинским образованием.
                    </p>
                    <a href="<?php echo $base_url; ?>/#services" class="inline-flex items-center text-stone-800 group-hover:text-rose-400 transition duration-300 text-xs uppercase tracking-widest border-b border-transparent group-hover:border-rose-400 pb-1">
                        Смотреть услуги
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Services -->
<section class="py-24 bg-[#faf9f6]">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16 reveal">
            <h2 class="text-4xl md:text-5xl font-serif text-stone-900 mb-4">Подробно о каждой услуге</h2>
            <p class="text-stone-500 max-w-2xl mx-auto">Выберите интересующую вас процедуру для получения подробной информации</p>
        </div>
        
        <!-- Hair Services -->
        <div class="mb-20 reveal">
            <h3 class="text-3xl font-serif italic text-stone-400 mb-8 border-b border-stone-100 pb-4">Парикмахерское искусство</h3>
            <div class="grid md:grid-cols-2 gap-x-16 gap-y-8">
                <a href="<?php echo $base_url; ?>/services/haircut.php" class="flex justify-between items-baseline group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <span class="text-xl text-stone-800 group-hover:text-rose-400 transition duration-300 relative z-10">Стрижка женская</span>
                        <div class="h-[1px] bg-stone-200 w-full mt-2 group-hover:w-0 transition-all duration-500"></div>
                    </div>
                    <span class="text-stone-500 font-serif italic text-lg">от 2500 ₽</span>
                </a>
                <a href="<?php echo $base_url; ?>/services/coloring.php" class="flex justify-between items-baseline group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <span class="text-xl text-stone-800 group-hover:text-rose-400 transition duration-300">Окрашивание в один тон</span>
                        <div class="h-[1px] bg-stone-200 w-full mt-2 group-hover:w-0 transition-all duration-500"></div>
                    </div>
                    <span class="text-stone-500 font-serif italic text-lg">от 4500 ₽</span>
                </a>
                <a href="<?php echo $base_url; ?>/services/complex-coloring.php" class="flex justify-between items-baseline group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <span class="text-xl text-stone-800 group-hover:text-rose-400 transition duration-300">Сложное окрашивание (Airtouch, Balayage)</span>
                        <div class="h-[1px] bg-stone-200 w-full mt-2 group-hover:w-0 transition-all duration-500"></div>
                    </div>
                    <span class="text-stone-500 font-serif italic text-lg">от 8000 ₽</span>
                </a>
                <a href="<?php echo $base_url; ?>/services/hair-care.php" class="flex justify-between items-baseline group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <span class="text-xl text-stone-800 group-hover:text-rose-400 transition duration-300">Уход "Абсолютное счастье" Lebel</span>
                        <div class="h-[1px] bg-stone-200 w-full mt-2 group-hover:w-0 transition-all duration-500"></div>
                    </div>
                    <span class="text-stone-500 font-serif italic text-lg">3500 ₽</span>
                </a>
            </div>
        </div>
        
        <!-- Nail Services -->
        <div class="mb-20 reveal">
            <h3 class="text-3xl font-serif italic text-stone-400 mb-8 border-b border-stone-100 pb-4">Ногтевой сервис</h3>
            <div class="grid md:grid-cols-2 gap-x-16 gap-y-8">
                <a href="<?php echo $base_url; ?>/services/manicure.php" class="flex justify-between items-baseline group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <span class="text-xl text-stone-800 group-hover:text-rose-400 transition duration-300">Маникюр комплекс</span>
                        <div class="h-[1px] bg-stone-200 w-full mt-2 group-hover:w-0 transition-all duration-500"></div>
                    </div>
                    <span class="text-stone-500 font-serif italic text-lg">2200 ₽</span>
                </a>
                <a href="<?php echo $base_url; ?>/services/pedicure.php" class="flex justify-between items-baseline group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <span class="text-xl text-stone-800 group-hover:text-rose-400 transition duration-300">Педикюр SMART</span>
                        <div class="h-[1px] bg-stone-200 w-full mt-2 group-hover:w-0 transition-all duration-500"></div>
                    </div>
                    <span class="text-stone-500 font-serif italic text-lg">3000 ₽</span>
                </a>
                <a href="<?php echo $base_url; ?>/services/nail-extensions.php" class="flex justify-between items-baseline group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <span class="text-xl text-stone-800 group-hover:text-rose-400 transition duration-300">Наращивание ногтей</span>
                        <div class="h-[1px] bg-stone-200 w-full mt-2 group-hover:w-0 transition-all duration-500"></div>
                    </div>
                    <span class="text-stone-500 font-serif italic text-lg">4000 ₽</span>
                </a>
                <a href="<?php echo $base_url; ?>/services/spa-hands.php" class="flex justify-between items-baseline group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <span class="text-xl text-stone-800 group-hover:text-rose-400 transition duration-300">SPA-уход для рук</span>
                        <div class="h-[1px] bg-stone-200 w-full mt-2 group-hover:w-0 transition-all duration-500"></div>
                    </div>
                    <span class="text-stone-500 font-serif italic text-lg">1500 ₽</span>
                </a>
            </div>
        </div>
        
        <div class="text-center mt-16 reveal">
            <button onclick="openModal()" class="px-10 py-4 bg-stone-900 text-white hover:bg-rose-400 transition duration-300 rounded-full uppercase text-xs tracking-[0.2em]">
                Записаться на процедуру
            </button>
        </div>
    </div>
</section>

<?php
include_once __DIR__ . '/../includes/footer.php';
?>