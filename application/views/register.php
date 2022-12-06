<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo "$title - $subtitle"; ?></title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/logo_bg.png') ?>">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block" style="background:#F0EABE;">
                                <img src="<?php echo base_url('assets/img/user.png') ?>" alt="Logo" style="width: 100%;">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Silahkan Registrasi</h1>
                                        <!-- <h2 class="h5 text-gray-900 mb-4" id='message'><?= $this->session->flashdata('message'); ?></h2> -->
                                    </div>
                                    <form class="form-group" method="post" action="<?= base_url('Register/proses'); ?>">
                                        <table class="table table-hover">
                                            <tr>
                                                <td>nik</td>
                                                <td><input type="text" class="form-control" name="nik" placeholder="isi nik sesuai di KK anda" required></td>
                                            </tr>

                                            <tr>
                                                <td>nama</td>
                                                <td><input type="text" class="form-control" name="nama" placeholder="isi nama anda" required></td>
                                            </tr>

                                            <tr>
                                                <td>tempat lahir</td>
                                                <td><input type="text" class="form-control" name="tempat_lahir" placeholder="isi tempat lahir anda" required></td>
                                            </tr>

                                            <tr>
                                                <td>tanggal lahir</td>
                                                <td><input type="text" class="form-control" name="tanggal_lahir" placeholder="isi tanggal lahir anda" required></td>
                                            </tr>

                                            <tr>
                                                <td>jenis kelamin</td>
                                                <td>
                                                    <select name="jenis_kelamin" class="form-control" required>
                                                        <option value="pria">pria</option>
                                                        <option value="wanita">wanita</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>alamat</td>
                                                <td><input type="text" class="form-control" name="alamat" placeholder="isi alamat rumah anda" required></td>
                                            </tr>

                                            <tr>
                                                <td>rt/rw</td>
                                                <td><input type="text" class="form-control" name="rt_rw" placeholder="RT/RW" required></td>
                                            </tr>

                                            <tr>
                                                <td>kel/desa</td>
                                                <td><input type="text" class="form-control" name="kel_desa" placeholder="kelurahan atau desa" required></td>
                                            </tr>

                                            <tr>
                                                <td>kecamatan</td>
                                                <td><input type="text" class="form-control" name="kecamatan" placeholder="kecamatan" required></td>
                                            </tr>

                                            <tr>
                                                <td>agama</td>
                                                <td><input type="text" class="form-control" name="agama" placeholder="agama" required></td>
                                            </tr>

                                            <tr>
                                                <td>status perkawinan</td>
                                                <td><input type="text" class="form-control" name="status_perkawinan" placeholder="isi status perkawinan" required></td>
                                            </tr>

                                            <tr>
                                                <td>pekerjaan</td>
                                                <td><input type="text" class="form-control" name="pekerjaan" placeholder="pekerjaan" required></td>
                                            </tr>

                                            <tr>
                                                <td>kewarganegaraan</td>
                                                <td><input type="text" class="form-control" name="kewarganegaraan" placeholder="isi dengan 'WNI' " required></td>
                                            </tr>

                                            <tr>
                                                <td>berlaku hingga</td>
                                                <td><input type="text" class="form-control" name="berlaku_hingga" placeholder="isi dengan 'Seumur Hidup' " required></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fa fa-save"></i> Save
                                                    </button>
                                                    <a href="<?= site_url($this->uri->segment(1)) ?>" title="Kembali">Kembali</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>