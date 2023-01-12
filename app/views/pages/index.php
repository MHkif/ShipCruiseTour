<?php

require APPROOT . '/views/includes/header.php';
?>
<!-- Hero section -->


<div class="h-auto w-full bg-center  bg-cover flex flex-col justify-center  md:h-screen " style="background-image: url('<?php echo URLROOT ?>./img/b1.jpg');
font-family: 'Prosto One', cursive;">

    <div class="h-auto backdrop-grayscale-0 bg-blue-600/50 md:h-screen w-full bg-black-50 flex flex-col justify-center">

        <div class="container p-12 max-w-screen-sm mx-auto px-4 sm:px-6 lg:px-8">


            <!-- body  goes here -->
            <div class="flex flex-col items-center space-y-6  md:space-y-10 ">
                <h1 class="max-w-md text-3xl font-bold text-center md:text-6xl text-white">
                    We Take Care of Your Cruise
                </h1>
                <!-- <p class="max-w-sm font-bold text-center text-white">
                    Explore a new world, no matter where in the world you want to go, we can help get you there .
                </p> -->
                <!-- <div class="flex justify-center ">
                    <a href="#" class="p-3 px-6 pt-2 text-white bg-orange-500 rounded-full baseline hover:bg-gray-900 md:block">Book now</a>

                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- Hero content goes here -->


</div>
<!-- Reservation -->
<section id="reservation" class="px-4 sm:px-6 md:px-16 -mt-8 md:-mt-16">
    <div class="container-fluid bg-white rounded-md drop-shadow-xl py-6 flex flex-col items-center justify-center gap-6">

        <h1 class="max-w-md text-1xl font-bold text-center md:text-2xl text-gray-800" style="font-family: 'Prosto One', cursive;">
            Where You Wanna Go ?
        </h1>
        <div class="w-full flex flex-col md:flex-row flex-wrap justify-center items-center p-4 gap-4 md:gap-6">

            <div class="flex flex-col w-full md:w-52 gap-2">
            <label for="select cruise" class="text-base font-medium text-gray-800">Crusing To</label>
                <select class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white border border-solid border-gray-300 rounded" aria-label="Default select example">
                    <option selected>Destination</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="flex flex-col w-full md:w-52 gap-2">
            <label for="select cruise" class="text-base font-medium text-gray-800">Departure From</label>
                <select class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white border border-solid border-gray-300 rounded" aria-label="Default select example">

                    <option selected>Departure Port</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <!-- <div class="mb-2 w-60 sm:w-96  md:w-52">
                <select class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white border border-solid border-gray-300 rounded" aria-label="Default select example">

                    <option selected>Departing Date</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div> -->

            <div class="flex w-auto flex-col gap-2">
            <label for="select date" class="text-base font-medium text-gray-800">Cruise Date</label>
            <div class="flex flex-col md:flex-row w-full items-center justify-center md:w-auto gap-2 md:gap-4">
                <div class="datepicker relative form-floating w-full md:w-52" data-mdb-toggle-button="false">
                    <input type="date" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Select a date" data-mdb-toggle="datepicker" />
                </div>
                <span class="text-gray-500">to</span>
                <div class="datepicker relative form-floating w-full md:w-52" data-mdb-toggle-button="false">
                    <input type="date" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Select a date" data-mdb-toggle="datepicker" />
                </div>
            </div>
            </div>

            <div class="flex justify-end">
                <button type="button" class="inline-block px-6 py-2.5 bg-orange-500  text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-500  hover:shadow-lg focus:bg-orange-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-600 active:shadow-lg transition duration-150 ease-in-out">Search</button>
            </div>

        </div>
    </div>
</section>

