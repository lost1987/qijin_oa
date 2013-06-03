<?php
define('REQUEST_TIME', (int) $_SERVER['REQUEST_TIME']);
define('JS_DEFAULT',0);
define('JS_LIBRARY',-100);
define('CSS_DEFAULT',0);
define('CSS_LIBRARY',-100);
/**
 * 将变量进行统一管理，全部存储在$data中,比如,修改,删除,增加
 * 静态变量只会运行一次
 * @param $name
 * @param null $default_value
 * @param bool $reset
 * @return array
 */
function &common_static($name,$default_value = NULL,$reset = FALSE){
    static $data = array(), $default = array();
    if(isset($data[$name]) || array_key_exists($name,$data)){
        if($reset){
            $data[$name] = $default[$name];
        }
        return $data[$name];
    }

    if(isset($name)){
        if($reset){
            return $data;
        }

        $default[$name] = $data[$name] = $default_value;
        return $data[$name];
    }

    foreach($default as $name => $value){
        $data[$name] = $value;
    }

    return $data;
}

/**
 * 设置js默认属性
 * @param null $data
 * @return array
 */
function js_defaults($data = NULL){
    return array(
        'type' => 'file',
        'group' => JS_DEFAULT,
        'every_page' => FALSE,
        'weight' => 0,
        'scope' => 'header',
        'cache' => TRUE,
        'defer' => FALSE,
        'preprocess' => TRUE,
        'version' => NULL,
        'data' => $data,
    );
}

/**
 * 添加javascript
 * @param null $data
 * @param null $options
 * @return array
 */
function add_js($data = NULL,$options = NULL){
    $javascript = &common_static(__FUNCTION__,array());
    if(isset($options)){
        if(!is_array($options)){
            $options = array('type'=>$options);
        }
    }else{
        $options = array();
    }
    $options += js_defaults($data);

    $options['preprocess'] = $options['cache'] ? $options['preprocess'] : FALSE;
    $options['weight'] += count($javascript) / 1000;

    if(isset($data)){
        if(empty($javascript)){
            $javascript = array(
                'settings' => array(
                    'data' => array(
                        array('basePath' =>base_url()),
                        array('datetime' => time()),
                    ),
                    'type' => 'setting',
                    'scope' => 'header',
                    'group' => JS_LIBRARY,
                    'every_page' => TRUE,
                    'weight' => 0,
                ),
                'inc/js/jQuery.js' => array(
                    'data' => 'inc/js/jQuery.js',
                    'type' => 'file',
                    'scope' => 'header',
                    'group' => JS_LIBRARY,
                    'every_page' => TRUE,
                    'weight' => -1,
                ),
                'inc/js/common.js' => array(
                    'data' => 'inc/js/common.js',
                    'type' => 'file',
                    'scope' => 'header',
                    'group' => JS_LIBRARY,
                    'every_page' => TRUE,
                    'weight' => 1,
                ),
            );
        }

        switch($options['type']){
            case 'setting':
                $javascript['setting']['data'][] = $data;
                break;
            case 'inline':
                $javascript[] = $options;
                break;
            default:
                $javascript[$options['data']] = $options;
                break;
        }
    }

    return $javascript;
}

/**
 * 获取javascript
 * @param string $scope
 * @param null $javascript
 * @return string
 */
function get_js($scope = 'header',$javascript = NULL){
    if(!isset($javascript)){
        $javascript = add_js();
    }
    if(empty($javascript)){
        return '';
    }
    $items = array();
    foreach($javascript as $key => $item){
        if($item['scope'] == $scope){
            $items[$key] = $item;
        }
    }
    $output = '';
//    $js_version_string = "v=";
    uasort($items,'sort_css_js');
    $embed_prefix = "\n<!--//--><![CDATA[//><!--\n";
    $embed_suffix = "\n//--><!]]>\n";

    $element = array(
        '#tag' => 'script',
        '#value' => '',
        '#attributes' => array(
            'type' => 'text/javascript'
        ),
    );

//    $index = 1;
    foreach($items as $item){
//        $strQuery = empty($item['version']) ? "" : $js_version_string.$item['version'];
        switch($item['type']){
            case 'setting' :
                $js_element = $element;
                $js_element['#value_prefix'] = $embed_prefix;
                $js_element['#value'] = 'var DefaultSetting = {};';
                $js_element['#value'] .= 'jQuery.extend(DefaultSetting,'.json_encode(common_array_merge_deep_array($item['data'])).');';
                $js_element['#value_suffix'] = $embed_suffix;
                $output .= theme('html_tag',array('element'=>$js_element));
                break;
            case 'inline' :
                $js_element = $element;
                if($item['defer']){
                    $js_element['#attributes']['defer'] = 'defer';
                }
                $js_element['#value_prefix'] = $embed_prefix;
                $js_element['#value'] = $item['data'];
                $js_element['#value_suffix'] = $embed_suffix;
                $output .= theme('html_tag', array('element' => $js_element));
                break;
            case 'file' :
                $js_element = $element;
                if(isset($item['defer']) && $item['defer']){
                    $js_element['#attributes']['defer'] = 'defer';
                }
                $js_element['#attributes']['src'] = common_url($item['data']);
                $output .= theme('html_tag', array('element' => $js_element));
                break;
        }
    }
    return $output;
}

/**
 * 添加CSS
 * @param null $data
 * @param null $options
 * @return array
 */
