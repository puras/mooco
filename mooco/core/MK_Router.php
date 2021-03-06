<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 


///////////////////////////////////////////////////////////////////////////
// map_resources()                              --> Return all routes
// map_resources($controller_name)              --> Map default restful routes
// map_resources($method, $pattern, $replace)   --> Add a custom route
///////////////////////////////////////////////////////////////////////////

function map_resources() {

    static $routes = array();
    $arg_num = func_num_args();

    if (0 == $arg_num) {
        return $routes;
    } elseif (1 == $arg_num) {
        $controller = func_get_arg(0);

        $routes['GET']["{$controller}"]                 = "{$controller}/index";
        $routes['GET']["{$controller}/new"]             = "{$controller}/new_form";
        $routes['GET']["{$controller}/(:id)"]           = "{$controller}/show/$1";
        $routes['GET']["{$controller}/(:id)/edit"]      = "{$controller}/edit/$1";

        $routes['POST']["{$controller}"]                = "{$controller}/create";
        $routes['PUT']["{$controller}/(:id)"]           = "{$controller}/update/$1";
        $routes['DELETE']["{$controller}/(:id)"]        = "{$controller}/delete/$1";
        // $controllers = $ci->inflector->pluralize($controller);

        // $routes['GET']["{$controllers}"]                 = "{$controller}/index";
        // $routes['GET']["{$controllers}/new"]             = "{$controller}/new_form";
        // $routes['GET']["{$controllers}/(:id)"]           = "{$controller}/show/$1";
        // $routes['GET']["{$controllers}/(:id)/edit"]      = "{$controller}/edit/$1";

        // $routes['POST']["{$controllers}"]                = "{$controller}/create";
        // $routes['PUT']["{$controllers}/(:id)"]           = "{$controller}/update/$1";
        // $routes['DELETE']["{$controllers}/(:id)"]        = "{$controller}/delete/$1";
    } elseif (2 == $arg_num) {
        $args = func_get_args();
        $pattern = $args[0];
        $replace = $args[1];

        $routes['GET'][$pattern] = $replace;
        $routes['POST'][$pattern] = $replace;
        $routes['PUT'][$pattern] = $replace;
        $routes['DELETE'][$pattern] = $replace;
    } elseif (3 == $arg_num) {
        $args = func_get_args();
        $method = $args[0];
        $pattern = $args[1];
        $replace = $args[2];

        $routes[$method][$pattern] = $replace;
    }
}

class MK_Router extends CI_Router {
    public function __construct() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['_method'])) {
            $_SERVER['REQUEST_METHOD'] = strtoupper($_POST['_method']);
        } elseif (isset($_SERVER['HTTP_X_HTTP_METHOD_OVERRIDE'])) {
            $_SERVER['REQUEST_METHOD'] = strtoupper($_SERVER['HTTP_X_HTTP_METHOD_OVERRIDE']);
        }

       parent::__construct();
    }

    function _parse_routes() {
        $rest_routes = map_resources();

        if (empty($rest_routes) && count($this->routes) == 1) {
            $this->_set_request($this->uri->segments);
            return ;
        }

        $uri = implode('/', $this->uri->segments);
        if (isset($this->routes[$uri])) {
            $this->_set_request(explode('/', $this->routes[$uri]));
            return ;
        }

       $request_method = $_SERVER['REQUEST_METHOD'];
       $routes = (isset($rest_routes[$request_method]) && $rest_routes[$request_method]) ? $rest_routes[$request_method] : array();
       foreach ($routes as $pattern => $replace) {
         $pattern = str_replace(':id', '[^/]+', $pattern);
         $pattern = str_replace(':any', '.+', $pattern);
         $pattern = str_replace(':num', '[0-9]+', $pattern);
         $pattern = str_replace(':uuid', '[a-zA-Z0-9]{8}(-[a-zA-Z0-9]{4}){3}-[a-zA-Z0-9]{12}', $pattern);

         if (preg_match("#^{$pattern}$#", $uri)) {
          if (strpos($replace, '$') !== FALSE && strpos($pattern, '(') !== FALSE) {
              $replace = preg_replace("#^{$pattern}$#", $replace, $uri);
          }

          $this->_set_request(explode('/', $replace));
          return ;
         }
       }

       parent::_parse_routes();
    }
}

/* End of file MK_Router.php */
/* Location: ./application/core/MK_Router.php */