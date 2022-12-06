<div class="col-xl-12 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Daftar</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
                      
            <a href="<?= site_url($this->uri->segment(1).'/add')?>" class="btn btn-primary" title="Tambah Data"><i class="fas fa-plus"> Daftar KTP Disini</i></a>
            <div id="message">
            	<?= $this->session->flashdata('message');?>
            </div>
            <hr>

        </div>
    </div>
</div>

