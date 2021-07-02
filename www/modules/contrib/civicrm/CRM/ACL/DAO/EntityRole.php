<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/ACL/EntityRole.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:c26077f17afc43e2f44efca99ae8e8fe)
 */

/**
 * Database access object for the EntityRole entity.
 */
class CRM_ACL_DAO_EntityRole extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '1.6';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_acl_entity_role';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * Unique table ID
   *
   * @var int
   */
  public $id;

  /**
   * Foreign Key to ACL Role (which is an option value pair and hence an implicit FK)
   *
   * @var int
   */
  public $acl_role_id;

  /**
   * Table of the object joined to the ACL Role (Contact or Group)
   *
   * @var string
   */
  public $entity_table;

  /**
   * ID of the group/contact object being joined
   *
   * @var int
   */
  public $entity_id;

  /**
   * Is this property active?
   *
   * @var bool
   */
  public $is_active;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_acl_entity_role';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Entity Roles') : ts('Entity Role');
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Dynamic(self::getTableName(), 'entity_id', NULL, 'id', 'entity_table');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Entity Role'),
          'description' => ts('Unique table ID'),
          'required' => TRUE,
          'where' => 'civicrm_acl_entity_role.id',
          'table_name' => 'civicrm_acl_entity_role',
          'entity' => 'EntityRole',
          'bao' => 'CRM_ACL_BAO_EntityRole',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => '1.6',
        ],
        'acl_role_id' => [
          'name' => 'acl_role_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('ACL Role ID'),
          'description' => ts('Foreign Key to ACL Role (which is an option value pair and hence an implicit FK)'),
          'required' => TRUE,
          'where' => 'civicrm_acl_entity_role.acl_role_id',
          'table_name' => 'civicrm_acl_entity_role',
          'entity' => 'EntityRole',
          'bao' => 'CRM_ACL_BAO_EntityRole',
          'localizable' => 0,
          'add' => '1.6',
        ],
        'entity_table' => [
          'name' => 'entity_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Entity Table'),
          'description' => ts('Table of the object joined to the ACL Role (Contact or Group)'),
          'required' => TRUE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_acl_entity_role.entity_table',
          'table_name' => 'civicrm_acl_entity_role',
          'entity' => 'EntityRole',
          'bao' => 'CRM_ACL_BAO_EntityRole',
          'localizable' => 0,
          'add' => '1.6',
        ],
        'entity_id' => [
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('ACL Entity ID'),
          'description' => ts('ID of the group/contact object being joined'),
          'required' => TRUE,
          'where' => 'civicrm_acl_entity_role.entity_id',
          'table_name' => 'civicrm_acl_entity_role',
          'entity' => 'EntityRole',
          'bao' => 'CRM_ACL_BAO_EntityRole',
          'localizable' => 0,
          'add' => '1.6',
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('ACL Entity Role is Active'),
          'description' => ts('Is this property active?'),
          'where' => 'civicrm_acl_entity_role.is_active',
          'table_name' => 'civicrm_acl_entity_role',
          'entity' => 'EntityRole',
          'bao' => 'CRM_ACL_BAO_EntityRole',
          'localizable' => 0,
          'add' => '1.6',
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'acl_entity_role', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'acl_entity_role', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'index_role' => [
        'name' => 'index_role',
        'field' => [
          0 => 'acl_role_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_acl_entity_role::0::acl_role_id',
      ],
      'index_entity' => [
        'name' => 'index_entity',
        'field' => [
          0 => 'entity_table',
          1 => 'entity_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_acl_entity_role::0::entity_table::entity_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
