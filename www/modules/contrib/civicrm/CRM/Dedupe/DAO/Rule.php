<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Dedupe/Rule.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:2860c5a16ead4f23809027d8a2812265)
 */

/**
 * Database access object for the Rule entity.
 */
class CRM_Dedupe_DAO_Rule extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '1.8';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_dedupe_rule';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * Unique dedupe rule id
   *
   * @var int
   */
  public $id;

  /**
   * The id of the rule group this rule belongs to
   *
   * @var int
   */
  public $dedupe_rule_group_id;

  /**
   * The name of the table this rule is about
   *
   * @var string
   */
  public $rule_table;

  /**
   * The name of the field of the table referenced in rule_table
   *
   * @var string
   */
  public $rule_field;

  /**
   * The length of the matching substring
   *
   * @var int
   */
  public $rule_length;

  /**
   * The weight of the rule
   *
   * @var int
   */
  public $rule_weight;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_dedupe_rule';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Rules') : ts('Rule');
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'dedupe_rule_group_id', 'civicrm_dedupe_rule_group', 'id');
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
          'title' => ts('Dedupe Rule ID'),
          'description' => ts('Unique dedupe rule id'),
          'required' => TRUE,
          'where' => 'civicrm_dedupe_rule.id',
          'table_name' => 'civicrm_dedupe_rule',
          'entity' => 'Rule',
          'bao' => 'CRM_Dedupe_BAO_Rule',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => '1.8',
        ],
        'dedupe_rule_group_id' => [
          'name' => 'dedupe_rule_group_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Group ID'),
          'description' => ts('The id of the rule group this rule belongs to'),
          'required' => TRUE,
          'where' => 'civicrm_dedupe_rule.dedupe_rule_group_id',
          'table_name' => 'civicrm_dedupe_rule',
          'entity' => 'Rule',
          'bao' => 'CRM_Dedupe_BAO_Rule',
          'localizable' => 0,
          'FKClassName' => 'CRM_Dedupe_DAO_RuleGroup',
          'html' => [
            'label' => ts("Group"),
          ],
          'add' => '1.8',
        ],
        'rule_table' => [
          'name' => 'rule_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Rule Table'),
          'description' => ts('The name of the table this rule is about'),
          'required' => TRUE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_dedupe_rule.rule_table',
          'table_name' => 'civicrm_dedupe_rule',
          'entity' => 'Rule',
          'bao' => 'CRM_Dedupe_BAO_Rule',
          'localizable' => 0,
          'add' => '1.8',
        ],
        'rule_field' => [
          'name' => 'rule_field',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Rule Field'),
          'description' => ts('The name of the field of the table referenced in rule_table'),
          'required' => TRUE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_dedupe_rule.rule_field',
          'table_name' => 'civicrm_dedupe_rule',
          'entity' => 'Rule',
          'bao' => 'CRM_Dedupe_BAO_Rule',
          'localizable' => 0,
          'add' => '1.8',
        ],
        'rule_length' => [
          'name' => 'rule_length',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Rule Length'),
          'description' => ts('The length of the matching substring'),
          'where' => 'civicrm_dedupe_rule.rule_length',
          'table_name' => 'civicrm_dedupe_rule',
          'entity' => 'Rule',
          'bao' => 'CRM_Dedupe_BAO_Rule',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '1.8',
        ],
        'rule_weight' => [
          'name' => 'rule_weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Order'),
          'description' => ts('The weight of the rule'),
          'required' => TRUE,
          'where' => 'civicrm_dedupe_rule.rule_weight',
          'table_name' => 'civicrm_dedupe_rule',
          'entity' => 'Rule',
          'bao' => 'CRM_Dedupe_BAO_Rule',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '1.8',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'dedupe_rule', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'dedupe_rule', $prefix, []);
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
