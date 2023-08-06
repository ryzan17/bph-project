<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>
    <!-- Patient Area Starts -->
    <section class="patient-area section-padding" style="overflow-x: hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Deteksi - Step2</h2>
                        <p>Masukan anda.. above he cattle god saw day multiply under fill in the cattle fowl a all, living, tree word link available in the service for subdue fruit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 align-self-center">
                    <div class="appointment-form text-center mt-5 mt-lg-0">
                        <h3 class="mb-5">Diagnosa</h3>
                        <form action="#">
                            <div class="form-group text-left">
                                <label class="label-title-radio">Pertanyaan</label>
                                <div class="row ml-2">
                                    <div class="mr-3">
                                        <input type="radio" id="yes1" name="radio-group" checked>
                                        <label class="label-radio" for="yes1">Ya</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="no1" name="radio-group">
                                        <label class="label-radio" for="no1">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-left">
                                <label class="label-title-radio">Pertanyaan</label>
                                <div class="row ml-2">
                                    <div class="mr-3">
                                        <input type="radio" id="yes2" name="radio-group2" checked>
                                        <label class="label-radio" for="yes2">Ya</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="no2" name="radio-group2">
                                        <label class="label-radio" for="no2">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-left">
                                <label class="label-title-radio">Pertanyaan</label>
                                <div class="row ml-2">
                                    <div class="mr-3">
                                        <input type="radio" id="yes3" name="radio-group3" checked>
                                        <label class="label-radio" for="yes3">Ya</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="no3" name="radio-group3">
                                        <label class="label-radio" for="no3">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="template-btn">Selanjutnya</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Patient Area Starts -->
<?= $this->endSection() ?>
