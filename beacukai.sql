SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `beacukai`
--

-- --------------------------------------------------------

--
-- Table structure for table `alasan`
--

CREATE TABLE IF NOT EXISTS `alasan` (
  `id_alasan` int(10) NOT NULL AUTO_INCREMENT,
  `id_newdata` int(10) NOT NULL,
  `status_newdata` varchar(100) NOT NULL,
  `alasan` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_alasan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `alasan`
--

INSERT INTO `alasan` (`id_alasan`, `id_newdata`, `status_newdata`, `alasan`, `id_user`) VALUES
(1, 1, 'selesai', '', 0),
(2, 3, 'approve', '', 0),
(3, 3, 'selesai', '', 0),
(4, 11, 'approve', '', 0),
(5, 7, 'approve', '', 0),
(6, 8, 'approve', '', 0),
(7, 10, 'approve', '', 0),
(8, 10, 'approve', '', 0),
(9, 12, 'approve', '', 0),
(10, 13, 'approve', '', 0),
(11, 14, 'approve', '', 0),
(12, 15, 'approve', '', 0),
(13, 7, 'approve', '', 0),
(14, 17, 'approveumum', '', 12),
(15, 6, 'approvestaff', '', 21),
(16, 19, 'approveumum', '', 12),
(17, 20, 'approveumum', '', 12),
(18, 21, 'approve', '', 0),
(19, 21, 'approve', '', 0),
(20, 24, 'approveumum', '', 12),
(21, 22, 'rejectumum', '', 12),
(22, 23, 'rejectumum', '', 12);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id_slider` int(4) NOT NULL AUTO_INCREMENT,
  `nama_slider` varchar(60) NOT NULL,
  `img` varchar(60) NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id_slider`, `nama_slider`, `img`) VALUES
