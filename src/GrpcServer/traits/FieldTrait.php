<?php
namespace GrpcServer\traits;

use Google\Protobuf\Internal\DescriptorPool;

/**
 * Trait FieldTrait
 * @package GrpcServer\traits
 */
trait FieldTrait{

	protected $messageField;
	protected $fields;
	protected $replaceStr = ['-', '_'];

	/**
	 * @param $class
	 * @return array
	 */
	public function getField($class)
	{
		if(isset($this->fields[$class])){
			return $this->fields[$class];
		}
		$pool = DescriptorPool::getGeneratedPool();
		$fields = $pool->getDescriptorByClassName($class)->getField();
		return $this->fields[$class] = $this->dealField($fields);
	}

	/**
	 * @param $fields
	 * @return array
	 */
	public function dealField($fields)
	{
		$fieldData = [];
		foreach ($fields as $field){
			$fieldData[$field->getName()] = $field;
		}
		return $fieldData;
	}

	/**
	 * 驼峰转下划线
	 * @param $str
	 * @return string
	 */
	public function humpToLine($str)
	{
		$str = preg_replace_callback('/([A-Z]{1})/', function ($match){
			return '_'.strtolower($match[1]);
		},$str);
		return trim($str,'_');
	}

	protected function getDataByOffset($offset)
	{
		if(!$this->checkField($offset) && $offset < 0){
			return;
		}
		if(is_int($offset)){
			$this->setKey($offset);
			$data = '';
			if ($this->valid()){
				$data = $this->current();
				$this->rewind();
			}
			return $data;
		}
		$field = $this->messageField =  $this->field[$offset];
		$getter = $field->getGetter();
		$data = $this->container->$getter();

		return $data;
	}

	protected function checkField(&$offset)
	{
		if(is_int($offset)){
			return true;
		}
		$data = array_filter(array_keys($this->field),function ($item) use ($offset){
			$field = strtolower(str_replace($this->replaceStr, array_fill(0,count($this->replaceStr),''),$item));
			$offset = strtolower(str_replace($this->replaceStr, array_fill(0,count($this->replaceStr),''),$offset));
			if($field == $offset){
				return true;
			}
			return false;
		});
		if(empty($data) || count($data) > 1){
			return false;
		}
		$offset = current($data);
		return true;
	}
}