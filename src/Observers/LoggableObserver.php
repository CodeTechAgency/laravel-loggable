<?php

namespace CodeTech\Loggable\Observers;

use CodeTech\Loggable\ModelLog\ModelLog;
use Illuminate\Database\Eloquent\Model;

class LoggableObserver
{
    /**
     * Listen to the created event.
     *
     * @param Model $model
     */
    public function created(Model $model): void
    {
        $this->saveLog($model, 'created');
    }

    /**
     * Listen to the updated event.
     *
     * @param Model $model
     */
    public function updated(Model $model): void
    {
        $this->saveLog($model, 'updated');
    }

    /**
     * Listen to the deleted event.
     *
     * @param Model $model
     */
    public function deleted(Model $model): void
    {
        $this->saveLog($model, 'deleted');
    }


    /**
     * Saves the action on the database.
     *
     * @param Model $model
     * @param string $action
     */
    private function saveLog(Model $model, string $action): void
    {
        ModelLog::create(
            [
                'loggable_id'   => $model->id,
                'loggable_type' => get_class($model),
                'operation'     => $action,
                'user_id'       => auth()->check() ? auth()->id() : null
            ]
        );
    }
}
