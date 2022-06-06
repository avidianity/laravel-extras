<?php

namespace Avidianity\LaravelExtras\Traits;

use Avidianity\LaravelExtras\Models\Notification;
use Illuminate\Notifications\Notifiable as BaseNotifiable;

trait Notiable
{
    use BaseNotifiable;

    /**
     * Get the entity's notifications.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function notifications()
    {
        return $this->morphMany(Notification::class, 'notifiable')->latest();
    }
}
