<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ataz Barbershop</title>

    <!-- Bootstrap Core CSS -->
   <link href="../../dist/bootstrap/css/bootstrap.css" rel="stylesheet"> 
 
    <!-- Custom CSS -->
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">

</head>

<body style="background-color:#000000">
<center>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading" align="center">
                    <a href="../"><h3 class="panel-title"><img src="../../dist/gambar/admin.png" /></h3></a>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="proseslogin.php" name="postform">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="col-md-3 col-md-offset-9 btn btn-warning">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</center>
</body>

</html>
