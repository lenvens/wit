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
<form method="post" action="<?=$PHP_SELF?>">
<p>name:<input type="text" name="login" /></p>
<p>pawd:<input type="password" name="pwd" /></p>
<p><input name="sbt" type="submit" value="submit" /></p>
</form>
<?
}
?>