function add_css($data = NULL,$options = NULL){
    $css = &common_static(__FUNCTION__,array());
    if(isset($options)){
        if(!is_array($options)){
            $options = array('type'=>$options);
        }
    }else{
        $options = array();
    }

    if (isset($data)) {

        $options += array(
            'type' => 'file',
            'group' => CSS_DEFAULT,
            'weight' => 0,
            'every_page' => FALSE,
            'media' => 'all',
            'preprocess' => TRUE,
            'data' => $data,
            'browsers' => array(),
        );

        $options['browsers'] += array(
            'IE' => TRUE,
            '!IE' => TRUE,
        );

        if ($options['type'] === 'file' && $options['preprocess'] && strpos($options['data'], '?') !== FALSE) {
            $options['preprocess'] = FALSE;
        }

        $options['weight'] += count($css) / 1000;

        switch ($options['type']) {
            case 'inline':
                $css[] = $options;
                break;
            default:
                $css[$data] = $options;
                break;
        }
    }
    return $css;
}

/**
 * 获取CSS
 * @param null $css
 * @return string
 */
function get_css($css = NULL){
    if (!isset($css)) {
        $css = add_css();
    }
    uasort($css,'sort_css_js');
    $items = array();
    foreach($css as $key => $item){
        $items[$key] = $item;
    }
    $output = '';
    if(!empty($items)){
        $element = array(
            '#tag' => 'link',
            '#attributes' => array(
                'media' => 'all',
                'rel' => 'stylesheet',
                'type' => 'text/css',
            ),
        );
        $element_inline = array(
            '#tag' => 'style',
            '#attributes' => array(
                'type' => 'text/css'
            ),
        );

        foreach($items as $item){

            switch($item['type']){
                case 'inline' :
                    $css_element = $element_inline;
                    $css_element['#value'] = $item['data'];
                    $output .= theme('html_tag',array('element'=>$css_element));
                    break;
                case 'file' :
                    $css_element = $element;
                    if(isset($item['media'])){
                        $css_element['#attributes']['media'] = $item['media'];
                    }
                    if(isset($item['rel'])){
                        $css_element['#attributes']['media'] = $item['rel'];
                    }
                    $css_element['#attributes']['href'] = common_url($item['data']);
                    $output .= theme('html_tag',array('element'=>$css_element));
                    break;
            }
        }
    }
    return $output;
}

function load_library($array = array()){
    $CI = &get_instance();
    $CI->config->load('css_javascript',TRUE);
    $css_javascript = $CI->config->item('css_javascript');
    $librarys = $css_javascript['library'];
    if(isset($array) && !empty($array) && is_array($array)){
        foreach($array as $library){
            if(isset($librarys[$library])){
                $load_data = $librarys[$library];
                if(isset($load_data['css'])){
                    foreach($load_data['css'] as $css => $option){
                        add_css($css,$option);
                    }
                }
                if(isset($load_data['javascript'])){
                    foreach($load_data['javascript'] as $javascript => $option){
                        add_js($javascript,$option);
                    }
                }
            }
        }
    }
}

/**
 * css 和 javascript 排序
 * @param $a
 * @param $b
 * @return int
 */
function sort_css_js($a, $b) {

    if ($a['group'] < $b['group']) {
        return -1;
    }elseif ($a['group'] > $b['group']) {
        return 1;
    }elseif ($a['every_page'] && !$b['every_page']) {
        return -1;
    }elseif (!$a['every_page'] && $b['every_page']) {
        return 1;
    }elseif ($a['weight'] < $b['weight']) {
        return -1;
    }elseif ($a['weight'] > $b['weight']) {
        return 1;
    }else {
        return 0;
    }
}

/**
 * 合并数组
 * @param $arrays
 * @return array
 */
function common_array_merge_deep_array($arrays) {
    $result = array();
    foreach ($arrays as $array) {
        foreach ($array as $key => $value) {

            if (is_integer($key)) {
                $result[] = $value;
            }

            elseif (isset($result[$key]) && is_array($result[$key]) && is_array($value)) {
                $result[$key] = common_array_merge_deep_array(array($result[$key], $value));
            }

            else {
                $result[$key] = $value;
            }
        }
    }
    return $result;
}

/**
 * 生成标签属性
 * @param array $attributes
 * @return string
 */
function common_attributes(array $attributes = array()){
    foreach ($attributes as $attribute => &$data) {
        $data = implode(' ', (array) $data);
        $data = $attribute . '="' . check_plain($data) . '"';
    }
    return $attributes ? ' ' . implode(' ', $attributes) : '';
}

/**
 * 转义字符串中特殊字符
 * @param $text
 * @return string
 */
function check_plain($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function css_js_render(){
    $return = array(
        'header_javascript' => '',
        'header_css' => '',
        'footer_javascript' => '',
    );
    $header_javascript = get_js();
    $footer_javascript = get_js('footer');
    $css = get_css();
    $return['header_javascript'] = $header_javascript;
    $return['footer_javascript'] = $footer_javascript;
    $return['header_css'] = $css;
    return $return;
}

function load_meta($meta_array = array()){
    $CI = &get_instance();
    $site_meta = $CI->config->item('site_meta');
    if(empty($meta_array)){
        $tmp_meta = $site_meta;
    }else{
        $tmp_meta = array_merge($site_meta,$meta_array);
    }
    $meta = meta($tmp_meta);
    return $meta;
}

/**
 * 自定义路径
 * @param $uri
 * @return string
 */
function common_url($uri){
    return base_url($uri);
}

function page_title($page_title = ''){
    $CI = &get_instance();
    $site_title = $CI->config->item('site_title');
    return ($page_title ? $page_title.'-' : '').$site_title;
}

function return_ajax($data){
    echo json_encode($data);exit;
}