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
        <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Ajouter une tâche</h1>
        <form action="<?= BASE_URL ?>/task/add_Task?idproject<?= $project['idproject'] ?>" method="post" class="space-y-6">
            <div>
                <label for="task-title" class="block mb-2 text-sm font-medium text-gray-800">Titre de la tâche</label>
                <input type="text" name="task-title" id="task-title" placeholder="Titre de la tâche"
                    class="w-full p-2.5 border rounded-lg focus:ring-blue-500 focus:border-blue-500 text-gray-800">
            </div>
            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-800">Description de la tâche</label>
                <textarea name="task-description" rows="4"
                    class="w-full p-2.5 border rounded-lg focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                    placeholder="Écrivez la description de votre tâche ici..."></textarea>
            </div>
            <div>
                <label for="status" class="block mb-2 text-sm font-medium text-gray-800">Sélectionnez une option</label>
                <select name="status" id="status"
                    class="w-full p-2.5 border rounded-lg focus:ring-blue-500 focus:border-blue-500 text-gray-800">
                    <option value="to do">À faire</option>
                    <option value="in progress">En cours</option>
                    <option value="done">Terminé</option>
                </select>
            </div>
            <div>
                <label for="date" class="block mb-2 text-sm font-medium text-gray-800"></label>
                <div class="relative">
                    <input name="date" type="date"
                        class="w-full p-2.5 border rounded-lg focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                        placeholder="Sélectionnez la date">
                </div>
            </div>
            <div class="flex justify-between gap-4 mt-6">
                <button name="submit"
                    class="w-full text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Ajouter
                    la tâche</button>
                <a href="<?= BASE_URL ?>/task/task/home"
                    class="w-full text-white bg-gray-600 hover:bg-gray-700 font-medium rounded-lg text-sm md:px-5 px-2 md:py-2.5 p-1 text-center">Annuler</a>
            </div>
        </form>
    </div>
</body>

</html>