<!DOCTYPE html>
<html lang="en">
<head>
<meta name="robots" content="noindex" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Contact Segura Realtor</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />

<?php

// display form if user has not clicked submit

if (!isset($_POST["submit"])) {

?>


	<div id="container">
        <div class="topcap"></div>
        <div class="subject"><div class="subjectpad">
                <p>Contact Segura Realtor</p>
        </div></div>
        <div class="content"><div class="innerpad">


	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


<p><label for="field1"> Your Name: </label></p>
<div class="formfield">
        <input type="text" name="field1" id="field1" required >
</div>

<p><label for="field2"> Your Phone Number:</label></p>
<div class="formfield">
        <input type="tel" name="field2" id="phone" required >
</div>

<p><label for="field3"> Your Email:</label></p>
<div class="formfield">
        <input type="email" name="field3" id="email" required >
</div>

<p><label for="field4"> Your Address: </label></p>
<div class="formfield">
        <textarea id="field4" name="field4" rows="3" required></textarea>
</div>

<p><label for="field5"> Please tell us your needs:</label></p>
<div class="formfield">
        <textarea id="field5" name="field5" rows="5" required></textarea>
</div>

<div class="submitbtn"><input type="submit" name="submit" class="button blue" value="Submit" /></div>
<input type="hidden" name="email" value="">
</form>
        </div></div>
</div>

<script>
$("#ContactForm").validate();
</script>

<?php

} else {

        // the user has submitted the form
        // Check if the "from" input field is filled out

    $field1 = $_POST["field1"];
    $field2 = $_POST["field2"];
    $field3 = $_POST["field3"];
    $field4 = $_POST["field4"];
    $field5 = $_POST["field5"];

    // message lines should not exceed 70 characters (PHP rule), so wrap it

    $field5 = wordwrap($field5, 70);

    // send mail

    mail("teamsegura@kems.com","Team Segura - Lead Form: $name","Name: $field1 \n Phone: $field2 \n Email: $field3 \n Address: $field4 \n Commens: $field5 \n ");

        echo "<div id=\"container\">";
        echo "<div class=\"subject\"><div class=\"subjectpad\"><p>Thank You</p></div></div>";
        echo "<div class=\"content\"><div class=\"innerpad\">";
        echo "<p>Thank you for contacting Segura Realtor";
        echo "</div></div>";


}

?>

</body>
</html>

