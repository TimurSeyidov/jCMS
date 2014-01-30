<?php
    $frameworkDirectory = dirname(__FILE__)."/../framework/yii.php";
    $configurationApplicationFile = dirname(__FILE__)."/protected/config/main.php";
    $extendFunctionFile = dirname(__FILE__)."/protected/extend/Functions.php";
    defined("YII_DEBUG") or define("YII_DEBUG", true);
    defined("YII_TRACE_LEVEL") or define("YII_TRACE_LEVEL",3);
    require_once($frameworkDirectory);
    $Application = Yii::createWebApplication($configurationApplicationFile);
    require_once($extendFunctionFile);
    $Application->run();
