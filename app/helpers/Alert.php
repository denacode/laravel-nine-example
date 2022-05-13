<?php

if(!function_exists('alert')) {
    function alert(string $type = 'danger', string $message = 'Server Error'){
        return [
            'type'=> $type,
            'message'=> $message
        ];
    }
}
