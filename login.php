<?php
session_start();
use witclass\User_t;


require_once 'doctrine.php';
$login=$_POST['login'];
$pwd=$_POST['pwd'];
$sbt=$_POST['sbt'];
if(isset($sbt))
{


	$eee = $em->createQuery('SELECT u FROM witclass\User_t u where u.login=\''.$login.'\' and u.auth=\''.$pwd.'\'');
	$users = $eee->getArrayResult();
	if($users)
	{
		$_SESSION['wt']='wt';
		Header("Location:home.php");

	
	}
	else
	{
		echo "dfdfdfd";
	
	}
	//$a=new MyPoA;
	//$a->setMyPoAName('weitao');

	//$b=new MyPoB;
	//$b->setMyPoBNick('weitao');
	//$b->setMyPoAbid($a);
	//$em->persist($a);
	//$em->persist($b);
	//$em->flush();
}
else
{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign in </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
  </head>
  <body>
    <div class="container">
	<form class="form-signin" method="post" action="<?=$PHP_SELF?>">
        <h2 class="form-signin-heading">Please Login</h2>
	<input type="text" name="login" class="input-block-level" placeholder="login" >
	<input type="password" name="pwd" class="input-block-level" placeholder="Password" >
	<input name="sbt" type="submit" value="Login" class="btn btn-large btn-primary" />
	</form>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.js"></script>

  </body>
</html>
<?
}
?>
