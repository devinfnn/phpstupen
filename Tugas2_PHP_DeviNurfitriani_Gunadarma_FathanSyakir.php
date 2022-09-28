<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>
<body>
 


<div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST">
        <div class="form-floating mb-3">
            <input class="form-control" id="namaPegawai" type="text" placeholder="Nama Pegawai" data-sb-validations="required" name="nama" />
            <label for="namaPegawai">Nama Pegawai</label>
            <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">Nama Pegawai is required.</div>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" id="Agama" aria-label="Agama" name="agama">
            <option value=""></option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katholik">Katholik</option>
                <option value="Budha">Budha</option>
                <option value="Hindu">Hindu</option>
                <option value="Khonghucu">Khonghucu</option>
            </select>
            <label for="Agama">Agama</label>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Jabatan</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="manajer" type="radio" name="jabatan" data-sb-validations="" value="Manajer"/>
                <label class="form-check-label" for="manajer">Manajer</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="asisten" type="radio" name="jabatan" data-sb-validations="" value="Asisten"/>
                <label class="form-check-label" for="asisten">Asisten</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="kabag" type="radio" name="jabatan" data-sb-validations="" value="Kabag"/>
                <label class="form-check-label" for="kabag">Kabag</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="staff" type="radio" name="jabatan" data-sb-validations="" value="Staff"/>
                <label class="form-check-label" for="staff">Staff</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Status</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="menikah" type="radio" name="status" data-sb-validations="" value="menikah"/>
                <label class="form-check-label" for="menikah">Menikah</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="belumMenikah" type="radio" name="status" data-sb-validations="" value="belum"/>
                <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
            </div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="jumlahAnak" type="text" placeholder="Jumlah Anak" data-sb-validations="required" name="jumlahanak"/>
            <label for="jumlahAnak">Jumlah Anak</label>
            <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">Jumlah Anak is required.</div>
        </div>
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
       <button type="submit" class="btn btn-success" name="proses">Save</button>
    </form>
</div>

<!-- Coding PHP -->

<?php 

$nama = $_POST ['nama'];
$agama = $_POST ['agama'];
$jabatan = $_POST ['jabatan'];
$status = $_POST ['status'];
$jumlahanak = $_POST ['jumlahanak'];
$tombol = $_POST ['proses'];


switch ($jabatan) {
    case 'Manajer':
        $gaji_pokok = 20000000;
        break;
    case 'Asisten':
        $gaji_pokok = 15000000;
        break;
    case 'Kabag':
            $gaji_pokok = 10000000;
        break;
    case 'Staff':
            $gaji_pokok = 4000000;
        break;
    default:
        $gaji_pokok;
        break;
}

switch ($jabatan) {
    case 'Manajer':
        $tjabatan = 20000000 * 0.2;
        break;
    case 'Asisten':
        $tjabatan = 15000000 * 0.2;
        break;
    case 'Kabag':
        $tjabatan = 10000000 * 0.2;
        break;
    case 'Staff':
        $tjabatan = 4000000 * 0.2;
        break;
    default:
        $tjabatan;
        break;
}

if ($status = 'menikah' && $jumlahanak <= 2) {
    $tkeluarga = ($gaji_pokok * 0.005);
    $gaji_kotor = $gaji_pokok + $tkeluarga + $tjabatan;

if ($agama == 'Islam' && $gaji_kotor >= 6000000) {
        $z_profesi = ($gaji_kotor * 0.025);
    } else {
        $z_profesi = 0;
    }
    $take_home = $gaji_kotor - $z_profesi;
} else if ($status = 'menikah' && $jumlahanak >= 3) {
    $tkeluarga = ($gaji_pokok * 0.1);
    $gaji_kotor = $gaji_pokok + $tkeluarga + $tjabatan;

if ($agama == 'Islam' && $gaji_kotor >= 6000000) {
        $z_profesi = ($gaji_kotor * 0.025);
    } else {
        $z_profesi = 0;
    }
    $take_home = $gaji_kotor - $z_profesi;
} else if ($status = 'menikah' && $jumlahanak >= 6) {
    $tkeluarga = ($gaji_pokok * 0.15);
    $gaji_kotor = $gaji_pokok + $tkeluarga + $tjabatan;

if ($agama == 'Islam' && $gaji_kotor >= 6000000) {
        $z_profesi = ($gaji_kotor * 0.025);
    } else {
        $z_profesi = 0;
    }
    $take_home = $gaji_kotor - $z_profesi;
} else $tkeluarga = 'belum';


if (isset($tombol)) { ?>
    <div class="card" style="width: 100%;">
        <div class="body">
            <div class=" alert alert-primary p-5" role="alert">
            <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama:</label>
                            <input type="text" class="form-control" id="recipient-name" value="<?=$nama?>" disabled >
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Agama:</label>
                            <input type="text" class="form-control" id="recipient-name" value="<?=$agama?>"  disabled>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Jabatan:</label>
                            <input type="text" class="form-control" id="recipient-name" value="<?=$jabatan?>"  disabled>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Gaji Pokok:</label>
                            <input type="text" class="form-control" id="recipient-name" value="<?= number_format($gaji_pokok, 2, ',', '.'); ?>"  disabled>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Tunjangan Jabatan:</label>
                            <input type="text" class="form-control" id="recipient-name" value="<?=number_format($tjabatan, 2, ',', '.');?>"  disabled>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Tunjangan Keluarga:</label>
                            <input type="text" class="form-control" id="recipient-name" value="<?=number_format($tkeluarga, 2, ',', '.');?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Gaji Kotor:</label>
                            <input type="text" class="form-control" id="recipient-name" value="<?=number_format($gaji_kotor, 2, ',', '.');?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Zakat Profesi:</label>
                            <input type="text" class="form-control" id="recipient-name" value="<?=number_format($z_profesi, 2, ',', '.');?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Take Home Pay:</label>
                            <input type="text" class="form-control" id="recipient-name" value="<?= number_format($take_home, 2, ',', '.');?>" disabled>
                        </div>

            </div>
        </div>
    </div>
<?php } ?>



</div>



?>






<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>