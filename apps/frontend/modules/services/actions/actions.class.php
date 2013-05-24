<?php

/**
 * services actions.
 *
 * @package    Jelvix
 * @subpackage services
 * @author     Volodymyr Kozhevnikov
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class servicesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
      $this->getResponse()->setTitle(sfConfig::get('app_titles_services'));
      $this->services = $this->getRoute()->getObjects();
      $this->services = $this->services->getData();
      $this->services = $this->buildDataForFlasgs($this->services);
  }

  public function executeShowServicesByCategory(sfWebRequest $request)
  {
      $catName        = $request->getParameter('name');
      $this->category = Doctrine_Core::getTable('JelvixServicesCategory')->findOneByName($catName);
      $this->services = $this->category->getJelvixServices();
      $this->services = $this->buildDataForFlasgs($this->services->getData());
      $this->setLayout(false);
  }

  private function buildDataForFlasgs($data)
  {
      $tmp     = array();
      $counter = 0;

      while($data)
      {
          for($i = 0; $i <= 3; $i++)
          {
              $items = array_splice($data,0,1);
              foreach($items as $item)
              {
                  $tmp[$i][] = $item;
              }
          }
          $counter++;
      }
      return $tmp;
  }
}
