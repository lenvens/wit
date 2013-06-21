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
<form method="post" action="<?=$PHP_SELF?>">
name:<p><input type="text" name="login" /></p>
pawd:<p><input type="password" name="pwd" /></p>
mobile:<p><input type="text" name="mobile" /></p>
mail:<p><input type="text" name="email" /></p>
bank_id:<p><input type="text" name="bank_id" /></p>
bank_code:<p><input type="text" name="bank_code" /></p>
kind:<p><input type="text" name="kind" /></p>
<p><input name="sbt" type="submit" value="register" /></p>
</form>
<?
}
?>
