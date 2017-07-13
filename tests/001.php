<?php
require '../src/autoload.php';

Yaf_Registry::set('aaa', 111);
Yaf_Registry::set('bbb', (object)[]);

var_dump(Yaf_Registry::get('aaa'));
var_dump(Yaf_Registry::has('aaa'));
var_dump(Yaf_Registry::del('aaa'));
var_dump(Yaf_Registry::has('aaa'));
var_dump(Yaf_Registry::get('aaa'));
var_dump(Yaf_Registry::get('bbb'));