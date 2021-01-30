<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c)  Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license
 * 
*/
namespace Arikaim\Core\Interfaces\Events;

/**
 * Subscriber Registry Interface
 */
interface SubscriberRegistryInterface 
{
    /**
     * Save subscriber info. 
     *
     * @param string $eventName
     * @param string $class
     * @param string|null $extension
     * @param integer $priority
     * @param string|null $hadnlerMethod
     * @return bool
     */
    public function addSubscriber(
        string $eventName, 
        string $class, 
        ?string $extension = null, 
        int $priority = 0, 
        ?string $hadnlerMethod = null
    ): bool;

    /**
     * Get subscribers list
     *
     * @param array $filter
     * @return array
     */
    public function getSubscribers(array $filter = []): array;

    /**
     * Delete subscribers.
     *
     * @param array $filter
     * @return bool
     */
    public function deleteSubscribers(array $filter);
}
