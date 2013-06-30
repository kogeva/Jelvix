<?php

require_once dirname(__FILE__).'/../lib/servicesGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/servicesGeneratorHelper.class.php';

/**
 * services actions.
 *
 * @package    Jelvix
 * @subpackage services
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class servicesActions extends autoServicesActions
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
