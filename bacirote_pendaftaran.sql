-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 10 Bulan Mei 2019 pada 01.49
-- Versi server: 10.0.38-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bacirote_pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `namaMember` varchar(100) NOT NULL,
  `noHp` varchar(20) NOT NULL,
  `tglLahir` date NOT NULL,
  `emailMember` varchar(50) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `noKtp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `namaMember`, `noHp`, `tglLahir`, `emailMember`, `jenisKelamin`, `noKtp`) VALUES
(1, 'toni', '2147483647', '1992-03-06', 'tonibuzt@gmail.com', 'Laki-Laki', '2147483647'),
(2, 'tes', '8111111', '2000-06-26', 'tini@gmail.com', 'Perempuan', '2147483647'),
(3, 'tes lagi', '085643410511', '1994-05-16', 'tinibuzt@gmail.com', 'Laki-Laki', '2147483647');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(16) NOT NULL DEFAULT '',
  `translation` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `message`
--

INSERT INTO `message` (`id`, `language`, `translation`) VALUES
(1, 'en', 'English Language'),
(1, 'id', 'Bahasa Indonesia'),
(2, 'en', 'Call Doctor From Home'),
(2, 'id', 'Panggil Dokter, Perawat, Bidan dan Fisioterapi ke ke Rumah Anda'),
(3, 'en', 'Services Excellence'),
(3, 'id', 'Keunggulan Layanan'),
(4, 'en', 'Available Servicess'),
(4, 'id', 'LAYANAN KESEHATAN YANG TERSEDIA'),
(5, 'en', 'How To Use'),
(5, 'id', 'Cara Menggunakan'),
(6, 'en', 'User Testimonial'),
(6, 'id', 'Tanggapan Pengguna'),
(7, 'en', 'Has Been Covered By'),
(7, 'id', 'TELAH DILIPUT OLEH'),
(8, 'en', 'HOME'),
(8, 'id', 'BERANDA'),
(9, 'en', 'About'),
(9, 'id', 'Tentang'),
(10, 'en', 'Services'),
(10, 'id', 'Layanan'),
(11, 'en', 'Testimonial'),
(11, 'id', 'Testimonial'),
(12, 'en', 'Blog'),
(12, 'id', 'Blog'),
(13, 'en', 'Register As Partner'),
(13, 'id', 'Bergabung Sebagai Partner'),
(14, 'en', 'Via Application | For Jakarta, Bogor, Tangerang, Bekasi, & Bali.'),
(14, 'id', 'Tersedia di Jakarta, Bogor, Depok, Tangerang, Bekasi, Yogyakarta, Surabaya & Bali.'),
(15, 'en', 'Home Visit Service / Home Care <br> No.#1 in Indonesian'),
(15, 'id', 'Layanan Home Visit / Home Care <br> Via Aplikasi <br>\r\npertama di Indonesia'),
(16, 'en', 'Need to Request A health care ? <br> We Provide Doctor-Visit Service Home Visit/Home Care Every Day,\r\nNearest From Your Location. via application or contact call center medicall :'),
(16, 'id', 'Membutuhkan layanan kesehatan di rumah?<br>Panggil Dokter, Perawat, Bidan, Klinik, Lab<br>dan lainnya via app'),
(17, 'en', 'Medi-Call - Call Doctor, Nurse, Midwife and Physioteraphist'),
(17, 'id', 'MEDI-CALL Panggil Dokter, Perawat, Bidan dan Fisioterapi ke Rumah Anda'),
(18, 'en', '\"More Convenient, No Queueing\"'),
(18, 'id', '\"Lebih Nyaman Tanpa Antre!\"'),
(19, 'en', 'Transparent fare, reliable service, <br> and high quality'),
(19, 'id', 'Tarif transparan, layanan handal, <br> dan berkualitas'),
(20, 'en', 'For quick access, <br> contact call center:'),
(20, 'id', 'Untuk akses cepat,<br>hubungi call center :'),
(21, 'en', 'Click icon to see the detail <br> of every available service'),
(21, 'id', 'klik icon untuk melihat detail<br>setiap layanan yang tersedia'),
(22, 'en', 'All medical personnels<br> in our service <br>are registered and licensed.'),
(22, 'id', 'Seluruh tenaga Dokter, Perawat, Bidan, dan Fisioterapi yang tergabung dalam layanan kami telah terdaftar & bersertifikat'),
(23, 'en', 'WE FIGHT FOR MEDICAL <br> PERSONNEL\'S WELFARE'),
(23, 'id', 'KAMI MEMPERJUANGKAN <br> KESEJAHTERAAN TENAGA MEDIS <br> DI SELURUH INDONESIA'),
(24, 'en', 'DOCTOR, NURSE, MIDWIFE, <br> CLINIC/ASSOCIATE, AND PHARMACY'),
(24, 'id', 'DOKTER, PERAWAT, BIDAN, <br> KLINIK/ASSOCIATE, dan APOTEK'),
(25, 'en', 'Join Medi-Call Partner. Get the chance to provide medical service <br> right at patient\'s location safely, nearest, and flexible.'),
(25, 'id', 'Bergabunglah menjadi Medi-Call Partner. Dapatkan kesempatan memberikan layanan kesehatan <br> langsung di lokasi pasien, secara aman, terdekat & fleksibel.'),
(26, 'en', 'CALL DOCTOR, CLINIC, NURSE, MIDWIFE, MEDICINE DELIVERY, AND LAB CHECK'),
(26, 'id', 'PANGGIL DOKTER, KLINIK, PERAWAT, BIDAN, DELIVERY OBAT, DAN PEMERIKSAAN LAB'),
(27, 'en', 'NOW ON YOUR SMARTPHONE'),
(27, 'id', 'SEKARANG BISA MELALUI SMARTPHONE'),
(28, 'en', 'Medi-Call is an application that connects Patient and Doctor or other medical personnel so they can go to the patient\'s location as soon as possible (home visit). Medi-Call application connects patient and the nearest doctor with quick respond time. Medi-Call Application has online/offline feature which can be adjusted to the time availability of every medical personnels joined in Medi-Call. If you have never provided home visit before, right now you can start it with Medi-Call. The latest Home Visit method created by Medi-Calll in revolutionizing health service in Indonesia at this moment makes it easier to access health service in Indonesia.'),
(28, 'id', 'Medi-Call merupakan aplikasi penghubung Pasien dengan Dokter atau tenaga kesehatan lainnya agar langsung menuju lokasi Pasien (Home Visit).\r\nAplikasi Medi-Call menghubungkan Pasien dengan Dokter di lokasi terdekat dengan respond time yang cepat.\r\nAplikasi Medi-Call memiliki fitur online/offline yang dapat disesuaikan dengan ketersediaan waktu yang dimiliki oleh setiap tenaga kesehatan yang bergabung di Medi-Call.\r\nJika Anda belum pernah menyediakan layanan Home Visit, saat ini anda dapat memulainya bersama Medi-Call. Metode Home Visit terbaru yang diciptakan Medi-Call dalam merevolusi pelayanan kesehatan di Indonesia saat ini tentunya mempermudah akses layanan kesehatan di Indonesia.'),
(29, 'en', 'BENEFITS OF JOINING <br> MEDI-CALL'),
(29, 'id', 'KELEBIHAN BERGABUNG <br> DI MEDI-CALL'),
(30, 'en', 'Time Flexibility (offline/online as you like)'),
(30, 'id', 'Fleksibilitas waktu (Bisa Online Kapanpun dan Dimanapun)'),
(31, 'en', 'No Minimum Online Hour Everyday'),
(31, 'id', 'Tidak ada kewajiban untuk online dalam waktu tertentu setiap harinya'),
(32, 'en', 'Getting patient request in the distance of 10KM only'),
(32, 'id', 'Hanya bisa menerima request pasien dalam jarak maksimal sampai 10km'),
(33, 'en', 'Legal Assistance'),
(33, 'id', 'Bantuan Hukum'),
(34, 'en', 'Upgrade Knowledge by training/seminar'),
(34, 'id', 'Upgrade knowledge melalui pelatihan/seminar'),
(35, 'en', 'Medical Doctor, Nurse, Midwife, Phisyoteraphis'),
(35, 'id', 'Dokter Umum, Perawat, Bidan, dan Fisioterapi.'),
(36, 'en', 'Attaining active SIP (Medical license) and STR (Registration Certificate) in Jabodetabek/Bali)'),
(36, 'id', 'Memiliki SIP dan STR (Khusus Dokter)'),
(37, 'en', 'Age 26-45 years old'),
(37, 'id', 'Berusia 26-45 tahun'),
(38, 'en', 'Using Android/iOS'),
(38, 'id', 'Menggunakan Android/iOS'),
(39, 'en', 'MEDI-CALL PARTNER'),
(39, 'id', 'MITRA MEDI-CALL'),
(40, 'en', 'MEDI-CALL, NEAREST, FLEXIBLE'),
(40, 'id', 'MEDI-CALL, TERDEKAT, FLEKSIBEL'),
(41, 'en', 'RIGHT AT THE PATIENT\'S LOCATION'),
(41, 'id', 'LANGSUNG DI LOKASI PASIEN'),
(42, 'en', 'HAS BEEN REPORTED BY CNN INDONESIA'),
(42, 'id', 'TELAH DILIPUT OLEH <br> CNN INDONESIA'),
(43, 'en', 'Medi-Call is officially operating in Bali and Jakarta. For doctors. nurse, and midwife who want to join Medi-Call partner in JABODETABEK. Joining Medi-Call now is free of charge. We will give our partner many benefits such as facility need to go online, seminar information, the latest health information, and patient request from the nearest location around you.'),
(43, 'id', '<p>Medi-call saat ini akan beroperasi secara bertahap diseluruh Indonesia.</p>\r\n				    	<p>Bagi para Dokter, Perawat, Bidan, dan Fisioterapi yang ingin bergabung menjadi partner Medi- Call di seluruh Indonesia, bisa mendaftar di web ini.</p>\r\n				    	<p>Bergabung dengan Medi-Call saat ini tidak dipungut biaya apapun (FREE).</p>\r\n				    	<p>Kami akan memberikan partner kami benefit berupa fasilitas yang dibutuhkan untuk ONLINE,</p>\r\n				    	<p>sehingga bisa menerima request pasien terdekat dari lokasi anda.</p>'),
(44, 'en', 'Soft launching Medi-Call Bali held on 15 December 2016 at Mangsi Coffee, Denpasar, Bali was inaugurated by the elected chief of PB IDI central, dr. Daeng Mohammad Faqih, S.H,. M.H.'),
(44, 'id', 'Soft Launching Medi-Call Bali tanggal 15 Desember 2016 di Mangsi Coffee, Denpasar, Bali diresmikan oleh Ketua PB IDI Pusat Terpilih dr. Daeng Mohammad Faqih, S.H., M.H.'),
(45, 'en', 'Grand launching Medi-Call Jakarta was held on 18 February 2017 at Puri Denpasar Hotel, Jakarta, Kuningan and the elected chief of PB IDI central, dr. Daeng Mohammad Faqih, S.H,. M.H. gave his speech, and was directly inaugurated by the Directorate General of the Ministry of Communications and Informatics, Semuel Abrijani Pengerapan, B.Sc.'),
(45, 'id', 'Grand Launching Medi-Call Jakarta tanggal 18 Februari 2017 di Puri Denpasar Hotel Jakarta, Kuningan dan Ketua PB IDI Pusat Terpilih dr. Daeng Mohammad Faqih, S.H., M.H memberikan pidato sambutannya serta diresmikan secara langsung oleh Direktorat Jenderal Kementerian Komunikasi dan Informatika Semuel Abrijani Pengerapan, B.Sc.'),
(46, 'en', 'OPEN RECRUITMENT <br> FOR JAKARTA & BALI, WITH REQUIREMENTS:'),
(46, 'id', 'MEMBUKA REKRUTMEN <br> UNTUK SELURUH INDONESIA, DENGAN PERSYARATAN :'),
(47, 'en', 'attaining SIP (medical license) & STR (registration certificate)'),
(47, 'id', 'Mempunyai SIP & STR'),
(48, 'en', 'having private android phone'),
(48, 'id', 'Mempunyai HP Android Pribadi'),
(49, 'en', 'having private vehicle'),
(49, 'id', 'Mempunyai Kendaraaan Pribadi'),
(50, 'en', 'valid clinic/associate official license according to the local registration.'),
(50, 'id', 'Ijin Resmi Klinik/Associate sesuai Peraturan Setempat yang masih berlaku.'),
(51, 'en', 'having standardized On-call facility'),
(51, 'id', 'Fasilitas On-Call Terstandarisasi'),
(52, 'en', 'having medicine delivery service '),
(52, 'id', 'Melayani Pengantaran Obat'),
(53, 'en', 'Valid pharmacy permit license according to the local regulation'),
(53, 'id', 'Ijin Resmi Apotek sesuai Peraturan Setempat yang masih berlaku.'),
(54, 'en', 'having courier vehicle'),
(54, 'id', 'Mempunyai Kendaraan Kurir'),
(55, 'en', 'LABORATORY'),
(55, 'id', 'LABORATORIUM'),
(56, 'en', 'Valid laboratory license according to the local regulation'),
(56, 'id', 'Ijin Resmi Laboratorium sesuai Peraturan Setempat yang masih berlaku.'),
(57, 'en', 'attaining Nurse practice license (SIPP), attaining nurse STR (registration certificate)'),
(57, 'id', 'Surat Izin Praktik – Perawat (SIPP), mempunyai STR Perawat'),
(58, 'en', 'Attaining SIPB (Midwife\'s License) and STR (Registration certificate) for MIdwife'),
(58, 'id', 'Surat Izin Praktik Bidan (SIPB), dan STR Bidan'),
(59, 'en', 'JOIN US! <br> FREE WITHOUT CHARE'),
(59, 'id', 'BERGABUNGLAH BERSAMA KAMI! <br> FREE TANPA BIAYA PENDAFTARAN'),
(60, 'en', 'Medi-Call invites all doctors and health provider (clinic/joint practice, pharmacy) and other medical personnels (nurse & midwife) to join Medi-Call Partner'),
(60, 'id', 'Medi-Call mengajak rekan dokter dan provider (klinik / praktek bersama, apotek)<br>dan tenaga kesehatan lainnya (perawat & bidan)<br>untuk bergabung menjadi Medi-Call Partner'),
(61, 'en', 'Full Name (required, add title)'),
(61, 'id', 'Nama Lengkap Tenaga Kesehatan (wajib, disertakan dengan gelar)'),
(62, 'en', 'Registering as'),
(62, 'id', 'Mendaftar Sebagai'),
(67, 'en', 'BENEFITS OF JOINING <br> MEDI-CALL'),
(67, 'id', 'SYARAT BERGABUNG <br> DI MEDI-CALL'),
(68, 'en', 'Date of Birth'),
(68, 'Id', 'Tanggal Lahir'),
(69, 'en', 'Document owned'),
(69, 'id', 'Dokumen Yang Dimiliki '),
(70, 'en', 'Address of Practice Clinic (According to SIP or permission license attained) **not house address'),
(70, 'id', 'Alamat Tempat Praktek (Sesuai SIP atau Surat Perijinan yang dimiliki)'),
(71, 'en', 'not house address'),
(71, 'id', 'BUKAN ALAMAT RUMAH'),
(72, 'en', 'Email (required)'),
(72, 'id', 'Email (wajib)'),
(73, 'en', 'Type of Private Vehicle'),
(73, 'id', 'Kendaraan Pribadi Yang Anda Miliki'),
(74, 'en', 'University / Alumnee'),
(74, 'ie', 'Universitas / Alumni'),
(75, 'en', 'Year of Graduation'),
(75, 'id', 'Tahun Lulus'),
(76, 'en', 'active phone/whatsapp number'),
(76, 'id', 'Nomor Handphone / WhatsApp Yang Aktif'),
(77, 'en', 'City'),
(77, 'id', 'Kota'),
(78, 'en', 'How do you know Medi-Call?'),
(78, 'id', 'Darimana Anda Mengetahui Medicall?'),
(79, 'en', 'Operating system of your smartphoe'),
(79, 'ie', 'Operating System yang dipakai di Smartphone Anda'),
(80, 'en', 'About'),
(80, 'id', 'Tentang'),
(81, 'en', 'Services'),
(81, 'id', 'Layanan'),
(82, 'en', 'Testimonial'),
(82, 'id', 'Testimonial'),
(83, 'en', 'Article'),
(83, 'id', 'Blog'),
(84, 'en', 'Register As Partner Medicall'),
(84, 'id', 'Daftar Sebagai Dokter, Perawat, Bidan, & Fisioterapi'),
(85, 'en', 'Available in Area'),
(85, 'id', 'TERSEDIA DI AREA'),
(86, 'en', 'Panggil Dokter ke Rumah, Villa, Hotel, dan Apartment Anda'),
(86, 'id', 'Panggil Dokter ke Rumah, Villa, Hotel, dan Apartment Anda'),
(87, 'en', 'Layanan Panggil Dokter ke lokasi anda dalam wilayah berikut :'),
(87, 'id', 'Layanan Panggil Dokter ke lokasi anda dalam wilayah berikut :'),
(88, 'en', 'DOCTOR PROFILE'),
(88, 'id', 'PROFIL DOKTER'),
(89, 'en', 'Medi-Call Doctor'),
(89, 'id', 'Dokter Medi-Call'),
(90, 'en', 'SERVICES PRICE'),
(90, 'id', 'TARIF LAYANAN'),
(91, 'en', 'Basic Fee <br> (Tarif Dasar Dokter)'),
(91, 'id', 'Basic Fee <br> (Tarif Dasar Dokter)'),
(92, 'en', 'Panggilan dokter ke lokasi pasien yang di request melalui Fitur dalam Medi-Call.'),
(92, 'id', 'Panggilan dokter ke lokasi pasien yang di request melalui Fitur dalam Medi-Call.'),
(93, 'en', 'START FROM Rp.200.000++'),
(93, 'id', 'MULAI Rp.220.000++'),
(94, 'en', 'MENGAPA PANGGIL <br> DOKTER MEDI-CALL ?'),
(94, 'id', 'MENGAPA PANGGIL <br> DOKTER MEDI-CALL ?'),
(95, 'en', 'HOW ABOUT<br> RESEP & DELIVERY DRUG?'),
(95, 'id', 'BAGAIMANA DENGAN <br> RESEP & PENGANTARAN OBAT?'),
(96, 'en', 'Medi-Call bekerjasama dengan 100 Jaringan Apotek K-24, tersebar di  Jabodetabek  & Bali.'),
(96, 'id', 'Medi-Call bekerjasama dengan 100 Jaringan Apotek K-24, tersebar di  Jabodetabek  & Bali.'),
(97, 'en', 'Dokter kirim Resep Obat'),
(97, 'id', 'Dokter kirim Resep Obat'),
(98, 'en', 'Obat Disiapkan Oleh K-24'),
(98, 'id', 'Obat Disiapkan Oleh K-24'),
(99, 'en', 'Pembayaran Obat di Tempat'),
(99, 'id', 'Pembayaran Obat di Tempat'),
(100, 'en', 'Cara Menggunakan <br><strong>Medi-Call</strong>'),
(100, 'id', 'Cara Menggunakan <br><strong>Medi-Call</strong>'),
(101, 'en', 'Medi-Call Doctor'),
(101, 'id', 'DOKTER KAMI'),
(102, 'en', 'List Partner<br>di Medi-Call'),
(102, 'id', 'List Partner<br>di Medi-Call'),
(103, 'en', 'PRICE DETIL'),
(103, 'id', 'DETAIL BIAYA'),
(104, 'en', 'Layanan Medi-Call <br> Biaya Terdiri <br> Apa Saja?'),
(104, 'id', 'Layanan Medi-Call <br> Biaya Terdiri <br> Apa Saja?'),
(105, 'en', 'Distance Fee'),
(105, 'id', 'Distance Fee'),
(106, 'en', 'WNA = WNI'),
(106, 'id', 'WNA = WNI'),
(107, 'en', 'Biaya Jarak < 5km : Free'),
(107, 'id', 'Biaya Jarak < 5km : Free'),
(108, 'en', 'Biaya Jarak >5km : Rp 10.000/km'),
(108, 'id', 'Biaya Jarak >5km : Rp 10.000/km'),
(109, 'en', 'Doctor Fee'),
(109, 'id', 'Doctor Fee'),
(110, 'en', 'WNI : 200K / visit'),
(110, 'id', 'WNI : 200K / visit'),
(111, 'en', 'WNA : 400K / visit'),
(111, 'id', 'WNA : 400K / visit'),
(112, 'en', 'Procedure Fee'),
(112, 'id', 'Procedure Fee'),
(113, 'en', 'Biaya jasa prosedur yang dikenakan dokter ke pasien. Untuk melihat daftar prosedur bisa dilihat di'),
(113, 'id', 'Biaya jasa prosedur yang dikenakan dokter ke pasien. Untuk melihat daftar prosedur bisa dilihat di'),
(114, 'en', 'link berikut ini.'),
(114, 'id', 'link berikut ini.'),
(115, 'en', 'Bagaimana Cara <br> Pembayarannya?'),
(115, 'id', 'Bagaimana Cara <br> Pembayarannya?'),
(116, 'en', 'Pembayaran dilakukan langsung kepada dokter Medi-Call yang datang ke rumah anda.'),
(116, 'id', 'Pembayaran dilakukan langsung kepada dokter Medi-Call yang datang ke rumah anda.'),
(117, 'en', 'Apakah Bisa <br> Menggunakan Asuransi?'),
(117, 'id', 'Apakah Bisa <br> Menggunakan Asuransi?'),
(118, 'en', 'Jika asuransi Anda mengcover rawat jalan, Anda dapat melakukan pembayaran dengan menggunakan asuransi tersebut.'),
(118, 'id', 'Jika asuransi Anda mengcover rawat jalan, Anda dapat melakukan pembayaran dengan menggunakan asuransi tersebut.'),
(119, 'en', '081210783387'),
(119, 'id', '08524133123'),
(120, 'en', 'Memiliki STR aktif (bagi Perawat, Bidan, dan Fisioterapi)'),
(120, 'id', 'Memiliki STR aktif (bagi Perawat, Bidan, dan Fisioterapi )'),
(121, 'en', 'Panggil Perawat ke Rumah, Villa, Hotel, dan Apartment Anda'),
(121, 'id', 'Panggil Perawat ke Rumah, Villa, Hotel, dan Apartment Anda'),
(122, 'en', 'Layanan Panggil Perawat ke lokasi anda dalam wilayah berikut :'),
(122, 'id', 'Layanan Panggil Perawat ke lokasi anda dalam wilayah berikut :'),
(123, 'en', 'MULAI Rp.120.000++'),
(123, 'id', 'MULAI Rp.120.000++'),
(124, 'en', '24 hours Doctor on call & Homecare Nurse in your Home'),
(124, 'id', 'Panggil Dokter 24 jam & Perawat Homecare ke Rumah Anda.'),
(125, 'en', 'Jobs For Doctors, Home Care Nurses & Medicall Porsonnel at Medi-Call'),
(125, 'id', 'Lowongan Dokter, Perawat Homecare, & tenaga medis di Medi-Call.'),
(126, 'en', 'Dokter 24 jam Home visit hanya di Aplikasi Medi-Call'),
(126, 'id', 'Dokter 24 jam Home visit hanya di Aplikasi Medi-Call'),
(127, 'en', 'Panggil Dokter Berkualitas Home Visit 24 Jam'),
(127, 'id', 'Panggil Dokter Berkualitas Home Visit 24 Jam'),
(128, 'en', 'Tarif Dokter Medi-Call Yang Transparant'),
(128, 'id', 'Tarif Dokter Medi-Call Yang Transparant'),
(129, 'en', 'Perawat Homecare Pelayanan 24 jam'),
(129, 'id', 'Perawat Homecare Pelayanan 24 jam'),
(130, 'en', 'Panggil Perawat Homecare Berkualitas Pelayanan 24 Jam'),
(130, 'id', 'Panggil Perawat Homecare Berkualitas Pelayanan 24 Jam'),
(131, 'en', 'Tarif Perawat Medi-Call Yang Transparant dan Terjangkau'),
(131, 'id', 'Tarif Perawat Medi-Call Yang Transparant dan Terjangkau'),
(132, 'en', 'Nurse Fee'),
(132, 'id', 'Nurse Fee'),
(133, 'en', 'WNI : 120k / visit'),
(133, 'id', 'WNI : 120k / visit'),
(134, 'en', 'WNA : 240k / visit'),
(134, 'id', 'WNA : 240k / visit'),
(135, 'en', 'Biaya jasa prosedur yang dikenakan perawat ke pasien. Untuk melihat daftar prosedur bisa dilihat di'),
(135, 'id', 'Biaya jasa prosedur yang dikenakan perawat ke pasien. Untuk melihat daftar prosedur bisa dilihat di'),
(136, 'en', 'inggrisss'),
(136, 'id', 'indonesah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permission`
--

