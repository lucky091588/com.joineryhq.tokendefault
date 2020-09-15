<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from C:\xampp2\htdocs\drupal-test\sites\default\files\civicrm\ext\com.joineryhq.tokendefault\xml/schema/CRM/Tokendefault/Tokendefaults.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:4b3d5eedef3daded2ca35259f6d431be)
 */

/**
 * Database access object for the Tokendefaults entity.
 */
class CRM_Tokendefault_DAO_Tokendefaults extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_tokendefaults';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Unique Tokendefaults ID
   *
   * @var int
   */
  public $id;

  /**
   * @var string
   */
  public $token;

  /**
   * @var string
   */
  public $default;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_tokendefaults';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   */
  public static function getEntityTitle() {
    return ts('Tokendefaultses');
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
          'description' => CRM_Tokendefault_ExtensionUtil::ts('Unique Tokendefaults ID'),
          'required' => TRUE,
          'where' => 'civicrm_tokendefaults.id',
          'table_name' => 'civicrm_tokendefaults',
          'entity' => 'Tokendefaults',
          'bao' => 'CRM_Tokendefault_DAO_Tokendefaults',
          'localizable' => 0,
          'add' => NULL,
        ],
        'token' => [
          'name' => 'token',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => CRM_Tokendefault_ExtensionUtil::ts('Token'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_tokendefaults.token',
          'table_name' => 'civicrm_tokendefaults',
          'entity' => 'Tokendefaults',
          'bao' => 'CRM_Tokendefault_DAO_Tokendefaults',
          'localizable' => 0,
          'add' => NULL,
        ],
        'default' => [
          'name' => 'default',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => CRM_Tokendefault_ExtensionUtil::ts('Default'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_tokendefaults.default',
          'table_name' => 'civicrm_tokendefaults',
          'entity' => 'Tokendefaults',
          'bao' => 'CRM_Tokendefault_DAO_Tokendefaults',
          'localizable' => 0,
          'add' => NULL,
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'tokendefaults', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'tokendefaults', $prefix, []);
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
