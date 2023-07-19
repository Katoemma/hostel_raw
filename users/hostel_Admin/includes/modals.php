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
                        <input type="text" name="room" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
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
                    <button type="submit" name="approve" class=" w-full mt-2 px-4 py-2 bg-green-600 text-gray-100 font-semibold rounded-lg">Approve</button>
                </form>
            </div>
        </div>
    </div>
</div> 

<!-- settings modal -->
<!-- Main modal -->
<div id="settingModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="settingModal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Hostel Settings</h3>
                <?php include('../../helpers/message.php') ?>
                <form class="space-y-6" action="settings.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $hostel['id'] ?>">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                        <input type="text" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ex. plot 9 gulu uganda">
                    </div>
                    <div>                   
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="message" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="This will help your Hostel be seen on google search"></textarea>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Embed google Map</label>
                        <input type="text" name="google" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="share the embeded location html file from google maps">
                    </div>
                    <div class="flex flex-col gap-2 md:flex-row">
                        <div>
                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Single Room Price</label>
                            <input type="number" name="single_room" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ex. 1000000">
                        </div>
                        <div>
                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Double Room Price</label>
                            <input type="number" name="double_room" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ex. 1000000">
                        </div>
                    </div>
                    <div> 
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Image</label>
                        <input name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                    </div>
                    <div>
                        
                        <h3 class="mb-4 font-semibold text-gray-900">Services</h3>
                        <ul class="grid grid-cols-2 gap-4 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg">
                            <li class="w-full border-b border-gray-200 rounded-t-lg">
                                <div class="flex items-center pl-3">
                                    <input id="vue-checkbox" type="checkbox" name="wifi" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="vue-checkbox" class="w-fit py-3 ml-2 text-sm font-medium text-gray-900">Wifi</label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 rounded-t-lg">
                                <div class="flex items-center pl-3">
                                    <input id="react-checkbox" type="checkbox" name="self_contained" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="react-checkbox" class="w-fit py-3 ml-2 text-sm font-medium text-gray-900">Self Contained</label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 rounded-t-lg">
                                <div class="flex items-center pl-3">
                                    <input id="angular-checkbox" type="checkbox" name="reading" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="angular-checkbox" class="w-fit py-3 ml-2 text-sm font-medium text-gray-900">Reading Space</label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 rounded-t-lg">
                                <div class="flex items-center pl-3">
                                    <input id="laravel-checkbox" type="checkbox" name="camera" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="laravel-checkbox" class="w-fit py-3 ml-2 text-sm font-medium text-gray-900">CCTV camera</label>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <button type="submit" name="updateBtn" class="w-full text-white bg-orange-600 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Set Up Hostel</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>



<!--Hostel Admin email Edit modal -->
<div id="hostelModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="hostelModal">
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

<!-- Rules model -->
<div id="rulesModal" data-modal-backdrop="static" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between bg-green-600 p-5 border-b rounded-t">
                <?php $rules = selectAll('rules', ['hostel'=> $hostel['id']]);?>
                <h3 class="text-xl font-medium text-gray-100">
                    Rules And Regulations (<?php echo count($rules);?>)
                </h3>
                <button type="button" class="text-gray-100 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="rulesModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6">
                <?php foreach ($rules as $key => $rule):?>
                    <div class="flex space-x-2">
                        <span class="text-base leading-relaxed list-none text-gray-500"><?php echo $key + 1;?>.</span>
                        <li class="text-base leading-relaxed list-none text-gray-500">
                            <?php echo $rule['rule'];?>
                        </li>
                    </div>
                <?php endforeach;?>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                <button data-modal-hide="rulesModal" data-modal-target="addRule" data-modal-toggle="addRule" type="button" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add Rules</button>
                <button data-modal-hide="small-modal" type="button" class="text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900">Update Rules</button>
            </div>
        </div>
    </div>
</div>

<!-- Add rule modal-->
<div id="addRule" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-toggle="rulesModal" data-modal-hide="addRule">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">New Rule</h3>
                <?php include('../../helpers/message.php') ?>
                <form class="space-y-6" method="post" action="settings.php">
                    <input type="hidden" name="hostel" value="<?php echo $hostel['id'] ?>">
                    <div>                      
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Add New Rule</label>
                        <textarea id="message" name="rule" rows="3" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Write rule here"></textarea>
                    </div>
                    <button type="submit" name="addRule" class="w-full text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div> 

<!-- gallery model -->
<div id="galleryModal" data-modal-backdrop="static" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-7xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-5 border-b rounded-t ">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Gallery
                </h3>
                <!-- buttons -->
                <div class=" ml-10 ">
                    <button data-modal-target="imageModal" data-modal-toggle="imageModal" data-modal-hide="galleryModal" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add Image</button>
                </div>

                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="galleryModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6">
    
            <section class="text-gray-600 body-font">
                <div class="container px-2 md:px-5 py-6 mx-auto">
                    <div class="flex flex-wrap -m-4">
                        <?php $images = selectAll('gallery',['hostel'=> $hostel['id']]); ?>
                        <?php foreach ($images as $image):?>
                            <div class=" p-2">
                                <figure class="relative w-full md:w-48 transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">
                                    <a href="#">
                                        <img class="rounded-lg" src="uploads/<?php echo $image['image'] ?>" alt="image description">
                                    </a>
                                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                                        <p><?php echo $image['caption'] ?></p>
                                    </figcaption>
                                </figure>
                            </div>
                        <?php endforeach;?>
                        <?php if(!($images)):?>
                            <span class="text-xl font-bold text-red-600">No Images in gallery!!</span>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            </div>
        </div>
    </div>
</div>

<!--Add hostel image -->
<div id="imageModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="galleryModal" data-modal-hide="imageModal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900  ">Add Image to Gallery</h3>
                <?php include '../../helpers/message.php' ?>
                <form class="space-y-6" action="settings.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="hostel" value="<?php echo $hostel['id']?>">
                    <div class="flex flex-col items-center justify-center w-full">                      
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                        <input name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                    </div>
                    <div>                      
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Add Image Caption</label>
                        <textarea id="message" name="caption" rows="3" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Write image caption here"></textarea>
                    </div>
                    <button type="submit" name="uploadImg" class="w-full text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Update account</button>
                </form>
            </div>
        </div>
    </div>
</div> 