<?php
namespace walkboy\FilterForm;

use yii\widgets\ActiveForm;
use walkboy\FilterForm\FilterFormAsset;


class FilterForm extends ActiveForm
{
	public function run()
    {
    	$view = $this->getView();
    	$view->registerJs('
    		$(function() {
    		    $(".filter-form .form-control").change(function () {
    		        var form = $(this).closest("form");
    			    form.submit();
    		    });
    		});
    	');

  		return parent::run();
    }
}