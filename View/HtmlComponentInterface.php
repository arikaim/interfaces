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
     * @param string $language
     * @param bool $withOptions
     * @return ComponentDescriptorInterface
    */
    public function render(string $name, array $params = [], string $language, bool $withOptions = true); 

    /**
     * Return component files
     *
     * @param string $name
     * @param string|null $fileType
     * @return array
     */
    public function getComponentFiles(string $name, ?string $fileType = null): array;
}
