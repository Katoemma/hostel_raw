<?php include '../../controllers/rooms.php' ?>
<?php include 'includes/title.php' ?>
<?php
    $title = "Rooms | ".$hostel['name']." | HostelSavvy";
    $description = $hostel['description'];
?>
<?php include 'includes/security.php'?>
<?php include 'includes/header.php' ?>
<div id="content" class="bg-white/10 col-span-9 rounded-lg p-6">
    
    <div>
        <div class="flex justify-between items-center">
            <?php $totalRooms = selectAll('rooms',['hostel'=>$hostel['id']]);?>
            <h1 class="font-bold py-4 uppercase">Rooms (<?php echo count($totalRooms);?>)</h1>

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
                    
                            $rooms = selectAll('booking',['hostel'=>$hostel['id'],'status'=>1]);
                        ?>
                        <?php foreach ($rooms as $key => $roomy):?>
                            <tr>
                                <?php $thisroom = selectOne('rooms',['id'=>$roomy['room']]);?>
                                <td class="w-1/3 text-gray-700 text-left py-3 px-4"><?php echo $thisroom['room'];?></td>
                                <?php if ($roomy['type'] == "S"):?>
                                    <td class="w-1/3 text-left py-3 px-4">Single</td>
                                <?php elseif($roomy['type'] == "D"):?>
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
                            $hostelId =$hostel['id'];
                            $query = "SELECT * FROM rooms WHERE id NOT IN (SELECT room FROM booking) AND hostel=$hostelId ";
                            $result = mysqli_query($conn, $query);
                            $rooms =  mysqli_fetch_all($result,MYSQLI_ASSOC);
                                    
                            //arange rooms numbers in ascending
                        ?>
                        <?php foreach ($rooms as $key => $room):?>
                            <tr class="w-full border-b border-gray-600">
                                <td class="w-1/3 text-left py-3 px-4 text-center"><?php echo $room['room'];?></td>
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

<?php include 'includes/modals.php' ?>

<?php include 'includes/footer.php' ?>