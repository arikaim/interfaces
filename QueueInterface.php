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

/**
 * Queue interface
 */
interface QueueInterface
{    
    /**
     * Add job to queue
     *
     * @param JobInterface $job
     * @return boolean
    */
    public function add(JobInterface $job);
    
    /**
     * Remove job from queue
     *
     * @param JobInterface $job
     * @return boolean
    */
    public function remove(JobInterface $job);
    
    /**
     * Execute job
     *
     * @param JobInterface $job
     * @return bool
    */
    public function execute(JobInterface $job);

    /**
     * Get next job
     * @return JobInterface
     */
    public function getNext();

    /**
     * Remove all jobs from queue
     * 
     * @param bool $completed - remove completed jobs only 
     * @param string extension - remove extension jobs only
     * @return void
    */
    public function clear($completed = true, $extension = null);

    /**
     * Get jobs list
     *
     * @param bool $recurring
     * @param boolean $scheduled
     * @param string $extension
     * @return array
    */
    public function getJobs($recurring = false, $scheduled = false, $extension = null);

    /**
     * Return true if job exist in queue
     *
     * @param JobInterface $job
     * @return boolean
     */
    public function hasJob(JobInterface $job);

    /**
     * Get recurring jobs
     *
     * @param string|null $extension
     * @return array
     */
    public function getRecuringJobs($extension = null);

    /**
    * Get scheduled jobs
    *
    * @param string|null $v
    * @return array
    */
    public function getScheduledJobs($extension = null);

    /**
     * Get all jobs due
     * 
     * @return array
     */
    public function getJobsDue();
}
