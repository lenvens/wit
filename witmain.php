<?php
require_once "doctrine.php";
//根据根据class创建表结构
$tool = new \Doctrine\ORM\Tools\SchemaTool($em);
$classes = array(
$em->getClassMetadata('witclass\User_t'),
$em->getClassMetadata('witclass\Task_t'),
$em->getClassMetadata('witclass\Taskinfo_t'),
$em->getClassMetadata('witclass\Tasklog_t'),
//$em->getClassMetadata('Entities\Userserveinfo'),
// $em->getClassMetadata('Entities\Addressinfo')
//$em->getClassMetadata('Entities\Evaluate')
);
$tool->dropSchema($classes);
$tool->createSchema($classes);


?>
