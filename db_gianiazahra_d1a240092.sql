-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2025 at 09:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gianiazahra_d1a240092`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id_about` int(2) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id_about`, `about`) VALUES
(2, 'Halo, perkenalkan nama saya Giani Azahra. Bisa juga dipanggil Gia. Saya lulusan dari MAN 1 Subang pada tahun 2024. Saat ini saya sedang berkuliah di Universitas Subang Program Studi Sistem Informasi semester dua. Saya adalah seseorang yang senang belajar hal-hal baru. Seperti halnya saya masuk prodi sistem informasi. Awalnya tidak pernah terpikirkan oleh saya untuk masuk ke program studi ini dan karena masuk prodi ini saya banyak belajar hal-hal baru. Walaupun ini bukan prodi pilihan utama saya, Tapi ternyata, semakin dijalani, saya malah mulai suka. Ya, walaupun suka bikin pusing, bikin begadang, dan bikin nanya ke diri sendiri berkali-kali, tapi ada kepuasan tersendiri tiap kali berhasil nyelesaiin tugas atau ngerti satu hal yang dulu rasanya mustahil dimengerti. Di luar rutinitas, saya suka mendengarkan musik dan menikmati waktu-waktu tenang. Jujur, saya orangnya tidak suka keramaian. oleh karena itu, untuk bisa menikmati waktu-waktu tenang, saya cukup diam di kamar sendirian, kadang sambil menonton film, scroll tiktok, ataupun tidur. Dengan hal-hal sederhana seperti itu, bisa membuat saya sangat senang. Intinya itu saja sudut kecil dari duniaku, terima kasih sudah mampir (●\'◡\'●).');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(5) NOT NULL,
  `nama_artikel` text NOT NULL,
  `isi_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `nama_artikel`, `isi_artikel`) VALUES
