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

/**
 * Content item interface
 */
interface ContentItemInterface
{   
    /**
     * Get item content
     *
     * @return mixed
     */
    public function getContent();

    /**
     * Get content item title
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Get content item id
     *
     * @return int|string
     */
    public function getId();
}
