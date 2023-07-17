<?php include '../../controllers/users.php' ?>
<?php include 'includes/title.php' ?>
<?php
    $title = "Hostel Admins | hostels Savvy";
?>
<?php include('includes/header.php') ?>
<?php include('../alert.php') ?>
<div id="content" class="bg-white/10 col-span-9 rounded-lg p-6">
    <div>
        <h1 class="font-bold py-4 uppercase">Hostels</h1>
        <!-- component -->
        <div class="border p-2 md:p-8 rounded-md w-full">
            <div class=" flex items-center justify-between pb-6">
                <div class="flex flex-col md:flex-row gap-4 items-center justify-between w-full">
                    <form class="flex bg-gray-50 items-center p-2 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                        <input class="bg-gray-50 outline-none ml-1 block rounded-lg" type="text" name="" id="" placeholder="search...">
                    </form>
                    <div class="lg:ml-40 ml-10 space-x-8">
                        <button data-modal-target="newUser" data-modal-toggle="newUser" class="bg-green-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">New User</button>
                    </div>
                </div>
            </div>
                <div>
                    <div class="md:mx-4 sm:-mx-8 md:px-4  py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr class="bg-gray-200">
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Name
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Hostel
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            email
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Contact
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="border border-gray-200">
                                    <?php $users = selectAll('users',['type' => 'SH']) ?>
                                    <?php
                                        $itemsPerPage = 4; // You can adjust this value based on your requirement.
                                        $totalItems = count($hostels); // Assuming $hostels contains all the items to be displayed.
                                        $totalPages = ceil($totalItems / $itemsPerPage);
                                        $currentPage = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
                                        $offset = ($currentPage - 1) * $itemsPerPage;
                                        $usersToShow = array_slice($users, $offset, $itemsPerPage);
                                    ?>
                                    <?php foreach ($usersToShow as $key => $user):?>
                                        <tr class="">
                                            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 w-10 h-10">
                                                        <?php if(!empty($user['image'])) :?>
                                                            <img class="w-full h-full rounded-full"
                                                                src="uploads/<?php echo $user['image'];?>"
                                                                alt="" />
                                                        <?php else: ?>
                                                            <img class="w-full h-full rounded-full"
                                                                src="https://as2.ftcdn.net/v2/jpg/02/10/70/13/1000_F_210701394_juARL2AoYEzgYZWI5zHmcGXmqWwQS8L2.jpg"
                                                                alt="" />
                                                        <?php endif ;?>
                                                    </div>
                                                        <div class="ml-3">
                                                            <p class="text-gray-100 whitespace-no-wrap">
                                                                <?php echo $user['fname']." ".$user['lname'] ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                                                <?php
                                                    $hostel = selectOne('hostels',['admin'=> $user['id']]);
                                                ?>
                                                <p class="text-gray-100 whitespace-no-wrap">
                                                    <?php
                                                        if ($hostel) {
                                                            echo $hostel['name'];
                                                        } else {
                                                            echo "Not Assigned";
                                                        }
                                                        
                                                    ?>
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                                                <p class="text-gray-100 whitespace-no-wrap">
                                                    <?php echo $user['email'] ?>
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                                                <p class="text-gray-100 whitespace-no-wrap">
                                                    <?php echo $user['phone'] ?>
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                                                <span
                                                    class="relative inline-block px-3 py-1 font-semibold text-white leading-tight">
                                                    <span aria-hidden
                                                        class="absolute inset-0 bg-green-500 opacity-50 rounded-full"></span>
                                                <span class="relative">View</span>
                                                </span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    
                                </tbody>
                            </table>
                            <!-- pagination -->
                            <div class="flex flex-col items-center mt-2">
                                <!-- Help text -->
                                <span class="text-sm text-gray-200">
                                    Showing <span class="font-semibold text-orange-700"><?php echo (($currentPage - 1) * $itemsPerPage) + 1; ?></span>
                                    to <span class="font-semibold text-orange-700"><?php echo min($currentPage * $itemsPerPage, $totalItems); ?></span>
                                    of <span class="font-semibold text-orange-700"><?php echo $totalItems; ?></span> Entries
                                </span>
                                <!-- pagination Buttons -->
                                <div class="inline-flex mt-2 xs:mt-0">
                                    <?php if ($currentPage > 1): ?>
                                        <a href="?page=<?php echo $currentPage - 1; ?>" class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-500 rounded-l hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            Prev
                                        </a>
                                    <?php endif; ?>

                                    <?php if ($currentPage < $totalPages): ?>
                                        <a href="?page=<?php echo $currentPage + 1; ?>" class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-500 border-0 border-l border-gray-700 rounded-r hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            Next
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
</div>
<!-- new user modal -->
<div id="newUser"  data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center " data-modal-hide="newUser">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>
                <?php include('../../helpers/message.php') ;?>
                <form action="users.php" method="post" class="border-2 border-gray-400 p-4 rounded-lg" >
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="fname" value="<?php echo $fname ?>"  class="block py-2.5 px-2 w-full text-sm text-black bg-transparent border-0 border-2 border-gray-300 rounded-lg" placeholder="First Name " />
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="lname" value="<?php echo $lname ?>"  class="block py-2.5 px-2 w-full text-sm text-black bg-transparent border-0 border-2 border-gray-300 rounded-lg" placeholder="Last Name " />
                        </div>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="email" name="email" value="<?php echo $email ?>" class="block py-2.5 px-2 w-full text-sm text-black  border-0 border-2 border-gray-300 rounded-lg" placeholder="Your Email" />
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="password" name="password" value="<?php echo $password ?>"  class="block py-2.5 px-2 w-full text-sm text-black   border-0 border-2 border-gray-300 rounded-lg" placeholder="Your Password "/> 
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="password" name="repeatPassword" value="<?php echo $repeatPassword ?>"  class="block py-2.5 px-2 w-full text-sm text-black   border-0 border-2 border-gray-300 rounded-lg" placeholder="Confirm Password" />
                    </div>
                    
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="tel" name="phone" value="<?php echo $phone  ?>"  class="block py-2.5 w-full text-sm  bg-transparent border-0 border-2 border-gray-300 rounded-lg px-2 " placeholder=" Phone number (071-234-5678)" />
                    </div>
                    <div class="relative z-0 w-full mb-6 group">                   
                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-500 ">Select Your Gender</label>
                        <select name="gender" class="bg-gray-900 border border-gray-300 text-gray-200 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose Gender</option>
                        <option value="F">Female</option>
                        <option value="M">Male</option>
                        </select>
                    </div>
                    <input type="hidden" name="type" value="SH">
                    <button type="submit" name="addHostel" class="text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm w-full  px-5 py-2.5 text-center">Submit</button>
                    <div class = "flex flex-row justify-between my-2">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
<?php include('includes/footer.php') ?>