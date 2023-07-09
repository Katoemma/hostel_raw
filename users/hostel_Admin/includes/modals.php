<!--Add room modal -->
<div id="roomModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center " data-modal-hide="roomModal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900">Add New Room</h3>
                <?php include('../../helpers/message.php') ?>
                <form action="rooms.php" method="post" class="space-y-6">
                    <div>
                        <label for="room" class="block mb-2 text-sm font-medium text-gray-900">Room Number</label>
                        <input type="number" name="room" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>

                    <div>
                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose room type</label>
                        <select name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Choose Type</option>
                            <option value="S">Single</option>
                            <option value="D">Double</option>
                            <option value="T">Triple</option>
                        </select>
                    </div>
                    <input type="hidden" name="hostel" value="<?php echo $hostel['id'] ?>">
                    <button type="submit" name="addRoom" class="w-full text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add Room</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Add approval modal -->
<div id="approveModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center " data-modal-hide="approveModal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900">Assign Room</h3>
                <?php include('../../helpers/message.php') ?>
                <form action="bookings.php" method="post" class="space-y-6">
                    <input type="hidden" name="id" value="<?php echo $booking['id'];?>">
                    <input type="hidden" name="status" value="1">
                    <div>
                        <?php
                            $hostelId =$hostel['id'];
                            $query = "SELECT * FROM rooms WHERE room NOT IN (SELECT room FROM booking) AND hostel= $hostelId";
                            $result = mysqli_query($conn, $query);
                            $unbookedrooms =  mysqli_fetch_all($result,MYSQLI_ASSOC);
                        ?>
                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose room Number</label>
                        <select name="room" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Choose Type</option>
                            <?php foreach($unbookedrooms as $unbooked):?>
                                <option value="<?php echo $unbooked['room'] ?>"><?php echo $unbooked['room'] ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <button type="submit" name="approve" class=" w-full mt-2 px-4 py-2 bg-green-600 text-gray-100 font-semibold rounded-lg">Approve</button>
                </form>
            </div>
        </div>
    </div>
</div> 