<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

class readTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'salesconnect:read';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will read all saleconnects tasks and papulate into DTiC App.';

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
        $i = Config::get('constants.salesconnect');
        Log::info($i);
        $mailer = app()['mailer'];
        Mail::send([], [], function ($message) {
          $message->to('sivaramapandianbtech@gmail.com')
            ->subject('test email')
            // here comes what you want            
            ->setBody('<h1>Hi, welcome user!</h1>', 'text/html'); // for HTML rich messages
        });        
    }
}
