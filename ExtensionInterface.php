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
interface ExtensionInterface 
{  
    /**
     *  Executed after install extension.
     *
     * @return void
     */
    public function onAfterInstall();

    /**
     * Executed before install extension.
     *
     * @return void
     */
    public function onBeforeInstall();

    /**
     * Executed after uninstall extension.
     *
     * @return void
     */
    public function onAfterUnInstall();

    /**
     * Executed before uninstall extension.
     *
     * @return void
     */
    public function onBeforeUnInstall();

    /**
     * Install extension callback
     *
     * @return mixed
     */
    public function install();
}
