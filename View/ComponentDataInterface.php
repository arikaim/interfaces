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
interface ComponentDataInterface 
{  
    /**
     * Get component data
     *
     * @param array $params
     * @return array
     */
    public function getData(array $params = []): array;
}
