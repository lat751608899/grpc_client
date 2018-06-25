<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/6/6
 * Time: 10:56
 */

namespace GrpcServer\traits;

trait ResponseCollection
{
	public function column($value,$index = '')
	{
		if(!isset($this->field[$value]) || ($index && !isset($this->field[$index]))){
			throw new \Exception('column '.$value.' or '.$index.' not found');
		}
		$field = $this->field[$value];
		$getter = $field->getGetter();
		$indexGetter = '';
		if($index){
			$inexField = $this->field[$index];
			$indexGetter = $inexField->getGetter();
		}
		$array = [];
		foreach ($this->container as $val){
			$v = $val->$getter();
			if($indexGetter){
				$array[$val->$indexGetter()] = $v;
			}else{
				$array[] = $v;
			}
		}
		return $array;
	}
}