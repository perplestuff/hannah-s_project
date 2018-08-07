<?php
class route
{
	protected $routes = [];
	public function __construct($file)
	{
        $this->routes = require $file;
	}
	public function direct($uri)
	{
		if (array_key_exists($uri, $this->routes)) {
			return $this->routes[$uri];
		}
		throw new Exception('No route defined for this URI.');
	}
}
class requests
{
	public static function uri()
	{
		return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
	}
}
?>
