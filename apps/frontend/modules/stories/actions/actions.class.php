<?php

/**
 * stories actions.
 *
 * @package    Jelvix
 * @subpackage stories
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class storiesActions extends sfActions
{
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request)
    {
        $module = Doctrine_Core::getTable('JelvixModule')->findOneByName('stories');
        $this->getResponse()->setTitle($module->getTitle());
        $this->getResponse()->addMeta('description', $module->getDescription());
        $strories = Doctrine_Core::getTable('JelvixStories')->findAll()->getData();
        $this->stories = $this->cutArrayToPart($strories);

    }

    private function cutArrayToPart($data)
    {
        $newData = array();

        foreach ($data as $key => $value)
        {
            if($key%2 == 0)
                $newData['even'][] = $value;
            else
                $newData['odd'][] = $value;
        }
        return $newData;
    }
}
