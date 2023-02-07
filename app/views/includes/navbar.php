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
        <!-- Login modal -->
        <div id="Login-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full bg-white bg-opacity-25">
            <div class="relative w-full h-full max-w-md md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="Login-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <!-- <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3> -->
                        <div class="flex items-center justify-center" aria-label="Home" role="img" style="font-family: 'Prosto One', cursive;">
                            <img class="cursor-pointer w-8 sm:w-auto" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg1.svg" alt="logo" />
                            <p class="ml-2 lg:ml-4 text-base  font-bold text-dark dark:text-white">RoyalNorth</p>
                        </div>
                        <form class="space-y-4" action="user/login" method="POST">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <!-- <div class="flex justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
                                    </div>
                                    <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                                </div>
                                <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                            </div> -->
                            <button type="submit" class="w-full text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login</button>
                            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                Not registered? <a data-modal-hide="Login-modal" class="text-orange-700 hover:underline" data-modal-target="register-modal" data-modal-toggle="register-modal" type="button">Create account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Register Modal -->
        <div id="register-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
            <div class="relative w-full h-full max-w-md md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="register-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <!-- <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3> -->
                        <div class="flex items-center justify-center" aria-label="Home" role="img" style="font-family: 'Prosto One', cursive;">
                            <img class="cursor-pointer w-8 sm:w-auto" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg1.svg" alt="logo" />
                            <p class="ml-2 lg:ml-4 text-base  font-bold text-dark dark:text-white">RoyalNorth</p>
                        </div>
                        <form class="space-y-4" action="user/register" method="POST">
                            <div class="flex gap-4">

                                <div class="w-full">
                                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                                    <input type="text" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Loyal" required>
                                </div>
                                <div class="w-full">
                                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
                                    <input type="text" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Frank" required>

                                </div>
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <div>
                                <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                                <input type="password" name="confirm_password" id="confirm_password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <div class="flex justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
                                    </div>
                                    <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                                </div>
                                <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                            </div>
                            <button type="submit" class="w-full text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign up</button>
                            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                Already have an account? <a data-modal-hide="register-modal" data-modal-target="Login-modal" data-modal-toggle="Login-modal" class="text-orange-700 hover:underline">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex gap-4 items-center md:order-2">
            <div class="hidden md:flex gap-4 ">
                <?php if (isset($_SESSION['user_id']) or isset($_SESSION['admin_id'])) : ?>
                    <a href="<?php echo URLROOT ?>/user/logout" class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-orange-500 ring-inset  hover:ring-orange-600 hover:ring-0 hover:bg-orange-500 hover:text-white">Logout</a>

                <?php else : ?>
                    <a class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-orange-500 ring-inset  hover:ring-orange-600 hover:ring-0 hover:bg-orange-500 hover:text-white" data-modal-target="Login-modal" data-modal-toggle="Login-modal" type="button">Log in</a>
                    <a data-modal-hide="Login-modal" class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-orange-500 ring-inset  hover:ring-orange-600 hover:ring-0 hover:bg-orange-500 hover:text-white" data-modal-target="register-modal" data-modal-toggle="register-modal" type="button">Sign up</a>

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