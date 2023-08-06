<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>
    <!-- Patient Area Starts -->
    <section class="patient-area section-padding" style="overflow-x: hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Deteksi</h2>
                        <p>Masukan anda.. above he cattle god saw day multiply under fill in the cattle fowl a all, living, tree word link available in the service for subdue fruit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 align-self-center">
                    <div class="appointment-form text-center mt-5 mt-lg-0">
                        <h3 class="mb-5">Biodata</h3>
                        <form action="#">
                            <div class="form-group">
                                <input type="text" placeholder="Masukan nama.." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama'" required>
                            </div>
                            <div class="form-group">
                                <input type="number" placeholder="Masukan usia.." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Usia'" required>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Masukan alamat.." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'" required> 
                            </div>
                            <div class="form-group">
                                <input type="text" id="datepicker" placeholder="Masukan tanggal lahir.." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Lahir'" required>
                            </div>
                            <div class="form-group">
                                <textarea name="riwayatpenyakit" cols="20" rows="7"  placeholder="Riwayat Penyakit" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Riwayat Penyakit'" required></textarea>
                            </div>
                            <a href="<?= site_url('deteksi-2') ?>" class="template-btn">Selanjutnya</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Patient Area Starts -->
<?= $this->endSection() ?>
