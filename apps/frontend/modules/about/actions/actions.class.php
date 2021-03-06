<?php

/**
 * about actions.
 *
 * @package    Jelvix
 * @subpackage about
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class aboutActions extends sfActions
{
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request)
    {
        $module = Doctrine_Core::getTable('JelvixModule')->findOneByName('about');
        $this->getResponse()->setTitle($module->getTitle());
        $this->getResponse()->addMeta('description', $module->getDescription());
        $this->lastFiveNews = JelvixNewsTable::getLastFiveNews();
    }
}
