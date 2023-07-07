<?php
    include('controllers/users.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Login | stuStay</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-900">
    <div class="px-2">
        <div class="flex flex-col items-center">
            <img src="Screenshot 2023-07-01 195602.png" alt="" class="w-16">
            <h1 class="text-white text-4xl font-bold mb-8">Welcome to StuStay</h1>
            <div class="w-full"><?php include('helpers/message.php');?></div>
        </div>
        <div class="md:w-96 md:mx-auto">
            <form action="" method="post" class="py-4 px-4 rounded-lg border border-blue-500">
                <div class="mb-6">
                    <label for="email" class="text-white block mb-2 text-sm font-medium">Email</label>
                    <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter email" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                    <input type="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Enter Password">
                </div>
                <div class = "flex flex-row justify-between mb-2">
                    <a class = "text-white text-sm md:text-md ">Forgot Password</a>
                    <a href="register.php" class = "text-orange-700 text-sm md:text-md">Signup</a>
                </div>
                <button type="submit" name="loginBtn" class="w-full text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Login</button>
            </form>
            <p class="text-center text-white text-xs mt-2">
                &copy; 2023 StuStay. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>
