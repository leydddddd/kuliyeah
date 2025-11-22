-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2025 at 12:18 PM
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
-- Database: `barat_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$koIg1hYlb08JSyPkjqvwCuA8SS2OCoUpZd9c2g6/1su69TjyvVOhu');

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `content2` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `source` text NOT NULL,
  `label` varchar(255) NOT NULL,
  `views` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`id`, `title`, `content`, `content2`, `image`, `date`, `source`, `label`, `views`) VALUES
(5, 'Cara Menyembuhkan Luka Gores karena Kulit yang Kering', 'Bersihkan luka gores tersebut dengan sabun dan air hangat. Tepuk-tepuk kulit hingga kering (tidak menggosoknya). Pastikan bahwa tidak ada benda apa pun di sekitar luka tersebut yang bisa membuat kulit terus iritasi.[1]\r\n\r\nOleskan petroleum jelly. Oleskan petroleum jelly (Vaselin) pada luka gores dengan korek kuping. Jangan mencelupkan korek kuping ke dalam petroleum jelly lebih dari sekali agar jelly tidak terkontaminasi.[2]\r\n\r\n', 'Belilah perban cair di apotek terdekat. Perban cair berfungsi untuk menutup luka gores, menjaga kelembapan dan menjauhkan kuman. Perban cair bisa digunakan secara efektif hingga satu minggu. Peran cair bisa menjadi pilihan yang bagus untuk mengobati luka gores di tangan anak-anak karena Anda tidak harus menempelkan perban di atasnya. Meskipun anak-anak sering kali suka memakainya, perban bisa mudah terlepas sehingga sulit menjaga luka untuk tetap bersih dan terlindungi.[5]\r\n\r\nBersihkan luka gores dengan sabun dan air hangat. Tepuk-tepuk hingga kering. Langkah ini terutama penting dilakukan jika Anda mempunyai kulit yang kering atau bepergian di cuaca yang dingin seharian.[6]\r\n', 'food.png', '2025-05-31 10:42:19', 'https://id.wikihow.com/Menyembuhkan-Luka-Gores-karena-Kulit-yang-Kering', 'Admin', 4),
(6, 'Cara Menyelamatkan Diri dari Serangan Serigala', 'Serigala adalah hewan predator yang sangat kuat dan berbahaya. Biasanya, hewan ini tidak menyerang manusia, tetapi Anda harus bersiap-siap untuk menghadapi situasi terburuk jika berada dalam wilayah serigala. Jika Anda diserang serigala, jangan melarikan diri. Pertahankan kontak mata, buat diri Anda tampak besar, dan buat suara keras dan mengintimidasi. Pergilah ke tempat aman sesegera mungkin.', 'Jauhi area tempat serigala pernah terlihat. Usahakan Anda tidak kelihatan. Jika Anda yang melihat serigala lebih dahulu, menjauhlah perlahan-lahan. Tetaplah waspada. Ingat, kalau ada satu serigala, kemungkinan ada serigala lain di dekatnya. Meskipun terkadang bepergian sendiri, serigala selalu berburu secara bergerombol.\r\n\r\nMenjauhlah perlahan-lahan jika serigala melihat Anda. Selalu jaga kontak mata dan jangan berbalik. Jika Anda mencoba kabur, pastikan serigala selalu berada di depan Anda. Jika Anda membelakangi serigala, insting predatornya bisa terpicu. Menjauhlah perlahan-lahan sembari tetap menghadap gerombolan serigala.\r\n\r\nJangan melarikan diri. Serigala jauh lebih cepat daripada manusia, terutama ketika berlari di hutan. Terlebih lagi, tindakan Anda ini justru akan memicu insting predator serigala. Jika sebelumnya serigala tidak mengejar Anda, kemungkinan besar Anda akan dikejar saat kabur.\r\n\r\n\r\nBersikaplah agresif dan berisik jika didekati. Melangkah menuju serigala, buat suara keras, berteriak, dan bertepuk tangan. Mundurlah perlahan-lahan. Teruskan bersikap agresif dan membuat suara berisik. Jaga kontak mata dan jangan memunggungi serigala. [1]\r\n\r\nUsahakan tidak melawan serigala kecuali tidak ada pilihan lain. Serigala adalah hewan yang kuat dan pintar, dengan rahang yang kuat dan insting pembunuh. Ada kemungkinan Anda akan bisa mengusir serigala, tetapi peluangnya sangat kecil jika berhadapan dengan kawanan. [2]\r\nTarik napas dalam-dalam dan berusahalah tetap tenang. Serigala dapat merasakan ketakutan Anda. Jika panik, Anda bisa kaku atau melarikan diri sehingga tidak mampu bertarung untuk menyelamatkan diri', 'images.jpeg', '2025-05-31 10:47:03', 'https://id.wikihow.com/Menyelamatkan-Diri-dari-Serangan-Serigala', 'Admin', 5),
(7, 'Cara Bersiap Menghadapi Erupsi Gunung Berapi', 'Persiapan yang baik untuk menghadapi erupsi gunung berapi bisa menjadi pembeda hidup dan mati. Hal ini kemungkinan besar dapat membantu Anda melindungi diri dan menjaga harta benda dari paparan debu. Membuat rencana tanggap darurat adalah kunci melakukan persiapan, sedangkan mengedukasi orang-orang di rumah dapat membantu memastikan keamanan dan keselamatan mereka saat erupsi terjadi. Ketika bencana tersebut datang, Anda harus mengikuti panduan resmi pemerintah, serta bersiap mengungsi atau melakukan evakuasi.', 'Persiapan yang baik untuk menghadapi erupsi gunung berapi bisa menjadi pembeda hidup dan mati. Hal ini kemungkinan besar dapat membantu Anda melindungi diri dan menjaga harta benda dari paparan debu. Membuat rencana tanggap darurat adalah kunci melakukan persiapan, sedangkan mengedukasi orang-orang di rumah dapat membantu memastikan keamanan dan keselamatan mereka saat erupsi terjadi. Ketika bencana tersebut datang, Anda harus mengikuti panduan resmi pemerintah, serta bersiap mengungsi atau melakukan evakuasi.\r\nPersiapan yang baik untuk menghadapi erupsi gunung berapi bisa menjadi pembeda hidup dan mati. Hal ini kemungkinan besar dapat membantu Anda melindungi diri dan menjaga harta benda dari paparan debu. Membuat rencana tanggap darurat adalah kunci melakukan persiapan, sedangkan mengedukasi orang-orang di rumah dapat membantu memastikan keamanan dan keselamatan mereka saat erupsi terjadi. Ketika bencana tersebut datang, Anda harus mengikuti panduan resmi pemerintah, serta bersiap mengungsi atau melakukan evakuasi.\r\nPersiapan yang baik untuk menghadapi erupsi gunung berapi bisa menjadi pembeda hidup dan mati. Hal ini kemungkinan besar dapat membantu Anda melindungi diri dan menjaga harta benda dari paparan debu. Membuat rencana tanggap darurat adalah kunci melakukan persiapan, sedangkan mengedukasi orang-orang di rumah dapat membantu memastikan keamanan dan keselamatan mereka saat erupsi terjadi. Ketika bencana tersebut datang, Anda harus mengikuti panduan resmi pemerintah, serta bersiap mengungsi atau melakukan evakuasi.', 'Figure_1.png', '2025-05-31 10:49:32', 'https://id.wikihow.com/Bersiap-Menghadapi-Erupsi-Gunung-Berapi', 'Admin', 28);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `date`, `views`) VALUES
(19, 'Bawang Putih Bisa Cegah Penyakit? Ini 7 Khasiatnya yang Terbukti!', 'Bawang putih bukan hanya sekedar bumbu dapur yang memberi aroma khas pada masakan. Rempah ini memiliki banyak manfaat kesehatan berkat kandungan senyawa aktif bernama allicin. Allicin memiliki sifat antimikroba, antioksidan, dan antiinflamasi yang sangat bermanfaat bagi tubuh. Berikut ini adalah berbagai manfaat bawang putih yang telah diketahui dan dipelajari melalui berbagai penelitian.\r\n\r\n1. Meredakan Flu dan Pilek\r\n\r\nSalah satu manfaat bawang putih yang paling dikenal adalah kemampuannya dalam meredakan flu dan pilek. Kandungan allicin di dalam bawang putih dipercaya mampu meningkatkan sistem kekebalan tubuh dan membantu tubuh melawan infeksi virus. Beberapa penelitian menunjukkan bahwa konsumsi bawang putih dapat mempercepat pemulihan dari flu serta mengurangi intensitas gejalanya. Meskipun sebagian besar penelitian masih dilakukan dalam skala laboratorium, manfaat ini tetap menjadi alasan banyak orang mengkonsumsi bawang putih sebagai langkah pencegahan alami terhadap penyakit musiman.\r\n\r\n2. Menurunkan Kadar Kolesterol\r\n\r\nKandungan allicin dalam bawang putih juga diketahui dapat menghambat pembentukan kolesterol jahat atau LDL di hati. Hal ini menjadikan bawang putih sebagai salah satu bahan alami yang mampu membantu menurunkan kadar kolesterol dalam darah. Beberapa studi menunjukkan bahwa konsumsi bawang putih secara rutin dapat membantu menurunkan kadar kolesterol total dan LDL, meskipun hasilnya masih bervariasi antar individu dan penelitian lanjutan tetap diperlukan untuk membuktikan efektivitasnya secara menyeluruh.\r\n\r\n3. Menurunkan Tekanan Darah\r\n\r\nManfaat lainnya dari bawang putih adalah membantu menurunkan tekanan darah tinggi. Allicin bekerja dengan cara merilekskan pembuluh darah dan memperlancar aliran darah, sehingga tekanan darah dapat turun secara alami. Konsumsi bawang putih secara rutin dapat menjadi pelengkap yang efektif dalam pengelolaan hipertensi, terutama jika diimbangi dengan gaya hidup sehat, seperti olahraga teratur, mengurangi konsumsi garam, serta menjaga berat badan ideal.\r\n\r\n4. Mencegah Penyakit Jantung\r\n\r\nDengan kemampuannya dalam menurunkan kadar kolesterol dan tekanan darah, bawang putih juga berkontribusi dalam mencegah penyakit jantung. Kolesterol yang terkendali membantu mencegah penyumbatan pembuluh darah, sementara tekanan darah yang stabil mendukung fungsi jantung dalam memompa darah secara optimal. Selain itu, bawang putih juga memiliki efek antikoagulan ringan yang membantu mengencerkan darah dan mencegah pembentukan bekuan darah yang bisa menyebabkan serangan jantung atau stroke.\r\n\r\n5. Mencegah Kanker\r\n\r\nBawang putih mengandung senyawa aktif yang memiliki sifat antikanker. Salah satu penelitian menunjukkan bahwa konsumsi bawang putih secara rutin dapat menurunkan risiko beberapa jenis kanker, termasuk kanker lambung, kanker payudara, kanker usus besar, kanker paru, dan kanker pankreas. Efek ini diduga berasal dari kandungan antioksidan yang tinggi dalam allicin, yang dapat melawan radikal bebas dan menghambat pertumbuhan sel-sel kanker. Meskipun begitu, manfaat ini masih perlu dibuktikan lebih lanjut melalui penelitian klinis yang lebih besar dan mendalam.\r\n\r\n6. Mencegah Kanker Lambung\r\n\r\nSelain bersifat anti kanker, bawang putih juga memiliki kemampuan antibakteri yang dapat melawan infeksi bakteri Helicobacter pylori — salah satu penyebab utama penyakit maag kronis dan kanker lambung. Beberapa studi menunjukkan bahwa suplemen bawang putih dapat membantu mencegah infeksi ini serta menurunkan risiko komplikasi seperti kebocoran dan perdarahan lambung. Namun, bagi individu yang memiliki gangguan lambung, konsumsi bawang putih dalam jumlah besar harus dilakukan dengan hati-hati dan sebaiknya di bawah pengawasan medis.\r\n\r\n7. Mencegah Gangguan Fungsi Otak\r\n\r\nTekanan darah tinggi dan kolesterol yang tidak terkontrol dapat merusak pembuluh darah kecil di otak, yang kemudian meningkatkan risiko gangguan kognitif seperti demensia dan Alzheimer. Dengan kemampuannya menjaga kestabilan tekanan darah dan kadar kolesterol, bawang putih berperan dalam menjaga kesehatan otak. Mengonsumsi bawang putih secara rutin dapat menjadi langkah alami untuk melindungi fungsi otak dan mencegah penurunan daya ingat seiring bertambahnya usia.\r\n\r\nBawang putih dikenal memiliki beragam manfaat bagi kesehatan, mulai dari membantu menurunkan tekanan darah hingga meningkatkan daya tahan tubuh. Namun, penting untuk diingat bahwa setiap orang memiliki kondisi kesehatan yang berbeda-beda. Oleh karena itu, sebaiknya tidak mengkonsumsi bawang putih secara sembarangan. Konsultasikan terlebih dahulu penggunaannya sebagai bagian dari pola hidup sehat kepada ahli gizi atau tenaga medis terpercaya, agar Anda mendapatkan panduan yang tepat, aman, dan sesuai dengan kebutuhan tubuh Anda.', '42637.jpg', '2025-05-31 10:56:56', 1),
(20, '7 Manfaat Lobak untuk Kesehatan: Cegah Penuaan hingga Jaga Berat Badan', 'Lobak adalah jenis sayuran akar yang sering muncul dalam hidangan khas Jepang, namun kini sudah semakin mudah ditemukan di Indonesia karena mulai banyak dibudidayakan secara lokal. Tanaman ini memiliki beberapa jenis yang dibedakan berdasarkan warna umbinya, seperti lobak putih, lobak merah, lobak ungu, dan lobak hitam. Di antara semuanya, lobak putih adalah jenis yang paling populer dan paling sering digunakan dalam berbagai masakan.\r\n\r\nLobak putih memiliki cita rasa yang khas sedikit manis dengan sentuhan pedas ringan yang menjadikannya cocok untuk berbagai olahan, mulai dari tumisan hingga acar. Tak hanya lezat, lobak juga kaya akan nutrisi penting seperti asam folat, vitamin C, kalium, dan kalsium, serta memiliki kandungan air yang tinggi sehingga membantu menjaga hidrasi tubuh.\r\n\r\nBerikut adalah manfaat lobak yang sayang untuk dilewatkan:\r\n\r\n1. Mencegah Penuaan Dini dan Melindungi Sel Tubuh\r\n\r\nLobak kaya akan antioksidan alami seperti vitamin C dan senyawa tumbuhan aktif yang membantu menangkal radikal bebas. Antioksidan ini berperan penting dalam mencegah kerusakan sel, memperlambat tanda-tanda penuaan dini, serta mengurangi risiko beberapa jenis kanker, termasuk kanker serviks, payudara, prostat, hati, dan paru-paru.\r\n\r\n2. Menurunkan Risiko Diabetes dan Menstabilkan Gula Darah\r\n\r\nKonsumsi lobak secara rutin bisa membantu mengontrol kadar gula darah. Sayuran ini menghambat penyerapan gula di usus dan meningkatkan pemanfaatannya oleh tubuh, sehingga baik untuk penderita diabetes atau orang yang berisiko. Lobak juga memperkuat pertahanan antioksidan tubuh yang berperan penting dalam metabolisme glukosa.\r\n\r\n3. Menjaga Kesehatan Jantung\r\n\r\nLobak mengandung sulforaphane dan antosianin, dua senyawa antioksidan yang membantu melindungi jantung dari peradangan dan stres oksidatif. Kandungan ini membantu menjaga pembuluh darah tetap sehat, mengurangi resiko penyumbatan, serta membantu menstabilkan tekanan darah.\r\n\r\n4. Meningkatkan Sistem Kekebalan Tubuh\r\n\r\nLobak merupakan sumber yang kaya akan vitamin C dan zinc, dua nutrisi penting yang mendukung sistem imun tubuh. Vitamin C mempercepat penyembuhan, melawan infeksi, dan membantu melindungi sel tubuh dari kerusakan, sementara zinc berperan dalam produksi sel imun.\r\n\r\n5. Membantu Menurunkan dan Menjaga Berat Badan\r\n\r\nIngin menurunkan berat badan secara alami? Lobak bisa jadi pilihan tepat. Kandungan air dan serat yang tinggi serta kalori yang rendah membuat lobak cocok sebagai makanan pendukung dalam program diet sehat. Serat membantu kamu merasa kenyang lebih lama, mengurangi keinginan ngemil berlebihan.\r\n\r\n6. Melancarkan Pencernaan dan Mencegah Sembelit\r\n\r\nLobak mendukung kesehatan sistem pencernaan karena kaya akan serat, yang memperlancar pergerakan usus dan mencegah sembelit. Selain itu, lobak juga memiliki efek antibakteri, termasuk melawan bakteri Helicobacter pylori, penyebab umum gangguan lambung seperti maag dan risiko kanker lambung.\r\n\r\n7. Menjaga Kulit Tetap Sehat dan Terhidrasi\r\n\r\nTinggi kandungan air dan vitamin C, lobak membantu menjaga kelembaban kulit, menjadikannya tampak segar dan sehat. Vitamin C juga berperan dalam pembentukan kolagen, yang penting untuk menjaga elastisitas, kekenyalan, dan mencegah kerutan pada kulit.\r\n\r\nSecara umum, lobak putih relatif aman dikonsumsi. Namun, sayuran ini dapat menyebabkan iritasi pada saluran pencernaan bila dikonsumsi terlalu banyak. Oleh karena itu, Anda perlu mengkonsumsinya dengan bijak.\r\n\r\n \r\n\r\nReferensi:\r\n\r\nGalicia-Garcia, et al. (2020). Pathophysiology of Type 2 Diabetes Mellitus. International Journal of Molecular Sciences, 21(17), pp. 6275.\r\n\r\nManivannan, et al. (2019). Deciphering the Nutraceutical Potential of Raphanus sativus-A Comprehensive Overview. Nutrients, 11(2), pp. 402.\r\n\r\nSecond Medic. (2024). 10 Health Benefits of Radish and Its Various Types. \r\n\r\nDra. Andrea Pereira.(2024). Radish is good for the skin and lessens constipation: see eight benefits.\r\n\r\nSayurbox. (2025). Cari-tahu-15-manfaat-lobak-untuk-kesehatan-tubuh.', '4108.jpg', '2025-05-31 10:57:24', 3),
(21, 'Ini 5 Manfaat Daun Sambiloto yang Perlu Kamu Tahu!', 'Pernah dengar tentang daun sambiloto? Daun sambiloto (Andrographis paniculata) adalah tanaman herbal yang telah digunakan sejak lama dalam pengobatan tradisional Asia. Tanaman ini dikenal karena kandungan utama bernama andrographolide, senyawa aktif yang punya efek anti-inflamasi, antioksidan, dan antivirus. Meski rasanya pahit, tanaman herbal ini ternyata punya segudang manfaat untuk tubuh, lho!\r\n\r\nBanyak penelitian modern menunjukkan bahwa daun sambiloto punya potensi luar biasa untuk mengatasi berbagai masalah kesehatan, mulai dari radang hingga infeksi virus. Yuk, kita kupas tuntas manfaatnya!\r\n\r\nMeredakan Peradangan Secara Alami\r\n\r\nSalah satu manfaat utama daun sambiloto adalah kemampuannya meredakan peradangan. Cocok banget untuk kamu yang sering mengalami nyeri sendi, batuk berdahak, atau radang tenggorokan.\r\n\r\nMeningkatkan Daya Tahan Tubuh\r\n\r\nDaun sambiloto juga bisa membantu memperkuat sistem imun, terutama saat tubuh rentan terserang flu dan infeksi. Sambiloto mendukung kerja sel imun dalam melawan kuman penyebab penyakit.\r\n\r\nMelawan Virus dan Infeksi\r\n\r\nBeberapa studi menunjukkan bahwa sambiloto memiliki efek antivirus yang cukup kuat. Kandungan aktifnya mampu menghambat perkembangan virus tertentu dan mempercepat proses penyembuhan.\r\n\r\nMembantu Mengatasi Infeksi Saluran Pernapasan\r\n\r\nSambiloto juga banyak digunakan sebagai terapi pendamping untuk infeksi saluran pernapasan seperti batuk, pilek, atau radang amandel. Khasiatnya membuat gejala lebih cepat reda secara alami.\r\n\r\nMenjaga Kesehatan Hati\r\n\r\nManfaat lain yang tak kalah penting adalah kemampuannya melindungi hati dari kerusakan. Senyawa aktif dalam sambiloto membantu menangkal radikal bebas dan menjaga fungsi hati tetap optimal.\r\n\r\nDaun sambiloto bisa dikonsumsi dalam bentuk kapsul, teh, atau ekstrak cair. Tapi ingat ya, untuk penggunaan jangka panjang atau dosis tinggi, sebaiknya konsultasikan dengan dokter atau tenaga kesehatan terlebih dahulu.\r\n\r\n \r\n\r\nReferensi:\r\n\r\nLi, X., et al. (2022). Andrographolide, A Natural Anti-inflammatory Agent: An Update. Frontiers in Pharmacology.\r\n\r\nKumar, S., et al. (2024). Exploring the Potential of Andrographis Paniculata and Its Bioactive Compounds in the Management of Liver Diseases. Food Chemistry Advances.\r\n\r\nVeldman, L. B. M., et al. (2023). Mechanistic Evidence of Andrographis paniculata in the Treatment of Acute Respiratory Infections. Pharmaceuticals (Basel).\r\n\r\nAdiguna, S. P., et al. (2021). Antiviral Activities of Andrographolide and Its Derivatives: Mechanism of Action and Delivery System. Pharmaceuticals (Basel).\r\n\r\nPollock, D. (2025). What to Know About Andrographis Supplements: Potential Benefits and Uses. Healthline.', '2148029637.jpg', '2025-05-31 10:57:55', 2);

-- --------------------------------------------------------

--
-- Table structure for table `number`
--

CREATE TABLE `number` (
  `id` int(11) NOT NULL,
  `agency` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `number`
--

INSERT INTO `number` (`id`, `agency`, `number`, `description`) VALUES
(1, 'Admin', '+6282112350263', 'Nomor untuk menghubungi admin dan melapor admin.'),
(2, 'Ambulans / Medis', '118', 'Layanan ambulans darurat untuk penanganan medis cepat dan evakuasi pasien.'),
(3, 'Pemadam Kebakaran', '113', 'Dapat dihubungi dalam kasus kebakaran, kebocoran gas, atau evakuasi karena bencana.'),
(4, 'SAR / Basarnas', '115', 'Search and Rescue untuk penanganan korban bencana alam, tenggelam, hilang, atau evakuasi khusus.'),
(5, 'PLN (Listrik)', '123', 'Layanan pengaduan listrik PLN seperti pemadaman, gangguan instalasi, atau kabel jatuh.'),
(6, 'Posko Bencana BNPB', '117', 'Layanan informasi dan penanganan bencana alam oleh Badan Nasional Penanggulangan Bencana.'),
(7, 'Kementerian Kesehatan', '1500567', 'Layanan informasi dan pengaduan terkait kesehatan nasional dan fasilitas pelayanan kesehatan.'),
(8, 'KPAI (Perlindungan Anak)', '021-31901556', 'Layanan pengaduan terkait kekerasan dan perlindungan anak.'),
(9, 'Komnas Perempuan', '021-3903963', 'Layanan untuk laporan kekerasan terhadap perempuan dan pendampingan korban.'),
(10, 'Crisis Center Kemenkes', '119', 'Layanan darurat kesehatan masyarakat dan penanganan kasus wabah atau krisis kesehatan.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `number`
--
ALTER TABLE `number`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `number`
--
ALTER TABLE `number`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
