yii2 jquery constructive
========================
jquery full page effects set for yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist greeschenko/yii2-jquery.constructive "*"
```

or add

```
"greeschenko/yii2-jquery.constructive": "*"
```

to the require section of your `composer.json` file.


Usage
-----

jquery.constructiveParallax

include assets in your view file
```
use greeschenko\jconstructive\ParallaxAsset;
ParallaxAsset::register($this);
```
and see doc [jquery.constructiveParallax](https://github.com/greeschenko/jquery.constructive#jqueryconstructiveparallax)



jquery.constructiveTelescope

include assets in your view file
```
use greeschenko\jconstructive\TelescopeAsset;
TelescopeAsset::register($this);
```
and see doc [jquery.constructiveTelescope](https://github.com/greeschenko/jquery.constructive#jqueryconstructivetelescope)
