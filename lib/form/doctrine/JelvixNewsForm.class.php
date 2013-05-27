<?php

/**
 * JelvixNews form.
 *
 * @package    Jelvix
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class JelvixNewsForm extends BaseJelvixNewsForm
{
  public function configure()
  {
      parent::configure();

      $this->widgetSchema['logo'] = new sfWidgetFormInputFileEditable(array(
          'label'     => 'Company logo',
          'file_src'  => $this->getObject()->getLogo(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br /><div class="delete_file">%delete% %delete_label%</div></div>',
      ));

      $this->validatorSchema['logo'] = new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir').'/img',
          'mime_types' => 'web_images',
      ));

      $this->validatorSchema['logo_delete'] = new sfValidatorPass();

      unset($this['created_at'], $this['updated_at']);
  }
}
