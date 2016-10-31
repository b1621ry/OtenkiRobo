<?php
while(1){
    //echo exec('php Command/OtenkiGetCommand.php');
    //echo exec('php Command/OtenkiProcessCommand.php');
    if(file_exists('log.txt')){
        echo exec('rm log.txt');
    }
    echo exec('java -jar WISclient.jar');
    sleep(50);
}

?>
