<?php

namespace App\Console\Commands;

use App\Mail\RemainderMail;
use App\Models\Advertiser;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class DailyMail extends Command
{
    /**
     * Create a new command instance.
     *
     * @return void
     */

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'daily email at 08:00 PM';

    /**
     * Execute the console command.
     *
     * @return int
     */

    public function handle()
    {
        Log::info("Cron is working fine!");
        $advertisers = Advertiser::whereHas('ads', function($query) {
            $query->where('start_date', Carbon::now()->addDay()->format('Y-m-d'));
        })->get();

        foreach ( $advertisers as $advertiser){
           Mail::to($advertiser->email)->send(new RemainderMail());
        }

    }
}
