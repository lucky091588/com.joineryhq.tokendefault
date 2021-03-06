<?php

use CRM_Tokendefault_ExtensionUtil as E;

/**
 * Form controller class
 *
 * @see https://docs.civicrm.org/dev/en/latest/framework/quickform/
 */
class CRM_Tokendefault_Form_TokendefaultsSet extends CRM_Core_Form {

  public function buildQuickForm() {
    //title
    $this->add('text', 'title', E::ts('Set Name'), NULL, TRUE);
    $this->add('checkbox', 'is_default', E::ts('Set Default?'));

    $this->addButtons(array(
      array(
        'type' => 'submit',
        'name' => E::ts('Submit'),
        'isDefault' => TRUE,
      ),
      array(
        'type' => 'cancel',
        'name' => E::ts('Cancel'),
      ),
    ));

    parent::buildQuickForm();
  }

  public function setDefaultValues() {
    $defaults = parent::setDefaultValues();
    $id = CRM_Utils_Request::retrieve('id', 'Positive',
      $this, FALSE, 0
    );

    if ($id) {
      $tokendefaultsSets = \Civi\Api4\TokendefaultsSet::get()
        ->addWhere('id', '=', $id)
        ->execute();
      foreach ($tokendefaultsSets as $tokendefaultsSet) {
        $defaults['title'] = $tokendefaultsSet['title'];
        $defaults['is_default'] = $tokendefaultsSet['is_default'];
      }
    }

    return $defaults;
  }

  public function postProcess() {
    $values = $this->getSubmitValues();
    $id = CRM_Utils_Request::retrieve('id', 'Positive',
      $this, FALSE, 0
    );

    $isDefault = 0;
    if (!empty($values["is_default"])) {
      $results = \Civi\Api4\TokendefaultsSet::update()
        ->addWhere('is_default', '=', 1)
        ->addValue('is_default', 0)
        ->execute();

      $isDefault = 1;
    }

    if ($id) {
      $tokendefaultsSets = \Civi\Api4\TokendefaultsSet::get()
        ->addWhere('id', '=', $id)
        ->execute();
      foreach ($tokendefaultsSets as $tokendefaultsSet) {
        $results = \Civi\Api4\TokendefaultsSet::update()
          ->addWhere('id', '=', $id)
          ->addValue('title', $values['title'])
          ->addValue('is_default', $isDefault)
          ->execute();
      }
    }
    else {
      $results = \Civi\Api4\TokendefaultsSet::create()
        ->addValue('title', $values['title'])
        ->addValue('is_default', $isDefault)
        ->execute();
    }

    CRM_Core_Session::setStatus(E::ts('Defaults saved'), E::ts('Token Defaults' . $isDefault), 'success');

    CRM_Utils_System::redirect(CRM_Utils_System::url('civicrm/admin/tokendefault',
      "reset=1"
    ));

    parent::postProcess();
  }

}
