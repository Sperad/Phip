<?php
namespace Phip\Http;

/**
* 
*/
class Response
{
	use HttpTrait;

	function getCode ()
	{
		return $this->code;
	}
}