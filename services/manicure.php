<?php
$page_title = "Маникюр | Muse | Салон красоты";
include_once '../includes/header.php';
?>

<!-- Banner Section -->
<section class="relative min-h-[60vh] flex items-center justify-center pt-20 overflow-hidden bg-stone-900">
    <div class="absolute inset-0 z-0">
        <img src="<?php echo $base_url; ?>/assets/images/hero.jpg" alt="Маникюр" class="w-full h-full object-cover opacity-60">
    </div>
    <div class="container mx-auto px-6 relative z-10 text-center">
        <div class="max-w-3xl mx-auto">
            <span class="inline-block py-1 px-3 border border-stone-200 rounded-full text-[10px] uppercase tracking-[0.3em] text-stone-200 mb-6 bg-black/30 backdrop-blur-sm">Ногтевой сервис</span>
            <h1 class="text-5xl md:text-7xl font-serif leading-[0.9] text-white mb-6">Маникюр</h1>
            <p class="text-stone-200 text-lg md:text-xl font-light max-w-2xl mx-auto leading-relaxed">
                Профессиональный уход за руками и ногтями для безупречного внешнего вида
            </p>
        </div>
    </div>
</section>

<!-- Description Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="relative reveal">
                <div class="relative z-10 img-zoom-container rounded-[2rem] overflow-hidden shadow-xl aspect-[4/5]">
                    <img src="<?php echo $base_url; ?>/assets/images/manik.jpg" alt="Процесс маникюра" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-rose-200 rounded-full blur-3xl -z-10 opacity-60"></div>
            </div>
            <div class="reveal">
                <h2 class="text-4xl md:text-5xl font-serif text-stone-900 mb-8">Искусство ухода за руками</h2>
                <p class="text-stone-600 font-light leading-relaxed mb-6">
                    Маникюр — это не просто уходовая процедура, а настоящее искусство создания безупречного внешнего вида. Наши мастера используют только качественные материалы и современные техники для достижения идеального результата.
                </p>
                <p class="text-stone-600 font-light leading-relaxed mb-6">
                    Процедура начинается с тщательной очистки и дезинфекции рук, после чего мастер подбирает оптимальную форму и длину ногтей в соответствии с анатомией пальцев и предпочтениями клиента.
                </p>
                <p class="text-stone-600 font-light leading-relaxed">
                    Мы предлагаем различные виды маникюра: классический, европейский и аппаратный, каждый из которых имеет свои особенности и преимущества. После процедуры наносится укрепляющее покрытие или лак по выбору клиента.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Price Section -->
<section class="py-24 bg-[#faf9f6]">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16 reveal">
            <h2 class="text-4xl md:text-5xl font-serif text-stone-900 mb-4">Прайс</h2>
            <p class="text-stone-500 max-w-2xl mx-auto">Цены зависят от сложности и выбранных материалов</p>
        </div>
        
        <div class="max-w-3xl mx-auto bg-white rounded-[2rem] shadow-sm p-8 mb-16 reveal">
            <div class="flex justify-between items-center py-6 border-b border-stone-100">
                <div>
                    <h3 class="text-xl text-stone-800">Классический маникюр</h3>
                    <p class="text-stone-500 text-sm mt-1">С обработкой кутикулы</p>
                </div>
                <span class="text-2xl font-serif text-rose-400">900 ₽</span>
            </div>
            
            <div class="flex justify-between items-center py-6 border-b border-stone-100">
                <div>
                    <h3 class="text-xl text-stone-800">Маникюр с покрытием</h3>
                    <p class="text-stone-500 text-sm mt-1">Без повреждения кожи</p>
                </div>
                <span class="text-2xl font-serif text-rose-400">2100 ₽</span>
            </div>
            
            <div class="flex justify-between items-center py-6 border-b border-stone-100">
                <div>
                    <h3 class="text-xl text-stone-800">Маникюр с покрытием френч</h3>
                    <p class="text-stone-500 text-sm mt-1">Без использования инструментов</p>
                </div>
                <span class="text-2xl font-serif text-rose-400">2500 ₽</span>
            </div>
            <div class="flex justify-between items-center py-6 border-b border-stone-100">
                <div>
                    <h3 class="text-xl text-stone-800">Наращивание на верхние формы</h3>
                    <p class="text-stone-500 text-sm mt-1">Без использования инструментов</p>
                </div>
                <span class="text-2xl font-serif text-rose-400">2500 ₽</span>
            </div>            
            <div class="flex justify-between items-center py-6">
                <div>
                    <h3 class="text-xl text-stone-800">Ремонт </h3>
                    <p class="text-stone-500 text-sm mt-1">1 ноготь</p>
                </div>
                <span class="text-2xl font-serif text-rose-400">100 ₽</span>
            </div>
                        <div class="flex justify-between items-center py-6">
                <div>
                    <h3 class="text-xl text-stone-800">Дизайн </h3>
                    <p class="text-stone-500 text-sm mt-1">рыба-текст</p>
                </div>
                <span class="text-2xl font-serif text-rose-400">100₽-300₽</span>
            </div>
        </div>
        
        <div class="text-center">
            <button id="service-book-btn" class="px-8 py-4 bg-stone-800 hover:bg-rose-500 text-white hover:text-white transition duration-500 rounded-full font-medium uppercase tracking-wider text-sm">
                Записаться онлайн
            </button>
        </div>
    </div>
