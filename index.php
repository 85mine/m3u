<?php
header("Content-Type: audio/mpegurl;");
if(isset($_GET['type']) && $_GET['type'] == 'epg'){
  echo file_get_contents('http://lichphatsong.xyz/schedule/beartv_epg.xml');
}
else{
  echo file_get_contents('http://gg.gg/bearlivetv');
}
