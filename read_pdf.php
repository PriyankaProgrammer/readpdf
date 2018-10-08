<?php
    require('class.pdf2text.php');
    //convert array to variables
    extract($_POST);

    
    if(isset($submit))
    {
        //check the types of file
        if($_FILES['file']['type']=="application/pdf")
        {
        $a = new PDF2Text();
        $filename = $_FILES['file']['tmp_name'];
        $a->setFilename($filename); 
        $a->setUnicode(true);
        $a->decodePDF();
        $content =  $a->output(); 
        echo $content;
        }
        //if file types is not pdf
        else
        {
        echo "<p style='color:red;text-align:center'>Wrong file format </p>";
        }
    }	
?>