(6, 'Manfaat Teknologi dalam Kehidupan Sehari-hari', 'Teknologi telah menjadi bagian penting dalam kehidupan manusia modern. Mulai dari smartphone, internet, hingga perangkat rumah pintar, semuanya memudahkan aktivitas harian. Kita bisa belajar online, bekerja dari rumah, hingga belanja tanpa keluar rumah. Teknologi juga membantu komunikasi menjadi lebih cepat dan efisien. Namun, penting juga untuk menggunakan teknologi secara bijak agar tidak berdampak negatif pada kesehatan dan hubungan sosial. Dengan pemanfaatan yang tepat, teknologi bisa menjadi alat bantu yang sangat bermanfaat.'),
(7, 'Peran Media Massa dalam Pemberantasan Pungutan Liar', 'Pungutan liar (pungli) memang berkelindan dengan korupsi. Mereka serupa tapi tak sama, ada tapi tak kasat mata, merajalela tapi tetap dimaklumkan, seolah hal tersebut sudah biasa terjadi. \r\n\r\nSelama masyarakat tidak keberatan ‘menghibahkan’ sebagian kecil hartanya bagi para pemungut, masyarakat akan tetap diam. Tentu saja pemakluman yang terus menerus ini berimbas pada kepercayaan dan kualitas terhadap institusi terkait.\r\n\r\nBeda cerita ketika pungutan itu terjadi di sebuah institusi yang lebih besar dari segi fungsi dan kedudukannya terhadap negara. Secara otomatis hal ini akan menyedot perhatian yang lebih besar pula. Terlebih jika institusi tersebut ‘tertangkap basah’ oleh presiden, seperti yang beberapa waktu lalu terjadi di Kementerian Perhubungan. Jumlahnya pun fantastis, hingga mencapai milyaran rupiah.\r\n\r\nBelum lagi deretan kasus-kasus pungli lainnya baik yang masih tersembunyi ataupun yang sudah terungkap. Pungli dapat dikatakan menjadi sesuatu yang lumrah demi mendapatkan pelayanan terbaik.  Tidak dapat dipungkiri, pungli disini juga melibatkan struktur kedudukan maupun institusi, dari tingkat rendah sampai ke tingkat tinggi.\r\n\r\nMiris ketika fakta menunjukan bahwa pungli bahkan telah menggerogoti badan sekelas kementerian. Artinya suprastruktur dan infrastruktur di Indonesia belum berjalan dengan baik, yang kemudian bersinggungan dengan stabilitas negara yang belum memadai. \r\n\r\nSensor media massa dan masyarakat pun seperti baru diaktifkan, karena mendadak menyorot dan memberitakan kasus pungli dalam kuantitas dan ruang yang lebih besar. Pungli menjadi isu yang bertransformasi menjadi opini publik dan menjadi trending topic untuk beberapa waktu.\r\n\r\nPermasalahan dan penyelesaiannya baru akan dipikirkan bersama-sama setelah dampak pungli dirasa akan mendegradasi bangsa dari berbagai macam aspek seperti mental, pendidikan, dan ekonomi. Ketika isu tersebut redup, bukan tidak mungkin pengawasan terhadap pungli menjadi menipis, bahkan hilang sama sekali.\r\n\r\nBill Kovach dan Tom Rosenstiel pernah mengemukakan sembilan elemen jurnalisme. Satu diantaranya adalah jurnalisme sebagai pelayan masyarakat dan pemantau terhadap kekuasaan, atau lebih sering dikenal dengan istilah watchdog. Di sini jurnalisme yang diaplikasikan dalam media massa diharapkan dapat mengimplementasikan secara nyata perihal pengawasan dan pengawalan terhadap pemberantasan pungli. \r\n\r\nMedia massa perlu membungkus isu ini menjadi hal yang krusial dan perlu dicermati agar masyarakat hingga jajaran pemerintahan semakin sadar akan dampak negatif terhadap pungli. Jaksa Agung M. Prasetyo mengemukakan dampak negatif tersebut. Diantaranya adalah pungli akan memberatkan masyarakat, iklim investasi akan terpengaruh dalam dunia usaha, dan pungli juga akan berpengaruh pada merosotnya wibawa hukum. \r\n\r\nMedia massa dikenal sebagai pemberi informasi terhadap masyarakat. Oleh sebab itu, masyarakat tentu memiliki kepercayaan khusus kepada media massa demi terciptanya keadilan dan kebenaran. Tentunya peran masyarakat juga dibutuhkan demi memperkuat pengawasan, karena biasanya masyarakat yang mengalami langsung tindakan pungli tersebut. '),
(8, 'Pentingnya Pola Tidur yang Sehat', 'Tidur adalah kebutuhan manusia yang sangat penting untuk menjaga kesehatan fisik dan mental, karena saat tidur organ tubuh kita juga beristirahat. Kalau kamu tidak tidur, pasti kamu akan merasa kelelahan dan bisa menyebabkan kematian lho. \r\n\r\nMemiliki waktu tidur yang cukup dan berkualitas adalah kunci untuk merasa segar dan bugar sepanjang hari. Namun, seringkali kita mengabaikan pentingnya waktu tidur yang cukup, dan hal ini dapat berdampak negatif bagi kesehatan kita secara keseluruhan. \r\n\r\n \r\n\r\nBerapa Lama Waktu Ideal Tidur?\r\n\r\nMenurut National Sleep Foundation, waktu tidur ideal untuk orang dewasa adalah antara 7-9 jam per malam. Jika kurang dari jam tersebut, mungkin tidak akan berdampak dalam jangka pendek. Namun, jika dilakukan berulang, akan berdampak di jangka panjang.\r\n\r\nPenting untuk diingat bahwa kebutuhan tidur setiap individu dapat bervariasi, tergantung pada faktor-faktor seperti usia, tingkat aktivitas fisik, kesehatan secara keseluruhan, dan faktor genetik. Waktu ideal tersebut bisa dijadikan landasan untuk memulai hidup sehat.\r\n\r\n \r\n\r\nPola Tidur yang Sehat\r\n\r\nSelain durasi tidur yang cukup, penting juga untuk menjaga pola tidur yang sehat. Kita juga bisa menciptakan lingkungan tidur yang nyaman dan tenang setiap malamnya. \r\n\r\nKamu harus bisa menghindari kebiasaan yang dapat mengganggu tidur, seperti mengkonsumsi kafein atau alkohol sebelum tidur, serta menggunakan gadget elektronik di tempat tidur.\r\n\r\n \r\n\r\nPentingnya Waktu Tidur yang Cukup\r\n\r\nTidur yang cukup memiliki banyak manfaat bagi kesehatan kita. Ini tidak hanya membantu tubuh untuk pulih dan memperbaiki diri setelah seharian aktivitas, tetapi juga berdampak positif pada kinerja otak, mood, dan daya tahan tubuh terhadap penyakit. \r\n\r\nSelain itu, tidur yang cukup juga dapat mengurangi risiko terjadinya berbagai masalah kesehatan kronis, seperti obesitas, diabetes, penyakit jantung, dan depresi.\r\n\r\n \r\n\r\nTips untuk Memperbaiki Kualitas Tidur\r\n\r\nJika kamu mengalami kesulitan tidur atau ingin meningkatkan kualitas tidur kamu, ada beberapa tips yang bisa kamu coba:\r\n\r\nTetapkan jadwal tidur yang konsisten, termasuk pada akhir pekan.\r\nBuat lingkungan tidur yang nyaman dengan suhu yang sejuk, pencahayaan yang redup, dan tempat tidur yang nyaman.\r\nHindari makan makanan berat atau minuman berkafein beberapa jam sebelum tidur.\r\nLatihan relaksasi seperti meditasi atau pernapasan dalam untuk membantu menenangkan pikiran sebelum tidur.\r\nBatasi penggunaan gadget elektronik di tempat tidur, dan hindari menonton televisi atau menggunakan komputer sebelum tidur.\r\n \r\n\r\nTidur yang cukup dan berkualitas sangat penting untuk menjaga kesehatan kita secara keseluruhan.  Menjaga pola tidur yang sehat dan memprioritaskan waktu tidur yang cukup setiap malam, kita dapat merasakan manfaatnya dalam meningkatkan kualitas hidup dan kesehatan jangka panjang kita. \r\n\r\nJadi, mari kita berkomitmen untuk memberikan prioritas pada waktu tidur yang cukup dan berkualitas setiap malam demi kesehatan dan kesejahteraan kita yang lebih baik.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactform`
--

CREATE TABLE `tbl_contactform` (
  `id_contactform` int(11) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `pesan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contactform`
--

INSERT INTO `tbl_contactform` (`id_contactform`, `nama_lengkap`, `email`, `no_hp`, `pesan`) VALUES
(1, 'Giani Azahra', 'gianiazahra@gmail.com', 2147483647, 'haiiii'),
(2, 'sintia herlina', 'sintia123@gmail.com', 2147483647, 'Web-nya sudah bagus dan informatif. Saran saya mungkin bisa ditambahkan fitur chatbot atau ganti font biar lebih enak dibaca. Semangat terus!\r\n'),
(3, 'novi', 'apaaja@gmail.com', 2147483647, 'halooo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(5) NOT NULL,
  `judul` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `judul`, `foto`) VALUES
(8, 'Tahun 2014', 'WhatsApp Image 2025-01-22 at 10.29.06_6e7a1462.j copypg.jpg'),
(9, 'Tahun 2014', 'WhatsApp Image 2025-01-22 at 10.29.06_f9e4d167.copy jpg.jpg'),
(18, '2014', 'WhatsApp Image 2025-01-22 at 10.29.07_78a76e74.jpg'),
(19, '25 Mei 2024', 'foto 2 copy.jpg'),
(20, '19 Maret 2025', 'galeri php 1.jpg'),
(21, '29 Maret 2025', 'galeri php 2.jpg'),
(22, '3 Juni 2025', 'galeri php 3.jpg'),
(23, '30 April 2025', 'galeri php 4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` int(5) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `komentar` varchar(500) DEFAULT NULL,
  `tgl` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `nama`, `email`, `komentar`, `tgl`) VALUES
(9, 'Dina agustina', 'Dinaaa78@gmail.com', 'wahh keren keren banget artikelnya', '2025-06-27 23:33:39'),
(13, 'sintia herlina', 'sintia123@gmail.com', 'semangatt!!', '2025-06-30 13:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`) VALUES
('admin', 'admin'),
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_contactform`
--
ALTER TABLE `tbl_contactform`
  ADD PRIMARY KEY (`id_contactform`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id_about` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_contactform`
--
ALTER TABLE `tbl_contactform`
  MODIFY `id_contactform` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
