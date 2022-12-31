<nav class="bg-opacity-0 w-full">
    <div class="container mx-auto px-6 flex items-center justify-between">
        <div class="flex items-center" aria-label="Home" role="img">
            <img class="cursor-pointer w-8 sm:w-auto" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg1.svg" alt="logo" />
            <p class="ml-2 lg:ml-4 text-base lg:text-2xl font-bold text-white dark:text-white">RoyalNorth</p>
        </div>
        <div>
            <button onclick="toggleMenu(true)" class=" dark:bg-white rounded sm:block md:hidden lg:hidden text-gray-500 hover:text-gray-700 focus:text-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">
                <img class="h-8 w-8" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg4.svg" alt="show" />

            </button>
            <div id="menu" class="md:block lg:block hidden">
                <button onclick="toggleMenu(false)" class=" dark:bg-white rounded block md:hidden lg:hidden text-gray-500 hover:text-gray-700 focus:text-gray-700 fixed focus:outline-none focus:ring-2 focus:ring-gray-500 bg-white md:bg-transparent z-30 top-0 mt-3">
                    <img class="h-8 w-8" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg5.svg" alt="hide" />

                </button>
                <ul class="flex text-3xl md:text-base items-center py-4 md:flex flex-col md:flex-row justify-center fixed md:relative top-0 bottom-0 left-0 right-0 bg-white md:bg-transparent  z-20">
                    <li class="text:black md:text-white text-lg hover:text-dark dark:text-white cursor-pointer md:ml-10 pt-10 md:pt-0">
                        <a href="javascript:void(0)">Home</a>
                    </li>
                    <li class="text:black md:text-white text-lg hover:text-dark dark:text-white  cursor-pointer md:ml-10 pt-10 md:pt-0">
                        <a href="javascript:void(0)">Cruise</a>
                    </li>
                    <li class="text:black md:text-white text-lg hover:text-dark dark:text-white  cursor-pointer md:ml-10 pt-10 md:pt-0">
                        <a href="javascript:void(0)">Ships</a>
                    </li>
                    <li class="text:black md:text-white text-lg hover:text-dark dark:text-white  cursor-pointer md:ml-10 pt-10 md:pt-0">
                        <a href="javascript:void(0)">Contact</a>
                    </li>
                    <li class="text:black md:text-white text-lg hover:text-dark dark:text-white cursor-pointer md:ml-10 pt-10 md:pt-0 ">
                        <a href="#" class="inline-block rounded-lg  px-6 py-2 text-sm font-semibold leading-6 text:black md:text-white shadow-xl ring-1 ring-gray hover:ring-gray">Log in</a>

                        <!-- <a href="#" class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-gray-900/10 hover:ring-gray-900/20">Sign up</a> -->
                    </li>
                </ul>


            </div>
        </div>
    </div>
</nav>