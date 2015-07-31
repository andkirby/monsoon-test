<?php
/* @var $this Mage_Catalog_Model_Resource_Setup */
$this->addAttribute('catalog_category', 'is_not_link', array(
    'group'         => 'General Information',
    'input'         => 'select',
    'type'          => 'int',
    'label'         => 'Show category as simple label (not as link)',
    'source'       => 'eav/entity_attribute_source_boolean',
    'visible'       => true,
    'required'      => false,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'sort_order'    => 200,
));
