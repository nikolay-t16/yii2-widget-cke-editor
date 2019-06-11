## Использование

<?= CKEditor::widget(['name' => 'text','editor'=>['height'=>'1000px']])?>

<?= $form->field($model, 'content')->widget(CKEditor::className(),['editor' => ['height' => '1000px']]);
