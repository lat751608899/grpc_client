<?php
namespace GrpcServer;
use Google\Protobuf\Internal\RepeatedField;
use \GrpcServer\traits\FieldTrait;
use GrpcServer\traits\ResponseCollection;

/**
 * Class GrpcResponse
 * @package GrpcServer
 */
class GrpcResponse implements \ArrayAccess,\Iterator,\Countable
{
	use FieldTrait,ResponseCollection;
	/**
	 * @var
	 */
	protected $container;
	/**
	 * @var array
	 */
	protected $field;
	/*
     * 索引游标
     */
	/**
	 * @var int
	 */
	private $_key = 0;

	private $status;

	/**
	 * GrpcResponse constructor.
	 * @param $container
	 * @param int $flags
	 */
	public function __construct($container, $status = '')
	{
		$this->container = $container;
		$this->status = $status;
		if(!$container instanceof \Google\Protobuf\Internal\Message){
			$container = $container[0];
		}
		$this->field = $this->getField(get_class($container));
	}

	/**
	 * @param mixed $offset
	 * @return bool|void
	 */
	public function offsetExists($offset)
	{
		return $this->checkField($offset);
	}

	/**
	 * @param mixed $offset
	 * @param mixed $value
	 */
	public function offsetSet($offset, $value)
	{
		// TODO: Implement offsetSet() method.
	}

	/**
	 * @param mixed $offset
	 */
	public function offsetUnset($offset)
	{
		// TODO: Implement offsetUnset() method.
	}

	/**
	 * @param mixed $offset
	 * @return array|\GrpcServer\GrpcResponse|mixed|string|void
	 */
	public function offsetGet($offset)
	{
		$data = $this->getDataByOffset($offset);
		if(is_int($offset)){
			return $data;
		}
		if(count($data) <= 0){
			return [];
		}
		$field = $this->messageField;
		if($field->getMessageType()){
			return new self($data);
		}
		return $data;
	}

	/**
	 * @return \GrpcServer\GrpcResponse|mixed
	 */
	public function current()
	{
		return new self($this->container[$this->_key]);
	}

	/**
	 *
	 */
	public function next()
	{
		$this->_key++;
	}

	/**
	 * @return int|mixed
	 */
	public function key()
	{
		return $this->_key;
	}

	/**
	 * @return bool
	 */
	public function valid()
	{
		return isset($this->container[$this->_key]);
	}

	/**
	 *
	 */
	public function rewind()
	{
		$this->_key = 0;
	}

	public function setKey($offset)
	{
		$this->_key = $offset;
	}
	/**
	 * @param $name
	 * @param $arguments
	 * @return array|\GrpcServer\GrpcResponse|void
	 */
	public function __call($name, $arguments)
	{
		if(strpos($name, 'get') === false){
			$offset = $name;
		}else{
			$offset = substr($name,3);
		}
		if(!$this->checkField($offset)){
			return;
		}
		$field = $this->field[$offset];
		$getter = $field->getGetter();
		$data = $this->container->$getter();
		if(count($data) <= 0){
			return [];
		}
		if($field->getMessageType()){
			return new self($data);
		}
		return $data;
	}

	public function wait()
	{
		return [$this,$this->status];
	}

	public function __get($offset)
	{
		if(strpos($offset, 'get') === false){ // 不是 get开头的
			$offset = 'get'.$offset;
		}
		return $this->$offset();
	}

	public function count()
	{
		if($this->container instanceof RepeatedField){
			return count($this->container);
		}
		throw new \Exception('only repeated fields support count');
	}
}