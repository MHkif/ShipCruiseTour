
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

<nav class="bg-white fixed w-full z-10 top-0">

    <div class="container mx-auto px-4 py-1 flex items-center justify-between">
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
    </div>


   

</nav>
