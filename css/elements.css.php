div#content {
  width: auto;
  float: left;
}

div#text {
  width: auto;
  margin: 20px 0 0 0;
}

div#page {
  width: auto;
  height: 400px;
}

div#menu {
  width: 900px;
  height: 15px;
  text-align: left;
  margin: 3px 0 2px 0;
}

table#body { /*Page including the top images*/
  width:1000px;
  padding:0px;
  border-spacing:0px
}

table#frame { /*Page excluding the top images*/
  padding:0px;
  border:0px;
  margin:0px;
}

table#bottom { /*bottom*/
  width:960px;
  padding:0px;
  border:0px;
}

div#banner_left {
  width:100px;
  height:100px;
  background:url( <? echo $banner_left ?> ) no-repeat;
}

div#banner_right {
  width:100px;
  height:100px;
  background:url( <? echo $banner_right ?> ) no-repeat;
}
