<?php
//query untuk mengambil data article
$sql1 = "SELECT * FROM article ORDER BY tanggal DESC";
$hasil1 = $conn->query($sql1);

//menghitung jumlah baris data article
$jumlah_article = $hasil1->num_rows;

//query untuk mengambil data gallery
$sql2 = "SELECT * FROM galery ORDER BY tanggal DESC";
$hasil2 = $conn->query($sql2);

//menghitung jumlah baris data gallery
$jumlah_galery = $hasil2->num_rows;

//query untuk mengambil data user
$sql3 = "SELECT * FROM user ORDER BY id DESC";
$hasil3 = $conn->query($sql3);

//menghitung jumlah baris data user
$jumlah_user = $hasil3->num_rows;

?>

<style>
    .card-custom {
        background-color: #1a1a1a !important; /* Warna gelap card */
        border: 1px solid #333 !important;
        border-radius: 15px;
        transition: transform 0.3s;
        color: white !important; /* Memastikan teks berwarna putih */
    }
    .card-custom:hover {
        transform: translateY(-5px);
        border-color: #dc3545 !important;
    }
    .icon-box {
        color: #dc3545;
        font-size: 2.5rem;
    }
    .badge-custom {
        background-color: #dc3545;
        font-size: 1.5rem;
        min-width: 50px;
    }
</style>

<div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center pt-4">
    <div class="col">
        <div class="card h-100 card-custom shadow">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="p-2">
                        <div class="icon-box"><i class="bi bi-newspaper"></i></div>
                        <h5 class="card-title mt-2">Article</h5> 
                    </div>
                    <div class="p-2">
                        <span class="badge rounded-pill badge-custom"><?php echo $jumlah_article; ?></span>
                    </div> 
                </div>
            </div>
        </div>
    </div> 

    <div class="col">
        <div class="card h-100 card-custom shadow">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="p-2">
                        <div class="icon-box"><i class="bi bi-camera"></i></div>
                        <h5 class="card-title mt-2">Galery</h5> 
                    </div>
                    <div class="p-2">
                        <span class="badge rounded-pill badge-custom"><?php echo $jumlah_galery; ?></span>
                    </div> 
                </div>
            </div>
        </div>
    </div> 

    <div class="col">
        <div class="card h-100 card-custom shadow">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="p-2">
                        <div class="icon-box"><i class="bi bi-people"></i></div>
                        <h5 class="card-title mt-2">User</h5> 
                    </div>
                    <div class="p-2">
                        <span class="badge rounded-pill badge-custom"><?php echo $jumlah_user; ?></span>
                    </div> 
                </div>
            </div>
        </div>
    </div> 
</div>