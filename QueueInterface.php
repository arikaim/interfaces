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

use Arikaim\Core\Interfaces\Job\JobInterface;
use Closure;

/**
 * Queue interface
 */
interface QueueInterface
{    
    /**
     * Add job
     *
     * @param JobInterface $job
     * @param string|null $extension
     * @param bool $disabled
     * @return bool
    */
    public function addJob(JobInterface $job,?string $extension = null,bool $disabled = false): bool;
    
    /**
     * Delete job
     *
     * @param string|integer $id Job id, uiid
     * @return bool
     */
    public function deleteJob($id): bool;
    
    /**
     * Delete all jobs
     *    
     * @return boolean
     */
    public function clear();

    /**
     * Get next job
     *
     * @return JobInterface|null
     */
    public function getNext(): ?JobInterface;

    /**
     * Run job
     *
     * @param string|int $name
     * @param Closure|null $onJobProgress
     * @param Closure|null $onJobProgressError
     * @return JobInterface|null
     */
    public function run($name,?Closure $onJobProgress = null,?Closure $onJobProgressError = null): ?JobInterface;
    
    /**
     * Execute job
     *
     * @param JobInterface $job
     * @param Closure|null $onJobProgress
     * @param Closure|null $onJobProgressError
     * @return JobInterface|null
    */
    public function executeJob(JobInterface $job,?Closure $onJobProgress = null,?Closure $onJobProgressError = null): ?JobInterface;

    /**
     * Get all jobs due
     * 
     * @return array|null
     */
    public function getJobsDue(): ?array;

    /**
     * Get jobs
     *
     * @param array $filter
     * @return array
     */
    public function getJobs(array $filter = []): ?array;

    /**
     * Get recurring jobs
     *
     * @param string|null $extension
     * @return array|null
     */
    public function getRecuringJobs(?string $extension = null): ?array;

    /**
     * Create job obj from jobs queue
     *
     * @param string|integer $name
     * @return JobInterface|null
     */
    public function create($name): ?JobInterface;

    /**
     * Delete jobs
     *
     * @param array $filter
     * @return boolean
     */
    public function deleteJobs(array $filter = []): bool;

    /**
     * Find job by name, id or uuid
     *
     * @param string|integer $id Job id, uiid or name
     * @return array|null
     */
    public function getJob($id): ?array;
}
