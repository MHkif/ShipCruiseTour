<style>
    /* width */
    ::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: white;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: rgb(249 115 22);
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: rgb(234 88 12);
    }
</style>
<link rel="stylesheet" href="<?php echo URLROOT ?>/css/style.css" />


<nav class="bg-white px-2 md:px-4 py-2 ">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto">
        <div class="flex items-center" aria-label="Home" role="img" style="font-family: 'Prosto One', cursive;">
            <img class="cursor-pointer w-8 sm:w-auto" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg1.svg" alt="logo" />
            <p class="ml-2  text-base lg:text-xl font-bold text-dark dark:text-white">RoyalNorth</p>

        </div>


        <div class="flex gap-4 items-center md:order-2">
            <div class="hidden md:flex gap-4 ">
                <?php if (isset($_SESSION['user_id']) or isset($_SESSION['admin_id'])) : ?>
                    <a href="<?php echo URLROOT ?>/user/logout" class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-orange-500 ring-inset  hover:ring-orange-600 hover:ring-0 hover:bg-orange-500 hover:text-white">Logout</a>

                <?php else : ?>
                    <a href="<?php echo URLROOT . "/pages/login" ?> " class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-orange-500 ring-inset  hover:ring-orange-600 hover:ring-0 hover:bg-orange-500 hover:text-white"  type="button">Log in</a>
                    <a href="<?php echo URLROOT . "/pages/register" ?> " class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-orange-500 ring-inset  hover:ring-orange-600 hover:ring-0 hover:bg-orange-500 hover:text-white" type="button">Sign up</a>

                <?php endif; ?>
            </div>
            <button data-collapse-toggle="mega-menu" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div id="mega-menu" class="items-center justify-between hidden w-full text-sm md:flex md:w-auto md:order-1" style="font-family: 'Prosto One', cursive;">
            <ul class="flex flex-col items-center mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
                <?php if (isset($_SESSION['admin_id'])) : ?>
                    <li class="text-dark text-md hover:text-orange-400  cursor-pointer py-4">
                        <a href="<?php echo URLROOT ?>/admin/cruisePanel">Dashboard</a>
                    </li>
                <?php endif ?>


                <a href="<?php echo URLROOT ?>/pages">Home</a>
                </li>
                <li class="text-dark text-md hover:text-orange-400  cursor-pointer py-4">
                    <a href="<?php echo URLROOT ?>/pages/cruise">Cruise</a>
                </li>
                <!-- <li class="text-dark text-md hover:text-orange-400 cursor-pointer py-4">
                        <a href="<?php echo URLROOT ?>/pages/destinations">Destinations</a>
                    </li> -->
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <li class="text-dark text-md hover:text-orange-400 cursor-pointer py-4">
                        <a href="<?php echo URLROOT ?>/pages/myRaservations">Reservations</a>
                    </li>
                <?php endif ?>
                <div class="md:hidden flex gap-4 mb-6">
                    <?php if (isset($_SESSION['user_id']) or isset($_SESSION['admin_id'])) : ?>
                        <a href="<?php echo URLROOT ?>/user/logout" class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-orange-500 ring-inset  hover:ring-orange-600 hover:ring-0 hover:bg-orange-500 hover:text-white">Logout</a>

                    <?php else : ?>
                        <a class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-orange-500 ring-inset  hover:ring-orange-600 hover:ring-0 hover:bg-orange-500 hover:text-white" data-modal-target="Login-modal" data-modal-toggle="Login-modal" type="button">Log in</a>
                        <a data-modal-hide="Login-modal" class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-orange-500 ring-inset  hover:ring-orange-600 hover:ring-0 hover:bg-orange-500 hover:text-white" data-modal-target="register-modal" data-modal-toggle="register-modal" type="button">Sign up</a>

                    <?php endif; ?>
                </div>
            </ul>
        </div>
    </div>


</nav>