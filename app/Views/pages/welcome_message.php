<?=$this->extend('layouts/template');?>

<?=$this->section('contents');?>

<div class="flex flex-column parent-strip vh-100 z-0 overflow-x-hidden overflow-y-hidden">
  <div class="w-100 h-25 strip" data-aos="slide-left" data-aos-duration="2000"></div>
  <div class="w-100 h-25 strip" data-aos="slide-right" data-aos-duration="2000"></div>
  <div class="w-100 h-25 strip" data-aos="slide-left" data-aos-duration="2000"></div>
  <div class="w-100 h-25 strip" data-aos="slide-right" data-aos-duration="2000"></div>
</div>
<div class="z-1 col-12 vh-100 justify-content-center align-items-center d-flex flex-column position-absolute welcome-content">
  <h1 style="color: white;" data-aos-delay="2100" data-aos="fade-down" data-aos-duration="700"><b>Welcome 😁</b></h1>
    <img class="w-25" src="/images/welcome-image.png" alt="" data-aos-delay="2200" data-aos="fade-down" data-aos-duration="700">
    <p style="color: white;" data-aos-delay="2300" data-aos="fade-down" data-aos-duration="700" class="text-center px-4">Halo, admin! Silakan akses Student Management Dashboard untuk mengelola data</p>
    <a style="color: white;" href="<?=site_url('/home')?>" class="btn btn-primary w-25 rounded-pill" data-aos-delay="2400" data-aos="fade-down" data-aos-duration="700"><b>N E X T</b></a>
</div>

<?=$this->endSection('contents');?>
