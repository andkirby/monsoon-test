<?php
/**
 * Added boolean attribute to category to show category in top menu as regular label, i.e. not as a link
 */
/* @var $this Mage_Catalog_Model_Resource_Setup */
$this->addAttribute('catalog_category', 'is_not_link', array(
    'group'         => 'General Information',
    'input'         => 'select',
    'type'          => 'int',
    'label'         => 'Show category as a simple label (not as a link)',
    'source'       => 'eav/entity_attribute_source_boolean',
    'visible'       => true,
    'required'      => false,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'sort_order'    => 200,
));
