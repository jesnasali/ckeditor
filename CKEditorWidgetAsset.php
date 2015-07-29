<?php
/**
 * @copyright Copyright (c) 2015 Muhammad Ali <jesnasali@gmail.com>
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace jesnasali\ckeditor;

use yii\web\AssetBundle;

/**
 * CKEditorInline renders a CKEditor js plugin for inline editing.
 *
 * @author Muhammad Ali <jesnasali@gmail.com>
 * @package jesnasali\ckeditor
 */
class CKEditorWidgetAsset extends AssetBundle
{
    public $depends = [
        'jesnasali\ckeditor\CKEditorAsset'
    ];
    public $js = [
        'jesnasali-ckeditor.widget.js'
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }
}
