<?php
/**
 * @copyright Copyright &copy; Odai Alali 2014
 * @package yii2-toastr
 * @version 0.1-dev
 */
namespace odaialali\yii2toastr;

use yii\web\AssetBundle;
/**
 * Description of ToastrAsset
 *
 * @author Odai Alali <odai.alali@gmail.com>
 */
class ToastrAsset extends AssetBundle{
    public $sourcePath = '@npm/toastr/build';
    public $css = [
        'toastr.min.css',
    ];
    public $js = [
        'toastr.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
