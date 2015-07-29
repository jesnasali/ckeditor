CKEditor Widget for Yii2
========================
CKEditor Widget for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist jesnasali/ckeditor "*"
```

or add

```
"jesnasali/ckeditor": "*"
```

to the require section of your `composer.json` file.


Usage
-----
The library comes with two widgets: `CKEditor` and `CKEditorInline`. One is for classic edition and the other for inline
editing respectively.

Using a model with a basic preset:

```

use jesnasali\ckeditor\CKEditor;


<?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>
```
Using inline edition with basic preset:

```

use jesnasali\ckeditor\CKEditorInline;

<?php CKEditorInline::begin(['preset' => 'basic']);?>
    This text can be edited now :)
<?php CKEditorInline::end();?>
