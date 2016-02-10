<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dati Operatori</title>

    <?php require_once('includes/assets.php'); ?>

</head>

<body>

    <div id="wrapper">

        <?php require_once('includes/header.php'); ?>
        <?php require_once('includes/sidebar-admin.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center huge lead">Dati Operatori</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row top-buffer">
                <div class="col-lg-1 dropdown" id="crm-filter">
                    <button class="btn col-lg-offset-12 btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Seleziona una Campagna
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Kimbo</a></li>
                        <li><a href="#">Wind</a></li>
                        <li><a href="#">Vodafone</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-lg-offset-6">
                    <div class="dropdown" id="crm-filter">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Esporta dati in
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Excel</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <button type="button" class="btn crm-button">Esporta</button>
                </div>
            </div>

            <div class="row top-buffer">
                <div class="col-lg-3 col-lg-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="text-center">
                                    <div class="huge totale-contatti">1000</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="text-center crm-daily-recap"><big>Totale Contatti</big></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row top-buffer">
                <div class="col-lg-3 col-lg-offset-1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="text-center">
                                    <div class="huge da-richiamare">300</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="text-center crm-daily-recap"><big>Contatti da Richiamare</big></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="text-center">
                                    <div class="huge contatti-confermati">400</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="text-center crm-daily-recap "><big>Contatti Confermati</big></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="text-center">
                                    <div class="huge non-interessati">300</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="text-center crm-daily-recap "><big>Contatti Non Interessati</big></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row top-buffer">
                <div class="col-lg-3 col-lg-offset-1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="text-center">
                                    <div class="huge totale-chiamate">1500</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="text-center crm-daily-recap"><big>Totale Chiamate</big></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="text-center">
                                    <div class="huge ctr_contatti">40%</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="text-center divider-bottom crm-daily-recap"><big>Confermati</big></div>
                            <div class="text-center crm-daily-recap"><big>Contatti Totali</big></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="text-center">
                                    <div class="huge ctr_chiamate">26%</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="text-center divider-bottom crm-daily-recap"><big>Confermati</big></div>
                            <div class="text-center crm-daily-recap"><big>Chiamate Totali</big></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row top-buffer">

            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php require_once('includes/scripts.php'); ?>

    <script src="../js/data.js">

    </script>

</body>

</html>
