<?php
class GetExecutionTime{
    private $time_start     =   0;
    private $time_end       =   0;
    private $time           =   0;
    public function __construct(){
        $this->time_start= microtime(true);
    }
    public function __destruct(){
        $this->time_end = microtime(true);
        $this->time = $this->time_end - $this->time_start;
        // echo '<pre>Loaded in '. round($this->time,4) .' seconds</pre>';
        $_SESSION['script_loadtime'] = round($this->time,4) . ' seconds';
        // echo '<pre>Loaded in '. $this->time .' seconds</pre>';
    }
}