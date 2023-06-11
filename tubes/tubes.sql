-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 02:24 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int NOT NULL,
  `gambar` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `judul` varchar(60) NOT NULL,
  `waktu` varchar(60) NOT NULL,
  `isi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_kategori` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `gambar`, `judul`, `waktu`, `isi`, `id_kategori`) VALUES
(2, '3.webp', 'FrameWork', '4/26/2023', 'suatu kerangka kerja abstrak yang menyediakan struktur, komponen, dan alat bantu untuk membangun dan mengembangkan aplikasi perangkat lunak.', 2),
(23, '3.webp', 'PHP', '5/20/2023', 'bahasa skrip dengan fungsi umum yang terutama digunakan untuk pengembangan web. Bahasa ini awalnya dibuat oleh seorang pemrogram Denmark-Kanada Rasmus Lerdorf pada tahun 1994.', 3),
(24, '3.webp', 'Java Script', '4/20/2023', 'JavaScript adalah suatu bahasa pemrograman tingkat tinggi dan dinamis. JavaScript populer di internet dan dapat bekerja di sebagian besar penjelajah web populer seperti Google Chrome, Mozilla Firefox dll. Kode JavaScript dapat disisipkan dalam halaman web', 4),
(26, '5.webp', 'Laravel', '3/20/2023', 'Laravel', 4),
(27, '3.webp', 'Phyton', '2/20/2023', 'Python', 3),
(28, '3.webp', 'Tailwind', '1/20/2023', 'Tailwind CSS adalah kerangka kerja CSS yang di dalamnya terdapat sekumpulan utility classes untuk membangun antarmuka kustom dengan cepat.', 1),
(42, '5.webp', 'HTML', '6/7/2023', 'wadasd', 1),
(44, 'batu.webp', 'emot batu', '6/7/2023', 'wadasd', 1),
(45, '16.webp', 'go', '6/7/2023', 'HIU', 1),
(47, '6.webp', 'kontol dimas', '6/7/2023', 'alek fusvgugfsugishgosijg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'HTML'),
(2, 'CSS'),
(3, 'Bahasa Pemograman'),
(4, 'framework');

-- --------------------------------------------------------

--
-- Table structure for table `populer`
--

CREATE TABLE `populer` (
  `id` int NOT NULL,
  `gambar` varchar(60) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `populer`
--

INSERT INTO `populer` (`id`, `gambar`, `judul`, `isi`) VALUES
(1, '8.webp', 'Java Script', 'JavaScript adalah suatu bahasa pemrograman tingkat tinggi dan dinamis. JavaScript populer di internet dan dapat bekerja di sebagian besar penjelajah web populer seperti Google Chrome, Mozilla Firefox dll. Kode JavaScript dapat disisipkan dalam halaman web menggunakan tag script.'),
(2, '9.webp', 'PHP', 'bahasa skrip dengan fungsi umum yang terutama digunakan untuk pengembangan web. Bahasa ini awalnya dibuat oleh seorang pemrogram Denmark-Kanada Rasmus Lerdorf pada tahun 1994.'),
(3, '10.webp', 'Laravel', 'Laravel adalah kerangka kerja aplikasi web berbasis PHP yang sumber terbuka, menggunakan konsep Model-View-Controller. Laravel berada dibawah lisensi MIT, dengan menggunakan GitHub sebagai tempat berbagi kode.'),
(4, '11.webp', 'Phyton', 'Python adalah bahasa pemrograman tujuan umum yang ditafsirkan, tingkat tinggi. Dibuat oleh Guido van Rossum dan pertama kali dirilis pada tahun 1991, filosofi desain Python menekankan keterbacaan kode dengan penggunaan spasi putih yang signifikan.');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int NOT NULL,
  `nama_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
(1, 'admin'),
(2, 'user\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tampilan`
--

CREATE TABLE `tampilan` (
  `id` int NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `isi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `isi2` text NOT NULL,
  `isi3` text NOT NULL,
  `isi4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tampilan`
--

INSERT INTO `tampilan` (`id`, `gambar`, `judul`, `isi`, `isi2`, `isi3`, `isi4`) VALUES
(1, '6.webp', 'HTML', 'Hypertext Markup Language adalah bahasa markah standar untuk dokumen yang dirancang untuk ditampilkan di peramban internet. dan dapat di padukan dengan CSS atau bahasa pemograman', 'HTML (Hypertext Markup Language) adalah bahasa markup yang digunakan untuk membuat struktur dan menyusun konten pada halaman web. HTML adalah salah satu komponen utama dalam pengembangan web bersama dengan CSS (Cascading Style Sheets) dan JavaScript. HTML menggunakan tag-tag (markup) untuk memberi petunjuk kepada browser web tentang cara menampilkan elemen-elemen tersebut. Tag-tag ini ditempatkan di antara tanda kurung sudut (\"&lt;\" dan \"&gt;\"). Sebagai contoh, tag \"&lt;p&gt;\" digunakan untuk menandai sebuah paragraf, tag \"&lt;img&gt;\" untuk menampilkan gambar, dan tag \"&lt;a&gt;\" untuk membuat hyperlink.', '\r\n\r\n\r\nSelain tag-tag, HTML juga menggunakan atribut untuk memberikan informasi tambahan tentang elemen. Atribut ini memberikan pengaturan seperti warna, ukuran, tautan, dan sebagainya. Misalnya, atribut \"src\" pada tag \"<img>\" digunakan untuk menentukan sumber gambar yang akan ditampilkan.\r\n\r\nHTML bekerja sama dengan CSS (Cascading Style Sheets) untuk mengontrol tampilan dan gaya halaman web. CSS digunakan untuk mengatur warna, tata letak, dan aspek visual lainnya dari elemen-elemen HTML.\r\n\r\nDengan HTML, pengembang web dapat membuat halaman web yang interaktif, mudah dibaca, dan diakses oleh berbagai perangkat dan browser yang berbeda.', 'Secara umum, HTML adalah fondasi dalam membangun halaman web, dan pemahaman dasar tentang HTML menjadi penting bagi pengembang web dan orang-orang yang tertarik untuk membuat konten web.'),
(2, '2.webp', 'CSS', 'Cascading Style Sheet merupakan aturan untuk mengatur beberapa komponen dalam sebuah web sehingga akan lebih terstruktur dan seragam. CSS bukan merupakan bahasa pemrograman.', 'CSS (Cascading Style Sheets) adalah bahasa yang digunakan untuk mengendalikan tampilan dan gaya visual dari elemen-elemen HTML di halaman web. Dengan CSS, Anda dapat mengatur warna, font, ukuran, tata letak, dan berbagai properti lainnya dari elemen-elemen HTML.\r\n\r\nDalam CSS, Anda menentukan aturan gaya atau \"rules\" yang berlaku untuk elemen-elemen tertentu di halaman web. Aturan tersebut terdiri dari selector dan deklarasi.\r\n\r\nSelector dalam CSS digunakan untuk memilih elemen atau kelompok elemen yang akan diberi gaya. Misalnya, Anda dapat menggunakan selector h1 untuk memilih semua elemen judul level 1 di halaman web.\r\n\r\n', 'Deklarasi dalam CSS berisi properti dan nilai. Properti adalah atribut gaya yang ingin Anda atur, seperti color (warna), font-size (ukuran font), atau margin (margen). Nilai adalah nilai yang Anda tetapkan untuk properti tersebut, misalnya red untuk warna atau 12px untuk ukuran font.\r\n\r\nContoh sederhana aturan gaya dalam CSS adalah sebagai berikut:\r\n\r\n\"h1\" {\r\n  color: \"blue\";\r\n  font-size: \"24px\";\r\n}\r\nDalam contoh tersebut, aturan gaya akan diterapkan pada semua elemen &lt;h1&gt; di halaman web. Judul-judul tersebut akan memiliki warna biru dan ukuran font 24 piksel.\r\n\r\nAnda dapat menempatkan kode CSS di dalam elemen &lt;style&gt; di dalam bagian &lt;head&gt; dari halaman HTML, atau menyimpannya dalam file terpisah dengan ekstensi .css dan menghubungkannya dengan halaman HTML menggunakan tag &lt;link&gt;.', 'CSS memiliki banyak properti dan nilai yang dapat Anda gunakan untuk mengatur tampilan halaman web secara lebih rinci. Anda dapat menggabungkan dan menerapkan aturan gaya CSS secara selektif untuk elemen-elemen HTML yang berbeda, yang memungkinkan Anda untuk menciptakan desain yang konsisten dan menarik untuk halaman web Anda.'),
(3, '4.webp', 'Bahasa Pemograman', 'Bahasa pemrograman merupakan serangkaian kata yang diwujudkan dalam sebuah instruksi atau perintah dan terdiri dari banyak baris yang bisa dimengerti oleh komputer.', 'Bahasa pemrograman adalah sebuah sistem komunikasi yang digunakan untuk membangun dan mengembangkan perangkat lunak atau aplikasi komputer. Dalam bahasa pemrograman, kita menggunakan serangkaian instruksi dan aturan yang dapat dipahami oleh komputer untuk mengeksekusi tugas tertentu.\n\nBahasa pemrograman memiliki sintaks dan semantik yang unik, yang mengatur bagaimana instruksi-instruksi tersebut ditulis dan diinterpretasikan oleh komputer. Ada banyak bahasa pemrograman yang berbeda, dan masing-masing memiliki kegunaan dan kelebihan yang berbeda pula.\n\nBerikut adalah beberapa bahasa pemrograman yang populer:', '1. C: Bahasa pemrograman C merupakan salah satu bahasa pemrograman yang paling tua dan populer. C digunakan untuk mengembangkan sistem operasi, perangkat lunak tingkat rendah, dan aplikasi yang membutuhkan kecepatan dan efisiensi tinggi.\n\n\r\n2. Java adalah bahasa pemrograman yang platform-agnostic, yang berarti program yang ditulis dalam Java dapat dijalankan di berbagai platform dan sistem operasi. Java banyak digunakan untuk mengembangkan perangkat lunak berbasis web, aplikasi Android, permainan, dan sistem terdistribusi.\n\n\r\n3. Python adalah bahasa pemrograman yang mudah dipelajari dan sangat fleksibel. Python sering digunakan untuk pengembangan aplikasi web, analisis data, kecerdasan buatan (AI), pembelajaran mesin (machine learning), dan otomasi tugas-tugas rutin.\n\n\r\n4. JavaScript adalah bahasa pemrograman yang digunakan untuk mengembangkan aplikasi web interaktif. JavaScript biasanya dieksekusi di sisi klien (browser) dan dapat memberikan interaksi pengguna yang dinamis, validasi formulir, efek animasi, dan banyak lagi.\n\n\r\n5. PHP adalah bahasa pemrograman yang paling banyak digunakan untuk pengembangan aplikasi web. PHP digunakan untuk membangun situs web dinamis, mengakses basis data, mengolah formulir, dan menghasilkan konten web secara dinamis.\n\n\r\n6. Ruby adalah bahasa pemrograman yang fokus pada kesederhanaan dan kepuasan programmer. Ruby biasanya digunakan untuk pengembangan web dengan menggunakan framework Ruby on Rails.\n\n\r\n7. C# adalah bahasa pemrograman yang dikembangkan oleh Microsoft dan dirancang untuk pengembangan aplikasi di lingkungan .NET. C# sering digunakan untuk mengembangkan perangkat lunak Windows, aplikasi web, dan permainan.', 'Itulah beberapa contoh bahasa pemrograman yang populer. Setiap bahasa pemrograman memiliki kelebihan dan kekurangan, dan pemilihan bahasa pemrograman yang tepat tergantung pada kebutuhan dan tujuan pengembangan perangkat lunak atau aplikasi.'),
(7, '3.webp', 'FrameWork', 'suatu kerangka kerja abstrak yang menyediakan struktur, komponen, dan alat bantu untuk membangun dan mengembangkan aplikasi perangkat lunak.', 'Framework adalah kerangka kerja yang menyediakan struktur, aturan, dan alat untuk membangun dan mengembangkan aplikasi perangkat lunak. Framework bertujuan untuk mempermudah proses pengembangan dengan menyediakan fondasi yang kokoh dan komponen-komponen yang dapat digunakan secara efisien.  Dalam pengembangan perangkat lunak, framework berperan sebagai panduan atau cetakan kerja yang membantu pengembang dalam merancang, mengembangkan, dan mengelola aplikasi dengan lebih efektif. Framework dapat berisi pustaka (library) yang sudah siap digunakan, aturan-aturan tentang bagaimana kode harus diorganisasi, dan alat bantu untuk mempercepat proses pengembangan.  Manfaat menggunakan framework dalam pengembangan perangkat lunak antara lain:', 'Standarisasi: Framework menyediakan aturan-aturan dan konvensi yang telah disepakati untuk membangun aplikasi. Ini membantu menghasilkan kode yang konsisten dan mudah dipahami oleh pengembang lain.  Efisiensi: Framework menyediakan komponen-komponen yang sudah siap digunakan, sehingga mengurangi waktu dan upaya yang dibutuhkan untuk mengembangkan fitur-fitur umum. Pengembang dapat fokus pada logika bisnis yang unik dan spesifik dari aplikasi.  Keamanan: Framework sering kali memiliki lapisan keamanan yang sudah teruji dan terintegrasi secara default. Ini membantu melindungi aplikasi dari serangan yang umum terjadi dan mengurangi risiko keamanan.  Skalabilitas: Framework biasanya dirancang untuk mendukung pertumbuhan dan perubahan skala. Mereka menyediakan arsitektur yang fleksibel dan dapat diperluas, memungkinkan aplikasi untuk menangani peningkatan lalu lintas atau fitur baru dengan mudah.  Komunitas dan Dokumentasi: Framework yang populer memiliki komunitas yang aktif dan dukungan dokumentasi yang luas. Pengembang dapat mencari bantuan, tutorial, dan sumber daya lainnya dari komunitas tersebut, mempercepat proses pembelajaran dan pemecahan masalah.', 'Contoh framework populer untuk pengembangan aplikasi web adalah Laravel (untuk PHP), Django (untuk Python), dan Ruby on Rails (untuk Ruby). Framework juga tersedia untuk pengembangan aplikasi mobile, desktop, dan lainnya, dengan setiap framework memiliki keunggulan dan fitur yang berbeda sesuai dengan kebutuhan pengembangan aplikasi.'),
(8, '5.webp', 'Data Base', 'Database digunakan untuk menyimpan data dalam jumlah besar dengan cara yang efisien dan terorganisir, sehingga memungkinkan aplikasi untuk mempermudah', 'Database adalah kumpulan data yang terorganisir dengan struktur yang ditentukan, disimpan, dan dikelola secara elektronik. Database digunakan untuk menyimpan informasi yang terkait satu sama lain dalam format yang terstruktur agar mudah diakses, dikelola, dan diperbarui.\r\n\r\nDatabase terdiri dari tabel yang terdiri dari baris dan kolom. Setiap kolom dalam tabel mewakili jenis data tertentu, sedangkan setiap baris mewakili entitas atau objek individu. Data dalam database dapat diambil, dimodifikasi, atau dihapus menggunakan perintah-perintah bahasa query, seperti SQL (Structured Query Language).\r\n\r\nAda beberapa jenis database yang umum digunakan, antara lain:', 'Database Relasional: Jenis database yang paling umum digunakan, di mana data disimpan dalam tabel terkait satu sama lain melalui kunci relasional. Setiap tabel mewakili entitas dan relasi antara tabel ditentukan oleh kunci primer dan kunci asing.\r\n\r\nDatabase NoSQL: Database non-relasional yang dirancang untuk mengelola data yang tidak membutuhkan skema tetap. Database NoSQL menggunakan model data yang berbeda seperti dokumen, grafik, kolom, atau key-value untuk menyimpan dan mengakses data.\r\n\r\nDatabase Terdistribusi: Database yang terdiri dari beberapa node atau server yang saling berinteraksi dan berbagi data. Database terdistribusi digunakan untuk meningkatkan skalabilitas dan ketersediaan sistem.\r\n\r\nDatabase In-Memory: Database yang menyimpan data secara langsung di dalam memori komputer untuk meningkatkan kecepatan akses dan kinerja. Data dalam database in-memory tidak perlu dibaca atau ditulis dari disk.', 'Database digunakan dalam berbagai aplikasi dan sistem, termasuk sistem manajemen konten, sistem manajemen basis data, sistem keuangan, sistem inventaris, aplikasi web, dan banyak lagi. Pengelolaan database melibatkan pembuatan, pemeliharaan, pengoptimalan, dan keamanan data agar dapat digunakan dengan efisien dan akurat.'),
(9, '1.webp', 'Visual Studio Code', 'merupakan salah satu perangkat lunak yang sangat populer di kalangan pengembang perangkat lunak dan digunakan untuk mengembangkan berbagai jenis aplikasi.', 'Visual Studio Code (VS Code) adalah sebuah editor kode sumber yang sangat populer dan kuat yang dikembangkan oleh Microsoft. Ia dirancang untuk memudahkan pengembangan perangkat lunak dengan menyediakan fitur-fitur yang kaya dan lingkungan yang dapat disesuaikan.\r\n\r\nBerikut adalah beberapa fitur dan manfaat utama dari Visual Studio Code:', 'Antar Muka Pengguna yang Ramah: VS Code memiliki antarmuka pengguna yang intuitif dan mudah digunakan. Ia menyediakan tata letak yang bersih dan sederhana, serta dukungan untuk tema dan ekstensi yang dapat disesuaikan agar sesuai dengan preferensi pengguna.\r\n\r\nDukungan untuk Banyak Bahasa Pemrograman: VS Code mendukung berbagai bahasa pemrograman populer seperti JavaScript, Python, Java, C++, C#, Ruby, dan banyak lagi. Ia menyediakan fitur tajuk, penyorotan sintaksis, pemformatan kode, saran kode, dan kemampuan debug yang dapat membantu pengembangan dalam berbagai bahasa.\r\n\r\nEkstensi yang Kuat: VS Code memiliki ekosistem ekstensi yang kaya dan aktif. Pengguna dapat memasang ekstensi untuk memperluas fungsionalitas editor sesuai dengan kebutuhan mereka. Ekstensi yang tersedia termasuk alat bantu untuk pengembangan web, pemrograman backend, pengelolaan proyek, integrasi dengan sistem kontrol versi, dan banyak lagi.\r\n\r\nIntegrasi dengan Sistem Kontrol Versi: VS Code memiliki integrasi yang kuat dengan sistem kontrol versi seperti Git. Ia menyediakan antarmuka yang mudah digunakan untuk melihat perubahan, melakukan komit, membandingkan perubahan, dan mengelola repositori Git.\r\n\r\nDebugging yang Mudah: VS Code menyediakan kemampuan debugging yang terintegrasi dengan dukungan untuk berbagai bahasa pemrograman. Pengguna dapat menyetel titik henti, melacak variabel, dan melakukan langkah demi langkah untuk memecahkan masalah dalam kode mereka.\r\n\r\nEkosistem yang Aktif: VS Code adalah editor yang populer dan memiliki komunitas yang aktif. Pengguna dapat dengan mudah menemukan sumber daya, tutorial, dan dukungan dari komunitas pengembang yang luas.\r\n\r\nCross-Platform: VS Code tersedia untuk Windows, macOS, dan Linux, sehingga dapat digunakan di berbagai sistem operasi.', 'Visual Studio Code adalah salah satu pilihan populer bagi pengembang perangkat lunak yang mencari editor kode sumber yang kuat, ringan, dan dapat disesuaikan. Dengan fitur-fitur yang kuat dan ekstensibilitas yang tinggi, ia dapat membantu meningkatkan produktivitas dalam pengembangan perangkat lunak.'),
(13, '8.webp', 'Java Script', 'JavaScript adalah bahasa pemrograman tingkat tinggi yang sering digunakan untuk pengembangan aplikasi web interaktif. JavaScript dapat memberikan fungsi dan interaksi dinamis pada halaman web, serta mengendalikan perilaku elemen HTML dan CSS.', 'JavaScript adalah bahasa pemrograman yang banyak digunakan untuk mengembangkan aplikasi web interaktif. Ia merupakan bahasa scripting yang berjalan di sisi klien (client-side) pada browser web, yang berarti kode JavaScript dieksekusi oleh browser di perangkat pengguna.\r\n\r\nBerikut adalah beberapa fitur dan karakteristik JavaScript:', 'Interaktivitas di Sisi Klien: JavaScript digunakan untuk memberikan interaksi pengguna yang dinamis pada halaman web. Dengan menggunakan JavaScript, pengembang dapat membuat elemen-elemen seperti tombol, formulir, animasi, perubahan konten, validasi input, dan banyak lagi.\r\n\r\nPemrograman Berbasis Objek: JavaScript mendukung paradigma pemrograman berbasis objek, di mana kode dapat diorganisir menjadi objek-objek yang memiliki properti dan metode. Hal ini memungkinkan pengembang untuk mengorganisir dan mengelola kode dengan lebih terstruktur dan modular.\r\n\r\nPenanganan Kejadian (Event Handling): JavaScript memungkinkan penanganan kejadian (event handling), di mana pengembang dapat menanggapi aksi pengguna seperti mengklik tombol, mengisi formulir, atau menggulir halaman. Dengan menggunakan event handling, aplikasi web dapat merespons interaksi pengguna dengan melakukan tindakan tertentu.\r\n\r\nManipulasi DOM: JavaScript memungkinkan pengembang untuk mengakses dan memanipulasi struktur dan konten halaman web melalui API Document Object Model (DOM). Dengan DOM, pengembang dapat menambahkan, menghapus, atau mengubah elemen HTML, mengubah gaya (CSS), dan memanipulasi data pada halaman web.\r\n\r\nValidasi Data: JavaScript dapat digunakan untuk melakukan validasi data pada sisi klien sebelum data dikirim ke server. Hal ini membantu memastikan bahwa input dari pengguna memenuhi persyaratan yang ditetapkan sebelum diproses lebih lanjut.\r\n\r\nKekayaan Ekosistem: JavaScript memiliki ekosistem yang kaya dengan banyak pustaka (library) dan kerangka kerja (framework) yang memperluas fungsionalitas dan memudahkan pengembangan aplikasi web. Contoh pustaka populer termasuk jQuery, React, Angular, dan Vue.js.\r\n\r\nCross-Platform: JavaScript dapat dijalankan di berbagai platform dan sistem operasi, termasuk Windows, macOS, Linux, Android, dan iOS. Hal ini membuat JavaScript menjadi bahasa yang populer dan luas digunakan dalam pengembangan aplikasi web.', 'JavaScript adalah salah satu bahasa pemrograman yang paling penting dan sering digunakan dalam pengembangan aplikasi web. Dengan kemampuannya dalam memberikan interaktivitas, manipulasi halaman web, dan berbagai fungsionalitas lainnya, JavaScript memainkan peran kunci dalam menciptakan pengalaman pengguna yang kaya dan dinamis di web.'),
(14, '9.webp', 'PHP', 'PHP adalah bahasa pemrograman skrip yang dirancang khusus untuk pengembangan aplikasi web. PHP singkatan dari \"Hypertext Preprocessor\". PHP dapat digunakan untuk membuat halaman web dinamis dengan menghasilkan konten berdasarkan permintaan pengguna.', 'PHP adalah bahasa pemrograman yang dirancang khusus untuk pengembangan aplikasi web. Singkatan dari \"PHP: Hypertext Preprocessor\", PHP digunakan untuk membuat konten web dinamis dan berinteraksi dengan basis data. PHP adalah bahasa pemrograman server-side, yang berarti kode PHP dieksekusi di sisi server sebelum hasilnya dikirim ke browser pengguna.\r\n\r\nBerikut adalah beberapa fitur dan karakteristik utama dari PHP:', 'Integrasi dengan HTML: PHP dapat disisipkan ke dalam kode HTML, sehingga memungkinkan pengembang untuk menghasilkan konten web dinamis. Dengan PHP, Anda dapat menulis kode PHP di dalam tag PHP (\"<?php\" dan \"?>\") untuk memproses logika, mengakses basis data, dan menghasilkan output yang akan ditampilkan di halaman web.\r\n\r\nKemampuan Pengolahan Formulir: PHP menyediakan fungsi dan fitur untuk mengambil data dari formulir yang diisi oleh pengguna. Pengembang dapat menggunakan PHP untuk memvalidasi input, memproses data, dan mengirim hasilnya ke basis data atau menghasilkan tanggapan yang sesuai kepada pengguna.\r\n\r\nKoneksi Basis Data: PHP memiliki dukungan yang kuat untuk menghubungkan aplikasi web dengan berbagai jenis basis data seperti MySQL, PostgreSQL, SQLite, dan banyak lainnya. Dengan PHP, Anda dapat melakukan operasi CRUD (Create, Read, Update, Delete) pada data dalam basis data, memungkinkan pengembang untuk mengembangkan aplikasi web yang berinteraksi dengan data.\r\n\r\nModularitas dan Reusabilitas: PHP mendukung pemrograman berbasis objek (OOP) yang memungkinkan pengembang untuk membagi kode ke dalam kelas-kelas yang terorganisir. Ini memfasilitasi pengembangan yang modular, memungkinkan kode PHP yang ada dapat digunakan kembali dalam berbagai bagian aplikasi.\r\n\r\nKekayaan Ekosistem: PHP memiliki ekosistem yang luas dengan berbagai pustaka dan kerangka kerja (framework) yang memperluas fungsionalitas dan mempercepat pengembangan aplikasi web. Beberapa kerangka kerja populer termasuk Laravel, Symfony, CodeIgniter, dan Yii.\r\n\r\nPortabilitas dan Cross-Platform: PHP dapat dijalankan di berbagai platform dan sistem operasi, termasuk Windows, macOS, Linux, dan banyak lainnya. Ini membuat PHP sangat fleksibel dan dapat diadopsi di berbagai lingkungan pengembangan.\r\n\r\nKomunitas yang Aktif: PHP memiliki komunitas pengembang yang besar dan aktif di seluruh dunia. Komunitas ini menyediakan sumber daya, tutorial, dokumentasi, dan dukungan untuk membantu pengembang PHP dalam mengatasi tantangan pengembangan aplikasi web.', 'PHP telah menjadi salah satu bahasa pemrograman yang paling populer untuk pengembangan aplikasi web, dan digunakan oleh banyak situs web terkenal seperti Facebook, WordPress, dan Wikipedia. Dengan kemampuannya dalam menghasilkan konten web dinamis dan berinteraksi dengan basis data, PHP adalah alat yang kuat untuk membangun aplikasi web yang interaktif dan berfungsional.'),
(15, '10.webp', 'Laravel', 'Laravel adalah salah satu (framework) aplikasi web berbasis PHP yang populer dan sangat kuat. Laravel dikembangkan dengan tujuan untuk mempermudah proses pengembangan aplikasi web dengan menyediakan sintaks yang ekspresif, konsisten, dan memperhatikan keamanan.', 'Laravel adalah kerangka kerja (framework) aplikasi web berbasis PHP yang dirancang untuk mempermudah pengembangan aplikasi web yang elegan dan efisien. Laravel menggunakan pola desain MVC (Model-View-Controller) yang memisahkan logika bisnis, tampilan, dan interaksi pengguna.\r\n\r\nBerikut adalah beberapa fitur dan manfaat utama dari Laravel:', 'Struktur Proyek yang Terstruktur: Laravel menyediakan struktur proyek yang terorganisir dengan konvensi nama yang konsisten. Ini membuat pengembangan aplikasi lebih mudah dan memudahkan kolaborasi antara pengembang.\r\n\r\nRouting yang Mudah: Laravel menyediakan sistem routing yang kuat dan ekspresif. Dengan menggunakan sintaks yang sederhana, pengembang dapat dengan mudah mendefinisikan rute URL untuk menghubungkan permintaan HTTP dengan kode yang sesuai.\r\n\r\nSintaks Eloquent ORM: Laravel dilengkapi dengan ORM (Object-Relational Mapping) yang disebut Eloquent. Eloquent menyederhanakan interaksi dengan basis data dengan menyediakan sintaks yang ekspresif dan intuitif untuk menjalankan operasi CRUD (Create, Read, Update, Delete).\r\n\r\nFitur Keamanan: Laravel memiliki berbagai fitur keamanan yang terintegrasi, termasuk proteksi terhadap serangan lintas situs scripting (XSS), serangan injeksi SQL, dan serangan lintas situs request forgery (CSRF). Ini membantu melindungi aplikasi dari ancaman keamanan umum.\r\n\r\nPembuatan dan Pengujian yang Mudah: Laravel menyediakan alat bawaan untuk memudahkan pembuatan dan pengujian aplikasi. Dengan bantuan fitur seperti Laravel Artisan (CLI), migrasi basis data, dan pustaka pengujian yang kuat, pengembang dapat dengan mudah mengelola dan menguji kode mereka.\r\n\r\nIntegrasi Pustaka Pihak Ketiga: Laravel memiliki dukungan yang kuat untuk integrasi pustaka pihak ketiga. Hal ini memungkinkan pengembang menggunakan berbagai pustaka populer seperti caching, notifikasi, autentikasi, dan lainnya untuk meningkatkan fungsionalitas aplikasi mereka.\r\n\r\nKomunitas yang Aktif: Laravel memiliki komunitas pengembang yang besar dan aktif. Komunitas ini menyediakan dokumentasi yang kaya, tutorial, paket ekstensi, forum diskusi, dan sumber daya lainnya untuk membantu pengembang dalam mempelajari dan mengembangkan aplikasi dengan Laravel.', 'Laravel telah menjadi salah satu kerangka kerja PHP yang paling populer dan banyak digunakan. Dengan filosofi \"elegan dan ekspresif\", Laravel memungkinkan pengembang untuk dengan cepat membangun aplikasi web yang kuat, skalabel, dan mudah dipelihara.'),
(16, '11.webp', 'Phyton', 'Python adalah bahasa pemrograman tujuan umum yang ditafsirkan, tingkat tinggi. Dibuat oleh Guido van Rossum dan pertama kali dirilis pada tahun 1991, filosofi desain Python menekankan keterbacaan kode dengan penggunaan spasi putih yang signifikan.', 'Python adalah bahasa pemrograman tingkat tinggi yang bersifat interpretatif dan memiliki sintaks yang sederhana dan mudah dipahami. Dibuat oleh Guido van Rossum pada tahun 1991, Python dirancang untuk memprioritaskan kejelasan dan keterbacaan kode, sehingga membuatnya sangat cocok untuk pemula yang baru memulai pemrograman.\r\n\r\nBerikut adalah beberapa fitur dan keunggulan Python:', 'Sintaks yang Sederhana: Python menggunakan sintaks yang bersifat jelas dan mudah dipahami. Hal ini membuat kode Python mudah dibaca dan dimengerti, bahkan oleh pemula.\r\n\r\nMudah Dipelajari: Python dirancang untuk memudahkan pemula dalam mempelajari pemrograman. Dengan penekanan pada kejelasan dan keterbacaan, Python dapat dianggap sebagai bahasa yang ramah pemula.\r\n\r\nDukungan Terhadap Banyak Platform: Python dapat dijalankan di berbagai sistem operasi, termasuk Windows, macOS, Linux, dan sebagainya. Hal ini membuat Python sangat fleksibel dalam pengembangan aplikasi.\r\n\r\nKaya dengan Pustaka dan Modul: Python memiliki ekosistem yang luas dengan banyak pustaka dan modul yang tersedia. Pustaka-pustaka ini menyediakan fungsionalitas yang kaya dan memperluas kemampuan dasar Python, seperti pemrosesan string, manipulasi data, kecerdasan buatan, analisis data, pengembangan web, dan masih banyak lagi.\r\n\r\nPemrograman Berorientasi Objek: Python mendukung pemrograman berorientasi objek, yang memungkinkan pengembang untuk mengorganisir kode dalam struktur yang lebih terstruktur dan modular. Konsep seperti kelas, objek, pewarisan, dan polimorfisme dapat diterapkan dengan mudah dalam Python.\r\n\r\nMulti-purpose: Python dapat digunakan untuk berbagai jenis proyek, mulai dari pengembangan aplikasi desktop, web, hingga pemrosesan data dan kecerdasan buatan. Kemampuan Python yang serbaguna membuatnya menjadi salah satu bahasa pemrograman yang populer di berbagai bidang.\r\n\r\nKomunitas yang Aktif: Python memiliki komunitas pengembang yang besar dan aktif. Komunitas ini menyediakan berbagai sumber daya, dokumentasi, tutorial, dan forum diskusi untuk membantu pengembang dalam belajar, berbagi pengetahuan, dan memecahkan masalah yang mungkin mereka hadapi.', 'Python telah menjadi bahasa pemrograman yang populer dan banyak digunakan dalam industri perangkat lunak dan ilmu data. Dengan kejelasan sintaksisnya, kemudahan dalam mempelajarinya, dan kemampuan yang luas, Python menjadi pilihan yang menarik bagi pengembang untuk mengembangkan berbagai jenis aplikasi.'),
(17, '12.webp', 'Web Developer', 'Seorang web developer adalah seorang profesional yang terlibat dalam pengembangan aplikasi web. Mereka bertanggung jawab untuk merancang, mengembangkan, dan memelihara situs web dan aplikasi web yang berfungsi dengan baik.\r\n', 'Seorang web developer adalah seorang profesional yang bertanggung jawab untuk mengembangkan dan memelihara aplikasi atau situs web. Mereka memiliki pemahaman yang mendalam tentang teknologi web dan bahasa pemrograman yang digunakan untuk menghasilkan konten interaktif dan fungsional di web.\r\n\r\nTugas utama seorang web developer meliputi:', 'Pengembangan Front-end: Seorang web developer merancang dan mengembangkan tampilan depan (front-end) dari sebuah situs web. Mereka menggunakan HTML, CSS, dan JavaScript untuk membuat struktur, tata letak, dan gaya visual yang menarik dan responsif.\r\n\r\nPengembangan Back-end: Seorang web developer juga terlibat dalam pengembangan back-end, yang melibatkan pemrosesan data, pengelolaan basis data, dan logika bisnis aplikasi. Mereka menggunakan bahasa pemrograman seperti PHP, Python, Ruby, atau Java untuk membangun fungsi dan layanan yang mendukung interaksi pengguna dengan situs web.\r\n\r\nIntegrasi dengan Basis Data: Web developer sering berhubungan dengan sistem basis data, baik itu MySQL, PostgreSQL, MongoDB, atau sistem basis data lainnya. Mereka menggunakan bahasa dan alat yang sesuai untuk menghubungkan aplikasi dengan basis data, menyimpan dan mengambil data, serta memproses informasi.\r\n\r\nPembuatan dan Pemeliharaan Situs Web: Seorang web developer bertanggung jawab untuk membuat situs web yang fungsional dan mudah digunakan. Mereka memastikan bahwa semua elemen dan komponen situs berfungsi dengan baik, mengoptimalkan performa, serta memastikan keamanan dan keandalan situs web.\r\n\r\nPengujian dan Debugging: Seorang web developer melakukan pengujian dan debugging untuk memastikan bahwa situs web berfungsi sebagaimana mestinya dan tidak ada bug atau masalah yang mengganggu. Mereka menggunakan alat pengujian dan teknik debugging untuk mengidentifikasi dan memperbaiki masalah yang muncul.\r\n\r\nPemeliharaan dan Pembaruan: Setelah situs web selesai dikembangkan, seorang web developer terus memantau dan melakukan pemeliharaan untuk memastikan kinerjanya tetap optimal. Mereka juga bertanggung jawab untuk memperbarui situs web dengan fitur baru, keamanan terbaru, dan perbaikan bug sesuai kebutuhan.', 'Seorang web developer biasanya memiliki pemahaman yang baik tentang HTML, CSS, JavaScript, serta bahasa pemrograman back-end seperti PHP, Python, atau Ruby. Mereka juga menguasai alat pengembangan web seperti framework, pustaka, dan CMS (Content Management System) yang membantu dalam proses pengembangan situs web yang lebih efisien dan cepat.\r\n\r\nSelain itu, seorang web developer juga perlu memiliki keterampilan dalam desain responsif, optimisasi kinerja, keamanan web, serta pemahaman tentang SEO (Search Engine Optimization) untuk memastikan situs web dapat ditemukan dan diakses dengan baik oleh pengguna.\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),
(18, '13.webp', 'Mobile Developer', 'Mengembangkan tampilan antarmuka aplikasi menggunakan bahasa pemrograman agar aplikasi mendukung segala macam smartphone. Merawat dan melakukan perubahan secara berkala agar fungsionalitas aplikasi terjaga.', 'Seorang mobile developer adalah seorang profesional yang bertanggung jawab untuk mengembangkan aplikasi mobile untuk berbagai platform, seperti iOS (Apple), Android (Google), atau Windows (Microsoft). Mereka memiliki pengetahuan dan keterampilan dalam pengembangan perangkat lunak khusus untuk perangkat mobile, termasuk ponsel pintar dan tablet.\r\n\r\nTugas utama seorang mobile developer meliputi:', 'Pengembangan Aplikasi Mobile: Seorang mobile developer menggunakan bahasa pemrograman seperti Swift atau Objective-C untuk iOS, Java atau Kotlin untuk Android, atau C# untuk Windows untuk mengembangkan aplikasi mobile. Mereka merancang, membangun, dan mengimplementasikan fitur-fitur aplikasi yang mencakup antarmuka pengguna, fungsionalitas, integrasi dengan layanan web, dan pengolahan data.\r\n\r\nUI/UX Design: Mobile developer juga terlibat dalam desain antarmuka pengguna (UI) dan pengalaman pengguna (UX) aplikasi mobile. Mereka bekerja sama dengan desainer UI/UX untuk menciptakan tata letak yang intuitif, menarik, dan responsif, serta memastikan pengalaman pengguna yang optimal.\r\n\r\nIntegrasi Layanan dan API: Mobile developer mengintegrasikan aplikasi mobile dengan berbagai layanan pihak ketiga dan API (Application Programming Interface). Mereka menghubungkan aplikasi dengan layanan seperti penyimpanan cloud, layanan autentikasi, pemrosesan pembayaran, pengiriman notifikasi, dan banyak lagi.\r\n\r\nPengujian dan Debugging: Seorang mobile developer melakukan pengujian dan debugging aplikasi mobile untuk memastikan kinerjanya yang baik dan menemukan serta memperbaiki bug atau masalah yang muncul. Mereka menggunakan alat pengujian dan teknik debugging untuk memastikan aplikasi berjalan dengan lancar di berbagai perangkat mobile dan sistem operasi.\r\n\r\nPemeliharaan dan Pembaruan: Setelah aplikasi mobile selesai dikembangkan, mobile developer bertanggung jawab untuk pemeliharaan dan pembaruan berkelanjutan. Mereka memastikan aplikasi tetap kompatibel dengan perangkat dan sistem operasi terbaru, serta mengimplementasikan perbaikan, peningkatan fitur, dan keamanan aplikasi sesuai kebutuhan.\r\n\r\nOptimalisasi Kinerja: Mobile developer bertanggung jawab untuk mengoptimalkan kinerja aplikasi mobile agar berjalan dengan cepat, responsif, dan efisien. Mereka mengidentifikasi dan mengatasi masalah kecepatan, penggunaan memori, konsumsi daya baterai, dan faktor-faktor lain yang dapat mempengaruhi performa aplikasi.', 'Selain bahasa pemrograman dan kerangka pengembangan aplikasi mobile, seorang mobile developer juga perlu memiliki pemahaman tentang desain responsif, prinsip UI/UX, keamanan aplikasi mobile, serta pemahaman tentang tren dan perkembangan terbaru di industri mobile.\r\n\r\nPada umumnya, seorang mobile developer memiliki spesialisasi dalam satu atau beberapa platform, seperti iOS atau Android, namun juga dapat memiliki pengetahuan lintas platform untuk mengembangkan aplikasi yang kompatibel dengan berbagai sistem operasi mobile.'),
(19, '14.webp', ' Desain UI/UX', ' Desain UI berfokus pada elemen visual dan tata letak antarmuka pengguna, sedangkan desain UX berfokus pada pengalaman pengguna secara keseluruhan, termasuk kepuasan, kenyamanan, dan efektivitas penggunaan produk.', 'Desain antarmuka pengguna (UI) dan pengalaman pengguna (UX) adalah elemen penting dalam pengembangan aplikasi dan situs web. UI merujuk pada tampilan visual dan interaksi pengguna dengan elemen-elemen antarmuka, sedangkan UX mencakup pengalaman pengguna secara keseluruhan, termasuk kepuasan, kemudahan penggunaan, dan efisiensi dalam menggunakan produk atau layanan.\r\n\r\nBerikut adalah beberapa prinsip dan aspek penting dalam desain UI/UX:', 'Penyelarasan dengan Target Pengguna: Desain UI/UX harus mempertimbangkan kebutuhan, preferensi, dan perilaku pengguna target. Memahami audiens target, termasuk demografi, tingkat keahlian teknis, dan preferensi desain, membantu dalam membuat antarmuka yang relevan dan menarik bagi pengguna.\r\n\r\nKonsistensi dan Keselarasan: Desain UI/UX harus konsisten di seluruh aplikasi atau situs web. Konsistensi dalam hal tata letak, gaya visual, ikon, dan perilaku antarmuka pengguna memberikan pengalaman yang lebih lancar dan mudah dipahami.\r\n\r\nSederhana dan Intuitif: Antarmuka pengguna harus sederhana, mudah dipahami, dan intuitif. Pengguna harus dengan mudah menavigasi, menemukan informasi yang dibutuhkan, dan menggunakan fitur-fitur aplikasi dengan sedikit atau tanpa kesulitan. Prinsip \"keep it simple\" (KISS) sering digunakan untuk menghindari kompleksitas yang tidak perlu.\r\n\r\nHierarki Visual: Desain UI harus menggunakan hierarki visual untuk mengarahkan perhatian pengguna pada elemen penting dan memudahkan pemahaman informasi. Penggunaan ukuran, warna, kontras, dan penempatan elemen secara strategis membantu pengguna dalam memahami hierarki informasi.\r\n\r\nResponsif dan Adaptif: Desain UI/UX harus responsif, yaitu mampu menyesuaikan tampilan dan interaksi dengan berbagai perangkat dan ukuran layar. Desain yang responsif memastikan pengalaman pengguna yang optimal di desktop, tablet, dan perangkat seluler.\r\n\r\nTesting dan Iterasi: Desain UI/UX yang baik melibatkan pengujian dengan pengguna nyata untuk mengidentifikasi masalah, kesalahan, dan area perbaikan. Dengan mengumpulkan umpan balik dari pengguna, desain dapat diperbaiki dan ditingkatkan melalui iterasi yang berulang.\r\n\r\nVisual yang Menarik: Desain UI/UX yang menarik secara visual dapat mempengaruhi kesan pertama pengguna dan meningkatkan keterlibatan. Penggunaan warna, tipografi, ikon, dan elemen visual lainnya harus dipilih dengan cermat untuk menciptakan tampilan yang menarik dan membangun identitas merek yang konsisten.\r\n\r\nAksesibilitas: Desain UI/UX harus memperhatikan aksesibilitas untuk memastikan bahwa pengguna dengan berbagai kemampuan dan kebutuhan dapat menggunakan aplikasi atau situs web dengan mudah. Ini termasuk mempertimbangkan kontras warna yang memadai, kemampuan navigasi dengan keyboard, teks alternatif untuk gambar, dan fitur aksesibilitas lainnya.\r\n\r\nPenggunaan Animasi dan Transisi yang Tepat: Animasi dan transisi yang disesuaikan dengan konteks penggunaan dapat meningkatkan pengalaman pengguna dan memberikan umpan balik visual yang berguna. Namun, penggunaan animasi harus dilakukan secara bijak dan tidak mengganggu fungsionalitas atau kecepatan penggunaan.\r\n\r\nPengujian Pengguna: Menggunakan metode pengujian pengguna seperti wawancara, observasi, dan pengumpulan umpan balik dapat membantu dalam memahami kebutuhan dan preferensi pengguna, serta mengidentifikasi masalah dalam desain UI/UX yang perlu diperbaiki.', 'Desain UI/UX yang baik mengintegrasikan aspek fungsional, estetika, dan pengalaman pengguna yang optimal. Tujuan utamanya adalah menciptakan antarmuka yang mudah digunakan, menarik, dan memenuhi kebutuhan pengguna dengan sebaik mungkin.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `gambar`, `username`, `email`, `password`, `id_role`) VALUES
(18, 'batu.webp', 'rafli', 'rafliramdhani773@gmail.com', '$2y$10$pfKde2nNJX7IQK0Z4GBwxefDu4nJq5A.xSJhivUech4k8f2Kx5lTW', 1),
(21, '17.webp', 'udin', 'udin69@gmail.com', '$2y$10$Awco75Gs0oW0q6HfDLPxt.8OcsBYJmhbaw7qH1atJOu.C6o0OEmgG', 2),
(22, '', 'petot1', 'petot@gmail.com', '$2y$10$.sS/YjW35HUoKAP8MR0rx.R3jxjuiCczlHe2CQEWzI/WuCe2khE9m', 2),
(23, '', 'tes1', 'tes@gmail.com', '$2y$10$rCT9KO88Gk3aYT8y932I7ucQ78Ct81BeEbyaymHr4a4lQDtvCKxwy', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `populer`
--
ALTER TABLE `populer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tampilan`
--
ALTER TABLE `tampilan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `populer`
--
ALTER TABLE `populer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tampilan`
--
ALTER TABLE `tampilan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
