<?php
Header("Content-type:text/html;charset=utf-8");
session_start();
use witclass\Task_t;
$user_id=$_SESSION['user_id'];
require_once 'doctrine.php';

	#login
	$eee = $em->createQuery('SELECT u FROM witclass\Task_t u where u.user_id=\''.$user_id.'\'');
	$users = $eee->getArrayResult();
	if($users)
	{
		echo "<table class=\"table table-striped\">";
		echo "<tr ><td>#</td><td >任务列表</td></tr>";
		for($i=0;$i<count($users);$i++)
		{

			echo "<tr class=\"\"><td><span class=\"badge badge-success\">".($i+1)."</span></td><td ><small ><a href=\"comments.php?id=".$i."\">".$users[$i]['contents']."</a></small></td></tr>";

		
		}
		echo "</table>";
	}
	else
	{
		echo "dfdfdfd";
	
	}

	//$a=new Task_t;
	//$a->set_Task_t_title($title);
	//$a->set_Task_t_contents($contents);
	//$a->set_Task_t_user_id($user_id);

	//$b=new MyPoB;
	//$b->setMyPoBNick('weitao');
	//$b->setMyPoAbid($a);
	//$em->persist($a);
	//$em->persist($b);
	//$em->flush();
?>
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
