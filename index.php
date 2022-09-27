<?php
header("Content-Type: audio/mpegurl;");
if(isset($_GET['type']) && $_GET['type'] == 'epg'){
  echo file_get_contents('http://onetv.click/schedule/epg.xml');
}
else{
  echo file_get_contents('i.m3u');
}
