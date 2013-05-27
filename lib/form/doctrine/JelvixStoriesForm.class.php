<?php

/**
 * JelvixStories form.
 *
 * @package    Jelvix
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class JelvixStoriesForm extends BaseJelvixStoriesForm
{
  public function configure()
  {
//      parent::configure();

      $photoOptions =  array(
          'label'     => 'Photo',
          'file_src'  => $this->getObject()->getPhoto(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br /><div class="delete_file">%delete% %delete_label%</div></div>',
      );

      $this->setWidgets(array(
          'id'         => new sfWidgetFormInputHidden(),
          'project_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('JelvixProjects'), 'add_empty' => true)),
          'author'     => new sfWidgetFormInputText(),
          'photo'      => new sfWidgetFormInputFileEditable($photoOptions),
          'position'   => new sfWidgetFormInputText(),
          'text'       => new sfWidgetFormTextarea(),
          'created_at' => new sfWidgetFormDateTime(),
          'updated_at' => new sfWidgetFormDateTime(),
      ));


      $this->setValidators(array(
          'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
          'project_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('JelvixProjects'), 'required' => false)),
          'author'     => new sfValidatorString(array('max_length' => 250)),
          'position'   => new sfValidatorString(array('max_length' => 250)),
          'text'       => new sfValidatorPass(),
          'created_at' => new sfValidatorDateTime(),
          'updated_at' => new sfValidatorDateTime(),
      ));
      $this->validatorSchema['photo'] = new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir').'/img',
          'mime_types' => 'web_images',
      ));

      $this->widgetSchema->setNameFormat('jelvix_stories[%s]');

      $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

      $this->setupInheritance();

      //parent::setup();

      unset($this['created_at'], $this['updated_at']);
  }
}
