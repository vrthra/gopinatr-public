<?
include('top.tmpl');
?>
<?
$link = $_REQUEST['link'] ;
$name = $_REQUEST['name'] ;
$add = $_REQUEST['add'] ;

if (isset($link) && isset($name) ) {
    $fn = "links.txt";
    $fh = fopen($fn, 'a') or die("Cant open file.");
    fwrite($fh, $link."\t".$name."\n");
    fclose($fh);
}
if (isset($add)) {
?>
<form method="post" action="/~gopinatr/links.php">
<span class="textstyle">Link: </span><input name="link" type="text" />
<span class="textstyle">Keys: </span><input name="name" type="text" /> <input type="submit" value="add" />
</form>
<?
} else {
  $fn = "links.txt";
  $fh = fopen($fn, 'r') or die("Cant open file.");
  $links = fread($fh, filesize($fn));
  fclose($fh);
  $split = explode("\n",$links);
?>
<table border="0" cellpadding="0" cellspacing="0" width="940">
<tr><td align="left" valign="top" bgcolor="">
<?
  foreach($split as $line) {
    $words = explode("\t",$line);
    echo "<a class='normallink' href='".$words[0]."'>".$words[1]."</a>";
    echo "<br/>";
  }
?>
<a class='normallink' href='http://people.oregonstate.edu/~gopinatr/links.php?add=true'>+</a> 
</td>
</tr>
</table>
<?
}
?>
<?
include('bottom.tmpl');
?>