<!-- Inspirations -->
<section id="cruises" class="flex flex-col items-center my-10 px-6 md:px-8 md:my-14" style="font-family: 'Prosto One', cursive;">
    <h1 class="max-w-md text-1xl font-bold text-center text-gray-800 my-6 md:text-3xl md:my-8">
        Destination Inspirations
    </h1>
    <div class="grid grid-cols-1 gap-4 w-full md:grid-cols-2 lg:grid-cols-4">
        <div class=" w-full h-44 xl:h-64 mb-4 sm:mb-0 md:w-full md:mb-4 ">
            <div class="relative overflow-hidden  w-full rounded h-full bg-no-repeat bg-center bg-cover" style="background-image: url(./src/img/bahamas.jpg);">
                <div class="backdrop-grayscale-0 bg-black/30 absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed flex flex-col justify-center gap-4">
                    <div class="">
                        <p class="text-center text-white text-xs md:text-sm">PERFECT DAY AT COCOCAY</p>
                        <p class="text-center text-white text-md  font-bold md:text-xl">WEEKEND GETAWAYS</p>
                        <p class="text-center text-white text-xs font-extralight md:text-sm">STARTING FROM</p>
                        <p class="text-center text-white text-sm font-bold">$240</p>
                    </div>
                    <div class="flex space-x-2 justify-center ">
                        <button type="button" class="inline-block px-6 py-2.5 bg-orange-500  text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-500  hover:shadow-lg focus:bg-orange-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-600 active:shadow-lg transition duration-150 ease-in-out">Book</button>
                    </div>
                </div>
            </div>
        </div>

        <div class=" w-full h-44 xl:h-64 mb-4 sm:mb-0 md:w-full md:mb-4 ">
            <div class="relative overflow-hidden  w-full rounded h-full bg-no-repeat bg-center bg-cover" style="background-image: url(./src/img/barcelona.jpg);">
                <div class="backdrop-grayscale-0 bg-black/30 absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed flex flex-col justify-center gap-4">
                    <div class="" style="font-family: 'Prosto One', cursive;">
                        <p class="text-center text-white text-xs md:text-sm">7 NIGHT</p>
                        <p class="text-center text-white text-md font-bold  md:text-xl">CARIBBEAN CRUISES</p>
                        <p class="text-center text-white text-xs md:text-sm">STARTING FROM $575</p>
                    </div>
                    <div class="flex space-x-2 justify-center ">
                        <button type="button" class="inline-block px-6 py-2.5 bg-orange-500  text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-500  hover:shadow-lg focus:bg-orange-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-600 active:shadow-lg transition duration-150 ease-in-out">Book</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=" w-full h-44 xl:h-64 mb-4 sm:mb-0 md:w-full md:mb-4 ">
            <div class="relative overflow-hidden  w-full rounded h-full bg-no-repeat bg-center bg-cover" style="background-image: url(./src/img/monaco.jpg);">
                <div class="backdrop-grayscale-0 bg-black/30 absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed flex flex-col justify-center gap-4">
                    <div class="" style="font-family: 'Prosto One', cursive;">
                        <p class="text-center text-white text-xs md:text-sm">COMING SOON</p>
                        <p class="text-center text-white text-md font-bold md:text-xl">SAIL FROM NEW YORK</p>
                        <p class="text-center text-white text-xs md:text-sm">STARTING FROM $840</p>
                    </div>
                    <div class="flex space-x-2 justify-center ">
                        <button type="button" class="inline-block px-6 py-2.5 bg-orange-500  text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-500  hover:shadow-lg focus:bg-orange-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-600 active:shadow-lg transition duration-150 ease-in-out">Book</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=" w-full h-44 xl:h-64 mb-4 sm:mb-0 md:w-full md:mb-4 ">
            <div class="relative overflow-hidden  w-full rounded h-full bg-no-repeat bg-center bg-cover" style="background-image: url(./src/img/canada.jpg);">
                <div class="backdrop-grayscale-0 bg-black/30 absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed flex flex-col justify-center gap-4">
                    <div class="" style="font-family: 'Prosto One', cursive;">
                        <p class="text-center text-white text-xs md:text-sm">16 NIGHT</p>
                        <p class="text-center text-white text-md font-bold md:text-xl">SAFI CRUISES</p>
                        <p class="text-center text-white text-xs md:text-sm">STARTING FROM $240</p>
                    </div>
                    <div class="flex space-x-2 justify-center ">
                        <button type="button" class="inline-block px-6 py-2.5 bg-orange-500  text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-500  hover:shadow-lg focus:bg-orange-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-600 active:shadow-lg transition duration-150 ease-in-out">Book</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<!-- Explore Criuses -->
