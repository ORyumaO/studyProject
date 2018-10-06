<?php
class validation 
{
    public static function isEmpty($request)
    {
        if(empty($request)){
            $request = null;
            return $request;
        } else {
            return $request;
        }
    }

}