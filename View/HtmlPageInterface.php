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

use Arikaim\Core\Interfaces\View\HtmlComponentInterface;

/**
 * Extension interface
 */
interface HtmlPageInterface extends HtmlComponentInterface
{  
    /**
     * Render application error
     *
     * @param array $data
     * @param string|null $language    
     * @param string|null $templateName    
     * @return ComponentDescriptorInterface
     */
    public function renderApplicationError(array $data = [], $language = null, $templateName = null);

    /**
     * Render system error(s)
     *
     * @param array $data
     * @param string|null $language  
     * @param string|null $templateName    
     * @return ComponentDescriptorInterface
     */
    public function renderSystemError(array $data = [], $language = null, $templateName = null);

    /**
     * Render page not found 
     *
     * @param array $data
     * @param string|null $language 
     * @param string|null $templateName     
     * @return Component
    */
    public function renderPageNotFound(array $data = [], $language = null, $templateName = null);

    /**
     * Get current template name
     *
     * @return string|null
     */
    public function getCurrentTemplate();
    
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
     * Get head properties
     *
     * @return PageHead
     */
    public function head();

    /**
     * Get component files
     *
     * @return array
     */
    public function getComponentsFiles();
}
