<?php
use witclass\User_t;

require_once 'doctrine.php';
$login=$_POST['login'];
$pwd=$_POST['pwd'];
$sbt=$_POST['sbt'];
$phone=$_POST['mobile'];
$email=$_POST['email'];
$bank_id=$_POST['bank_id'];
$bank_code=$_POST['bank_code'];
$kind=$_POST['kind'];
if(isset($sbt))
{
	echo "xxxx";


	#login
	#$eee = $em->createQuery('SELECT u FROM po\MyPoA u where u.name=\''.$login.'\' and u.password=\''.$pwd.'\'');
	#$users = $eee->getArrayResult();
	#var_dump($users);
	#if($users)
	#{
	#	echo "xxxdfd";
	#
	#}
	#else
	#{
	#	echo "dfdfdfd";
	#
	#}

	$a=new User_t;
	$a->set_User_t_login($login);
	$a->set_User_t_auth($pwd);
	$a->set_User_t_phone($phone);
	$a->set_User_t_email($email);
	$a->set_User_t_bank_id($bank_id);
	$a->set_User_t_bank_code($bank_code);
	$a->set_User_t_kind($kind);

	//$b=new MyPoB;
	//$b->setMyPoBNick('weitao');
	//$b->setMyPoAbid($a);
	$em->persist($a);
	//$em->persist($b);
	$em->flush();
}
else
{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign in &middot; Twitter Bootstrap</title>
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
        <h2 class="form-signin-heading">Please Register</h2>
	<input type="text" name="login" class="input-block-level" placeholder="Name" >
	<input type="password" name="pwd" class="input-block-level" placeholder="Password" >
	<input type="text" name="mobile" class="input-block-level" placeholder="Mobile" >
	<input type="text" name="email" class="input-block-level" placeholder="Email" >
	<input type="text" name="bank_id" class="input-block-level" placeholder="Bank_id" >
	<input type="text" name="bank_code" class="input-block-level" placeholder="Bank_code" >
	<input type="text" name="kind" class="input-block-level" placeholder="Kind" >
	<input name="sbt" type="submit" value="Register" class="btn btn-large btn-primary" />
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
