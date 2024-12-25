<?php
//query untuk mengambil data berita
$sql1 = "SELECT * FROM berita ORDER BY tanggal DESC";
$hasil1 = $conn->query($sql1);

//menghitung jumlah baris data berita
$jumlah_berita = $hasil1->num_rows;

//query untuk mengambil data gallery
//$sql2 = "SELECT * FROM gallery ORDER BY tanggal DESC";
//$hasil2 = $conn->query($sql2);

//menghitung jumlah baris data gallery
//$jumlah_gallery = $hasil2->num_rows;
?>

<section id="content" class="ms-1 me-1">
<div class="row row-cols-1 row-cols-md-4 justify-content-center bg-white g-2">
    <div class="col mt-4 mb-5">
        <div class="card shadow">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title m-2">
                        <i class="bi bi-newspaper me-2"></i>Berita
                    </h5>
                    <span class="badge bg-danger rounded-circle fs-6">
                        <?php echo $jumlah_berita; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col mt-4 mb-5">
        <div class="card shadow">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title m-2">
                        <i class="bi bi-bag-fill me-2"></i>Store
                    </h5>
                    <span class="badge bg-danger rounded-pill fs-6">
                        <?php //echo $jumlah_gallery; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
