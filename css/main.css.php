<?
header('Content-type: text/css'); 
$fsize = $_REQUEST['fontsize'] ;
if (empty($fsize)) {
  $fsize = '11px';
}
function fsize() {
  global $fsize;
  echo $fsize;
}

include('colors.php');

?>
/*color: #666666; dark gray*/
/*color: #999999; light gray*/
/*color: #FFD700; light gold*/
/*color: #DAA520; dark gold*/
/*color: #F0F8FF; very lightblue*/
/*color: #DC143C; menu*/

/*=========================================================*/

a { outline: none; }
.pagestyle { font-family: Arial,Helvetica,sans-serif; font-size: <? fsize() ?>;}
.smalltext { font-family: Arial,Helvetica,sans-serif; font-size: <? fsize() ?>;}
.footstyle { font-family: Arial,Helvetica,sans-serif; font-size: <? fsize() ?>;}
.textstyle { font-family: Arial,Helvetica,sans-serif; font-size: <? fsize() ?>;}

/*=========================================================*/
.menustyle { /*Separators*/
    font-family: Arial,Helvetica,sans-serif;
    font-size: <? fsize() ?>;
    text-decoration: none;
    color:<? echo $menu_color; ?>;
    background:<? echo $menu_bgcolor; ?>;
}

a.menustyle:link {
  color: <? echo $a_menu; ?>;
}
a.menustyle:visited {
  color: <? echo $a_menu; ?>;
}
a.menustyle:hover {
  color: <? echo $a_menu_hover; ?>;
}
a.menustyle:active {
  color: <? echo $a_menu_hover; ?>;
}

/*=========================================================*/
.normallink {
    font-family: Arial,Helvetica,sans-serif;
    font-size: <? fsize() ?>;
    text-decoration: none;
}

a.normallink:link {
  color: <? echo $a_normal; ?>;
}
a.normallink:visited {
  color: <? echo $a_normal; ?>;
}
a.normallink:hover {
  color: <? echo $a_normal_hover; ?>;
}
a.normallink:active {
  color: <? echo $a_normal_hover; ?>;
}
/*=========================================================*/

div.rule {
  margin: 0;
  border: 0;
  background-color: <? echo $rule; ?>;
  overflow: hidden;
  height:1px;
  width:auto;
}

table.center {
  margin-left:auto;
  margin-right:auto;
}

body {
  text-align:center;
  margin: 10px 0 10px 0;
  background: <? echo $body_background; ?>;
  color: <? echo $body_color; ?>;
}

table.mid_mid {
  margin-left:auto;
  margin-right:auto;
  vertical-align:middle;
}

table.skeleton {
  border:0px;
  padding:0px;
  margin:0px;
  width:100%;
}

td.top {
  vertical-align:top;
}

td.left {
  text-align:left;
}

td.right {
  text-align:right;
}

img.spacer {
  width=1px;
  height=1px;
}

b {
  border:1px;
}
