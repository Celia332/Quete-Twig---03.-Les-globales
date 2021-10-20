<?php
require_once __DIR__ . '/../config/twig.php';

$contactEmail = 'celia@gmail.com';

echo $twig->render('details.html.twig',['contactEmail'=>$contactEmail]);