<?php
/**
 * getValues
 *
 * Get a single field value from each xPDOObject derivative class instance in a Collection.
 *
 * The resulting values are returned as a string concatenated with a configurable delimiter.
 * Note that the xPDOObject derivative class must be in a package that is available to the modX instance.
 *
 * @author Jason Coward
 * @copyright Copyright 2010-2013, Jason Coward
 * @version 1.0.0-pl - April 17, 2013
 *
 * @var modX $modx
 * @var string $delimiter
 * @var string $class
 * @var string $where
 * @var string $field
 * @var string $sortby
 * @var string $sortdir
 * @var string|bool $sortbyEscaped
 */
$values = !empty($default) ? explode($delimiter, $default) : array();
if ($criteria = $modx->newQuery($class, $modx->fromJSON($where))) {
    $pk = $modx->getPK($class);
    if (!is_array($pk)) {
        $pk = array($pk);
    } else {
        $pk = array_values($pk);
    }
    $criteria->select($modx->getSelectColumns($class, '', '', array_merge($pk, array($field))));
    if (!empty($sortby)) {
        if (!empty($sortbyEscaped)) $sortby = $modx->escape($sortby);
        $criteria->sortby($sortby, $sortdir);
    }
    if (!empty($debug)) {
        $criteria->prepare();
        $modx->log(modX::LOG_LEVEL_ERROR, "SQL: {$criteria->toSql()}", '', __FUNCTION__, __FILE__, __LINE__);
    }
    $collection = $modx->getIterator($class, $criteria);
    if (!empty($collection)) {
        $values = array();
        foreach ($collection as $object) {
            /** @var xPDOObject $object */
            $values[] = $object->get($field);
        }
        if (!empty($distinct)) {
            $values = array_unique($values);
        }
    }
}
return implode($delimiter, $values);
?>