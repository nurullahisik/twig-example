<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/twig-example/vendor/autoload.php';  // autoload dosyası yuklendi
$loader = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT'].'/twig-example/app/views'); // view dosyasını oldugu klasoru belirttik
$twig = new Twig_Environment($loader);

echo $twig->render('index_view.html', array("mesaj" => "Merhaba Dünya")); 