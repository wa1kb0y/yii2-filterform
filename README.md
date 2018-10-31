# Installation
Add `"walkboy/yii2-filterform": "dev-master"` to composer.json and run `composer update`

# Usage
```
use walkboy\FilterForm\FilterForm;

<?php
$form = FilterForm::begin(['options'=>['class'=>'filter-form']]);

echo $form->field($searchModel, 'type')->dropDownList([
    '1' => 'Foo',
    '2' => 'Bar',
])->label('Type');

// insert fields here

FilterForm::end();
?>
```
