<?php
/**
 * Created by PhpStorm.
 * User: konakona
 * $Id$
 * Date: 14-8-4
 * Time: 上午2:19$
 */

class HomeController extends BaseController
{

    public function showWelcome()
    {
        $sellRooms = Rooms::where("type", "=", 1)->take(10)->get(); //出售
        $rentRooms = Rooms::where("type", "=", 2)->take(10)->get(); //出租
        $sellRoomsCount = Rooms::where("type", "=", 1)->count();
        $rentRoomsCount = Rooms::where("type", "=", 2)->count();
        $cars = Cars::take(10)->get();
        $carCount = Cars::count();
        $this->layout->content = View::make('hello')->with(["sellRooms" => $sellRooms, "rentRooms" => $rentRooms, "sellRoomsCount" => $sellRoomsCount, "rentRoomsCount" => $rentRoomsCount, "cars" => $cars, "carCount" => $carCount]);
    }
}
