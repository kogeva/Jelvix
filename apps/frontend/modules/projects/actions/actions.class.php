<?php

/**
 * projects actions.
 *
 * @package    Jelvix
 * @subpackage projects
 * @author     Volodymyr Kozhevnikov
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class projectsActions extends sfActions
{
    public function executeIndex(sfWebRequest $request)
    {
        $module = Doctrine_Core::getTable('JelvixModule')->findOneByName('projects');
        $this->getResponse()->setTitle($module->getTitle());
        $this->getResponse()->addMeta('description', $module->getDescription());
        $category = $request->getParameter('category', false);
        if(!$category)
            $this->projects = JelvixProjectsTable::getInstance();
        else
        {
            $this->projectCategory = Doctrine_Core::getTable('JelvixProjectCategory')->findByName($category);
            $this->projects = $this->projectCategory->get(0)->getJelvixProjects();
        }
        $this->projects = $this->arrayChunk($this->projects->getData());
    }

    public function  executeShowListByCategoty(sfWebRequest $request)
    {
        $category = $request->getParameter('category');
        $this->projectCategory = Doctrine_Core::getTable('JelvixProjectCategory')->findByName($category);
        $this->projects = $this->projectCategory->get(0)->getJelvixProjects()->getData();
        $this->projects = $this->arrayChunk($this->projects);
    }

    public function executeShow(sfWebRequest $request)
    {
        $this->project = $this->getRoute()->getObject();
    }

    private function arrayChunk($data)
    {
        $tmp = array();
        $it = 0;

        for($i = 1; $i <= ceil(( count($data) / 9 )); $i++)
        {

            for($index = 0; $index < 9; $index++)
            {
                if(isset($data[$it + $index]))
                    $tmp[$i][] = $data[$it + $index];
            }

            $it = 9+$it;

        }
        return $tmp;
    }

}
