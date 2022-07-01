<?php

namespace Avidianity\LaravelExtras\Logging\Handlers;

use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Monolog\Handler\AbstractProcessingHandler;
use Monolog\Level;
use Monolog\LogRecord;

class DatabaseHandler extends AbstractProcessingHandler
{
    /**
     * @param  int|Level  $level
     * @param  bool  $bubble
     */
    public function __construct($level = Level::Debug, $bubble = true)
    {
        parent::__construct($level, $bubble);
    }

    /**
     * Writes the record down to the log of the implementing handler
     *
     * @param  array  $record
     * @return void
     */
    protected function write(LogRecord $record): void
    {
        $content = [
            'id' => Str::uuid()->toString(),
            'channel'    => $record['channel'],
            'level_name' => $record['level_name'],
            'message'    => $record['message'],
            'context'    => json_encode($record['context']),
            'extra'      => json_encode($record['extra']),
            'datetime'   => Date::parse($record['datetime'])->toJSON(),
        ];

        DB::table('logs')->insert($content);
    }
}