<section id="cruises_carousel" class="my-10 px-6 md:px-8  md:my-14" style="font-family: 'Prosto One', cursive;">
    <h1 class="max-w-md text-1xl font-bold text-center my-6 md:text-3xl md:text-left md:my-8">
        Explore the world with us
    </h1>
    <div id="animation-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="./src/img/monaco.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class=" duration-200 ease-linear" data-carousel-item>
                <img src="./src/img/hero.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>



        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

</section>



<!-- Criuses -->
<section id="cruises" class=" my-10 px-6 md:px-8  md:my-14" style="font-family: 'Prosto One', cursive;">
    <h1 class="max-w-md text-1xl font-bold text-center my-6 md:text-3xl md:text-left md:my-8">
        Most Visited Destination
    </h1>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 items-start  md:grid-cols-3 lg:grid-cols-4" >
        <div class="w-full bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">

            <img class="w-full h-52 rounded-t-lg sm:max-h-60" src="./src/img/barcelona.jpg" alt="" />

            <div class="p-3 flex flex-col gap-2 md:gap-4 md:p-5">

                <h5 class="text-md tracking-tight font-bold text-gray-900 dark:text-white md:text-lg">5 Night Western Caribbean Cruise</h5>

                <div>
                    <p class="font-normal text-gray-500 text-xs dark:text-gray-400 md:text-sm">Starting from</p>
                    <h5 class="text-md tracking-tight font-bold text-gray-900 dark:text-white md:text-lg">$450/person</h5>

                </div>
                <div class="w-full flex items-align justify-center">
                    <a href="#" class="w-full inline-flex justify-center px-6 py-2.5 bg-orange-500 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-orange-700 hover:shadow-lg focus:bg-orange-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-600 active:shadow-lg transition duration-150 ease-in-out">
                        Book now
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full  bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">

            <img class="w-full h-52 rounded-t-lg sm:max-h-60" src="./src/img/bahamas.jpg" alt="" />


            <div class="p-3 flex flex-col gap-2 md:gap-4 md:p-5">

                <h5 class="text-md tracking-tight font-bold text-gray-900 dark:text-white md:text-lg">5 Night Western Caribbean Cruise</h5>

                <div>
                    <p class="font-normal text-gray-500 text-xs dark:text-gray-400 md:text-sm">Starting from</p>
                    <h5 class="text-md tracking-tight font-bold text-gray-900 dark:text-white md:text-lg">$450/person</h5>

                </div>
                <div class="w-full flex items-align justify-center">
                    <a href="#" class="w-full inline-flex justify-center px-6 py-2.5 bg-orange-500 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-orange-700 hover:shadow-lg focus:bg-orange-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-600 active:shadow-lg transition duration-150 ease-in-out">
                        Book now
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">

            <img class="w-full h-52 rounded-t-lg sm:max-h-60" src="./src/img/monaco.jpg" alt="" />


            <div class="p-3 flex flex-col gap-2 md:gap-4 md:p-5">

                <h5 class="text-md tracking-tight font-bold text-gray-900 dark:text-white md:text-lg">5 Night Western Caribbean Cruise</h5>

                <div>
                    <p class="font-normal text-gray-500 text-xs dark:text-gray-400 md:text-sm">Starting from</p>
                    <h5 class="text-md tracking-tight font-bold text-gray-900 dark:text-white md:text-lg">$450/person</h5>

                </div>
                <div class="w-full flex items-align justify-center">
                    <a href="#" class="w-full inline-flex justify-center px-6 py-2.5 bg-orange-500 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-orange-700 hover:shadow-lg focus:bg-orange-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-600 active:shadow-lg transition duration-150 ease-in-out">
                        Book now
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">

            <img class="w-full h-52 rounded-t-lg sm:max-h-60" src="./src/img/canada.jpg" alt="" />

            <div class="p-3 flex flex-col gap-2 md:gap-4 md:p-5">

                <h5 class="text-md tracking-tight font-bold text-gray-900 dark:text-white md:text-lg">5 Night Western Caribbean Cruise</h5>

                <div>
                    <p class="font-normal text-gray-500 text-xs dark:text-gray-400 md:text-sm">Starting from</p>
                    <h5 class="text-md tracking-tight font-bold text-gray-900 dark:text-white md:text-lg">$450/person</h5>

                </div>
                <div class="w-full flex items-align justify-center">
                    <a href="#" class="w-full inline-flex justify-center px-6 py-2.5 bg-orange-500 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-orange-700 hover:shadow-lg focus:bg-orange-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-600 active:shadow-lg transition duration-150 ease-in-out">
                        Book now
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- Carousel -->

