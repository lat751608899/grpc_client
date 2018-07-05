<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/6/15
 * Time: 12:09
 */

namespace GrpcServer;

class Event
{
	public static $events = [];

	public static function add($name,$callback)
	{
		if(!is_callable($callback)){
			return;
		}
		if(isset(self::$events[$name])){
			self::$events[$name] = array_merge(self::$events[$name],[$callback]);
		}else{
			self::$events[$name] = [$callback];
		}
	}

	public static function listen($name, &$param = '')
	{
		if(!isset(self::$events[$name])){
			return;
		}
		foreach (self::$events[$name] as $event){
			call_user_func_array($event, [$param]);
		}
	}
}