<?php
return array(
    "basePath" => dirname(__FILE__).DIRECTORY_SEPARATOR."..",
    "preload" => array("log"),
    "import" => array(
        "application.api.*"
    ),
    "theme" => "default",
    "defaultController" => "frontend/home/index",
    "modules" => array(
        "backend",
        "frontend"
    ),

    // application components
    "components" => array(
        "user" => array(
            // enable cookie-based authentication
            "allowAutoLogin" => true,
        ),
        // uncomment the following to enable URLs in path-format
        "urlManager" => array(
            "showScriptName" => false,
            "urlFormat" => "path",
            "rules" => array(
                "<url:\w+>.html" => "frontend/staticpage/index",
                //"frontend/<controller:\w+>/<action:\w+>" => "<controller>/<action>"
            ),
        ),
        "db" => array(
            "connectionString" => "mysql:host=localhost;dbname=jcms",
            "emulatePrepare" => true,
            "username" => "root",
            "password" => "36643545",
            "charset" => "utf8",
            "tablePrefix" => "jcms_"
        ),
        "errorHandler" => array(
            //"errorAction" => "site/error",
        ),
        "log" => array(
            "class" => "CLogRouter",
            "routes" => array(
                array(
                    "class" => "CFileLogRoute",
                    "levels" => "error, warning",
                ),
                // uncomment the following to show log messages on web pages
                /*
                array(
                "class" => "CWebLogRoute",
                ),
                */
            ),
        ),
    ),
    "params" => array(
    ),
);