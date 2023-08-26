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
                <h2 class="text-left ms-4 w-100 mb-4">Edit Data Murid </h2>
                <a href="<?=site_url('/home')?>" class="btn btn-primary right-0 w-25 h-50 me-4 mt-1">Go Back</a>
            </div>
            <div class="container-body d-flex flex-column justify-content-center align-items-center">
                <div class="row w-100">
                    <form action="/update/<?=$students['id']?>" method="post">
                    <?=csrf_field();?>
                        <div class="d-flex">
                            <div class="col mx-3">
                                <label for="">ID Murid</label>
                                <input type="text" class="form-control mt-2" value="<?=$students['id']?>" readonly>
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-4">
                            <div class="col w-50 mx-3">
                                <label for="name">Nama Murid</label>
                                <input type="text" class="form-control mt-2" value="<?=$students['name']?>" id="name" name="name">
                            </div>
                            <div class="col w-50 mx-3">
                                <label for="gender">Jenis Kelamin</label>
                                <select class="form-select mt-2" id="gender" name="gender">
                                    <option value="Laki - laki" <?php if (($students['gender']) === "Laki - laki") {echo "selected";}?>>Laki - laki</option>
                                    <option value="Perempuan" <?php if (($students['gender']) === "Perempuan") {echo "selected";}?>>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-4">
                            <div class="col w-50 mx-3">
                                <label for="majors">Jurusan</label>
                                <select class="form-select mt-2" id="majors" name="majors">
                                    <option value="RPL" <?php if (($students['majors']) === "RPL") {echo "selected";}?>>RPL</option>
                                    <option value="TKJ" <?php if (($students['majors']) === "TKJ") {echo "selected";}?>>TKJ</option>
                                    <option value="MM" <?php if (($students['majors']) === "MM") {echo "selected";}?>>MM</option>
                                    <option value="BC" <?php if (($students['majors']) === "BC") {echo "selected";}?>>BC</option>
                                </select>
                            </div>
                            <div class="col w-50 mx-3">
                                <label for="">Nomor Telepon</label>
                                <input type="text" class="form-control mt-2" value="<?=$students['phone']?>" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-4">
                            <div class="col mx-3">
                                <label for="address">Alamat</label>
                                <textarea class="form-control mt-2" style="height: 100px" id="address" name="address"><?=$students['address']?></textarea>
                            </div>
                        </div>
                        <button type="submit" class="w-100 mt-4 d-block btn btn-warning"><b>Edit</b></button>
                    </form>
                </div>
            </div>

        </div>

    </div>
<?=$this->endSection('contents');?>