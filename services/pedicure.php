<?php
$page_title = "Педикюр SMART | Muse | Салон красоты";
include_once '../includes/header.php';
?>

<!-- Banner Section -->
<section class="relative min-h-[60vh] flex items-center justify-center pt-20 overflow-hidden bg-stone-900">
    <div class="absolute inset-0 z-0">
        <img src="<?php echo $base_url; ?>/assets/images/hero.jpg" alt="Педикюр SMART" class="w-full h-full object-cover opacity-60">
    </div>
    <div class="container mx-auto px-6 relative z-10 text-center">
        <div class="max-w-3xl mx-auto">
            <span class="inline-block py-1 px-3 border border-stone-200 rounded-full text-[10px] uppercase tracking-[0.3em] text-stone-200 mb-6 bg-black/30 backdrop-blur-sm">Ногтевой сервис</span>
            <h1 class="text-5xl md:text-7xl font-serif leading-[0.9] text-white mb-6">Педикюр SMART</h1>
            <p class="text-stone-200 text-lg md:text-xl font-light max-w-2xl mx-auto leading-relaxed">
                Современный подход к уходу за стопами с использованием инновационных технологий
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
                    <img src="<?php echo $base_url; ?>/assets/images/about.jpg" alt="Процесс педикюра" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-rose-200 rounded-full blur-3xl -z-10 opacity-60"></div>
            </div>
            <div class="reveal">
                <h2 class="text-4xl md:text-5xl font-serif text-stone-900 mb-8">Интеллектуальный уход за стопами</h2>
                <p class="text-stone-600 font-light leading-relaxed mb-6">
                    Наш SMART-педикюр сочетает в себе классические методики ухода с современными технологиями. Процедура включает диагностику состояния кожи и ногтей, профессиональную обработку, увлажнение и защиту.
                </p>
                <p class="text-stone-600 font-light leading-relaxed mb-6">
                    Мы используем только стерильные инструменты и качественные косметические средства. Все процедуры выполняются в соответствии с медицинскими стандартами.
                </p>
                <p class="text-stone-600 font-light leading-relaxed">
                    Наши мастера имеют медицинское образование и регулярно проходят обучение новым методикам ухода за стопами.
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
            <p class="text-stone-500 max-w-2xl mx-auto">Выберите подходящий вариант для вашего уровня ухода</p>
        </div>
        
        <div class="max-w-3xl mx-auto bg-white rounded-[2rem] shadow-sm p-8 mb-16 reveal">
            <div class="flex justify-between items-center py-6 border-b border-stone-100">
                <div>
                    <h3 class="text-xl text-stone-800">Педикюр классический</h3>
                    <p class="text-stone-500 text-sm mt-1">Обработка стопы + придание формы ногтям</p>
                </div>
                <span class="text-2xl font-serif text-rose-400">2000 ₽</span>
            </div>
            
            <div class="flex justify-between items-center py-6 border-b border-stone-100">
                <div>
                    <h3 class="text-xl text-stone-800">Педикюр SMART</h3>
                    <p class="text-stone-500 text-sm mt-1">Классический педикюр + пилинг + маска</p>
                </div>
                <span class="text-2xl font-serif text-rose-400">3000 ₽</span>
            </div>
            
            <div class="flex justify-between items-center py-6 border-b border-stone-100">
                <div>
                    <h3 class="text-xl text-stone-800">Педикюр + лак</h3>
                    <p class="text-stone-500 text-sm mt-1">SMART-педикюр + покрытие лаком</p>
                </div>
                <span class="text-2xl font-serif text-rose-400">3500 ₽</span>
            </div>
            
            <div class="flex justify-between items-center py-6">
                <div>
                    <h3 class="text-xl text-stone-800">Педикюр + гель-лак</h3>
                    <p class="text-stone-500 text-sm mt-1">SMART-педикюр + покрытие Shellac</p>
                </div>
                <span class="text-2xl font-serif text-rose-400">4500 ₽</span>
            </div>
        </div>
        
        <div class="text-center reveal">
            <button onclick="openModal()" class="px-10 py-4 bg-stone-900 text-white hover:bg-rose-400 transition duration-300 rounded-full uppercase text-xs tracking-[0.2em]">
                Записаться на педикюр
            </button>
        </div>
    </div>
