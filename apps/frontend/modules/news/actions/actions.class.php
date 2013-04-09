<?php

/**
 * news actions.
 *
 * @package    Jelvix
 * @subpackage news
 * @author     Volodymyr Kozhevnikov
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class newsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->pager = new sfDoctrinePager('JelvixNews', 4);
    $this->pager->setQuery(Doctrine_Core::getTable('JelvixNews')
        ->createQuery('a'));
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->jelvix_news = Doctrine_Core::getTable('JelvixNews')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->jelvix_news);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new JelvixNewsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new JelvixNewsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($jelvix_news = Doctrine_Core::getTable('JelvixNews')->find(array($request->getParameter('id'))), sprintf('Object jelvix_news does not exist (%s).', $request->getParameter('id')));
    $this->form = new JelvixNewsForm($jelvix_news);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($jelvix_news = Doctrine_Core::getTable('JelvixNews')->find(array($request->getParameter('id'))), sprintf('Object jelvix_news does not exist (%s).', $request->getParameter('id')));
    $this->form = new JelvixNewsForm($jelvix_news);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($jelvix_news = Doctrine_Core::getTable('JelvixNews')->find(array($request->getParameter('id'))), sprintf('Object jelvix_news does not exist (%s).', $request->getParameter('id')));
    $jelvix_news->delete();

    $this->redirect('news/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $jelvix_news = $form->save();

      $this->redirect('news/edit?id='.$jelvix_news->getId());
    }
  }
}
