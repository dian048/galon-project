<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "sb/vendor/fontawesome-free/css/all.min.css",
        "https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i",
        "sb/css/sb-admin-2.min.css",
    ];
    public $js = [
        "sb/vendor/jquery/jquery.min.js",
        "sb/vendor/bootstrap/js/bootstrap.bundle.min.js",
        "sb/vendor/jquery-easing/jquery.easing.min.js",
        "sb/js/sb-admin-2.min.js",
        "sb/vendor/chart.js/Chart.min.js",
        "sb/js/demo/chart-area-demo.js",
        "sb/js/demo/chart-pie-demo.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
