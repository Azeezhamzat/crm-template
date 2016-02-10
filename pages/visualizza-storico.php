<?php require_once('includes/faker.php'); ?>

<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Storico Chiamate</title>

    <?php require_once('includes/assets.php'); ?>

</head>

<body>

    <div id="wrapper">

        <?php require_once('includes/header.php'); ?>
        <?php require_once('includes/sidebar-operatore.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center huge lead">Storico Chiamate Contatto ID: <?= $idUtente; ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row" itemscope itemtype="http://schema.org/Person">
                <div class="col-md-6">
                    <form>
                      <div class="form-group">
                        <label for="exampleCampagna">Campagna</label>
                        <input type="text" class="form-control" id="exampleCampagna" placeholder="Campagna" value="Kimbo" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleName">Nome</label>
                        <input itemprop="givenName" type="text" class="form-control" id="exampleName" placeholder="Nome" value="<?= $faker->firstName ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleLastName">Cognome</label>
                        <input itemprop="familyName" type="text" class="form-control" id="exampleLastName" placeholder="Cognome" value="<?= $faker->lastName ?>" disabled>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="contactID">ID Contatto</label>
                        <input type="text" class="form-control" id="contactID" placeholder="ID" value="<?= $idUtente; ?>" disabled>
                    </div>
                    <div class="form-group">
                      <label for="exampleEmail">Email</label>
                      <input itemprop="email" type="text" class="form-control" id="exampleEmail" placeholder="Email" value="<?= $faker->email ?>"disabled>
                  </div>
                  <div class="form-group">
                    <label for="examplePhone">Telefono</label>
                    <input itemprop="telephone" type="text" class="form-control" id="examplePhone" placeholder="Telefono" value="<?= $faker->PhoneNumber ?>" disabled>
                </div>
            </form>
        </div>
    </div>

    <div class="row top-buffer">
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Effettuata il: <?= $faker->date($format = 'd-m-Y H:i') ?>
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Effettuata il: <?= $faker->date($format = 'd-m-Y H:i') ?>
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Effettuata il: <?= $faker->date($format = 'd-m-Y H:i') ?>
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-offset-5 bottom-buffer">
            <button type="button" class="btn btn-primary btn-lg back-btn">Indietro</button>
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
