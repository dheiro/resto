<!DOCTYPE html>
<html>
    <head>
<!--        <meta http-equiv="refresh" content="10"> refresh tiap 10 detik--> 
        <title>DHEIRO Cafe</title>
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
        <style type="text/css">
            td {
                cursor: pointer;
            }
/*
            .input-group .form-control:not(:first-child):not(:last-child), 
            .input-group-addon:not(:first-child):not(:last-child), 
            .input-group-btn:not(:first-child):not(:last-child) {
                border-radius: 4px;
            }
*/
        </style>
    </head>
    <body style="padding-top: 35px;">
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
                        <li><a>Rahman, Kasir</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">DAFTAR MEJA</h1><hr>
                </div>
                <div class="col-md-12" hidden>
                    <div class="alert alert-info" role="alert">Klik nomer meja untuk reservasi baru dan melihat reservasi meja</div>
                    <div class="pull-right" hidden>
                        <span class="label label-default">Kosong</span>
                        <span class="label label-primary">Dipakai</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach($meja as $m): ?>
                    <div class="col-md-2">
                        <div data-toggle="modal" data-target="#modal-meja" class="panel panel-<?php echo $m['status_meja']; ?>">
                            <div class="panel-heading">
                                <div class="info-meja">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="<?php echo base_url(); ?>assets/images/meja-white.png">
                                        </div>
                                        <div class="col-md-8">
                                            <h3 class="text-center" style="color: #FFFFFF;"><?php echo $m['nama_meja']; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        
        <div class="modal fade" id="modal-meja" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Detail Meja</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-1">
                                <p><strong>No.</strong></p>
                                <p><strong>Nama</strong></p>
                                <p><strong>Meja</strong></p>
                            </div>
                            <div class="col-md-5">
                                <p>1607191920</p>
                                <p>Ade Yudha Pratama</p>
                                <p>19</p>
                            </div>
                            <div class="col-md-1">
                                <p><strong>Masuk</strong></p>
                                <p><strong>Member</strong></p>
                            </div>
                            <div class="col-md-5">
                                <p>19:20</p>
                                <p>Tidak</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" style="padding-left: 5px; padding-right: 5px;">
                                <table class="table no-top-border" style="margin-bottom: 10px;">
                                    <colgroup>
                                        <col class="col-md-5">
                                        <col class="col-md-2">
                                        <col class="col-md-2">
                                        <col class="col-md-2">
                                        <col class="col-md-1">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select id="menu-list" class="form-control" data-placeholder="Pilih Menu">
                                                    <option></option>
                                                    <option data-harga="30000">Sate Buaya</option>
                                                    <option data-harga="60000">Iga Babi</option>
                                                    <option>Ayam Goreng</option>
                                                    <option>Sate Kuda</option>
                                                    <option>Gule Kudanil</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" id="jumlah" class="form-control" placeholder="Jumlah" disabled>
                                            </td>
                                            <td>
                                                <input type="text" id="harga-satuan" class="form-control" placeholder="Harga Satuan" disabled>
                                            </td>
                                            <td>
                                                <input type="text" id="total-harga" class="form-control" placeholder="Total Harga" disabled> 
                                            </td>
                                            <td>
                                                <a class="btn btn-primary" href="#">Tambah</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <colgroup>
                                        <col class="col-md-1">
                                        <col class="col-md-6">
                                        <col class="col-md-1">
                                        <col class="col-md-2">
                                        <col class="col-md-2">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Nama Menu</th>
                                            <th class="text-center">Jumlah</th>
                                            <th class="text-right">Harga Satuan</th>
                                            <th class="text-right">Total Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Iga Kuda</td>
                                            <td class="text-center">2</td>
                                            <td class="text-right">50000</td>
                                            <td class="text-right">100000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>Cappucino Float</td>
                                            <td class="text-center">2</td>
                                            <td class="text-right">20000</td>
                                            <td class="text-right">40000</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td class="text-right" colspan="4"><strong>Total Bayar</strong></td>
                                            <td class="text-right">140000</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="pull-right">
                            <a class="btn btn-success">Bayar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="<?php echo base_url(); ?>assets/js/jquery-2.2.3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.bootstrap-touchspin.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $.fn.modal.Constructor.prototype.enforceFocus = function () {}; // issue on bootstrap modal
                var base_url = '<?php echo base_url(); ?>';
                $('select').select2({
                    theme: 'bootstrap',
                    width: '100%'
                });
                $('#jumlah').TouchSpin({
                    verticalbuttons: true,
                    min: 1
                });
                function getJson(url) {
                    return JSON.parse($.ajax({
                        type: 'get',
                        url: url,
                        dataType: 'json',
                        global: false,
                        async: false,
                        success: function(data) {
                            return data;
                        }
                    }).responseText);
                }
//                var menu_list           = getJson(base_url + 'menu_list');
                $('#menu-list').on('select2:select', function(e) {
                    var harga_menu      = $('#menu-list option:selected').attr('data-harga');
//                    var harga_menu      = $('#menu-list').select2().find(':selected').data('harga');
                    $('#jumlah').prop('disabled', false);
                    $('#jumlah').val(1);
                    $('#harga-satuan').val(harga_menu);
                    $('#total-harga').val($('#jumlah').val() * $('#harga-satuan').val());
                });
                $('#jumlah').on('change keyup', function() {
                    var harga_satuan    = $('#harga-satuan').val();
                    var jumlah          = $('#jumlah').val();
                    var total_harga     = harga_satuan * jumlah;
                    $('#total-harga').val(total_harga);
                });
                $('#jumlah').keydown(function(e) {
                    if (e.keyCode == 46 || e.keyCode == 8) { // only allow enter and backspace
                        // dont do anything
                    }
                    else {
                        if (e.keyCode < 48 || e.keyCode > 57 ) {
                            e.preventDefault();	
                        }
                    }
                });
            });
        </script>
    </body>
</html>