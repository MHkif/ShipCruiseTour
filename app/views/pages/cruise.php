<?php

require APPROOT . '/views/includes/header.php';
?>
<?php flash("message"); ?>
<!-- reservation Modal -->
<div id="reservation-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-screen">
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
                    <p class="ml-2  text-base  font-bold text-dark dark:text-white">Reserve Your Cruise</p>
                </div>
                <form class="space-y-4 " action="admin/createCruise" method="POST" enctype="">
                    <div class="w-full flex gap-4">
                        <div class="w-full">
                            <label for="client" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client name</label>
                            <input type="text" name="client" id="client" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white hover:read-only " placeholder="Client name" required>

                        </div>
                        <div class="w-full">
                            <label for="cruise" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cruise name</label>
                            <!-- <input type="text" name="ship" id="ship" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ship name" required> -->
                            <input type="text" name="cruise" id="cruise" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white hover:read-only " placeholder="Cruise name" required>


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
                            <label for="ship" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ship</label>
                            <input type="text" value="<?php echo $data['cruises'][0]->ship_name ?>" name="ship" id="ship" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ship name" required>

                        </div>
                        <div class="w-full">
                            <label for="night_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nights Number</label>
                            <input type="number" name="night_number" id="night_number" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nights number" required>

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
                            <select class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" aria-label="Default select example" required>
                                <option value="" disabled selected>Select room number</option>
                                <?php foreach ($data['rooms'] as $room) : ?>
                                    <option value="<?php echo $room->id ?>"><?php echo $room->room_num ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="w-full flex gap-4">

                        <div class="w-full">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                            <input type="number" name="price" id="price" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Cruise Price" required>

                        </div>
                        <div class="w-full">
                            <label for="Itinerary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Itinerary</label>
                            <input type="text" name="Itinerary" id="Itinerary" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Cruise Itinerary" required>

                        </div>
                    </div>


                    <button type="submit" class="w-full text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create</button>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- Search -->
<section id="reservation" class="px-4 sm:px-6 md:px-16 pt-6 bg-white">
    <div class="container-fluid bg-white rounded-md flex flex-col items-center justify-center gap-6">

        <h1 class="max-w-md text-lg font-bold text-center md:text-xl text-gray-800" style="font-family: 'Prosto One', cursive;">
            Choose Your Cruise
        </h1>
        <div class="px-4 w-full block md:flex flex-wrap justify-center items-end py-4 gap-6 space-y-4 md:space-y-0 bg-white" style="font-family: 'Poppins', sans-serif;">

            <form action="<?php echo URLROOT . '/pages/filterShip' ?>" method="POST">

                <div class="flex flex-col w-full sm:w-96 md:w-44 gap-2">
                    <label for="select ship" class="text-base font-medium text-gray-800">Ship</label>
                    <select onchange="this.form.submit();" name="filterShip" class="form-select appearance-none block w-full px-3 py-1.5 text-sm font-normal text-gray-700 bg-white border border-solid border-gray-300 rounded" aria-placeholder="ship" aria-label="Default select example">
                        <option selected disabled>Select a Ship</option> <?php foreach ($data['ships'] as $ship) : ?>
                            <option value="<?php echo $ship->id ?>"><?php echo $ship->name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </form>
            <form action="<?php echo URLROOT . '/pages/filterPort' ?>" method="POST">
                <div class="flex flex-col w-full sm:w-96 md:w-44 gap-2">
                    <label for="select cruise" class="text-base font-medium text-gray-800">Port</label>
                    <select onchange="this.form.submit();" name="filterPort" class="form-select appearance-none block w-full px-3 py-1.5 text-sm font-normal text-gray-700 bg-white border border-solid border-gray-300 rounded" placeholder="Departing From" aria-label="Departing From">
                        <option selected disabled>Select a Port</option> <?php foreach ($data['ports'] as $port) : ?>
                            <option value="<?php echo $port->id ?>"><?php echo $port->name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </form>
            <form action="<?php echo URLROOT . '/pages/filterMonth' ?>" method="POST">
                <div class=" flex flex-col w-full sm:w-96 md:w-44 gap-2">
                    <label for="select date" class="text-base font-medium text-gray-800">Cruise Date</label>
                    <input onchange="this.form.submit();" name="filterDate" type="date" class="form-control block w-full px-3 py-1.5 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="dd/mm/yy">

                </div>
            </form>



        </div>


    </div>
