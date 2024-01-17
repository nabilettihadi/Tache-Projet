<?php $tasks = $this->view_data['task'];?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>


    <script>
        tailwind.config = {
            theme: {
                fontFamily: {
                    Saira: ["Saira Condensed", "sans-serif"],
                },
                extend: {
                    colors: {

                        accent: "#C20002",
                        hoverd: "#FF4F4D",
                        dark: "#1e1b4b",
                        secondary: "#312e81",
                        blueText: "#1e40af",
                        primary: "#1d4ed8",
                        blutextbtn: "#2563eb",
                        blueText2: "#3b82f6",
                        background: "#60a5fa",
                        btn: "#93c5fd",
                        deleted: "#FF6D4D",
                        hoverd: "#FF4F4D",
                    },
                },
            },
        };
    </script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css'>
    <link rel="stylesheet" href="./style.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />

<body class="bg-text">
    <nav class="fixed top-0 z-50 w-full  border-b border-gray-200 bg-primary dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <div class="flex flex-row gap-1 items-center justify-center ml-2 ">


                        <h2 class="ms-3 text-white font-semibold text-2xl">Data</h2>
                        <img src="<?= BASE_URL_ASSETS ?>img/brand.png" alt=brand />
                        <h2 class="ms-3 text-white font-semibold text-2xl">are </h2>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-primary border-r border-gray-200 sm:translate-x-0 dark:border-gray-700" aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-primary ">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="<?= BASE_URL ?>/statistic" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-btn dark:text-gray-300 dark:hover:bg-btn dark:hover:text-white group">
                        <svg class="w-5 h-5 text-white transition duration-75 dark:text-white group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-btn dark:text-gray-300 dark:hover:bg-btn dark:hover:text-white group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Kanban</span>

                    </a>
                </li>
                <li>
                    <a href="<?= BASE_URL ?>/project" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-btn dark:text-gray-300 dark:hover:bg-btn dark:hover:text-white group">
                        <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 dark:text-white group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Projects</span>
                    </a>
                </li>
                <li>
                    <a href="<?= BASE_URL ?>/user/logout" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-btn dark:text-gray-300 dark:hover:bg-btn dark:hover:text-white group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-white group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign Out</span>
                    </a>
                </li>

            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg mt-14">
            <div class="grid md:grid-cols-2 grid-cols-1  gap-4 mb-4">
                <form method=post action="<?= BASE_URL ?>/task/search" class="w-full">
                    <div class='max-w-md ml-6 shadow-xl w-full'>
                        <div class="relative flex items-center w-full h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">


                            <input class="border border-0 border-white focus:outline-none focus:ring focus:ring-white h-full w-full outline-none text-sm text-gray-700 pr-2" name="task_search" type="text" id="search" placeholder="Search task.." />
                            <button id="button" type="submit" name="search_submit" class="grid place-items-center h-full w-12 text-gray-300 border border-0 border-white focus:outline-none focus:ring focus:ring-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 md:grid-rows-2 gap-4 px-4 pb-8 items-start overflow-x-scroll ">
                <div class="  rounded bg-grey-light  flex-no-shrink w-70 p-2 mr-3">
                    <div class="flex items-center flex-shrink-0 h-10 px-2">
                        <span class="block text-sm font-semibold">To Do</span>
                        <span class="todoStatistic flex items-center justify-center w-5 h-5 ml-2 text-sm font-semibold text-indigo-500 bg-white rounded bg-opacity-30"></span>
                        <a href="<?= BASE_URL ?>/task/addtask/" class="flex items-center justify-center w-6 h-6 ml-auto text-indigo-500 rounded hover:bg-indigo-500 hover:text-indigo-100">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="todo">
                        <?php 
                        if ($tasks > 0) {
                            foreach ($tasks as $task) {
                                if ($task['status'] === "to do") {


                        ?>
                                    <div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100 shadow-xl hover:shadow-2xl" draggable="true">
                                        <button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
                                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                        </button>
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full"><?= $task["title"] ?></span>
                                        <h4 class="mt-3 text-sm font-medium"><?= $task["description"] ?></h4>
                                        <div class="flex items-center w-full justify-between mt-3 text-xs font-medium text-gray-400">
                                            <div class="flex items-center">
                                                <svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                                </svg>
                                                <span class="ml-1 leading-none"><?= date('d M', strtotime($task["deadline"])) ?></span>
                                            </div>
                                            <div class="flex items-center justify-end ">
                                                <a href="<?= BASE_URL ?>/task/delete_task/<?= $task['id_task'] ?>" title="Archive">
                                                    <div class="relative flex items-center ml-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512">
                                                            <path fill="#FF4F4D" d="M576 128c0-35.3-28.7-64-64-64H205.3c-17 0-33.3 6.7-45.3 18.7L9.4 233.4c-6 6-9.4 14.1-9.4 22.6s3.4 16.6 9.4 22.6L160 429.3c12 12 28.3 18.7 45.3 18.7H512c35.3 0 64-28.7 64-64V128zM271 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z" />
                                                        </svg>

                                                    </div>
                                                </a>
                                                <a href="<?= BASE_URL ?>/task/updateTask/<?= $task['id_task'] ?>" title="Update task">
                                                    <div class="flex items-center ml-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" fill="#16a34a" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                        <?php }
                            }
                        } else echo '<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100 shadow-xl hover:shadow-2xl" draggable="true"><p>No Task Found!</p></div>' ?>
                    </div>
                </div>
                <div class="rounded bg-grey-light flex-no-shrink w-70 p-2 mr-3">
                    <div class="flex items-center flex-shrink-0 h-10 px-2">
                        <span class="block text-sm font-semibold">In progress</span>
                        <span class="inprogressStatistic flex items-center justify-center w-5 h-5 ml-2 text-sm font-semibold text-indigo-500 bg-white rounded bg-opacity-30"></span>
                        <button class="flex items-center justify-center w-6 h-6 ml-auto text-indigo-500 rounded hover:bg-indigo-500 hover:text-indigo-100">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="inprogress">
                        <?php if ($tasks > 0) {
                            foreach ($tasks as $task) {
                                if ($task['status'] === "in progress") {



                        ?>
                                    <div class=" relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100 shadow-xl hover:shadow-2xl" draggable="true">
                                        <button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
                                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                        </button>
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-sky-500 bg-sky-100 rounded-full"><?= $task["title"] ?></span>
                                        <h4 class="mt-3 text-sm font-medium"><?= $task["description"] ?></h4>
                                        <div class="flex items-center justify-between w-full mt-3 text-xs font-medium text-gray-400">

                                            <div class="flex items-center">
                                                <svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                                </svg>
                                                <span class="ml-1 leading-none"><?= date('d M', strtotime($task["deadline"])) ?></span>
                                            </div>
                                            <div class="flex items-center justify-end ">
                                                <a href="<?= BASE_URL ?>/task/delete_task/<?= $task['id_task'] ?>" title="Archive">
                                                    <div class="relative flex items-center ml-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512">
                                                            <path fill="#FF4F4D" d="M576 128c0-35.3-28.7-64-64-64H205.3c-17 0-33.3 6.7-45.3 18.7L9.4 233.4c-6 6-9.4 14.1-9.4 22.6s3.4 16.6 9.4 22.6L160 429.3c12 12 28.3 18.7 45.3 18.7H512c35.3 0 64-28.7 64-64V128zM271 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z" />
                                                        </svg>
                                                    </div>
                                                </a>
                                                <a href="<?= BASE_URL ?>/task/updateTask/<?= $task['id_task'] ?>" title="Update task">
                                                    <div class="flex items-center ml-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" fill="#16a34a" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                        <?php }
                            }
                        } else echo '<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100 shadow-xl hover:shadow-2xl" draggable="true"><p>No Task Found!</p></div>' ?>
                    </div>
                </div>
                <div class="rounded bg-grey-light flex-no-shrink w-70 p-2 ">
                    <div class="flex items-center flex-shrink-0 h-10 px-2">
                        <span class="block text-sm font-semibold">Done</span>
                        <span class="doneStatistic flex items-center justify-center w-5 h-5 ml-2 text-sm font-semibold text-indigo-500 bg-white rounded bg-opacity-30"></span>
                        <button class="flex items-center justify-center w-6 h-6 ml-auto text-indigo-500 rounded hover:bg-indigo-500 hover:text-indigo-100">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="done">
                        <?php if ($tasks > 0) {
                            foreach ($tasks as $task) {
                                if ($task['status'] === "done") {
                        ?>
                                    <div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100 shadow-xl hover:shadow-2xl" draggable="true">
                                        <button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
                                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                        </button>
                                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-green-500 bg-green-100 rounded-full"><?= $task["title"] ?><?= $task["title"] ?></span>
                                        <h4 class="mt-3 text-sm font-medium"><?= $task["description"] ?></h4>
                                        <div class="flex items-center justify-between  w-full mt-3 text-xs font-medium text-gray-400">

                                            <div class="flex items-center">
                                                <svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                                </svg>
                                                <span class="ml-1 leading-none"><?= date('d M', strtotime($task["deadline"])) ?></span>
                                            </div>
                                            <div class="flex items-center justify-end ">
                                                <a href="<?= BASE_URL ?>/task/delete_task/<?= $task['id_task'] ?>" title="Archive">
                                                    <div class="relative flex items-center ml-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512">
                                                            <path fill="#FF4F4D" d="M576 128c0-35.3-28.7-64-64-64H205.3c-17 0-33.3 6.7-45.3 18.7L9.4 233.4c-6 6-9.4 14.1-9.4 22.6s3.4 16.6 9.4 22.6L160 429.3c12 12 28.3 18.7 45.3 18.7H512c35.3 0 64-28.7 64-64V128zM271 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z" />
                                                        </svg>
                                                    </div>
                                                </a>
                                                <a href="<?= BASE_URL ?>/task/updateTask/<?= $task['id_task'] ?>" title="Update task">
                                                    <div class="flex items-center ml-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" fill="#16a34a" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                        <?php }
                            }
                        } else echo '<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100 shadow-xl hover:shadow-2xl" draggable="true"><p>No Task Found!</p></div>' ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        const todoCount = document.querySelector(".todo").childElementCount;
        const inprogressCount = document.querySelector(".inprogress").childElementCount;
        const doneCount = document.querySelector(".done").childElementCount;
        document.querySelector(".doneStatistic").innerText = doneCount;
        document.querySelector(".inprogressStatistic").innerText = inprogressCount;
        document.querySelector(".todoStatistic").innerText = todoCount;
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>