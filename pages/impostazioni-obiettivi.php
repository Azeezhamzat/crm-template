<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Impostazione Obiettivi</title>

    <?php require_once('includes/assets.php'); ?>

</head>

<body>

    <div id="wrapper">

        <?php require_once('includes/header.php'); ?>
        <?php require_once('includes/sidebar-admin.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center huge lead">Impostazione Obiettivi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <h2 class="text-center lead"><big>Obiettivi per Campagna</big></h2>
            </div>

            <div class="row top-buffer">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Campagna</th>
                                            <th class="text-center">Tasso Conversione Contatti</th>
                                            <th class="text-center">Tasso Conversione Chiamate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">Kimbo</td>
                                            <td class="text-center" contenteditable="true">25%</td>
                                            <td class="text-center" contenteditable="true">35%</td>
                                            <td class="text-center"><button type="button" class="btn crm-button">Imposta</button></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"> Wind</td>
                                            <td class="text-center" contenteditable="true">20%</td>
                                            <td class="text-center" contenteditable="true">20%</td>
                                            <td class="text-center"><button type="button" class="btn crm-button">Imposta</button></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Infostrada</td>
                                            <td class="text-center" contenteditable="true">15%</td>
                                            <td class="text-center" contenteditable="true">15%</td>
                                            <td class="text-center" class="text-center"><button type="button" class="btn crm-button">Imposta</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>

            <div class="row">
                <h2 class="text-center lead"><big>Obiettivi per Team</big></h2>
            </div>

            <div class="row top-buffer">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Tasso Conversione Contatti</th>
                                            <th class="text-center">Tasso Conversione Chiamate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center" contenteditable="true">25%</td>
                                            <td class="text-center" contenteditable="true">35%</td>
                                            <td class="text-center"><button type="button" class="btn crm-button">Imposta</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php require_once('includes/scripts.php'); ?>

</body>

</html>
