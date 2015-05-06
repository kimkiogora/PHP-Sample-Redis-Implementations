<?php
require 'RedisLib.php';

$memcache = new MemcacheLib(30);

//Set cache first
//$red = $memcache->saveToCache('stuff', 
//        json_encode(array('username'=>'xxx@yyy.com',
//    'password'=>'!23qweASD'))
//       );
//print_r($red);

//echo $memcache->retrieveFromCache("stuff");
//echo "\n";
//echo $memcache->retrieveFromCache("key");


$res = $memcache->retrieveFromCache("stuff");
if($res == FALSE ) {
    echo "Memcache Results: $res";
} else {
    print_r($res);
}