CREATE TABLE `permission` (
  `permission_id` int(10) NOT NULL,
  `permission_name` varchar(30) NOT NULL,
  `group` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `permission`
--

INSERT INTO `permission` (`permission_id`, `permission_name`, `group`) VALUES
(2, 'user_view', 'user'),
(3, 'user_edit', 'user'),
(4, 'user_delete', 'user'),
(5, 'user_add', 'user'),
(17, 'role_view', 'role'),
(18, 'role_edit', 'role'),
(19, 'role_add', 'role'),
(20, 'role_delete', 'role'),
(21, 'permission_view', 'permission'),
(22, 'permission_edit', 'permission'),
(23, 'permission_add', 'permission'),
(25, 'permission_delete', 'permission'),
(61, 'settings', ''),
(43, 'report_view', 'Report'),
(57, 'banner', 'Banner'),
(62, 'kecamatan', 'wilayah'),
(63, 'desa', 'wilayah'),
(64, 'dusun', 'wilayah'),
(65, 'lampu', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `role_id` int(10) NOT NULL,
  `role_name` varchar(30) NOT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `description`) VALUES
(10, 'Superadmin', 'Super Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_permission`
--

CREATE TABLE `role_permission` (
  `id` int(10) NOT NULL,
  `role_id` varchar(20) NOT NULL,
  `permission_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role_permission`
--

INSERT INTO `role_permission` (`id`, `role_id`, `permission_id`) VALUES
(4, '10', 1),
(12, '10', 5),
(3, '10', 3),
(13, '10', 6),
(11, '10', 4),
(10, '10', 2),
(14, '10', 7),
(15, '10', 8),
(16, '10', 9),
(17, '10', 10),
(18, '10', 11),
(19, '10', 12),
(20, '10', 13),
(21, '10', 14),
(22, '10', 15),
(23, '10', 16),
(24, '10', 17),
(25, '10', 18),
(26, '10', 19),
(27, '10', 20),
(28, '7', 1),
(29, '8', 1),
(30, '8', 7),
(32, '10', 21),
(33, '10', 22),
(61, '10', 23),
(35, '2', 1),
(74, '11', 32),
(73, '11', 31),
(72, '10', 39),
(102, '2', 41),
(40, '8', 23),
(41, '10', 25),
(42, '10', 27),
(43, '10', 28),
(44, '10', 29),
(65, '10', 33),
(64, '10', 32),
(63, '10', 31),
(62, '10', 30),
(66, '10', 34),
(67, '10', 35),
(68, '10', 36),
(69, '10', 37),
(70, '10', 38),
(83, '11', 30),
(86, '12', 33),
(89, '4', 31),
(88, '11', 35),
(90, '4', 33),
(91, '4', 32),
(92, '4', 30),
(99, '4', 34),
(97, '3', 33),
(96, '4', 35),
(100, '10', 40),
(103, '10', 42),
(105, '10', 43),
(106, '3', 44),
(107, '3', 45),
(108, '3', 47),
(109, '13', 44),
(110, '14', 45),
(111, '14', 46),
(112, '15', 48),
(113, '15', 50),
(114, '16', 48),
(115, '16', 50),
(116, '17', 48),
(117, '17', 50),
(118, '15', 52),
(119, '15', 53),
(120, '16', 52),
(121, '16', 53),
(122, '17', 52),
(123, '17', 53),
(124, '10', 48),
(125, '10', 50),
(126, '10', 51),
(127, '10', 52),
(128, '10', 53),
(129, '10', 54),
(130, '10', 55),
(131, '10', 56),
(132, '10', 57),
(133, '10', 58),
(134, '10', 59),
(135, '10', 60),
(136, '10', 61),
(137, '10', 62),
(138, '10', 63),
(139, '10', 64),
(140, '10', 65),
(141, '18', 2),
(142, '18', 3),
(143, '18', 4),
(144, '18', 5),
(145, '18', 17),
(146, '18', 18),
(147, '18', 19),
(148, '18', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `source_message`
--

CREATE TABLE `source_message` (
  `id` int(11) NOT NULL,
  `category` varchar(32) DEFAULT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `source_message`
--

INSERT INTO `source_message` (`id`, `category`, `message`) VALUES
(0, '', ''),
(1, 'subtitle', 'multi bahasa'),
(2, 'judul', 'section callcenter'),
(3, 'judul', 'section keunggulan'),
(4, 'judul', 'section layanan'),
(5, 'judul', 'section penggunaan'),
(6, 'judul', 'section testimonial'),
(7, 'judul', 'section video'),
(8, 'menuheader', 'beranda'),
(9, 'menuheader', 'tentang'),
(10, 'menuheader', 'keunggulan'),
(11, 'menuheader', 'video'),
(12, 'menuheader', 'artikel'),
(13, 'menuheader', 'daftarpartner'),
(14, 'subjudul', 'section callcenter'),
(15, 'title', 'section callcenter'),
(16, 'isicontent', 'section callcenter'),
(17, 'judulcontent', 'tentang'),
(18, 'title', 'Lebih Nyaman Tanpa Antre!'),
(19, 'title', 'Tarif transparan dll'),
(20, 'title', 'Untuk akses cepat'),
(21, 'title', 'klik icon'),
(22, 'title', 'Seluruh tenaga medis'),
(23, 'title', 'KAMI MEMPERJUANGKAN KESEJAHTERAAN TENAGA MEDIS'),
(24, 'title', 'DOKTER, PERAWAT, BIDAN, KLINIK/ASSOCIATE, dan APOTEK'),
(25, 'title', 'Bergabunglah menjadi Medi-Call Partner'),
(26, 'title', 'PANGGIL DOKTER'),
(27, 'title', 'SEKARANG BISA MELALUI SMARTPHONE'),
(28, 'title', 'Medi-Call merupakan aplikasi penghubung Pasien'),
(29, 'title', 'KELEBIHAN BERGABUNG  DI MEDI-CALL'),
(30, 'title', 'Fleksibilitas waktu'),
(31, 'title', 'Tidak ada kewajiban untuk online dalam waktu tertentu setiap harinya'),
(32, 'title', 'Hanya bisa menerima request pasien dalam jarak maksimal sampai 10km'),
(33, 'title', 'Bantuan hukum'),
(34, 'title', 'Upgrade knowledge melalui pelatihan/seminar'),
(35, 'title', 'Dokter umum'),
(36, 'title', 'Memiliki SIP dan STR aktif Dokter'),
(37, 'title', 'Berusia 26-45 tahun'),
(38, 'title', 'Menggunakan Android/iOS'),
(39, 'title', 'MITRA MEDI-CALL'),
(40, 'title', 'MEDI-CALL, TERDEKAT, FLEKSIBEL'),
(41, 'title', 'LANGSUNG DI LOKASI PASIEN'),
(42, 'title', 'TELAH DILIPUT OLEH  CNN INDONESIA'),
(43, 'title', 'Medi-Call saat ini telah beroperasi secara resmi di Bali dan Jakarta'),
(44, 'title', 'Soft Launching Medi-Call'),
(45, 'title', 'Grand Launching Medi-Call'),
(46, 'title', 'MEMBUKA REKRUTMEN'),
(47, 'title', 'Mempunyai SIP & STR'),
(48, 'title', 'Mempunyai HP Android Pribadi'),
(49, 'title', 'Mempunyai Kendaraaan Pribadi'),
(50, 'title', 'Ijin Resmi Klinik/Associate sesuai peraturan Setempat yang masih berlaku.'),
(51, 'title', 'Fasilitas On-Call Terstandarisasi'),
(52, 'Title', 'Melayani Pengantaran Obat'),
(53, 'title', 'Ijin Resmi Apotek sesuai Peraturan Setempat yang masih berlaku.'),
(54, 'title', 'Mempunyai Kendaraan Kurir'),
(55, 'title', 'LABORATORIUM'),
(56, 'title', 'Ijin Resmi Laboratorium sesuai Peraturan Setempat yang masih berlaku.'),
(57, 'title', 'Surat Izin Praktik – Perawat (SIPP), mempunyai STR Perawat'),
(58, 'title', 'Surat Izin Praktik Bidan (SIPB), dan STR Bidan'),
(59, 'title', 'BERGABUNGLAH BERSAMA KAMI! FREE TANPA BIAYA PENDAFTARAN'),
(60, 'title', 'Medi-Call mengajak rekan dokter dan provider (klinik / praktek bersama, apotek) dan tenaga kesehatan lainnya (perawat & bidan) untuk bergabung menjadi Medi-Call Partner'),
(61, 'title', 'Nama Lengkap Tenaga Kesehatan (wajib, disertakan dengan gelar)'),
(62, 'title', 'Mendaftar Sebagai'),
(67, 'title', 'SYARAT BERGABUNG DI MEDI-CALL'),
(68, 'title', 'Tanggal Lahir'),
(69, 'title', 'Dokumen Yang Dimiliki'),
(70, 'title', 'Alamat Tempat Praktek (Sesuai SIP atau Surat Perijinan yang dimiliki)'),
(71, 'title', 'BUKAN ALAMAT RUMAH'),
(72, 'title', 'Email (wajib)'),
(73, 'title', 'Kendaraan Pribadi Yang Anda Miliki'),
(74, 'title', 'Universitas / Alumni'),
(75, 'title', 'Tahun Lulus'),
(76, 'title', 'Nomor Handphone / WhatsApp Yang Aktif'),
(77, 'title', 'Kota'),
(78, 'title', 'Darimana Anda Mengetahui Medicall?'),
(79, 'title', 'Operating System yang dipakai di Smartphone Anda'),
(80, 'menufotter', 'tentang'),
(81, 'menufotter', 'layanan'),
(82, 'menufotter', 'testimonial'),
(83, 'menufotter', 'artikel'),
(84, 'menufotter', 'daftarpertner'),
(85, 'judul', 'section area'),
(86, 'title detil dokter', 'Panggil Dokter ke Rumah, Villa, Hotel, dan Apartment Anda'),
(87, 'title detil dokter', 'Layanan Panggil Dokter ke lokasi anda dalam wilayah berikut'),
(88, 'judul', 'section profil dokter'),
(89, 'title detil dokter', 'Dokter Medicall'),
(90, 'judul', 'section tarif layanan'),
(91, 'title detil dokter', 'basic fee dokter'),
(92, 'title detil dokter', 'basic fee dokter title'),
(93, 'title detil dokter', 'tarif dokter 200++'),
(94, 'title detil dokter', 'mengapa panggil dokter medicall'),
(95, 'judul', 'BAGAIMANA DENGAN RESEP'),
(96, 'title detil dokter', 'Bekerjasama dengan 100 Jaringan K24'),
(97, 'title detil dokter', 'Dokter kirim Resep Obat'),
(98, 'title detil dokter', 'Obat Disiapkan Oleh K-24'),
(99, 'title detil dokter', 'Pembayaran ditempat'),
(100, 'judul', 'Cara Menggunakan Medicall'),
(101, 'judul', 'section dokter kami'),
(102, 'title list dokter', 'List Partner<br>di Medi-Call'),
(103, 'judul', 'DETAIL BIAYA'),
(104, 'title detil biaya', 'Layanan medical'),
(105, 'judul destance fee', 'destance fee'),
(106, 'destance fee 1', 'WNA = WNI'),
(107, 'destance fee 2', 'Biaya Jarak < 5km : Free'),
(108, 'destance fee 2', 'Biaya Jarak >5km : Rp 10.000/km'),
(109, 'dokter fee', 'dokter fee'),
(110, 'dokter fee 1', 'dokter fee 1'),
(111, 'dokter fee 2', 'dokter fee 2'),
(112, 'procedur fee', 'procedur fee'),
(113, 'procedur fee dokter', 'procedur fee dokter'),
(114, 'procedur fee link', 'link berikut ini'),
(115, 'judul', 'cara pembayaran'),
(116, 'cara pembayaran dokter', 'cara pembayaran dokter'),
(117, 'judul', 'section asuransi'),
(118, 'title asuransi 1', 'title asuransi 1'),
(119, 'notelp', 'notelp'),
(120, 'title', 'Memiliki STR aktif Perawat'),
(121, 'title detil perawat', 'panggil perawat kerumah'),
(122, 'title detil perawat', 'layanan panggil perawat'),
(123, 'tarif', 'tarif perawat 120++'),
(124, 'Title Website', 'title beranda'),
(125, 'Title Website', 'title daftarpartner'),
(126, 'Title Website', 'title /dokter'),
(127, 'Title Website', 'title /listdokter'),
(128, 'Title Website', 'title /tarifdokter'),
(129, 'Title Website', 'title /perawat'),
(130, 'Title Website', 'title /listperawat'),
(131, 'Title Website', 'title /tarifperawat'),
(132, 'Nurse fee', 'title tarif perawat'),
(133, 'Nurse fee', 'Nurse fee 1'),
(134, 'Nurse fee', 'Nurse fee 2'),
(135, 'title tarif perawat', 'Biaya jasa prosedur yang dikenakan perawat ke pasien'),
(136, 'xxx', 'yyyy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `userId` int(10) NOT NULL,
  `userUsername` varchar(50) NOT NULL,
  `userPassword` varchar(50) DEFAULT NULL,
  `userRealname` varchar(50) DEFAULT NULL,
  `userRole` tinyint(2) DEFAULT NULL,
  `bbws_id` int(7) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`userId`, `userUsername`, `userPassword`, `userRealname`, `userRole`, `bbws_id`) VALUES
(9167, 'bustoni', '202cb962ac59075b964b07152d234b70', NULL, 10, NULL),
(9163, 'admin', '202cb962ac59075b964b07152d234b70', 'Admin', 10, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`,`language`) USING BTREE;

--
-- Indeks untuk tabel `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`permission_id`),
  ADD UNIQUE KEY `idx_perm_name` (`permission_name`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indeks untuk tabel `role_permission`
--
ALTER TABLE `role_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `source_message`
--
ALTER TABLE `source_message`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `username` (`userUsername`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `permission`
--
ALTER TABLE `permission`
  MODIFY `permission_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `role_permission`
--
ALTER TABLE `role_permission`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9168;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `FK_Message_SourceMessage` FOREIGN KEY (`id`) REFERENCES `source_message` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
