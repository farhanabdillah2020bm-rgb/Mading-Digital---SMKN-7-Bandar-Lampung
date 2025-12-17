<?php include "../includes/header.php"; ?>
<?php include "../admin/koneksi.php"; ?>

<link rel="stylesheet" href="../assets/css/profil.css">

<?php
// Ambil data profil dari database
$query = mysqli_query($conn, "SELECT * FROM profil WHERE id = 1");
$profil = mysqli_fetch_assoc($query);
?>

<section class="section-title">
    <h2>PROFIL SEKOLAH</h2>
    <p>Kenali lebih dekat sejarah, visi, misi, dan informasi SMKN 7 Bandar Lampung.</p>
</section>

<section class="profil-container">

    <!-- FOTO SEKOLAH -->
    <div class="profil-foto">
        <?php if (!empty($profil['foto'])) { ?>
            <img src="../assets/img<?= $profil['foto']; ?>" alt="Foto Sekolah">
        <?php } else { ?>
            <img src="../assets/img/profil.png" alt="Foto Sekolah">
        <?php } ?>
    </div>

    <!-- NAMA & ALAMAT -->
    <div class="profil-box">
        <h3><?= htmlspecialchars($profil['nama_sekolah']); ?></h3>
        <p><b>Alamat:</b> <?= nl2br(htmlspecialchars($profil['alamat'])); ?></p>
    </div>

    <!-- SEJARAH SEKOLAH -->
    <div class="profil-box">
        <h3>Sejarah Sekolah</h3>
        <p>
            SMKN 7 Bandar Lampung didirikan pada tahun 1995 dengan tujuan memberikan pendidikan berkualitas
            kepada seluruh peserta didik. Seiring berjalannya waktu, sekolah terus berkembang dalam hal fasilitas,
            tenaga pendidik, serta prestasi akademik maupun non-akademik.
        </p>
    </div>

    <!-- VISI -->
    <div class="profil-box">
        <h3>Visi</h3>
        <p><?= nl2br(htmlspecialchars($profil['visi'])); ?></p>
    </div>

    <!-- MISI -->
    <div class="profil-box">
        <h3>Misi</h3>
        <p><?= nl2br(htmlspecialchars($profil['misi'])); ?></p>
    </div>

    <!-- TUJUAN SEKOLAH (STATIC) -->
    <div class="profil-box">
        <h3>Tujuan Sekolah</h3>
        <ul>
            <li>Menciptakan tamatan yang bertaqwa kepada Tuhan YME dan berakhlak mulia.</li>
            <li>Menyiapkan peserta didik memasuki dunia kerja dan bersikap profesional.</li>
            <li>Membentuk etos kerja tinggi: produktif, inovatif, kreatif, dan kompetitif.</li>
            <li>Menjadi SMK berbasis industri yang kompetitif di tingkat nasional & internasional.</li>
            <li>Mengintegrasikan nilai Profil Pelajar Pancasila dalam pembelajaran & budaya sekolah.</li>
        </ul>
    </div>

</section>

<?php include "../includes/footer.php"; ?>
