<?php


class Component {

    public static function header() {
        ?>
            <header class='p-4 border-b flex flex-row justify-between bg-white-500 fixed top-0 w-full'>
                <div class=' flex flex-col'>
                    <h1 class='text-xl font-semibold'>Beast Bytes</h1>
                    <p class='text-sm'>byte-sized tech tutorials</p>
                </div>
                <div id='header-bars' class='flex items-center'>
                    <div class='cursor-pointer pl-2 pt-1 pb-1'>
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
                        </svg>
                    </div>
                </div>
            </header>
            <?= Js::toggleNavMenu("#header-bars") ?>
        <?php
    }

    public static function navMenu() {
        ?>
            <nav id='nav-menu' class='fixed top-0 left-0 w-[70%] h-screen z-40 border-r hidden'>
                <div class=' flex flex-col border-b p-4 bg-white-500'>
                    <h1 class='text-xl font-semibold'>Beast Bytes</h1>
                    <p class='text-sm'>byte-sized tech tutorials</p>
                </div>
                <ul class='h-full bg-white-900 p-2 flex flex-col gap-2'>
                    <?= Component::navItem("Home", "/") ?>
                    <?= Component::navItem("Articles", "/articles") ?>
                    <?= Component::navItem("Contact", "/contact") ?>
                </ul>
            </nav>
        <?php
    }

    public static function navItem(string $text, string $href) {
        if ($href == Http::getRawPath()) {
            ?>
            <li class='flex border rounded-sm bg-white-500 font-semibold text-primary-500'>
                <a href=<?= $href ?> class='p-4 w-full'><?= $text ?></a>
            </li>
            <?php
            return;
        }
        ?>
            <li class='flex border rounded-sm bg-white-900'>
                <a href=<?= $href ?> class='p-4 w-full'><?= $text ?></a>
            </li>
        <?php
    }

    public static function navOverlay() {
        ?>
            <div id='nav-overlay' class='fixed hidden top-0 left-0 w-full h-full bg-black-500 bg-opacity-50 z-30'></div>
            <?= Js::toggleNavMenu("#nav-overlay") ?>
        <?php
    }


}


