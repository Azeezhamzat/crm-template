<?php require_once('includes/faker.php'); ?>

<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gestione Contatto</title>

    <?php require_once('includes/assets.php'); ?>

</head>

<body>

    <div id="wrapper">

        <?php require_once('includes/header.php'); ?>
        <?php require_once('includes/sidebar-admin.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center huge lead">Gestione Contatto ID: <?= $idUtente ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row" itemscope itemtype="http://schema.org/Person">
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="contactID">ID Contatto</label>
                            <input type="text" class="form-control" id="contactID" placeholder="ID" value="<?= $idUtente ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="contactID">Campagna</label>
                            <input type="text" class="form-control" id="campaign" placeholder="ID" value="Kimbo">
                        </div>
                        <div class="form-group">
                            <label for="exampleEmail">Email</label>
                            <input itemprop="email" type="text" class="form-control" id="exampleEmail" placeholder="Email" value="<?= $faker->email ?>">
                        </div>

                    </form>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="exampleName">Nome</label>
                            <input itemprop="givenName" type="text" class="form-control" id="exampleName" placeholder="Nome" value="<?= $faker->firstName ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleLastName">Cognome</label>
                            <input itemprop="familyName" type="text" class="form-control" id="exampleLastName" placeholder="Cognome" value="<?= $faker->lastName ?>">
                        </div>

                        <div class="form-group">
                            <label for="examplePhone">Telefono</label>
                            <input itemprop="telephone" type="text" class="form-control" id="examplePhone" placeholder="Telefono" value="<?= $faker->PhoneNumber ?>">
                        </div>
                    </form>
                </div>
            </div>

            <div class="row top-buffer bottom-buffer">
                <div class="col-lg-4 col-lg-offset-3">
                    <button type="button" class="btn btn-lg btn-primary back-btn">Indietro</button>
                </div>
                <div class="col-lg-4">
                    <a href="gestione-operatori.php"><button type="button" class="btn btn-lg crm-button">Salva</button></a>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php require_once('includes/scripts.php'); ?>

    <script>
        $(".back-btn").click(function() {
            window.history.back();
        });
    </script>

</body>

</html>
