<?php

/**
 * JelvixRequest form.
 *
 * @package    Jelvix
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class JelvixRequestForm extends BaseJelvixRequestForm
{
  public function configure()
  {
      $this->setWidgets(array(
          'id'            => new sfWidgetFormInputHidden(),
          'name'          => new sfWidgetFormInputText(array( 'label' => 'Full Name *')),
          'email_address' => new sfWidgetFormInputText(array( 'label' => 'Email *')),
          'phone'         => new sfWidgetFormInputText(array( 'label' => 'Phone Number *')),
          'company'       => new sfWidgetFormInputText(array( 'label' => 'Company *')),
          'message'       => new sfWidgetFormTextarea(array( 'label' => 'Describe Your Project In a Few Sentences*')),
          'created_at'    => new sfWidgetFormDateTime(),
          'updated_at'    => new sfWidgetFormDateTime(),
      ));

      $this->setValidators(array(
          'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
          'name'          => new sfValidatorString(array('max_length' => 250)),
          'email_address' => new sfValidatorString(array('max_length' => 250)),
          'phone'         => new sfValidatorString(array('max_length' => 255)),
          'company'       => new sfValidatorString(array('max_length' => 250)),
          'message'       => new sfValidatorString(array('required' => false)),
          'created_at'    => new sfValidatorDateTime(),
          'updated_at'    => new sfValidatorDateTime(),
      ));

      unset($this['created_at'], $this['updated_at']);
  }
}
