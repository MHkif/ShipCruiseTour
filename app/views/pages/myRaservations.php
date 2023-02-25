<?php require APPROOT . '/views/includes/header.php'; ?>
<main class="container mx-auto px-12">
    <div class="flex items-center justify-between py-7 px-2">
        <div>
            <h1 class="text-2xl font-semibold leading-relaxed text-gray-800">My Reservations</h1>


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
                    Cruise
                </th>

                <th scope="col" class="px-6 py-3">
                    Reservation Date
                </th>

                <th scope="col" class="px-6 py-3">
                    Price (MAD)
                </th>
                <th scope="col" class="px-6 py-3">
                    Room number
                </th>

                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['reservations'] as $reserve) : ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?php echo $reserve->name ?>
                    </th>

                    <td class="px-6 py-4">
                        <?php echo $reserve->reservation_date ?>

                    </td>
                    <td class="px-6 py-4">
                        <?php echo $reserve->reservation_price ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $reserve->room_num ?>
                    </td>

                    <td class="flex items-center px-6 py-4 space-x-3">
                        <!-- <a href="#" class="font-medium text-green-600 dark:text-blue-500 hover:underline">Edit</a> -->
                        <a href="<?php echo URLROOT . '/client/cancel/' . $reserve->id ?>" class="font-medium text-red-600 dark:text-red-500 hover:underline">Cancel</a>
                    </td>
                </tr>

            <?php endforeach ?>

        </tbody>
    </table>


</main>