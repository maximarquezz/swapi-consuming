<?php

define('BASE_PATH', realpath(__DIR__));
define('BASE_URL', '/swapi');

$current_uri = $_SERVER['REQUEST_URI'];
$is_base_url = $current_uri === BASE_URL . '/';
$is_base_url_path = strpos($current_uri, BASE_URL . '/') === 0;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Wars | API Data Hub</title>
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/public/assets/icons/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="public/css/fonts.css">
    <script src="https://kit.fontawesome.com/340d67c615.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/output.css">
</head>

<body class="text-white bg-black overflow-x-hidden">
    <header>
        <nav>

            <div class="text-white flex justify-between p-5
            [@media(max-width:630px)]:flex-wrap [@media(max-width:630px)]:border-b-2 [@media(max-width:630px)]:border-white">
                <ul class="flex text-lg
                [@media(max-width:630px)]:hidden">
                    <li class="mx-2 [@media(max-width:670px)]:mx-1"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li class="mx-2 [@media(max-width:670px)]:mx-1"><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li class="mx-2 [@media(max-width:670px)]:mx-1"><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
                    <li class="mx-2 [@media(max-width:670px)]:mx-1"><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                    <div class="mx-2 [@media(max-width:670px)]:mx-1 w-[2px] h-7 bg-white rounded-full"></div>
                    <a target="_blank" href="https://swapi.dev/"><img src="<?php echo BASE_URL; ?>/public/assets/images/swapi.png" alt="swapi logo" width="20px" height="20px" class="mt-[4.4px] ml-[5px]"></a>
                </ul>

                <div>
                    <a href="<?php echo BASE_URL; ?>"><img class="[@media(max-width:630px)]:w-[150px]" src="<?php echo BASE_URL; ?>/public/assets/images/logo.png" alt="Star Wars logo" width="200px"></a>
                </div>

                <ul class="flex
                [@media(max-width:670px)]:gap-3 [@media(max-width:670px)]:flex-col [@media(max-width:670px)]:ml-10  
                [&>li]:mx-3 [&>li]:text-md [&>li]:font-bold">
                    <li><a href="<?php echo BASE_URL; ?>"><i class="fa-solid fa-home mr-2"></i>HOME</a></li>
                    <li><a target="_blank" href="https://github.com/maximarquezz/swapi-consuming"><i class="fa-brands fa-github mr-2"></i>REPO</a></li>
                </ul>
            </div>

            <div class="w-full">
                <ul class="flex items-center justify-center bg-black border-b-2 border-white font-bold
                [@media(max-width:870px)]:text-sm
                [@media(max-width:630px)]:flex-wrap [@media(max-width:630px)]:items-start [@media(max-width:630px)]:w-full [@media(max-width:630px)]:mx-0 [@media(max-width:630px)]:border-b-0">
                    <li class="mx-4 p-2 text-gray-500
                    [@media(max-width:630px)]:mx-0 "><a href="<?php echo BASE_URL; ?>/people"  class="transition-all duration-[0.25] ease-in hover:duration-[0.25] hover:ease-out hover:text-red-500 hover:[text-shadow:_0_0_20px_rgb(255_46_46)]">PEOPLE</a></li>
                    <li class="mx-4 p-2 text-gray-500
                    [@media(max-width:630px)]:mx-0 "><a href="<?php echo BASE_URL; ?>/films" class="transition-all duration-[0.25] ease-in hover:duration-[0.25] hover:ease-out hover:text-blue-400 hover:[text-shadow:_0_0_20px_rgb(0_8_255)]">FILMS</a></li>
                    <li class="mx-4 p-2 text-gray-500
                    [@media(max-width:630px)]:mx-0 [@media(max-width:630px)]:break-all"><a href="<?php echo BASE_URL; ?>/planets" class="transition-all duration-[0.25] ease-in hover:duration-[0.25] hover:ease-out  hover:text-green-400 hover:[text-shadow:_0_0_20px_rgb(0_255_17)]">PLANETS</a></li>
                    <li class="mx-4 p-2 text-gray-500
                    [@media(max-width:630px)]:mx-0 "><a href="<?php echo BASE_URL; ?>/species" class="transition-all duration-[0.25] ease-in hover:duration-[0.25] hover:ease-out hover:text-purple-500 hover:[text-shadow:_0_0_20px_rgb(0_8_255)]">SPECIES</a></li>
                    <li class="mx-4 p-2 text-gray-500
                    [@media(max-width:630px)]:mx-0 "><a href="<?php echo BASE_URL; ?>/vehicles" class="transition-all duration-[0.25] ease-in hover:duration-[0.25] hover:ease-out hover:text-yellow-500 hover:[text-shadow:_0_0_20px_rgb(255_225_0)]">VEHICLES</a></li>
                    <li class="mx-4 p-2 text-gray-500
                    [@media(max-width:630px)]:mx-0 "><a href="<?php echo BASE_URL; ?>/starships" class="transition-all duration-[0.25] ease-in hover:duration-[0.25] hover:ease-out  hover:text-blue-400 hover:[text-shadow:_0_0_20px_rgb(0_8_255)]">STARSHIPS</a></li>
                </ul>
            </div>

        </nav>
    </header>

    <?php if ($is_base_url_path && $is_base_url): ?>
    <main class="flex justify-evenly flex-col items-center">
        <section id="heroSlider" class="relative w-[90%] h-[calc(100vh-168px)] border-x-2 border-neutral-900 flex flex-col flex-wrap items-center justify-evenly snap-x snap-mandatory overflow-x-auto
        [@media(max-width:870px)]:w-full [@media(max-width:870px)]:border-[0px]
        [@media(max-width:630px)]:hidden"
        style="background:linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5)), url('public/assets/images/hero.png'); background-repeat: no-repeat; background-position: center; background-size: cover">

        <div id="slider" class="sticky top-0 left-0 w-full h-full flex justify-between items-center">
            <button id="moveLeft" class="mx-2 z-10"><i class="fa-solid fa-greater-than scale-x-[-1] p-3 bg-neutral-500 rounded-full"></i></button>
            <button id="moveRight" class="mx-2 z-10"><i class="fa-solid fa-greater-than p-3 bg-neutral-500 rounded-full"></i></button>
        </div>

        <div class="w-full h-full flex justify-evenly items-center snap-center
        [@media(max-width:870px)]:justify-center [@media(max-width:870px)]:gap-5
        [&>article]:w-[25%] [&>article]:h-[90%] [&>article]:border-2 [&>article]:border-white [&>article]:relative [&>article]:rounded-bl-md [&>article]:rounded-tr-xl">
            <article class="relative h-64 bg-cover bg-center shadow-2xl shadow-[rgba(255,255,255,0.2)] border-2 border-white group hover:border-[#ff0000]">
                <a href="<?php echo BASE_URL; ?>/people" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out bg-[url(<?php echo BASE_URL; ?>/public/assets/images/anakinskywalker.jpg)] hover:opacity-0"></a>
                <a href="<?php echo BASE_URL; ?>/people" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out opacity-0 hover:opacity-100 bg-[url(<?php echo BASE_URL; ?>/public/assets/images/darthvader.jpg)]"></a>
                <a href="<?php echo BASE_URL; ?>/people" class="transition-all duration-[0.2s] p-1 bg-white text-black absolute bottom-0 left-0 w-full rounded-bl-md rounded-tr-xl text-lg text-center tracking-wide font-bold group-hover:bg-[#ff0000] group-hover:text-white">
                    PEOPLE
                </a>
            </article>

            <article class="relative h-64 bg-cover bg-center shadow-2xl shadow-[rgba(255,255,255,0.2)] border-2 border-white group hover:border-[#0015ff]">
                <a href="<?php echo BASE_URL; ?>/films" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out bg-[url(<?php echo BASE_URL; ?>/public/assets/images/revengeofthesith.webp)] hover:opacity-0"></a>
                <a href="<?php echo BASE_URL; ?>/films" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out opacity-0 hover:opacity-100 bg-[url(<?php echo BASE_URL; ?>/public/assets/images/empirestrikesback.webp)]"></a>
                <a href="<?php echo BASE_URL; ?>/films" class="transition-all duration-[0.2s] p-1 bg-white text-black absolute bottom-0 left-0 w-full rounded-bl-md rounded-tr-xl text-lg text-center tracking-wide font-bold group-hover:bg-[#0015ff] group-hover:text-white">
                    FILMS
                </a>
            </article>
            <article class="relative h-64 bg-cover bg-center shadow-2xl shadow-[rgba(255,255,255,0.2)] border-2 border-white group hover:border-[#00db1d]">
                <a href="<?php echo BASE_URL; ?>/planets" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out bg-[url(<?php echo BASE_URL; ?>/public/assets/images/tatooine.jpeg)] hover:opacity-0"></a>
                <a href="<?php echo BASE_URL; ?>/planets" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out opacity-0 hover:opacity-100 bg-[url(<?php echo BASE_URL; ?>/public/assets/images/dagobah.jpg)]"></a>
                <a href="<?php echo BASE_URL; ?>/planets" class="transition-all duration-[0.2s] p-1 bg-white text-black absolute bottom-0 left-0 w-full rounded-bl-md rounded-tr-xl text-lg text-center tracking-wide font-bold group-hover:bg-[#00db1d] group-hover:text-white">
                    PLANETS
                </a>
            </article>
        </div>    
            
        <div class="w-full h-full flex justify-evenly items-center snap-center
        [@media(max-width:870px)]:justify-center [@media(max-width:870px)]:gap-5
        [&>article]:w-[25%] [&>article]:h-[90%] [&>article]:border-2 [&>article]:border-white [&>article]:relative [&>article]:rounded-bl-xl [&>article]:rounded-tr-xl">
            <article class="relative h-64 bg-cover bg-center shadow-2xl shadow-[rgba(255,255,255,0.2)] border-2 border-white group hover:border-[#b402cc]">
                <a href="<?php echo BASE_URL; ?>/species" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out bg-[url(<?php echo BASE_URL; ?>/public/assets/images/wookie.jpg)] hover:opacity-0"></a>
                <a href="<?php echo BASE_URL; ?>/species" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out opacity-0 hover:opacity-100 bg-[url(<?php echo BASE_URL; ?>/public/assets/images/kaminoan.jpeg)]"></a>
                <a href="<?php echo BASE_URL; ?>/species" class="transition-all duration-[0.2s] p-1 bg-white text-black absolute bottom-0 left-0 w-full rounded-bl-md rounded-tr-xl text-lg text-center tracking-wide font-bold group-hover:bg-[#b402cc] group-hover:text-white">
                    SPECIES
                </a>
            </article>
            
            <article class="relative h-64 bg-cover bg-center shadow-2xl shadow-[rgba(255,255,255,0.2)] border-2 border-white group hover:border-[#ff0]">
                <a href="<?php echo BASE_URL; ?>/vehicles" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out bg-[url(<?php echo BASE_URL; ?>/public/assets/images/walker.jpg)] hover:opacity-0"></a>
                <a href="<?php echo BASE_URL; ?>/vehicles" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out opacity-0 hover:opacity-100 bg-[url(<?php echo BASE_URL; ?>/public/assets/images/landspeeder.jpg)]"></a>
                <a href="<?php echo BASE_URL; ?>/vehicles" class="transition-all duration-[0.2s] p-1 bg-white text-black absolute bottom-0 left-0 w-full rounded-bl-md rounded-tr-xl text-lg text-center tracking-wide font-bold group-hover:bg-[#ff0]">
                    VEHICLES
                </a>
            </article>
            
            <article class="relative h-64 bg-cover bg-center shadow-2xl shadow-[rgba(255,255,255,0.2)] border-2 border-white group hover:border-[#0015ff]">
                <a href="<?php echo BASE_URL; ?>/starships" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out bg-[url(<?php echo BASE_URL; ?>/public/assets/images/starship1.jpg)] hover:opacity-0"></a>
                <a href="<?php echo BASE_URL; ?>/starships" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out opacity-0 hover:opacity-100 bg-[url(<?php echo BASE_URL; ?>/public/assets/images/starship2.jpg)]"></a>
                <a href="<?php echo BASE_URL; ?>/starships" class="transition-all duration-[0.2s] p-1 bg-white text-black absolute bottom-0 left-0 w-full rounded-bl-md rounded-tr-xl text-lg text-center tracking-wide font-bold group-hover:bg-[#0015ff] group-hover:text-white">
                    STARSHIPS
                </a>
            </article>
        </div>
        </section>

        <section class="bg-black border-t-2 border-white relative overflow-hidden h-screen w-screen flex flex-col gap-5 justify-center items-center"
        style="background: url(public/assets/images/tryitbg.png); background-repeat: no-repeat; background-size: cover; background-position: center;">
            <h2 class="text-6xl [text-shadow:_0_0_10px_rgb(0_0_0_/_100%)] font-bold text-center">DISCOVER THE GALAXY</h2>
            <div class="bg-neutral-500 text-2xl font-bold rounded-tr-xl rounded-bl-xl p-2"><pre><code><?php echo $_SERVER['HTTP_HOST'] ?>/swapi/people</code></pre></div>
            <a href="people" class="font-bold tracking-wide bg-gray-800 rounded-md py-2 px-4 hover:bg-gray-500 duration-300">Try it yourself!</a>
        </section>

        <section class="w-full h-screen border-t-2 border-white flex flex-col items-center justify-evenly
        [@media(max-width:950px)]:flex-row [@media(max-width:950px)]:flex-wrap [@media(max-width:950px)]:h-fit [@media(max-width:950px)]:gap-5 [@media(max-width:950px)]:p-5"
        style="background:linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5)), url('public/assets/images/tryitbg2.jpeg'); background-repeat: no-repeat; background-position: center; background-size: cover">
            <h3 class="font-bold text-6xl p-3 border-2 border-neutral-900 rounded-tr-xl rounded-bl-xl
            [@media(max-width:950px)]:text-5xl">ABOUT THIS SITE</h3>
            <div class="flex justify-evenly items-center gap-10 w-[90%] p-5 border-y-2 border-neutral-900
            [@media(max-width:950px)]:w-full [@media(max-width:950px)]:flex-wrap
            [&>article]:bg-neutral-900 [&>article]:rounded-tr-xl [&>article]:rounded-bl-xl [&>article]:border-b-2 [&>article]:border-white">
                <article class="[@media(max-width:950px)]:w-full">
                    <h4 class="font-bold p-3 text-2xl text-center bg-white text-black rounded-tr-xl">What is SWAPI?</h4>
                    <p class="p-3 text-xl
                    [@media(max-width:950px)]:text-md">SWAPI is a public API that provides data about the Star Wars universe, including characters, planets, starships, and more. This API allows access to detailed information about the Star Wars saga programmatically.</p>
                </article>
                <article class="[@media(max-width:950px)]:w-full">
                    <h4 class="font-bold p-3 text-2xl text-center bg-white text-black rounded-tr-xl">How does this site work?</h4>
                    <p class="p-3 text-xl
                    [@media(max-width:950px)]:text-md">This site uses the SWAPI to display data about the Star Wars universe. Data is retrieved through API requests and presented interactively and visually on the site, allowing fans to explore information easily.</p>
                </article>
                <article class="[@media(max-width:950px)]:w-full">
                    <h4 class="font-bold p-3 text-2xl text-center bg-white text-black rounded-tr-xl">What can I find on this site?</h4>
                    <p class="p-3 text-xl
                    [@media(max-width:950px)]:text-md">On this site, you can explore details about characters, planets, starships, and species from the Star Wars universe. You can search for specific information, view lists of related items, and learn more about each aspect of the saga.</p>
                </article>
            </div>

            <div class="flex gap-5 text-xl p-3 border-2 border-neutral-900 rounded-tr-xl rounded-bl-xl">
                <a href="https://swapi.dev/" class="border-white border-2 bg-white py-3 px-5 rounded-tr-xl rounded-bl-xl text-black font-bold hover:bg-black hover:text-white transition-[0.3s]">Go to SWAPI</a>
            </div>
        </section>
    </main>
    <?php endif ?>

    <?php
    require_once 'lib/router.php';
    require_once 'routes/web.php';
    ?>

    <footer class="bg-black border-t-2 border-white">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <p class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="<?php echo BASE_URL ?>/public/assets/icons/icon.png" class="h-8" alt="Star Wars Logo"/>
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Star Wars | API Data Hub</span>
                </p>
                <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0">
                    <li>
                        <a href="#" class="font-bold me-4 md:me-6 hover:[text-shadow:_0_0_20px_rgb(255_255_255_/70%)] hover:text-white transition-[0.3s]">API</a>
                    </li>
                    <li>
                        <a href="#" class="font-bold me-4 md:me-6 hover:[text-shadow:_0_0_20px_rgb(255_255_255_/70%)] hover:text-white transition-[0.3s]">Repository</a>
                    </li>
                    <li>
                        <a href="#" class="font-bold me-4 md:me-6 hover:[text-shadow:_0_0_20px_rgb(255_255_255_/70%)] hover:text-white transition-[0.3s]">Docs</a>
                    </li>
                    <li>
                        <a href="#" class="font-bold hover:[text-shadow:_0_0_20px_rgb(255_255_255_/70%)] hover:text-white transition-[0.3s]">Portfolio</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-neutral-900 border-t-2">
            <p class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 API Data Hub. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="public/js/main.js"></script>
</body>

</html>

<style>
#heroSlider {
    overflow-x: scroll;
    white-space: nowrap;
    scrollbar-width: none;

}

#heroSlider::-webkit-scrollbar {
    display: none;
}

</style>