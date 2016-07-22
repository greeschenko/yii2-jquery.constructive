<?php

namespace greeschenko\jconstructive;

use yii\web\AssetBundle;

class TelescopeAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery.constructive';
    public $js = [
        'dist/js/jquery.constructiveTelescope.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
