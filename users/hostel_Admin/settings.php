<?php include '../../controllers/hostels.php' ?>
<?php include 'includes/header.php'?>

<div id="content" class="bg-white/10 col-span-9 rounded-lg p-6">
    <div>
        <div class="flex justify-between">
            <h1 class="font-bold py-4 uppercase">Settings</h1>
            <?php $setting = selectOne('hostels',['id'=>$hostel['id']]); ?>
            <ul class="flex space-x-4">
                <?php if($setting['wifi']==1):?>
                <li class="list-none"><i class="fa fa-wifi"></i></li>
                <?php endif;?>
                <?php if($setting['self_contained']==1):?>
                <li class="list-none"><i class="fa fa-shower"></i></li>
                <?php endif;?>
                <?php if($setting['reading']==1):?>
                <li class="list-none"><i class="fa fa-book"></i></li>
                <?php endif;?>
                <?php if($setting['camera']==1):?>
                <li class="list-none"><i class="fa fa-camera"></i></li>
                <?php endif;?>
            </ul>
            <button data-modal-target="settingModal" data-modal-toggle="settingModal" class="space-x-4 text-orange-600" >Edit <i class="fa fa-pencil"></i></button>
        </div>
        <!-- component -->
        <div class=" rounded-lg shadow-md p-4">
            <h2 class="text-xl text-gray-100 font-bold mb-4">General Information</h2>
            <div>
                <div class="mb-4">
                    <h3 for="hostel-name" class="block font-bold text-gray-50">Hostel Name:</h3>
                    <p class="text-gray-200 text-sm"><?php echo $setting['name']?></p>
                </div>
                <div class="mb-4">
                    <h3 for="address" class="block font-bold text-gray-50">Address:</h3>
                    <p class="text-gray-200 text-sm"><?php echo $setting['address']?></p>
                    
                </div>
                <div class="mb-4">
                    <h3 for="description" class="block font-bold text-gray-50">Description:</h3>
                    <p class="text-gray-200 text-sm"><?php echo $setting['description']?></p>
                </div>
            </div>
        </div>
        <div>
        <?php echo html_entity_decode($setting['google'])?>
        </div>
    </div>
    <!-- end of the activity -->
</div>
<?php include 'includes/modals.php'?>
<?php include 'includes/footer.php'?>