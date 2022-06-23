<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Hello world from HTML</h1> 
   <?php
        $author = 'faisal';
   ?>

   <h1>Hello world from 
        <?php echo $author; ?>
    </h1>

    <?php
        // string basics
        $str = "Hello world from MIST";

        echo strlen($str) . '<br />';
        
        echo str_word_count($str) . '<br />';

        // arrays
        $students = [
            'faisal' => 22,
            'aziz' => 23,
            'tamim' => 24
        ];

        foreach($students as $name=>$roll)
        {
            echo "name : " . $name . ' ,' . 'Roll: ' . $roll . '<br />';
        }
    
    ?>
    <!-- <php date time code -->
    <?php 
    date_default_timezone_set('America/los_Angeles');
    echo date('Y-M-D h:m:sa');
    
    
    ?>
    <br>
<?php include 'footer.php' ?>

</body>
</html>