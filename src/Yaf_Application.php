<?php

/**
 * Created by PhpStorm.
 * User: zyl
 * Date: 2017/7/14
 * Time: 0:12
 */
final class Yaf_Application
{
    protected static $_app = null;
    protected $config = null;
    protected $dispatcher = null;
    protected $_modules = null;
    protected $_running = false;
    protected $_environ = "????";//todo env全局变量的值
    protected $_err_no = 0;
    protected $_err_msg = '';

    public function __construct($config, $environ=null)
    {
        if(YAF_DEBUG){
            echo "Yaf is running in debug mode\n";
        }

        if(self::$_app!=null){
            throw new Exception('Only one application can be initialized');
        }

        if(!$environ || !is_string($environ) || strlen($environ)==0){
            $environ = YAF_ENVIRON;
        }
        $zConfig = $this->yafConfigInstance($config, $environ);

    }

    public function run()
    {
        //todo
    }

    public function execute()
    {
        //todo

    }

    public static function app()
    {
        return self::$_app;
    }

    public function environ()
    {
        return $this->_environ;
    }

    public function bootstrap()
    {
        //todo

    }

    public function getConfig()
    {
        return $this->config;
    }

    public function getModules()
    {
        return $this->_modules;
    }

    public function getDispatcher()
    {
        return $this->dispatcher;
    }

    public function setAppDirectory()
    {
        //todo

    }

    public function getAppDirectory()
    {
        //todo

    }

    public function getLastErrorNo()
    {
        return $this->_err_no;
    }

    public function getLastErrorMsg()
    {
        return $this->_err_msg;
    }

    public function clearLastError()
    {
        $this->_err_no = 0;
        $this->_err_msg = '';
        return $this;//todo ?待确认
    }

    public function __destruct()
    {
        unset(self::$_app);//todo ?待确认unset是否等价于zend_update_static_property_null()
    }

    private function __clone(){}
    private function __sleep(){}
    private function __wakeup(){}

    private function yafConfigInstance($config, $section)
    {
        if(is_string($config)){
            if(strtolower(strrchr($config, 'ini'))=='ini'){
                if(YAF_CACHE_CONFIG){
                    //todo 尝试从缓存中获取
                }

                $instance = null;
                //todo ini config
                if(!$instance){
                    return null;
                }

                if(YAF_CACHE_CONFIG){
                    //todo 添加缓存
                }

                return $instance;
            }
            throw new Exception('Expects a path to *.ini configuration file as parameter');
        }elseif(is_array($config)){
            //todo config_simple
            $instance = null;
            return $instance;
        }else{
            throw new Exception('Expects a string or an array as parameter');
        }
    }
}