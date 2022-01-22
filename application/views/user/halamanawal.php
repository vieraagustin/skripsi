<!DOCTYPE html>
<html lang="en">
<!-- Content Wrapper -->
<head>
 
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>home - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url()?>assets/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url()?>assets/template/css/sb-admin-2.min.css" rel="stylesheet">
<style type="text/css">
    body {
        background : url(<?php echo base_url("assets/image/bg1.jpg"); ?>);
        background-repeat: no-repeat;
        background-size: 100% 700px;
    }
        .center {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    padding: 10px;
    text-align: center;
    }
}
</style>
</head>
<body>
        <div id="content-wrapper" class="d-flex flex-column flexbox-container">
  
            <!-- Main Content -->
            <div id="content">
                    <div class="center">
                    <h1 style="text-align:center;" class="h2 mb-0 text-primary">HAI, SELAMAT DATANG DI WEBSAITE REKOMENDASI PRODUK SKINCARE YANG SESUAI DENGAN JENIS KULIT WAJAH ANDA</h1>
                         <h3 style="text-align:center;" class="h4 mt-2 ml-1 mb-3 text-primary ">silahkan masukan nama anda </h3> 
                    <form method="post" action="<?= site_url('User/Awal/simpan_nama')?>">
                        <input class="form-control" type="text" name="nama"/>
                         <button type="submit" class="mt-3 btn btn-info">Simpan</button>
                    </form>
                    </div>
               <!--  </nav> -->
            </div>
        </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url()?>assets/template/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url()?>assets/template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url()?>assets/template/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url()?>assets/template/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url()?>assets/template/js/demo/chart-area-demo.js"></script>
    <script src="<?=base_url()?>assets/template/js/demo/chart-pie-demo.js"></script>

</body>

</html>