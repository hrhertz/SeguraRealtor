<!DOCTYPE html>
<html lang="en">
<head>
<meta name="robots" content="noindex" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Team Segura Real Estate Client Survey </title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jQuery.Validate/1.6/jQuery.Validate.min.js"></script>
<script language="javascript">
function handleField(){
	if(document.getElementById('field1').value == 'Other'){
			document.getElementById('ot-val').style.display = 'block';
	}else{
			document.getElementById('ot-val').style.display = 'none';
	}
}
</script>
</head>
<body>

<div id="container">
	<div class="topcap"></div>
	<div class="logo"><img src="images/logo-ts.jpg" alt="" /></div>
	<div class="subject"><div class="subjectpad">
		<p>Step 1: Complete Our Survey</p>
	</div></div>
	<div class="content"><div class="innerpad">

<form method="post" action="sendfeedback.php" name="SurveyForm">

<p><label for="fieldname"><span class="number">1</span> Your Name: <span class="optional">(<em>Optional</em>)</span></label></p>
<div class="formfield">
	<input type="text" name="fieldname" id="fieldname">
</div>

<p><label for="field1"><span class="number">2</span> How did you initially find us?</label></p>
<div class="formfield">
	<select name="field1" id="field1" onchange="handleField();" required>
	<option value="Recommended by a friend">Recommended by a friend </option>
        <option value="Recommended by another realtor">Recommended by another Realtor</option>
        <option value="Past client">Past client</option>
        <option value="Church">Church</option>
        <option value="Google">Google</option>
        <option value="Zillow">Zillow</option>
	<option value="Trulia">Trulia</option>
        <option value="Yelp">Yelp</option>
        <option value="Facebook">Facebook</option>
        <option value="Twitter">Twitter</option>
        <option value="Youtube">Youtube</option>
        <option value="Inquired about a house">Inquired about a house</option>
	<option value="Other">Other</option>
	</select>
	<br />
	<input type="text" class="otherfield" style="display:none;" name="ot-val" id="ot-val" value="If other, please enter where." onblur="if (this.value == '') {this.value = 'If other, please enter where.';}" onfocus="if (this.value == 'If other, please enter where.') {this.value = '';}" />
</div>

<p><label for="field2"><span class="number">3</span> Are you pleased with how the transaction went?</label></p>
<div class="formfield">
	Yes <input type="radio" name="field2" id="field2" value="Yes" required />
	No <input type="radio" name="field2" id="field2" value="No" />
</div>

<p><label for="field3"><span class="number">4</span> Please tell us about your experience.</label></p>
<div class="formfield">
	<textarea id="field3" name="comments" rows="5" required></textarea>
</div>

<div class="formfield">
        <p><label><em>Please enter what you see on the image in the box below.</em></label></p>
        <img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image">
        <input type="text" name="captcha_code" size="10" maxlength="6" />
        <a class="small" href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
</div>


<div class="submitbtn"><input type="submit" class="button blue" value="Submit" /></div>
<input type="hidden" name="email" value="">
</form>
	</div></div>
</div>

<script>
$("#SurveyForm").validate();
</script>

</body>
</html>