(7, 'slide2', '20861948_199043163966474_228856788831827087_o.jpg'),
(8, 'slide3', '1502418862541.jpg'),
(9, 'slide4', '20819646_198663674004423_4448533754976334927_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `isi`
--

CREATE TABLE IF NOT EXISTS `isi` (
  `id_isi` int(4) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id_isi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `isi`
--

INSERT INTO `isi` (`id_isi`, `judul`, `isi`, `img`) VALUES
(3, 'Apel Pagi Dalam Rangka Menyambut Hari Kemerdekaan ', 'Jakarta (15/08) â€“ Bertempat di Kantor Pusat Direktorat Jenderal Bea dan Cukai (DJBC), dalam rangka bulan kemerdekaan Republik Indonesia diadakan Apel Pagi yang diikuti oleh seluruh Pejabat dan Pegawai DJBC di lingkungan Kantor Pusat. Sebagai pembina apel, Direktur Jenderal Bea dan Cukai Heru Pambudi dalam amanatnya menyampaikan bahwa Deklarasi Bersama Kemenkeu beserta Aparat Penegak Hukum dalam program Penertiban Impor Berisiko Tinggi yang dilakukan pada tanggal 12 Juli 2017 yang lalu, merupakan sebuah momentum besar untuk melakukan perubahan. Hadirnya semua pimpinan lembaga penegak hukum di Indonesia  hendaknya menjadi pendorong semangat seluruh jajaran Direktorat Jenderal Bea dan Cukai dalam menegakkan aturan dan memberantas segala pelanggaran di lapangan.\r\n Direktur Jenderal Bea dan cukai juga menyampaikan apresiasi yang sebesar-besarnya kepada seluruh pejabat dan pegawai yang memiliki andil dalam pengungkapan dan penangkapan kapal â€œwanderlustâ€ yang mengangkut 1 ton narkotika jenis methampethamine (shabu), pengungkapan kasus methampethamine (shabu) seberat 281.6 Kg di Pluit, serta usaha penggagalan pemasukan 1,2 juta ekstasi dari Belanda melalui Pantai Utara Tangerang, dan kasus-kasus lainnya.\r\n\r\nâ€œSebagai pimpinan DJBC saya mengatakan bahwa rekan-rekan adalah pemilik institusi ini. Anak-anak muda yang ada di hadapan saya ini, kalian lah pewaris institusi Bea Cukai tercinta ini. Buatlah kami bangga menjadi senior-seniormu yang ada di depan ini, buatlah kami bangga, ketika kami sepuh, lemah dan tertatih ketika hadir di kantor ini, suatu hari nanti â€, ungkap Heru Pambudi.\r\n\r\nDalam penutupnya, Heru Pambudi mengajak kepada seluruh jajaran Direktorat Jenderal Bea dan Cukai dalam rangka merayakan hari kemerdekaan Republik Indonesia untuk menjadikan Penertiban Impor Berisiko Tinggi sebagai bentuk perjuangan untuk mengisi kemerdekaan. â€œMari kita lakukan yang terbaik untuk organisasi, bangsa dan negara ini, semoga Tuhan Yang Maha Kuasa selalu meridhoi langkah kitaâ€, pungkas Heru.\r\n\r\nApel pagi diakhiri dengan pemberian penghargaan kepada pegawai teladan dan pegawai berprestasi di lingkungan Direktorat Jenderal Bea dan Cukai.\r\n', '20776754_199118613958929_1791740387407631543_o.jpg'),
(4, 'PERCEPAT PEMBAYARAN BEA MASUK DAN PAJAK IMPOR, BEA', 'Entikong â€“ Bea Cukai telah bekerja sama dengan PT. Bank Mandiri Tbk dalam penyediaan mini automatic teller machine (ATM) guna memudahkan pembayaran pajak, dan bea masuk. Pada tahap awal, sebanyak 54 mini ATM dan mesin electronic data capture (EDC) telah disebar ke berbagai kantor pengawasan, pelabuhan, dan bandara. Tak hanya itu, Bea Cukai juga menempatkan mesin pembayaran tersebut di kantor-kantor perbatasan, salah satunya Entikong. Pada hari Kamis (10/08), Bea Cukai Entikong mulai meresmikan mini ATM sebagai salah satu metode pembayaran Bea Masuk dan pajak dalam rangka impor.\r\n Direktur Penerimaan dan Perencanaan Strategis, Sugeng Apriyanto, mengungkapkan bahwa penempatan mesin-mesin pembayaran otomatis sejalan dengan nawacita Presiden Republik Indonesia untuk meningkatkan pembangunan daerah perbatasan. â€œDengan menempatkan mesin-mesin tersebut di perbatasan, kami dapat menghimpun penerimaan negara berupa bea masuk dan pajak dalam rangka impor lebih efektif dan efisien. Ketika orang datang ke Indonesia melewati PLBN Entikong, dan diharuskan membayar Bea Masuk serta Pajak Dalam Rangka Impor atas barang yang dibawanya, mereka dapat membayarnya melalui mini ATM ini,â€ ujar Sugeng.\r\n\r\nMesin mini ATM tersebut bertujuan untuk membantu Bea Cukai dalam meningkatkan penerimaan negara dari aktivitas ekspor dan impor melalui pembayaran non tunai. Direktur Government PT Bank  Mandiri Tbk, Kartini Sally mengatakan bahwa selain berfungsi menambah pundi-pundi ke kantong negara, tujuan penting lain adalah untuk mempercepat pelayanan dalam pencatatan pelaporan keuangan setelah bertransaksi menggunakan ATM mini tersebut.\r\n\r\nPada kesempatan yang sama Kepala Kantor Wilayah Bea Cukai Kalimantan Bagian Barat, Saifullah Nasution mengatakan bahwa Bea Cukai pada akhir tahun lalu memperoleh penerimaan mencapai Rp 840 juta. â€œDengan adanya mesin ini diharapkan penerimaan negara tahun ini dari Entikong akan bertambah. Selain itu diharapkan juga segera terealisasi pembangunan terminal barang di Perbatasan Entikong,â€ pungkas Saifullah.\r\n', '20776754_199118613958929_1791740387407631543_o.jpg'),
(5, 'BEA CUKAI TEMBILAHAN GAGALKAN PENYELUNDUPAN RIBUAN', 'Tembilahan â€“ Bea Cukai Tembilahan berhasil menegah sebuah kapal yang diduga mengangkut produk perikanan ilegal. Pada hari Sabtu (05/08) Kapal KM. Sinar Abadi 5 yang berasal dari Batam ditangkap oleh Bea Cukai Tembilahan bekerja sama dengan Bea Cukai Riau dan Sumatera Barat, serta Bea Cukai Batam.\r\nPetugas yang melakukan penangkapan terhadap kapal tersebut mendapati sebanyak lebih dari 3.400 karton produk perikanan yang diangkut tanpa dokumen kepabeanan. Kepala Subbagian Umum Kantor Bea Cukai Tembilahan, Dwi Suhartanto menjelaskan bahwa dari kasus ini potensi kerugian yang diderita mencapai Rp 202 juta, â€œselain dampak material, penyelundupan ini juga dapat mengganggu stabilitas harga di pasar dalam negeri. Selain itu, bisa juga dapat berpotensi membawa penyakit bagi masyarakat,â€ ujarnya.\r\n\r\nUntuk penelitian kasus lebih lanjut, Bea Cukai Tembilahan telah melakukan koordinasi dan pelimpahan perkara kepada Kepala Stasiun Karantina Ikan dan Pengendalian Mutu Kelas I Pekanbaru sebagai instansi yang berwenang dalam peraturan perundang-undangan terkait produk perikanan.\r\n\r\nPenindakan kali ini dilakukan sebagai tanggung jawab Bea Cukai dalam menjaga keamanan dan ketertiban terhadap pemasukan dan peredaran produk-produk perikanan ilegal yang merugikan masyarakat. â€œDengan dilakukannya penindakan ini diharapkan dapat menimbulan efek jera dan dapat meningkatkan sinergi antara instansi pemerintah dalam pengawasan, pengamanan hak-hak penerimaan negara maupun dalam melindungi negara dan masyarakat dari masuknya barang-barang ilegal dan berbahaya dari luar negeri,â€ pungkas Dwi.\r\n', '20776754_199118613958929_1791740387407631543_o.jpg'),
(6, 'LAKUKAN PENINDAKAN TERHADAP RIBUAN BOTOL MIRAS ILE', 'Jakarta (12/08/2017) â€“ Kementerian Keuangan melalui Direktorat Jenderal Bea Cukai bersama kementerian dan lembaga terkait, serta para aparat penegak hukum telah meluncurkan program penertiban impor berisiko tinggi. Program tersebut bertujuan untuk menciptakan praktik bisnis yang adil dan menciptakan persaingan usaha yang sehat. Program tersebut tidak terbatas hanya itu, melalui program ini pemerintah juga bertujuan untuk memperketat pengawasan terhadap upaya penyelundupan barang larangan dan dibatasi.\r\nSinergi yang dijalin DJBC bersama aparat penegak hukum telah berhasil menggagalkan beberapa upaya penyelundupan barang larangan dan pembatasan. Pada Sabtu (05/08) Badan Pemeliharaan Keamanan (Baharkam) Direktorat Kepolisian Air (Ditpolair) telah menggagalkan upaya penyelundupan 6.900 botol minuman keras ilegal dan 58 pax cerutu yang datang dari Malaysia dan Singapura. Ribuan botol miras yang dimasukkan ke dalam 500 koper tersebut dibawa oleh delapan orang porter menggunakan kapal KMP Dorolonda dari Pelabuhan Kijang, Kepulauan Riau ke Pelabuhan Tanjung Priok.\r\n\r\nUntuk melakukan pengembangan penelitian terhadap kasus ini, pada hari ini Sabtu 12 Agustus 2017 Ditpolair melakukan serah terima barang bukti 6.900 botol minuman keras dan 58 pax cerutu ilegal tersebut kepada Bea Cukai dalam hal ini adalah Kantor Wilayah DJBC Jakarta. Hal ini dilakukan sebagai bentuk profesionalisme dalam melakukan penindakan terhadap upaya barang-barang ilegal, mengingat penanganan dugaan pelanggaran atas barang kena cukai ilegal merupakan kewenangan Bea Cukai.\r\n\r\nKepala Kantor Wilayah Bea Cukai Jakarta, Oentarto Wibowo mengungkapkan, setelah dilakukan serah terima miras ilegal oleh pihak Kepolisian kepada Bea Cukai, pihaknya akan melakukan penelitian lebih lanjut. â€œBea Cukai akan melakukan penelitian lebih lanjut guna menemukan kemungkinan terjadinya pelanggaran di bidang kepabeanan dan cukai,â€ ungkapnya. Ia menambahkan bahwa penelitian akan dilakukan sesuai dengan Undang-Undang No.10 Tahun 1995 jo. Undang-Undang No. 17 Tahun 2006 tentang Kepabeanan dan Undang-Undang No. 11 Tahun 1995 jo. Undang-Undang No. 39 Tahun 2007 tentang Cukai.', '20818916_199418010595656_6330713361210741042_o.jpg'),
(7, 'INI LANGKAH BEA CUKAI OPTIMALKAN PENERIMAAN DAN PE', 'Bandung â€“ Target penerimaan dari sektor cukai yang telah ditetapkan dalam APBN-P 2017 sebesar 153,16 T. Hal ini menuntut Bea Cukai bekerja ekstra dalam memenuhi target tersebut. Guna membahas upaya-upaya ekstra yang perlu dilakukan dalam mengawasi peredaran barang kena cukai sekaligus mengumpulkan penerimaan cukai, Bea Cukai menyelenggarakan Rapat Kerja Pengawasan di Bidang Cukai yang dilangsungkan pada hari Rabu (09/08).\r\nKepala Kantor Bea Cukai Wilayah Jawa Barat, Muhammad Purwantoro menyampaikan dalam rapat tersebut bahwa rakerwas kali ini merupakan salah satu upaya untuk mengatur strategi dalam rangka optimalisasi penerimaan di bidang cukai. Hal tersebut juga disampaikan oleh Direktur Teknis dan Fasilitas Cukai, Marisi Zainudin Sihotang, "selain sebagai bentuk upaya mengoptimalkan penerimaan di bidang cukai, Rakerwas ini ditujukan untuk menjaga penerimaan negara terutama dari sisi peningkatan pengawasan BKC," jelasnya.\r\n\r\nSurvey Universitas Gajah Mada pada tahun 2016 tentang tingkat peredaran rokok ilegal sebesar 12,14%. "Angka tersebut menunjukkan penurunan tren peningkatan peredaran rokok ilegal setelah dilakukan upaya optimalisasi pengawasan peredaran rokok ilegal, yang pada tahun-tahun sebelumnya cenderung mengalami peningkatan sekitar 30%," ungkap Marisi.\r\n\r\nMarisi menambahkan langkah-langkah yang dilakukan untuk menurunkan tingkat peredaran rokok ilegal selain meningkatkan pengawasan, antara lain dengan menerapkan manajemen resiko, melakukan monitoring di lapangan, operasi pasar, dan melakukan survei internal peredaran rokok ilegal sebagai early warning sehingga peredaran rokok ilegal dapat berkurang.\r\n\r\nUntuk mengatasi kesenjangan antara cakupan wilayah pengawasan DJBC yang sangat luas, dan terbatasnya sumber daya manusia, diperlukan sinergi yang baik antara DJBC dengan berbagai pihak, diantaranya instansi-instansi terkait serta pemerintah daerah setempat, untuk dapat diajak bekerjasama menekan peredaran rokok ilegal. Adanya ketentuan terkait Dana Bagi Hasil yang dialokasikan kepada pemerintah daerah diharapkan dapat dimanfaatkan secara optimal untuk memberantas peredaran rokok ilegal sehingga di sisi lain penerimaan negara dapat semakin meningkat.\r\n\r\nSementara itu Kepala Subditektorat Komunikasi dan Publikasi, Deni Surjantoro menyatakan  bahwa untuk meningkatkan efektivitas upaya pengawasan dan pengamanan cukai dibutuhkan juga dukungan dari masyarakat. "Perlunya diberikan pemahaman yang baik kepada seluruh unsur masyarakat mengenai program-program yang sedang dilaksanakan, Bea Cukai mengembangkan strategi komunikasi dalam upaya preventif peredaran rokok ilegal."\r\n\r\n"Diharapkan dengan teredukasinya masyarakat dapat secara tidak langsung mendukung upaya DJBC dalam memberantas peredaran rokok ilegal," ujar Deni.', '20818916_199418010595656_6330713361210741042_o.jpg'),
(8, 'INDUSTRI CUKAI KIAN BERKEMBANG, BEA CUKAI PERBARUI', 'Jakarta  â€“ Kementerian Keuangan secara resmi telah menerbitkan Peraturan Menteri Keuangan (PMK) terbaru yang mengatur tentang Tidak Dipungut Cukai. Melalui PMK nomor 59/PMK.04/2017 yang mulai berlaku sejak 1 Agustus 2017 Kementerian Keuangan melakukan perubahan terhadap beberapa substansi di antaranya memperjelas kriteria cukai tidak dipungut atas barang kena cukai (BKC), penambahan beberapa materi terkait tanggung jawab terhadap pengeluaran dan pemasukan BKC yang tidak dipungut cukai, dan menambahkan materi tentang dokumen dokumen yang digunakan sebagai dasar tidak dipungut cukai.\r\nDirektur Kepabeanan Internasional dan Antar Lembaga, Robert Leonard Marbun, mengungkapkan bahwa untuk mendukung implementasi PMK 59/PMK.04/2017, Direktorat Jenderal Bea Cukai juga telah menerbitkan Peraturan Direktur Jenderal Bea Cukai nomor PER-18/BC/2017 tentang Tata Cara Tidak Dipungut Cukai yang mulai diberlakukan tanggal 6 Agustus 2017. â€œPeraturan ini bersifat mengganti peraturan tentang Tata Cara Tidak Dipungut Cukai terdahulu. Harapannya dapat semakin memberikan kepastian hukum, meningkatkan pelayanan dan tertib administrasi di bidang cukai, serta mengakomodir perkembangan industri barang kena cukai,â€ ujarnya.\r\n\r\nSelain menambahkan beberapa substansi, dalam peraturan terbaru ini turut disempurnakan materi terkait objek-objek cukai yang tidak dipungut cukainya di antaranya barang kena cukai yang belum dilunasi cukainya yang musnah karena keadaan darurat. Di dalam peraturan tersebut juga dijelaskan bahwa akan diberikan toleransi terhadap perbedaan jumlah ataupun volume sebesar 0,5% dari jumlah barang kena cukai yang seharusnya dalam beberapa kondisi tertentu yang diatur dalam peraturan terbaru ini.\r\n\r\nRobert menambahkan bahwa dengan terbitnya peraturan terbaru terkait tata cara tidak dipungut cukai diharapkan dapat meningkatkan pelayanan di bidang cukai sehingga terdapat keseragaman dalam pelaksanaan tidak dipungutnya cukai oleh kantor-kantor bea cukai yang melakukan pengawasan terhadap para pengusaha cukai. â€œSelain untuk memberikan kepastian hukum, pemberlakukan peraturan ini juga diharapkan dapat meningkatkan tata tertib administrasi para pengusaha barang kena cukai,â€ ungkap Robert.\r\n\r\nMasih menurut Robert, agar peraturan ini dapat diimplementasikan dengan baik ia berharap agar para pengusaha di bidang cukai dapat terus mengikuti perkembangan terbaru terkait peraturan di bidang cukai. Selain itu, para pengusaha di bidang cukai dapat berkonsultasi kepada para petugas Bea Cukai baik dengan mendatangi kantor Bea Cukai atau dengan menghubungi pusat kontak layanan Bravo Bea Cukai 1500225.', '20818916_199418010595656_6330713361210741042_o.jpg'),
(9, 'DALAM DUA MINGGU, PETUGAS BEA CUKAI, BNN, DAN KEPOLISIAN GAGALKAN DUA UPAYA PENYELUNDUPAN SABU DI ACEH DAN JAGOI BABANG', 'JAKARTA (23/08/2017) â€“ Upaya penyelundupan narkotika jenis methamphetamine (sabu) oleh sindikat internasional jaringan Malaysia berhasil dibongkar oleh petugas Bea Cukai bekerja sama dengan Badan Narkotika Nasional (BNN) dan Kepolisian Republik Indonesia. Dalam kurun waktu dua minggu, petugas gabungan berhasil menggagalkan dua upaya penyelundupan sabu di Kabupaten Bengkayang, Kalimantan Barat, dan Kabupaten Aceh Utara, Nanggroe Aceh Darussalam (NAD). Dari kedua aksi penangkapan tersebut petugas berhasil mengamankan barang bukti sabu seberat 57,54 Kilogram.\r\n Atas informasi yang diperoleh dari masyarakat, pada hari Minggu (06/08), petugas gabungan Bea Cukai Kalimantan Bagian Barat, BNN, dan Kepolisian Daerah Kalimantan Barat menangkap seorang pelaku berinisial R yang diduga menyelundupkan sabu dari Kuching, Malaysia ke wilayah Indonesia melalui perbatasan Jagoi Babang. Petugas menangkap pelaku dengan barang bukti berupa 17 bungkus sabu seberat 17,54 Kilogram dan sebuah mobil minibus di daerah Ledo, Bengkayang.\r\n\r\nBerdasarkan pengembangan penyelidikan petugas turut berhasil menangkap tiga orang tersangka di daerah Kelurahan Sebayok, Bengkayang. Para pelaku yang berhasil diamankan ketiganya berkewarganegaraan Malaysia, mereka adalah A yang merupakan kurir sekaligus checker, LUH sebagai penghubung antara pembeli narkotika dan supplier narkotika, serta CKH yang juga berperan sebagai supplier narkotika. Saat dimintai keterangan oleh petugas, pelaku berinisial CKH sempat menawarkan uang sebesar Rp10 miliar, namun hal tersebut tidak dihiraukan oleh petugas. Dalam proses pengembangan kasus, dua pelaku berinisial CKH dan A berusaha melawan petugas, sehingga harus dilakukan tindakan tegas yang mengakibatkan keduanya meninggal dunia.\r\n\r\nSelain itu juga petugas juga melakukan penangkapan terhadap MY, DZ, dan TF di depan Hotel Harris, Jalan Gajah Mada, Pontianak. Tersangka TF merupakan narapidana yang sedang ditahan di Rutan Kelas II Bengkayang. Dari kasus di Jagoi Babang petugas berhasil mengamankan barang bukti sabu seberat 17,54 Kilogram, dua unit mobil, 18 unit telepon genggam, dan kartu identitas para pelaku\r\n\r\nTak berselang lama dari kasus di Jagoi Babang, pada hari Jumat (18/08), petugas gabungan Bea Cukai Aceh, BNN, dan Kepolisian Daerah Nanggroe Aceh Darussalam berhasil mengamankan sabu sebanyak 40 bungkus seberat 40 Kilogram. Tak hanya sabu, petugas juga menangkap lima pelaku berinisial M, Z, TM, S, dan MD di Jalan Lintas Medan â€“ Aceh, Kecamatan Tanah Jambo Aye, Kabupaten Aceh Utara.\r\n\r\nBerdasarkan hasil pengembangan penyelidikan jaringan penyelundupan dan peredaran gelap narkotika dari Penang, Malaysia, didapatkan informasi bahwa akan adanya kegiatan penyelundupan sabu melalui jalur laut menuju NAD yang kemudian akan diedarkan di wilayah NAD, Medan, dan Jakarta. Direktur Jenderal Bea Cukai, Heru Pambudi, mengungkapkan bahwa atas informasi tersebut petugas Bea Cukai, BNN, dan Polda NAD melakukan observasi dan surveillance. â€œKegiatan pengawasan dilakukan sejak sabu tersebut masuk ke wilayah Indonesia melalui Pantai Idi Cut, Aceh Utara. Dari tempat tersebut petugas terus mengawasi pergerakan hingga dilakukan penangkapan pada hari Jumat (18/08),â€ ujarnya.\r\n\r\nPetugas mendapati modus yang digunakan oleh jaringan ini adalah dengan menyelundupkan sabu dari Penang, Malaysia melalui jalur laut menuju Pantai Idi Cut, Aceh Utara oleh pelaku berinisial J dan D yang saat ini masih buron. Keduanya membawa sabu atas perintah pelaku berinisial TM yang berperan sebagai koordinator kurir dan pemilik kapal. Setelah sabu yang disembunyikan ke dalam dua buah tas itu sampai di wilayah NAD, M dan Z membawanya menggunakan kendaraan minibus dengan dikawal oleh TM dan S yang juga menggunakan sebuah kendaraan minibus. Dari pengakuan para pelaku, sabu tersebut akan dipindahtangankan kepada MD yang nantinya akan diserahkan kepada pelaku berinisial H yang merupakan pemilik sabu tersebut. Saat ini pelaku H masih berstatus dalam Daftar Pencarian Orang (DPO), terakhir dirinya diketahui berlokasi di Biereun, NAD.\r\n\r\nHeru menambahkan, hingga 22 Agustus 2017 Bea Cukai telah berhasil menggagalkan 163 kasus upaya penyelundupan narkotika, psikotropika, dan prekursor dengan berat total barang bukti mencapai 1.135 Kilogram. Untuk penyelundupan sabu sendiri, Bea Cukai telah berhasil mengamankan barang bukti dengan berat total mencapai 695,5 Kilogram. Upaya ini tentunya tidak terlepas dari sinergi yang dilakukan antar aparat penegak hukum dan informasi dari masyarakat dalam membantu petugas mengungkap praktik penyelundupan narkoba. â€œBea Cukai akan terus memperkuat sinergi bersama para aparat penegak hukum, juga masyarakat dalam mengamankan wilayah Indonesia dari peredaran barang terlarang seperti narkotika,â€ pungkas Heru.', '21014013_201815677022556_3898315307468128998_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newdata`
--

CREATE TABLE IF NOT EXISTS `newdata` (
  `id_newdata` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `nama_berkas` varchar(100) NOT NULL,
  `permohonan` varchar(100) NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `katalog` varchar(100) NOT NULL,
  `status_data` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `reject` varchar(100) NOT NULL,
  PRIMARY KEY (`id_newdata`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `newdata`
--

INSERT INTO `newdata` (`id_newdata`, `id_user`, `nama_berkas`, `permohonan`, `uraian`, `invoice`, `katalog`, `status_data`, `tgl`, `reject`) VALUES
(6, 11, 'Berkas Permohonan PT.ABC', 'permohonan.pdf', 'contoh.xlsx', 'invoice.pdf', 'katalog.pdf', 'approvestaff', '2017-08-22', ''),
(7, 16, 'permohonan PT. Intan Hevea', '', '', '', '', 'approve', '2017-08-22', ''),
(8, 17, 'Ijin Impor Barang Modal PT. Soci Mas', '081 Surat.pdf', '081.xlsx', '081 Invoice.pdf', '081 Drawing.pdf', 'approveumum', '2017-08-23', ''),
(14, 13, 'SURAT PERMOHONAN PEMASUKAN BARANG MODAL NO.L-073 TGL 25.08.17 (PT.MEDISAFE TECHNOLOGIES)', 'L-073 TGL 25.08.17.pdf', 'URAIAN L-073.pdf', 'PO.17228 & 18053.pdf', 'FOTO L-073.pdf', 'approveumum', '2017-08-25', ''),
(10, 17, 'Ijin Impor Barang Modal PT. Soci Mas', '082 Surat JJ Lurgi.pdf', '082 Lampiran JJ Lurgi.xlsx', '082 Invoice JJ Lurgi.pdf', '082 Drawing JJ Lurgi.pdf', 'approveumum', '2017-08-23', ''),
(11, 17, 'Ijin Impor PT. Soci Mas', '083 Surat Beaver.pdf', '083 Lampiran Beaver.xlsx', '083 Invoice Beaver.pdf', '083 Drawing Beaver.pdf', 'approveumum', '2017-08-23', ''),
(12, 17, 'Ijin Impor Barang Modal PT. Soci Mas', '084 Surat PFM Engineering.pdf', '084 Lampiran PFM Engineering.xlsx', '084 Invoice PFM Engineering.pdf', '084 Drawing PFM Engineering.pdf', 'approveumum', '2017-08-23', ''),
(13, 19, 'PERMOHONAN IZIN PEMASUKAN BARANG MODAL KE KAWASAN BERIKAT NO. 221.LC/MM-OLC/VIII/2017', 'PERMOHONAN 221.pdf', 'LAMPIRAN 221.xls', 'PO170315-KM2-093.pdf', 'BROSUR.pdf', 'approveumum', '2017-08-23', ''),
(15, 23, 'PT. Mark Dynamics Indonesia ', 'Surat Permohonan No 045.pdf', 'Uraian.xlsx', 'Invoice.pdf', 'Katalog.pdf', 'approveumum', '2017-08-26', ''),
(16, 0, 'Ijin Impor Barang Modal PT. Soci Mas', '085 Surat Teikoku.PDF', '085 Lampiran Teikoku.xlsx', '085 Inv Teikoku.PDF', '085 Drawing Teikoku.PDF', 'new', '2017-08-28', ''),
(17, 17, 'Ijin Impor Barang Modal PT. Soci Mas', '085 Surat Teikoku.PDF', '085 Lampiran Teikoku.xlsx', '085 Inv Teikoku.PDF', '085 Drawing Teikoku.PDF', 'approveumum', '2017-08-28', ''),
(18, 0, 'Ijin Impor Barang Modal PT. Soci Mas ', '086 Surat Metallic.PDF', '086 Lampiran Metallic.xlsx', '086 Invoice Metallic.PDF', '086 Drawing Metallic.PDF', 'new', '2017-08-28', ''),
(19, 17, 'Ijin Impor Barang Modal PT. Soci Mas', '086 Surat Metallic.PDF', '086 Lampiran Metallic.xlsx', '086 Invoice Metallic.PDF', '086 Drawing Metallic.PDF', 'approveumum', '2017-08-28', ''),
(20, 15, 'BLE-PPO/X/222/08 17', 'surat permohonan.pdf', 'Daftar Barang Modal 29.08.2017 - KIM.xls', 'PO.pdf', 'catalog.pdf', 'approveumum', '2017-08-29', ''),
(21, 19, 'PERMOHONAN IZIN PEMASUKAN SUKU CADANG KE KAWASAN BERIKAT NO. 224.LC/MM-OLC/VIII/2017', 'PERMOHONAN.pdf', 'lampiran 224.xls', 'PO.pdf', 'brosur.pdf', 'approve', '2017-08-29', ''),
(22, 24, 'Izin Pemasukan Peralatan 3MallTec 60', 'PERMOHONAN BC.pdf', 'URAIAN PERMOHONAN BC.pdf', 'PO dan invoice.pdf', '', 'rejectumum', '2017-08-29', ''),
(23, 24, 'Izin Pemasukan Peralatan 3MallTec 60', 'PERMOHONAN BC.pdf', '', '', '', 'rejectumum', '2017-08-29', ''),
(24, 24, 'Izin Pemasukan Peralatan 3MallTec 60', 'PERMOHONAN BC.pdf', 'URAIAN PERMOHONAN BC.pdf', 'PO dan invoice.pdf', '3MallTec-PHOTO.jpg', 'approveumum', '2017-08-29', '');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `id_user`, `nama_pegawai`) VALUES
(1, 3, 'dhani');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(6) NOT NULL AUTO_INCREMENT,
  `uraian` varchar(60) NOT NULL,
  `jumlah` varchar(60) NOT NULL,
  `fungsi` varchar(60) NOT NULL,
  `country` varchar(60) NOT NULL,
  `nopo` varchar(60) NOT NULL,
  `barang` varchar(60) NOT NULL,
  `nabar` varchar(606) NOT NULL,
  `jlhter` varchar(60) NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `uraian`, `jumlah`, `fungsi`, `country`, `nopo`, `barang`, `nabar`, `jlhter`) VALUES
(1, 'ljl', 'kj', 'klj', 'klj', 'klj', 'lkj', 'klj', 'lkj'),
(2, 'jkhjk', 'hjk', 'hjk', 'hkj', 'hjk', 'hkj', 'hkj', 'hkjh');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id_reg` int(6) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(60) NOT NULL,
  `npwp` varchar(60) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `skep_awal` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `skep_akhir` varchar(60) NOT NULL,
  `nama_penjawab` varchar(60) NOT NULL,
  `alamat_penjawab` varchar(60) NOT NULL,
  `tgl_skepawal` date NOT NULL,
  `tgl_skepakhir` date NOT NULL,
  `tlpn_perusahaan` varchar(60) NOT NULL,
  `no_faxperusahaan` varchar(60) NOT NULL,
  `emai_pru` varchar(60) NOT NULL,
  `img` text NOT NULL,
  `noawal` varchar(50) NOT NULL,
  `noakhir` varchar(50) NOT NULL,
  `id_user` int(10) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `zona` varchar(100) NOT NULL,
  PRIMARY KEY (`id_reg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id_reg`, `nama_perusahaan`, `npwp`, `alamat`, `skep_awal`, `email`, `skep_akhir`, `nama_penjawab`, `alamat_penjawab`, `tgl_skepawal`, `tgl_skepakhir`, `tlpn_perusahaan`, `no_faxperusahaan`, `emai_pru`, `img`, `noawal`, `noakhir`, `id_user`, `tgl_daftar`, `zona`) VALUES
(16, 'PT.ABC ', '124535', 'JL.Sei Padang No.1', 'a', 'dhany.zone@gmail.com', 'a', 'Ramadhani Pratama', 'Jl.Sei Padang Gg Saudara No.1', '2017-08-22', '2017-08-21', '061123456', '06198874', '', '', '7894', '09886', 11, '2017-08-22', 'zona1'),
(17, 'PT. MEDISAFE TECHNOLOGIES', '01.068.022.1-052.000', 'JALAN BATANG KUIS GG.TAMBAK REJO DESA BUNTU BEDIMBAR KEC.TAN', '', 'gunawan@medisafe.org', '', 'Bang Deepak Kumar', 'JL. S.PARMAN NO.217 CAMBRIDGE CONDIMINIUM,MEDAN', '2003-03-19', '2014-10-22', '061-30007134', '061-30007133', '', '', '101/KMK.04/2003', '2240/KM.4/2014', 13, '2017-08-22', ''),
(18, 'PT.Permata Hijau Palm Oleo', '014310247121000', 'Jl.Pelabuhan Baru Lr.Sawita No.124, Kel.Bagan Deli, Kec.Meda', '', 'Constantine@permatagroup.com', '', 'Jhonny Virgo', 'Jl.Iskandar Muda No.107 Medan', '2015-06-08', '2016-10-23', '0614577777', '0614569755', '', '', '1227/KM.4/2015', 'KM-46/WBC.02/2016', 14, '2017-08-22', ''),
(19, 'PT.Permata Hijau Palm Oleo - KIM', '014310247121000', 'Kawasan Industri Medan II, Jalan Pulau Komodo No.1, Desa Sae', '', 'Constantine@permatagroup.com', '', 'Jhonny Virgo', 'Jl.Iskandar Muda No.107, Medan', '2016-12-23', '2017-06-05', '0614577777', '0614569755', '', '', '2632/KM.4/2016', 'KM-29/WBC.02/2017', 15, '2017-08-22', ''),
(20, 'PT. INTAN HEVEA INDUSTRY', '014672885125000', 'JL. PULAU IRIAN NO. 13 KM 10,5 KIM I SAENTIS, PERCUT SEI TUA', '', 'billing@intanhevea.com', '', '', '', '0000-00-00', '0000-00-00', '061-6850169', '061-6856335', '', '', '', '', 16, '2017-08-22', ''),
(21, 'PT. SOCI MAS', '01.597.299.5-123.000', 'JL. PULAU IRIAN, KAWASAN INDUSTRI MEDAN NO. 2 SAENTIS, PERCU', '', 'daryono@sinarmas-agri.com', '', 'TAN I TJHANG', 'JL. ALFALAH NO 1MM, GLUGUR DARAT I, MEDAN TIMUR, MEDAN', '2012-04-12', '2014-04-14', '061-6851582', '061-6851930', '', '', '955/KM.4/2012', '146/WBC.02/KPP.MP.01/2014', 17, '2017-08-22', ''),
(22, 'PT. ALFO CITRA ABADI', '01.487.527.2-123.000', 'JL. PEMBANGUNAN, DUSUN X, DESA MARENDAL I, KECAMATAN PATUMBA', '', 'alfotax@aluminiumalca.com', '', 'PAIDY LUKMAN', 'JL. MESJID RAYA NO. 14 MEDAN', '2014-11-25', '2016-06-27', '+6261-7031084', '+6261-7031083', 'alcametals@aluminiumalca.com', '', '2678/KM.4/2014', 'KM-36/WBC.02/2016', 18, '2017-08-23', ''),
(23, 'MUSIM MAS', '011000163092000', 'JL. KL YOS SUDARSO KM. 7,8 TANJUNG MULIA, MEDAN DELI, MEDAN ', '', 'youli@musimmas.com', '', 'RISMAWATI', 'JL. KL YOS SUDARSO KM. 7,8 TANJUNG MULIA, MEDAN DELI, MEDAN ', '2002-09-02', '2017-04-03', '0616615511', '0616613060', 'liecen@musimmas.com', '', '393/KMK.04/2002', 'KM-17/WBC.02/2017', 19, '2017-08-23', ''),
(25, 'PT. Sinar Mas Agro Resources And Tehnology Tbk ', '01.000.183.2-092.000', 'LOKASI PKB/PDKB I  : JALAN BELMERA BARU III, BELAWAN II,  KE', '', 'linda.cen@sinarmas-agri.com', '', 'Gianto Widjaja', 'Jalan Venus A3 No. 8-9 RT 001 RE 012, Pisangan, Ciputat Timu', '2004-04-02', '2014-12-23', '061-6941162', '', 'linda.cen@sinarmas-agri.com', '', '171/KMK.04/2004', '3109/KM.04/2014', 22, '2017-08-24', ''),
(26, 'PT. MARK DYNAMICS INDONESIA', '02.177.929.3-125.000', 'JALAN PELITA BARAT NO. 2 KAWASAN INDUSTRI MEDAN STAR, TANJUN', '', 'mdi.exim@yahoo.com', '', 'SUTIYOSO BIN RISMAN', 'JALAN PELITA BARAT NO. 2 KAWASAN INDUSTRI MEDAN STAR, TANJUN', '2003-07-09', '2012-05-11', '0617940715', '0617940747', 'mdi.exim@yahoo.com', '', '307/KMK.04/2003', '1533/KM.4/2012', 23, '2017-08-24', ''),
(27, 'PT TOBA SURIMI INDUSTRIES', '017189184125000', 'Jalan Pulau Pinang 2, Kawasan Industri Medan II Saentis - De', '', 'wiwi@tobasurimi.com', '', 'GINDRA TARDY', 'Jalan Pulau Pinang 2, Kawasan Industri', '2012-04-09', '0000-00-00', '62616871022', '62616871007', 'gindra@nusa.net.id', '', '871/KM.4/2012', '', 24, '2017-08-29', ''),
(28, 'PT TOBA SURIMI INDUSTRIES', '01.718.918.4-125.000', 'JALAN PULAU SUMATERA, KAWASAN INDUSTRI MEDAN I, KELURAHAN MA', '', 'wiwi@tobasurimi.com', '', 'GINDRA TARDY', 'JALAN PULAU SUMATERA, KAWASAN INDUSTRI MEDAN I, KELURAHAN MA', '2017-01-26', '0000-00-00', '62616857332', '62616858483', 'gindra@nusa.net.id', '', '216/KM.4/2017', '', 25, '2017-08-29', '');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id_setting` int(4) NOT NULL AUTO_INCREMENT,
  `judul` varchar(60) NOT NULL,
  `top_isi` text NOT NULL,
  `logo` text NOT NULL,
  `judul_logo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `judul`, `top_isi`, `logo`, `judul_logo`) VALUES
(1, 'Beacukai', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit incidunt praesentium quo blanditiis sunt eum. Vero ipsam, delectus aut harum, culpa reiciendis laborum natus exercitationem porro illo sit impedit nobis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit incidunt praesentium quo blanditiis sunt eum. Vero ipsam, delectus aut harum, culpa reiciendis laborum natus exercitationem porro illo sit impedit nobis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit incidunt praesentium quo blanditiis sunt eum. Vero ipsam, delectus aut harum, culpa reiciendis laborum natus exercitationem porro illo sit impedit nobis.', 'logo1.png', 'Beacukai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'member', 'member', 'member'),
(3, 'zona1', 'zona1', 'zona1'),
(5, 'pimpinan', 'pimpinan', 'pimpinan'),
(11, 'abc', 'abcasdf', 'member'),
(12, 'umum', 'umum', 'umum'),
(13, 'medisafetech', 'medisafe456', 'admin'),
(14, 'PHPOBELAWAN', 'phg12345', 'admin'),
(15, 'PHPOKIM', 'phg12345', 'member'),
(16, 'intanhevea', 'ihi@2017mama', 'member'),
(17, 'ptsocimas', 'socimasKPPBC17', 'member'),
(18, 'BCALFO', 'AM6688', 'member'),
(19, 'mmkim2', 'mm123', 'member'),
(20, 'mmkim1', 'mm123', 'member'),
(21, 'staff', 'staff', 'staff'),
(22, 'ptsmarttbk', 'Smart2017', 'member'),
(23, 'markdynamics', 'markdy123', 'member'),
(24, 'tobasurimi1', 'surimitoba17', 'member'),
(25, 'tobasurimi2', 'surimitoba17', 'member');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
