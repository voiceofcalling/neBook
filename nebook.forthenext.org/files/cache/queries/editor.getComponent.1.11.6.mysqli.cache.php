<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getComponent");
$query->setAction("select");
$query->setPriority("");

${'component_name35_argument'} = new ConditionArgument('component_name', $args->component_name, 'equal');
${'component_name35_argument'}->checkNotNull();
${'component_name35_argument'}->createConditionValue();
if(!${'component_name35_argument'}->isValid()) return ${'component_name35_argument'}->getErrorMessage();
if(${'component_name35_argument'} !== null) ${'component_name35_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_editor_components`', '`editor_components`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`component_name`',$component_name35_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>