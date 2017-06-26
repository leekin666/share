<?php

$app->get('/', 'Bike\Controller\Index:index');
$app->get('/login.html', 'Bike\Controller\Index:login');
$app->get('/admin', 'Bike\Controller\Index:getAdmin');



