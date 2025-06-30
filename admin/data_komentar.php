<?php
include('../koneksi.php');
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Komentar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
</head>

<body class="bg-gray-100 min-h-screen dark:bg-gray-900">
    <!-- Header -->
    <header class="bg-cyan-600 text-white text-center py-6 shadow">
        <h1 class="text-3xl font-bold">Kelola Komentar</h1>
    </header>
    <div class="flex max-w-7xl mx-auto mt-8 px-4">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-white rounded shadow p-4 dark:bg-gray-700">
            <h2 class="text-xl font-semibold text-cyan-700 mb-4 text-center dark:text-cyan-500">MENU</h2>
            <ul class="space-y-2 text-gray-700 dark:text-white">
                <li><a href="beranda_admin.php" class="block hover:text-cyan-600 dark:hover:text-cyan-300">Beranda</a>
                </li>
                <li><a href="data_artikel.php" class="block hover:text-cyan-600 dark:hover:text-cyan-300">Kelola
                        Artikel</a></li>
                <li><a href="data_gallery.php" class="block hover:text-cyan-600 dark:hover:text-cyan-300">Kelola
                        Gallery</a></li>
                <li><a href="about.php" class="block hover:text-cyan-600 dark:hover:text-cyan-300">About</a></li>
                <li><a href="data_contactform.php" class="block hover:text-cyan-600 dark:hover:text-cyan-300">Contact
                        Form</a></li>
                <li><a href="data_komentar.php" class="block font-semibold text-cyan-700 dark:text-cyan-400">Kelola
                        komentar</a></li>
                <li>
                    <a href="logout.php" onclick="return confirm('Apakah anda yakin
ingin keluar?');" class="block text-red-600 hover:underline font-medium dark:text-red-300">Logout</a>
                </li>
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
        </aside>
        <!-- Main Content -->
        <main class="w-3/4 bg-white rounded shadow p-6 ml-6 dark:bg-gray-700">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold text-gray-800 dark:text-white">Daftar Komentar</h2>
            </div>
            <table class="min-w-full table-auto border border-gray-300 text-sm break-words">
                <thead class="bg-cyan-600 text-white">
                    <tr>
                        <th class="p-3 border">No</th>
                        <th class="p-3 border">Nama Pengirim</th>
                        <th class="p-3 border">Email</th>
                        <th class="p-3 border w-1/2">Isi Komentar</th>
                        <th class="p-3 border">Tanggal</th>
                        <th class="p-3 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM tbl_komentar";
                    $query = mysqli_query($db, $sql);
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)) {
                        echo "<tr class='even:bg-gray-50 dark:bg-gray-700 dark:text-white'>";
                        echo "<td class='border p-2 text-center'>" . $no++ . "</td>";
                        echo "<td class='border p-2'>" .
                            htmlspecialchars($data['nama']) . "</td>";
                        echo "<td class='border p-2'>" .
                            htmlspecialchars($data['email']) . "</td>";
                        echo "<td class='border p-2'>" .
                            htmlspecialchars($data['komentar']) . "</td>";
                        echo "<td class='border p-2 w-[300px] break-words'>" .
                            htmlspecialchars($data['tgl']) . "</td>";
                        echo "<td class='border p-2 text-center space-x-2'>
                        <a href='delete_komentar.php?id_komentar={$data['id_komentar']}'onclick='return confirm(\"Yakin ingin menghapus?\")' class='text-red-600 hover:underline dark:text-red-300'>Hapus</a>
                        </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </main>
    </div>
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