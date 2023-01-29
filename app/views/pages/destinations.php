<?php require APPROOT . '/views/includes/header.php'; ?>

<section id="hero" class="px-12">

    <!-- Flex container -->
    <div class="container flex flex-col-reverse items-center  px-6 mx-auto mt-10 space-y-0 md:flex-row md:space-y-0">

        <!-- Content item -->
        <div class="flex flex-col content-center mb-22 space-y-12 md:w-1/2">
            <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left">
                We Take Care of Your Cruise
            </h1>
            <p class="max-w-sm text-center text-gray-300 md:text-left">
                Explore a new world, no matter where in the world you want to go, we can help get you there .
            </p>
            <div class="flex justify-center md:justify-start">
                <a href="#destinations" class="p-3 px-6 pt-2 text-white bg-orange-600 rounded-sm baseline hover:bg-orange-800 md:block">Get Started</a>

            </div>
        </div>
        <!-- image-->
        <div class="md:w-1/2">
            <img src="<?php echo URLROOT ?>./src/img/cruise.jpg" alt="">
        </div>

    </div>
</section>





<section id="destinations" class="flex flex-col gap-10 px-6 my-10 md:px-8  md:gap-6 md:my-20 w-full" style="font-family: 'Prosto One', cursive;">
    <h1 class="max-w-md text-1xl font-bold mx-auto text-center my-4 md:text-3xl md:my-8">
        Discover All Destinations
    </h1>
    <!-- Flex container -->
    <div class="container flex flex-col-reverse  items-center mx-auto gap-6 md:flex-row md:space-y-0">
        <!-- Right item -->
        <div class="flex flex-col content-center mb-22 space-y-12 md:w-1/2">
            <h1 class="max-w-md text-xl font-bold text-center md:text-3xl md:text-left" style="font-family: 'Prosto One', cursive;">
                Bahamas island
            </h1>
            <div class="flex gap-8 font-light text-gray-500 items-center justify-center md:justify-start">
                <div class="">
                    <span class="uppercase">Country</span>
                    <p class="text-lg text-gray-900 font-semibold pt-2">Bahamas</p>
                </div>
                <div class="">
                    <span class="uppercase">Region</span>
                    <p class="text-lg text-gray-900 font-semibold pt-2">USA</p>
                </div>
                <div class="">
                    <span class="uppercase">island</span>
                    <p class="text-lg text-gray-900 font-semibold pt-2">Bahamas</p>
                </div>
            </div>

            <p class="max-w-sm text-center text-gray-500 md:text-left" style="font-family: 'Poppins', sans-serif;">
                Everyone deserves a vacation. You'll find endless opportunities to make the most of every moment-like game-changing activities, world-class dining, show-stopping entertainment, and plenty of ways to unwind in the sun
            </p>
            <div class="flex justify-center md:justify-start">
                <a href="#" class="p-3 px-6 pt-2 text-white bg-orange-600 rounded-sm baseline hover:bg-orange-800 md:block">View More</a>

            </div>
        </div>
        <!-- images-->
        <div class="w-full rounded md:w-1/2">
            <img class="rounded" src="<?php echo URLROOT ?>./src/img/cruises/bahamas.jpg" alt="">
        </div>
    </div>
</section>

<?php require APPROOT . '/views/includes/footer.php'; ?>