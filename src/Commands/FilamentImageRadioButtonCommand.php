<?php

namespace Alkoumi\FilamentImageRadioButton\Commands;

use Illuminate\Console\Command;

class FilamentImageRadioButtonCommand extends Command
{
    public $signature = 'filament-image-radio-button';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
