<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ApClearCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ap:clear {--F|force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Resets the whole database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $force = $this->option('force', false);
        if (env('APP_ENV','local') != 'local' && !$force) {
            $this->line("Aborting.");
        } else {
            $this->line("Clearing...");
            Artisan::call('migrate:fresh --seed --force');
        }
        return 0;
    }
}
