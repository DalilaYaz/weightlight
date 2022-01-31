<?php
//log: événement qui est gardé en mémoire
    class log{

        private $fp;

        function __construct($path)
        {
            $this->fp = fopen($path, 'a');
        }

        function writeLog($string){
            fwrite($this->fp, $string);
        }
        function __destruct()
        {
            fclose($this->fp);   
        }

         static function directWriteLog($path, $string, $level, $code){
            $fp=fopen($path, 'a');
            $string = date('d/m/Y H:i:s'). " - ".$code. " - ".$level. " - ". $string ."\n" ;
            fwrite($fp, $string);
            fclose($fp);
        }

    }

?>