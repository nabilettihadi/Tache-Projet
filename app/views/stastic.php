<?php
$numberOftask = $this->view_data['statistic'];
$task = $this->view_data['numberOfTask'];
$taskDone = $this->view_data['taskDone'];
$taskDoneth = $this->view_data['taskth'];
$taskin = $this->view_data['taskinc'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kanban</title>
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
                        text: " #edf2f7",
                        primary3: "#155831",
                        secondary: "#D7E4DC",
                        accent: "#C20002",
                        primary2: "#3E5815",
                        hoverd: "#FF4F4D",
                        dark: "#1e1b4b",
                        secondary: "#3!e81",
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
                    <a href="<?= BASE_URL ?>/task/task/home" class=" flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-btn dark:text-gray-300 dark:hover:bg-btn dark:hover:text-white group">
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
                <div class="bg-opacity-90 group hover:bg-opacity-100 shadow-xl hover:shadow-2xl p-3 rounded-lg">
                    <div class="grid md:grid-cols-3 gap-3 mb-2">
                        <dl class="bg-orange-50 dark:bg-blue-400 rounded-lg flex flex-col items-center justify-center h-[78px]">
                            <dt class="w-8 h-8 rounded-full bg-orange-100 dark:bg-white text-orange-700 dark:text-orange-400 text-sm font-medium flex items-center justify-center mb-1"><?= $numberOftask['to do'] ?></dt>
                            <dd class="text-orange-600 dark:text-orange-400 text-sm font-medium">To do</dd>
                        </dl>
                        <dl class="bg-teal-50 dark:bg-blue-400 rounded-lg flex flex-col items-center justify-center h-[78px]">
                            <dt class="w-8 h-8 rounded-full dark:bg-white text-teal-600 dark:text-teal-300 text-sm font-medium flex items-center justify-center mb-1"><?= $numberOftask['in progress'] ?></dt>
                            <dd class="text-teal-600 dark:text-teal-300 text-sm font-medium">In progress</dd>
                        </dl>
                        <dl class="dark:bg-blue-400 rounded-lg flex flex-col items-center justify-center h-[78px]">
                            <dt class="w-8 h-8 rounded-full bg-white text-blue-500 dark:text-blue-500 text-sm font-medium flex items-center justify-center mb-1"><?= $numberOftask["doing"] ?></dt>
                            <dd class="text-blue-600 dark:text-blue-700 text-sm font-medium">Done</dd>
                        </dl>
                    </div>
                    <div id="more-details" class="border-gray-200 border-t dark:border-gray-600 pt-3 mt-3 space-y-2 hidden">
                        <dl class="flex items-center justify-between">
                            <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal">Average task completion rate:</dt>
                            <dd class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
                                <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4" />
                                </svg> 57%
                            </dd>
                        </dl>


                    </div>
                </div>
            </div>
        </div>
        <section class="grid md:grid-cols-2 md:grid-rows-2 grid-cols-1 gap-6">
            <div class="flex items-center p-8 bg-white shadow rounded-lg">
                <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-purple-600 bg-purple-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <div>
                    <span class="block text-2xl font-bold"><?= $task['numberoftask'] ?></span>
                    <span class="block text-gray-500"><?= $task['name'] ?></span>
                    <span class="block text-gray-500">The project with the most tasks</span>

                </div>
            </div>
            <div class="flex items-center p-8 bg-white shadow rounded-lg">
                <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </div>
                <div>
                    <span class="block text-2xl font-bold"><?= $taskDone["numberoftaskdone"] ?></span>
                    <span class="block text-gray-500"><?= $taskDone["name"] ?></span>
                    <span class="block text-gray-500">The project with the most tasks Done</span>
                </div>
            </div>
            <div class="flex items-center p-8 bg-white shadow rounded-lg">
                <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                    </svg>
                </div>
                <div>
                    <span class="inline-block text-2xl font-bold"><?= $taskDoneth["numberoftaskdone"] ?></span>
                    <span class="block text-xl text-gray-500 font-semibold"><?= $taskDoneth["name"] ?>
                    </span>
                    <span class="block text-gray-500">The project with the least amount of tasks</span>
                </div>
            </div>
            <div class="flex items-center p-8 bg-white shadow rounded-lg">
                <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <div>
                    <span class="block text-2xl font-bold"><?= $taskin["numberoftaskdone"] ?></span>
                    <span class="block text-gray-500"><?= $taskin["name"] ?></span>
                </div>
            </div>
        </section>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>