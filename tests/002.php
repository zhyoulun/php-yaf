<?php
require '../src/autoload.php';

$config = new Yaf_Config_Simple([
    'aa'=>111,
    'bb'=>[
        'xxx'=>222,
        'yyy'=>333,
    ],
]);

$r = $config->get('aa');
var_dump($r);

$r = $config->get()->get('aa');
var_dump($r);

$r = $config->get('bb');
var_dump($r);

$r = $config->get('bb')->get('xxx');
var_dump($r);

$r = $config->get('cc');
var_dump($r);