<?php

/**
 * JelvixServices form.
 *
 * @package    Jelvix
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class JelvixServicesForm extends BaseJelvixServicesForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
  }
}
