<?php 
require("../require/dashboard/page.php");


?>
<style>

.form-select {
    display: block;
    width: 100%;
    padding: 0.375rem 2.25rem 0.375rem 0.75rem;
    -moz-padding-start: calc(0.75rem - 3px);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #ffffff;
    background-color: #212529;
    background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e);
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
    background-size: 16px 12px;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    height: calc(1.5em + 1.25rem + 5px);
}
</style>
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Create Website</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<input id="node" name="node" type="hidden" value="">
<div class="container-fluid mt--6">
    <div class="row justify-content-center">
        <div class="col-lg-8 card-wrapper">
            <div class="card">
                <div class="card-header text-center">
                    <h3 class="mb-0">Lets start making your website</h3>
                </div>
                <div class="card-body" style="text-align: center;">
                <form method="GET">
                    <label for="webname">Website Name:</label>
                    <input type="text" class="form-control" value="" id="webname" name="webname" placeholder="Breaking the terms and services!"><br>
                    <label for="domain">Domain:</label>
                    <input type="text" class="form-control" value="" id="domain" name="domain" placeholder="testing.mythicalnodes.xyz"><br>
                    <label for="packname">Package:</label>
                    <select class="form-select" id="packname" name="packname">
                      <option value="Default">Default pack</option>
                      <option>Staff pack</option>
                      <option>Developer Pack</option>
                      <option>Unlimited pack</option>
                    </select>
                    &nbsp;
                    <center>
                    <button class="btn btn-primary" type="createwebsite" name="createwebsite" value="createwebsite">Create</button>
                    </center>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

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