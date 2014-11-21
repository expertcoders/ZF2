<?php
/**
 * Configuration file generated by ZFTool
 * The previous configuration file is stored in application.config.old
 *
 * @see https://github.com/zendframework/ZFTool
 */
ini_set('display_errors',1);
return array(
    'modules' => array(
        'Application',
        'Album',
        'ZFTool',
        'User',
        'Post'
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor'
        ),
        'config_glob_paths' => array(
            './config/autoload/{,*.}{global,local}.php'
        )
    )
);
