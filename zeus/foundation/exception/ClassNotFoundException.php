<?php
namespace zeus\foundation\exception;

class ClassNotFoundException extends NestedException
{
	public function __construct ($message = null, $code = null, $previous = null) 
	{
		parent::__construct($message,$code,$previous);
	}
}