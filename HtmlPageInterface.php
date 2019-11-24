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
 * Extension interface
 */
interface HtmlPageInterface 
{  
    /**
     * Render page
     *
     * @param string $name
     * @param array $params
     * @param string|null $language
     * @return ComponentInterface
    */
    public function render($name, $params = [], $language = null);

    /**
     * Get properties
     *
     * @return Collection
    */
    public function properties();

    /**
     * Load system error page.
     *
     * @param array $data
     * @param string|null $language
     * @param string|null $extension
     * @return Response
     */
    public function loadSystemError($data = [], $language = null, $extension = null);

    /**
     * Load page not found error page.
     *
     * @param array $data
     * @param string|null $language
     * @param string|null $extension
     * @return Response
     */
    public function loadPageNotFound($data = [], $language = null, $extension = null);

    /**
     * Load page
     *
     * @param string $name
     * @param array|object $params
     * @param string|null $language
     * @return Response
    */
    public function load($name, $params = [], $language = null, $response = null);

    /**
     * Get current page name
     *
     * @return string
     */
    public static function getCurrent();

    /**
     * Get head properties
     *
     * @return PageHead
     */
    public function head();

    /**
     * Get page fles
     *
     * @return array
    */
    public function getPageFiles();

    /**
     * Get component files
     *
     * @return array
     */
    public function getComponentsFiles();
}
