<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FailedJob
 *
 * @property $id
 * @property $uuid
 * @property $connection
 * @property $queue
 * @property $payload
 * @property $exception
 * @property $failed_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FailedJob extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['uuid', 'connection', 'queue', 'payload', 'exception', 'failed_at'];



}
