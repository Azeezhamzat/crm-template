<?php require_once('includes/faker.php'); ?>

<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gestione Operatori</title>

    <?php require_once('includes/assets.php'); ?>

</head>

<body>

    <div id="wrapper">

        <?php require_once('includes/header.php'); ?>
        <?php require_once('includes/sidebar-admin.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center huge lead">Gestione Operatori</h1>
                </div>
                <!-- /.col-lg-12 -->
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
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Nome</th>
                                            <th class="text-center">Cognome</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Telefono</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr itemscope itemtype="http://schema.org/Person">
                                            <td class="text-center"><?= rand(1, 1000); ?></td>
                                            <td itemprop="givenName" class="text-center"><?= $faker->firstName ?></td>
                                            <td itemprop="familyName" class="text-center"><?= $faker->lastName ?></td>
                                            <td itemprop="email" class="text-center"><?= $faker->email ?></td>
                                            <td itemprop="telephone" class="text-center"><?= $faker->PhoneNumber ?></td>
                                            <td class="text-center"><a href="modifica-operatore.php"><button type="button" class="btn crm-button">Modifica</button></a></td>
                                            <td class="text-center"><button type="button" class="btn crm-button crm-remove-btn" data-confirm="Rimuovere l'operatore?">Rimuovi</button></td>
                                        </tr>
                                        <tr itemscope itemtype="http://schema.org/Person">
                                            <td class="text-center"><?= rand(1, 1000); ?></td>
                                            <td itemprop="givenName" class="text-center"><?= $faker->firstName ?></td>
                                            <td itemprop="familyName" class="text-center"><?= $faker->lastName ?></td>
                                            <td itemprop="email" class="text-center"><?= $faker->email ?></td>
                                            <td itemprop="telephone" class="text-center"><?= $faker->PhoneNumber ?></td>
                                            <td class="text-center"><a href="modifica-operatore.php"><button type="button" class="btn crm-button">Modifica</button></a></td>
                                            <td class="text-center"><button type="button" class="btn crm-button crm-remove-btn" data-confirm="Rimuovere l'operatore?">Rimuovi</button></td>
                                        </tr>
                                        <tr itemscope itemtype="http://schema.org/Person">
                                            <td class="text-center"><?= rand(1, 1000); ?></td>
                                            <td itemprop="givenName" class="text-center"><?= $faker->firstName ?></td>
                                            <td itemprop="familyName" class="text-center"><?= $faker->lastName ?></td>
                                            <td itemprop="email" class="text-center"><?= $faker->email ?></td>
                                            <td itemprop="telephone" class="text-center"><?= $faker->PhoneNumber ?></td>
                                            <td class="text-center"><a href="modifica-operatore.php"><button type="button" class="btn crm-button">Modifica</button></a></td>
                                            <td class="text-center"><button type="button" class="btn crm-button crm-remove-btn" data-confirm="Rimuovere l'operatore?">Rimuovi</button></td>
                                        </tr>
                                        <tr itemscope itemtype="http://schema.org/Person">
                                            <td class="text-center"><?= rand(1, 1000); ?></td>
                                            <td itemprop="givenName" class="text-center"><?= $faker->firstName ?></td>
                                            <td itemprop="familyName" class="text-center"><?= $faker->lastName ?></td>
                                            <td itemprop="email" class="text-center"><?= $faker->email ?></td>
                                            <td itemprop="telephone" class="text-center"><?= $faker->PhoneNumber ?></td>
                                            <td class="text-center"><a href="modifica-operatore.php"><button type="button" class="btn crm-button">Modifica</button></a></td>
                                            <td class="text-center"><button type="button" class="btn crm-button crm-remove-btn" data-confirm="Rimuovere l'operatore?">Rimuovi</button></td>
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

    <script>
        $('button[data-confirm]').click(function() {
            if (!confirm($(this).attr('data-confirm'))) {
              return false;
            } else {
                $(this).parent().parent().hide();
            }
        });
    </script>

</body>

</html>
