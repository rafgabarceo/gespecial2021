<?php 

    $dir = "../images/vox";
    $files = array_diff(scandir($dir), array('.', '..'));    
    natsort($files);
    $images = array_values($files); 
    $responses = fopen("responses.txt", "r");
    //print_r(parseText($responses));
    fclose($responses);
?>

<?php 
    /* 
    
    If the the current number is odd, then it will assume that the current line is the name. 
    If the parser encounters ", it will fill a variable known as _response_. Once it encounters another ", it will denote
    the end of the response. 
    
    */
    function parseText($file){
        $counter = 0;
        $ans = array();
        $names = array();
        $currName = ""; 
        $currRes = "";
        while(!feof($file)){
            if($counter%2 != 0){
                $currName = fgets($file);
                array_push($names, $currName);
                $counter++;
            } else {
                $currRes = fgets($file);
                array_push($ans, $currRes);
                $counter++;
            }
        }

        $package = array(
            "names" => $ans, 
            "answers" => $names
        );
        return $package;
    }
?>