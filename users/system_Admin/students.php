<?php include '../../controllers/users.php' ?>
<?php include 'includes/title.php' ?>
<?php
    $title = "Students | hostels Savvy";
?>
<?php include('includes/header.php') ?>
<div id="content" class="bg-white/10 col-span-9 rounded-lg p-6">
    <div>
        <h1 class="font-bold py-4 uppercase">Students</h1>
        <!-- component -->
        <div class="md:px-32 py-8 w-full">
        <div class="shadow overflow-hidden rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Hostel</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Phone</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</td>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <?php foreach($students as $student):?>
                    <?php $booking = selectOne('booking',['student'=>$student['id']]);?>
                    <?php $hostelic = selectOne('hostels',['id'=>$booking['hostel']]);?>
                                            
                    <tr>
                        <td class="w-1/3 text-left py-3 px-4"><?php echo $student['fname']." ".$student['lname'];?> </td>
                        <?php if($booking != null || $hostelic != null):?>
                            <?php if($booking['status']== 1):?>
                                <td class="w-1/3 text-left py-3 px-4"><?php echo $hostelic['name'];?></td>
                            <?php endif;?>
                        <?php else:?>
                            <td class="w-1/3 text-left py-3 px-4">Not Assigned</td>
                        <?php endif;?>
                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662"><?php echo $student['phone']?></a></td>
                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com"><?php echo $student['email']?></a></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
            </table>
        </div>
        </div>
        
    </div>
</div>
<?php include('includes/footer.php')?>