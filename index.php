<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Personal Web | Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
</head>

<body class="bg-blue-100 text-gray-800 font-sans shadow-2xs dark:bg-gray-900">
    <!-- Header -->
    <div class="shadow-xl">
        <header class="bg-cyan-600 text-white text-center p-6 text-2xl font-bold">
            Personal Web | Giani Azahra
        </header>
        <!-- Navigation -->
        <nav class="bg-gray-100 text-cyan-500 py-3 dark:bg-gray-800">
            <ul class="flex justify-center space-x-10 font-medium text-lg">
                <li><a href="index.php" class="hover:underline">Artikel</a></li>
                <li><a href="gallery.php" class="hover:underline">Gallery</a></li>
                <li><a href="about.php" class="hover:underline">About</a></li>
                <li><a href="contactform.php" class="hover:underline">Contact</a></li>
                <li><a href="admin/login.php" class="hover:underline">Login</a></li>
                <li>
                    <div class="flex">
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
    <!-- Pencarian -->
    <div class="pt-8 px-4">
        <div class="max-w-4xl mx-auto w-full">
            <form action="index.php" method="GET" class="w-full flex gap-4">
                <input type="text" name="cari" placeholder="Ketik judul artikel..."
                    class="flex-grow text-gray-900 bg-white border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-500 shadow" />
                <button type="submit"
                    class="bg-cyan-600 text-white px-6 py-2 rounded hover:bg-cyan-700 transition shadow">
                    Cari
                </button>
            </form>
        </div>
    </div>
    <!-- Main Content -->
    <main class="max-w-6xl mx-auto p-6 grid grid-cols-1 md:grid-cols-3 gap-6 mt-6 dark:bg-gray-900">
        <!-- Artikel Utama -->
        <section class="md:col-span-2 bg-white p-6 rounded shadow dark:bg-gray-700 dark:text-white">
            <h2 class="text-xl font-bold mb-4">Artikel Terbaru</h2>
            <div class="space-y-4">
                <?php
                if (isset($_GET['cari'])) {
                    $cari = $_GET['cari'];
                    $sql = "SELECT * FROM tbl_artikel WHERE nama_artikel LIKE '%$cari%' ORDER BY id_artikel DESC";
                } else {
                    $sql = "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC";
                }
                $query = mysqli_query($db, $sql);
                while ($data = mysqli_fetch_array($query)) {
                    echo "<div class='border-b pb-4'>";
                    echo "<h3 class='text-lg font-semibold text-cyan-700 dark:text-cyan-500'>" . htmlspecialchars($data['nama_artikel']) . "</h3>";
                    echo "<p>" . htmlspecialchars($data['isi_artikel']) . "</p>";
                    echo "</div>";
                }
                ?>
            </div>
        </section>
        <!-- Sidebar -->
        <aside class="bg-white p-6 rounded shadow dark:bg-gray-700">
            <h2 class="text-lg font-bold mb-4 dark:text-white">Daftar Artikel</h2>
            <ul class="space-y-2 list-disc list-inside text-gray-700 dark:text-white">
                <?php
                $querySidebar = mysqli_query($db, "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC");
                while ($dataSidebar = mysqli_fetch_array($querySidebar)) {
                    echo "<li>" . htmlspecialchars($dataSidebar['nama_artikel']) . "</li>";
                }
                ?>
            </ul><br>
            <hr>

            <!-- jumlah pengunjung -->
            <h2 class="text-lg font-bold pt-6 dark:text-white">Jumlah pengunjung</h2>
            <div class="flex flex-col md:flex-row gap-2">
                <a href='http://www.freevisitorcounters.com'>free visitor counters</a>
                <script type='text/javascript'
                    src='https://www.freevisitorcounters.com/auth.php?id=1f44708ea9f93ab9fce3ee5c39e3045cd7e0ac41'></script>
                <script type="text/javascript"
                    src="https://www.freevisitorcounters.com/en/home/counter/1357514/t/4"></script>
                <a href='http://www.freevisitorcounters.com'></a>
                <script type='text/javascript'
                    src='https://www.freevisitorcounters.com/auth.php?id=ed80a91527295ee3f3db7436074a7864f324d1c7'></script>
                <script type="text/javascript"
                    src="https://www.freevisitorcounters.com/en/home/counter/1357515/t/0"></script>
            </div>
    </main>
    <!-- Komentar -->
    <main class="max-w-[70rem] mx-auto p-6 bg-white rounded shadow mt-8 dark:bg-gray-700">
        <div class="komentar p-4 bg-gray-100 rounded shadow dark:bg-gray-700">
            <?php
            include "koneksi.php";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nama = mysqli_real_escape_string($db, $_POST['nama']);
                $email = mysqli_real_escape_string($db, $_POST['email']);
                $isi_komentar = mysqli_real_escape_string($db, $_POST['isi_komentar']);
                $sql = "INSERT INTO tbl_komentar (nama, email, komentar) 
                    VALUES ('$nama', '$email', '$isi_komentar')";
                if (mysqli_query($db, $sql)) {
                    echo "<script>alert('Komentar berhasil dikirim!'); window.location='index.php';</script>";
                } else {
                    echo "<script>alert('Gagal mengirim komentar: " . mysqli_error($db) . "');</script>";
                }
            }
            echo '<h3 class="text-lg font-semibold mb-4 text-cyan-700 dark:text-cyan-500">Semua Komentar</h3>';
            $result = mysqli_query($db, "SELECT * FROM tbl_komentar ORDER BY tgl DESC");
            while ($row = mysqli_fetch_assoc($result)) {
                $tgl = date("d M Y, H:i", strtotime($row['tgl']));
                echo "<div class='mb-4 p-3 bg-white rounded shadow'>";
                echo "<p class='font-semibold'>" . htmlspecialchars($row['nama']) . " <span class='text-sm text-gray-500'>($tgl)</span></p>";
                echo "<p>" . nl2br(htmlspecialchars($row['komentar'])) . "</p>";
                echo "</div>";
            }
            ?>
            <h3 class="text-lg font-semibold mb-2 text-cyan-700 mt-8 dark:text-cyan-500">Tinggalkan Komentar</h3>
            <form method="POST" action="" class="space-y-3">
                <input type="text" name="nama" placeholder="Nama"
                    class="w-full border px-3 py-2 rounded hover:scale-105 transition-all duration-300" required>
                <input type="email" name="email" placeholder="Email"
                    class="w-full border px-3 py-2 rounded hover:scale-105 transition-all duration-300" required>
                <textarea name="isi_komentar" rows="3" placeholder="Tulis komentar..."
                    class="w-full border px-3 py-2 rounded hover:scale-105 transition-all duration-300"
                    required></textarea>
                <button type="submit" class="bg-cyan-600 text-white px-4 py-2 rounded hover:bg-cyan-700">Kirim</button>
            </form>
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