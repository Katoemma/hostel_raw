<?php include '../../controllers/users.php' ?>
<?php include('includes/header.php') ?>
<div id="content" class="bg-white/10 col-span-9 rounded-lg p-6">
    <div>
        <h1 class="font-bold py-4 uppercase">Hostels</h1>
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
                    <?php
                        // $booking = selectOne('booking',['student'=>3]);
                        // var_dump($booking);
                        // $hostel = selectOne('hostel',['id'=>$booking['hostel']]);
                    ?>
                <?php foreach($students as $student):?>
                    
                    <tr>
                        <td class="w-1/3 text-left py-3 px-4"><?php echo $student['fname']." ".$student['lname'];?> </td>
                        <td class="w-1/3 text-left py-3 px-4"></td>
                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">+25678807801</a></td>
                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">johnDoe@stustay.com</a></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
            </table>
        </div>
        </div>
        
    </div>
</div>
<?php include('includes/footer.php') ?>