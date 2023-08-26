<?=$this->extend('layouts/template');?>

<?=$this->section('contents');?>

<div class="col-12 vh-100" style="background-color: #90caf9;">
    <div data-aos="fade-down" class="d-flex flex-row mb-5 w-75 align-items-center w-100 align-items-center justify-content-center" style="background-color: #fff;">
        <img src="/images/icon.png" alt="" style="width:60px; height:60px;">
        <h1 class="text-center py-5 ms-3 mt-1" data-aos="fade-down"><b>Students Management App</b></h1>
    </div>
<!-- <img src="/images/icon.png" alt="" style="width:45px; height:45px;">
    <h1 class="text-center py-5" style="background-color: #fff;" data-aos="fade-down"><b>Student Management App 😎</b></h1> -->
    <div class="color-transition col-12 py-3"></div>
        <div class="col-12 px-5" data-aos="fade-down"data-aos-delay="100">
            <div class="container-header d-flex">
                <h2 class="text-left ms-4 w-100">Data Murid</h2>
                <a href="<?=site_url('/add')?>" class="btn btn-primary right-0 w-25 h-50 me-4 mt-1">Tambah Data</a>
                <button type="button" class="btn btn-danger right-0 w-25 h-50 me-4 mt-1" data-bs-toggle="modal" data-bs-target="#logoutmodal">Log Out</button>
                <div class="modal fade" id="logoutmodal" tabindex="-1" aria-labelledby="logoutmodal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body d-flex flex-column justify-content-center align-items-center">
                                <img src="/images/mau-logout.jpg" class="rounded mb-4 mt-4" style="height:20em; width:20em;">
                                <h5 class="text-center mb-4"><b>Iya kah pengen Logout ??</b></h5>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <a href="<?=site_url('/logout')?>">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Iyah</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ngga jadi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-body d-flex flex-column justify-content-center align-items-center">
                <div class="container card pt-3 mt-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID Murid</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Jurusan</th>
                                <th>Alamat</th>
                                <th>No. Telp</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;foreach ($student as $s) {?>
                                <tr>
                                    <td>
                                        <?=$i++;?>
                                    </td>
                                    <td>
                                        <?=$s['id'];?>
                                    </td>
                                    <td>
                                        <?=$s['name'];?>
                                    </td>
                                    <td>
                                        <?=$s['gender'];?>
                                    </td>
                                    <td>
                                        <?=$s['majors'];?>
                                    </td>
                                    <td>
                                        <?=$s['address'];?>
                                    </td>
                                    <td>
                                        <?=$s['phone'];?>
                                    </td>
                                    <td>
                                    <a href="/edit/<?=$s['id'];?>" class="btn btn-warning btn-sm">Edit</a>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$s['id'];?>">
                                    Hapus
                                </button>
                                    </td>
                                </tr>
                                 <!-- Modal -->
                                    <div class="modal fade" id="exampleModal<?=$s['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-body d-flex flex-column justify-content-center">
                                                <h1 class="text-center mt-5"><b>⚠️</b></h1>
                                                <h5 class="text-center mb-5"><b>Yakin Ingin Menghapus Data ??</b></h5>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <a href="/delete/<?=$s['id'];?>">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Yakin</button>
                                                </a>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ngga jadi</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </div>



<?=$this->endSection('contents');?>