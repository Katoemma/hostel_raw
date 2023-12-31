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
  <title>Login | Hostels Savvy</title>
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-blue-600">
    <div class="px-2">
        <div class="flex flex-col items-center">
            <img src="users/logo.png" alt="logo" class="w-48">
            <h1 class="text-white text-center text-4xl font-bold mb-8">Welcome to Hostels Savvy</h1>
            <div class="w-full"><?php include('helpers/message.php');?></div>
        </div>
        <div class="md:w-96 md:mx-auto">
            <form action="" method="post" class="py-4 px-4 rounded-lg border border-white">
                <div class="mb-6">
                    <label for="email" class="text-white block mb-2 text-sm font-medium">Email</label>
                    <input type="email" name="email" value="<?php echo $email;?>" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter email" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                    <input type="password" name="password" value="<?php echo $paasword;?>" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Enter Password">
                </div>
                <div class = "flex flex-row justify-between mb-2">
                    <a href="password.php" class = "text-white text-sm md:text-md ">Forgot Password</a>
                    <a href="register.php" class = "text-black text-sm md:text-md">Signup</a>
                </div>
                <button type="submit" name="loginBtn" class="w-full text-green-600 hover:text-white bg-white hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Login</button>
            </form>
            <p class="text-center text-white text-xs mt-2">
                &copy; 2023 Hostelssavvy. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>
