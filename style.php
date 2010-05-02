<?
$fz = $_REQUEST['fz'] ;
if (empty($fz)) {
  $fsize = $_COOKIE['fontsize'];
} else {
  if ($fz == 'large') {
     setcookie('fontsize', '16px',time()+60*60*24*30, "/~gopinatr/", "people.oregonstate.edu");
  } else {
     setcookie('fontsize', '11px',time()+60*60*24*30, "/~gopinatr/", "people.oregonstate.edu");
  }
}
?>
<?
include('top.tmpl');
?>
<table >
<tr><td class="left"><span class="textstyle">Style:</span></td><td class="left"></td><tr/>
<tr><td class="left"></td><td class="left"><a class='normallink' href='/~gopinatr/style.php?fz=large'>Large</a> </td>
<tr><td class="left"></td><td class="left"><a class='normallink' href='/~gopinatr/style.php?fz=small'>Normal</a></td>
</tr>
</table>
<?
include('bottom.tmpl');
?>
