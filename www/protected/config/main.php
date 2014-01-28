<?php
    return array(
        "basePath" => dirname(__FILE__).DIRECTORY_SEPARATOR."..",
        "preload" => array("log"),
        "import" => array(
            "application.api.*"
        ),
        "theme" => "Original",
        "defaultController" => "home/main/index",
        "modules" => array(
            "home"
            // uncomment the following to enable the Gii tool
            /*
            "gii" => array(
            "class" => "system.gii.GiiModule",
            "password" => "Enter Your Password Here",
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            "ipFilters" => array("127.0.0.1","::1"),
            ),
            */
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
                    "<module:\w+>/main/<action:\w+>" => "<module>/<action>"
                ),
            ),
            "db" => array(
                "connectionString"  =>  "sqlite:".dirname(__FILE__)."/../data/testdrive.db",
            ),
            // uncomment the following to use a MySQL database
            /*
            "db" => array(
            "connectionString"  =>  "mysql:host=localhost;dbname=testdrive",
            "emulatePrepare"  =>  true,
            "username"  =>  "root",
            "password"  =>  "",
            "charset"  =>  "utf8",
            ),
            */
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