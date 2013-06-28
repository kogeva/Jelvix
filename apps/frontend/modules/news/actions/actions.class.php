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
        $module = Doctrine_Core::getTable('JelvixModule')->findOneByName('news');
        $this->getResponse()->setTitle($module->getTitle());
        $this->getResponse()->addMeta('description', $module->getDescription());
        $this->pager = new sfDoctrinePager('JelvixNews', 1);
        $this->pager->setQuery(JelvixNewsTable::getQueryActiveNews());
        $this->pager->setMaxPerPage(4);
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
    }

    public function executeShow(sfWebRequest $request)
    {
        $this->news = $this->getRoute()->getObject();
    }

    public function execute404 (sfWebRequest $requerst)
    {
        //$this->getResponse()->removeStylesheet('main.css');
        $this->setLayout(false);
    }
}
