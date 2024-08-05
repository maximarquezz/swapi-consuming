<?php

define('BASE_PATH', realpath(__DIR__));
define('BASE_URL', '/swapi');

$currentUri = $_SERVER['REQUEST_URI'];
$isBaseUrl = $currentUri === BASE_URL . '/';
$isBaseUrlPath = strpos($currentUri, BASE_URL . '/') === 0;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Wars | API Data Hub</title>
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/public/assets/icons/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="public/css/fonts.css">
    <script src="https://kit.fontawesome.com/340d67c615.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="text-white bg-black">
    <header>
        <nav>

            <div class="text-white flex justify-between p-5">
                <ul class="flex text-lg
                [&>li]:mx-2 [&>div]:mx-2">
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                    <div class="w-[2px] h-7 bg-white rounded-full"></div>
                    <a target="_blank" href="https://swapi.dev/"><img src="<?php echo BASE_URL; ?>/public/assets/images/swapi.png" alt="swapi logo" width="20px" height="20px" class="mt-[4.4px] ml-[5px]"></a>
                </ul>

                <div>
                    <img src="<?php echo BASE_URL; ?>/public/assets/images/logo.png" alt="Star Wars logo" width="200px">
                </div>

                <ul class="flex
                [&>li]:mx-3 [&>li]:text-md [&>li]:font-bold">
                    <li><a href="<?php echo BASE_URL; ?>"><i class="fa-solid fa-home mr-2"></i>HOME</a></li>
                    <li><a target="_blank" href="https://github.com/maximarquezz/swapi-consuming"><i class="fa-brands fa-github mr-2"></i>REPO</a></li>
                </ul>
            </div>

            <div class="w-full">
                <ul class="flex items-center justify-center bg-black border-b-2 border-white font-bold
                [&>li]:mx-4 [&>li]:p-2 [&>li]:text-gray-500">
                    <li><a href="<?php echo BASE_URL; ?>/people"  class="transition-all duration-[0.25] ease-in hover:duration-[0.25] hover:ease-out hover:text-blue-400 hover:[text-shadow:_0_0_20px_rgb(0_8_255)]">PEOPLE</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/films" class="transition-all duration-[0.25] ease-in hover:duration-[0.25] hover:ease-out hover:text-green-400 hover:[text-shadow:_0_0_20px_rgb(0_255_17)]">FILMS</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/planets" class="transition-all duration-[0.25] ease-in hover:duration-[0.25] hover:ease-out hover:text-blue-400 hover:[text-shadow:_0_0_20px_rgb(0_8_255)]">PLANETS</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/starships" class="transition-all duration-[0.25] ease-in hover:duration-[0.25] hover:ease-out hover:text-red-500 hover:[text-shadow:_0_0_20px_rgb(255_46_46)]">STARSHIPS</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/vehicles" class="transition-all duration-[0.25] ease-in hover:duration-[0.25] hover:ease-out hover:text-yellow-500 hover:[text-shadow:_0_0_20px_rgb(255_225_0)]">VEHICLES</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/species" class="transition-all duration-[0.25] ease-in hover:duration-[0.25] hover:ease-out hover:text-purple-500 hover:[text-shadow:_0_0_20px_rgb(0_8_255)]">SPECIES</a></li>
                </ul>
            </div>

        </nav>
    </header>

    <?php if ($isBaseUrlPath && $isBaseUrl): ?>
    <main class="flex justify-evenly flex-col items-center">
        <section class=" relative w-[90%] h-[calc(100vh-168px)] border-x-2 border-neutral-900 flex flex-col flex-wrap items-center justify-evenly snap-x snap-mandatory overflow-x-auto"
        style="background:linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5)), url('public/assets/images/hero.png'); background-repeat: no-repeat; background-position: center; background-size: cover">

        <div class="sticky top-0 left-0 w-full h-full flex justify-between items-center">
            <a class="mx-2 z-10" href=""><i class="fa-solid fa-greater-than scale-x-[-1] p-3 bg-neutral-500 rounded-full"></i></a>
            <a class="mx-2 z-10" href=""><i class="fa-solid fa-greater-than p-3 bg-neutral-500 rounded-full"></i></a>
        </div>

        <div class="w-full h-full flex justify-evenly items-center snap-center
        [&>article]:w-[25%] [&>article]:h-[90%] [&>article]:m-3 [&>article]:border-2 [&>article]:border-white [&>article]:relative [&>article]:rounded-bl-xl [&>article]:rounded-tr-xl">
            <article class="relative h-64 bg-cover bg-center shadow-2xl shadow-[rgba(255,255,255,0.2)] border-2 border-white group hover:border-[#ff0000]">
                <a href="#" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out bg-[url(<?php echo BASE_URL; ?>/public/assets/images/anakinskywalker.jpg)] hover:opacity-0"></a>
                <a href="#" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out opacity-0 hover:opacity-100 bg-[url(<?php echo BASE_URL; ?>/public/assets/images/darthvader.jpg)]"></a>
                <a href="#" class="transition-all duration-[0.2s] p-1 bg-white text-black absolute bottom-0 left-0 w-full rounded-bl-md rounded-tr-xl text-lg text-center tracking-wide font-bold group-hover:bg-[#ff0000] group-hover:text-white">
                    PEOPLE
                </a>
            </article>

            <article class="relative h-64 bg-cover bg-center shadow-2xl shadow-[rgba(255,255,255,0.2)] border-2 border-white group hover:border-[#0015ff]">
                <a href="#" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out bg-[url(<?php echo BASE_URL; ?>/public/assets/images/revengeofthesith.webp)] hover:opacity-0"></a>
                <a href="#" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out opacity-0 hover:opacity-100 bg-[url(<?php echo BASE_URL; ?>/public/assets/images/empirestrikesback.webp)]"></a>
                <a href="#" class="transition-all duration-[0.2s] p-1 bg-white text-black absolute bottom-0 left-0 w-full rounded-bl-md rounded-tr-xl text-lg text-center tracking-wide font-bold group-hover:bg-[#0015ff] group-hover:text-white">
                    FILMS
                </a>
            </article>
            <article class="relative h-64 bg-cover bg-center shadow-2xl shadow-[rgba(255,255,255,0.2)] border-2 border-white group hover:border-[#00db1d]">
                <a href="#" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out bg-[url(<?php echo BASE_URL; ?>/public/assets/images/tatooine.jpeg)] hover:opacity-0"></a>
                <a href="#" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out opacity-0 hover:opacity-100 bg-[url(<?php echo BASE_URL; ?>/public/assets/images/dagobah.jpg)]"></a>
                <a href="#" class="transition-all duration-[0.2s] p-1 bg-white text-black absolute bottom-0 left-0 w-full rounded-bl-md rounded-tr-xl text-lg text-center tracking-wide font-bold group-hover:bg-[#00db1d] group-hover:text-white">
                    PLANETS
                </a>
            </article>
        </div>    
            
        <div class="w-full h-full flex justify-evenly items-center snap-center
        [&>article]:w-[25%] [&>article]:h-[90%] [&>article]:m-3 [&>article]:border-2 [&>article]:border-white [&>article]:relative [&>article]:rounded-bl-xl [&>article]:rounded-tr-xl">
            <article class="relative h-64 bg-cover bg-center shadow-2xl shadow-[rgba(255,255,255,0.2)] border-2 border-white group hover:border-[#b402cc]">
                <a href="#" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out bg-[url(<?php echo BASE_URL; ?>/public/assets/images/wookie.jpg)] hover:opacity-0"></a>
                <a href="#" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out opacity-0 hover:opacity-100 bg-[url(<?php echo BASE_URL; ?>/public/assets/images/kaminoan.jpeg)]"></a>
                <a href="#" class="transition-all duration-[0.2s] p-1 bg-white text-black absolute bottom-0 left-0 w-full rounded-bl-md rounded-tr-xl text-lg text-center tracking-wide font-bold group-hover:bg-[#b402cc] group-hover:text-white">
                    SPECIES
                </a>
            </article>
            
            <article class="relative h-64 bg-cover bg-center shadow-2xl shadow-[rgba(255,255,255,0.2)] border-2 border-white group hover:border-[#ff0]">
                <a href="#" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out bg-[url(<?php echo BASE_URL; ?>/public/assets/images/walker.jpg)] hover:opacity-0"></a>
                <a href="#" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out opacity-0 hover:opacity-100 bg-[url(<?php echo BASE_URL; ?>/public/assets/images/landspeeder.jpg)]"></a>
                <a href="#" class="transition-all duration-[0.2s] p-1 bg-white text-black absolute bottom-0 left-0 w-full rounded-bl-md rounded-tr-xl text-lg text-center tracking-wide font-bold group-hover:bg-[#ff0]">
                    VEHICLES
                </a>
            </article>
            
            <article class="relative h-64 bg-cover bg-center shadow-2xl shadow-[rgba(255,255,255,0.2)] border-2 border-white group hover:border-[#0015ff]">
                <a href="#" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out bg-[url(<?php echo BASE_URL; ?>/public/assets/images/starship1.jpg)] hover:opacity-0"></a>
                <a href="#" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-200 ease-out opacity-0 hover:opacity-100 bg-[url(<?php echo BASE_URL; ?>/public/assets/images/starship2.jpg)]"></a>
                <a href="#" class="transition-all duration-[0.2s] p-1 bg-white text-black absolute bottom-0 left-0 w-full rounded-bl-md rounded-tr-xl text-lg text-center tracking-wide font-bold group-hover:bg-[#0015ff] group-hover:text-white">
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

        <section class="w-full h-screen border-t-2 border-white flex flex-col items-center justify-evenly"
        style="background:linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5)), url('public/assets/images/tryitbg2.jpeg'); background-repeat: no-repeat; background-position: center; background-size: cover">
            <h3 class="font-bold text-6xl p-3 border-2 border-neutral-900 rounded-tr-xl rounded-bl-xl">ABOUT THIS SITE</h3>
            <div class="flex justify-evenly items-center gap-10 w-[90%] p-5 border-y-2 border-neutral-900
            [&>article]:bg-neutral-900 [&>article]:rounded-tr-xl [&>article]:rounded-bl-xl [&>article]:border-b-2 [&>article]:border-white">
                <article>
                    <h4 class="font-bold p-3 text-2xl text-center bg-white text-black rounded-tr-xl">What is SWAPI?</h4>
                    <p class="p-3 text-xl">SWAPI is a public API that provides data about the Star Wars universe, including characters, planets, starships, and more. This API allows access to detailed information about the Star Wars saga programmatically.</p>
                    <!--<a href="#" class="p-3 text-xl w-full bg-white text-black">GO TO SWAPI</a>-->
                </article>
                <article>
                    <h4 class="font-bold p-3 text-2xl text-center bg-white text-black rounded-tr-xl">How does this site work?</h4>
                    <p class="p-3 text-xl">This site uses the SWAPI to display data about the Star Wars universe. Data is retrieved through API requests and presented interactively and visually on the site, allowing fans to explore information easily.</p>
                </article>
                <article>
                    <h4 class="font-bold p-3 text-2xl text-center bg-white text-black rounded-tr-xl">What can I find on this site?</h4>
                    <p class="p-3 text-xl">On this site, you can explore details about characters, planets, starships, and species from the Star Wars universe. You can search for specific information, view lists of related items, and learn more about each aspect of the saga.</p>
                </article>
            </div>

            <div class="flex gap-5 text-2xl p-3 border-2 border-neutral-900 rounded-tr-xl rounded-bl-xl">
                <a href="https://swapi.dev/" class="bg-white py-3 px-5 rounded-tr-xl rounded-bl-xl text-black font-bold">GO TO SWAPI</a>
            </div>
        </section>

        <!--<section class="h-[3300px] w-screen border-y-2 border-white flex justify-evenly items-start"> 
            <div></div> 
            <article class="relative w-screen h-screen top-0 flex flex-col overflow-hidden justify-evenly items-center sticky
            before:content-[''] before:absolute before:top-0 before:left-0 before:bg-red-500 before:w-5" style="perspective: 300px; perspective-origin: bottom; background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)),   url('public/assets/images/space.jpg');">
               
                <div id="crawl" class="flex flex-col justify-evenly items-center h-[1500px] p-10
                [&>p]:text-[#ffe81f] [&>p]:font-['Univers_Black'] [&>p]:w-[60%] text-xl font-extrabold" style="transform: rotateX(0deg)">
                    <img class="mt-[2000px]" src="public/assets/images/yellowlogo.png" alt="Star Wars Yellow Logo" width="600px" style="transform: rotateX(0deg)">
                    
                    <p class="text-[3rem] leading-10 text-center mb-10">Episode I</p>
                    <p class="text-[3rem] leading-10 font-bold text-center mb-10 font-['Star_Jedi]">API DATA HUB</p>

                    <p class="text-justify leading-10">
                        The galaxy is in turmoil. The ancient art of coding, once mastered by only a few, has now spread across the stars. Programmers, known as Code Warriors, harness their skills to create and transform with the flick of a keystroke.
                        <br><br>
                        On the distant planet of Java, a young developer named Maxo has uncovered a long-forgotten API, hidden away for centuries. This API, known as SWAPI, holds the secrets to accessing the deepest data of the Star Wars universe, and has the power to build applications that could restore balance to the galaxy.
                        <br><br>
                        But the dark forces of Bugs and Errors, led by the malevolent Lord Legacy Code, seek to seize this power for themselves. As Maxo begins his journey, he must master the power of the SWAPI and confront the challenges that lie ahead.
                        <br><br>
                        With the aid of fellow developers, Maxo embarks on a quest to master this ancient API and bring peace and stability to the digital realm. The fate of the web world hangs in the balance as the epic battle between good and evil unfolds...
                        <br><br>
                        May the Code be with you.
                    </p>

                </div>
            </article>
        </section>-->
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
                    <img src="public/assets/icons/icon.png" class="h-8" alt="Star Wars Logo"/>
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Star Wars | API Data Hub</span>
                </p>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="me-4 md:me-6">API</a>
                    </li>
                    <li>
                        <a href="#" class="me-4 md:me-6">Repository</a>
                    </li>
                    <li>
                        <a href="#" class="me-4 md:me-6">Docs</a>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
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