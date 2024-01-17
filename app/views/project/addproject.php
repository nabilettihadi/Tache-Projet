<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-r from-blue-500 via-blue-700 to-blue-900 flex items-center justify-center">
    <div class="w-full max-w-md p-10 bg-white border-0 shadow-lg rounded-3xl">
        <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Add Project</h1>
        <form action="<?= BASE_URL ?>/project/Add_project" method="post" class="space-y-6">
            <div>
                <label for="nameprojet" class="block mb-2 text-sm font-medium text-gray-800">Project Name</label>
                <input type="text" name="nameprojet" id="nameprojet" placeholder="Project Name"
                    class="w-full p-2.5 border rounded-lg focus:ring-blue-500 focus:border-blue-500 text-gray-800">
                <span class="text-sm text-red-600 hidden" id="error">Name is required</span>
            </div>
            <div class="flex space-x-4">
                <div class="flex-1">
                    <label for="startdate" class="block mb-2 text-sm font-medium text-gray-800">Start Date</label>
                    <input type="text" name="startdate" placeholder="Start Date"
                        onclick="this.setAttribute('type', 'date');"
                        class="w-full p-2.5 border rounded-lg focus:ring-blue-500 focus:border-blue-500 text-gray-800">
                    <span class="text-sm text-red-600 hidden" id="error">Date is required</span>
                </div>
                <div class="flex-1">
                    <label for="enddate" class="block mb-2 text-sm font-medium text-gray-800">End Date</label>
                    <input type="text" name="enddate" placeholder="End Date"
                        onclick="this.setAttribute('type', 'date');"
                        class="w-full p-2.5 border rounded-lg focus:ring-blue-500 focus:border-blue-500 text-gray-800">
                    <span class="text-sm text-red-600 hidden" id="error">Date is required</span>
                </div>
            </div>
            <div class="flex justify-between mt-6">
                <button name="submit"
                    class="w-full text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add
                    Project</button>
                <a href="<?= BASE_URL ?>/project"
                    class="w-full text-white bg-gray-600 hover:bg-gray-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Cancel</a>
            </div>
        </form>
    </div>
</body>

</html>


