<?php include '../../controllers/booking.php' ?>
<?php
    $hostel = selectOne('hostels',['name'=>$_GET['hostel']]);
    $title = $hostel['name']." | stustay" ;
    $description = $hostel['description'];
    ?>
<?php include 'includes/header.php' ?>     
        <!-- end of side menu -->
        <div id="content" class="bg-white/10 col-span-9 rounded-lg p-6">
            <div>
                <div class="flex justify-between items-center">
                    <h1 class="font-bold py-4 uppercase"><?php echo $hostel['name'] ?></h1>
                    <button data-modal-target="bookModal" data-modal-toggle="bookModal" class="text-white font-medium bg-green-600 px-4 py-1 h-fit rounded-lg">Book Now</button>
                    <div class="flex gap-4">
                        <button class="p-2 rounded-lg underline">Rules</button>
                        <button class="p-2 rounded-lg underline">Gallery</button>
                        <button class="p-2 rounded-lg underline">Location</button>
                    </div>
                </div>
                
                <div class="rounded-lg shadow-md">
                    <img class="w-full h-64 object-cover object-center rounded-t-lg" src="https://az-hostel-prague-cz.booked.net/data/Photos/OriginalPhoto/13573/1357337/1357337297/A-Plus-Hostel-Centrum-Prague-Exterior.JPEG" alt="Hostel Image">
                    <div class="p-6">
                        <p class="text-gray-200 mb-4"><?php echo $hostel['description'] ?></p>
                        <div class="flex gap-2">
                            <div class="flex items-center mb-4">
                                <i class="fa fa-bed text-gray-500 mr-2"></i>
                                <p>Single Beds</p>
                            </div>
                            <div class="flex items-center mb-4">
                                <i class="fa fa-wifi text-gray-500 mr-2"></i>
                                <p>Free Wi-Fi</p>
                            </div>
                            <div class="flex items-center mb-4">
                                <i class="fa fa-shower text-gray-500 mr-2"></i>
                                <p>Self Contained</p>
                            </div>
                            <div class="flex items-center mb-4">
                                <i class="fa fa-wifi text-gray-500 mr-2"></i>
                                <p>Reading Space</p>
                            </div>
                        </div>
                        <div class="border-t border-gray-300 pt-4">
                            <h3 class="text-lg font-bold mb-4">Pricing</h3>
                            <ul class="list-disc ml-6">
                                <li>Single Room: UGX <?php echo number_format($hostel['price'])?></li>
                                <li>Double Room: UGX 450,000/=</li>
                            </ul>
                        </div>
        
                        <div class="border-t border-gray-300 pt-4">
                            <h3 class="text-lg font-bold mb-4">Reviews</h3>
                            <div class="flex items-start mb-4">
                                <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1546525848-3ce03ca516f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8YmxhY2slMjBzdHVkZW50fGVufDB8fDB8fHww&w=1000&q=80" alt="Profile Image">
                                <div class="ml-3">
                                    <p class="font-bold">John Doe</p>
                                    <p class="text-gray-500">"Great hostel, friendly staff."</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <img class="w-8 h-8 rounded-full" src="https://thumbs.dreamstime.com/b/sad-black-man-looking-away-park-distracted-walking-231276684.jpg" alt="Profile Image">
                                <div class="ml-3">
                                    <p class="font-bold">Jane Smith</p>
                                    <p class="text-gray-500">"Clean and comfortable rooms."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- end of the activity -->
        </div>

        <!-- booking modal -->
<?php include 'includes/modals.php' ?>
<?php include 'includes/footer.php'?>