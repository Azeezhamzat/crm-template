<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Recalling CRM Login</title>

    <?php require_once('includes/assets.php'); ?>

</head>

<body>

    <div class="container">
        <div class="row top-buffer">
            <div class="col-md-4 col-md-offset-4">
                <img src="../dist/img/logo.jpg" alt="Recalling CRM Logo" id="crm-logo-login">
            </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center huge lead">Login</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Ricordami
                                    </label>
                                </div>
                                <a href="index-operatore.php" class="btn btn-lg crm-button btn-block">Login</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('includes/scripts.php'); ?>

</body>

</html>
