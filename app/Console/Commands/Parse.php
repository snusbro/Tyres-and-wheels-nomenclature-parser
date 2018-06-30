<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\ParseManufactures;

class parse extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parse {target}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        $target = $this->argument('target');
        $this->info('The target for parsing is '.$target);
        switch ($target){
            case 'manufactures':
                ParseManufactures::dispatch();
        }
    }
}
