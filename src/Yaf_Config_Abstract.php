<?php
abstract class Yaf_Config_Abstract
{
    protected $_config = null;
    protected $_readonly = true;

    abstract public function get();
    abstract public function set();
    abstract public function readonly();
    abstract public function toArray();
}