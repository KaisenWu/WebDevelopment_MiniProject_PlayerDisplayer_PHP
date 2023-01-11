<?php

class FileAgent {
    
    private static $contents;
    
    //Store the contents and file nameof the file in properties
    //This function should load the contents of the file
    public static function getFileContent($fileName) {
        try {
            $fileHandle = fopen($fileName,'r');
            if(!$fileHandle) {
                throw new Exception("Problem happened with $fileName");
            }
            self::$contents = fread($fileHandle,filesize($fileName));
            fclose($fileHandle);
        } catch(Exception $ex) {
            error_log($ex->getMessage);
        }
        return self::$contents;
    }
    
    
}

?>