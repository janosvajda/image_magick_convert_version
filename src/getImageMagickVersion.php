<?php
/**
* Return by ImageMagick imconvert version number
* @author Janos Vajda
* @return string
*/
function getImagickVersion(){
    $imageconvert_version_string="";
    $version_number=null;
    $imageconvert_version_string = shell_exec("imconvert -version");

    if ($imageconvert_version_string){

        if (preg_match("#(\d+\.\d+(\.\d+)*)#", $imageconvert_version_string, $match)) {
            $version_number= str_replace('.', '', $match[1]);
        }
    }
return $version_number;
}