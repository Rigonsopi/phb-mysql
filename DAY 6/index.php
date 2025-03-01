<?php
//file manipulation

//fopen-e perdorim per me hap ni file:
//$my_file = fopen("ds.txt", "w");

//fclose-e perdorim per me mbyll ni file:

//fread-e perdorim per me e lexu ni file:
// $myfile_name = "ds.txt";
// $my_file = fopen( $myfile_name, "r");
// $my_size = filesize( $myfile_name);
// $my_filedata = fread( $my_file, $my_size);

//feof-e perdorim per me printu gjithcka me ni file
// $file = fopen("ds.txt", "r");
// while(!feof($file)){
//     echo fgets($file). "<br>"
// }

// fclose($file);

//fwrite-e perdorim per me na kriju ni tekst te ri ne nje file tonin ekzistues
// $myfile = fopen("ds.txt", "w");
// $my_text = "Digital School /n";
// fwrite($my_file, $my_text);

// w+ mode- na lejon me kriju nje file te ri
// $h = fopen("data.txt", "w+");
// fwrite($h, "Test 1");

//a+ mode- na lejon me shkrujt permbajtje/content me nje file ekzistues
// $h = fpen("data.txt", "a+");
// fwrite($h, "/n Add more lines to the file");
// flose($h);


//file_put_contents- eshte e njejt me fopen(), fwrite(), fclose()
file_put_contents("text.txt", "Add more text";);
echo file_get_contents("test.txt");



?>