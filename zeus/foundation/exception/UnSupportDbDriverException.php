<?php
namespace zeus\foundation\exception;

class UnSupportDbDriverException extends NestedException
{
	public function __construct ($message = null, $code = null, $previous = null) 
	{
		parent::__construct($message,$code,$previous);
	}
}