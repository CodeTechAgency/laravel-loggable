<?php

namespace CodeTech\Loggable\Traits;

use CodeTech\Loggable\ModelLog\ModelLog;
use CodeTech\Loggable\Observers\LoggableObserver;

trait Loggable
{
    /**
     * Boot the soft model log trait for a model.
     *
     * @return void
     */
    public static function bootLoggable()
    {
        static::observe(LoggableObserver::class);
    }


    /*
    |--------------------------------------------------------------------------
    | Relations
    |--------------------------------------------------------------------------
    */

    /**
     * Get all logs.
     *
     * @return Relation
     */
    public function logs()
    {
        return $this->morphMany(ModelLog::class, 'loggable');
    }


    /*
    |--------------------------------------------------------------------------
    | Features
    |--------------------------------------------------------------------------
    */

    /**
     * Get this record's author.
     *
     * @return |null
     */
    public function getAuthor()
    {
        return $this->logs()->created()->first()->user ?? null;
    }
}
