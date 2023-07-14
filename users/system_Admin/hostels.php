<?php include '../../controllers/hostels.php' ?>
<?php include('includes/header.php') ?>
<?php include '../alert.php' ?>
<div id="content" class="bg-white/10 col-span-9 rounded-lg p-6">
    <div>
        <h1 class="font-bold py-4 uppercase">Hostels</h1>
        <!-- component -->
        <div class="border md:p-8 rounded-md w-full">
            <div class=" flex items-center justify-between pb-6">
                <div class="flex flex-col gap-2  md:flex-row items-center justify-between w-full">
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
                        <button data-modal-target="newUser" data-modal-toggle="newUser" class="bg-green-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">New Hostel</button>
                    </div>
                </div>
            </div>
                <div>
                    <div class="md:mx-4 md:px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <?php $hostels = selectAll('hostels'); ?>
                        <?php if ($hostels): ?>
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr class="bg-gray-200">
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Hostel
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Created
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            STUDENTS
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Status
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="border border-gray-200">
                                    <?php foreach ($hostels as $key => $hostel):?>
                                        
                                        <tr class="">
                                            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                                                <p class="text-gray-100 whitespace-no-wrap"><?php echo $hostel['name']; ?></p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                                                <p class="text-gray-100 whitespace-no-wrap">
                                                    
                                                </p>
                                                <button data-tooltip-target="tooltip-hover" data-tooltip-trigger="hover" type="button" class="text-white"><?php echo date('Y-m-d', strtotime($hostel['created'])); ?></button>
                                                <div id="tooltip-hover" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-green-600 rounded-lg shadow-sm opacity-0">
                                                    <?php echo date('H:i:s', strtotime($hostel['created'])); ?>
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                                                <p class="text-gray-100 whitespace-no-wrap">
                                                    43
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                                                <span class="relative inline-block px-3 py-1 font-semibold text-white leading-tight">
                                                    <?php if ($hostel['status'] == 1):?>
                                                        <a href="hostels.php?deactivate=<?php echo $hostel['id'];?>" class="relative bg-green-600 px-2 py-1 rounded-xl">Deactivate</a>
                                                    <?php else: ?>
                                                        <a href="hostels.php?activate=<?php echo $hostel['id'];?>" class="relative bg-red-500 px-2 py-1 rounded-xl">Activate</a>
                                                    <?php endif; ?>
                                                </span>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                                                <button data-modal-target="editModal" data-modal-toggle="editModal" class="text-gray-100 whitespace-no-wrap">
                                                    <span class="relative bg-orange-600 px-2 py-1 rounded-xl"><i class="fa fa-eye"></i> View</span>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                            <div
                                class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                                <span class="text-xs xs:text-sm text-gray-900">
                                    Showing 1 to 4 of 50 Entries
                                </span>
                                <div class="inline-flex mt-2 xs:mt-0">
                                    <button
                                        class="text-sm text-indigo-50 transition duration-150 hover:bg-green-600 bg-green-600 font-semibold py-2 px-4 rounded-l">
                                        Prev
                                    </button>
                                    &nbsp; &nbsp;
                                    <button
                                        class="text-sm text-indigo-50 transition duration-150 hover:bg-green-600 bg-green-600 font-semibold py-2 px-4 rounded-r">
                                        Next
                                    </button>
                                </div>
                            </div>
                        <?php else: 
                            echo "No hostel Registered!!"
                        ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
</div>
<!-- new hostel modal -->
<div id="newUser" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center " data-modal-hide="newUser">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">New Hostel</h3>
                <?php include '../../helpers/message.php' ?>
                <form class="space-y-6" action="hostels.php" method="post">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hostel Name</label>
                        <input type="Text" name="name" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ex.Mandela Hostel">
                    </div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Hostel Admin</label>
                    <select id="countries" name="admin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700">
                        <option value="">___Select Admin___</option>
                        <?php
                            $sql = "SELECT * FROM users WHERE id NOT IN (SELECT admin FROM hostels) AND type='SH'";
                            $admins = $conn->query($sql);
                        ?>
                        <?php foreach ($admins as $key => $admin):?>
                            <option value="<?php echo $admin['id']?>"> <?php echo $admin['fname']." ".$admin['lname'] ?></option>
                        <?php endforeach;?>
                    </select>
                    <button type="submit" name="addHostel" class="w-full text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add Hostel</button>
                </form>
            </div>
        </div>
    </div>
</div> 
<?php include('includes/footer.php') ?>