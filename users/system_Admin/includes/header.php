<?php ?>
<?php
    $students = selectAll('users',['type'=>"SS"]);
    $hostels = selectAll('hostels')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-200">
    <?php include '../../includes/message.php'?>
    <?php include '../alert.php' ?>
    <div class="flex flex-col md:flex-row p-4 gap-4">
        <nav class="hidden md:flex flex-col w-1/6 bg-white rounded-lg h-fit px-4 pb-8 pt-4 lg:sticky md:top-4">
            <a href="index.php" class="flex p-2 mb-4">
                <img src="../logo.png" class="h-12" alt="logo">
            </a>

            <hr class="border-1 border-gray-600 rounded-xl mb-8">
            <div class="flex flex-col mt-8 mb-16">
                <a href="index.php" class="px-4 text-lg mb-4 py-2 hover:bg-green-900 hover:text-white rounded-lg border-t">
                <i class="fa fa-th-large"></i> Dashboard</a>

                <a href="hostels.php" class="px-4  text-lg mb-4 py-2 hover:bg-green-900 hover:text-white rounded-lg border-t"><i class="fa fa-first-order"></i> Hostels</a>

                <a href="students.php" class="px-4  text-lg mb-4 py-2 hover:bg-green-900 hover:text-white rounded-lg border-t"><i class="fa fa-first-order"></i> Students</a>
                


                <a href="users.php" class="px-4  text-lg mb-4 py-2 hover:bg-green-900 hover:text-white rounded-lg border-t"><i class="fa fa-list-alt"></i> Users</a>

                <a href="#" class="px-4  text-lg mb-4 py-2 hover:bg-green-900 hover:text-white rounded-lg border-t"><i class="fa fa-globe"></i> Equipment Tracking</a>
                
                <a href="#" class="px-4  text-lg mb-4 py-2 hover:bg-green-900 hover:text-white rounded-lg border-y"><i class="fa fa-cogs"></i>  Settings</a>
            </div>

            <div class="flex flex-col px-4 mb-4">
                <a href="../../logout.php" class="text-red-500 text-xl"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
            <hr class="w-full border-1 border-green-900 rounded-full">
            <div class="flex w-full py-4">
                &copy; <span id="year"></span> agriPlanner
            </div>
        </nav>
        <!-- mobile menu -->
        <div class="hidden lg:hidden fixed top-4  w-11/12 md:w-3/4  mt-16 p-4 bg-green-600 z-50 border-1 border-red-500 rounded-xl" id="menu">
            <ul class="flex flex-col text-white">
                <a href="index.php" class="px-4 text-lg mb-4 py-2 hover:bg-green-900 hover:text-white border-t">
                    <i class="fa fa-th-large"></i> Dashboard</a>
                <a href="farms.php" class="px-4  text-lg mb-4 py-2 hover:bg-green-900 hover:text-white border-y "><i class="fa fa-first-order"></i> Farms</a>

                <div id="accordion-collapse" data-accordion="collapse">
                    <h2 id="accordion-collapse-heading-3" class="text-black">
                        <span type="button" class="flex items-center w-full justify-between px-4 text-lg mb-4 py-2 hover:bg-green-900 hover:text-white rounded-lg" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-1">
                            <span class="text-lg hover:bg-green-900 text-white rounded-lg "><i class="fa fa-money"></i> Crop Management</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </span>
                    </h2>
                    <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                        <div class="flex flex-col p-2 bg-gray-100">
                            <a href="crop.php" class="px-4  text-lg mb-4 py-2 bg-blue-500 text-white rounded-lg"><i class="fa fa-check"></i> Approved Budgets</a>
                            <a href="dash_budgets.php" class="px-4 text-lg mb-4 py-2 bg-red-500 text-white rounded-lg"><i class="fa fa-spinner"></i> Pending Budgets</a>
                        </div>
                    </div>
                </div>


                <a href="dash_items.php" class="px-4  text-lg mb-4 py-2 hover:bg-green-900 hover:text-white  border-t"><i class="fa fa-list-alt"></i> Livestock Management</a>
                <a href="#" class="px-4  text-lg mb-4 py-2 hover:bg-green-900 hover:text-white  border-t"><i class="fa fa-globe"></i> Equipment Tracking</a>
                <a href="dash_users.php" class="px-4  text-lg mb-4 py-2 hover:bg-green-900 hover:text-white  border-t"><i class="fa fa-users"></i>Finances</a>
                <a href="employees.php" class="px-4  text-lg mb-4 py-2 hover:bg-green-900 hover:text-white border-y"><i class="fa fa-briefcase"></i>Jobs</a>
                
                <div id="accordion-collapse" data-accordion="collapse">
                    <h2 id="accordion-collapse-reports1" class="text-black">
                        <span type="button" class="flex items-center w-full justify-between px-4 text-lg mb-4 py-2 hover:bg-green-900 hover:text-white rounded-lg" data-accordion-target="#accordion-collapse-reports2" aria-expanded="false" aria-controls="accordion-collapse-body-1">
                            <span class="text-lg  text-white rounded-lg "><i class="fa fa-money"></i> Reports</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </span>
                    </h2>
                    <div id="accordion-collapse-reports2" class="hidden" aria-labelledby="accordion-collapse-reports">
                        <div class="flex flex-col p-2 bg-gray-100">
                            <a href="dash_budgets.php" class="px-4  text-lg mb-4 py-2 bg-blue-500 text-white rounded-lg"><i class="fa fa-check"></i> Crops Reports</a>
                            <a href="dash_budgets.php" class="px-4 text-lg mb-4 py-2 bg-red-500 text-white rounded-lg"><i class="fa fa-spinner"></i> Livestock Reports</a>
                        </div>
                    </div>
                </div>

                <a href="#" class="px-4  text-lg mb-4 py-2 hover:bg-green-900 hover:text-white rounded-lg border-y"><i class="fa fa-cogs"></i>  Settings</a>
            </ul>
            <div class="flex flex-col px-4 mb-4">
                <a href="../logout.php" class="text-gray-100 text-xl"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
        </div>
       
        <!-- main content -->
        <div class="md:w-5/6 rounded-lg h-max">
             <!-- upper bar -->
            <div class="fixed md:relative top-0 left-0 flex justify-between md:justify-end items-center w-full rounded-lg  bg-green-600 shadow p-2 md:sticky md:top-4 ">
                <!-- mobile menu button -->
                <i class="fa fa-bars text-2xl text-white pl-4 lg:hidden" id="openBtn" onclick="openM()"></i>
                <i class="fa fa-times-circle text-2xl text-white pl-4 hidden   lg:hidden" id="closeBtn" onclick="closeM()"></i>
                <a href="#" class="flex p-2">
                    <?php if($user['image'] == ""):?>
                        <img src="https://as2.ftcdn.net/v2/jpg/02/10/70/13/1000_F_210701394_juARL2AoYEzgYZWI5zHmcGXmqWwQS8L2.jpg" alt="" class="w-8 h-8 rounded-full">
                    <?php else:?>
                        <img class="w-8 h-8 rounded-full" src="uploads/<?php echo $user['image']?>" alt="image description">
                    <?php endif;?>
                    <div class="hidden md:flex flex-col px-4">
                        <h4 class="text-lg  font-bold uppercase text-white"><?php echo $user['fname']." ".$user['lname'];?></h4>
                    </div>
                </a>
            </div>