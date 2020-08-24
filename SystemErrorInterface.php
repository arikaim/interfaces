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
 * Extension interface
 */
interface SystemErrorInterface 
{  
    /**
     * Return error message
     *
     * @param Request $request
     * @param string|null $error
     * @return string
     */
    public function renderSystemErrors($request, $error = null);

    /**
     * Render page not found 
     *
     * @param array $data
     * @param string|null $language
     * @param string|null $extension
     * @return Component
    */
    public function renderPageNotFound($data = [], $language = null, $extension = null);

    /**
     * Render application error
     *
     * @param array $data
     * @param string|null $language
     * @param string|null $extension
     * @return Component
     */
    public function renderApplicationError($data = [], $language = null, $extension = null);

    /**
     * Get error
     *
     * @param string $errorCode
     * @param string|null $default
     * @param array $params
     * @return string
     */
    public function getError($errorCode, $params = [], $default = 'UNKNOWN_ERROR');
}
