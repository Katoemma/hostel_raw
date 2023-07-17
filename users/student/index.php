<?php include '../../controllers/users.php' ?>
<?php include 'includes/title.php' ?>
<?php
    $title = "Students Dashboard | hostels savvy";
    $decription = "Students dashboard that displays students details";
?>
<?php include 'includes/header.php' ?>     
        <!-- end of side menu -->
        <div id="content" class="bg-white/10 col-span-9 rounded-lg p-6">
            <div id="24h">
                <h1 class="font-bold py-4 uppercase">My Dashboard</h1>
                <div id="stats" class="grid gird-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-black/60 to-white/5 p-6 rounded-lg">
                        <div class="flex flex-row space-x-4 items-center">
                            <div>
                                <p class="text-indigo-300 text-sm font-medium uppercase leading-4">My Hostel</p>
                                <p class="text-white font-bold text-xl inline-flex items-center space-x-2">
                                    <?php if(!$booked):?>
                                        <p class="text-white font-medium">No hostel</p>
                                    <?php else:?>
                                    <?php $myHostel = selectOne('hostels',['id'=>$booked['hostel']]);?>
                                    
                                    <span><?php echo $myHostel['name']?></span>
                                    <?php endif;?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-black/60 p-6 rounded-lg">
                        <div class="flex flex-row space-x-4 items-center">
                            <div>
                                <p class="text-teal-300 text-sm font-medium uppercase leading-4">Room Number</p>
                                <p class="text-white font-bold text-xl inline-flex items-center space-x-2">
                                    <?php if(!$booked):?>
                                        <p class="text-white font-medium">No Room</p>
                                    <?php else:?>
                                        <?php $myRoom = selectOne('rooms',['id'=>$booked['room']]) ?>
                                        <span><?php echo $myRoom['room']?></span>
                                    <?php endif;?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-black/60 p-6 rounded-lg">
                        <div class="flex flex-row space-x-4 items-center">
                            <div>
                                <p class="text-blue-300 text-sm font-medium uppercase leading-4">Payment Status</p>
                                <p class="text-white font-bold text-xl inline-flex items-center space-x-2">
                                    <span>UGX 450,000</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- start of activity -->
            <div id="last-incomes">
                <h1 class="font-bold py-4 uppercase">Last Activties</h1>
                <div class="overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead class="bg-black/60">
                            <th class="text-left py-3 px-2 rounded-l-lg">Name</th>
                            <th class="text-left py-3 px-2">Activity</th>
                            <th class="text-left py-3 px-2">Action</th>
                        </thead>
                        <tr class="border-b border-gray-700">
                            <td class="py-3 px-2 font-bold">
                                <div class="inline-flex space-x-3 items-center">
                                    <span><img class="rounded-full w-8 h-8" src="https://images.generated.photos/tGiLEDiAbS6NdHAXAjCfpKoW05x2nq70NGmxjxzT5aU/rs:fit:256:256/czM6Ly9pY29uczgu/Z3Bob3Rvcy1wcm9k/LnBob3Rvcy92M18w/OTM4ODM1LmpwZw.jpg" alt=""></span>
                                    <span>Admin</span>
                                </div>
                            </td>
                            <td class="py-3 px-2">Sent You A message</td>
                            <td class="py-3 px-2">View</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- end of the activity -->
        </div>
<?php include 'includes/footer.php'?>