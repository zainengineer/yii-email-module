<?php
/**
 * Global Test Config
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @author Zain Ul abidin <zainengineer@gmail.com>
 * @copyright 2013 Mr PHP
 * @link https://github.com/cornernote/yii-email-module
 * @license BSD-3-Clause https://raw.github.com/cornernote/yii-email-module/master/LICENSE
 *
 * @package yii-email-module
 */

return array(
    'basePath' => BASE_PATH,
    'runtimePath' => realpath(BASE_PATH . '/_runtime'),
    'import' => array(
        'email.components.*',
        'email.models.*',
    ),
    'aliases' => array(
        'email' => realpath(BASE_PATH . '/../email'),
        'swiftMailer' => realpath(BASE_PATH . '/../vendor/swiftmailer/swiftmailer/lib'),
    ),
    'components' => array(
        'assetManager' => array(
            'basePath' => realpath(BASE_PATH . '/_public/assets'),
        ),
        'db' => array(
            'connectionString' => 'sqlite:' . realpath(BASE_PATH . '/_runtime') . '/test.db',
        ),
        'emailManager' => array(
            'class' => 'email.components.EmailManager',
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
        ),
    ),
    'modules' => array(
        'email' => array(
            'class' => 'email.EmailModule',
            'connectionID' => 'db',
            'controllerFilters' => array(),
        ),
    ),
);