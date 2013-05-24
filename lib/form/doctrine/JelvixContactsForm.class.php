<?php

/**
 * JelvixContacts form.
 *
 * @package    Jelvix
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class JelvixContactsForm extends BaseJelvixContactsForm
{
  public function configure()
  {

      $this->setWidgets(array(
          'id'            => new sfWidgetFormInputHidden(),
          'name'          => new sfWidgetFormInputText(array( 'label' => 'Name: *')),
          'email_address' => new sfWidgetFormInputText(array( 'label' => 'E-Mail Address: *')),
          'subject'       => new sfWidgetFormInputText(array( 'label' => 'Subject: *')),
          'message'       => new sfWidgetFormTextarea(array( 'label' => 'Message: *')),
          'created_at'    => new sfWidgetFormDateTime(),
          'updated_at'    => new sfWidgetFormDateTime(),
      ));

      $this->setValidators(array(
          'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
          'name'          => new sfValidatorString(array('min_length' => 3, 'max_length' => 250)),
          'email_address' => new sfValidatorEmail(array('max_length' => 250)),
          'subject'       => new sfValidatorString(array('min_length' => 2, 'max_length' => 250)),
          'message'       => new sfValidatorString(array('min_length' => 10)),
          'created_at'    => new sfValidatorDateTime(),
          'updated_at'    => new sfValidatorDateTime(),
      ));

      unset($this['created_at'], $this['updated_at']);
  }
}
