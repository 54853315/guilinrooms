<?php
/**
 * Created by PhpStorm.
 * User: konakona
 * $Id$
 * Date: 14-8-4
 * Time: 上午3:16$
 */
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Members extends Eloquent implements UserInterface, RemindableInterface
{

    use UserTrait, RemindableTrait;

    public $timestamps = false;
    protected $hidden = array('password', 'remember_token');
} 