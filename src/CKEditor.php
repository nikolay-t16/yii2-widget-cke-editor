<?php

namespace nikolayt16\editor;



use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\JsExpression;
use yii\web\View;
use yii\helpers\Json;
use yii\widgets\InputWidget;

class CKEditor extends InputWidget {
	public $editor = [];

	public function run() {
		Assets::register($this->getView());
		echo Html::beginTag('div');
		echo Html::textarea($this->name, $this->value, $this->options);
		echo Html::endTag('div');


		$JavaScript = "CKEDITOR.replace(";
		$JavaScript .= Json::encode($this->options['id']);
		$JavaScript .= empty($this->editor) ? '' : ', ' . Json::encode($this->editor);
		$JavaScript .= ");";

		$this->getView()->registerJs($JavaScript, View::POS_END);

	}

}
