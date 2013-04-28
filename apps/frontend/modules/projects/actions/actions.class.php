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
        $this->projects = $this->getRoute()->getObjects();
        $this->projects = $this->arrayChunk($this->projects->getData());
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
