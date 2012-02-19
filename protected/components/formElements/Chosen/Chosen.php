<?php
class Chosen extends InputWidget
{
    public $elements = array();
    public $name;
    public $current;
    public $htmlOptions;
    public $onchange = 'js:function() {}';
    public $empty = '';

    public function init()
    {
        parent::init();
        $options = CJavaScript::encode(array(
            'no_results_text'      => "Выберите один из вариантов",
            'allow_single_deselect'=> true,
            'onChange' => $this->onchange
        ));

        $assets = Yii::app()->assetManager->publish(Yii::getPathOfAlias('application.components.formElements.Chosen.assets'));
        Yii::app()->clientScript->registerScriptFile($assets . '/chosen.jquery.js')->registerCssFile(
            $assets . '/chosen.css')->registerScript(
            $this->id . '_chosen', "$('#{$this->id}').chosen($options);");
    }


    public function run()
    {
        if (!isset($this->htmlOptions['id']))
        {
            $this->htmlOptions['id'] = $this->id;
        }
        if (!isset($this->htmlOptions['empty']))
        {
            $this->htmlOptions['empty'] = $this->empty;
        }

        echo CHtml::dropDownList($this->name, $this->current, $this->elements, $this->htmlOptions);
    }
}
