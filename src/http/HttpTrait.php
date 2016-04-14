<?php 
namespace Phip\Http;

trait HttpTrait 
{
	protected $params = [];
	protected $headers = [];
	protected $code = 200;
	protected $method = 'GET';
	protected $body = '';
}