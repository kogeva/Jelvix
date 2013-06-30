<?php

require_once dirname(__FILE__).'/../lib/projectsGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/projectsGeneratorHelper.class.php';

/**
 * projects actions.
 *
 * @package    Jelvix
 * @subpackage projects
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class projectsActions extends autoProjectsActions
{
    public function executeIndex(sfWebRequest $request)
    {
        $this->setSort(array('created_at', 'desc'));
        // sorting
        if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort')))
        {
            $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
        }

        // pager
        if ($request->getParameter('page'))
        {
            $this->setPage($request->getParameter('page'));
        }

        $this->pager = $this->getPager();
        $this->sort = $this->getSort();
    }
}
