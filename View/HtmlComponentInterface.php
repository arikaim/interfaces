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

/**
 * Extension interface
 */
interface HtmlComponentInterface 
{  
    /**
     * Get view ref
     *
     * @return ViewInterface
     */
    public function getVeiw();
    
    /**
     * Render html component
     *
     * @param string $name
     * @param array $params
     * @param string|null $language
     * @return ComponentDataInterface
    */
    public function render($name, $params = [], $language = null);

    /**
     * Return component files
     *
     * @param string $name
     * @param string $fileType
     * @return array
     */
    public function getComponentFiles($name, $fileType = null);
}
