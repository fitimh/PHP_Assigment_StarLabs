
<?php
class Caesar
{
    
    public function encrypt($text, $nr)
    {
        $alphabet = range('a', 'z');
        array_unshift($alphabet, " ");
        
        $result = "";
        for($i = 0; $i < strlen($text); $i++) 
        {
            $test = ($text[$i] != " ") ? strtolower($text[$i]) : $text[$i];
            if(in_array($test, $alphabet))  // shikojm nese shkronja jonë gjendet ne alfabet
            {
                $key = array_search($test, $alphabet);
                $newKey = ($key + $nr) % 26;
                if(ctype_upper($text[$i])) 
                    $result .= strtoupper($alphabet[$newKey]);
                else 
                    $result .= $alphabet[$newKey];
            } 
            else
            {
                $result .= $text[$i];
            }
        }
        return $result;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assigment_3</title>
    <style>
        form 
        {
            width:100$;
            padding:15px;
            
        }
        input[type="text"] 
        {
            width: 19%;
            height: 31px;
            margin-left:22px;
        
        
        }
        input[type="number"] 
        {
            width: 19%;
            height: 31px;

        }
        input {
            margin:0  0 20px 0px;
        }
        button 
        {
            width: 100px;
            height: 41px;
            background: #17b747;
            border: none;
            border-radius: 5px;
            margin: 0 0 0 126px;
        }
        span#text
        {
            font-size: 20px;
           
        }
        span#shift
        {
            font-size: 20px;
            border-width:100px;
            border-bottom:1px solid red;
        }
        hr 
        {
            width: 30%;
            float: left;
        }
        strong 
        {
            font-size: 25px;
            border: 1px solid #cbcbcb;
            border-radius: 6px;
            background: #ededed;
            padding: 2px;
        }
        #cihper
        {
            font-size:25px;
            color: gray;
            font-weight: bolder;
        }
    </style>
</head>
<body>
  
    <form method="get">
        <span>Enter the string:</span> <input type="text" name="str"><br>
        <span>Enter number shift:</span> <input type="number" name="nr"><br>
        <button type="submit">DONE</button>
    </form>

    
    <?php 
        if(isset($_GET['str'],$_GET['nr'])) 
        { 
            $text = $_GET['str'];
            $nr = (isset($_GET['nr']) && !empty($_GET['nr'])) ? $_GET['nr'] : 1; 

            $caesar = new Caesar;
            $res = $caesar->encrypt($text, $nr);

            echo "<span id=text>Text: $text </span>";
            echo "<br>";
            echo "<span id=shift>\nShift: $nr </span>";
            echo "<br>";
            echo "<hr>";
            echo "<br>";
            echo "<span id=cihper>Rezultati:</span><strong>$res</strong>";
        }
    ?>
  
</body>
</html>
