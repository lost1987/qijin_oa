<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Twig模板解析类，用于替换CI默认的模板引擎
 * @auther  cary <289872225@qq.com>
 * @date    2013.01.31 16:54
 * @version Version 1.0
 * @copyright Copyright (c) 2013,cary
 * @link    http://sun190.com
 * @since		Version 1.0
 */
class Twig {
    private $CI;    //CI对象
    private $_twig; //twig模板引擎对象
    private $_template_dir; //模板存放路径
    private $_cache_dir;    //模板输出的缓存路径
    public $debug = FALSE;  //是否开启调试功能，默认开启

    /**
     * 初始化函数，定义一些必须执行的方法，变量
     */
    function __construct(){
        //获取CI对象
        $this->CI = &get_instance();
        //加载twig配置
        $this->CI->load->config('twig');
        //设置include_path路径
        ini_set('include_path',ini_get('include_path').PATH_SEPARATOR.FCPATH.DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.'Twig'.DIRECTORY_SEPARATOR);
//        echo ini_get('include_path').PATH_SEPARATOR.FCPATH.'..'.DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.'Twig'.DIRECTORY_SEPARATOR;exit;
        //引入模板文件
        include("Autoloader".EXT);
        log_message('debug',"Twig Autoloader Loaded");
        //Twig 模板注册
        Twig_Autoloader::register();
        //设置模板路径
        $this->_template_dir = $this->CI->config->item('template_dir');
        //设置缓存路径
        $this->_cache_dir = $this->CI->config->item('cache_dir');

        $loader = new Twig_Loader_Filesystem($this->_template_dir);
        $config = array(
            'debug' => $this->debug,    //是否开启debug
            'cache' => $this->_cache_dir    //设置缓存路径
        );

        //创建Twig对象
        $this->_twig = new Twig_Environment($loader,$config);
    }

    /**
     * 返回模板解析后内容，多用于ajax返回的页面内容
     * @param string $template  模板路径
     * @param array $data   数据
     * @return string   返回解析后的模板内容
     */
    function render($template,$data = array()){
        $templateObject = $this->_twig->loadTemplate($template);
        return $templateObject->render($data);
    }

    /**
     * 直接显示模板，没有返回值
     * @param string $template  模板路径
     * @param array $data   数据
     */
    function display($template,$data = array()){
        $templateObject = $this->_twig->loadTemplate($template);

        //页面执行时间
        $data['elapsed_time'] = $this->CI->benchmark->elapsed_time('total_execution_time_start', 'total_execution_time_end');
        $memory = (!function_exists('memory_get_usage')) ? '0' : round(memory_get_usage()/1024/1024, 2) . 'MB';
        //内存消耗量
        $data['memory_usage'] = $memory;
        $templateObject->display($data);
    }
}
