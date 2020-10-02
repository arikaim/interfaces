<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c)  Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license
 * 
*/
namespace Arikaim\Core\Interfaces\View;

use  Arikaim\Core\Interfaces\View\HtmlComponentInterface;

/**
 * Extension interface
 */
interface HtmlPageInterface extends HtmlComponentInterface
{  
    /**
     * Get current template name
     *
     * @return string|null
     */
    public function getCurrentTemplate();
    
    /**
     * Return library files
     *
     * @return array
     */
    public function getLibraryFiles();

    /**
     * Return template files
     *
     * @return array
     */
    public function getTemplateFiles();

    /**
     * Return current css frameowrk
     *
     * @param string $templateName
     * @return array
     */
    public function getFramework($templateName);

    /**
     * Return current page language
     *
     * @return string
     */
    public function getLanguage();

    /**
     * Create
     *
     * @param string $name
     * @param array $params
     * @param string|null $language
     * @param boolean $withOptions
     * @return use Arikaim\Core\Interfaces\View\HtmlComponentInterface;
    */
    public function createHtmlComponent($name, $params = [], $language = null, $withOptions = true);
    
    /**
     * Load page
     *
     * @param Response $response
     * @param string $name
     * @param array|object $params
     * @param string|null $language
     * @return Response
    */
    public function load($response, $name, $params = [], $language = null);

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
