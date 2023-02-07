<?php require APPROOT . '/views/includes/header.php'; ?>



<div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 ">
    <ul class="flex justify-center  flex-wrap -mb-px">
        <li class="mr-2">
            <a href="<?php echo URLROOT ?>/admin/cruisePanel" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 ">Cruises</a>
        </li>
        <li class="mr-2">
            <a href="<?php echo URLROOT ?>/admin/reservations" class="inline-block p-4  text-orange-600 border-b-2 border-orange-600  rounded-t-lg " aria-current="page">Reservations</a>
        </li>
        <li class="mr-2">
            <a href="<?php echo URLROOT ?>/admin/portPanel" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Ports</a>
        </li>
        <li class="mr-2">
            <a href="<?php echo URLROOT ?>/admin/shipPanel" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Ships</a>
        </li>

    </ul>
</div>


<div class="w-full min-h-screen font-sans text-gray-900 bg-gray-50 flex overflow-hidden">


    <main class=" flex-1 overflow-x-scroll px-4 ">
        <div class="flex items-center justify-between py-7 px-2">
            <div>
                <h1 class="text-2xl font-semibold leading-relaxed text-gray-800">All Reservations</h1>


            </div>
            <button class="inline-flex gap-x-2 items-center py-2.5 px-6 text-white bg-orange-600 rounded-md hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-1" data-modal-target="reservation-modal" data-modal-toggle="reservation-modal">

                <span class="text-sm font-semibold tracking-wide">Add Reservation</span>
            </button>
            <!-- Cruise Modal -->
            <div id="reservation-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                <div class="relative w-full h-full max-w-md md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="reservation-modal">
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
        <div class="w-full mb-8 overflow-hidden rounded-sm  p-2">

            <div class="w-full overflow-x-auto">
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
                                Client Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Cruise
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Reservation Date
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Room
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['reservations'] as $reserve) : ?>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <!-- <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td> -->
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Abdelmalek Achkif
                                </th>
                                <td class="px-6 py-4">
                                    Incredable Way
                                </td>
                                <td class="px-6 py-4">
                                    Fri, jan 19, 2023

                                </td>
                                <td class="px-6 py-4">
                                    $5,450
                                </td>
                                <td class="px-6 py-4">
                                    45
                                </td>

                                <td class="flex items-center px-6 py-4 space-x-3">
                                    <!-- <a href="#" class="font-medium text-green-600 dark:text-blue-500 hover:underline">Edit</a> -->
                                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Cancel</a>
                                </td>
                            </tr>

                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>
        </div>

    </main>
</div>