</section>





<!-- Cruises -->
<div class="container-fluid flex flex-col justify-center items-center bg-white space-y-12 px-4 md:px-10 mt-10">
    <h1 class="max-w-md text-xl font-bold text-center md:text-2xl md:text-left" style="font-family: 'Poppins', sans-serif;">
        All Cruises
    </h1>


    <ul id="paginated-list" data-current-page="1" aria-live="polite" class="grid grid-cols px-4 w-full gap-8">
        <?php foreach ($data['cruises'] as $cruise) : ?>
            <li>

                <div id='<?php echo $cruise->cruise_id ?>' class="drop-shadow-sm items-center md:justify-between w-full rounded-lg group md:flex  bg-white  hover:rounded-xl" style="font-family: 'Poppins', sans-serif;">
                    <!--  -->
                    <div class="flex w-full flex-col md:flex-row">
                        <img class="block w-full rounded-t-lg h-60 md:rounded-l-lg md:w-1/3" alt="art cover" loading="lazy" src='<?php echo URLROOT . "/uploads/cruises/" . $cruise->image ?>' />
                        <div class="p-4 w-auto flex flex-col justify-between md:p-8 gap-2">
                            <h4 class="text-md font-semibold text-dark md:text-lg" style="font-family: 'Prosto One', cursive;">
                                <?php echo $cruise->nights_number ?> Nights
                            </h4>
                            <h4 class="text-md font-semibold text-gray-800 md:text-lg">
                                <?php echo $cruise->name ?>
                            </h4>

                            <div class="flex flex-col  baseline sm:flex-row">
                                <h4 class="text-sm font-semibold text-gray-600 md:text-md">
                                    ROUNDTRIP FROM : &nbsp;
                                </h4>
                                <span class="text-sm text-gray-500"> <?php echo $cruise->depart_port ?>.</span>
                            </div>
                            <div class="flex flex-col  baseline sm:flex-row">
                                <h4 class="text-sm font-semibold text-gray-600 md:text-md">
                                    DEPARTURE DATE : &nbsp;
                                </h4>
                                <span class="text-sm text-gray-500"> <?php echo $cruise->depart_date ?>.</span>
                            </div>
                            <div class="flex flex-col baseline sm:flex-row">
                                <h4 class="text-sm font-semibold text-gray-600 md:text-md">VISITING : &nbsp; </h4>
                                <span class="text-sm text-gray-500"> <?php echo $cruise->itinerary_name ?> .</span>
                            </div>
                        </div>

                    </div>
                    <!--  -->
                    <div class=" p-4 flex md:items-center flex-col space-y-2 justify-center md:space-y-4 md:p-8">
                        <h3 class="text-2xl font-semibold text-cyan-900 sm:text-3xl" style="font-family: 'Prosto One', cursive;">
                            <?php echo $cruise->price ?> $
                        </h3>
                        <h3 class="text-md font-semibold text-cyan-900 sm:text-lg">
                            AVG PER PERSON
                        </h3>
                        <?php if (isset($_SESSION['user_id'])) : ?>
                            <a id="book" type="button" href="<?php echo URLROOT . '/client/reservations/' . $cruise->cruise_id ?>" class="inline-flex justify-center px-4 py-2.5 bg-orange-500 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-orange-700  cursor-pointer hover:shadow-lg focus:bg-orange-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-600 active:shadow-lg transition duration-150 ease-in-out">

                                Book now

                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        <?php endif ?>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>

    </ul>

    <nav class="pagination-container inline-flex overflow-x-scroll">
        <button class="pagination-button px-1 sm:px-3 sm:py-1 ml-0 leading-tight text-white bg-orange-500 rounded-l-sm hover:bg-gray-900 hover:text-gray-100 " id="prev-button" aria-label="Previous page" title="Previous page">
            Previous
        </button>

        <div id="pagination-numbers">

        </div>

        <button class="pagination-button px-3 py-2 ml-0 leading-tight text-white bg-orange-500 rounded-r-sm hover:bg-gray-900 hover:text-gray-100" id="next-button" aria-label="Next page" title="Next page">
            Next
        </button>
    </nav>
</div>




<script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
<script>
    let xhr = new XMLHttpRequest;
</script>

<?php

require APPROOT . '/views/includes/footer.php';
?>