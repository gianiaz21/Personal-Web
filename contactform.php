<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Form | Personal Web</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
</head>

<body class="bg-gray-100 text-white font-sans dark:bg-gray-900">
    <!-- Header -->
    <div class="shadow-xl">
        <header class="bg-cyan-600 text-white text-center p-6 text-2xl font-bold">
            Contact Form | Giani Azahra
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

    <main class="max-w-3xl mx-auto p-6 bg-white rounded shadow mt-8 dark:bg-gray-700">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include "koneksi.php";

            $nama = mysqli_real_escape_string($db, $_POST['nama']);
            $email = mysqli_real_escape_string($db, $_POST['email']);
            $hp = mysqli_real_escape_string($db, $_POST['hp']);
            $pesan = mysqli_real_escape_string($db, $_POST['pesan']);

            $sql = "INSERT INTO tbl_contactform (nama_lengkap, email, no_hp, pesan) 
            VALUES ('$nama', '$email', '$hp', '$pesan')";

            if (mysqli_query($db, $sql)) {
                echo "<script>alert('Pesan berhasil dikirim!'); window.location='contactform.php';</script>";
            } else {
                echo "<script>alert('Gagal menyimpan pesan: " . mysqli_error($db) . "');</script>";
            }
        }
        ?>

        <div class="p-8 text-gray-900">
            <h1 class="text-3xl font-bold text-cyan-600 text-center mb-6 font-josefin sans dark:text-cyan-500">Contact
                Form</h1>
            <form method="post" class="space-y-4">
                <input type="text" name="nama" placeholder="Nama Lengkap" required
                    class="w-full p-3 rounded-lg border border-gray-300 shadow-xl transform hover:scale-105 transition-all duration-300">

                <input type="email" name="email" placeholder="Email" required
                    class="w-full p-3 rounded-lg border border-gray-300 shadow-xl transform hover:scale-105 transition-all duration-300">

                <input type="text" name="hp" placeholder="Nomor HP" required
                    class="w-full p-3 rounded-lg border border-gray-300 shadow-xl transform hover:scale-105 transition-all duration-300">

                <textarea name="pesan" rows="3" placeholder="Isi Pesan"
                    class="w-full p-3 rounded-lg border border-gray-300 shadow-xl transform hover:scale-105 transition-all duration-300"></textarea>

                <div class="flex justify-end space-x-4">
                    <button type="reset"
                        class="px-6 py-2 bg-gray-400 text-white rounded-lg shadow-md hover:bg-gray-500">Batal</button>
                    <button type="submit"
                        class="px-6 py-2 bg-cyan-600 text-white rounded-lg shadow-md hover:bg-cyan-700">Kirim</button>
                </div>
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