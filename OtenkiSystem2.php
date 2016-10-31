<?php
while(1){

    $err_count = 0;
    $chek_flag = FALSE;
    #天気を獲得できたかチェック
    if(file_exists('log.txt')){
        $text = file_get_contents('log.txt');
        if($text == ''){
            exec('php OtenkiSystem.php');
            echo "false";
        }else{
            exec('php otenkiprocess.php' );
            echo "Success!";
        }
    }
    sleep(50);
}
?>
