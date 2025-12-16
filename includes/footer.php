<?php
// Include config to ensure $base_url is available
require_once __DIR__ . '/../config/config.php';

// Use APP_URL from config
$base_url = APP_URL;
?>
<footer class="bg-stone-900 text-stone-400 pt-24 pb-12 rounded-t-[3rem] mt-12">
    <div class="container mx-auto px-6">

        <div class="grid lg:grid-cols-12 gap-12 mb-20 border-b border-stone-800 pb-12">

            <div class="lg:col-span-5">
                <a href="<?php echo $base_url; ?>/" class="text-5xl md:text-7xl font-serif italic font-bold text-white block mb-8">
                    Milka<span class="text-rose-400">.</span>
                </a>
                <p class="text-lg font-light text-stone-500 max-w-md">
                    Создаем эстетику, которая вдохновляет. Ваш проводник в мир красоты и гармонии.
                </p>
            </div>

            <div class="lg:col-span-3 lg:col-start-7">
                <h4 class="text-white font-serif text-2xl mb-6">Навигация</h4>
                <ul class="space-y-4 text-sm uppercase tracking-wider">
                    <li><a href="<?php echo $base_url; ?>/#about" class="hover:text-rose-400 transition">О нас</a></li>
                    <li><a href="<?php echo $base_url; ?>/services/" class="hover:text-rose-400 transition">Услуги</a></li>
                    <li><a href="<?php echo $base_url; ?>/#promo" class="hover:text-rose-400 transition">Акции</a></li>
                    <li><a href="<?php echo $base_url; ?>/#team" class="hover:text-rose-400 transition">Команда</a></li>
                </ul>
            </div>

            <div class="lg:col-span-3">
                <h4 class="text-white font-serif text-2xl mb-6">Контакты</h4>
                <ul class="space-y-4 font-light">
                    <li>Томск, пр-кт Фрунзе, 40</li>
                    <li><a href="tel:+79991234567" class="hover:text-white transition">+7 (999) 123-45-67</a></li>
                    <li>Ежедневно 10:00 – 22:00</li>
                </ul>
            </div>

        </div>

        <div class="flex flex-col md:flex-row justify-between items-center text-xs uppercase tracking-widest text-stone-600">
            <p>&copy; 2025 Milka Beauty Salon</p>
            <div class="flex space-x-8 mt-4 md:mt-0">
                <a href="#" class="hover:text-stone-400">Политика</a>
                <a href="#" class="hover:text-stone-400">Оферта</a>
            </div>
        </div>

    </div>
</footer>

<script src="<?php echo $base_url; ?>/scripts/main.js"></script>
</body>
</html>