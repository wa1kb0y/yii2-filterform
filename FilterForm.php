<?php
namespace walkboy\FilterForm;

use yii\widgets\ActiveForm;
use walkboy\FilterForm\FilterFormAsset;


class FilterForm extends ActiveForm
{
	public function run()
    {
    	$view = $this->getView();
    	FilterFormAsset::register($view);

  		return parent::run();
    }
}