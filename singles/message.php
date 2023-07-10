<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Settings | stuStay</title>
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
<!-- side menu starts here -->
<div class="antialiased bg-gray-900 w-full min-h-screen text-slate-300 relative py-4">
    <div class=" md:grid grid-cols-12 mx-auto gap-2 sm:gap-4 md:gap-6 lg:gap-10 xl:gap-14 max-w-7xl my-10 px-2">
        <div id="menu" class="hidden md:block bg-white/10 col-span-3 rounded-lg p-4 ">
            <img src="Screenshot_2023-07-01_150822-removebg-preview.png" class="h-12" alt="">
            <p class="text-slate-400 text-sm mb-2">Welcome back,</p>
            <a href="#" class="flex flex-col space-y-2 md:space-y-0 md:flex-row mb-5 items-center md:space-x-2 hover:bg-white/10 group transition duration-150 ease-linear rounded-lg group w-full py-3 px-2">
                <div>
                    <img class="rounded-full w-10 h-10 relative object-cover" src="https://img.freepik.com/free-photo/no-problem-concept-bearded-man-makes-okay-gesture-has-everything-control-all-fine-gesture-wears-spectacles-jumper-poses-against-pink-wall-says-i-got-this-guarantees-something_273609-42817.jpg?w=1800&t=st=1669749937~exp=1669750537~hmac=4c5ab249387d44d91df18065e1e33956daab805bee4638c7fdbf83c73d62f125" alt="">
                </div>
                <div>
                    <p class="font-medium group-hover:text-indigo-400 leading-4">Jim Smith</p>
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
                        <div class="absolute -top-3 -right-3 md:top-0 md:right-0 px-2 py-1.5 rounded-full bg-indigo-800 text-xs font-mono font-bold">23</div>
                    </div>
                </a>
                <a href="#" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                    <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>                              
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
                <div class="flex justify-between">
                    <h1 class="font-bold py-4 uppercase">Rooms</h1> 
                    <ul class="flex space-x-4">
                        <li class="list-none"><i class="fa fa-wifi"></i></li>
                        <li class="list-none"><i class="fa fa-shower"></i></li>
                        <li class="list-none"><i class="fa fa-book"></i></li>
                        <li class="list-none"><i class="fa fa-wifi"></i></li>
                    </ul>
                    <button class="space-x-4 text-orange-600" >Edit <i class="fa fa-pencil"></i></button>
                </div>
                <!-- component -->
                <div class=" rounded-lg shadow-md p-4">
                    <h2 class="text-xl text-gray-100 font-bold mb-4">General Information</h2>
                    <div>
                        <div class="mb-4">
                            <h3 for="hostel-name" class="block font-bold text-gray-50">Hostel Name:</h3>
                            <p class="text-gray-200 text-sm">Mandela Hostel</p>
                        </div>
                        <div class="mb-4">
                            <h3 for="address" class="block font-bold text-gray-50">Address:</h3>
                            <p class="text-gray-200 text-sm">Mandela Hostel</p>
                            
                        </div>
                        <div class="mb-4">
                            <h3 for="description" class="block font-bold text-gray-50">Description:</h3>
                            <p class="text-gray-200 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores iure consequatur eveniet repudiandae, delectus quia! Reprehenderit aliquam, laborum eligendi id ducimus officiis qui magnam molestiae vitae? Repellendus unde placeat sed?</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of the activity -->
        </div>
    </div>
</div>
</body>
</html>
