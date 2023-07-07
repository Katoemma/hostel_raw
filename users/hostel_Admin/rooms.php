<?php include '../../controllers/rooms.php' ?>
<?php include 'includes/header.php' ?>
<?php include '../alert.php' ?>
<div id="content" class="bg-white/10 col-span-9 rounded-lg p-6">
    
    <div>
        <div class="flex justify-between items-center">
            <h1 class="font-bold py-4 uppercase">Rooms (<?php echo count($rooms);?>)</h1>

            <div class="flex items-center">
                <button type="button" data-modal-target="roomModal" data-modal-toggle="roomModal" class="px-4 py-1 bg-green-600 text-gray-100 font-semibold rounded-lg">Add Room</button>
            </div>
        </div>

        <!-- Room table -->
        <div class="md:px-32 py-8 w-full">
            <div class="flex flex-col md:flex-row gap-4 shadow rounded border-gray-200">
            <table class="flex flex-col w-full md:w-1/2 bg-white rounded-lg" style="max-height: 384px;">
                    <thead class="bg-green-600 text-white ">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Room No</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">type</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 overflow-y-auto">
                        <?php
                            $rooms = selectAll('rooms',['hostel'=>$hostel['id'],'status'=>1]);
                        ?>
                        <?php foreach ($rooms as $key => $room):?>
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4"><?php echo $room['number'];?></td>
                                <?php if ($room['type'] == "S"):?>
                                    <td class="w-1/3 text-left py-3 px-4">Single</td>
                                <?php elseif($room['type'] == "D"):?>
                                    <td class="w-1/3 text-left py-3 px-4">Double</td>
                                <?php else:?>
                                    <td class="w-1/3 text-left py-3 px-4">Triple</td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach;?>
                        
                    </tbody>
                </table>
                <table class="flex flex-col w-full md:w-1/2 bg-white rounded-lg" style="max-height: 384px;">
                    <thead class="bg-red-600 text-white w-full">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Room No</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">type</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 overflow-y-auto w-full">
                        <?php
                            $rooms = selectAll('rooms',['hostel'=>$hostel['id'],'status'=>0]);
                                    
                            //arange rooms numbers in ascending
                            usort($rooms, function($a, $b) {
                                return $a['number'] - $b['number'];
                            });
                        ?>
                        <?php foreach ($rooms as $key => $room):?>
                            <tr class="w-full border-b border-gray-600">
                                <td class="w-1/3 text-left py-3 px-4 text-center"><?php echo $room['number'];?></td>
                                <?php if ($room['type'] == "S"):?>
                                    <td class="w-1/3 text-left py-3 px-4 text-center">Single</td>
                                <?php elseif($room['type'] == "D"):?>
                                    <td class="w-1/3 text-left py-3 px-4 text-center">Double</td>
                                <?php else:?>
                                    <td class="w-1/3 text-left py-3 px-4 text-center">Triple</td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach;?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end of the activity -->
</div>

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
                                <input type="number" name="number" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
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

<?php include 'includes/footer.php' ?>