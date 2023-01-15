<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" /> -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Lobster&family=Zen+Dots&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Lobster&family=Poppins:wght@400;500&family=Prosto+One&family=Zen+Dots&display=swap" rel="stylesheet">
    <!-- ICONS -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/58c375ca00.js" crossorigin="anonymous"></script>

    <title><?php echo SITENAME; ?></title>

</head>

<body>

    <?php require APPROOT . '/views/dashboard/includes/navbarDash.php'; ?>



    <div class="w-full min-h-screen font-sans text-gray-900 bg-gray-50 flex overflow-hidden pt-16">

        <aside class="py-2 w-64 shadow-sm bg-white fixed left-0  min-h-screen">
            <div class="px-3 py-4 overflow-y-auto rounded">
                <ul class="space-y-2">
                    <li>
                        <a href="<?php echo URLROOT ?>/admin/statistics" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3">Statistics</span>
                        </a>
                    </li>


                    <li>
                        <a href="<?php echo URLROOT ?>/admin/reservations" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Reservations</span>
                        </a>
                    </li>

                    <li class="p-0.2 bg-orange-500 rounded">
                        <a href="<?php echo URLROOT ?>/admin/cruisePanel" class="flex items-center p-2 text-base font-medium text-white rounded dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true" class="w-6 h-6 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Cruises</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo URLROOT ?>/admin/roomPanel" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Rooms</span>
                        </a>
                    </li>
                    <a href="<?php echo URLROOT ?>/admin/usersPanel" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                    </a>
                    </li>

                    <li>
                        <a href="<?php echo URLROOT ?>/admin/shipPanel" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Ships</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo URLROOT ?>/admin/portPanel" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Ports</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo URLROOT ?>/admin/inboxPanel" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                                <path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                            <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
                        </a>
                    </li>
                    <hr class="my-4 shadow-xl sm:mx-auto border-gray-100 lg:my-6" />

                    <li class="fixed bottom-0 py-4">
                        <a href="<?php echo URLROOT ?>/admin/settings" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Settings</span>
                            <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                        </a>
                    </li>
                </ul>
            </div>

        </aside>

        <main class="ml-64 flex-1 overflow-x-scroll px-4 ">
            <div class="flex items-center justify-between py-7 px-2">
                <div>
                    <h1 class="text-2xl font-semibold leading-relaxed text-gray-800">Cruises</h1>


                </div>
                <button class="inline-flex gap-x-2 items-center py-2.5 px-6 text-white bg-orange-600 rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-1" data-modal-target="cruise-modal" data-modal-toggle="cruise-modal" type="button">

                    <span class="text-sm font-semibold tracking-wide">Create Cruise</span>
                </button>

                <!-- Cruise Modal -->
                <div id="cruise-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                    <div class="relative w-full h-full max-w-md md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="cruise-modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="px-4 py-8 lg:px-6 flex flex-col gap-8">
                                <!-- <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3> -->
                                <div class="flex items-center justify-center" aria-label="Home" role="img" style="font-family: 'Prosto One', cursive;">
                                    <p class="ml-2  text-base  font-bold text-dark dark:text-white">Create New Cruise</p>
                                </div>
                                <form class="space-y-4" action="admin/createCruise" method="POST" enctype="">
                                    <div class="w-full flex gap-4">
                                        <div class="w-full">
                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cruise name</label>
                                            <input type="text" name="name" id="name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Cruise name" required>

                                        </div>
                                        <div class="w-full">
                                            <label for="ship" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ship name</label>
                                            <!-- <input type="text" name="ship" id="ship" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ship name" required> -->
                                            <select name="ship" id="ship" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" aria-label="Default select example" required>
                                                <option value="" disabled selected>Ship name</option>
                                                <?php foreach ($data['ships'] as $ship) : ?>


                                                    <option value="<?php echo $ship->id ?>"><?php echo $ship->name ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="w-full flex gap-4">
                                        <div class="w-full">
                                            <label for="port_depart" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Derparture Port</label>
                                            <!-- <input type="text" name="port_depart" id="port_depart" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Port name" required> -->
                                            <select name="port_depart" id="port_depart" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" aria-label="Default select example" required>
                                                <option value="" disabled selected>Port name</option>
                                                <?php foreach ($data['ports'] as $port) : ?>


                                                    <option value="<?php echo $port->id ?>"><?php echo $port->name ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="w-full">
                                            <label for="date_depart" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Derparture Date</label>
                                            <input type="date" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Select a date" data-mdb-toggle="datepicker" />
                                        </div>
                                    </div>


                                    <div class="w-full flex gap-4">
                                        <div class="w-full">
                                            <label for="room_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Room Type</label>
                                            <!-- <input type="text" name="room_type" id="room_type" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Cruise name" required> -->
                                            <select class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" aria-label="Default select example" required>
                                                <option value="" disabled selected>Solo</option>
                                                <?php foreach ($data['rooms'] as $room) : ?>
                                                    <option value="<?php echo $room->id ?>"><?php echo $room->name ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="w-full">
                                            <label for="room_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Room Number</label>
                                            <input type="number" onkeyup="take(this.value)" name="room_number" id="room_number" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Room number" required>

                                        </div>
                                    </div>
                                    <div class="w-full flex gap-4">
                                        <div class="w-full">
                                            <label for="night_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nights Number</label>
                                            <input type="number" name="night_number" id="night_number" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nights number" required>

                                        </div>
                                        <div class="w-full">
                                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                            <input type="number" name="price" id="price" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Cruise Price" required>

                                        </div>
                                    </div>
                                    <div class="w-full flex gap-4">
                                        <div class="w-full">
                                            <label for="Itinerary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Itinerary</label>
                                            <input type="text" name="Itinerary" id="Itinerary" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Cruise Itinerary" required>

                                        </div>
                                        <div class="w-full">
                                            <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cruise Image</label>
                                            <input type="file" name="image" id="image" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full px-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Cruise Price" required>

                                        </div>
                                    </div>

                                    <button type="submit" class="w-full text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" style="font-family: 'Poppins', sans-serif;">

                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <!-- <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th> -->

                        <th scope="col" class="px-6 py-3">
                            Ship
                        </th>
                        <th scope="col" class="px-6 py-3">
                            price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            image
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Number of nights
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Derparture Port
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Itinerary
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Derparture Date
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <!-- <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td> -->
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            ALLURE OF SEAS
                        </th>
                        <td class="px-6 py-4">
                            $349 * 3
                        </td>
                        <td class="px-6 py-4">
                            image
                        </td>
                        <td class="px-6 py-4">
                            3 Nights
                        </td>
                        <td class="px-6 py-4">
                            Orlando (Port Canaveral), Florida
                        </td>
                        <td class="px-6 py-4">
                            Orlando (Port Canaveral), FloridaNassau, BahamasPerfect Day at CocoCay, BahamasOrlando (Port Canaveral), Florida
                        </td>
                        <td class="px-6 py-4">
                            Fri, jan 19, 2023
                        </td>
                        <td class="flex items-center px-6 py-4 space-x-3">
                            <!-- <a href="#" class="font-medium text-green-600 dark:text-blue-500 hover:underline">Edit</a> -->
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Cancel</a>
                        </td>
                    </tr>

                </tbody>
            </table>


        </main>
    </div>


    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>


    <script>
        function take(num) {
            let roomType = document.getElementById("room_type");
            let roomNum = document.getElementById("room_number");
            let roomPrice = document.getElementById("price");

            // roomPrice.value = num;




            const xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                roomNum.value = 1;

                xmlhttp.open("GET", "admin/datamodel/", true);
                xmlhttp.send();

            }}
    </script>

</body>

</html>