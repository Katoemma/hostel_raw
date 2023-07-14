
<?php include '../../controllers/users.php' ?>
<?php include 'includes/title.php' ?>
<?php
    $title = "Hostels | hostels savvy";
    $decription = "Discover Students hostel that fits your needs around Gulu City";
?>
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
                        <div class="bg-white rounded-lg shadow-md w-full md:w-64">
                            <!-- component -->
                            <a href="view.php?hostel=<?php echo $hostel['name']?>" class="relative inline-block w-full transform transition-transform duration-300 ease-in-out">
                                <div class="rounded-lg">
                                    <div class="relative flex h-40 justify-center overflow-hidden rounded-lg">
                                        <div class="w-full  transform transition-transform duration-500 ease-in-out hover:scale-110">
                                            <img class="h-40 w-full" src="../hostel_Admin/uploads/<?php echo $hostel['image'];?>" alt="" />
                                        </div>
                        
                                        <div class="absolute bottom-0 mb-3 flex justify-center">
                                            <div class="flex space-x-5 overflow-hidden rounded-lg bg-white px-4 py-1 shadow">
                                                <?php if($hostel['camera']==1):?>
                                                <p class="flex items-center font-medium text-gray-700">
                                                    <i class="fa fa-camera"></i> 
                                                </p>
                                                <?php endif;?>

                                                <?php if($hostel['wifi']==1):?>
                                                <p class="flex items-center font-medium text-gray-700">
                                                    <i class="fa fa-wifi"></i>
                                                </p>
                                                <?php endif;?>

                                                <?php if($hostel['reading']==1) :?>
                                                <p class="flex items-center font-medium text-gray-700">
                                                    <i class="fa fa-book"></i>
                                                </p>
                                                <?php endif;?>

                                                <?php if($hostel['self_contained']==1) :?>
                                                <p class="flex items-center font-medium text-gray-700">
                                                    <i class="fa fa-shower"></i>
                                                </p>
                                                <?php endif;?>
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
                                                    <span class="text-lg text-gray-900"><?php echo number_format($hostel['single_room'])?></span>
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