</section>

<!-- Specialist Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16 reveal">
            <h2 class="text-4xl md:text-5xl font-serif text-stone-900 mb-4">Ваш мастер</h2>
            <p class="text-stone-500 max-w-2xl mx-auto">Эксперт в области ухода за стопами</p>
        </div>
        
        <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-12 items-center">
            <div class="relative reveal">
                <div class="relative z-10 rounded-[2rem] overflow-hidden aspect-[3/4]">
                    <img src="<?php echo $base_url; ?>/assets/images/gallery-1.jpg" alt="Анна Соколова" class="w-full h-full object-cover">
                </div>
                <div class="absolute -top-6 -left-6 w-32 h-32 bg-amber-100 rounded-full blur-3xl -z-10 opacity-60"></div>
            </div>
            
            <div class="reveal">
                <span class="text-rose-400 text-xs uppercase tracking-widest">Nail-эксперт</span>
                <h3 class="text-3xl font-serif text-stone-900 mt-2 mb-4">Анна Соколова</h3>
                <p class="text-stone-600 font-light leading-relaxed mb-6">
                    Мастер маникюра и педикюра с 8-летним опытом работы. Специализируется на классическом и аппаратном педикюре, а также на лечении различных проблем стоп.
                </p>
                
                <div class="space-y-4 mb-8">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-rose-400 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span>Сертифицированный мастер CND, OPI, Shellac</span>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-rose-400 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span>Медицинское образование по специальности "Сестринское дело"</span>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-rose-400 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span>Регулярное участие в семинарах по лечебному педикюру</span>
                    </div>
                </div>
                
                <button onclick="openModal()" class="px-8 py-3 border border-stone-800 text-stone-800 hover:bg-stone-800 hover:text-white transition duration-300 rounded-full uppercase text-xs tracking-widest">
                    Записаться к Анне
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Expert Block -->
<section class="py-24 bg-stone-900 text-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-96 h-96 bg-rose-500 rounded-full blur-3xl opacity-10 translate-x-1/3 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-amber-500 rounded-full blur-3xl opacity-10 translate-x-1/3 translate-y-1/3"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <span class="text-rose-400 uppercase tracking-[0.2em] text-xs font-bold block mb-4">Экспертный совет</span>
            <h2 class="text-4xl md:text-5xl font-serif mb-6">Как ухаживать за стопами дома</h2>
            <p class="text-stone-400 font-light">Практические рекомендации от наших экспертов</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="bg-stone-800/50 p-8 rounded-[2rem] backdrop-blur-sm reveal">
                <div class="text-5xl font-serif text-rose-400 mb-6">1</div>
                <h3 class="text-xl font-serif text-white mb-4">Регулярный уход</h3>
                <p class="text-stone-400 text-sm leading-relaxed">
                    Увлажняйте стопы каждый день после душа, уделяя особое внимание пяткам и своду стопы.
                </p>
            </div>
            
            <div class="bg-stone-800/50 p-8 rounded-[2rem] backdrop-blur-sm reveal" style="transition-delay: 100ms;">
                <div class="text-5xl font-serif text-rose-400 mb-6">2</div>
                <h3 class="text-xl font-serif text-white mb-4">Правильная обувь</h3>
                <p class="text-stone-400 text-sm leading-relaxed">
                    Носите удобную обувь с невысоким каблуком и хорошей амортизацией. Избегайте тесной обуви.
                </p>
            </div>
            
            <div class="bg-stone-800/50 p-8 rounded-[2rem] backdrop-blur-sm reveal" style="transition-delay: 200ms;">
                <div class="text-5xl font-serif text-rose-400 mb-6">3</div>
                <h3 class="text-xl font-serif text-white mb-4">Гигиена</h3>
                <p class="text-stone-400 text-sm leading-relaxed">
                    Мойте ноги ежедневно, тщательно высушивайте между пальцами и меняйте носки ежедневно.
                </p>
            </div>
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
<?php
include_once '../includes/footer.php';
?>