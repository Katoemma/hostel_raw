<?php 
    $title = "Hostels | stustay" ;
    $description ='Find Your Favourite Hostel Around Gulu University';
?>
<?php include '../../controllers/users.php' ?>
<?php include 'includes/header.php'?>
<div id="content" class="bg-white/10 col-span-9 rounded-lg p-6">
            <div>
                <h1 class="font-bold py-4 uppercase">Hostels</h1>
                

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Hostel Card 1 -->
                    <?php
                        $hostels = selectAll('hostels',['status'=> 1]);
                    ?>
                    <?php foreach ($hostels as  $hostel): ?>
                        <div class="bg-white rounded-lg shadow-md w-64">
                            <!-- component -->
                            <a href="view.php?hostel=<?php echo $hostel['name']?>" class="relative inline-block w-full transform transition-transform duration-300 ease-in-out">
                                <div class="rounded-lg">
                                    <div class="relative flex h-40 justify-center overflow-hidden rounded-lg">
                                        <div class="w-full  transform transition-transform duration-500 ease-in-out hover:scale-110">
                                            <img class="h-40 w-full" src="https://images.unsplash.com/photo-1591825729269-caeb344f6df2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="" />
                                        </div>
                        
                                        <div class="absolute bottom-0 mb-3 flex justify-center">
                                            <div class="flex space-x-5 overflow-hidden rounded-lg bg-white px-4 py-1 shadow">
                                                <p class="flex items-center font-medium text-gray-700">
                                                    <svg class="mr-2 h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M480,226.15V80a48,48,0,0,0-48-48H80A48,48,0,0,0,32,80V226.15C13.74,231,0,246.89,0,266.67V472a8,8,0,0,0,8,8H24a8,8,0,0,0,8-8V416H480v56a8,8,0,0,0,8,8h16a8,8,0,0,0,8-8V266.67C512,246.89,498.26,231,480,226.15ZM64,192a32,32,0,0,1,32-32H208a32,32,0,0,1,32,32v32H64Zm384,32H272V192a32,32,0,0,1,32-32H416a32,32,0,0,1,32,32ZM80,64H432a16,16,0,0,1,16,16v56.9a63.27,63.27,0,0,0-32-8.9H304a63.9,63.9,0,0,0-48,21.71A63.9,63.9,0,0,0,208,128H96a63.27,63.27,0,0,0-32,8.9V80A16,16,0,0,1,80,64ZM32,384V266.67A10.69,10.69,0,0,1,42.67,256H469.33A10.69,10.69,0,0,1,480,266.67V384Z"></path>
                                                    </svg>
                                                </p>
                                                <p class="flex items-center font-medium text-gray-700">
                                                    <i class="fa fa-wifi"></i>
                                                </p>
                                                <p class="flex items-center font-medium text-gray-700">
                                                    <i class="fa fa-book"></i>
                                                </p>
                                                <p class="flex items-center font-medium text-gray-700">
                                                    <i class="fa fa-shower"></i>
                                                </p>
                                            </div>
                                        </div>             
                                        <span class="absolute left-0 top-0 z-10 ml-3 mt-3 inline-flex select-none rounded-lg bg-red-500 px-3 py-2 text-sm font-medium text-white"> Featured </span>
                                    </div>
                        
                                    <div class="p-2">
                                        <div class="mt-2">
                                            <div class="items-center">
                                                <div class="relative">
                                                    <h2 class="line-clamp-1 text-base font-medium text-gray-800 md:text-lg" title="New York"><?php echo $hostel['name']?></h2>
                                                    <?php
                                                        $single = selectAll('rooms',['type'=>"S", 'hostel'=>$hostel['id']]);
                                                        $double = selectAll('rooms',['type'=>"D", 'hostel'=>$hostel['id']]);

                                                        if (count($single) === 0) {
                                                            $sing = "";
                                                        }else {
                                                            $sing = 'Single';
                                                        }
                                                        if (count($double) === 0) {
                                                            $doub = "";
                                                        }else {
                                                            $doub = 'Double';
                                                        }
                                                    ?>
                                                    <p class="mt-2 line-clamp-1 text-sm text-gray-800" title="New York, NY 10004, United States"><?php echo $sing." ".$doub; ?></p>
                                                </div>
                                            </div>
                                
                                            <div class="flex items-center border-b">
                                                <p class="text-primary inline-block whitespace-nowrap rounded-xl font-semibold leading-tight">
                                                    <span class="text-sm uppercase text-gray-900">UGX </span>
                                                    <span class="text-lg text-gray-900"><?php echo number_format($hostel['price'])?></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach;?>
                    <!-- cards ends here -->
                </div>
                <div class="flex flex-col items-center mt-2">
                    <!-- Help text -->
                    <span class="text-sm text-gray-200">
                        Showing <span class="font-semibold text-orange-700">1</span> to <span class="font-semibold text-orange-700">10</span> of <span class="font-semibold text-orange-700">100</span> Entries
                    </span>
                    <!-- Buttons -->
                    <div class="inline-flex mt-2 xs:mt-0">
                        <button class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-500 rounded-l hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            Prev
                        </button>
                        <button class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-500 border-0 border-l border-gray-700 rounded-r hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            Next
                        </button>
                    </div>
                  </div>
            <!-- end of the activity -->
            </div>
        </div>
<?php include 'includes/footer.php'?>