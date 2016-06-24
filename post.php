
<html>
<head>
<title>Tech Forum</title>
</head>
<?php 
session_start();

?>

<body  bgcolor="#AAFFFF">
<center><img src="ceg.png"></img></center>
<br>
<div style="100%">
<div style="float:left; width:20%;">
	<form  class="innershadow" action="" method="post" enctype="multipart/form-data">
		<fieldset class="padding"> 
		<legend>POST</legend>
		<pre>
Write your POST here   :
 

 <textarea name="post" required rows="12" cols="48" ></textarea>
		</pre>
<center><input type="submit" value="POST" class="button" name="save"><br><br>
</div>
</form>
<div  style="float:right; width:60%;">
<?php

	// Connecting to Data Base
$mysqlport = getenv('S2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;

$dbuser = 'root';
$dbpass = '';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die  ('Error connecting to mysql');

$dbname = 'k';
mysql_select_db($dbname);

if(isset($_POST['save']))
{
  $post=$_POST['post'];
  
  
	   //insert to database
     $query= mysql_query("INSERT INTO posts(post) values('$post')");
	 if($query)
     {
 echo
	 "<script>
alert('Your Post updated Successfully');
</script>";

	 }	  
	 else if(!$query)
	 {
		 echo 
		 "<script>
		alert('Unable to Save');
		</script>";

	 }
  
}
mysql_close();
?>
<?php

	
	// Connecting to Data Base


$mysqlport = getenv('S2G_MYSQL_PORT');

$dbhost = "localhost:".$mysqlport;


$dbuser = 'root';
$dbpass = '';



$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die  ('Error connecting to mysql');



$dbname = 'k';


mysql_select_db($dbname);



  		



$query="select * from  posts";


$result=mysql_query($query,$conn);	

	
	
if (!$result)
echo "Be the first person to post on it";

else
 {
	
echo "<table class='tt' cellpadding='15' rules='rows' border='2' cellspacing='60'  height='250'>
<tr>
	<th>ID</th>
	<th>POST</th>
   <th></th>
	</tr>";

	
	while($row = mysql_fetch_array($result))

{
$id=$row['id'];
echo "<tr size='20%'>";
echo "<td >" . $row['id']; "</td>";
echo "<td>" . $row['post'];"</td>";

?>
<td>
 <form method='POST' name='comment' action='comment.php' >
 <input type='submit' value='Check Comments'>
 <input type='text' name="id" value="<?php echo $id;?>" hidden>
<?php $_SESSION['id']=$id; 
?>
 </form>
 </td>
 <?php
echo "</tr>";
}
echo "</table>";
 
 }

?>


</div>
</body>
</html>
<style type="text/css">
table.tt
{
border:2;
display:block;
border-style:
cellspacing:10;

}

fieldset.padding
{
padding-top:2%;
padding-bottom:0%;
padding-right:5%;
padding-left:15px;
height:360px;
width:10%;
border-style:outset;
border-width:5px ;

}
div#header {
    background-color: darkgoldenrod;
    text-align: -webkit-center;
    color: beige;
    padding: 0%;
	}
ul
{
height:7%;

list-style-type:none;
margin: 0;
padding :0;
overflow:hidden;
background;
position:none;
top:100%;
width:100%
}
li
{
float:left;

}
li:last-child
{
float:left;
border-right:none;
}
li a{
display:block;
color:black;
text-align:center;
padding:14px 16px;
text-decoration:;
}
li a:hover
{
a:active
{
background-color:#111
};
background-color:FFFF00;
}

	p.one 
{
border-style:solid;
border-width:5px;
}
frameset.two 
{
border-style:solid;
border-width:medium;
}
a { text-decoration:none }


.button
{
display:inline-block;
padding: 15px 25px;
font-size:24px;
cursor:pointer;
text-align: center;
text-decoration: none;
outline:none;
color: #fff;
background-color: #59C3DF;
background-color: #59C3DF;
border:none;
border-radius: 15px;
box-shadow: 0 9px #999;
font-family: -webkit-body;
}

.button:hover 
{
background-color:#59C3DF;
}

.button:active{
background-color: #59C3DF;
box-shadow:0 5px #666;
transforem:translateY(4px);
}
</style>

