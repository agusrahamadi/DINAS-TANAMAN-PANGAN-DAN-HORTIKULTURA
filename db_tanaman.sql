-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Mar 2020 pada 11.16
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_tanaman`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_biografi`
--

CREATE TABLE IF NOT EXISTS `t_biografi` (
  `kd_biografi` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `userid` varchar(11) NOT NULL,
  PRIMARY KEY (`kd_biografi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `t_biografi`
--

INSERT INTO `t_biografi` (`kd_biografi`, `isi`, `gambar`, `userid`) VALUES
(1, '<div class="entry">\r\n<p style="text-align: center;"><strong>VISI MISI KABUPATEN BANJAR</strong></p>\r\n<ul>\r\n<li>Visi pembangunan Kabupaten Banjar 2016-2021 adalah &ldquo;Terwujudnya Masyarakat Kabupaten Banjar Yang Sejahtera dan Barokah&rdquo;</li>\r\n<li>Misi yang berkaitan dengan subsektor pertanian tanaman pangan dan hortikutura adalah pada Misi ke 3 yaitu : Meningkatkan kesejahteraan masyarakat dengan indikasi adanya pertumbuhan ekonomi khususnya PDRB sektor pertanian umum, sektor perikanan, mantapnya kondisi ketahanan pangan daerah yang disertai peningkatan pendapatan, produksi dan produktifitas, peningkatan nilai tambah, daya saing produk unggulan daerah, pengembangan industri hilir, agroindustri, kebijakan (regulasi) yang tepat dengan tetap memperhatikan kelestarian sumber daya alam yang berkelanjutan serta prinsip tata kelola lingkungan yang baik.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p style="text-align: center;"><strong>VISI MISI DINAS TANAMAN PANGAN DAN HORTIKULTURA</strong></p>\r\n<p style="text-align: center;"><strong>KABUPATEN BANJAR</strong></p>\r\n<ul>\r\n<li>Visi Dinas Pertanian Tanaman Pangan dan Hortikultura Kabupaten Banjar tahun 2017 &ndash; 2021 adalah &ldquo;MEWUJUDKAN PERTANIAN TANAMAN PANGAN DAN HORTIKULTURA SEBAGAI PONDASI PENGEMBANGAN EKONOMI KERAKYATAN GUNA MENDUKUNG TERWUJUDNYA MASYARAKAT KABUPATEN BANJAR YANG SEJAHTERA DAN BAROKAH&rdquo;</li>\r\n<li>Pengertian dari Visi tersebut yaitu Pertanian Tanaman Pangan Dan Hortikultura Sebagai Pondasi Pengembangan Ekonomi Kerakyatan adalah : Menghasilkan produk pertanian tanaman pangan dan hortikultura yang berproduksi tinggi,&nbsp; beranekaragam, berkualitas, aman dikonsumsi, menguntungkan petani dan konsumen,&nbsp; diminati pasar, sehingga mampu berdaya saing di pasar domestik maupun nasional. Usaha terus menerus untuk meningkatkan kemampuan on farm&nbsp; dan off farm petani agar hasil produksi maupun hasil olahan produk pertanian tanaman pangan dan hortikultura dapat memberikan peningkatan pendapatan petani sekaligus sebagai penopang perekonomian keluarga.</li>\r\n<li>Adapun sebagai Dinas maka Dinas Tanaman Pangan dan Hortikultura; dapat menjadi dinas yang kompeten dalam mengembangkan kualias SDM dan Sarana dan Prasarana yang dimiliki untuk mampu memberdayakan dan memfasilitasi pelaku utama dan pelaku usaha tanaman pangan dan hortikultura untuk meningkatkan pendapatan dan kesejahteraan melalui pengembangan usaha agribisnis unggulan di Kabupaten Banjar.</li>\r\n<li>Kemudian sejahtera dan barokah adalah dimaksudkan dengan meningkatnya produksi dan pendapatan petani beserta keluarganya yang mana sebagian besar penduduk di daerah ini berusaha disektor pertanian terutama tanaman panan dan hortikultura maka diharapkan akan terwujud kesejahteraan rakyat yang mengandung keterpaduan dimensi material dan spiritual dalam wujud suasana kehidupan yang aman dan damai; serta membawa barokah yaitu sesuatu yang dirasakan mempunyai nilai tambah, memberi manfaat dan kemaslahatan bagi orang banyak.</li>\r\n</ul>\r\n</div>', 'dinas tanaman 1.jpg', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_informasi`
--

CREATE TABLE IF NOT EXISTS `t_informasi` (
  `kd_info` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `gambar_info` varchar(100) NOT NULL,
  `userid` varchar(11) NOT NULL,
  `kode_info` varchar(11) NOT NULL,
  PRIMARY KEY (`kd_info`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `t_informasi`
--

INSERT INTO `t_informasi` (`kd_info`, `hari`, `tanggal`, `jam`, `judul`, `isi`, `gambar_info`, `userid`, `kode_info`) VALUES
(1, 'senin', '2020-03-04', '00:00:02', 'Dinas Tanaman Pangan dan Pertanian Gelar Penyuluha', '<p>Pemerintah Kabupaten Muara Enim melalui Dinas Tanaman Pangan Hortikultura dan Pertanian menggelar pertemuan teknis Penyuluh Pertanian serta Petani Andalan se-Kabupaten Muara Enim.</p>\r\n<p>Kegiatan ini dilakukan guna menyamakan persepsi dari kerangka pikir dan merumuskan tindakan dalam meningkatkan mutu pembangunan pertanian pada Kabupaten Muara Enim secara umumnya dan kesejahteraan petani juga pada khususnya.</p>\r\n<p>Hadir Bupati Muara Enim diwakili Asisten Bidang Perekonomian Amrullah J SH ,Kepala Subditbang Kelembagaan Penyuluhan Pertanian Kementerian Pertanian DR Ir Jahron Hekmi MP dari Provinsi Sumsel diwakili oleh Kabid PPHPP Ir Hj Dwiritakesuma Wardani MSi.</p>\r\n<p>&ldquo;Kegiatan ini untuk menyerap dan menghimpun aspirasi petani andalan, sekaligus menumbuhkan dinamika maupun pada kesadaran aparatur khususnya, Penyuluh Pertanian senantiasa meningkatkan peran dan pengabdiannya dalam rangka meningkatkan kesejahteraan petani,&rsquo;&rsquo; ujar Amrullah, Rabu (28/11).</p>\r\n<p>Program swasembada berkelanjutan padi jagung, kedelai, bawang merah, cabai, dan daging merupakan Program Nasional yang harus didukung oleh semua pihak termasuk Penyuluh Pertanian, Kelompok Tani sebagai pelaku utama dan terdepan dalam memproduksi Pangan Nasional.</p>\r\n<p>Sedangkan Kadis Tanaman Pangan Hortikultura dan Pertanian Kabupaten Muara Enim Kani D mengatakan rencana kerja di tahun 2019 tetap mengacu upaya peningkatan hasil produksi untuk menunjang swasembada nasional.</p>', 'info1.jpg', '1', 'IFO-001'),
(2, 'Selasa', '2020-03-24', '00:28:22', 'Tingkatkan Produktivitas Petani, Dinas TPH Banjar ', '<p>Dinas TPH Kab. Banjar melalui Bidang Teknologi Pertanian Pengolahan dan Pemasaran Selasa17/03/2020 melaksanakan kegiatan pelatihan Teknologi perbanyakan tanaman golongan Mangifera untuk 20 orang petani di Kec. Astambul Kab. Banjar yang memiliki salah satu jenis mangga golongan kasturi</p>\r\n<p>Berdasarkan hasil ekplorasi Dinas TPH Kab. Banjar Plasma Nutfah Kasturi yang ada di Kabupaten Banjar terdapat 7 varietas yang memiliki nama tidak hanya satu yaitu : Kasturi Biasa/Kasturi Ungu (Mangifera casturi Dilmiana), Kasturi Mawar/Cuban/Alimawar/Kastuba (Mangifera casturi), Kasturi Palipisan/Kasturi Hijau (Mangifera casturi), Rawa-rawa/Rarawa (Mangifera griffihii), ternyata ada juga jenis kasturi Panjang dan kasturi sakirang, hal ini membuktikan bahwa Kabupaten Banjar kaya akan keragaman genetik buah eksotik Banjar golongan Mangifera.</p>\r\n<p>Pelatihan ini dilaksana di Balai Penyuluhan Pertanian (BPP) Kec. Astambul yang dihadiri oleh Camat Astambul, Babinsa, Kepala BPP Kec. Astambul. Pelatihan ini dibuka oleh Kepala Bidang Teknologi Pertanian Pengolahan dan Pemasaran Imelda Rosanty, SP, MP.</p>\r\n<p>Dalam sambutannya imelda mengatakan bahwa berdasarkan Keputusan Menteri Dalam Negeri No.48 tahun 1989 mengenai Identitas Flora di setiap provinsi, maka Mangifera casturi Dilmiana ditetapkan menjadi Identitas Flora dari Provinsi Kalimantan Selatan. Mangga kasturi kini keberadaannya terancam punah karena jumlahnya yang semakin berkurang, baik dari segi jumlah individu, populasi, ataupun keanekaragaman genetiknya.<br /> Oleh karena itu kami adakan pelatihan perbanyakan tanaman kasturi dengan metode sambung pucuk denhan narasumber seorang praktisi dalam bidang perbanyakan tanaman di Kalimantan selatan, ujar imelda.</p>\r\n<p>Imelda menambahkan Kasturi mawar dan asam pinari merupakan jenis kasturi yang khas atau endemik kab. Banjar. Untuk asam pinari sendiri Pada Festival Durian dan Buah Eksotik Kalimantan Selatan Tahun 2020, mendapatkan penghargaan sebagai buah eksotik Kalimantan Selatan kategori Unik yang tidak dimiliki kabupaten lain di Kalimantan selatan.</p>\r\n<p>Karena harapan Pa Bupati Banjar<br /> Agar semua masyarakat dapat mengetahui potensi SDG Banjar yang sangat besar, saya selalu menghimbau Dinas TPH Kab. Banjar beserta SKPD terkait serta seluruh masyarakat khususnya para petani disentra produksi buah-buahan untuk melestarikan SDG asli Kabupaten Banjar jangan sampai mengalami kepunahan,</p>\r\n<p>Pada kesempatan yang berbeda Muhammad Fachry, selaku Kadis TPH Kab. Banjar mengatakan bahwa pihaknya terus melakukan pelestarian buah-buahan eksotik asal Kab. Banjar, langkah yang pertama yang akan kami lakukan yakni melakukan karakteristik awal untuk bisa di daftarkan ke Pusat Perlindungan Varietas Tanaman dan Perijinan Pertanian Kementan RI, agar mendapatkan nomor pendaftaran, tidak hanya itu, kami juga melakukan bimbingan teknis tentang teknologi perbanyakan tanaman kepada petani didaerah sentra buah-buahan eksotik Banjar golongan Mangifera dengan tujuan para petani mampu memperbanyak tanaman buah tersebut agar dapat ditangkarkan, guna keberlangsungan SDG Kabupaten Banjar terjaga karena SDG ini merupakan kekayaan plasma nuftah masing-masing daerah, tandas Fachry. (Nove)</p>', 'info2.jpg', '1', 'IFO-002'),
(3, 'Selasa', '2020-03-24', '00:29:47', 'RIBUAN HEKTAR PADI DIPANEN DI BERUNTUNG BARU', '<p>Syukuran panen padi di areal persawahan Program #Serasi di helat di Desa Kampung Baru Kecamatan Beruntung Baru Kabupaten Banjar Provinsi Kalimantan Selatan pada hari Kamis (12/3) Gubernur prov. Kalsel paman Birin dan Bupati Banjar KH.Khalilurahman Bersama Direktur Irigasi Pertanian Ir. Rahmanto melaksanakan panen padi secara simbolis, padi varietas Ciherang yang dipanen dengan hasil ubinan 6 Ton/ ha GKP atau 5,178 Ton/ha GKG merupakan bukti keberhasilan Program Serasi yang dilaksanakan pada akhir tahun 2019 lalu.</p>\r\n<p>Kadis TPH Provinsi Kalsel menyatakan Tidak kurang dari 2 ribu Ha lahan sawah di Beruntung Baru yang ditanami padi seluruhnya berhasil dan siap dipanen, &ldquo;untuk hari ini 500 Ha yang akan dipanen menggunakan 2 Unit combine harvester milik Brigade alsintan Dinas TPH Kab.Banjar&rdquo; ujarnya.</p>\r\n<p>Beliau juga menuturkan bahwa dana bantuan pemerintah yang digelontorkan pemerintah pusat langsung kepada kelompok tani melalui Program serasi untuk membuat dan memperbaiki infrastruktur mendukung pertanian tidak lain bertujuan agar petani dapat meningkatkan produksi dan produktivitas tanaman pangan dan komoditas strategis yang ada pada masing-masing wilayah. Kadis TPH Kab.Banjar Ir. H. Muhammad Fachry pun menerangkan bahwa dengan adanya program Serasi khususnya di kabupaten Banjar terjadi pertambahan luas tanam padi pada Bulan Desember dan Januari lebih dari 14 ribu hektar, pada tahun sebelumnya hanya sekitar 2 ribu &ndash; 3 ribu hektar sehingga terjadi kenaikan 5 kali lipat. Ini karena program SERASI dan kesadaran petani untuk meningkatkan produksi padi melalui peningkatan Indeks Pertanaman (IP) khusus di Kecamatan Beruntung Baru yang dipanen Bulan Maret ini pada 12 Desa yang ada seluas 2.375 ha paparnya.</p>\r\n<p><a href="http://dtph.banjarkab.go.id/wp-content/uploads/2020/03/WhatsApp-Image-2020-03-12-at-17.05.55.jpeg"><img class="alignnone size-full wp-image-2805 tie-appear" src="http://dtph.banjarkab.go.id/wp-content/uploads/2020/03/WhatsApp-Image-2020-03-12-at-17.05.55.jpeg" sizes="(max-width: 1280px) 100vw, 1280px" srcset="http://dtph.banjarkab.go.id/wp-content/uploads/2020/03/WhatsApp-Image-2020-03-12-at-17.05.55.jpeg 1280w, http://dtph.banjarkab.go.id/wp-content/uploads/2020/03/WhatsApp-Image-2020-03-12-at-17.05.55-300x200.jpeg 300w, http://dtph.banjarkab.go.id/wp-content/uploads/2020/03/WhatsApp-Image-2020-03-12-at-17.05.55-768x512.jpeg 768w, http://dtph.banjarkab.go.id/wp-content/uploads/2020/03/WhatsApp-Image-2020-03-12-at-17.05.55-1024x682.jpeg 1024w" alt="" width="1280" height="853" /></a>Acara syukuran panen ini dilanjutkan dengan pencanangan Gerakan Tanam Padi periode MK tahun 2020 Pejabat Kepala Daerah serta pejabat kementerian RI turun langsung menanam benih varietas Lokal yang memang khusus ditanam setelah panen padi Varietas unggul Ciherang. Rangkaian acara ini terus berlanjut dengan peresmian Sentra pelayanan Pertanian Terpadu ( SP3T ) di desa salat makmur Kec.Beruntung Baru yang disaksikan Gubernur Prov Kalsel, Bupati banjar dan seluruh tamu undangan yang hadir. Selain itu dilaksanakan juga penandatanganan Nota Kesepahaman antara Gapoktan Harapan Makmur dengan Bumdes Makmur Sejahtera dan penandatanganan Nota kesepahaman antara Gapoktan Harapan Makmur dengan lima Poktan di Kecamatan Beruntung Baru untuk pasokan Gabah kering Panen yang akan diolah dan selanjutnya akan dikemas dengan masing-masing berat sesuai permintaan pasar. Seluruh proses penggilingan padi dan pengemasan beras ini dilaksanakan di SP3T ini merupakan bantuan dari Kementerian Pertanian RI melalui Ditjen Tanaman Pangan Kementerian Pertanian RI bantuan ini merupakan wujud upaya pemerintah pusat mendorong masyarakat tani di Kab.Banjar Khususnya di Kecamatan Beruntung Baru mewujudkan pertanian yang maju, mandiri dan modern.</p>\r\n<p>Dalam sambutannya Bupati Banjar KH.Khalilurahman menyampaikan ucapan terimakasih kepada pemerintah pusat dengan adanya program serasi berpengaruh nyata terhadap peningkatan produksi padi di Kab.banjar khususnya, beliau berpesan kepada seluruh poktan untuk terus mengembangkan dan meningkatkan produksi pertaniannya dan kepada Penyuluh pertanian beliau berharap agar penyuluh jangan menyerah mengajak kaum muda untuk bertani, pembangunan di bidang pertanian yang sedang dilaksanakan ini bisa menyerap tenaga kerja, membangun perekonomian sehingga mengurangi kemiskinan. Bupati berharap dengan adanya SP3T di Kec. Beruntung Baru ini petani tidak lagi menjual hasil panen padinya dalam bentuk gabah namun petani dapat menggiling padinya menjadi beras kemudian dikemas untuk dipasarkan dipasar-pasar modern dan tradisional.</p>\r\n<p><a href="http://dtph.banjarkab.go.id/wp-content/uploads/2020/03/WhatsApp-Image-2020-03-12-at-17.05.55-2.jpeg"><img class="alignnone size-full wp-image-2803 tie-appear" src="http://dtph.banjarkab.go.id/wp-content/uploads/2020/03/WhatsApp-Image-2020-03-12-at-17.05.55-2.jpeg" sizes="(max-width: 1280px) 100vw, 1280px" srcset="http://dtph.banjarkab.go.id/wp-content/uploads/2020/03/WhatsApp-Image-2020-03-12-at-17.05.55-2.jpeg 1280w, http://dtph.banjarkab.go.id/wp-content/uploads/2020/03/WhatsApp-Image-2020-03-12-at-17.05.55-2-300x200.jpeg 300w, http://dtph.banjarkab.go.id/wp-content/uploads/2020/03/WhatsApp-Image-2020-03-12-at-17.05.55-2-768x512.jpeg 768w, http://dtph.banjarkab.go.id/wp-content/uploads/2020/03/WhatsApp-Image-2020-03-12-at-17.05.55-2-1024x682.jpeg 1024w" alt="" width="1280" height="853" /></a>Dalam kesempatan ini juga paman Birin menyampaikan terimakasih kepada seluruh warga masarakat tani yang telah bergotong royong bekerja sama dengan pemerintah pusat, pihak pemprov dan pemkab sehingga terwujud acara panen dengan luasan ribuan hektar di kec.beruntung baru. Jika hal ini terus belanjut maka poktan akan lebih senang karena terbantu inilah yang menggelorakan pertanian di Indonesia, beliau mengajak kita semua untuk mensyukuri nikmat yang telah diberikan allah swt atas lahan yang luas dan subur modalnya hanya satu bergerak niat yang kuat dan jangan malas sehingga anak bangsa menjadi orang-orang yang berkualitas dan menjadi pemenang tukasnya. Gubernur meyakini dengan bergotong royong dukungan partisipasi dari pemerintah maka bangsa ini akan merdeka dalam arti sesungguhnya yaitu merdeka dari kemiskinan dan kebodohan.</p>\r\n<p>Seluruh Rangkaian acara syukuran panen, gerakan pencanangan pengendalian OPT dan peresmian SP3T hari ini ditutup dengan penyerahan bantuan alat mesin pertanian Dari Dinas TPH Kab.Banjar berupa combine harvester kepada gapoktan harapan makmur Desa Salat makmur Kec.Beruntung Baru, sebanyak 100 unit handsprayer elektrik diberikan kepada gapoktan dan poktan kec.Beruntung baru, Gambut, Aluh-aluh, tatah Makmur dan Kec. Kertak hanyar. Brigade Alsintan juga menyerahkan bantaun pinjam pakai combine harvester kepada Gapoktan kampung Baru Desa Kampung Baru kec.beruntung Baru. Gubernur Kalsel melalui Dinas TPH Provinsi Kalsel juga turut serta memberikan bantuan Alat mesin pertanian berupa Handtraktor type rotary kepada Poktan maju Makmur Desa salat makmur kecamatan beruntung Baru. (Dwi-KJF)</p>\r\n<p>Syukuran panen padi di areal persawahan Program #Serasi di helat di Desa Kampung Baru Kecamatan Beruntung Baru Kabupaten Banjar Provinsi Kalimantan Selatan pada hari Kamis (12/3) Gubernur prov. Kalsel paman Birin dan Bupati Banjar KH.Khalilurahman Bersama Direktur Irigasi Pertanian Ir. Rahmanto melaksanakan panen padi secara simbolis, padi varietas Ciherang yang dipanen dengan hasil ubinan 6 Ton/ ha GKP atau 5,178 Ton/ha GKG merupakan bukti keberhasilan Program Serasi yang dilaksanakan pada akhir tahun 2019 lalu.</p>\r\n<p>Kadis TPH Provinsi Kalsel menyatakan Tidak kurang dari 2 ribu Ha lahan sawah di Beruntung Baru yang ditanami padi seluruhnya berhasil dan siap dipanen, &ldquo;untuk hari ini 500 Ha yang akan dipanen menggunakan 2 Unit combine harvester milik Brigade alsintan Dinas TPH Kab.Banjar&rdquo; ujarnya.</p>\r\n<p>Beliau juga menuturkan bahwa dana bantuan pemerintah yang digelontorkan pemerintah pusat langsung kepada kelompok tani melalui Program serasi untuk membuat dan memperbaiki infrastruktur mendukung pertanian tidak lain bertujuan agar petani dapat meningkatkan produksi dan produktivitas tanaman pangan dan komoditas strategis yang ada pada masing-masing wilayah. Kadis TPH Kab.Banjar Ir. H. Muhammad Fachry pun menerangkan bahwa dengan adanya program Serasi khususnya di kabupaten Banjar terjadi pertambahan luas tanam padi pada Bulan Desember dan Januari lebih dari 14 ribu hektar, pada tahun sebelumnya hanya sekitar 2 ribu &ndash; 3 ribu hektar sehingga terjadi kenaikan 5 kali lipat. Ini karena program SERASI dan kesadaran petani untuk meningkatkan produksi padi melalui peningkatan Indeks Pertanaman (IP) khusus di Kecamatan Beruntung Baru yang dipanen Bulan Maret ini pada 12 Desa yang ada seluas 2.375 ha paparnya.</p>\r\n<p>Acara syukuran panen ini dilanjutkan dengan pencanangan Gerakan Tanam Padi periode MK tahun 2020 Pejabat Kepala Daerah serta pejabat kementerian RI turun langsung menanam benih varietas Lokal yang memang khusus ditanam setelah panen padi Varietas unggul Ciherang. Rangkaian acara ini terus berlanjut dengan peresmian Sentra pelayanan Pertanian Terpadu ( SP3T ) di desa salat makmur Kec.Beruntung Baru yang disaksikan Gubernur Prov Kalsel, Bupati banjar dan seluruh tamu undangan yang hadir. Selain itu dilaksanakan juga penandatanganan Nota Kesepahaman antara Gapoktan Harapan Makmur dengan Bumdes Makmur Sejahtera dan penandatanganan Nota kesepahaman antara Gapoktan Harapan Makmur dengan lima Poktan di Kecamatan Beruntung Baru untuk pasokan Gabah kering Panen yang akan diolah dan selanjutnya akan dikemas dengan masing-masing berat sesuai permintaan pasar. Seluruh proses penggilingan padi dan pengemasan beras ini dilaksanakan di SP3T ini merupakan bantuan dari Kementerian Pertanian RI melalui Ditjen Tanaman Pangan Kementerian Pertanian RI bantuan ini merupakan wujud upaya pemerintah pusat mendorong masyarakat tani di Kab.Banjar Khususnya di Kecamatan Beruntung Baru mewujudkan pertanian yang maju, mandiri dan modern.</p>\r\n<p>Dalam sambutannya Bupati Banjar KH.Khalilurahman menyampaikan ucapan terimakasih kepada pemerintah pusat dengan adanya program serasi berpengaruh nyata terhadap peningkatan produksi padi di Kab.banjar khususnya, beliau berpesan kepada seluruh poktan untuk terus mengembangkan dan meningkatkan produksi pertaniannya dan kepada Penyuluh pertanian beliau berharap agar penyuluh jangan menyerah mengajak kaum muda untuk bertani, pembangunan di bidang pertanian yang sedang dilaksanakan ini bisa menyerap tenaga kerja, membangun perekonomian sehingga mengurangi kemiskinan. Bupati berharap dengan adanya SP3T di Kec. Beruntung Baru ini petani tidak lagi menjual hasil panen padinya dalam bentuk gabah namun petani dapat menggiling padinya menjadi beras kemudian dikemas untuk dipasarkan dipasar-pasar modern dan tradisional.</p>\r\n<p>Dalam kesempatan ini juga paman Birin menyampaikan terimakasih kepada seluruh warga masarakat tani yang telah bergotong royong bekerja sama dengan pemerintah pusat, pihak pemprov dan pemkab sehingga terwujud acara panen dengan luasan ribuan hektar di kec.beruntung baru. Jika hal ini terus belanjut maka poktan akan lebih senang karena terbantu inilah yang menggelorakan pertanian di Indonesia, beliau mengajak kita semua untuk mensyukuri nikmat yang telah diberikan allah swt atas lahan yang luas dan subur modalnya hanya satu bergerak niat yang kuat dan jangan malas sehingga anak bangsa menjadi orang-orang yang berkualitas dan menjadi pemenang tukasnya. Gubernur meyakini dengan bergotong royong dukungan partisipasi dari pemerintah maka bangsa ini akan merdeka dalam arti sesungguhnya yaitu merdeka dari kemiskinan dan kebodohan.</p>\r\n<p>Seluruh Rangkaian acara syukuran panen, gerakan pencanangan pengendalian OPT dan peresmian SP3T hari ini ditutup dengan penyerahan bantuan alat mesin pertanian Dari Dinas TPH Kab.Banjar berupa combine harvester kepada gapoktan harapan makmur Desa Salat makmur Kec.Beruntung Baru, sebanyak 100 unit handsprayer elektrik diberikan kepada gapoktan dan poktan kec.Beruntung baru, Gambut, Aluh-aluh, tatah Makmur dan Kec. Kertak hanyar. Brigade Alsintan juga menyerahkan bantaun pinjam pakai combine harvester kepada Gapoktan kampung Baru Desa Kampung Baru kec.beruntung Baru. Gubernur Kalsel melalui Dinas TPH Provinsi Kalsel juga turut serta memberikan bantuan Alat mesin pertanian berupa Handtraktor type rotary kepada Poktan maju Makmur Desa salat makmur kecamatan beruntung Baru</p>', 'info3.jpeg', '1', 'IFO-003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kategori`
--

CREATE TABLE IF NOT EXISTS `t_kategori` (
  `kd_kat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kat` varchar(30) NOT NULL,
  `kode_kat` varchar(11) NOT NULL,
  PRIMARY KEY (`kd_kat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `t_kategori`
--

INSERT INTO `t_kategori` (`kd_kat`, `nama_kat`, `kode_kat`) VALUES
(1, 'Hortikiltura', 'KAT-001'),
(2, 'Tanaman Pangan', 'KAT-002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_komentar`
--

CREATE TABLE IF NOT EXISTS `t_komentar` (
  `kd_komentar` int(4) NOT NULL AUTO_INCREMENT,
  `kd_tam` varchar(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jam` time NOT NULL,
  `kd_info` int(11) NOT NULL,
  `komentar` text NOT NULL,
  PRIMARY KEY (`kd_komentar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `t_komentar`
--

INSERT INTO `t_komentar` (`kd_komentar`, `kd_tam`, `tanggal`, `nama`, `email`, `jam`, `kd_info`, `komentar`) VALUES
(1, '1', '2020-03-16', 'rizky', 'rizky@gmail.com', '02:00:00', 0, 'b'),
(2, '0', '2020-03-03', 'a', 'a', '00:00:00', 1, 'a'),
(3, '', '2020-03-23', 'Rizky', 'rky@gmail.com', '15:59:49', 1, 'Jadi tanaman seperti ini apakah langka'),
(4, '9', '2020-03-23', 'adi', 'adi@gmail.com', '16:22:20', 0, 'apakah jagung ini masih  bisa di tawar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kontak`
--

CREATE TABLE IF NOT EXISTS `t_kontak` (
  `kd_kontak` int(11) NOT NULL AUTO_INCREMENT,
  `no_telp` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `userid` varchar(11) NOT NULL,
  PRIMARY KEY (`kd_kontak`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `t_kontak`
--

INSERT INTO `t_kontak` (`kd_kontak`, `no_telp`, `no_hp`, `instagram`, `facebook`, `email`, `alamat`, `userid`) VALUES
(1, '0265 334 188', '08589653910', 'dinastanamanpanga', 'dinastanamanpanga', 'dinastanamanpanga@gmail.com', '    Jl. Padang anyar No.331 Rt.04 Rw.02 Desa Tungmkarang, Kab. Banjar, Prov. Kalimantan Selatan, Kode Pos : 71154    ', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_subkat`
--

CREATE TABLE IF NOT EXISTS `t_subkat` (
  `kd_subkat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_subkat` varchar(30) NOT NULL,
  `kd_kat` varchar(11) NOT NULL,
  `kode_subkat` varchar(11) NOT NULL,
  PRIMARY KEY (`kd_subkat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1009 ;

--
-- Dumping data untuk tabel `t_subkat`
--

INSERT INTO `t_subkat` (`kd_subkat`, `nama_subkat`, `kd_kat`, `kode_subkat`) VALUES
(1004, 'Buah Buahan', '1', 'JNS-001'),
(1005, 'Sayuran Dan Palawija', '1', 'JNS-002'),
(1006, 'Padi', '2', 'JNS-003'),
(1007, 'Beras', '2', 'JNS-004'),
(1008, 'Palawija', '2', 'JNS-005');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_tanaman`
--

CREATE TABLE IF NOT EXISTS `t_tanaman` (
  `kd_tam` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tam` varchar(50) NOT NULL,
  `kadar_air` float NOT NULL,
  `harga_produsen` float NOT NULL,
  `harga_grosir` float NOT NULL,
  `harga_eceran` float NOT NULL,
  `kd_subkat` varchar(11) NOT NULL,
  `userid` varchar(11) NOT NULL,
  `ket_tam` text NOT NULL,
  `gambar_tam` varchar(100) NOT NULL,
  `kode_tam` varchar(11) NOT NULL,
  `kd_kat` int(11) NOT NULL,
  PRIMARY KEY (`kd_tam`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `t_tanaman`
--

INSERT INTO `t_tanaman` (`kd_tam`, `nama_tam`, `kadar_air`, `harga_produsen`, `harga_grosir`, `harga_eceran`, `kd_subkat`, `userid`, `ket_tam`, `gambar_tam`, `kode_tam`, `kd_kat`) VALUES
(1, 'Jeruk Siam', 0, 10000, 13000, 15000, '1004', '1', '      Jeruk Siam adalah buah yang ...     ', 'jeruk siam.jpeg', 'TAM-001', 1),
(5, 'Pepaya', 0, 6000, 8000, 9000, '1004', '1', '  Pepaya Ialah ', 'pepaya.jpg', 'TAM-002', 1),
(6, 'Semangka', 0, 2500, 3500, 5000, '1004', '1', '  Semangka Ialah ', 'semangka.jpg', 'TAM-003', 1),
(7, 'Mangga', 0, 19000, 22000, 25000, '1004', '1', '  Mangga Ialah ', 'mangga.jpg', 'TAM-004', 1),
(8, 'Pisang', 0, 8000, 12000, 15000, '1004', '1', '  Piasang Ialah ', 'pisang.jpg', 'TAM-005', 1),
(9, 'Jagung Manis', 0, 10000, 15000, 20000, '1005', '1', '  Jagung Manis adalah ', 'jagung manis.jpg', 'TAM-006', 1),
(10, 'Buncis', 0, 10000, 13000, 16000, '1005', '1', '  Buncis Adalah ', 'buncis.jpg', 'TAM-007', 1),
(11, 'Kacang Panjang', 0, 3000, 4000, 7000, '1005', '1', '  Kacang Panjang Adalah ', 'kacang panjang.jpg', 'TAM-008', 1),
(12, 'Bawang Merah', 0, 12000, 14000, 17000, '1005', '1', '  Bawang Merah Adalah ', 'bawang merah.jpeg', 'TAM-009', 1),
(13, 'Bawang Putih', 0, 20000, 22000, 23000, '1005', '1', '  Bawang Putih Adalah ', 'bawang putih.jpg', 'TAM-010', 1),
(14, 'Gabah Lokal', 14, 6600, 6700, 6800, '1006', '1', '  Gabah Lokal Adalah ', 'gabah lokal.jpg', 'TAM-011', 2),
(15, 'Gabah Unggul', 14, 6000, 6100, 6200, '1006', '1', '  Gabah Unggul Adalah ', 'gabah uggul.jpg', 'TAM-012', 2),
(16, 'Siam Mutiara', 14, 10200, 11200, 12200, '1007', '1', '  Siam Mutiara adalah beras ', 'siam.jpg', 'TAM-013', 2),
(17, 'Ciherang', 13, 8200, 9200, 10200, '1007', '1', '  Ciherang adalah Beras Yang ', 'ciherang.jpg', 'TAM-014', 2),
(18, 'Jagung (pipilan)', 0, 8000, 9000, 12000, '1008', '1', '   Jagung (pipilan) ialah jagung   ', 'jagung piilan.jpg', 'TAM-015', 2),
(19, 'Kacang Kedelai', 0, 4800, 5800, 6800, '1008', '1', '   Kacang Kedelai ialah kacang yang  ', 'kacang kedelai.jpg', 'TAM-016', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `usertb`
--

CREATE TABLE IF NOT EXISTS `usertb` (
  `userid` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `islevel` enum('admin','oprator') NOT NULL,
  `batas_login` int(2) NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `jammasuk` datetime NOT NULL,
  `jamkeluar` datetime NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `usertb`
--

INSERT INTO `usertb` (`userid`, `username`, `password`, `namalengkap`, `email`, `islevel`, `batas_login`, `blokir`, `jammasuk`, `jamkeluar`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Rizky', 'Rizky@Gmail.com', 'admin', 0, 'N', '2020-03-24 01:17:10', '2020-03-24 01:11:26'),
(2, 'operator', '515133ed2aca1f29cf7ba37a49eb9bbd', 'user', 'user@Gmail.com', 'oprator', 0, 'N', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'scsa', 'cb6a8e11f359d583b090061b285d37fc', 'sacsa', 'sacs@gmail.com', 'oprator', 3, 'N', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'budi', '00dfc53ee86af02e742515cdcf075ed3', 'budi', 'budi@gmail.com', 'oprator', 1, 'N', '2019-01-16 23:07:04', '2019-01-16 23:07:29'),
(5, 'ani', '29d1e2357d7c14db51e885053a58ec67', 'ani', 'ani@gmail', 'oprator', 0, 'N', '2019-01-16 23:02:16', '2019-01-16 23:03:41'),
(6, 'adi', 'c46335eb267e2e1cde5b017acb4cd799', 'adi', 'adi@gmail.com', 'oprator', 0, 'N', '2019-08-26 23:44:20', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
