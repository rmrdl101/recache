<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Dashboard</title>
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100">
    <div id="app" class="flex">
        <div class="w-64 bg-gray-800 text-white p-4">
            <h2 class="text-2xl font-bold mb-4">CMS</h2>
            <ul>
                <li><a href="#" class="hover:text-gray-400">Dashboard</a></li>
                <li><a href="#" class="hover:text-gray-400">Reels</a></li>
                <li><a href="#" class="hover:text-gray-400">Users</a></li>
            </ul>
        </div>
        <div class="flex-1 p-6">
            <dashboard></dashboard>
        </div>
    </div>
</body>
</html>