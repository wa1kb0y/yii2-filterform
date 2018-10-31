<?php
namespace walkboy\FilterForm;

use yii\web\AssetBundle;

class FilterFormAsset extends AssetBundle
{
    public $sourcePath = __DIR__.'/assets';
    public $js = [
        'js/filterform.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}