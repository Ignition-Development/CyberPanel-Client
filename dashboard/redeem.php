<?php 
require("../require/dashboard/page.php");


?>
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Earn coins</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Earn coins</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<input id="node" name="node" type="hidden" value="">
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row justify-content-center">
        <div class="col-lg-8 card-wrapper">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0"><img src="https://i.imgur.com/jv3Frir.png" width="30"> Enter your cupon code to get your coins!</h3>
                </div>
                <div class="card-body" style="text-align: center;">
                    <form method="GET">
                        <center> 
                        <div class="mb-3 mb-4">
                            <label class="form-label" for="cpcode">Cupon Code</label>
                            <input type="text" class="form-control" value="" required id="cpcode" name="cpcode" placeholder="FreeMythicalNodes">
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" value="Submit" class="btn btn-primary rounded-pill"> Claim <i class="bi bi-arrow-right"></i> </button>
                        </div>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Footer -->
    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="../assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="../assets/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>
    <!-- Argon JS -->
    <script src="../assets/js/argon.js?v=1.2.0"></script>
    <!-- Demo JS - remove this in your project -->
    <script src="../assets/js/demo.min.js"></script>

</html>