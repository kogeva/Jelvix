<?php

/**
 * JelvixProjectsTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class JelvixProjectsTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object JelvixProjectsTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('JelvixProjects');
    }

    public static function  getThreeRecentProjects()
    {
        $query = Doctrine_Query::create()
            ->select()
            ->from('JelvixProjects jp')
            ->addOrderBy('jp.id DESC')
            ->limit(3);
        return $query->execute();
    }
}