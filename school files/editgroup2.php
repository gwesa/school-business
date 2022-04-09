<?php
include("connect.php");

 $sql="UPDATE user_groups set group_name= '".$_POST['group_name']."',group_level='".$_POST['group_level']."',group_status='".$_POST['group_status']."' where id='".$_GET['id']."'";
$result=$conn->query($sql);
header('location:group.php');
?> 