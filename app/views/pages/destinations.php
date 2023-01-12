<?php require APPROOT . '/views/includes/header.php'; ?>

<section id="hero" class="px-12">
        <!-- Flex container -->
        <div class="container flex flex-col-reverse items-center px-6 mx-auto mt-10 space-y-0 md:flex-row md:space-y-0">
            <!-- Left item -->
            <div class="flex flex-col content-center mb-22 space-y-12 md:w-1/2">
                <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left">
                    We Take Care of Your Cruise
                </h1>
                <p class="max-w-sm text-center text-gray-300 md:text-left">
                    Explore a new world, no matter where in the world you want to go, we can help get you there .
                </p>
                <div class="flex justify-center md:justify-start">
                    <a href="#" class="p-3 px-6 pt-2 text-white bg-blue-600 rounded-full baseline hover:bg-gray-900 md:block">Get Started</a>
                </div>
            </div>
            <!-- image-->
            <div class="md:w-1/2">
                <img src="<?php echo URLROOT ?>./src/img/cruise.jpg" alt="">
            </div>
        </div>
    </section>


<?php require APPROOT . '/views/includes/footer.php'; ?>