<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="eng" lang="eng">

<head>
        <title>php-mess</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="./style.css">
        <script src="./script.js"></script>
</head>

<body>
        <div class="container">
                <div class="row vertical-offset-100">
                        <div class="col-md-4 col-md-offset-4">
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                                <div class="row-fluid user-row">
                                                        <img src="http://s11.postimg.org/7kzgji28v/logo_sm_2_mr_1.png" class="img-responsive" alt="Conxole Admin"/>
                                                </div>
                                        </div>
                                        <div class="panel-body">
                                                <form method="post" action="check.php" accept-charset="UTF-8" role="form" class="form-signin">
                                                        <fieldset>
                                                                <label class="panel-login">
                                                                        <div class="login_result"></div>
                                                                </label>
                                                                <input class="form-control" name="username" PlaceHolder= "Username" id="username" type="text">
                                                                <input class="form-control" name="password" PlaceHolder="Password" id="password" type="password">
                                                                <br></br>
                                                                <input class="btn btn-lg btn-success btn-block" type="submit" id="login" value="Login »">
                                                                <input class="btn btn btn-lg btn-default btn-block" action="form.php" name="signup" id="signup" type="submit" value="Sign up">
                                                        </fieldset>
                                                </form>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</body>
</div>
</html>
