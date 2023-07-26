
        <!-- end of side menu -->
        <div id="content" class="bg-white/10 col-span-9 rounded-lg p-6">
            <div class="w-full" >
                <h1 class="font-bold py-4 uppercase">my profile</h1>
                
                <div class="relative py-3 w-full">
                    <div class="relative px-4 py-10 bg-white md:mx-0 shadow rounded-3xl ">
                        <div class="max-w-md mx-auto">
                            <div class="flex flex-col items-center space-x-5">
                                <div class="rounded-full bg-orange-600 flex items-center justify-center">
                                    <?php if($user['image'] == ""):?>
                                        <button type="button" 
                                            <?php if($user['type']=="SA"):?>
                                                data-modal-target="dpModal" data-modal-toggle="dpModal" 
                                            <?php elseif($user['type']=="SS"):?>
                                                data-modal-target="studentModal" data-modal-toggle="studentModal" 
                                            <?php else:?>
                                                data-modal-target="hostelModal" data-modal-toggle="hostelModal" 
                                            <?php endif;?>
                                        >
                                            <img class="rounded-full w-36 h-36" src="https://as2.ftcdn.net/v2/jpg/02/10/70/13/1000_F_210701394_juARL2AoYEzgYZWI5zHmcGXmqWwQS8L2.jpg" alt="image description">
                                        </button>
                                    <?php else:?>
                                        <?php if($user['type']== "SA"):?>
                                            <button type="button" data-modal-target="dpModal" data-modal-toggle="dpModal">
                                                <img class="rounded-full w-36 h-36" src="uploads/<?php echo $user['image'] ?>" alt="<?php echo $user['fname']." ".$user['lname'] ?>">
                                            </button>
                                        <?php elseif($user['type']== "SH"):?>
                                            <button>
                                                <img class="rounded-full w-36 h-36" src="../system_Admin/uploads/<?php echo $user['image'] ?>" alt="<?php echo $user['fname']." ".$user['lname'] ?>">
                                            </button>
                                        <?php else:?>
                                            <button>
                                                <img class="rounded-full w-36 h-36" src="../system_Admin/uploads/<?php echo $user['image'] ?>" alt="<?php echo $user['fname']." ".$user['lname'] ?>">
                                            </button>
                                        <?php endif;?>
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <div class="flex">
                                        <div class="w-1/3">
                                            <span class="text-gray-900">Name:</span>
                                        </div>
                                        <div class="w-2/3">
                                            <span class="text-gray-600"><?php echo $user['fname']." ".$user['lname'];?></span>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="w-1/3">
                                            <span class="text-gray-900">Email:</span>
                                        </div>
                                        <div class="w-2/3">
                                            <span class="text-gray-600"><?php echo $user['email'];?></span>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="w-1/3">
                                            <span class="text-gray-900">Date Of Birth:</span>
                                        </div>
                                        <div class="w-2/3">
                                            <span class="text-gray-600"><?php echo $user['DOB'];?></span>
                                        </div>
                                    </div>
                                    <?php if($user['type'] == "SS"):?>
                                        <div class="flex">
                                            <div class="w-1/3">
                                                <span class="text-gray-900">Campus:</span>
                                            </div>
                                            <div class="w-2/3">
                                                <span class="text-gray-600"><?php echo $user['campus'];?></span>
                                            </div>
                                        </div>
                                    
                                        <div class="flex">
                                            <div class="w-1/3">
                                                <span class="text-gray-900">Hostel:</span>
                                            </div>
                                            <div class="w-2/3">
                                            
                                            <?php $myHostel = selectOne('hostels',['id'=>$booked['hostel']]);?>
                                            <?php if ($myHostel == null):?>
                                                <span class="text-gray-600">Not Assigned</span>
                                            <?php else: ?>
                                                <span class="text-gray-600"><?php echo $myHostel['name']?></span>
                                            <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($user['type'] == "SH"):?>
                                        <div class="flex">
                                            <div class="w-1/3">
                                                <span class="text-gray-900">Hostel:</span>
                                            </div>
                                            <div class="w-2/3">
                                                <span class="text-gray-600"><?php echo $hostel['name'] ?></span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="pt-4 flex flex-col md:flex-row items-center md:space-x-4">
                                <button
                                    <?php if($user['type']=="SA"):?>
                                        data-modal-target="adminModal" data-modal-toggle="adminModal" 
                                    <?php elseif($user['type']=="SS"):?>
                                        data-modal-target="studentModal" data-modal-toggle="studentModal" 
                                    <?php else:?>
                                        data-modal-target="hostelModal" data-modal-toggle="hostelModal" 
                                    <?php endif;?>
                                    class="bg-orange-600 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                    <span>Edit Profile</span>
                                </button>
                                <button data-modal-target="passModal" data-modal-toggle="passModal" class="bg-green-600 flex justify-center items-center mt-2 w-full text-white px-4 py-3 rounded-md focus:outline-none">
                                    <span>Change Password</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- end of the activity -->
        </div>