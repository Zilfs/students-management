<?=$this->extend('layouts/template');?>

<?=$this->section('contents');?>

<div class="d-flex vh-100">
    <div class="col-7 d-flex align-items-center justify-content-center" style="background-color: #90caf9;">
        <img src="/images/login-image.png" alt="" class="z-0 mb-5" data-aos="fade-down" data-aos-delay="200">
        <div class="text-center z-1 position-absolute w-50 top-0 mt-5" style="color: white;" data-aos="fade-down"><h1><b>Greetings Fellow 👋</b></h1></div>
        <div class="text-center z-1 position-absolute w-50" style="color: white; margin-top:28em; font-size:20px;" data-aos="fade-down" data-aos-delay="400">"Discover the future of student information handling through the 'Students Management' application, simplifying data management and amplifying our dedication to educational success."</div>
    </div>
    <div class="col-5 d-flex flex-column align-items-center">
      <div class="d-flex flex-row mt-5 mb-5 w-75 align-items-center"  data-aos="fade-up">
        <img src="/images/icon.png" alt="" style="width:45px; height:45px;">
        <h5 class="ms-3 mt-1"><b>Students Management App</b></h5>
      </div>

        <div class="separator my-2"></div>
        <?php if (session()->getFlashdata('msg')): ?>
          <div class="mt-5 z-1 position-absolute pt-5 w-25">
          <div class="alert alert-danger mt-5"><?=session()->getFlashdata('msg')?></div>
          </div>

        <?php endif;?>
        <div class="form-area d-flex flex-column mt-5 w-75">
            <h3 class="mt-5 mb-4" data-aos="fade-up" data-aos-delay="200"><b>Log In</b></h3>

            <p style="color:gray;" class="fs-6 mb-5" data-aos="fade-up" data-aos-delay="200">Enter your username and password to login our dashboard</p>
            <form action="<?=base_url('/login')?>" method="post" class="mt-3">
            <?=csrf_field();?>
                <div class="row ps-3 form-group" data-aos="fade-up" data-aos-delay="300">
                    <label for="username"><b>Username</b></label>
                    <input type="text" class="form-control mt-2 mb-4" placeholder="Enter your Username" name="username" id="username" required>
                </div>
                <div class="row ps-3 form-group" data-aos="fade-up" data-aos-delay="300">
                    <label for="password"><b>Password</b></label>
                    <input type="password" class="form-control mt-2 mb-2" placeholder="Enter your Password" id="password" name="password" required>

                </div>
                <div class="form-check form-switch" data-aos="fade-up" data-aos-delay="300">
                        <input class="form-check-input" type="checkbox" role="switch" id="" onclick="show_password()">
                        <label class="form-check-label" for="">Show Password 👀</label>
                    </div>
                <div class="row ps-3 mt-4 form-group" >
                    <button type="submit" class="row ps-3 mt-4 btn btn-primary rounded-pill" data-aos="fade-up" data-aos-delay="400"><b>Sign In</b></button>
                </div>
                <!-- Button trigger modal -->
            </form>
            <label class="mt-2 ps-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-aos="fade-up" data-aos-delay="400">
                    <a href="#" style="text-decoration: none;">Forgot Password 😅</a>
                </label>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body d-flex flex-column justify-content-center">
        <h4 class="text-center my-5"><b>PAYAH !! 👎</b></h4>
        <p class="text-center fs-5 my-5">Password paling kagak nyampe 10 karakter aja lupa 😡, hedeeeh...</p>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Oke 😓</button>
      </div>
    </div>
  </div>
</div>
<script>
    function show_password() {
  var password_input = document.getElementById("password");
  if (password_input.type === "password") {
    password_input.type = "text";
  } else {
    password_input.type = "password";
  }
}
</script>

<?=$this->endSection('contents');?>