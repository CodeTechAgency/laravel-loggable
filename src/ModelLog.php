<?php

namespace CodeTech\Loggable\ModelLog;

use CodeTechCMS\Modules\Users\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ModelLog extends Model
{
    protected $fillable = [
        'loggable_id',
        'loggable_type',
        'operation',
        'user_id'
    ];


    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    */

    /**
     * Scope a query to only include created operations.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeCreated(Builder $query)
    {
        return $query->where('operation', 'created');
    }

    /**
     * Scope a query to only include updated operations.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeUpdated(Builder $query)
    {
        return $query->where('operation', 'updated');
    }

    /**
     * Scope a query to only include deleted operations.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeDeleted(Builder $query)
    {
        return $query->where('operation', 'deleted');
    }


    /*
    |--------------------------------------------------------------------------
    | Relations
    |--------------------------------------------------------------------------
    */

    /**
     * Get the owning log model.
     */
    public function loggable()
    {
        return $this->morphTo();
    }

    /**
     * Get the user that owns this model log.
     *
     * @return User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
