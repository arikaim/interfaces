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

use Arikaim\Core\Interfaces\Content\ContentItemInterface;

/**
 * Content provider interface
 */
interface ContentProviderInterface
{   
    const TEXT_TYPE    = 'text';
    const IMAGE_URL    = 'image.url';
    const NUMBER_TYPE  = 'number';
    const IMAGE_BINARY = 'image.binary';
    const URL_TYPE     = 'url';
    const FILE_PATH    = 'file.path';
    const FILE_URL     = 'file.url';

    /**
     * Get provider name
     *
     * @return string
     */
    public function getProviderName(): string;

    /**
     * Get provider category
     *
     * @return string|null
     */
    public function getProviderCategory(): ?string;

    /**
     * Get content
     *
     * @param string $id  Id, Uuid or content name slug
     * @return ContentItemInterface|null
     */
    public function getContent(string $id): ?ContentItemInterface;

    /**
     * Get content type
     *    
     * @return string
     */
    public function getContentType(): string;

    /**
     * Get content list
     *
     * @param string|null $category
     * @param integer $page
     * @param integer $perPage
     * @return array ContentItemInterface
     */
    public function getContentList(?string $category, int $page = 1, int $perPage = 20): array;
}
