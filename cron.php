<?php
//display errors encountered to aid in debugging code
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

//check if the uploaded directory exists, if not create uploaded directory
$directoryName = 'uploaded';

if(file_exists($directoryName)){
    
    echo $directoryName.' exists ';
    
    //check if the file contains csv files
    $files = glob("uploaded/*.csv");
    foreach($files as $file) {
      //file at this point is a csv file 
        
    }
}
else{
    echo 'false';
    mkdir("uploaded", 0700);
    //do nothing folder is empty
    end;
    
}






/*
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    $file = fopen('../index.php', 'r');
    $txt = array();
    while(){
        
            $txt[] = fread($file,100);
    }

    fclose($file);
    print_r($txt);
$dir    = '/Users/Beem';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

print_r($files1);
print_r($files2);*/
?>