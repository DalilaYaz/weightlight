

<?php

class log
{
    private $Fp; // stocker la ressource lors de l'ouverture de fichier


    public function __construct($path)
    {
        $this->fp = fopen($path, 'a');
    }

    function writeLog($string)
    {
        fwrite($this->fp, $string);
    }

    function __destruct()
    {
        fclose($this->fp);
    }

    public static  function directWritelog($path, $string, $level, $code)
    {
        $fp = fopen($path, 'a');
        $string = date('d/m/Y H:i:s') . " - " . $level . " - " . $string . " - " . $code . "\n";
        fwrite($fp, $string);
        fclose($fp);
    }
}


?>