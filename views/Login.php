<!DOCTYPE html>
<html>
    <head>
        <title>DHEIRO Cafe</title>
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    </head>
    <body style="padding-top: 90px;">
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
                        <li class="active"><a href="<?php echo base_url(); ?>register">Buat Akun</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
<!--                        <li><a href="#" onclick="return false">Register</a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">Silahkan Login</div>
                        </div>
                        <div class="panel-body">
<!--                            <div id="login-alert" class="alert alert-info">Masukkan Username & Password</div>-->
                            <form id="login-form" class="form-horizontal" role="form">
                                <div class="input-group mb15">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                                <div class="input-group mb15">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <input type="submit" class="btn btn-primary btn-block" value="Login">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>