</section>

<!-- Specialist Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16 reveal">
            <h2 class="text-4xl md:text-5xl font-serif text-stone-900 mb-4">Ваш специалист</h2>
            <p class="text-stone-500 max-w-2xl mx-auto">Опытные мастера с международной сертификацией</p>
        </div>
        
        <div class="max-w-4xl mx-auto flex justify-center">
            <div class="bg-[#faf9f6] rounded-[2rem] overflow-hidden shadow-sm reveal w-full md:w-1/2">
                <div class="aspect-square relative">
                    <img src="<?php echo $base_url; ?>/assets/images/alena.jpg" alt="Алёна Легочева" class="w-full h-full object-cover">
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-serif text-stone-900 mb-2">Алёна Легочева</h3>
                    <p class="text-rose-400 mb-4">Мастер ногтевого сервиса</p>
                    <p class="text-stone-600 text-sm leading-relaxed mb-6">
                        Более 8 лет опыта в индустрии красоты. Специализируется на маникюре и создании изысканных дизайнов ногтей.
                    </p>
                    <button id="specialist-book-btn" class="w-full py-3 border border-stone-300 hover:border-rose-400 text-stone-800 hover:text-rose-500 transition duration-500 rounded-full text-sm uppercase tracking-widest">
                        Записаться к специалисту
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Expert Advice Section -->
<section class="py-24 bg-stone-900 text-white relative overflow-hidden rounded-b-[3rem]">
    <!-- Decorative circles -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-rose-500 rounded-full blur-3xl opacity-10 translate-x-1/3 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-amber-500 rounded-full blur-3xl opacity-10 translate-x-1/3 translate-y-1/3"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <span class="text-rose-400 uppercase tracking-[0.2em] text-xs font-bold block mb-4">Экспертный совет</span>
            <h2 class="text-4xl md:text-5xl font-serif mb-6">Как подготовиться к маникюру</h2>
            <p class="text-stone-400 font-light">Полезные рекомендации от наших экспертов</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="bg-stone-800/50 p-8 rounded-[2rem] backdrop-blur-sm reveal">
                <div class="text-5xl font-serif text-rose-400 mb-6">1</div>
                <h3 class="text-xl font-serif text-white mb-4">Подготовка рук</h3>
                <p class="text-stone-400 text-sm leading-relaxed">
                    За день до процедуры сделайте питательную ванночку для рук и нанесите увлажняющий крем. Это поможет сделать кожу более мягкой и податливой.
                </p>
            </div>

            <div class="bg-stone-800/50 p-8 rounded-[2rem] backdrop-blur-sm reveal" style="transition-delay: 100ms;">
                <div class="text-5xl font-serif text-rose-400 mb-6">2</div>
                <h3 class="text-xl font-serif text-white mb-4">Избегайте декоративных средств</h3>
                <p class="text-stone-400 text-sm leading-relaxed">
                    Не пользуйтесь лаками и декоративными покрытиями перед посещением. Мастеру проще работать с чистыми ногтями.
                </p>
            </div>

            <div class="bg-stone-800/50 p-8 rounded-[2rem] backdrop-blur-sm reveal" style="transition-delay: 200ms;">
                <div class="text-5xl font-serif text-rose-400 mb-6">3</div>
                <h3 class="text-xl font-serif text-white mb-4">Обсудите ожидания</h3>
                <p class="text-stone-400 text-sm leading-relaxed">
                    Расскажите мастеру о своих предпочтениях, аллергиях и любых проблемах с кожей или ногтями. Это поможет добиться лучшего результата.
                </p>
            </div>
        </div>
    </div>
</section>

<?php
include_once '../includes/footer.php';
?>

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
