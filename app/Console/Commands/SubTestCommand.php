<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\Redis;
use Illuminate\Console\Command;

class SubTestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'redis:subscribe {message}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Testar inscrição no redis';

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
        $message = $this->argument('message');

        Redis::publish('twig-chanel', $message);

        // Redis::subscribe(['teste'], function ($message) {
        //     $this->info($message);
        // });

        return Command::SUCCESS;
    }
}
