
<html>
<head>
<meta name="robots" content="noindex" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sent Team Segura Real Estate Client Survey </title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>
<body>

<?php

$field_1 =  $_POST["fieldname"];
$field_2 =  $_POST["field1"];
$field_3 =  $_POST["field2"];
$field_4 =  $_POST["comments"];

?>


<div id="container">
<div class="content"><div class="innerpad">
Your Name: <?php echo $field_1; ?>
<P>
How did you initially find us: <?php echo $field_2; ?>
<P>
Are you pleased with how the transaction went? <?php echo $field_3; ?>
<P>
Please tell us about your experience:<BR>
<?php echo $field_4; ?>
<p>Thank you for completing our Survey.</p>
</div></div>
</div>

<?php

DEFINE ('DB_USER', 'realtor_db');
DEFINE ('DB_PASSWORD', 'P1ss0ff!');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'realtor_survey');

mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Error : ' .mysql_error() );

mysql_select_db(DB_NAME);

echo "<P>MySQL<P>";

$query_1 = "INSERT INTO users (user_name) VALUES ('$field_1')";
$query_2 = "INSERT INTO found (how_found) VALUES ('$field_2')";
$query_3 = "INSERT INTO happy (pleased) VALUES ('$field_3')";
$query_4 = "INSERT INTO answers (body) VALUES ('$field_4')";


$result_1 = mysql_query($query_1);
$result_2 = mysql_query($query_2);
$result_3 = mysql_query($query_3);
$result_4 = mysql_query($query_4);

if ($result_4 = 1)

{ echo "<br>Input data is succeed"; }
	else 
{ echo "<br>Input data is fail"; }




mysqli_close();

?>



  </body>
</html>







