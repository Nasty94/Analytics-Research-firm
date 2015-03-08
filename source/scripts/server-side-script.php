<?php
require_once('./libSSE/src/libsse.php');//include the library

//create the event handler
class YourEventHandler extends SSEEvent {
    public function update(){
        //Here's the place to send data
        return 'Hello, world!';
    }
    public function check(){
        //Here's the place to check when the data needs update
        return true;
    }
}

$sse = new SSE();//create a libSSE instance
$sse->addEventListener('LoggedInUsers',new YourEventHandler());//register your event handler
$sse->start();//start the event loop
?>