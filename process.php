<?php
include 'NilaiConverter.php';

// Validasi input
$nilai_partisipasi = isset($_POST['partisipasi']) ? $_POST['partisipasi'] : '';
$nilai_tugas = isset($_POST['tugas']) ? $_POST['tugas'] : '';
$nilai_uts = isset($_POST['uts']) ? $_POST['uts'] : '';
$nilai_uas = isset($_POST['uas']) ? $_POST['uas'] : '';

$errors = [];

// Validasi input tidak boleh kosong
if (empty($nilai_partisipasi) || empty($nilai_tugas) || empty($nilai_uts) || empty($nilai_uas)) {
    $errors[] = "Nilai tidak boleh kosong.";
}

// Validasi input harus berupa angka
if (!is_numeric($nilai_partisipasi) || !is_numeric($nilai_tugas) || !is_numeric($nilai_uts) || !is_numeric($nilai_uas)) {
    $errors[] = "Input harus berupa angka.";
}

// Validasi input harus berada dalam rentang 0 - 100
if ($nilai_partisipasi < 0 || $nilai_partisipasi > 100 || $nilai_tugas < 0 || $nilai_tugas > 100 || $nilai_uts < 0 || $nilai_uts > 100 || $nilai_uas < 0 || $nilai_uas > 100) {
    $errors[] = "Input harus berada dalam rentang 0 - 100.";
}

if (empty($errors)) {
    // Hitung Nilai Akhir
    $converter = new NilaiConverter($nilai_partisipasi, $nilai_tugas, $nilai_uts, $nilai_uas);
    $nilai_akhir = $converter->hitungNilaiAkhir();
    $nilai_huruf = $converter->konversiNilaiHuruf();
}
?>

<?php if (!empty($errors)): ?>
<div class="alert alert-danger" role="alert">
    <?php foreach ($errors as $error): ?>
    <p><?php echo $error; ?></p>
    <?php endforeach; ?>
</div>
<?php endif; ?>

<?php if (empty($errors) && isset($nilai_akhir) && isset($nilai_huruf)): ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Hasil Konversi Nilai
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nilai_akhir">Nilai Akhir:</label>
                        <input type="text" class="form-control" id="nilai_akhir" name="nilai_akhir"
                            value="<?php echo $nilai_akhir; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nilai_huruf">Nilai Huruf:</label>
                        <input type="text" class="form-control" id="nilai_huruf" name="nilai_huruf"
                            value="<?php echo $nilai_huruf; ?>" readonly>
                    </div>
                    <a href="index.php" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>