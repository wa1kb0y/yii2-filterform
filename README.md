# Installation
Add `"walkboy/yii2-filterform": "dev-master"` to composer.json and run `composer update`

# Usage

`_filters.php`

```
use walkboy\FilterForm\FilterForm;

<?php
$form = FilterForm::begin([
	'method' => 'get',
	'options' => [
		'class' => 'filter-form',
		'data-pjax' => 1,
	]
]);

echo $form->field($searchModel, 'type')->dropDownList([
    '1' => 'Foo',
    '2' => 'Bar',
])->label('Type');

// insert fields here

FilterForm::end();
?>
```


index.php
```
<?php Pjax::begin(); ?>

<?= $this->render('_search', ['model' => $searchModel]); ?>

<?= GridView::widget() ?>

<?php Pjax::end(); ?>
```