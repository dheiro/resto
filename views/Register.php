<!DOCTYPE html>
<html>
    <head>
        <title>DHEIRO Cafe</title>
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    </head>
    <body style="padding-top: 50px;">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img class="img-responsive" src="<?php echo base_url(); ?>assets/logo.png"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
<!--                        <li><a></a></li>-->
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
<!--                        <li><a></a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="text-center">Buat User Baru</h2><hr>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-md-3 control-label-left">Username</label>
                            <div class="col-md-9">
                                <input type="text" id="username" class="form-control" name="username" placeholder="Masukkan Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label-left">Password</label>
                            <div class="col-md-9">
                                <input type="password" id="password1" class="form-control" name="password1" placeholder="Masukkan Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label-left">Ulangi Password</label>
                            <div class="col-md-9">
                                <input type="password" id="password2" class="form-control" name="password2" placeholder="Ulangi Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label-left">Nama Lengkap</label>
                            <div class="col-md-9">
                                <input type="text" id="nama-lengkap" class="form-control" name="nama-lengkap" placeholder="Masukkan Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label-left">Jabatan/Posisi</label>
                            <div class="col-md-9">
                                <select class="form-control" name="jabatan" data-placeholder="Pilih Jabatan/Posisi">
                                    <option></option>
                                    <option>Kasir</option>
                                    <option>Marketing</option>
                                </select>
                            </div>
                        </div><hr>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <div class="row">
                                    <div class="col-md-6 mb15">
                                        <input type="submit" id="submit-register" class="btn btn-primary btn-block btn-lg" value="Daftar">
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn btn-danger btn-block btn-lg" href="#">Batal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url(); ?>assets/js/jquery-2.2.3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('select').select2({
                    theme: 'bootstrap',
                    width: '100%'
                });
            });
        </script>
    </body>
</html>