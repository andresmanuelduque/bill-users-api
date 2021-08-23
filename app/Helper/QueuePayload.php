<?php


namespace App\Helper;

class QueuePayload
{

    public static function build($eventName,$data)
    {
        return [
            "eventName"=>$eventName,
            "data"=>$data
        ];
    }

}
