<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c)  Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license
 * 
*/
namespace Arikaim\Core\Interfaces\Job;

/**
 * Job output interface
 */
interface JobOutputInterface
{   
    /**
     * Add output item
     *
     * @param string $label
     * @param mixed $value
     * @param string|null $key
     * @return void
     */
    public function addOutput($label, $value, $key = null);

    /**
     * Get output
     *
     * @return array
     */
    public function getOutput();

    /**
     * Render output
     *
     * @return void
     */
    public function render();
}
