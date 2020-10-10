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
 * Compile email markup code interface
 */
interface EmailCompilerInterface 
{  
    /**
     * Compile email markup code
     *
     * @param string $code
     * @param array $params
     * @return string
     */
    public function compile($code,array $params = []);
}
