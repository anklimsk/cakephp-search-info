<?php
/**
 * This file configures search info
 *
 * To modify these parameters, copy this file into your own CakePHP APP/Config directory.
 * CakeSearchInfo: Search information in project database
 * @copyright Copyright 2016, Andrey Klimov.
 * @package plugin.Config
 */

$config['CakeSearchInfo'] = [
    'QuerySearchMinLength' => 0,
    'AutocompleteLimit' => 10,
    'TargetDeep' => 0,
    'DefaultSearchAnyPart' => true,
    'TargetModels' => [
/*
        'ModelName' => array(
            'fields' => array(
                'ModelName.FieldName' => __('Field name'),
                'ModelName.FieldName2' => __('Field name 2'),
            ),
            'order' => array('ModelName.FieldName' => 'direction'),
            'name' => __('Scope name'),
            'recursive' => 0, // not necessary - default: -1
            'contain' => null, // not necessary - default: null
            'conditions' => array('ModelName.FieldName' => 'SomeValue'), // not necessary - used as global conditions
            'url' => array(
                'controller' => 'modelnames',
                'action' => 'view',
                'plugin' => 'pluginname',
            ),  // not necessary - used in link to result
            'id' => 'ModelName.id', // not necessary - used in link to result
        ),
*/
    ],
    'IncludeFields' => [
/*
        'ModelName' => array(
            'ModelName.FieldName',
            'ModelName.FieldName2',
        )
*/
    ],
];
