<?php
//3vil-Mailer

//Based on the work of PenguinPaul at https://github.com/PenguinPaul/php-mail-spoofer

//You may use this script for educational purposes only. I cannot be held repsonsible for any legal action or other action taken against you
//because of use of this script.

//DONT BE STUPID

//3vil Mailer by nDemon is licensed under a Creative Commons Attribution-ShareAlike 4.0 International License,
//for more information see http://creativecommons.org/licenses/by-sa/4.0/

//REMEMBER, DONT BE STUPID!!!

if(isset($_POST['to'])
&& isset($_POST['from'])
&& isset($_POST['fromname'])
&& isset($_POST['replyto'])
&& isset($_POST['subject'])
&& isset($_POST['message']))
{
	$headers = 'From: '.$_POST['fromname'].' <'.$_POST['from'].'>' . "\r\n" .
	    'Reply-To: '. $_POST['replyto'] . "\r\n";

    if ($_POST['mailbomb']="Yes")
      {
        $i = 0;
        $array = array();
        while ($i++ < 19)
            {
	            $mail = mail($_POST['to'],$_POST['subject'],$_POST['message'],$headers);
             }
      }
	$mail = mail($_POST['to'],$_POST['subject'],$_POST['message'],$headers);
	
	if($mail)
	{
		$mail = '<div style="color:blue">Mail Sent!</div>';
	header("Refresh:5");

	} else {
		$mail = '<div style="color:red">Error</div>';
	}
} else {
	if(!isset($mail))
	{
		$mail = '<div style="color:red">Fill in all inputs</div>';
	}
}



?>
<!DOCTYPE html>
<html>
	<head>
		<title>3vil Mailer</title>
	</head>
	<body text=#001547>
	    <p1>3vil mailer by ndemon</p1>
	    <FONT COLOR="#ff0000">Don't Do Anything Stupid! !p</FONT>
		<?php echo $mail; ?>
		<form action="index.php" method="post">
			<table border="0">
				<tr>
					<td>To: </td>
					<td><input type="text" name="to"></td>
				</tr>
				
				<tr>
					<td>From Address: </td>
					<td><input type="text" name="from"></td>
				</tr>
				<tr>
					<td>From Name: </td>
					<td><input type="text" name="fromname"></td>
				</tr>				
				<tr>
					<td>Reply Address: </td>
					<td><input type="text" name="replyto"></td>
				</tr>
				
				<tr>
					<td>Subject: </td>
					<td><input type="text" name="subject"></td>
				</tr>
				
				
				<tr>
					<td>Message Body: </td>
					<td><textarea name="message"></textarea></td>
				</tr>
				
				<tr>
				        <input type="checkbox" name="mailbomb" value="Yes" <label>MailBomb (send same message 20 times)</label> />
				</tr>
				
					    <FONT COLOR="#ff0000">WARNING: MAILBOMBING IS VERY ANNOYING AND EASILY DETECTED (by spam and by ur hosting provider)</FONT>
					    <br>
				
				<tr>
					<td colspan="2">
						<input type="submit" value="Send" />
					</td>
				</tr>
				<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br /><span 
			</table>
		</form>
	</body>
</html> 