<!-- <section>
    <div class="flex">
        <div class="w-10 flex items-center">
            <div class="w-full text-right">
                <button onclick="prev()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                    </svg>
                </button>
            </div>
        </div>
        <div id="sliderContainer" class="w-10/12 overflow-hidden">
            <ul id="slider" class="flex w-full">
                <div class="max-w-sm  bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg h-60" src="./src/img/barcelona.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021.</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Book now
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="max-w-sm  bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg h-60 w-full" src="./src/img/monaco.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021.</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Book now
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="max-w-sm  bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg h-60" src="./src/img/barcelona.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021.</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Book now
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="max-w-sm  bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg h-60 w-full" src="./src/img/monaco.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021.</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Book now
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>


            </ul>
        </div>
        <div class="w-10 flex items-center">
            <div class="w-full">
                <button onclick="next()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg ml-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section> -->

<!-- Deals section -->
<section id="deals" class="px-6 my-10 md:px-8 md:my-14" style="font-family: 'Prosto One', cursive;">
    <!-- <h1 class="max-w-md text-1xl font-bold text-center my-6 md:text-3xl md:text-left md:my-8">
        Get Royal Deals
    </h1> -->
    <!-- Flex container -->
    <div class="container flex flex-col items-center mx-auto  gap-6 md:flex-row md:space-y-0">
        <!-- Right item -->
        <div class="flex flex-col content-center mb-22 space-y-12 md:w-1/2">
            <h1 class="max-w-md text-xl font-bold text-center md:text-3xl md:text-left" style="font-family: 'Prosto One', cursive;">
                Hot deals of the year
            </h1>
            <p class="max-w-sm text-center text-gray-500 md:text-left" style="font-family: 'Poppins', sans-serif;">
                Everyone deserves a vacation. You'll find endless opportunities to make the most of every moment-like game-changing activities, world-class dining, show-stopping entertainment, and plenty of ways to unwind in the sun
            </p>
            <div class="flex justify-center md:justify-start">
                <a href="#" class="p-3 px-6 pt-2 text-white bg-gray-900 rounded-sm baseline hover:bg-gray-900 md:block">View More</a>

            </div>
        </div>
        <!-- images-->
        <div class="w-full md:w-1/2">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="w-full sm:w-1/2 md:w-full h-44 xl:h-60 sm:mb-0 ">
                    <a class="block w-full rounded h-full bg-grey-dark bg-no-repeat bg-center bg-cover" href="#" title="Link" style="background-image: url(./src/img/bahamas.jpg);">

                    </a>
                </div>
                <div class="w-full sm:w-1/2 md:w-full h-44 xl:h-60">
                    <a class="block w-full rounded h-full bg-grey-dark bg-no-repeat bg-center bg-cover" href="#" title="Link" style="background-image: url(./src/img/barcelona.jpg);">

                    </a>
                </div>
                <div class="w-full sm:w-1/2 md:w-full h-44 xl:h-60">
                    <a class="block w-full  rounded h-full bg-grey-dark bg-no-repeat bg-center bg-cover" href="#" title="Link" style="background-image: url(./src/img/monaco.jpg);">

                    </a>
                </div>
                <div class="w-full sm:w-1/2 md:w-full h-44 xl:h-60">
                    <a class="block w-full  rounded h-full bg-grey-dark bg-no-repeat bg-center bg-cover" href="#" title="Link" style="background-image: url(./src/img/canada.jpg);">

                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA Section -->
