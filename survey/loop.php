<html>
<head>
<meta name="robots" content="noindex">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Team Segura Real Estate Client Survey</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>
<body marginwidth="0" marginheight="0" topmargin="0" leftmargin="0" bgcolor="#ffffff" color="#585858">


<!-- Ansers -->

<?php

function getAnswers($dbc) {

DEFINE ('DB_USER', 'realtor_db');
DEFINE ('DB_PASSWORD', 'P1ss0ff!');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'realtor_survey');

mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Error : ' .mysql_error() );

mysql_select_db(DB_NAME);

$query = 'SELECT * FROM answers';
$result = mysql_query($query);

if ($result) {

        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

                $body = $row['body'];
                echo '

		Comment: 

		'.$body.'


                <P>';

                }

        }

}


mysqli_close();

?>

<!-- User -->

<?php

function getUsers($dbc) {

DEFINE ('DB_USER', 'realtor_db');
DEFINE ('DB_PASSWORD', 'P1ss0ff!');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'realtor_survey');

mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Error : ' .mysql_error() );

mysql_select_db(DB_NAME);

$query = 'SELECT * FROM users';
$result = mysql_query($query);

if ($result) {

        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

                $user_name = $row['user_name'];
                echo '

                User:

                '.$user_name.'


                <P>';

                }

        }

}


mysqli_close();

?>

<!-- How Hound -->

<?php

function getFound($dbc) {

DEFINE ('DB_USER', 'realtor_db');
DEFINE ('DB_PASSWORD', 'P1ss0ff!');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'realtor_survey');

mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Error : ' .mysql_error() );

mysql_select_db(DB_NAME);

$query = 'SELECT * FROM found';
$result = mysql_query($query);

if ($result) {

        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

                $how_found = $row['how_found'];
                echo '

                Found:

                '.$how_found.'


                <P>';

                }

        }

}


mysqli_close();

?>

<?php

function getHappy($dbc) {

DEFINE ('DB_USER', 'realtor_db');
DEFINE ('DB_PASSWORD', 'P1ss0ff!');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'realtor_survey');

mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Error : ' .mysql_error() );

mysql_select_db(DB_NAME);

$query = 'SELECT * FROM happy';
$result = mysql_query($query);

if ($result) {

        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

                $pleased = $row['pleased'];
                echo '

                Pleased:

                '.$pleased.'


                <P>';

                }

        }

}


mysqli_close();

?>



<p>

<?php getUsers($dbc);?>

<p>

<?php getFound($dbc);?>

<p>

<?php getHappy($dbc);?>

<p>

<?php getAnswers($dbc);?>

<p>


</body>
</html>



