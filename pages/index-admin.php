<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Admin</title>

    <?php require_once('includes/assets.php'); ?>

</head>

<body>

    <div id="wrapper">

        <?php require_once('includes/header.php'); ?>
        <?php require_once('includes/sidebar-admin.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center huge lead">Dashboard Amministratore</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <div class="crm-daily-recap">Riepilogo Giornaliero</div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody class="crm-daily-recap">
                                    <tr>
                                        <td><strong>Numero Chiamate Effettuate</strong></td>
                                        <td>1000</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Numero di Conversioni</strong></td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tasso di Conversione Chiamate</strong></td>
                                        <td>15%</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tasso di Conversione Contatti</strong></td>
                                        <td>9%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
            <div class="row">
                <h2 class="text-center lead"><big>Obiettivi per Campagna</big></h2>
            </div>
            <div class="row top-buffer">
                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <div class="crm-campaign-status"><big>Obiettivo Quotidiano Raggiunto</big></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="text-center col-lg-12 crm-campaign-status-footer">Campagna Kimbo</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <div class="crm-campaign-status"><big>Obiettivo Quotidiano Raggiunto</big></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="text-center col-lg-12 crm-campaign-status-footer">Campagna Wind</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <div class="crm-campaign-status"><big>Obiettivo Quotidiano Non Raggiunto</big></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="text-center col-lg-12 crm-campaign-status-footer">Campagna Vodafone</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <h2 class="text-center lead"><big>Obiettivi per Team</big></h2>
            </div>
            <div class="row top-buffer">
                <div class="col-lg-4 col-lg-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row split-panel">
                                <div class="col-lg-6 text-center divider-vertical">
                                    <div class="crm-campaign-status"><big>Obiettivo</big></div>
                                </div>
                                <div class="col-lg-5 text-center">
                                    <div class="crm-campaign-status"><big>Attuale</big>
                                    </div>
                                </div>
                                <div class="col-lg-6 text-center divider-vertical">
                                    <div class="crm-campaign-status"><big>25%</big></div>
                                </div>
                                <div class="col-lg-5 text-center">
                                    <div class="crm-campaign-status"><big>21%</big>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="text-center col-lg-12 crm-campaign-status-footer">Tasso Conversione Chiamate</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row split-panel">
                                <div class="col-lg-6 text-center divider-vertical">
                                    <div class="crm-campaign-status"><big>Obiettivo</big></div>
                                </div>
                                <div class="col-lg-5 text-center">
                                    <div class="crm-campaign-status"><big>Attuale</big>
                                    </div>
                                </div>
                                <div class="col-lg-6 text-center divider-vertical">
                                    <div class="crm-campaign-status"><big>35%</big></div>
                                </div>
                                <div class="col-lg-5 text-center">
                                    <div class="crm-campaign-status"><big>25%</big>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="text-center col-lg-12 crm-campaign-status-footer">Tasso Conversione Contatti</div>
                                    <div class="clearfix"></div>
                                </div>
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
        $(".crm-campaign-status-footer").click(function() {
            window.location.href = "impostazioni-obiettivi.php";
        });
    </script>

</body>

</html>
