<?php

$cookie = $_COOKIE['cookiethatemailwassent'];
if ($cookie)
    setcookie('cookiethatemailwassent','',time()-3600,'/');

include('blog/wp-load.php');
get_header();


if ($cookie)
    echo '<div style="background-color:#88ff88;border:solid darkgreen 2px;padding:10px;width:200px;text-align:center;margin-right:auto;margin-left:auto">Your email was sent!</div>';

?>


<h2 style="color:#990000;text-align:center">Feedback</h2>

<div style="font-family:arial;font-size:1em;padding-bottom:30px">
Do you have any feedback? I'd love to hear it from you! <br /><br />
Just fill in the comment box below. If you include your name and email address you just might see your feedback on this website.
</div>

<form action="send_emails.php" method="post" name="client"
style="background-color:#ffeebb;border:outset #ffbb88 3px;padding:10px;width:370px">

<input type="hidden" name="page" value="feedback" />
<div id="alert" style="color:red;text-align:center"></div>

<table><tr>
<td>Name:</td> <td><input id="name" name="name" type="text" size="30" /> 
<span style="font-size:0.7em;padding:0px"> (required)</span></td>
</tr><tr>
<td>Email:</td> <td><input id="email" name="email" type="text" size="30" /> 
<span style="font-size:0.7em;padding:0px"> (required)</span></td>
</tr></table>
<br />

Your Feedback: <br />
<textarea name="message" cols="40" rows="12"></textarea>
<br /><br />
<input style="position:relative;left:300px" type="button" value="Send" onclick="verify()" />

</form>


<script type="text/javascript">

function verify() {

    var a = document.getElementById('alert')
    var error_list = new Array(2)

	//check name
    if (document.getElementById('name').value == '')
	error_list[0] = true

	//check email
    var e = document.getElementById('email')
    if (e.value.indexOf('.' , e.value.indexOf('@')) == -1)
	error_list[1] = true

    if (error_list[0] && error_list[1])
	a.innerHTML = 'Please write your name and your email'
    else if (error_list[0])
	a.innerHTML = 'Please write your name'
    else if (error_list[1])
	a.innerHTML = 'Please write your email'
    else
	document.client.submit()
}

</script>


<?php
get_sidebar();
get_footer();
?>