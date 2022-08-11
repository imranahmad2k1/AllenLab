<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Arr;

class DateController extends Controller
{
    public function date(){
        $data =[];
        $tempdata=[];
        $classtime = 1;
        if($classtime == 1){
            $classtime = 60;
        }
        $intervalBetween = 15; //IN MINUTES
        $period = CarbonPeriod::since('13:00')->minutes($classtime+$intervalBetween)->until('21:00')->toArray();
        foreach ($period as $item){
            // array_push($data, $item->toTimeString(). '-' . $to->toTimeString());
            $tfirst = $item->toTimeString();
            $tsecond = $item->addMinutes($classtime)->toTimeString();
            $timeperiod = $tfirst. '-' .$tsecond;
            array_push($data, $timeperiod);
        }

        dd($data);
        // return view("date", ['date'=>$period]);


        // $start = Carbon::instance('2022-08-10 13:00:00');
        

    }
}
