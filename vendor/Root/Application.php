<?php

namespace Root\System;

/**
 * Our Application file
 */
class Application
{
    /** @var array main config */
    protected $config = array();
    private $db;

    /**
     * "Start" the application:
     * Initialise the application
     *
     * @param array $config The config
     */
    public function __construct($config)
    {
        if( is_array($config) )
        {
            $this->config = $config;
        }   
    }

    /**
     * Load all models
     * @return Application
     */
    private function loadModels()
    {
        // Load all the model fles e haae to /modules/***/model
        if( $dir = opendir( MODPATH ) ) {
            while( $module = readdir( $dir ) ) {
                if (is_dir(MODPATH . DS . $module) && $module !== '.' && $module !== '..')
                {
                    $modelPath = MODPATH . DS . $module . DS . 'model';
                    if (is_dir($modelPath) && $modelDir = opendir($modelPath)) {
                        while( false !== ($file = readdir( $modelDir )) ){
                            if( !is_dir($modelPath . DS . $file) && $file !== '.' && $file !== '..' ){
                                require_once $modelPath . DS . $file;
                            }
                        }
                    }
                }
            }
            closedir($dir);
        } else {
            throw new \Exception("Impossible to access the model path.", 1);
        }
    }

    /**
     * Call a page from the request uri
     *
     * @param string $uri The requested uri
     * @return self
     * @throws \Exception
     */
    public function call($uri = null)
    {
        // If $uri is non existent we assign it the "/" path
        if(is_null($uri))
        {
            $uri = $_SERVER["REQUEST_URI"];
        }
        // If it is not a string then we throw an Exception
        if( !is_string($uri) )
        {
            throw new \Exception("The requested URI is not a string.", 1);
        }
        // We assign an associative array to $routes
        $routes = $this->config['routes'];

        /**
         * If the path exists in the config array
         */
        if(isset($routes[$uri]))
        {
            $index = $uri;
        } else if( isset( $routes['/'] ) ) {
            $index = '/';
        } else {
            $index = 0;
        }

        /**
         * We load the file from the call
         */
        if(isset($routes[$index]['call']))
        {
            require_once(MODPATH . DS . $routes[$index]['call']);
            $this->controller = new $routes[$index]['action']($routes[$index]['view']);
            
            // We call the controller function according to the request method.
            $this->controller->{"do" . $_SERVER["REQUEST_METHOD"]}($_SERVER);
            $this->controller->render();
        }
        return $this;
    }

    /**
     * Start an Application instance
     *
     * @return Application
     * @throws \Exception
     */
    public static function load()
    {
        $config = array();

        // Load all the config files we have to /config folder
        /*if( $dir = opendir( CONFPATH ) ){
            while( false !== ($file = readdir( $dir )) ){
                if( !is_dir(__DIR__ . DS . $file) && $file !== '.' && $file !== '..' ){
                    $config = array_merge_recursive(
                        $config,
                        include_once CONFPATH . DS . $file
                    );
                }
            }
            closedir($dir);
        } else {
            throw new \Exception("Impossible to apccess the config path.", 1);
        }*/

        // easiest version with only just 1 config file :
        $config = include_once CONFPATH . DS . 'routes.php';

        $app = new self($config);
        $app->loadModels();
        $app->call();
        return $app;
    }
}