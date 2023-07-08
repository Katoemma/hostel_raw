<?php include '../../controllers/users.php' ?>
<?php include 'includes/header.php'?>

<div id="content" class="bg-white/10 col-span-9 rounded-lg p-6">
    <div>
        <div class="flex justify-between items-center">
            <h1 class="font-bold py-4 uppercase">Rooms ()</h1>
            <div class="flex items-center">
                <button type="button" data-modal-target="roomModal" data-modal-toggle="roomModal" class="px-4 py-1 bg-green-600 text-gray-100 font-semibold rounded-lg">Add Room</button>
            </div>
        </div>

        <!-- Room table -->
        <div class="md:px-32 py-8 w-full">
            <div class="shadow rounded border-gray-200">
                <?php
                    $bookings = selectAll('booking');
                    
                ?>
                <table class="w-full bg-white rounded-lg">
                    <thead class="bg-green-600 text-white">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Student Name</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Room Type</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Booked on</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <?php foreach($bookings as $booking):?>
                            <?php
                                $student = selectOne('users',['id'=>$booking['student']]);
                            ?>
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4"><?php echo $student['fname']." ".$student['lname'] ?></td>
                                <?php if($booking['type']== "S") :?>
                                    <td class="w-1/3 text-left py-3 px-4">Single</td>
                                <?php else: ?>
                                    <td class="w-1/3 text-left py-3 px-4">Double</t>
                                <?php endif; ?>
                                <td class="w-1/3 text-left py-3 px-4"><?php echo date('d-m-y', strtotime($booking['booked'])); ?></td>
                                <td class="w-1/3 text-left py-3 px-4">
                                    <button type="button" class="px-4 py-1 bg-blue-600 text-gray-100 font-semibold rounded-lg">Approve</button>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end of the activity -->
</div>
<?php include 'includes/modals.php'?>
<?php include 'includes/footer.php'?>

