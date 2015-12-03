<?php
/**
 * @package   yii2-materialize
 * @author    Karthik S G<merlano17@gmail.com>
 * @copyright Copyright &copy; Karthik S G
 * @version   0.1
 */

namespace merlano\materialize;

use yii\web\AssetBundle;

class MaterializeAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/materialize/';
    public $css = ['dist/css/materialize.css'
    ];

    public $js = [
        'dist/js/materialize.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}