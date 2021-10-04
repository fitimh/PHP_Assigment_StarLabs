<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamond Letter</title>
</head>
<body>
   

    
    <form method="get">
        Enter the limit letter A-Z: <input type="text" name="diamond">
        <button type="submit">DONE</button>
    </form>


<?php

if(isset($_GET['diamond'])) 
{
    $diamond = strtoupper($_GET['diamond']);
    $range = range('A', $diamond);
  // $range = range('A', $diamond);

// upper section
for ($row = 0; $row < count($range); $row++) 
{
    for ($spaces = 1; $spaces <= count($range) - $row; $spaces++) 
    {
        echo "&nbsp;&nbsp;";
    }
    for ($column = 0; $column <= $row; $column++) 
    {
        if ($column == 0 || $column == $row) 
        {
            echo $range[$row]."&nbsp;&nbsp;";
        }
        else 
        {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        }
    }
    echo '<br>';
}

$range = array_reverse($range);
// lower section
for ($row = 1; $row < count($range); $row++) 
{
    for ($spaces = 0; $spaces < $row; $spaces++) 
    {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    for ($column = 0; $column < count($range) - $row; $column++) 
    {
        if ($row == (count($range) - 1)) 
        {
            echo $range[$row]."&nbsp;&nbsp;";
        } 
        else if ($column == 0 || $column == (count($range) - $row) - 1) 
        {
            echo $range[$row]."&nbsp;&nbsp;&nbsp;";
        } 
        else 
        {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        ;
    }
    echo '<br>';
}

} 
    else 
    {
        echo 'please enter a character<br>';
    }

?>

</body>
</html>
