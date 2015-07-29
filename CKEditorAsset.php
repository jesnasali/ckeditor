<?php
/**
 * @copyright Copyright (c) 2015 Muhammad Ali <jesnasali@gmail.com>
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace jesnasali\ckeditor;

use yii\web\AssetBundle;

/**
 * CKEditorAsset
 *
 * @author Muhammad Ali <jesnasali@gmail.com>
 * @package jesnasali\ckeditor
 */
class CKEditorAsset extends AssetBundle
{
    public $js = [
        'ckeditor.js',
        'adapters/jquery.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets/ckeditor';
        parent::init();
    }
}
