<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About | Personal Web</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
</head>

<body class="bg-gray-100 text-gray-800 font-sans dark:bg-gray-900">
    <!-- Header -->
    <div class="shadow-xl">
        <header class="bg-cyan-600 text-white text-center p-6 text-2xl font-bold">
            About Me | Giani Azahra
        </header>
        <!-- Navigation -->
        <nav class="bg-gray-100 text-cyan-500 py-3 dark:bg-gray-800">
            <ul class="flex justify-center space-x-10 font-medium text-lg">
                <li><a href="index.php" class="hover:underline">Artikel</a></li>
                <li><a href="gallery.php" class="hover:underline">Gallery</a></li>
                <li><a href="about.php" class="hover:underline">About</a></li>
                <li><a href="contactform.php" class="hover:underline">Contact</a></li>
                <li><a href="admin/login.php" class="hover:underline">Login</a></li>
                <li class="ml-auto">
                    <div class="flex ">
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
                </li>
            </ul>
        </nav>
    </div>
    <!-- About Content -->
    <main class="max-w-3xl mx-auto p-6 bg-white rounded shadow mt-8 dark:bg-gray-700">
        <h2 class="text-xl font-bold mb-4 text-cyan-700 dark:text-cyan-500">Tentang Saya</h2>
        <div class="space-y-6">
            <?php
            $sql = "SELECT * FROM tbl_about ORDER BY id_about DESC";
            $query = mysqli_query($db, $sql);
            while ($data = mysqli_fetch_array($query)) {
                echo "<div>";
                echo "<p class='text-gray-700 dark:text-white'>" . htmlspecialchars($data['about'])
                    . "</p>";
                echo "</div>";
            }
            ?>
        </div>

        <div class="flex items-center pt-12">
            <!-- Youtube -->
            <p class="pr-4 font-bold dark:text-white">Follow me on:</p>
            <a href="https://youtube.com/@gianiazahra1957?si=WBEklmx6V99vQNqJ" target="_blank"
                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border bg-gray-900 text-slate-100 hover:bg-white hover:text-black">
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <title>YouTube</title>
                    <path
                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                </svg>
                </svg>
            </a>

            <!-- Instagram -->

            <a href="https://instagram.com/giazhraa" target="_blank"
                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border bg-gray-900 text-slate-100 hover:bg-white hover:text-black">
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <title>Instagram</title>
                    <path
                        d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077" />
                </svg></a>

            <!-- X -->
            <a href="https://x.com/ruellazhara" target="_blank"
                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border bg-gray-900 text-slate-100 hover:bg-white hover:text-black">
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <title>X</title>
                    <path
                        d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z" />
                </svg></a>

            <!-- Tiktok -->
            <a href="https://tiktok.com/giiiiiiaz" target="_blank"
                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border bg-gray-900 text-slate-100 hover:bg-white hover:text-black">
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <title>TikTok</title>
                    <path
                        d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                </svg></a>

            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/in/giani-azahra-20823936a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                target="_blank"
                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border bg-gray-900 text-slate-100 hover:bg-white hover:text-black">
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <title>LinkedIn</title>
                    <path
                        d="M22.23 0H1.77C.79 0 0 .79 0 1.77v20.46c0 .98.79 1.77 1.77 1.77h20.46c.98 0 1.77-.79 1.77-1.77V1.77C24 .79 23.21 0 22.23 0zM7.08 20H3.66V9h3.42v11zm-1.71-12.47c-1.1 0-1.98-.88-1.98-1.98s.88-1.98 1.98-1.98 1.98.88 1.98 1.98-.88 1.98-1.98 1.98zm14.03 12.47h-3.42v-5.77c0-1.37-.49-2.31-1.72-2.31-.94 0-1.5.63-1.74 1.24-.09.22-.12.53-.12.83v6.01h-3.42V9h3.42v1.55c.45-.69 1.27-1.55 2.77-1.55 2.04 0 3.55 1.33 3.55 4.19v6.81z" />
                </svg></a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-cyan-600 text-white text-center py-4 mt-10">
        &copy; <?php echo date('Y'); ?> | Created by Giani Azahra
    </footer>
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
</body>

</html>