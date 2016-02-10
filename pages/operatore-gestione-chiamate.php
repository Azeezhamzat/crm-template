<?php require_once('includes/faker.php'); ?>

<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gestione Chiamata</title>

    <?php require_once('includes/assets.php'); ?>

</head>

<body>

    <div id="wrapper">

        <?php require_once('includes/header.php'); ?>
        <?php require_once('includes/sidebar-operatore.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center huge lead">Pannello Gestione Chiamata</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="panel panel-default">
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Anagrafica Contatto
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label>Nome</label>
                                                    <input class="form-control" value="<?= $faker->firstName ?>"disabled>
                                                    <label>Cognome</label>
                                                    <input class="form-control" value="<?= $faker->lastName ?>" disabled>
                                                    <label>Email</label>
                                                    <input class="form-control" value="<?= $faker->email ?>" disabled>
                                                    <label>Telefono</label>
                                                    <input class="form-control" value="<?= $faker->PhoneNumber ?>" disabled>
                                                    <label>Campagna</label>
                                                    <input class="form-control" value="Kimbo" disabled>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Storico Chiamate Contatto
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="4" disabled><?= $faker->date($format = 'd-m-Y H:i') ?>: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                            &#13;&#10;<?= $faker->date($format = 'd-m-Y H:i') ?>: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                                            &#13;&#10;<?= $faker->date($format = 'd-m-Y H:i') ?>: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</textarea>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Feedback e Commenti Chiamata
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <form role="form">
                                                        <div class="form-group">
                                                            <div class="form-group">

                                                                <textarea class="form-control" rows="3" autofocus></textarea>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row top-buffer">
                            <div class="col-lg-12">
                                <h2 class="text-center">Esito Chiamata</h2>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <div class="row">
                            <form>
                                <div class="col-lg-4 text-center">
                                    <h2>Da Richiamare</h2>
                                    <h4>Imposta nuova data e ora</h4>
                                    <input type="radio" name="choice" value="richiama" class="choice">
                                    <div class="row top-buffer crm-choice">
                                        <div class="richiama col-lg-12">
                                            <input type="datetime-local" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <h2>Conferma</h2>
                                    <h4>Da Contrattualizzare</h4>
                                    <input type="radio" name="choice" value="conferma" class="choice">
                                    <div class="row top-buffer crm-choice">
                                        <div class="conferma col-lg-12"><p class="lead">Il contatto conferma l'interesse</p></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <h2>Esito Negativo</h2>
                                    <h4>Non Interessato</h4>
                                    <input type="radio" name="choice" value="negativo" class="choice">
                                    <div class="row top-buffer crm-choice">
                                        <div class="negativo col-lg-12">
                                            <div class="dropdown">
                                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                Motivazioni Rifiuto
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <li><a href="#">Costo Elevato</a></li>
                                                <li><a href="#">Rifiuta contatto</a></li>
                                                <li><a href="#">Preferisce concorrenza</a></li>
                                                <li><a href="#">Non più interessato</a></li>
                                                <li><a href="#">Altro</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </form>
                </div>
                <div class="row top-buffer bottom-buffer">
                    <div class="col-lg-4 col-lg-offset-3">
                        <button type="button" class="btn btn-lg btn-primary back-btn">Indietro</button>
                    </div>
                    <div class="col-lg-4">
                        <button type="button" class="btn btn-lg crm-button">Salva</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php require_once('includes/scripts.php'); ?>

    <script>
        $('.back-btn').click(function() {
            window.history.back();
        });

        $('.crm-choice').hide();

        $('.choice').click(function() {
            $('.crm-choice').hide();
            $(this).next().show();
        });

    </script>

</body>

</html>
