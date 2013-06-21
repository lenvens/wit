<?php
use witclass\User_t;

require_once 'doctrine.php';
$login=$_POST['login'];
$pwd=$_POST['pwd'];
$sbt=$_POST['sbt'];
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
<p>name:<input type="text" name="login" /></p>
<p>pawd:<input type="password" name="pwd" /></p>
<p><input name="sbt" type="submit" value="register" /></p>
</form>
<?
}
?>
