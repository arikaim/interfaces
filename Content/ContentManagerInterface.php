<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c)  Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license
 * 
*/
namespace Arikaim\Core\Interfaces\Content;

use Arikaim\Core\Interfaces\Content\ContentProviderInterface;

/**
 * Content manager interface
 */
interface ContentManagerInterface
{   
    /**
     * Get content providers list
     *
     * @return array
     */
    public function getProviders(?string $categry): array;

    /**
     * Register content provider
     *
     * @param object $provider
     * @return boolean
     */
    public function registerProvider($provider): bool;

    /**
     * Un register content provider
     *
     * @param string $name
     * @return boolean
     */
    public function unRegisterProvider(string $name): bool;

    /**
     * Get content provider
     * 
     * @param string $name
     * @return ContentProviderInterface|null
     */
    public function provider(string $name): ?ContentProviderInterface;
}
