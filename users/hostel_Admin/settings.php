<?php include '../../controllers/settings.php' ?>
<?php include 'includes/header.php'?>

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
            <button data-modal-target="settingModal" data-modal-toggle="settingModal" class="space-x-4 text-orange-600" >Edit <i class="fa fa-pencil"></i></button>
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
                    <p class="text-gray-200 text-sm">Plot 9, Nelson Mandela Road</p>
                    
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
<?php include 'includes/modals.php'?>
<?php include 'includes/footer.php'?>