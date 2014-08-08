<?php
/**
 * Created by PhpStorm.
 * User: konakona
 * $Id$
 * Date: 14-8-4
 * Time: 下午9:58$
 */

class Rooms extends Eloquent
{

    public static $createRules = array(
        'title' => 'required|min:5|max:30',
        'description' => 'required|min:5',
        'contact_info' => 'required|min:5',
        'size' => 'required|min:2|numeric',
        'price' => 'required|min:2|numeric',
        'type' => 'required|min:1|numeric|integer',
    );

    public $timestamps = false;
}