<?php

require APPROOT . '/views/includes/header.php';


?>

<!-- <?php print_r($_SESSION); ?> -->
<div class="flex flex-col justify-center  px-6 lg:px-8">

    <div class=" sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-6 lg:px-8">
            <form class="space-y-4 " action="<?php echo URLROOT . '/client/reserveCruise/' . $data['cruise']->cruise_id ?>" method="POST" enctype="">
                <div class="w-full flex gap-4">
                    <div class="w-full">
                        <label for="client" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client name</label>
                        <input type="text" readonly value="<?php echo $_SESSION['user_name']; ?>" name="client" id="client" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white hover:read-only " placeholder="Client name" required>

                    </div>
                    <div class="w-full">
                        <label for="cruiseId " class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cruise name</label>
                        <input type="text" readonly value="<?php echo $data['cruise']->name; ?>" name="cruiseId" id="cruiseId" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white hover:read-only " placeholder="Cruise name" required>


                    </div>
                </div>
                <div class="w-full flex gap-4">
                    <div class="w-full">
                        <label for="port_depart" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Departure Port</label>
                        <!-- <input type="text" name="port_depart" id="port_depart" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Port name" required> -->
                        <input type="text" readonly value="<?php echo $data['cruise']->depart_port; ?>" name="port_depart" id="port_depart" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>

                    </div>

                    <div class="w-full">
                        <label for="date_depart" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Departure Date</label>
                        <input readonly value="<?php echo $data['cruise']->depart_date; ?>" type="date" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Select a date" data-mdb-toggle="datepicker" />
                    </div>
                </div>

                <div class="w-full flex gap-4">
                    <div class="w-full">
                        <label for="ship" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ship</label>
                        <input type="text" value="<?php echo $data['cruise']->ship_name ?>" name="ship" id="ship" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ship name" required>

                    </div>
                    <div class="w-full">
                        <label for="night_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nights Number</label>
                        <input type="number" readonly value="<?php echo $data['cruise']->nights_number; ?>" name="night_number" id="night_number" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nights number" required>

                    </div>
                </div>


                <div class="w-full flex gap-4">

                    <div class="w-full">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price <small>(MAD)</small></label>
                        <input type="number" readonly value="<?php echo $data['cruise']->price; ?>" name="price" id="price" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Cruise Price" required>

                    </div>
                    <div class="w-full">
                        <label for="Itinerary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Itinerary</label>
                        <input type="text" readonly value="<?php echo $data['cruise']->itinerary_name; ?>" name="Itinerary" id="Itinerary" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Cruise Itinerary" required>

                    </div>
                </div>
                <div class="w-full flex gap-4">
                    <div class="w-full">
                        <label for="room_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Room Type</label>
                        <!-- <input type="text" name="room_type" id="room_type" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Cruise name" required> -->
                        <select name="room_id" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" aria-label="Default select example" required>
                            <option value="" disabled selected>Solo</option>
                            <?php foreach ($data['rooms'] as $room) : ?>
                                <option value="<?php echo $room->id ?>"><?php echo $room->name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="room_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Room Number</label>
                        <input type="number" name="room_number" id="room_number" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Room number" required>

                    </div>
                </div>

                <button type="submit" class="w-full text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create</button>

            </form>
        </div>
    </div>
</div>