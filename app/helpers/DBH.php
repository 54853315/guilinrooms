<?php
/**
 * short for Database Helper
 * Created by PhpStorm.
 * User: konakona
 * $Id$
 * Date: 14-8-9
 * Time: 上午1:27$
 */

class DBH
{

    public static function q($all = true)
    {
        $queries = DB::getQueryLog();

        if ($all == false) {
            $last_query = end($queries);
            return $last_query;
        }

        return $queries;
    }

} 