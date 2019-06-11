<?php

namespace nikolayt16\editor;

use yii\web\AssetBundle;

class Assets extends AssetBundle{
	public $sourcePath = '@nikolayt16/editor/ckeditor';

	public $js = [
		'ckeditor.js',
		'js.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
	];
}
