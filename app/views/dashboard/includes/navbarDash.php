

<nav class="bg-white fixed w-full z-10 top-0 py-2">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto">
        <div class="flex items-center" aria-label="Home" role="img" style="font-family: 'Prosto One', cursive;">
            <img class="cursor-pointer w-8 sm:w-auto" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg1.svg" alt="logo" />
            <p class="ml-2 lg:ml-4 text-base lg:text-xl font-bold text-dark dark:text-white">RoyalNorth</p>

        </div>
      
        <div class="flex gap-4 items-center md:order-2">
            <div class="hidden md:flex gap-4 ">
                <a href="<?php echo URLROOT ?>/user/logout" class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-orange-500 ring-inset  hover:ring-orange-600 hover:ring-0 hover:bg-orange-500 hover:text-white">Logout</a>


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
                <li class="text-dark text-md hover:text-orange-400  cursor-pointer md:ml-10 py-4">
                    <a href="<?php echo URLROOT ?>/pages">Home</a>
                </li>
                <li class="text-dark text-md hover:text-orange-400  cursor-pointer py-4">
                    <a href="<?php echo URLROOT ?>/pages/cruise">Cruise</a>
                </li>
                <!-- <li class="text-dark text-md hover:text-orange-400 cursor-pointer py-4">
                        <a href="<?php echo URLROOT ?>/pages/destinations">Destinations</a>
                    </li> -->
                <li class="text-dark text-md hover:text-orange-400 cursor-pointer py-4">
                    <a href="<?php echo URLROOT ?>/pages/myRaservations">Reservations</a>
                </li>
                <div class="md:hidden flex gap-4 mb-6">
                    <a href="<?php echo URLROOT ?>/user/logout" class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-orange-500 ring-inset  hover:ring-orange-600 hover:ring-0 hover:bg-orange-500 hover:text-white">Logout</a>

                </div>
            </ul>
        </div>
    </div>

    <!-- <div class="container mx-auto px-4 py-1 flex items-center justify-between">
        <div class="flex items-center" aria-label="Home" role="img" style="font-family: 'Prosto One', cursive;">
            <img class="cursor-pointer w-8 sm:w-auto" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg1.svg" alt="logo" />
            <p class="ml-2 lg:ml-3 text-base lg:text-2xl font-bold text-dark dark:text-white">RoyalNorth</p>
        </div>
        <div>
            <button onclick="toggleMenu(true)" class=" dark:bg-white rounded sm:block md:hidden lg:hidden text-gray-500 hover:text-gray-700 focus:text-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">
                <img class="h-8 w-8" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg4.svg" alt="show" />

            </button>
            <div id="menu" class="md:block lg:block hidden" style="font-family: 'Prosto One', cursive;">
                <button onclick="toggleMenu(false)" class=" dark:bg-white rounded block md:hidden lg:hidden text-gray-500 hover:text-gray-700 focus:text-gray-700 fixed focus:outline-none focus:ring-2 focus:ring-gray-500 bg-white md:bg-transparent z-30 top-0 mt-3">
                    <img class="h-8 w-8" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg5.svg" alt="hide" />

                </button>
                <ul class="flex flex-col gap-6 text-3xl md:text-base items-center justify-center  bg-white  md:flex-row md:bg-transparent z-20">
                    <li class="text-dark text-md hover:text-orange-400  cursor-pointer md:ml-10 py-4">
                        <a href="<?php echo URLROOT ?>/pages">Home</a>
                    </li>
                    <li class="text-dark text-md hover:text-orange-400  cursor-pointer py-4">
                        <a href="<?php echo URLROOT ?>/pages/cruise">Cruise</a>
                    </li>
                    <li class="text-dark text-md hover:text-orange-400 cursor-pointer py-4">
                        <a href="<?php echo URLROOT ?>/pages/destinations">Destinations</a>
                    </li>
                   

                    <?php if (isset($_SESSION['role'])) : ?>
                        <?php if ($_SESSION['role']) : ?>
                            <li class="text-dark text-md hover:text-orange-400  cursor-pointer  py-4">
                                <a href="<?php echo URLROOT ?>/admin/dashboard">Dashboard</a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                    <div class="block md:hidden gap-4 ">

              
                <a href="<?php echo URLROOT ?>/user/logout" class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-orange-500 ring-inset  hover:ring-orange-600 hover:ring-0 hover:bg-orange-500 hover:text-white">Logout</a>

                       


                    </div>

                </ul>


            </div>
        </div>
        <div class="hidden md:flex gap-4 ">

                <a href="<?php echo URLROOT ?>/user/logout" class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-orange-500 ring-inset  hover:ring-orange-600 hover:ring-0 hover:bg-orange-500 hover:text-white">Logout</a>

            


        </div>
    </div> -->

</nav>