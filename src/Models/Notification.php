<?php

namespace Avidianity\LaravelExtras\Models;

use Avidianity\LaravelExtras\Traits\HasUuid;
use Illuminate\Notifications\DatabaseNotification;

class Notification extends DatabaseNotification
{
    use HasUuid;
}
