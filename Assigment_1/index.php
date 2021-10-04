<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .container
        {
            margin: 46px 0px 0px 100px;
            overflow: hidden;

        }
        table 
        {
            width: 42%;
            
        
        }
        table, th , td 
        {
            border: 1px solid grey;
            border-collapse: collapse;
            padding: 10px;
            font-family: arial;
        }
        
        th 
        {
            background: darkblue;
            color: white;
            text-align: left;
        }
        
        table tr:nth-child(odd) 
        {
            background-color: #dbdbdb;
        }
        table tr:nth-child(even) 
        {
            background-color: #dbdbdb;
        }
    </style>
</head>
<body>
    <h1 class="d-flex justify-content-center">Rezultati i kerkuar</h1>

    <div class="d-flex justify-content-center container">
        
        <?php
            $student_data = file_get_contents("db.json");
            $data = json_decode($student_data, true);
            
            /*Initializing temp variable to design table dynamically*/
            $temp = "<table>";
            
            /*Defining table Column headers depending upon JSON records*/
            $temp .= "<tr><th>Name</th>";
            $temp .= "<th>Age</th>";
            $temp .= "<th>School</th>";
            
            /*Dynamically generating rows & columns*/
            for($i = 0; $i < sizeof($data["students"]); $i++)
            {
            $temp .= "<tr>";
            $temp .= "<td>" . $data["students"][$i]["name"] . "</td>";
            $temp .= "<td>" . $data["students"][$i]["age"] . "</td>";
            $temp .= "<td>" . $data["students"][$i]["school"] . "</td>";
            $temp .= "</tr>";
            }
            
            /*End tag of table*/
            $temp .= "</table>";
            
            /*Printing temp variable which holds table*/
            echo $temp;
        ?>
    </div>

    
</body>
</html>