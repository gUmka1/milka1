<?php
session_start();

// Include config to get APP_URL
require_once __DIR__ . '/../config/config.php';

// Use APP_URL from config
$base_url = APP_URL;
?>
<!DOCTYPE html>
<html lang="ru" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : "Milka | Салон красоты"; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&family=Manrope:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/styles/global.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'rose-50': '#fff1f2',
                        'rose-100': '#ffe4e6',
                        'rose-200': '#fecdd3',
                        'rose-300': '#fda4af',
                        'rose-400': '#fb7185',
                        'rose-500': '#f43f5e',
                        'stone-50': '#fafaf9',
                        'stone-100': '#f5f5f4',
                        'stone-200': '#e7e5e4',
                        'stone-300': '#d6d3d1',
                        'stone-400': '#a8a29e',
                        'stone-500': '#78716c',
                        'stone-600': '#57534e',
                        'stone-700': '#44403c',
                        'stone-800': '#292524',
                        'stone-900': '#1c1917',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-[#faf9f6] text-stone-800 antialiased selection:bg-rose-200 selection:text-stone-900">
    <!-- Header -->
    <header class="fixed w-full top-0 z-40 transition-all duration-500 bg-[#faf9f6]" id="navbar">
        <div class="absolute inset-0 bg-[#faf9f6] backdrop-blur-md opacity-100 transition-opacity duration-500" id="navbar-bg"></div>
        <div class="container mx-auto px-6 py-6 flex justify-between items-center relative z-10">
            <a href="<?php echo $base_url; ?>/" class="text-3xl lg:text-4xl font-serif italic font-bold text-stone-800 tracking-tight z-50 relative group">
                Milka<span class="text-rose-400 group-hover:text-stone-800 transition-colors duration-300">.</span>
            </a>
            <nav class="hidden lg:flex items-center space-x-12">
                <a href="<?php echo $base_url; ?>/#about" class="text-xs uppercase tracking-[0.2em] text-stone-600 hover:text-rose-400 transition duration-300">О нас</a>
                <a href="<?php echo $base_url; ?>/services/" class="text-xs uppercase tracking-[0.2em] text-stone-600 hover:text-rose-400 transition duration-300">Услуги</a>
                <a href="<?php echo $base_url; ?>/#promo" class="text-xs uppercase tracking-[0.2em] text-stone-600 hover:text-rose-400 transition duration-300">Акции</a>
                <a href="<?php echo $base_url; ?>/#team" class="text-xs uppercase tracking-[0.2em] text-stone-600 hover:text-rose-400 transition duration-300">Команда</a>
                <button id="header-book-btn" class="ml-4 px-6 py-2 border border-stone-300 hover:border-rose-400 text-stone-800 hover:text-rose-500 transition duration-500 text-xs uppercase tracking-widest rounded-full">
                    Записаться
                </button>
            </nav>
            <button id="open-menu" class="lg:hidden text-stone-800 focus:outline-none z-50">
                <div class="space-y-2">
                    <span class="block w-8 h-0.5 bg-stone-800"></span>
                    <span class="block w-8 h-0.5 bg-stone-800"></span>
                </div>
            </button>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div id="component-mobile-menu"></div>