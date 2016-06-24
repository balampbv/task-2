
<html>
<head>
<title>Comments</title>
<style type='text/css'>

.i
{
width:64px;
height:64px;
border-radius:.1%;

} 

.p
{
color:black;
height:150px;
border:solid  #efefef 1px;
border-radius:30px;
box-shadow: 5px 5px 10px #0e0e0e;
margin:30px;
padding:20px 20px;
font-size:16pt;
font-family:Arial, sans-serif;
text-indent:1 em;
}
</style>
</head>
<?php 

session_start();
$id=$_SESSION['id'];
$id=$_POST["id"];
$i=0;
?>
<body bgcolor="E3F2F6">
<a href="post.php" align="left"><img class="i"src="222.png" align="left" ></a></img>

<center><img src="ceg.png"></img></center>
<br>


<?php

	
	// Connecting to Data Base

$mysqlport = getenv('S2G_MYSQL_PORT');

$dbhost = "localhost:".$mysqlport;


$dbuser = 'root';
$dbpass = '';


$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die  ('Error connecting to mysql');


$dbname = 'k';

mysql_select_db($dbname);



$query="select * from posts where id='$id'";

$result=mysql_query($query,$conn);	

	
if (!mysql_query($query,$conn))
  	{
	  die('Error: ' . mysql_error());
  	}
	


echo "<table border='2'  cellpadding='30' >


<tr>

	<th>POST</th>
</tr>";


while($row= mysql_fetch_array($result))
 

{


echo "<tr class='p'>";

echo "<td >" . $row['post'];
 "</td>";
 echo "</tr>";



} 

echo "</table>"




 
?>


<br><br><br>

<div style="float:right; width:40%;">
	
	<form  class="innershadow" action="" method="post" enctype="multipart/form-data">
	<fieldset class="padding"> 
		<legend>Comments</legend>
		<pre>
Name      : <input type="text" name="uname" required >


			
Email Id  : <input type="mail" name="mail" required>


comments   :
            <textarea name="comments" required rows="8" cols="40" ></textarea>
		</pre></center><br>
<center><input type="submit" value="Leave a 
Comment" name="save"><br><br>
 <input type='text' name="id" value="<?php echo $id;?>" hidden>
</div>
<div  style="float:left; width:30%;">
<?php

	// Connecting to Data Base
$mysqlport = getenv('S2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;

$dbuser = 'root';
$dbpass = '';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die  ('Error connecting to mysql');

$dbname = 'k';
$q=mysql_select_db($dbname);

if(isset($_POST['save']))
{
  $name=$_POST['uname'];
  $mail=$_POST['mail'];
  $comment=$_POST['comments'];

 $check_table= "select * from comment_$id";
 
 $result=mysql_query($check_table,$conn);

 $row = mysql_fetch_array($result);
 
if(!$row)
{ 
  $sql = "CREATE TABLE comment_$id
(
Name varchar(15),
Mail varchar(15),
comment varchar(255)
)";
// Execute query
$check=mysql_query($sql,$conn);

if(!$check)
{
die('Error: ' . mysql_error());
}
else
{
$i++;
die("Table created.....Pls Refresh the PAge");
}
}

  //insert to database
     $query= mysql_query("INSERT INTO comment_$id (Name,Mail,comment) values('$name','$mail','$comment')");	
	 $i++;

	if($query)
     {
	 
	 "<script>
	alert('Your Comment updated Successfully');
    </script>";

	 }	  
	 else if(!$query)
	 {
		
	 "<script>
	alert('Something went Wrong');
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



  		



$query="select * from  comment_$id";


$result=mysql_query($query,$conn);	

	


if (!mysql_query($query,$conn))

  	{
	  
die('Error: ' . mysql_error() );

  	
	}
	
echo "<table class='tt' cellpadding='10' rules='rows' border='2' cellspacing='50'  height='200'>
<tr>
	<th>Name</th>
	<th>Mail Id</th>
	<th>Comments</th>
</tr>";
while($row1 = mysql_fetch_array($result))
{
echo "<tr size='10%'>";
echo "<td >" . $row1['Name']; "</td>";
echo "<td>" . $row1['Mail'];"</td>";
echo "<td>" . $row1['comment'];"</td>";
echo "</tr>";
}
echo "</table>";
?>
</div>
</body >
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

p.three
{
border-style:solid;
border-width:1px;
}
li ul { margin:0; padding:0 5px; line-height:none;height:42%;
 position:absolute; top:29px; left:0; border:solid 1px #c93300; border-width:0px 1px 1px 1px; width:180px; display:none; background:#FFFFFF;}
li:hover ul { display:block }
li:hover a {color:white; background::#4CAF50;
}
li ul li { display:block;  border-bottom:solid 3px #888888 ; width:100%; background:url(images/d_horizontal_red_classic_menu_arrow.gif) no-repeat 3px 12px; padding:10px 2px  10px; }
li ul li:last-child { border-bottom:0px;}
li ul a { border-width:10px; color:#909090; padding:0 5px 0 0; background-color:transparent;}
li:hover ul li a { color:#909090}
li ul li a:hover {color:white; background::#4CAF50;
}
</style>

