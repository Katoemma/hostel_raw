<!--booking modal -->
<div id="bookModal" tabindex="-1" aria-hidden="true" class="fixed bg-black/60 top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="bookModal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Book Room At <?php echo $hostel['name']?></h3>
                <?php include '../../helpers/message.php' ?>
                <form action="" method="post" class="space-y-6">
                    <?php
                        $token = substr($hostel['name'],0,1)."-".$user['id']."-".substr(time(),-4)."-".date('Y');
                    ?>
                    <input type="hidden" name="student" value="<?php echo $user['id'] ?>">
                    <input type="hidden" name="hostel" value="<?php echo $hostel['id'] ?>">
                    <input type="hidden" name="token" value="<?php echo $token ?>">
                    <div>
                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Room Types</label>
                        <select name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" onchange="showRooms()">
                            <option selected value="">Choose room Types</option>
                            <option value="S">Single Rooms</option>
                            <option value="D">Double Rooms</option>
                        </select>
                    </div>
                    <div id="singleRooms" class="hidden">
                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Available Rooms</label>
                        <?php
                            $hostelId = $hostel['id'];

                            $sql = "SELECT * FROM rooms WHERE id NOT IN (SELECT room FROM booking) AND type = 'S' AND hostel = '$hostelId' ";
                            $qry = $conn->query($sql);
                            
                            $singles = mysqli_fetch_all($qry, MYSQLI_ASSOC);
                        ?>
                        <select name="room" id="sOption" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Choose room</option>
                            <?php foreach ($singles as $single):?>
                                <option value="<?php echo $single['id']?>"><?php echo $single['room'] ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div id="DoubleRooms" class="hidden">
                        <?php
                            $hostelId = $hostel['id'];

                            $sql = "SELECT * FROM rooms WHERE id NOT IN (SELECT room FROM booking) AND type = 'D' AND hostel = '$hostelId' ";
                            $qry = $conn->query($sql);
                            
                            $doubles = mysqli_fetch_all($qry, MYSQLI_ASSOC);
                        ?>
                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Available Rooms</label>
                        <select name="room" id="dOption" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Choose room</option>
                            <?php foreach ($doubles as $double):?>
                                <option value="<?php echo $double['id']?>"><?php echo $double['room'] ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <span class="text-orange-600 font-medium">NB: You will be notified when your Booking has been Approved.</span>
                    <button name="bookBtn" type="submit" class="w-full text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Book Room Now</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function showRooms(){
            let selectedValue = document.querySelector('select[name="type"]').value;
            var doubleRooms = document.getElementById("DoubleRooms");
            var singleRooms = document.getElementById("singleRooms");
            var sInput = document.getElementById('sOption');
            var dInput = document.getElementById('dOption');

            if(selectedValue == "S"){
                singleRooms.style.display = "block";
                doubleRooms.style.display = "none";
                dInput.disabled = true;
            }else if (selectedValue == "D") {
                doubleRooms.style.display = "block"
                singleRooms.style.display = "none";
                sInput.disabled = true;  
            } else {
                singleRooms.style.display = "none";
                doubleRooms.style.display = "none";
                sInput.disabled = true;
                dInput.disabled = true;
            }
        }
    </script>
</div> 

<!-- google map model -->

<div id="googleModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed bg-black/60 top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative border border-gray-100 bg-gray-800/80 rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-white">
                    Google Map
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="googleModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <?php $decodedIframeCode = html_entity_decode($hostel['google']);
                    $src = '';
                    preg_match('/src="([^"]+)"/', $decodedIframeCode, $matches);
                    if (isset($matches[1])) {
                    $src = $matches[1];
                    }
                ?>
                <iframe src="<?php echo $src ;?>" frameborder="0" class="w-full h-96"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- hostels rules and regulation Modal -->
<div id="rulesModal" data-modal-backdrop="static" tabindex="-1" class="fixed top-0 bg-black/60 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between bg-red-600 p-5 border-b rounded-t ">
                <h3 class="text-xl font-medium text-gray-100 ">
                    Rules and Regulations
                </h3>
                <button type="button" class="text-gray-100 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="rulesModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 pt-2">
                <?php $rules =selectAll('rules',['hostel'=> $hostel['id']]);?>
                <?php foreach($rules as $key=> $rule) :?>
                    <div class="flex space-x-2 text-gray-900">
                        <span><?php echo $key + 1 ?>.</span>
                        <span><?php echo $rule['rule']?></span>
                    </div>
                <?php endforeach; ?>
                <?php if(!($rules)) :?>
                    <span class="text-red-600">No Rules have been set!!</span>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<!-- student email Edit modal -->
<div id="studentModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed bg-black/60 top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="studentModal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900  ">Edit Admin User</h3>
                <?php include '../../helpers/message.php' ?>
                <form class="space-y-6" action="profile.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $user['id']?>">
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-24 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <i class="fa fa-image"></i>
                                <p class="mb-2 text-sm text-gray-500 "><span class="font-semibold">Click to upload profile Pic</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 ">SVG, PNG or JPG </p>
                            </div>
                            <input id="dropzone-file" name="dp" type="file" class="hidden" />
                        </label>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Update email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@company.com">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-blue-600">Enter Your Password to confirm</label>
                        <input type="password" name="password" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="enter your password">
                    </div>
                    
                    <button type="submit" name="uploadBtn" class="w-full text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Update account</button>
                </form>
            </div>
        </div>
    </div>
</div> 


<!-- Gallery Modal -->
<div id="galleryModal" tabindex="-1" class="fixed bg-black/60 top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    <?php echo $hostel['name'] ?> Gallery
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="galleryModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 p-6 space-y-2">
                <?php $images = selectAll('gallery', ['hostel'=>$hostel['id']]);?>
                <?php foreach($images as $image):?>
                    <figure class="relative   transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">
                        <a href="#">
                            <img class="rounded-lg w-72 lg:w-64 lg:h-64" src="../hostel_Admin/uploads/<?php echo $image['image'];?>" alt="image description">
                        </a>
                        <figcaption class="absolute px-4 text-white bottom-6">
                            <p><?php echo $image['caption'] ?></p>
                        </figcaption>
                    </figure>
                <?php endforeach;?>
                <?php if(!($images)):?>
                    <span class="text-red-600 text-xl">
                        Gallery is Empty!!
                    </span>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>