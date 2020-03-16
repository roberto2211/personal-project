<link rel="stylesheet" type="text/css" href="libs/css/custom.css">


<body>

<?php 
include "header.php";
include_once "config/database.php";
include_once "objects/profile.php";
// get database connection
$database = new Database();
$db = $database->getConnection();

/* instance ya objet profile, qui unitialise la connexion */
   

   $profile = new Profile($db);


            $info=$profile->readInfo();

        foreach ($info as  $value) {
        	echo'<pre>';
 			print_r($info);
        }
 


 ?>


 <!--Table-->
<table class="table table-striped w-auto">

  <!--Table head-->
  <thead>
    <tr>
      <th>Email</th>
      <th>Message</th>
    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
  <tbody>
    <tr class="table-info">
    
      <td><?php echo $info['email'] ?></td>
      <td><?php echo $info['message'] ?></td>
 
    </tr>
 
  </tbody>
  <!--Table body-->


</table>
<!--Table-->




<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>