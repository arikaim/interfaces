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
 * Options interface
 */
interface OptionsStorageInterface
{    
    /**
     * Create option, if option exists return false
     *
     * @param string $key
     * @param mixed $value
     * @param boolean $autoLoad
     * @param string|null $extension
     * @return boolean
    */
    public function createOption($key, $value, $autoLoad = false, $extension = null);

    /**
     * Save option
     *
     * @param string $key
     * @param mixed $value
     * @param string $extension
     * @param int|null $autoLoad
     * @return bool
     */
    public function saveOption($key, $value, $extension = null, $autoLoad = null);

    /**
     * Return true if option name exist
     *
     * @param string $key
     * @return boolean
    */
    public function hasOption($key);

    /**
     * Get option
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
    */
    public function read($key, $default = null);

    /**
     * Remove option(s)
     *
     * @param string $key
     * @param string|null $extension
     * @return bool
    */
    public function remove($key = null, $extension = null);

    /**
     * Search for options
     *
     * @param string $searchKey
     * @param bool $compactKeys
     * @return array
    */
    public function searchOptions($searchKey, $compactKeys = false);

    /**
     * Load options
     *
     * @return array
    */
    public function loadOptions();

    /**
     * Get extension options
     *
     * @param string $extensioName
     * @return mixed
     */
    public function getExtensionOptions($extensioName);
}
