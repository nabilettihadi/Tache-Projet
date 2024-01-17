<?php
$task = $this->view_data["task"];
?>
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
        <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Update Task</h1>
        <form action="<?= BASE_URL ?>/task/update_Task" method="post" class="space-y-6">
            <div>
                <input type="hidden" name="id" value="<?= intval($task['id_task']) ?>">
                <label for="task-title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Task Title</label>
                <input type="text" name="task-title" id="task-title" class="w-full p-2.5 border rounded-lg focus:ring-blue-500 focus:border-blue-500 text-gray-900 dark:bg-gray-50 dark:placeholder-gray-400" value="<?= $task['title'] ?>" placeholder="Task Title" required>
            </div>
            <div>
                <label for="task-description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Task Description</label>
                <textarea name="task-description" rows="4" class="w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:placeholder-gray-400" placeholder="Write your task description here..."><?= $task['description']; ?></textarea>
            </div>
            <div>
                <label for="status" class="block mb-2 text-sm font-medium text-gray-300 dark:text-white">Select an option</label>
                <select name="status" id="status" class="w-full p-2.5 border rounded-lg focus:ring-blue-500 focus:border-blue-500 text-gray-900 dark:placeholder-gray-400">
                    <option value="to do">To Do</option>
                    <option value="in progress">In Progress</option>
                    <option value="done">Done</option>
                </select>
            </div>
            <div>
                <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select date</label>
                <input name="date" type="date" class="w-full p-2.5 border rounded-lg focus:ring-blue-500 focus:border-blue-500 text-gray-900 dark:bg-white dark:placeholder-gray-400" value="<?= $task['deadline'] ?>" placeholder="Select date">
            </div>
            <div class="flex justify-between mt-6">
                <button name="submit" type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Update Task</button>
                <a href="<?= BASE_URL ?>/task" class="w-full text-white bg-red-700 hover:bg-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Cancel</a>
            </div>
        </form>
    </div>
</body>

</html>
