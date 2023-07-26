<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title><?php echo $title ?></title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script>
        // tailwind.config = {
        //     darkMode: "class",
        //     theme: {
        //     fontFamily: {
        //         sans: ["Roboto", "sans-serif"],
        //         body: ["Roboto", "sans-serif"],
        //         mono: ["ui-monospace", "monospace"],
        //     },
        //     },
        //     corePlugins: {
        //     preflight: false,
        //     },
        // };
    </script>

    <style>
        :root { font-family: 'Inter', sans-serif; }
    @supports (font-variation-settings: normal) {
    :root { font-family: 'Inter var', sans-serif; }
    }
    </style>
</head>
<body>    

<div class="antialiased bg-gray-900 w-full min-h-screen text-slate-300 relative py-4">
    <?php include '../../includes/message.php'?>
    <?php include '../alert.php' ?>
    <div class=" md:grid grid-cols-12 mx-auto gap-2 sm:gap-4 md:gap-6 lg:gap-10 xl:gap-14 max-w-7xl my-10 px-2">
        <div id="menu" class="hidden md:block bg-white/10 col-span-3 rounded-lg p-4 ">
            <img src="../logo.png" class="h-12" alt="logo">
            <p class="text-slate-400 text-sm mb-2">Welcome back,</p>
            <a href="profile.php" class="flex flex-col space-y-2 md:space-y-0 md:flex-row mb-5 items-center md:space-x-2 hover:bg-white/10 group transition duration-150 ease-linear rounded-lg group w-full py-3 px-2">
                <div>
                    <?php if($user['image'] == ""):?>
                        <img class="rounded-full w-10 h-10 relative object-cover" src="https://as2.ftcdn.net/v2/jpg/02/10/70/13/1000_F_210701394_juARL2AoYEzgYZWI5zHmcGXmqWwQS8L2.jpg" alt="">
                    <?php else:?>
                        <img class="rounded-full w-10 h-10 relative object-cover" src="uploads/<?php echo $user['image']?>" alt="image description">
                    <?php endif;?>
                </div>
                <div>
                    <p class="font-medium group-hover:text-indigo-400 leading-4"><?php echo $user['fname']. " " .$user['lname']; ?></p>
                    <span class="text-xs text-slate-400"><?php echo $user['campus'] ?></span>
                </div>
            </a>
            <hr class="my-2 border-slate-700">
            <div id="menu" class="flex flex-col space-y-2 my-5">
                <a href="index.php" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                    <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                              </svg>
                              
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Dashboard</p>
                        <p class="text-slate-400 text-sm hidden md:block">Data overview</p>
                        </div>
                        
                    </div>
                </a>
                <a href="hostels.php" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                    <div class="relative flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                              </svg>                              
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Hostels</p>
                        <p class="text-slate-400 text-sm hidden md:block">Manage Hostels</p>
                        </div>
                        <?php $hostels = selectAll('hostels') ?>
                        <div class="absolute -top-3 -right-3 md:top-0 md:right-0 px-2 py-1.5 rounded-full bg-indigo-800 text-xs font-mono font-bold"><?php echo count($hostels)?></div>
                    </div>
                </a>
                <a href="students.php" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                    <div class="relative flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                              </svg>                              
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Students</p>
                        <p class="text-slate-400 text-sm hidden md:block">Manage Students</p>
                        </div>
                        <?php $students = selectAll('users',['type'=>"SS"]) ?>
                        <div class="absolute -top-3 -right-3 md:top-0 md:right-0 px-2 py-1.5 rounded-full bg-indigo-800 text-xs font-mono font-bold"><?php echo count($students)?></div>
                    </div>
                </a>
                <a href="users.php" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                    <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                              </svg>                              
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Users</p>
                        <p class="text-slate-400 text-sm hidden md:block">Manage users</p>
                        </div>
                        
                    </div>
                </a>
                <a href="../../logout.php" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                    <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                                
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Logout</p>
                        </div>
                        
                    </div>
                </a>
            </div>
            <p class="text-sm text-center text-gray-600">v2.0.0.3 | &copy; 2022 Pantazi Soft</p>
        </div>

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
                <a href="profile.php" class="flex items-center space-x-2 hover:text-indigo-400">
                    <?php if($user['image'] == ""): ?>
                    <img class="w-10 h-10 rounded-full object-cover" src="https://as2.ftcdn.net/v2/jpg/02/10/70/13/1000_F_210701394_juARL2AoYEzgYZWI5zHmcGXmqWwQS8L2.jpg" alt="">
                    <?php else: ?>
                    <img class="w-10 h-10 rounded-full object-cover" src="uploads/<?php echo $user['image'] ?>" alt="image description">
                    <?php endif; ?>
                    <div>
                    <p class="font-medium"><?php echo $user['fname']. " " .$user['lname']; ?></p>
                    <p class="text-xs text-gray-400"><?php echo $user['campus'] ?></p>
                    </div>
                </a>
                <hr class="border-gray-700">
                <a href="index.php" class="flex items-center space-x-2 hover:text-indigo-400">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2 12h20M2 6h20M2 18h20"></path>
                    </svg>
                    <span class="font-medium">Dashboard</span>
                </a>
                <a href="hostels.php" class="flex items-center space-x-2 hover:text-indigo-400">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2 12h20M2 6h20M2 18h20"></path>
                    </svg>
                    <span class="font-medium">Hostels</span>
                    <div class="ml-auto bg-indigo-800 rounded-full text-xs font-bold px-2 py-1.5"><?php echo count($hostels) ?></div>
                </a>
                <a href="students.php" class="flex items-center space-x-2 hover:text-indigo-400">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2 12h20M2 6h20M2 18h20"></path>
                    </svg>
                    <span class="font-medium">Students</span>
                    <div class="ml-auto bg-indigo-800 rounded-full text-xs font-bold px-2 py-1.5"><?php echo count($students) ?></div>
                </a>
                <a href="users.php" class="flex items-center space-x-2 hover:text-indigo-400">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2 12h20M2 6h20M2 18h20"></path>
                    </svg>
                    <span class="font-medium">Users</span>
                </a>
                <a href="../../logout.php" class="flex items-center space-x-2 hover:text-indigo-400">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="font-medium">Logout</span>
                </a>
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
