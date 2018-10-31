<?php
namespace walkboy\FilterForm;

use yii\widgets\ActiveForm;
use common\widgets\FilterForm\FilterFormAsset;


class FilterForm extends ActiveForm
{
	public function run()
    {
    	$view = $this->getView();
    	FilterFormAsset::register($view);

  		parent::run();
    }
}