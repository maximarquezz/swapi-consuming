<?php

define('BASE_PATH', realpath(__DIR__));
define('BASE_URL', '/swapi'); // Ajusta esta constante a la URL base de tu aplicación

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
    <link rel="stylesheet" href="/public/css/fonts.css">
</head>

<body class="text-white bg-black" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
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
                    <a href="#"><img src="<?php echo BASE_URL; ?>/public/assets/images/swapi.png" alt="swapi logo" width="20px" height="20px" class="mt-[4.4px] ml-[5px]"></a>
                </ul>

                <div>
                    <img src="<?php echo BASE_URL; ?>/public/assets/images/logo.png" alt="Star Wars logo" width="200px">
                </div>

                <ul class="flex
                [&>li]:mx-3 [&>li]:text-sm [&>li]:font-bold">
                    <li><a href="<?php echo BASE_URL; ?>"><i class="fa-solid fa-home mr-2"></i>HOME</a></li>
                    <li><a href="#"><i class="fa-solid fa-magnifying-glass mr-2"></i>SEARCH</a></li>
                </ul>
            </div>

            <div class="w-full">
                <ul class="flex items-center justify-center bg-black border-b-2 border-white font-bold
                [&>li]:mx-4 [&>li]:p-2 [&>li]:text-gray-500">
                    <li><a href="<?php echo BASE_URL; ?>/people"  class="transition-all duration-[0.25] ease-in hover:duration-[0.25] hover:ease-out hover:text-blue-400 hover:[text-shadow:_0_0_20px_rgb(0_8_255)]">PEOPLE</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/films" class="transition-all duration-[0.25] ease-in hover:duration-[0.25] hover:ease-out hover:text-green-400 hover:[text-shadow:_0_0_20px_rgb(0_255_17)]">FILMS</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/starships" class="transition-all duration-[0.25] ease-in hover:duration-[0.25] hover:ease-out hover:text-red-500 hover:[text-shadow:_0_0_20px_rgb(255_46_46)]">STARSHIPS</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/vehicles" class="transition-all duration-[0.25] ease-in hover:duration-[0.25] hover:ease-out hover:text-purple-500 hover:[text-shadow:_0_0_20px_rgb(0_8_255)]">VEHICLES</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/species" class="transition-all duration-[0.25] ease-in hover:duration-[0.25] hover:ease-out hover:text-yellow-500 hover:[text-shadow:_0_0_20px_rgb(255_225_0)]">SPECIES</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/planets" class="transition-all duration-[0.25] ease-in hover:duration-[0.25] hover:ease-out hover:text-white hover:[text-shadow:_0_0_20px_rgb(255_255_255)]">PLANETS</a></li>
                </ul>
            </div>

        </nav>
    </header>

    <main class="flex justify-evenly flex-col items-center">
        <section class="w-[80%] h-[calc(100vh-168px)] border-x-2 border-white flex items-center justify-evenly
        [&>article]:h-[90%] [&>article]:w-[25%] [&>article]:m-3 [&>article]:border-2 [&>article]:border-white [&>article]:relative [&>article]:rounded-bl-xl [&>article]:rounded-tr-xl"
        style="background:linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5)), url('public/assets/images/hero.png'); background-repeat: no-repeat; background-position: center; background-size: cover">
            <article class="relative w-full h-64 bg-cover bg-center shadow-2xl shadow-[rgba(255,255,255,0.2)] border-2 border-white group hover:border-[#0015ff]">
                <a href="#" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-300 ease-out bg-[url(<?php echo BASE_URL; ?>/public/assets/images/revengeofthesith.webp)] hover:opacity-0"></a>
                <a href="#" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-300 ease-out opacity-0 hover:opacity-100 bg-[url(<?php echo BASE_URL; ?>/public/assets/images/empirestrikesback.webp)]"></a>
                <a href="#" class="transition-all duration-[0.3s] p-2 bg-white text-black absolute bottom-0 left-0 w-full rounded-bl-md rounded-tr-xl text-lg text-center tracking-widest font-bold group-hover:bg-[#0015ff] group-hover:text-white">
                    FILMS
                </a>
            </article>
            
            <article class="relative w-full h-64 bg-cover bg-center shadow-2xl shadow-[rgba(255,255,255,0.2)] border-2 border-white group hover:border-[#ff0000]">
                <a href="#" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-300 ease-out bg-[url(<?php echo BASE_URL; ?>/public/assets/images/anakinskywalker.jpg)] hover:opacity-0"></a>
                <a href="#" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-300 ease-out opacity-0 hover:opacity-100 bg-[url(<?php echo BASE_URL; ?>/public/assets/images/darthvader.jpg)]"></a>
                <a href="#" class="transition-all duration-[0.3s] p-2 bg-white text-black absolute bottom-0 left-0 w-full rounded-bl-md rounded-tr-xl text-lg text-center tracking-widest font-bold group-hover:bg-[#ff0000] group-hover:text-white">
                    PEOPLE
                </a>
            </article>
            
            <article class="relative w-full h-64 bg-cover bg-center shadow-2xl shadow-[rgba(255,255,255,0.2)] border-2 border-white group hover:border-[#00db1d]">
                <a href="#" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-300 ease-out bg-[url(<?php echo BASE_URL; ?>/public/assets/images/tatooine.jpeg)] hover:opacity-0"></a>
                <a href="#" class="rounded-bl-md rounded-tr-xl absolute inset-0 bg-cover bg-center transition-opacity duration-300 ease-out opacity-0 hover:opacity-100 bg-[url(<?php echo BASE_URL; ?>/public/assets/images/dagobah.jpg)]"></a>
                <a href="#" class="transition-all duration-[0.3s] p-2 bg-white text-black absolute bottom-0 left-0 w-full rounded-bl-md rounded-tr-xl text-lg text-center tracking-widest font-bold group-hover:bg-[#00db1d] group-hover:text-white">
                    PLANETS
                </a>
            </article>
        </section>

        <section class="h-screen w-screen border-t-2 border-white"
        style="background: url(public/assets/images/bbblurry.svg); background-repeat: no-repeat; background-size: cover; background-position: center;">
            
        </section>
    </main>

    <script src="https://kit.fontawesome.com/340d67c615.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>

<?php

require_once 'lib/router.php';
require_once 'routes/web.php';

?>