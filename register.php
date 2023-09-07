<?php
    include('controllers/users.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="users/favicon.ico" type="image/x-icon">
  <title>Sign UP | Hostels Savvy</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body class="flex items-center justify-center py-4 bg-gray-900">
    <div class="px-2">
        <div class="flex flex-col items-center">
            <img src="users/logo.png" alt="" class="w-48">
            <h1 class="text-white text-4xl font-bold mb-8">Sign up to Hostels Savvy
                <?php if(count($users)=== 0):?>
                    (Admin)
                <?php endif;?>
            </h1>
            <div class="w-full"><?php include('helpers/message.php');?></div>
        </div>
        <div class="md:w-96 md:mx-auto">
            
            <form action="register.php" method="post" class="border-2 border-gray-400 p-4 rounded-lg" >
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="fname" value="<?php echo $fname ?>"  class="block py-2.5 px-2 w-full text-sm text-gray-100 bg-transparent border-0 border-2 border-gray-300 rounded-lg" placeholder="First Name " />
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="lname" value="<?php echo $lname ?>"  class="block py-2.5 px-2 w-full text-sm text-gray-100 bg-transparent border-0 border-2 border-gray-300 rounded-lg" placeholder="Last Name " />
                    </div>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="email" name="email" value="<?php echo $email ?>" class="block py-2.5 px-2 w-full text-sm text-gray-100 bg-transparent border-0 border-2 border-gray-300 rounded-lg" placeholder="Your Email" />
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="password" name="password" value="<?php echo $password ?>"  class="block py-2.5 px-2 w-full text-sm text-gray-100 bg-transparent border-0 border-2 border-gray-300 rounded-lg" placeholder="Your Password "/> 
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="password" name="repeatPassword" value="<?php echo $repeatPassword ?>"  class="block py-2.5 px-2 w-full text-sm text-gray-100 bg-transparent border-0 border-2 border-gray-300 rounded-lg" placeholder="Confirm Password" />

                </div>
                
                <div class="relative z-0 w-full mb-6 group">
                    <input type="tel" name="phone" value="<?php echo $phone  ?>"  class="block py-2.5 w-full text-sm text-gray-100 bg-transparent border-0 border-2 border-gray-300 rounded-lg px-2 " placeholder=" Phone number (071-234-5678)" />
                </div>
                <?php if(!(count($users) === 0)):?>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="campus" value="<?php echo $campus  ?>"  class="block py-2.5 w-full text-sm text-gray-100 bg-transparent border-0 border-2 border-gray-300 rounded-lg px-2 " placeholder="Campus (Ex. Gulu University)"/>
                </div>
                <?php endif;?>
                <div class="relative z-0 w-full mb-6 group">                   
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-500 ">Select Your Gender</label>
                    <select name="gender" class="bg-gray-900 border border-gray-300 text-gray-200 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose Gender</option>
                    <option value="F">Female</option>
                    <option value="M">Male</option>
                    </select>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-500 ">Date of Birth</label>
                    <input type="date" name="DOB" value="<?php echo $DOB ?>"  class="py-2.5 w-full text-sm text-gray-200 bg-transparent border-0 border-2 border-gray-300 rounded-lg px-2 " placeholder="Campus (Ex. Gulu University)"/>
                </div>
                <?php if(count($users) === 0):?>
                    <input type="hidden" name="type" value="SA">
                <?php else: ?>
                    <input type="hidden" name="type" value="SS">
                <?php endif; ?>
                <?php if(count($users) === 0):?>
                    <button type="submit" name="registerAdmin" class="text-white bg-orange-700 hover:bg-orange-800 font-medium rounded-lg text-sm w-full  px-5 py-2.5 text-center">Submit</button>
                <?php else: ?>
                    <button type="submit" name="submitBtn" class="text-white bg-orange-700 hover:bg-orange-800 font-medium rounded-lg text-sm w-full  px-5 py-2.5 text-center">Submit</button>
                <?php endif; ?>
                <div class = "flex flex-row justify-between my-2">
                    <span class = "text-white text-sm md:text-md ">Already Have Account? 
                        <a href="login.php" class = "text-[#00FF00] text-sm md:text-md">Login</a>
                    </span>
                </div>
            </form>
  
            <p class="text-center text-white text-xs mt-2">
                &copy; 2023 HostelsSavvy. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>
