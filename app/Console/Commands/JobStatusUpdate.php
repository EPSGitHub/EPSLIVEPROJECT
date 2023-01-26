<?php

namespace App\Console\Commands;

use App\Models\career;
use Illuminate\Support\Carbon;
use Illuminate\Console\Command;

class JobStatusUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'career:JobStatusUpdate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Career post status update';

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

    //   $currentDate = Carbon::now()->format('Y-m-d');
      $today = date("Y-m-d");
      $today_time = strtotime($today);
      $jobpost= career::where('status',1)->get();
      foreach($jobpost as $post){

      $expire_time = strtotime($post->apply_deadline);

     /*   $postdate = Carbon::parse($post->apply_deadline);
       echo $postdate;
       $day = $postdate ->diffInDays($currentDate);
       echo $day;
       if($day>0) */




       if($expire_time < $today_time ){

        Career::where('id',$post->id)->update(['status' => 0]);

       }


      }
    }
}
