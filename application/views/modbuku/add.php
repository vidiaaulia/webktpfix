<div class="col-xl-12 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Isi Data Pribadi</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
        	<div class="table-responsive">
        		<div class="table-responsive">
                
                <div id='message'>
                    <?php echo $this->session->flashdata('message');?>
                </div>

                <form class="form-group" method="post" action="<?= site_url($this->uri->segment(1).'/save')?>" enctype="multipart/form-data">
                    <table class="table table-hover">
                        <tr>
                            <td>NIK</td>
                            <td><input type="text" class="form-control" name="nik" placeholder="isi nik sesuai di KK anda" required></td>
                        </tr> 

                        <tr>
                            <td>Nama</td>
                            <td><input type="text" class="form-control" name="nama" placeholder="isi nama lengkap anda" required></td>
                        </tr> 

                        <tr>
                            <td>Tempat/Tgl Lahir</td>
                            <td><input type="text" class="form-control" name="tempat_tanggal_lahir" placeholder="isi tempat dan tanggal lahir anda" required></td>
                        </tr>

                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <select name="id_kategori" class="form-control" required>
                                    <?php
                                        foreach ($kategori->result_array() as $row) {
                                            echo "
                                                <option value='$row[id_kategori]'>$row[kategori]</option>
                                            ";
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Golongan Darah</td>
                            <td><input type="text" class="form-control" name="goldar" placeholder="A/B/AB/O " required></td>
                        </tr>
                        
                        <tr>
                            <td>Alamat</td>
                            <td><input type="text" class="form-control" name="alamat" placeholder="isi alamat rumah anda" required></td>
                        </tr> 

                        <tr>
                            <td>RT/RW</td>
                            <td><input type="text" class="form-control" name="rt_rw" placeholder="RT/RW" required></td>
                        </tr>

                        <tr>
                            <td>Kel/Desa</td>
                            <td><input type="text" class="form-control" name="kel_desa" placeholder="sesuaikan dengan KK anda" required></td>
                        </tr>

                        <tr>
                            <td>Kecamatan</td>
                            <td><input type="text" class="form-control" name="kecamatan" placeholder="sesuaikan dengan KK anda" required></td>
                        </tr>

                        <tr>
                            <td>Agama</td>
                            <td><input type="text" class="form-control" name="agama" placeholder="agama yang anda anut" required></td>
                        </tr>

                        <tr>
                            <td>Status Perkawinan</td>
                            <td><input type="text" class="form-control" name="status_perkawinan" placeholder="Kawin/Belum Kawin" required></td>
                        </tr>

                        <tr>
                            <td>Pekerjaan</td>
                            <td><input type="text" class="form-control" name="pekerjaan" placeholder="isi pekerjaan anda" required></td>
                        </tr>

                        <tr>
                            <td>Kewarganegaraan</td>
                            <td><input type="text" class="form-control" name="kewarganegaraan" placeholder="isi dengan 'WNI' " required></td>
                        </tr>

                        <tr>
                            <td>Berlaku Hingga</td>
                            <td><input type="text" class="form-control" name="berlaku_hingga" placeholder="isi dengan 'Seumur Hidup' " required></td>
                        </tr>

                        <tr>
                            <td>Scan KK</td>
                            <td>
                                <input type="file" name="image" required><br>
                                <small>
                                    type file : jpg / png; max size: 512 kb
                                </small>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Scan Surat Izin RT/RW</td>
                            <td>
                                <input type="file" name="image" required><br>
                                <small>
                                    type file : jpg / png; max size: 512 kb
                                </small>
                            </td>
                        </tr> 
                        
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-save"></i> Save
                                </button> 
                                <a href="<?= site_url($this->uri->segment(1))?>" title="Kembali">Kembali</a>
                            </td>
                        </tr> 
                    </table>
                </form>
            </div>
        	</div>
        </div>
    </div>
</div>

<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $("#isbn").keyup(function() {

            var isbn = $("#isbn").val();

            isbn = isbn.replace("-", "");
            $("#isbn").val(isbn);

            var isbn = $("#isbn").val();
            var kol1 = isbn.substring(0,3);
            var kol2 = isbn.substring(3,6);
            var kol3 = isbn.substring(6,10);
            var kol4 = isbn.substring(10,12);
            var kol5 = isbn.substring(12,13);

            var hasil = kol1 + "-" + kol2 + "-" + kol3 + "-" + kol4 + "-" + kol5;

            $("#hasil_isbn").val(hasil);


        });

    });
</script>