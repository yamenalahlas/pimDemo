<?php

/**
* Inheritance: no
* Variants: no


Fields Summary:
- provider [input]
- identifier [input]
- profileData [textarea]
- credentials [objectbricks]
*/


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'id' => '3',
   'name' => 'SsoIdentity',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1643025872,
   'userOwner' => 0,
   'userModification' => 1,
   'parentClass' => '',
   'implementsInterfaces' => '',
   'listingParentClass' => '',
   'useTraits' => '',
   'listingUseTraits' => '',
   'encryption' => false,
   'encryptedTables' => 
  array (
  ),
   'allowInherit' => false,
   'allowVariants' => false,
   'showVariants' => false,
   'fieldDefinitions' => 
  array (
  ),
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
     'name' => 'pimcore_root',
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => 0,
     'height' => 0,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'childs' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
         'fieldtype' => 'panel',
         'layout' => NULL,
         'border' => false,
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => '',
         'width' => NULL,
         'height' => NULL,
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'childs' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'fieldtype' => 'input',
             'width' => NULL,
             'defaultValue' => NULL,
             'columnLength' => 190,
             'regex' => '',
             'unique' => false,
             'showCharCount' => false,
             'name' => 'provider',
             'title' => 'Provider',
             'tooltip' => '',
             'mandatory' => true,
             'noteditable' => true,
             'index' => true,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => true,
             'visibleSearch' => true,
             'forbiddenNames' => 
            array (
              0 => 'id',
              1 => 'key',
              2 => 'path',
              3 => 'type',
              4 => 'index',
              5 => 'classname',
              6 => 'creationdate',
              7 => 'userowner',
              8 => 'value',
              9 => 'class',
              10 => 'list',
              11 => 'fullpath',
              12 => 'childs',
              13 => 'values',
              14 => 'cachetag',
              15 => 'cachetags',
              16 => 'parent',
              17 => 'published',
              18 => 'valuefromparent',
              19 => 'userpermissions',
              20 => 'dependencies',
              21 => 'modificationdate',
              22 => 'usermodification',
              23 => 'byid',
              24 => 'bypath',
              25 => 'data',
              26 => 'versions',
              27 => 'properties',
              28 => 'permissions',
              29 => 'permissionsforuser',
              30 => 'childamount',
              31 => 'apipluginbroker',
              32 => 'resource',
              33 => 'parentClass',
              34 => 'definition',
              35 => 'locked',
              36 => 'language',
              37 => 'omitmandatorycheck',
              38 => 'idpath',
              39 => 'object',
              40 => 'fieldname',
              41 => 'property',
              42 => 'parentid',
              43 => 'children',
              44 => 'scheduledtasks',
            ),
             'blockedVarsForExport' => 
            array (
            ),
             'defaultValueGenerator' => '',
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'fieldtype' => 'input',
             'width' => NULL,
             'defaultValue' => NULL,
             'columnLength' => 190,
             'regex' => '',
             'unique' => false,
             'showCharCount' => false,
             'name' => 'identifier',
             'title' => 'Identifier',
             'tooltip' => '',
             'mandatory' => true,
             'noteditable' => true,
             'index' => true,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => true,
             'visibleSearch' => true,
             'forbiddenNames' => 
            array (
              0 => 'id',
              1 => 'key',
              2 => 'path',
              3 => 'type',
              4 => 'index',
              5 => 'classname',
              6 => 'creationdate',
              7 => 'userowner',
              8 => 'value',
              9 => 'class',
              10 => 'list',
              11 => 'fullpath',
              12 => 'childs',
              13 => 'values',
              14 => 'cachetag',
              15 => 'cachetags',
              16 => 'parent',
              17 => 'published',
              18 => 'valuefromparent',
              19 => 'userpermissions',
              20 => 'dependencies',
              21 => 'modificationdate',
              22 => 'usermodification',
              23 => 'byid',
              24 => 'bypath',
              25 => 'data',
              26 => 'versions',
              27 => 'properties',
              28 => 'permissions',
              29 => 'permissionsforuser',
              30 => 'childamount',
              31 => 'apipluginbroker',
              32 => 'resource',
              33 => 'parentClass',
              34 => 'definition',
              35 => 'locked',
              36 => 'language',
              37 => 'omitmandatorycheck',
              38 => 'idpath',
              39 => 'object',
              40 => 'fieldname',
              41 => 'property',
              42 => 'parentid',
              43 => 'children',
              44 => 'scheduledtasks',
            ),
             'blockedVarsForExport' => 
            array (
            ),
             'defaultValueGenerator' => '',
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Textarea::__set_state(array(
             'fieldtype' => 'textarea',
             'width' => '',
             'height' => '',
             'maxLength' => NULL,
             'showCharCount' => NULL,
             'excludeFromSearchIndex' => false,
             'name' => 'profileData',
             'title' => 'Profile Data',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'forbiddenNames' => 
            array (
              0 => 'id',
              1 => 'key',
              2 => 'path',
              3 => 'type',
              4 => 'index',
              5 => 'classname',
              6 => 'creationdate',
              7 => 'userowner',
              8 => 'value',
              9 => 'class',
              10 => 'list',
              11 => 'fullpath',
              12 => 'childs',
              13 => 'values',
              14 => 'cachetag',
              15 => 'cachetags',
              16 => 'parent',
              17 => 'published',
              18 => 'valuefromparent',
              19 => 'userpermissions',
              20 => 'dependencies',
              21 => 'modificationdate',
              22 => 'usermodification',
              23 => 'byid',
              24 => 'bypath',
              25 => 'data',
              26 => 'versions',
              27 => 'properties',
              28 => 'permissions',
              29 => 'permissionsforuser',
              30 => 'childamount',
              31 => 'apipluginbroker',
              32 => 'resource',
              33 => 'parentClass',
              34 => 'definition',
              35 => 'locked',
              36 => 'language',
              37 => 'omitmandatorycheck',
              38 => 'idpath',
              39 => 'object',
              40 => 'fieldname',
              41 => 'property',
              42 => 'parentid',
              43 => 'children',
              44 => 'scheduledtasks',
            ),
             'blockedVarsForExport' => 
            array (
            ),
          )),
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks::__set_state(array(
             'fieldtype' => 'objectbricks',
             'allowedTypes' => 
            array (
              0 => 'OAuth1Token',
              1 => 'OAuth2Token',
            ),
             'maxItems' => '',
             'border' => false,
             'name' => 'credentials',
             'title' => 'Credentials',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'forbiddenNames' => 
            array (
              0 => 'id',
              1 => 'key',
              2 => 'path',
              3 => 'type',
              4 => 'index',
              5 => 'classname',
              6 => 'creationdate',
              7 => 'userowner',
              8 => 'value',
              9 => 'class',
              10 => 'list',
              11 => 'fullpath',
              12 => 'childs',
              13 => 'values',
              14 => 'cachetag',
              15 => 'cachetags',
              16 => 'parent',
              17 => 'published',
              18 => 'valuefromparent',
              19 => 'userpermissions',
              20 => 'dependencies',
              21 => 'modificationdate',
              22 => 'usermodification',
              23 => 'byid',
              24 => 'bypath',
              25 => 'data',
              26 => 'versions',
              27 => 'properties',
              28 => 'permissions',
              29 => 'permissionsforuser',
              30 => 'childamount',
              31 => 'apipluginbroker',
              32 => 'resource',
              33 => 'parentClass',
              34 => 'definition',
              35 => 'locked',
              36 => 'language',
              37 => 'omitmandatorycheck',
              38 => 'idpath',
              39 => 'object',
              40 => 'fieldname',
              41 => 'property',
              42 => 'parentid',
              43 => 'children',
              44 => 'scheduledtasks',
            ),
             'blockedVarsForExport' => 
            array (
            ),
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' => 
        array (
        ),
         'icon' => NULL,
         'labelWidth' => 100,
         'labelAlign' => 'left',
      )),
    ),
     'locked' => false,
     'blockedVarsForExport' => 
    array (
    ),
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'icon' => '/bundles/pimcoreadmin/img/flat-color-icons/lock.svg',
   'previewUrl' => '',
   'group' => 'CustomerManagement',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => '',
   'previewGeneratorReference' => '',
   'compositeIndices' => 
  array (
  ),
   'generateTypeDeclarations' => true,
   'showFieldLookup' => false,
   'propertyVisibility' => 
  array (
    'grid' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => false,
      'creationDate' => false,
    ),
    'search' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => false,
      'creationDate' => false,
    ),
  ),
   'enableGridLocking' => false,
   'dao' => NULL,
   'blockedVarsForExport' => 
  array (
  ),
));
