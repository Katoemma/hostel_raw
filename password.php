<?php include 'controllers/password_reset.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="users/favicon.ico" type="image/x-icon">
  <title>Forgot Password | stuStay</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-900">
    <?php include 'includes/message.php'  ?>
    <div class="px-2">
        <div class="flex flex-col items-center mb-2">
            <img src="users/logo.png" alt="" class="w-48">
            <h1 class="text-white font-semibold text-4xl text-center">Hostels Savvy</h1>
        </div>
        <div class="border border-blue-500 shadow-md rounded-lg px-8 py-10">
            <p class="text-gray-300 mb-6">Enter a valid email address to reset your password.</p>
            <?php include 'helpers/message.php'; ?>
            <form action="password.php" method="POST">
                <div class="mb-6">
                    <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"  placeholder="Enter your email address">
                </div>
                <div class="flex items-center justify-end">
                    <button type="submit" name="reset" class="w-full md:w-auto bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >Reset Password</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
