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
 * Job log interface
 */
interface JobLogInterface
{   
    /**
     * Get log message
     *
     * @return string
     */
    public function getLogMessage();

    /**
     * Get log context
     *
     * @return array
     */
    public function getLogContext();
}
