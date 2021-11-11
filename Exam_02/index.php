<?php

    // Creates a file named hello_there
    $file = fopen("hello_there.php", "w");
    $text = '<?php

    //This is a comment

    echo "This is a test page!";
    echo "Exam number two!";

    //This is the end of a comment
    ';

    // Writes to the text to the file
    fwrite($file, $text);
    fclose($file);
?>