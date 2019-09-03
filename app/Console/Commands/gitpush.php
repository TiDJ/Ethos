<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class gitpush extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'github:push';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'fait un push sur github';

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


        $output = shell_exec("git add *");
        echo $output;

        $output = shell_exec('git commit -m "automatic commit from cli" ');
        echo $output;

        $output = shell_exec("git push origin master");
        echo $output;
    }
}