<section id="id" class="block bg-white" style="font-family: 'Prosto One', cursive;">
    <hr class="my-4 shadow-xl sm:mx-auto border-gray-200 lg:my-6" />


    <div class="container flex flex-col items-center justify-between px-10 py-16 mx-auto space-y-12 md:py-8 md:flex-row md:space-y-0">
        <h2 class="text-xl font-bold leading-tight text-center text-dark md:text-2xl xl:text-3xl md:max-w-xl md:text-left">
            The Most Exciting Cruise Destinations And Award Winning Ships
        </h2>
        <div>
            <div class="w-60 sm:w-96">
                <label class="text-lg font-medium leading-5 text-gray-800 dark:text-white md:text-xl">Get Updates</label>
                <div class="flex gap-4 mt-4">
                    <input type="Email" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-orange-600 focus:outline-none" placeholder="Email" aria-label="Email" aria-describedby="button-addon2">
                    <button class="btn inline-block px-6 py-2.5 bg-orange-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-orange-600  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-600 active:shadow-lg transition duration-150 ease-in-out flex items-center" type="button" id="button-addon2">
                        <!-- <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                    </svg> -->
                        Send
                    </button>

                </div>

            </div>
        </div>
    </div>
    <hr class="my-4 shadow-xl sm:mx-auto border-gray-200 lg:my-6" />

</section>


<script>
    // let defaultTransform = 0;

    // function goNext() {
    //     defaultTransform = defaultTransform - 398;
    //     var slider = document.getElementById("slider");
    //     if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
    //     slider.style.transform = "translateX(" + defaultTransform + "px)";
    // }
    // next.addEventListener("click", goNext);

    // function goPrev() {
    //     var slider = document.getElementById("slider");
    //     if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
    //     else defaultTransform = defaultTransform + 398;
    //     slider.style.transform = "translateX(" + defaultTransform + "px)";
    // }
    // prev.addEventListener("click", goPrev);
    let sliderContainer = document.getElementById('sliderContainer');
    let slider = document.getElementById('slider');
    let cards = slider.getElementsByTagName('li');

    let elementsToShow = 3;
    if (document.body.clientWidth < 1000) {
        elementsToShow = 1;
    } else if (document.body.clientWidth < 1500) {
        elementsToShow = 2;
    }


    let sliderContainerWidth = sliderContainer.clientWidth;

    let cardWidth = sliderContainerWidth / elementsToShow;

    // slider.style.width = cards.length * cardWidth + 'px';
    slider.style.transition = 'margin';
    slider.style.transitionDuration = '1s';

    for (let index = 0; index < cards.length; index++) {
        const element = cards[index];
        element.style.width = cardWidth + 'px';
    }

    function prev() {
        if (+slider.style.marginLeft.slice(0, -2) != -cardWidth * (cards.length - elementsToShow))
            slider.style.marginLeft = ((+slider.style.marginLeft.slice(0, -2)) - cardWidth) + 'px';
    }

    function next() {
        if (+slider.style.marginLeft.slice(0, -2) != 0)
            slider.style.marginLeft = ((+slider.style.marginLeft.slice(0, -2)) + cardWidth) + 'px';
    }

    function autoPlay() {
        prev()

        if (+slider.style.marginLeft.slice(0, -2) === -cardWidth * (cards.length - elementsToShow)) {
            slider.style.marginLeft = "0px";
        }

        // setTimeout(() => {
        //     autoPlay();
        // }, 3000);
    }

    // setTimeout(() => {
    //     autoPlay();
    // }, 3000);
</script>

<?php

require APPROOT . '/views/includes/footer.php';
?>