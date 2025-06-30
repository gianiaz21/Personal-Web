<?php
session_start();
if (isset($_SESSION['username'])) {
    header('location:beranda_admin.php');
}
require_once("../koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Administrator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
</head>

<body class="bg-cyan-600 min-h-screen flex
items-center justify-center dark:bg-cyan-800">
    <div class="flex absolute top-4 right-4 flex items-center space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path
                d="M12 2.25a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-1.5 0V3a.75.75 0 0 1 .75-.75ZM7.5 12a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM18.894 6.166a.75.75 0 0 0-1.06-1.06l-1.591 1.59a.75.75 0 1 0 1.06 1.061l1.591-1.59ZM21.75 12a.75.75 0 0 1-.75.75h-2.25a.75.75 0 0 1 0-1.5H21a.75.75 0 0 1 .75.75ZM17.834 18.894a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 1 0-1.061 1.06l1.59 1.591ZM12 18a.75.75 0 0 1 .75.75V21a.75.75 0 0 1-1.5 0v-2.25A.75.75 0 0 1 12 18ZM7.758 17.303a.75.75 0 0 0-1.061-1.06l-1.591 1.59a.75.75 0 0 0 1.06 1.061l1.591-1.59ZM6 12a.75.75 0 0 1-.75.75H3a.75.75 0 0 1 0-1.5h2.25A.75.75 0 0 1 6 12ZM6.697 7.757a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 0 0-1.061 1.06l1.59 1.591Z" />
        </svg>
        <button id="dark-toggle" class="w-10 h-5 p-0.5 rounded-full bg-gray-400">
            <div class="w-4 h-4 rounded-full bg-white transition-all dark:translate-x-5"></div>
        </button>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd"
                d="M9.528 1.718a.75.75 0 0 1 .162.819A8.97 8.97 0 0 0 9 6a9 9 0 0 0 9 9 8.97 8.97 0 0 0 3.463-.69.75.75 0 0 1 .981.98 10.503 10.503 0 0 1-9.694 6.46c-5.799 0-10.5-4.7-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 0 1 .818.162Z"
                clip-rule="evenodd" />
        </svg>
    </div>
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md dark:bg-gray-700">
        <h2 class="text-2xl font-bold text-center text-cyan-700 mb-6 dark:text-cyan-500">Login
            Administrator</h2>
        <form action="cek_login.php" method="post" class="space-y-5">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 dark:text-white">Username</label>
                <input type="text" name="username" id="username" required class="mt-1 block w-full border-gray-300 rounded-md shadow-xl
focus:ring-cyan-500 focus:border-cyan-500 pl-2">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-white">Password</label>
                <input type="password" name="password" id="password" required class="mt-1 block w-full border-gray-300 rounded-md shadow-xl
focus:ring-cyan-500 focus:border-cyan-500 pl-2">
            </div>
            <div class="flex justify-between items-center">
                <input type="submit" name="login" value="Login" class="bg-cyan-700 text-white px-4 py-2 rounded hover:bg-cyan-800
cursor-pointer">
                <input type="reset" name="cancel" value="Cancel"
                    class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400 cursor-pointer">
            </div>
        </form>
        <div class="text-center text-sm text-gray-600 mt-6 dark:text-white">
            &copy; <?php echo date('Y'); ?> - Giani Azahra
        </div>
    </div>
</body>
<!-- script tombol dark mode -->
<script>
    function toggleDarkTheme() {
        if (localStorage.getItem("theme") === "dark") {
            localStorage.setItem("theme", "light");
            document.documentElement.classList.remove("dark");
        } else {
            localStorage.setItem("theme", "dark");
            document.documentElement.classList.add("dark");
        }
    }
    document.getElementById("dark-toggle").addEventListener("click", toggleDarkTheme);

    if (localStorage.getItem("theme") === "dark") {
        document.documentElement.classList.add("dark");
    }
</script>

</html>