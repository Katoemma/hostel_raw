<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Dashboard | stuStay</title>
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        :root { font-family: 'Inter', sans-serif; }
    @supports (font-variation-settings: normal) {
    :root { font-family: 'Inter var', sans-serif; }
    }
    </style>
</head>
<body>    

<div class="antialiased bg-gray-900 w-full min-h-screen text-slate-300 relative py-4">
    <div class=" md:grid grid-cols-12 mx-auto gap-2 sm:gap-4 md:gap-6 lg:gap-10 xl:gap-14 max-w-7xl my-10 px-2">
        <!-- side menu starts here -->
        <div id="menu" class="hidden md:block bg-white/10 col-span-3 rounded-lg p-4 ">
            <img src="Screenshot_2023-07-01_150822-removebg-preview.png" class="h-12" alt="">
            <p class="text-slate-400 text-sm mb-2">Welcome back,</p>
            <a href="#" class="flex flex-col space-y-2 md:space-y-0 md:flex-row mb-5 items-center md:space-x-2 hover:bg-white/10 group transition duration-150 ease-linear rounded-lg group w-full py-3 px-2">
                <div>
                    <img class="rounded-full w-10 h-10 relative object-cover" src="https://res.cloudinary.com/highereducation/image/upload/f_auto,fl_lossy,q_auto/c_fill,f_auto,fl_lossy,q_auto:best,w_600,h_512,g_face/v1602208628/TheBestSchools.org/hero-images/scholarships-african-american-black-students-hero.jpg" alt="">
                </div>
                <div>
                    <p class="font-medium group-hover:text-indigo-400 leading-4">Jane Doe</p>
                    <span class="text-xs text-slate-400">Gulu University</span>
                </div>
            </a>
            <hr class="my-2 border-slate-700">
            <div id="menu" class="flex flex-col space-y-2 my-5">
                <a href="#" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
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
                <a href="#" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                    <div class="relative flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div class="px-1">
                            <i class="fa fa-bed"></i>                             
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Hostels</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                    <div class="relative flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div class="px-1">
                            <i class="fa fa-envelope"></i>                             
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Messages</p>
                        </div>
                        <div class="absolute -top-3 -right-3 md:top-0 md:right-0 px-2 py-1.5 rounded-full bg-orange-700 text-xs font-mono font-bold">23</div>
                    </div>
                </a>
                <a href="#" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                    <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div class="px-1">
                            <i class="fa fa-user text-xl"></i>                              
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Profile</p>
                        </div>
                        
                    </div>
                </a>
                <a href="#" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
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
            <p class="text-sm text-center text-gray-600">v1.0.0.0 | &copy;2023 StuStay.</p>
        </div>
        <!-- end of side menu -->
        <div id="content" class="bg-white/10 col-span-9 rounded-lg p-6">
            <div>
                <h1 class="font-bold py-4 uppercase">My Profile</h1>
                <!-- profile card starts here -->
                <div class="rounded-lg shadow-md w-full">
                    <div class="p-6">
                        <div class="flex items-center space-x-4 mb-6">
                            <img class="w-16 h-16 rounded-full" src="https://res.cloudinary.com/highereducation/image/upload/f_auto,fl_lossy,q_auto/c_fill,f_auto,fl_lossy,q_auto:best,w_600,h_512,g_face/v1602208628/TheBestSchools.org/hero-images/scholarships-african-american-black-students-hero.jpg" alt="Profile Image">
                            <div>
                                <h3 class="text-lg font-bold">Jane Doe</h3>
                                <p class="text-gray-500">Gulu University</p>
                            </div>
                        </div>
                        <div class="border-t border-gray-300 py-4">
                            <h4 class="text-lg font-bold mb-4">Contact Information</h4>
                            <div class="flex items-center mb-2">
                                <i class="fa fa-envelope text-gray-500 mr-2"></i>
                                <p>janedoe@stustay.com</p>
                            </div>
                            <div class="flex items-center">
                                <i class="fa fa-phone text-gray-500 mr-2"></i>
                                <p>(071) 234-5678</p>
                            </div>
                        </div>
                        <div class="border-t border-gray-300 py-4">
                            <h4 class="text-lg font-bold mb-4">Hostel Details</h4>
                            <div class="flex items-center mb-2">
                                <span class="font-bold text-gray-200 mr-2">Hostel:</span>
                                <li class="list-none text-gray-500">Mandela Hsotel</li>
                            </div>
                            <div class="flex items-center">
                                <span class="font-bold text-gray-200 mr-2">Room No:</span>
                                <li class="list-none text-gray-500">120</li>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of profile card -->
                
            </div>
            <!-- end of the activity -->
        </div>
    </div>
</div>
</body>
</html>
