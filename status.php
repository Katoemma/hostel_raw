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
            <img src="users/Screenshot 2023-07-01 195602.png" alt="" class="w-16">
            <h1 class="text-white text-4xl font-bold mb-8">StuStay</h1>
            <div class="w-full"><?php include('helpers/message.php');?></div>
        </div>
        <div class="md:w-96 md:mx-auto">
            <h3 class="text-red-500 text-4xl text-center">Hostel Deactivated !!</h3>
            <p class="text-green-700 text-center">Please Call The System Admin.</p>
            <p class="text-center text-white text-xs mt-2">
                &copy; 2023 StuStay. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>
