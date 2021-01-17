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

use Arikaim\Core\Collection\Properties;

/**
 * Properties config interface
 */
interface ConfigPropertiesInterface
{   
    /**
     * Create config properties array
     *  
     * @return void
    */
    public function createConfigProperties(): array;

    /**
     * Get config properties collection
     *
     * @return Properties
     */
    public function getConfigProperties(): Properties;

    /**
     * Init config properties
     *
     * @param Properties $properties
     * @return void
     */
    public function initConfigProperties(Properties $properties): void;

    /**
     * Get config properties collection
     *
     * @param Properties|array $properties
     * @return void
    */
    public function setConfigProperties($properties): void;
}
