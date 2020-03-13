-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 09:14 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `piora`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_lengkap`, `username`, `password`, `email`) VALUES
(2, 'ivan ', 'ivan', '202cb962ac59075b964b07152d234b70', 'ivan@piora.co.id'),
(23, 'Aan sanova', 'Aan', '202cb962ac59075b964b07152d234b70', 'aansanova.14116175@student.itera.ac.id'),
(24, 'admin', 'admin', '202cb962ac59075b964b07152d234b70', 'admin@gmail.com'),
(25, 'naufal h', 'naufal', '81dc9bdb52d04dc20036dbd8313ed055', 'naufal@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `judul` text NOT NULL,
  `body` text NOT NULL,
  `kategori` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_admin`, `judul`, `body`, `kategori`, `gambar`, `slug`, `create_at`) VALUES
(5, 1, '6 Kulit Buah dan Sayuran Ini Tinggi Khasiat, Jangan Dibuang!', 'Beberapa kulit buah dan sayuran yang tinggi manfaat kesehatan\r\n\r\nDilansir dari Mirror, pakar kesehatan menyarankan kita untuk tidak sembarangan mengupas atau membuang kulit dari beberapa sayuran atau buah-buahan jika ingin mendapatkan manfaat kesehatannya dengan maksimal.\r\n\r\nBerikut adalah buah-buahan dan sayuran tersebut.\r\n\r\n    Buah jeruk\r\n\r\nKebanyakan orang akan langsung membuang kulit jeruk dan memakan daging buahnya saja, bukan? Padahal, menurut sebuah penelitian yang dipublikasikan hasilnya dalam Journal of Agriculture and Food Chemistry, kulit jeruk memiliki kandungan antioksidan berjenis flavonoid yang sangat tinggi. Kandungan ini bisa membantu menurunkan kadar kolesterol jahat dan menjaga kadar kolesterol baik di dalam darah. Selain itu, keberadaan antioksidan ini juga bisa melawan paparan buruk radikal bebas yang bisa menyebabkan penyakit.\r\n\r\nPenelitian ini juga menyebut makan kulit jeruk bisa memberikan manfaat 20 kali lebih besar dibandingkan dengan makan jus jeruk. Sebagai informasi, proses pengolahan buah menjadi jeruk memang akan menghilangkan atau merusak kadar seratnya. Jika kita masih belum terbiasa mengonsumsi kulit jeruk, setidaknya kita memakan daging buahnya tanpa menghilangkan serabutnya.\r\n\r\n    Bawang putih\r\n\r\nSebelum mengolah bawang putih menjadi bumbu makanan, kebanyakan orang akan mengupas kulitnya yang memang terlihat kasar. Masalahnya adalah kulit bawang putih ternyata tinggi kandungan antioksidan yang tentu sayang untuk dibuang begitu saja.\r\n\r\nSebuah penelitian yang dilakukan di Wakunaga Pharmaceutical, Jepang membuktikan bahwa kulit bawang putih memiliki kandungan antioksidan berjenis fenilpropanoid yang bisa memberikan perlindungan bagi jantung dan mencegah penuaan dini.\r\n\r\n    Buah pisang\r\n\r\nSebuah penelitian yang dilakukan para ahli dari Chung Shan Medical University, Taiwan membuktikan bahwa kulit pisang ternyata tinggi manfaat kesehatan lho. Dalam penelitian ini, dihasilkan fakta bahwa ekstrak kulit pisang bisa mengatasi depresi dan membantu produksi hormon yang bisa mengatasi stres. Hal ini bisa memberikan pengaruh besar bagi tekanan darah tubuh.\r\n\r\nDi dalam kulit pisang ternyata juga terdapat kandungan lutein yang bisa menyehatkan retina. Selain itu, kandungan antioksidan seperti karotenoid bisa menurunkan risiko terkena katarak, salah satu masalah kesehatan mata yang banyak menyerang masyarakat Indonesia.\r\n\r\nPenelitian ini juga mengungkap fakta bahwa minum air rebusan daun pisang yang diolah selama 10 menit atau menjadikan kulit pisang sebagai campuran jus buah pisang bisa memberikan banyak manfaat kesehatan.\r\n\r\n    Buah nanas\r\n\r\nBuah yang memiliki sensasi rasa manis, asam, dan menyegarkan ini ternyata juga memiliki kulit yang tinggi nutrisi. Sebagai contoh, kita bisa mendapatkan enzim bromelain, vitamin C, dan serat di dalamnya. Mengonsumsi kulit nanas bisa membantu mengatasi gangguan pencernaan dan masalah perut kembung.\r\n\r\nSelain itu, enzim bromelain bisa membantu tubuh mencerna protein dan bersifat anti peradangan sehingga akan membantu tubuh mengatasi masalah demam, asam urat, dan radang sendi.\r\n\r\n    Buah semangka\r\n\r\nKulit buah semangka ternyata tinggi kandungan asam amino berjenis citrulline yang bisa membantu melebarkan pembuluh darah. Hal ini bisa membantu menurunkan tekanan darah sekaligus memperlancar sirkulasi darah. Kondisi ini tentu akan membuat jantung dan pembuluh darah menjadi semakin sehat.\r\n\r\n    Buah kiwi\r\n\r\nKulit buah kiwi tinggi kandungan flavonoid yang bisa mencegah peradangan, alergi, dan kanker. Selain itu, kandungan antioksidannya juga akan mencegah paparan bakteri penyebab datangnya gangguan pencernaan.\r\n', 'Herbal', 'buah.png', '6-Kulit-Buah-dan-Sayuran-Ini-Tinggi-Khasiat-Jangan-Dibuang', '2019-05-06 03:39:54'),
(6, 1, 'Kriteria Sperma Sehat dan Kemampuannya Bertahan di Luar Vagina', 'Meski tidak semua sperma akan membuahi sel telur dan saat ejakulasi tidak semuanya sempurna, jumlah minimal harus dimiliki oleh pria. Tanda jumlah minimal ini, kemungkinan untuk melakukan pembuahan akan sangat rendah. Oleh karena itu Anda disarankan untuk melakukan pengecekan agar tahu konsentrasi sperma yang dimiliki.\r\n\r\nSalah satu kali ejakulasi, pria akan menghasilkan puluhan hingga ratusan juta sel sperma. Normalnya dalam satu mililiter air mani akan terdapat 40-300 juta sel sperma. Kalau jumlah sel sperma yang Anda miliki sebanyak ini kemungkinan besar akan subur dan memudahkan proses pembuahan.\r\n\r\nPada beberapa kasus, pria yang dinyatakan subur belum mampu melakukan pembuahan dengan sempurna. Hal ini bisa terjadi karena ada beberapa wanita yang tidak memiliki sel telur yang sempurna, rahim yang lemah, hingga faktor lainnya. Melakukan seks di luar masa subur juga susah menyebabkan kehamilan.\r\nHal lain yang memengaruhi kualitas sperma\r\n\r\nPemeriksaan jumlah sperma dilakukan dengan meminta pria melakukan ejakulasi dengan masturbasi. Selanjutnya sperma akan ditempatkan di dalam wadah dan diperiksa. Kalau jumlah sperma kurang dari 10 juta sel per mililiter, kemungkinan besar seseorang dinyatakan tidak normal.\r\n\r\nMeski demikian, kalau sperma sehat dan kriteria di bawah ini terpenuhi mungkin dokter tetap akan menganggapnya normal. Berikut kriteria lain dari sperma yang sehat.\r\n\r\n    Air mani yang keluar biasanya berupa gel dan kental lalu lambat laun akan berubah menjadi lebih bening. Kemampuan ini disebut dengan nama liquefaction. Sperma yang normal tidak akan mudah menjadi cair. Biasanya akan butuh waktu sekitar 15-20 menit. Kalau waktu mencairnya cepat, sperma bisa dikategorikan tidak sehat.\r\n    Morfologi dari sperma itu sendiri. Kalau sperma memiliki bentuk sempurna dari kepala hingga ekor kemungkinan besar proses pembuahan akan berjalan dengan baik. Namun, kalau sperma yang jadi sampel lebih banyak yang cacat, kemungkinan terjadi pembuahan akan rendah.\r\n    Semakin cepat sperma bergerak ke sel telur dan melakukan pembuahan, semakin subur pula seorang pria dalam proses pembuahan.\r\n    Memiliki pH atau keasaman yang tepat. Sperma yang keluar bersama dengan air mani memiliki pH sekitar 7,2-7,8. Kalau sperma yang dihasilkan memiliki pH rendah dan cenderung asam, kemungkinan besar sedang mengalami infeksi.\r\n    Jumlah air mani yang keluar saat mengalami ejakulasi. Normalnya pria akan menghasilkan sekitar 2-5 mililiter air mani. Kalau jumlah air mani yang keluar sangat rendah kemungkinan terjadi pembuahan akan rendah. Sebisa mungkin untuk menghindari ejakulasi selama 2-3 hari sebelum melakukan seks\r\n\r\nMeningkatkan jumlah sperma secara sehat\r\n\r\nKalau jumlah sperma yang Anda miliki sangat rendah penyebabnya ada dua, pertama Anda sering melakukan ejakulasi sebelum seks, kedua karena ada faktor internal dari tubuh. Nah, kalau Anda ingin meningkatkan jumlah sperma serta kualitasnya, coba lakukan beberapa hal di bawah ini.\r\n\r\n    Tidak melakukan masturbasi dahulu. Jumlah sperma akan kembali normal setelah Anda tidak melakukan ejakulasi selama 2-3 hari saja.\r\n    Mengurangi konsumsi alkohol yang berlebihan. Lebih baik memperbanyak air putih sebanyak 6-8 gelas setiap hari.\r\n    Hindari merokok secara berlebihan. Kandungan racun di dalam rokok akan masuk ke pembuluh darah dan sampai ke testis. Setelah sampai ke testis, racun akan mengganggu produksi sperma.\r\n    Sebisa mungkin menjaga kondisi tubuh seperti tidak makan terlalu banyak dan mengalami obesitas. Seseorang yang mengalami obesitas kemungkinan besar akan susah memiliki jumlah sperma yang besar.\r\n    Hindari mandi atau berendam di air hangat terlalu lama. Perubahan suhu di testis yang terlalu besar akan menyebabkan gangguan produksi dari sperma. Kalau Anda suka sauna lebih baik dikurangi durasinya.\r\n    Kurangi stres yang dialami oleh tubuh. Kalau Anda mengalami stres yang berlebihan, jumlah sperma juga akan ikut turun dengan signifikan.\r\n    Sebisa mungkin untuk mengonsumsi makanan yang sehat dan mampu meningkatkan jumlah sperma yang dihasilkan pria saat ejakulasi.\r\n\r\nKemampuan hidup sperma di dalam vagina\r\n\r\nSperma dikatakan berkualitas kalau mampu bertahan selama 3-5 hari di dalam vagina. Itulah kenapa beberapa pasangan disarankan untuk melakukan seks beberapa hari sebelum masa subur. Hal ini dilakukan untuk berjaga-jaga begitu sel telur keluar. Sperma sehat akan bertahan di tuba falopi untuk menunggu sel telur dikeluarkan. Begitu sel telur dikeluarkan sperma akan langsung melakukan pembuahan.\r\n\r\nSelama ini sering buat kesalahan dengan melakukan seks hanya saat subur saja. Padahal sel telur hanya bertahan selama 12-24 jam saja. Telat sedikit, pembuahan tidak akan bisa terjadi pada tubuh.\r\nKemampuan sperma hidup di luar vagina\r\n\r\nSperma bisa bertahan selama beberapa menit hingga akhirnya air mani mencair. Selanjutnya sperma akan mati dalam beberapa detik saja kalau keluar di air khususnya air hangat. Sperma yang dibekukan hingga suhu minus 196 derajat Celcius akan bertahan hingga bertahun-tahun. Itulah kenapa donor sperma selalu disimpan dalam suhu yang sangat rendah.\r\n\r\nInilah beberapa ulasan tentang sperma mulai dari kemampuannya bertahan di luar vagina hingga jumlah normalnya per mililiter air mani. Dengan memenuhi semua kriteria di atas, sperma akan mudah sekali membuahi sel telur dan kemungkinan terjadi pembuahan akan besar. Kalau Anda berniat melakukan program kehamilan, jangan lupakan kesehatan dari sperma, ya.\r\n', 'Herbal', 'olahraga.png', 'Kriteria-Sperma-Sehat-dan-Kemampuannya-Bertahan-di-Luar-Vagina', '2019-05-06 03:40:51'),
(7, 1, 'Olahraga untuk Lansia, Jangan Percaya pada 5 Mitos Ini', 'Kebugaran tubuh pada dasarnya tidak mengenal batasan usia. Tubuh yang bugar akan memberikan kemudahan dan keleluasaan dalam melakukan banyak hal.\r\n\r\nBahkan, menjaga kebugaran tubuh juga sama dengan memastikan sistem metabolisme tubuh berjalan dengan optimal sehingga tidak akan ada masalah dalam berat badan, kadar kolesterol, dan tingkat tekanan darah.\r\n\r\nTidak terkecuali, tubuh yang bugar dan sehat juga akan menciptakan jiwa yang lebih ceria dan bersemangat. Sayangnya, masih banyak orang yang menganggap semakin tua usia seseorang, kemampuannya dalam berolahraga akan berkurang pula.\r\n\r\nNamun, apakah itu benar? Untuk memastikannya, simak 5 mitos olahraga untuk lansia berikut ini.\r\n\r\n1. Terlalu Tua Untuk Olahraga\r\nBanyak sekali orang yang beranggapan bahwa semakin tua usianya, maka kemampuannya untuk berolahraga akan semakin berkurang. Padahal, tidak bergerak dan tidak berolahraga sama sekali akan lebih berbahaya dan mempercepat proses penuaan.\r\n\r\nOrang-orang yang tidak aktif berolahraga akan dua kali lebih besar memiliki risiko terserang penyakit jantung. Apabila Anda sudah terlalu lama tidak berolahraga, cobalah untuk memulai latihan dengan senam aerobik ringan yang dapat menaikkan denyut jantung.\r\n\r\nJadi, tidak ada kata terlalu tua untuk memulai gaya hidup sehat.\r\n\r\n2. Olahraga untuk Lansia Membuat Persendian Sakit\r\nPerlu diakui, kekuatan orang yang sudah berusia lanjut memang tidak lagi sebesar anak-anak muda. Akan tetapi, itu bukan berarti Anda kehilangan peluang untuk berolahraga. Kenali tubuh Anda dan ketahui batasan kemampuan tubuh.\r\n\r\nAnda dapat memulainya dengan berkonsultasi pada dokter sebelum memulai suatu program latihan. Dokter dapat memberikan saran dan masukkan mengenai olahraga untuk lansia dan gerakan apa yang dapat dan tidak dapat Anda lakukan.\r\n\r\nSaat memulainya, pastikan juga Anda didampingi oleh orang yang memang ahli dalam bidang olahraga tersebut untuk menjaga Anda tetap melakukan latihan dengan baik sesuai dengan kapasitas.\r\n\r\n3. Jantung Tidak Lagi Tidak Sekuat Dulu\r\nDengan melakukan latihan secara rutin dan konsisten, jantung Anda akan menjadi lebih kuat dan tidak memberikan risiko apapun. Hal ini tentu dengan kadar latihan yang sesuai dengan usia dan kondisi kesehatanmu.\r\n\r\nAnda tentu tidak dianjurkan untuk mengikuti lari maraton, melainkan cukup dengan berjalan kaki rutin selama 10-30 menit sehari.\r\n\r\nJika dilakukan secara rutin, sirkulasi darah dan tingkat kolesterol akan membaik. Bahkan, latihan rutin ini dapat membuat jiwa Anda terasa semakin bahagia dengan tubuh yang bugar.\r\n\r\n4. Orang Tua Tidak Mampu Berolahraga\r\nYakinlah bahwa olahraga merupakan sebuah kebutuhan tubuh yang harus dipenuhi seberapa tua pun usia Anda. Anda cukup mengenakan sepatu olahraga dan pergilah ke taman untuk melakukan jalan sore atau jogging.\r\n\r\nAnda juga dapat mencoba hobi lain yang dapat melatih otot dan memberikan ruang bagi tubuh untuk bergerak seperti berkebun. Selain itu, memiliki hewan peliharaan yang perlu diajak jalan juga dapat membantu Anda untuk bergerak dan berjalan. Yakini bahwa tidak ada kata tua untuk berolahraga.\r\n\r\n5. Tubuh Tidak Lagi Sekuat Dulu\r\nJangan pernah menyepelekan apa yang Anda miliki sekarang dengan membandingkannya pada apa yang Anda miliki dulu. Jika Anda merasa tidak lagi sekuat dan sebugar saat muda, itu tidak dapat menjadi alasan untuk tidak berolahraga di masa tua.\r\n\r\nOlahraga bukan berarti harus mampu berlari secepat yang Anda lakukan saat masih muda, melainkan dengan bergerak dan berlatih pada kemampuan yang Anda miliki saat ini.\r\n\r\nSeberapa pun jauh perbandingannya, menjaga konsistensi dalam olahraga akan selalu membawa manfaat pada kesehatan Anda.\r\n\r\nSebuah penelitian dari Universitas Yale, Connecticut, Amerika Serikat, menemukan bahwa para orang tua yang membiasakan diri untuk berjalan kaki setidaknya 20 menit sekali memiliki kemungkinan yang lebih kecil untuk terserang gangguan mobililtas dibandingkan yang tidak melakukan sama sekali.\r\n\r\nJadi, jangan pernah ragu untuk mulai berolahraga berapa pun usia Anda.\r\n', 'Herbal', 'kesehatan.png', 'Olahraga-untuk-Lansia-Jangan-Percaya-pada-5-Mitos-Ini', '2019-05-06 03:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `aturan`
--

CREATE TABLE `aturan` (
  `id_aturan` varchar(15) NOT NULL,
  `id_gejala` varchar(15) NOT NULL,
  `nama-aturan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(15) NOT NULL,
  `nama_gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `id_admin` varchar(15) NOT NULL,
  `nama_generik` text NOT NULL,
  `merek_dagang` text NOT NULL,
  `indikasi_obat` text NOT NULL,
  `bentuk` text NOT NULL,
  `reaksi_obatlain` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `id_admin`, `nama_generik`, `merek_dagang`, `indikasi_obat`, `bentuk`, `reaksi_obatlain`, `create_at`, `deskripsi`) VALUES
(2, '1', 'Jajal Edit', 'sadasd', 'asdasd', 'asdasd', 'asdasd', '2019-04-21 07:16:59', ''),
(4, '1', 'kmk', 'lklkj', 'kjk', 'kjkjk', 'kjkjk', '2019-05-03 10:38:06', 'kjkj'),
(5, '1', 'parasetamol', 'sunmol', 'baik', 'pil', 'akan bracun jika dicampur ganja', '2019-05-03 10:42:09', 'obat pereda sakit '),
(6, '1', 'Amoxicillin', 'Amoksisilin, Amoxillin, Amoxsan, Arcamox, Kalmoxilin, Laprimox, Mokbios, Opimox, Pehamoxil, Solpenox, Widecillin', 'Obat ini dapat dikonsumsi dengan atau tanpa makanan. Untuk penyerapan yang lebih baik dan untuk mengurangi ketidaknyamanan saluran pencernaan, sebaiknya dikonsumsi dengan makanan.', 'Tablet, bubuk, kapsul', 'akan tejadi Hipersensitivitas terhadap amoxicillin dan penisilin lainnya', '2019-05-06 02:56:44', 'Amoxicillin adalah antibiotik penisilin yang digunakan untuk mengobati berbagai macam infeksi bakteri. Obat ini juga digunakan bersama dengan obat lain seperti klaritromisin dan lansoprazole, untuk mengobati infeksi Helicobacter pylori dan ulkus duodenum yang ada pada saluran pencernaan.'),
(7, '1', 'Dopamine', 'Dopamin Giulini, Indop', 'Obat ini disuntikkan ke pembuluh darah melalui infus. Dosis diberikan sesuai kondisi medis. Pada saat penggunaan dopamine, perlu dilakukan pemantauan berkala terhadap tekanan darah, EKG, aliran urin, serta curah jantung. Beritahu dokter jika kondisi semakin memburuk atau tidak membaik.', 'Suntik', 'Risiko hipotensi dan bradikardi bila dikonsumsi bersamaan dengan fenitoin.', '2019-05-06 03:14:31', 'Dopamine merupakan obat yang digunakan untuk meningkatkan curah jantung dan tekanan darah selama resusitasi jantung paru. Dopamine juga dapat digunakan untuk tatalaksana denyut jantung lambat (bradikardia) yang disertai gejala, yang tidak respon dengan obat atropine.\r\nDopamine dengan obat dobutamine juga dapat berguna untuk  tatalaksana hipotensi (tekanan darah rendah)  pada pasien syok akibat serangan jantung, trauma, pembedahan, gagal jantung, gagal ginjal, dan kondisi lainnya.  Obat ini bekerja pada otot jantung sehingga dapat meningkatkan denyut jantung, kontraktilitas jantung yang pada akhirnya dapat meningkatkan curah jantung dan tekanan darah.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` varchar(15) NOT NULL,
  `id_aturan` varchar(15) NOT NULL,
  `id_gejala` varchar(15) NOT NULL,
  `nama_penyakit` text NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `aturan`
--
ALTER TABLE `aturan`
  ADD PRIMARY KEY (`id_aturan`),
  ADD KEY `id_gejala` (`id_gejala`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`),
  ADD KEY `id_aturan` (`id_aturan`),
  ADD KEY `id_gejala` (`id_gejala`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aturan`
--
ALTER TABLE `aturan`
  ADD CONSTRAINT `aturan_ibfk_1` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id_gejala`);

--
-- Constraints for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD CONSTRAINT `penyakit_ibfk_1` FOREIGN KEY (`id_aturan`) REFERENCES `aturan` (`id_aturan`),
  ADD CONSTRAINT `penyakit_ibfk_2` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id_gejala`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
