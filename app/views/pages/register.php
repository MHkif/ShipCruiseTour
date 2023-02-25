<?php
require APPROOT . '/views/includes/style.php';
?>

<section class="min-h-screen flex items-stretch text-white">
    <div class="lg:flex w-2/3 hidden bg-white bg-no-repeat bg-cover relative items-center" style="background-image: url('<?php echo URLROOT ?>./src/img/b1.jpg');
                    font-family: 'Prosto One', cursive;">
        <div class="absolute  bg-black bg-opacity-40 inset-0 z-0"></div>
        <div class="w-full px-24 z-10">
            <h1 class="text-5xl font-bold text-left tracking-wide">Explore the univers</h1>
            <p class="text-3xl my-4">We Take Care of Your Cruise</p>
        </div>

    </div>
    <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0">
        <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center" style="background-image: url('<?php echo URLROOT ?>./src/img/b1.jpg');
                    font-family: 'Prosto One', cursive;">
            <div class="absolute bg-black opacity-40 inset-0 z-0"></div>
        </div>
        <div class="w-full z-20">
            <a href="<?php echo URLROOT . "/pages" ?> ">
                <div class="flex justify-center items-center pb-4 md:pb-10" aria-label="Home" role="img" style="font-family: 'Prosto One', cursive;">
                    <img class="cursor-pointer w-16 sm:w-auto" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg1.svg" alt="logo" />
                    <p class=" text-white text-2xl font-bold md:text-gray-900 ">RoyalNorth</p>
                </div>
            </a>

            <form id="formRegister" action="<?php echo URLROOT . "/user/register" ?>" method="POST" class=" px-4 w-full md:w-96  mx-auto">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="pb-2 pt-4">
                        <input type="text" name="first_name" id="first_name" placeholder="First name" class="block w-full p-2 text-lg  bg-gray-50 rounded border border-gray-300 text-gray-900 focus:ring-orange-500 focus:border-orange-500 md:p-3">
                        <span class="flex text-sm bg-black bg-opacity-30 rounded px-2 md:bg-transparent" id="fnameER"></span>
                    </div>
                    <div class="pb-2 pt-4">
                        <input type="text" name="last_name" id="last_name" placeholder="Last name" class="block w-full p-2 text-lg  bg-gray-50 rounded border border-gray-300 text-gray-900 focus:ring-orange-500 focus:border-orange-500 md:p-3">
                        <span class="flex text-sm bg-black bg-opacity-30 rounded px-2  md:bg-transparent" id="lnameER"></span>
                    </div>

                </div>
                <div id="divy" class="pb-2 pt-4">
                    <input type="text" name="email" id="email" placeholder="Email" class="block w-full  text-lg  bg-gray-50 rounded border border-gray-300 text-gray-900 focus:ring-orange-500 focus:border-orange-500 p-2 md:p-3">
                    <span class="flex text-sm bg-black bg-opacity-30 rounded px-2  md:bg-transparent" id="emailER"></span>
                    <?php if (isset($data['email_err'])) : ?>
                        <span id="checkEmail" class="flex text-sm bg-black bg-opacity-30 rounded px-2 py-1 md:bg-transparent text-red-600">
                            <?php echo $data['email_err']; ?>
                        </span>
                    <?php endif ?>
                </div>

                <div class="pb-2 pt-4">
                    <input class="block w-full  text-lg  bg-gray-50 rounded border border-gray-300 text-gray-900 focus:ring-orange-500 focus:border-orange-500 p-2 md:p-3" type="password" name="password" id="password" placeholder="Password">
                    <span class="flex text-sm bg-black bg-opacity-30 rounded px-2 md:bg-transparent" id="passwordER"></span>
                </div>

                <div class="py-4">
                    <input class="block w-full text-lg  bg-gray-50 rounded border border-gray-300 text-gray-900 focus:ring-orange-500 focus:border-orange-500 p-2 md:p-3" type="password" name="confirm" id="Confirm_password" placeholder="Confirm Password">
                    <span class="flex text-sm bg-black bg-opacity-30 rounded px-2  md:bg-transparent" id="Con_passER"></span>
                </div>

                <div class=" pb-2 pt-6">
                    <button type="submit" onclick="validate(event)" class="uppercase w-full text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg  text-center p-2 md:p-3">Sign up</button>
                </div>
                <div class="text-white text-sm font-medium md:text-gray-500">
                    Already have an account? <a href="<?php echo URLROOT . "/pages/login" ?> " class="text-orange-700 hover:underline">Login</a>
                </div>

            </form>
        </div>
    </div>
</section>
<!-- <script src="<?php echo URLROOT ?>/js/register.js"></script> -->
<?php

require APPROOT . '/views/includes/footerStyle.php';
?>