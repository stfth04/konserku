<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <title>navbar</title>
</head>
<body class="font-roboto bg-[#D2CF9F]">
<nav class="bg-[#804E00] p-4 h-20 flex justify-between items-center">
    <!-- Logo -->
    <div class="flex items-center space-x-4">
        <img alt="Logo" class="h-[45px] w-auto" src="lgo.png" />
    </div>
    <!-- Search Bar -->
    <div class="flex items-center flex-grow mx-4 relative">
    <span class="absolute left-4 text-[#804E00]">
        <i class="fas fa-search"></i>
    </span>
    <input class="pl-10 py-2 rounded-full focus:outline-none w-full" placeholder="Search..." type="text" />
    </div>
    <a href="admin/login.php" role="button" class="text-white px-4 py-2 hover:bg-[#663B00] rounded-md focus:outline-none flex items-center">
    Login
    <i class="fas fa-user ml-2"></i>
    </a>
</nav>
</body>
</html>