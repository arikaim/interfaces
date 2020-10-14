<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c)  Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license
 * 
*/
namespace Arikaim\Core\Interfaces;

/**
 * Routes interface
 */
interface RoutesInterface
{    
     /**
     * Get routes list for request method
     *
     * @param string $method
     * @return array
     */
    public function searchRoutes($method);
    
    /**
     * Save route redirect url
     *
     * @param string $method
     * @param string $pattern
     * @param string $url
     * @return boolean
     */
    public function setRedirectUrl($method, $pattern, $url);

    /**
     * Set routes status
     *
     * @param array     $filterfilter
     * @param integer   $status
     * @return boolean
     */
    public function setRoutesStatus($filter = [], $status);

    /**
     * Add api route
     *
     * @param string $method
     * @param string $pattern
     * @param string $handlerClass
     * @param string $handlerMethod
     * @param string $extension
     * @param integer|null $auth
     * @return bool
     */
    public function addApiRoute($method, $pattern, $handlerClass, $handlerMethod, $extension, $auth = null);

    /**
     * Return true if reoute exists
     *
     * @param string $method
     * @param string $pattern
     * @return boolean
     */
    public function has($method, $pattern);

    /**
     * Delete route
     *
     * @param string $method
     * @param string $pattern
     * @return bool
     */
    public function delete($method, $pattern);

    /**
     * Save route options
     *
     * @param string $method
     * @param string $pattern
     * @param array $options
     * @return boolean
     */
    public function saveRouteOptions($method, $pattern, $options);
}
