<?php

  require_once('./vendor/autoload.php');

  $loader = new \Twig\Loader\FilesystemLoader('./app/views/');
  $twig = new \Twig\Environment($loader);
  

  echo $twig->render('./layout.html.twig');