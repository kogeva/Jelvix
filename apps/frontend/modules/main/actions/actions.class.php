<?php

/**
 * main actions.
 *
 * @package    Jelvix
 * @subpackage main
 * @author     Volodymyr Kozhevnikov
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mainActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
      $this->getResponse()->setTitle(sfConfig::get('app_titles_main'));
      $this->projects = JelvixProjectsTable::getThreeRecentProjects();
  }
}
