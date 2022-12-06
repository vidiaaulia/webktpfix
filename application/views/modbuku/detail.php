<div class="col-xl-12 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Detail Buku</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <tr>
                        <td>NIK</td>
                        <td><?= $data['nik']?></td>
                    </tr> 
                    <tr>
                        <td>nama</td>
                        <td><?= $data['nama_kategori']?></td>
                    </tr> 
                    <tr>
                        <td>Nama Pengarang</td>
                        <td><?= $data['pengarang']?></td>
                    </tr>
                    <tr>
                        <td>Nama Penerbit</td>
                        <td><?= $data['penerbit']?></td>
                    </tr>
                    <tr>
                        <td>Tahun Terbit</td>
                        <td><?= $data['tahun_terbit']?></td>
                    </tr>
                    <tr>
                        <td>ISBN</td>
                        <td><?= $data['isbn']?></td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td><?= $data['stok']?></td>
                    </tr>
                    <tr>
                        <td>Dipinjam</td>
                        <td><?= $data['dipinjam']?></td>
                    </tr>
                    <tr>
                        <td>Dibooking</td>
                        <td><?= $data['dibooking']?></td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td><img src="<?php echo base_url('assets/buku/').$data['image']?>" width="150px" alt="image"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Input</td>
                        <td><?= $data['tanggal_input']?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Update</td>
                        <td><?= $data['tanggal_update']?></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="<?= site_url($this->uri->segment(1))?>" title="Kembali">Kembali</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>