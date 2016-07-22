<?php

namespace greeschenko\jconstructive;

use yii\web\AssetBundle;

class ParallaxAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery.constructive';
    public $css = [
        'dist/css/parallax.min.css'
    ];
    public $js = [
        'dist/js/jquery.constructiveParallax.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
