<?php

function theme($hook = NULL,$variables = array()){
    $output = '';
    if(isset($hook)){
        $function = __FUNCTION__.'_'.$hook;
        if(function_exists($function)){
            $output = $function($variables);
        }
    }
    return $output;
}

function theme_html_tag($varables = array()){
    $element = $varables['element'];
    $attributes = isset($element['#attributes']) ? common_attributes($element['#attributes']) : '';
    if(!isset($element['#value'])){
        return '<' . $element['#tag'] . $attributes . "> \n";
    }else{
        $output = '<' . $element['#tag'] . $attributes .'>';
        if(isset($element['#value_prefix'])){
            $output .= $element['#value_prefix'];
        }
        $output .= $element['#value'];
        if(isset($element['#value_suffix'])){
            $output .= $element['#value_suffix'];
        }
        $output .= '</' . $element['#tag'] . "> \n";
        return $output;
    }
}

function theme_select_tag($varables = array()){
    $select_data = $varables['#data'];
    $selected = isset($varables['#selected']) ? $varables['#selected'] : '';
    $attributes = isset($varables['#attributes']) ? common_attributes($varables['#attributes']) : '';
    $output = '<select '.$attributes.' >';
    $output .= '<option value="">请选择</option>';
    if(!empty($select_data)){
        foreach($select_data as $key => $value){
            if($selected == $key){
                $output .= '<option selected="selected" value="'.$key.'" >'.$value.'</option>';
            }else{
                $output .= '<option value="'.$key.'" >'.$value.'</option>';
            }
        }
    }
    $output .= '</select>';

    return $output;
}