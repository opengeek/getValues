<?php
/**
 * Default properties for getValues snippet
 *
 * @package getvalues
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'delimiter',
        'desc' => 'A delimiter used to concatenate the field value from each instance in the collection. Defaults to a comma.',
        'type' => 'textfield',
        'options' => '',
        'value' => ',',
    ),
    array(
        'name' => 'inputDelimiter',
        'desc' => 'A delimiter used to explode a list of default values provided to the snippet. Defaults to a comma.',
        'type' => 'textfield',
        'options' => '',
        'value' => ',',
    ),
    array(
        'name' => 'default',
        'desc' => 'A default value to use if no value is retrieved by the query. This can be a list of values delimited by the specified input delimiter.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'class',
        'desc' => 'The xPDOObject class to query the value from.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'where',
        'desc' => 'Query where conditions expressed as a JSON object.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'field',
        'desc' => 'The field to get from each object in the collection.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'sortby',
        'desc' => 'An optional field to sort by.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'sortbyEscaped',
        'desc' => 'Determines if the field name specified in sortby should be escaped. Defaults to 1.',
        'type' => 'list',
        'options' => array(
            array('text' => 'Yes','value' => '1'),
            array('text' => 'No','value' => '0'),
        ),
        'value' => '0',
    ),
    array(
        'name' => 'sortdir',
        'desc' => 'Order which to sort by. Defaults to DESC.',
        'type' => 'list',
        'options' => array(
            array('text' => 'ASC','value' => 'ASC'),
            array('text' => 'DESC','value' => 'DESC'),
        ),
        'value' => 'DESC',
    ),
    array(
        'name' => 'debug',
        'desc' => 'If true, will send the SQL query to the MODx log for inspection. Defaults to false.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
    ),
);

return $properties;