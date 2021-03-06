<?php

/**
 * JelvixProjects form.
 *
 * @package    Jelvix
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class JelvixProjectsForm extends BaseJelvixProjectsForm
{
  public function configure()
  {
      $this->widgetSchema['photo'] = new sfWidgetFormInputFileEditable(array(
          'label'     => 'photo',
          'file_src'  => $this->getObject()->getPhoto(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br /><div class="delete_file">%delete% %delete_label%</div></div>',
      ));

      $this->validatorSchema['photo'] = new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir').'/img',
          'mime_types' => 'web_images',
      ));

      $this->widgetSchema['thumbnail'] = new sfWidgetFormInputFileEditable(array(
          'label'     => 'Thumbnail',
          'file_src'  => $this->getObject()->getThumbnail(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br /><div class="delete_file">%delete% %delete_label%</div></div>',
      ));

      $this->validatorSchema['thumbnail'] = new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir').'/img',
          'mime_types' => 'web_images',
      ));

      $this->validatorSchema['created_at'] = new sfValidatorDateTime(array(
          'required'   => false,
          )
      );

      $this->validatorSchema['logo_delete'] = new sfValidatorPass();
      unset($this['updated_at']);
  }
}
