<?php

require APPROOT . '/views/includes/header.php';
?>

<!-- Reservation -->
<section id="reservation" class="px-4 sm:px-6 md:px-16 pt-6">
    <div class="container-fluid bg-white rounded-md flex flex-col items-center justify-center gap-6">

        <!-- <h1 class="max-w-md text-lg font-bold text-center md:text-xl text-gray-800" style="font-family: 'Prosto One', cursive;">
            Choose Your Cruise
        </h1> -->
        <div class="px-4 w-full block md:flex flex-wrap justify-center items-start py-4 gap-6 space-y-4 md:space-y-0" style="font-family: 'Poppins', sans-serif;">

            <div class="flex flex-col w-full sm:w-96 md:w-48 gap-2">
                <label for="select cruise" class="text-base font-medium text-gray-800">Cruising To</label>
                <select class="form-select appearance-none block w-full px-3 py-1.5 text-sm font-normal text-gray-700 bg-white border border-solid border-gray-300 rounded" aria-label="Default select example">
                    <option selected>Destinations</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="flex flex-col w-full sm:w-96 md:w-44 gap-2">
                <label for="select cruise" class="text-base font-medium text-gray-800">Departing From</label>
                <select class="form-select appearance-none block w-full px-3 py-1.5 text-sm font-normal text-gray-700 bg-white border border-solid border-gray-300 rounded" aria-label="Default select example">
                    <option selected>Departure Port</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="flex flex-col w-full sm:w-96 md:w-44 gap-2">
                <label for="select cruise" class="text-base font-medium text-gray-800">Nights</label>
                <select class="form-select appearance-none block w-full px-3 py-1.5 text-sm font-normal text-gray-700 bg-white border border-solid border-gray-300 rounded" aria-label="Default select example">
                    <option selected>Number of Nights</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="flex flex-col w-full sm:w-96 md:w-44 gap-2">
                <label for="select cruise" class="text-base font-medium text-gray-800">Ships</label>
                <select class="form-select appearance-none block w-full px-3 py-1.5 text-sm font-normal text-gray-700 bg-white border border-solid border-gray-300 rounded" aria-label="Default select example">
                    <option selected>Choose a Ship</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class=" flex flex-col  gap-2">
                <label for="select date" class="text-center font-medium text-gray-800">Cruise Date</label>
                <!-- <div class="datepicker relative form-floating" data-mdb-toggle-button="false"> -->
                <!-- <input type="text" name="datefilter" class="form-control block w-full px-3 py-1.5 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Select a date" /> -->
                <!-- </div> -->

                <div date-rangepicker class="flex items-center">
                    <div class="relative w-full sm:w-96 md:w-44">
                        <div class="flex absolute inset-y-0 right-0 items-center pr-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-700 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input name="start" type="text" class="form-control block w-full px-3 py-1.5 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="dd/mm/yy">
                    </div>
                    <span class="mx-4 text-gray-500">to</span>
                    <div class="relative w-full sm:w-96 md:w-44">
                        <div class="flex absolute inset-y-0 right-0 items-center pr-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-700 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input name="end" type="text" class="form-control block w-full px-3 py-1.5 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="dd/mm/yy">
                    </div>
                </div>

            </div>



        </div>
        <div class="flex space-x-2 justify-center ">
            <button type="button" class="w-full inline-flex justify-center px-6 py-2.5 bg-orange-500 text-white font-medium text-sm leading-normal uppercase rounded shadow-md hover:bg-orange-700 hover:shadow-lg focus:bg-orange-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-600 active:shadow-lg transition duration-150 ease-in-out">Search</button>
        </div>
    </div>
</section>


<div class="container px-4 py-6 md:px-10">
    <div class="flex flex-col space-y-8">
        <h1 class="max-w-md text-xl font-bold text-center my-4 md:text-2xl md:text-left" style="font-family: 'Poppins', sans-serif;">
            All Cruises
        </h1>
        <!-- Items -->
        <?php foreach ($data['cruises'] as $cruise) : ?>

            <div class="items-center md:justify-between w-full rounded-lg group sm:flex  bg-white bg-opacity-50 shadow-lg hover:rounded-xl" style="font-family: 'Poppins', sans-serif;">
                <!--  -->
                <div class="flex flex-col md:flex-row">
                    <img class="block w-full rounded-t-lg h-60 md:rounded-l-lg md:w-1/3" alt="art cover" loading="lazy" src='<?php echo URLROOT . "/uploads/cruises/" . $cruise->image ?>' />
                    <div class="p-4 flex flex-col justify-between md:p-8 gap-2">
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
                    <a href="#" class="w-full inline-flex justify-center px-6 py-2.5 bg-orange-500 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-orange-700 hover:shadow-lg focus:bg-orange-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-600 active:shadow-lg transition duration-150 ease-in-out">
                        Book now
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>


    </div>
</div>


<!-- Pagination -->

<nav aria-label="Page navigation example" class="w-full flex justify-center py-8">
    <ul class="inline-flex -space-x-px">
        <li>
            <a href="#" class="px-3 py-2 ml-0 leading-tight text-white bg-orange-500 rounded-l-sm hover:bg-gray-100 hover:text-gray-700 ">Previous</a>
        </li>
        <li>
            <a href="#" aria-current="page" class="px-3 py-2 text-orange-600  bg-orange-50 hover:bg-orange-100 hover:text-orange-700">1</a>
        </li>
        <li>
            <a href="#" class="px-3 py-2 leading-tight text-gray-600 bg-white  hover:bg-gray-100 hover:text-gray-700 ">2</a>
        </li>
        <li>
            <a href="#" class="px-3 py-2 leading-tight text-gray-600 bg-white  hover:bg-gray-100 hover:text-gray-700 ">3</a>
        </li>
        <li>
            <a href="#" class="px-3 py-2 leading-tight text-gray-600 bg-white  hover:bg-gray-100 hover:text-gray-700 ">4</a>
        </li>
        <li>
            <a href="#" class="px-3 py-2 leading-tight text-gray-600 bg-white  hover:bg-gray-100 hover:text-gray-700 ">5</a>
        </li>
        <li>
            <a href="#" class="px-3 py-2 leading-tight text-white bg-orange-500 rounded-r-sm hover:bg-gray-100 hover:text-gray-700 ">Next</a>
        </li>
    </ul>
</nav>

<script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>

<?php

require APPROOT . '/views/includes/footer.php';
?>