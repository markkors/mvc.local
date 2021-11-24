<?php

spl_autoload_register(function ($class_name) {
    //class directories

    $source = $_SERVER['DOCUMENT_ROOT'];
    $subfolder = "/mvc.local"; // format: /foldername
    $dirs = [
        $source. $subfolder . '/controllers/',
        $source. $subfolder . '/models/'
    ];

    foreach($dirs as $directory)
    {

        //echo "<br>" . $directory ;

        //see if the file exsists
        if(file_exists($directory.$class_name . '.php'))
        {
            //echo $directory.$class_name . '.php<br>';
            require($directory.$class_name . '.php');
        }
    }
});