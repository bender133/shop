<?php


namespace app\widgets;


class MenuWidget extends \yii\base\Widget
{
    public $tpl;
    public $data;
//    public $tpl;
//    public $tpl;

    public function init()
    {
        parent::init();
        if($this->tpl === null) {
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';
    }

    public function run()
    {
        return $this->tpl;
    }
}