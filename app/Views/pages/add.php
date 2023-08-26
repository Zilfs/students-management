<?=$this->extend('layouts/template');?>

<?=$this->section('contents');?>

<div class="col-12 vh-100" style="background-color: #90caf9;">
    <div data-aos="fade-down" class="d-flex flex-row mb-5 w-75 align-items-center w-100 align-items-center justify-content-center" style="background-color: #fff;">
        <img src="/images/icon.png" alt="" style="width:60px; height:60px;">
        <h1 class="text-center py-5 ms-3 mt-1"><b>Students Management App</b></h1>
    </div>
    <div class="color-transition col-12 py-3"></div>
        <div class="col-12 px-5" data-aos="fade-down"data-aos-delay="100">
            <div class="container-header d-flex">
                <h2 class="text-left ms-4 w-100 mb-4">Tambah Data Murid </h2>
                <a href="<?=site_url('/home')?>" class="btn btn-primary right-0 w-25 h-50 me-4 mt-1">Go Back</a>
            </div>
            <div class="container-body d-flex flex-column justify-content-center align-items-center">
                <div class="row w-100">
                    <form action="/pageAddController/save" method="post">
                    <?=csrf_field();?>
                        <div class="d-flex flex-row">
                            <div class="col w-50 mx-3">
                                <label for="">Nama Murid</label>
                                <input type="text" id="name" name="name" class="form-control mt-2">
                            </div>
                            <div class="col w-50 mx-3">
                                <label for="">Jenis Kelamin</label>
                                <select class="form-select mt-2" id="gender" name="gender">
                                    <option value="Laki - laki">Laki - laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-4">
                            <div class="col w-50 mx-3">
                                <label for="">Jurusan</label>
                                <select class="form-select mt-2" id="majors" name="majors">
                                    <option value="RPL">RPL</option>
                                    <option value="TKJ">TKJ</option>
                                    <option value="MM">MM</option>
                                    <option value="BC">BC</option>
                                </select>
                            </div>
                            <div class="col w-50 mx-3">
                                <label for="">Nomor Telepon</label>
                                <input type="text" class="form-control mt-2" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-4">
                            <div class="col mx-3">
                                <label for="">Alamat</label>
                                <textarea class="form-control mt-2" style="height: 100px" id="address" name="address"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="w-100 mt-4 d-block btn btn-success"><b>Tambah</b></button>
                    </form>
                </div>
            </div>

        </div>

    </div>

</div>
<?=$this->endSection('contents');?>