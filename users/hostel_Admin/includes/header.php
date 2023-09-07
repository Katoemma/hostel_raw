<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title><?php echo $title ?></title>
  <meta name="description" content="<?php echo $description; ?>">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <style>
        :root { font-family: 'Inter', sans-serif; }
    @supports (font-variation-settings: normal) {
    :root { font-family: 'Inter var', sans-serif; }
    }
    </style>
</head>
<body>    
<?php include '../alert.php' ?>
<div class="antialiased bg-gray-900 w-full min-h-screen text-slate-300 relative py-4">
    <?php include '../../includes/message.php'?>
    <div class=" md:grid grid-cols-12 mx-auto gap-2 sm:gap-4 md:gap-6 lg:gap-10 xl:gap-14 max-w-7xl my-10 px-2">
        <div id="menu" class="hidden md:block bg-white/10 col-span-3 rounded-lg p-4 ">
            <img src="../logo.png" class="h-12" alt="logo">
            <p class="text-slate-400 text-sm mb-2">Welcome back,</p>
            <a href="profile.php" class="flex flex-col space-y-2 md:space-y-0 md:flex-row mb-5 items-center md:space-x-2 hover:bg-white/10 group transition duration-150 ease-linear rounded-lg group w-full py-3 px-2">
                <div>
                    <img class="rounded-full w-10 h-10 relative object-cover" src="uploads/<?php echo $hostel['image'] ?>" alt="">
                </div>
                <div>
                    <p class="font-medium group-hover:text-indigo-400 leading-4"><?php echo $user['fname']. " " .$user['lname']; ?></p>
                    
                    <span class="text-xs text-slate-400"><?php echo $hostel['name'] ?></span>
                </div>
            </a>
            <hr class="my-2 border-slate-700">
            <div id="menu" class="flex flex-col space-y-2 my-5">
                <a href="Index.php" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                    <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                              
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Dashboard</p>
                        </div>
                        
                    </div>
                </a>
                <a href="rooms.php" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                    <div class="relative flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div class="px-1">
                            <i class="fa fa-bed"></i>                             
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Rooms</p>
                        </div>
                    </div>
                </a>
                <a href="bookings.php" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                    <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div class="px-1">
                            <i class="fa fa-bookmark"></i>                             
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Bookings (pending)</p>
                        </div>
                        
                    </div>
                </a>
                <a href="students.php" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                    <div class="relative flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div class="px-1">
                            <i class="fa fa-users"></i>                             
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Students</p>
                        </div>
                    </div>
                </a>
                <a href="history.php" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                    <div class="relative flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div class="px-1">
                            <i class="fa fa-history"></i>                             
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Histroy</p>
                        </div>
                        <div class="absolute -top-3 -right-3 md:top-0 md:right-0 px-2 py-1.5 rounded-full bg-indigo-800 text-xs font-mono font-bold">23</div>
                    </div>
                </a>
                <a href="settings.php" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                    <div class="relative flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div class="px-1">
                            <i class="fa fa-cogs"></i>                             
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Settings</p>
                        </div>
                    </div>
                </a>
                <a href="../../logout.php" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                    <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div class="px-1">
                            <i class="fa fa-sign-out"></i>                             
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Logout</p>
                        </div>
                        
                    </div>
                </a>
            </div>
            <p class="text-sm text-center text-gray-600">v2.0.0.3 | &copy; 2022 Pantazi Soft</p>
        </div>

        <!-- mobile menu -->
        <div class="fixed w-full z-50 top-0 left-0 bg-gray-800 md:hidden">
            <div class="flex items-center justify-between px-4 py-3">
                <a href="index.php"><img src="../logo.png" class="h-8" alt="logo"></a>
                <button id="menuToggle" class="text-gray-300 focus:outline-none md:hidden">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                </button>
            </div>
            <div id="mobileMenu" class="hidden md:hidden">
                <div class="flex flex-col space-y-4 px-4 py-2">
                    <a href="profile.php" class="flex space-x-4 md:space-y-0 md:flex-row mb-5 items-center md:space-x-2 hover:bg-white/10 group transition duration-150 ease-linear rounded-lg group w-full py-3 px-2">
                        <div>
                            <img class="rounded-full w-10 h-10 relative object-cover" src="uploads/<?php echo $hostel['image'] ?>" alt="">
                        </div>
                        <div>
                            <p class="font-medium group-hover:text-indigo-400 leading-4"><?php echo $user['fname']. " " .$user['lname']; ?></p>
                            
                            <span class="text-xs text-slate-400"><?php echo $hostel['name'] ?></span>
                        </div>
                    </a>
                    <hr class="my-2 border-slate-700">
                    <div id="menu" class="flex flex-col space-y-2 my-5">
                        <a href="Index.php" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                            <div class="flex space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    
                                </div>
                                <div>
                                    <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Dashboard</p>
                                </div>
                                
                            </div>
                        </a>
                        <a href="rooms.php" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                            <div class="relative flex space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                                <div class="px-1">
                                    <i class="fa fa-bed"></i>                             
                                </div>
                                <div>
                                    <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Rooms</p>
                                </div>
                            </div>
                        </a>
                        <a href="bookings.php" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                            <div class="flex space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                                <div class="px-1">
                                    <i class="fa fa-bookmark"></i>                             
                                </div>
                                <div>
                                    <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Bookings (pending)</p>
                                </div>
                                
                            </div>
                        </a>
                        <a href="students.php" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                            <div class="relative flex space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                                <div class="px-1">
                                    <i class="fa fa-users"></i>                             
                                </div>
                                <div>
                                    <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Students</p>
                                </div>
                            </div>
                        </a>
                        <a href="messages.php" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                            <div class="relative flex space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                                <div class="px-1">
                                    <i class="fa fa-envelope"></i>                             
                                </div>
                                <div>
                                    <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Messages</p>
                                </div>
                                <div class="absolute -top-3 -right-3 md:top-0 md:right-0 px-2 py-1.5 rounded-full bg-indigo-800 text-xs font-mono font-bold">23</div>
                            </div>
                        </a>
                        <a href="settings.php" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                            <div class="relative flex space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                                <div class="px-1">
                                    <i class="fa fa-cogs"></i>                             
                                </div>
                                <div>
                                    <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Settings</p>
                                </div>
                            </div>
                        </a>
                        <a href="../../logout.php" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                            <div class="flex space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                                <div class="px-1">
                                    <i class="fa fa-sign-out"></i>                             
                                </div>
                                <div>
                                    <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Logout</p>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                </div>
                <p class="text-xs text-center text-gray-600 py-2">v2.0.0.3 | &copy; 2022 Pantazi Soft</p>
            </div>
        </div>

        <script>
        document.getElementById("menuToggle").addEventListener("click", function() {
            var menu = document.getElementById("mobileMenu");
            menu.classList.toggle("hidden");
        });
        </script>