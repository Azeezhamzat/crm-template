<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Campagne in corso</title>

    <?php require_once('includes/assets.php'); ?>

</head>

<body>

    <div id="wrapper">

        <?php require_once('includes/header.php'); ?>
        <?php require_once('includes/sidebar-operatore.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center huge lead">Campagne in corso</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-offset-1 col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="widget-logo-container">
                            <img src="../dist/img/logo-kimbo.jpg" class="crm-widget-logo" />
                        </div>
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-phone fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">150</div>
                                    <div>Contatti Totali</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Visualizza Contatti</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="widget-logo-container">
                            <img src="../dist/img/logo-vodafone.jpg" class="crm-widget-logo" />
                        </div>
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-phone fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">90</div>
                                    <div>Contatti Totali</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Visualizza Contatti</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="widget-logo-container">
                            <img src="../dist/img/logo-wind.jpg" class="crm-widget-logo" />
                        </div>
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-phone fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">25</div>
                                    <div>Contatti Totali</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Visualizza Contatti</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php require_once('includes/scripts.php'); ?>

    <script>
        $(".panel-footer").click(function() {
            window.location.href = "gestione-contatti-filtrata.php";
        });
    </script>

</body>

</html>
