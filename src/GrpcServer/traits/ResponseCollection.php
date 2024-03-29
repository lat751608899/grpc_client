<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/6/6
 * Time: 10:56
 */

namespace GrpcServer\traits;

use Google\Protobuf\Internal\RepeatedField;

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

	public function toArray()
	{
		$res = [];
		foreach ($this->field as $field){
			$getter = $field->getGetter();
			$name = $field->getName();
			$data = $this->container->$getter();
			// 是 repeated 类型
			if($data instanceof RepeatedField){
                $new = [];
			    if ($data->count() > 0){
                    // 是 message 类型
                    if ($field->getMessageType()){
                        $data = new self($data);
                    }
                    foreach($data as $val){
                        $new[] = !is_object($val) ? $val : $val->toArray();
                    }
                }
				$res[$name] = $new;
			}else{
                if ($field->getMessageType() && is_object($data)){ // message 类型的 递归传递 (有message类型 返回的不是对象的 要加上判断)
                    $data = (new self($data))->toArray();
                }
				$res[$name] = $data;
			}
		}
		return $res;
	}
}