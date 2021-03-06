<?php

/**
 * JelvixNewsTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class JelvixNewsTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object JelvixNewsTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('JelvixNews');
    }

    public static function getLastFiveNews()
    {
        $query = Doctrine_Query::create()
            ->select()
            ->from('JelvixNews jn')
            ->addOrderBy('jn.id DESC')
            ->limit(5);

        return $query->execute();
    }

    public static function getQueryActiveNews()
    {
        $query = Doctrine_Query::create()
            ->from('JelvixNews jn')
            ->where('jn.is_active = 1')
            ->addOrderBy('jn.created_at DESC');

        return $query;
    }
}