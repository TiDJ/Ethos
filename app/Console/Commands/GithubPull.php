<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GithubPull extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'github:pull';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'récupére la dernière version depuis le dépôt';

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
        $output = shell_exec('git pull ');
        echo $output;

        $output = shell_exec('npm update');
        echo $output;

        $output = shell_exec('composer update');
        echo $output;

        $output = shell_exec('php artisan migrate:fresh');
        echo $output;

        $output = shell_exec('php artisan db:seed');
        echo $output;
    }
}
