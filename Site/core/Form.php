<?php
class Form{

    public $controller;
    public $errors;

    public function __construct($controller){
        $this->controller = $controller;
    }

    public function input($name, $label, $options = array()){
        $error = false;
        $classError = '';
        if(isset($this->errors[$name])){
            $error = $this->errors[$name];
            $classError = ' error';
        }
        if(!isset($this->controller->request->data->$name)){
            $value = '';
        }else{
            $value = $this->controller->requset->data->$name;
        }
        if($label == 'hidden'){
            return '<input type="hidden" name="'.$name.'"value="'.$value.'">';
        }
    $html = '<div class="clearfix'.$classError.'">
                <label for="input'.$name.'">'.$label.'</label>
                <div class="input">';
    $attr = ' ';
    foreach($options as $k=>$v){ if($k!='type'){
        $attr .= " $k\"$v\"";
    }}
    if(!isset($options['type'])){
        $html .= '<input type="text" id="input'.$name.'" name="'.$name.'" value="'.$this->controller->request->data->$name.'">';
    }elseif($options['type'] == 'textarea'){
        $html .= '<textarea id="input'.$name.'" name="'.$name.'">'.$this->controller->request->data->$name.'</textarea>';
    }elseif($options['type'] == 'checkbox'){
        $html .= '<input type="hidden" name="'.$name.'"value="0"><input type="checkbox"
            name="'.$name.'"value"1" '.(empty($value)?'':'checked').'>';
    }
    if($error){
        $html .= '<span class="help-inline">'.$error.'</span>';
    }
    $html .= '</div></div>';
    return $html;
    }
}