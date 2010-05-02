<?
include("top.tmpl");
?>

<table border="0" cellpadding="0" cellspacing="0" width="940">
 <tr><td align="left" valign="top" bgcolor="" >
 <form method="post" action="/~gopinatr/cgi/sendmail.php">
  <span class="textstyle">Message:</span><P/>
  <textarea name="message" rows="15" cols="40"></textarea><p/>
  <span class="textstyle">From: (Your Email) </span><input name="email" type="text" /> <input type="submit" value="send" /><br/>
 </form>
 </td></tr>
</table>

<?
include("bottom.tmpl");
?>

