<?php
include('../koneksi.php');
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
    exit;
}
$id = $_GET['id_artikel'];
$sql = "SELECT * FROM tbl_artikel WHERE id_artikel = '$id'";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Artikel</title>
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
        <h1 class="text-3xl font-bold">Edit Artikel</h1>
    </header>
    <div class="flex max-w-7xl mx-auto mt-8 px-4">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-white rounded shadow p-4 dark:bg-gray-700">
            <h2 class="text-xl font-semibold text-cyan-700 mb-4 text-center dark:text-cyan-500">MENU</h2>
            <ul class="space-y-2 text-gray-700 dark:text-white">
                <li><a href="beranda_admin.php" class="block hover:text-cyan-600 dark:hover:text-cyan-300">Beranda</a>
                </li>
                <li><a href="data_artikel.php" class="block font-semibold text-cyan-700 dark:text-cyan-400">Kelola
                        Artikel</a></li>
                <li><a href="data_gallery.php" class="block hover:text-cyan-600 dark:hover:text-cyan-300">Kelola
                        Gallery</a></li>
                <li><a href="about.php" class="block hover:text-cyan-600 dark:hover:text-cyan-300">About</a></li>
                <li><a href="data_contactform.php" class="block hover:text-cyan-600 dark:hover:text-cyan-300">Contact
                        Form</a></li>
                <li><a href="data_komentar.php" class="block hover:text-cyan-600 dark:hover:text-cyan-300">Kelola
                        komentar</a></li>
                <li>
                    <a href="logout.php" onclick="return confirm('Apakah anda yakin
ingin keluar?');" class="block text-red-600 hover:underline font-medium dark:text-red-300">Logout</a>
                </li><br>
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
            <form action="proses_edit_artikel.php" method="post" class="space-y6">
                <input type="hidden" name="id_artikel" value="<?php echo
                    $data['id_artikel']; ?>">
                <div>
                    <label for="nama_artikel" class="block text-sm font-medium text-gray-700 mb-1 dark:text-white">Judul
                        Artikel</label>
                    <input type="text" id="nama_artikel" name="nama_artikel" required
                        value="<?php echo htmlspecialchars($data['nama_artikel']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring
focus:border-cyan-500">
                </div>
                <div>
                    <label for="isi_artikel" class="block text-sm font-medium text-gray-700 mb-1 dark:text-white">Isi
                        Artikel</label>
                    <textarea id="isi_artikel" name="isi_artikel" rows="5" required class="w-full p-2 border rounded focus:outline-none focus:ring
focus:border-cyan-500"><?php echo htmlspecialchars($data['isi_artikel']);
?></textarea>
                    <div>
                        <div class="flex justify-end space-x-4">
                            <button type="submit"
                                class="bg-cyan-700 text-white px-4 py-2 rounded hover:bg-cyan-800 transition">Update</button>
                            <a href="data_artikel.php"
                                class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400 transition">Batal</a>
                        </div>
            </form>
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