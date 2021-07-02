<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Campaign/CampaignGroup.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:2cc4c72732eccbe071147fea0abb4aef)
 */

/**
 * Database access object for the CampaignGroup entity.
 */
class CRM_Campaign_DAO_CampaignGroup extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '3.3';
  const COMPONENT = 'CiviCampaign';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_campaign_group';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * Campaign Group id.
   *
   * @var int
   */
  public $id;

  /**
   * Foreign key to the activity Campaign.
   *
   * @var int
   */
  public $campaign_id;

  /**
   * Type of Group.
   *
   * @var string
   */
  public $group_type;

  /**
   * Name of table where item being referenced is stored.
   *
   * @var string
   */
  public $entity_table;

  /**
   * Entity id of referenced table.
   *
   * @var int
   */
  public $entity_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_campaign_group';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Campaign Groups') : ts('Campaign Group');
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'campaign_id', 'civicrm_campaign', 'id');
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
          'title' => ts('Campaign Group ID'),
          'description' => ts('Campaign Group id.'),
          'required' => TRUE,
          'where' => 'civicrm_campaign_group.id',
          'table_name' => 'civicrm_campaign_group',
          'entity' => 'CampaignGroup',
          'bao' => 'CRM_Campaign_DAO_CampaignGroup',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => '3.3',
        ],
        'campaign_id' => [
          'name' => 'campaign_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Campaign ID'),
          'description' => ts('Foreign key to the activity Campaign.'),
          'required' => TRUE,
          'where' => 'civicrm_campaign_group.campaign_id',
          'table_name' => 'civicrm_campaign_group',
          'entity' => 'CampaignGroup',
          'bao' => 'CRM_Campaign_DAO_CampaignGroup',
          'localizable' => 0,
          'FKClassName' => 'CRM_Campaign_DAO_Campaign',
          'html' => [
            'type' => 'EntityRef',
            'label' => ts("Campaign"),
          ],
          'add' => '3.3',
        ],
        'group_type' => [
          'name' => 'group_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Campaign Group Type'),
          'description' => ts('Type of Group.'),
          'maxlength' => 8,
          'size' => CRM_Utils_Type::EIGHT,
          'where' => 'civicrm_campaign_group.group_type',
          'default' => 'NULL',
          'table_name' => 'civicrm_campaign_group',
          'entity' => 'CampaignGroup',
          'bao' => 'CRM_Campaign_DAO_CampaignGroup',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Core_SelectValues::getCampaignGroupTypes',
          ],
          'add' => NULL,
        ],
        'entity_table' => [
          'name' => 'entity_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Entity Table'),
          'description' => ts('Name of table where item being referenced is stored.'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_campaign_group.entity_table',
          'default' => 'NULL',
          'table_name' => 'civicrm_campaign_group',
          'entity' => 'CampaignGroup',
          'bao' => 'CRM_Campaign_DAO_CampaignGroup',
          'localizable' => 0,
          'add' => '3.3',
        ],
        'entity_id' => [
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Entity ID'),
          'description' => ts('Entity id of referenced table.'),
          'where' => 'civicrm_campaign_group.entity_id',
          'default' => 'NULL',
          'table_name' => 'civicrm_campaign_group',
          'entity' => 'CampaignGroup',
          'bao' => 'CRM_Campaign_DAO_CampaignGroup',
          'localizable' => 0,
          'add' => '3.3',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'campaign_group', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'campaign_group', $prefix, []);
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
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
