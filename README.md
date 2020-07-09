<!DOCTYPE html>
<html>

<head>
<title>50 States</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body style = "background-color:lightgray">

<h1 style = "text-align:center">The United States</h1>

<table><tr>


<?php

$state_list = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");



    $counter = 0;
foreach ($state_list as $state){


    $state = preg_replace('/\s+/', '_', $state);

    $my_image = "http://lesson.jaxcode.webfactional.com/stateflags/".$state.".svg.png";

    $myfile = fopen("pages/".strtolower($state).".html", "w") or die("Unable to open file!");
    
    echo "<td><a href = 'pages/".strtolower($state).".html'><img src = '".$my_image."'><br>".$state."</a></td>";



$txt = <<<EOT
<img src="$my_image"><br>
    $state
    <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    
    <body>
    
    <nav class = "navbar navbar-expand-lg navbar-dark bg-dark container">
        <a class = "navbar-brand" href = "#">United States</a>
        <a class = "navbar-brand" href = "#">Canada</a>
        <a class = "navbar-brand" href = "#">Mexico</a>
    </nav>
    
  
    <iframe src = "https://en.wikipedia.org/wiki/$state" width="100%" height ="10000" frameborder = "0"></iframe>
            
    
    
    </body>
    </html>
EOT;


    // Write to the page 
    fwrite($myfile, $txt); 

    // Close page
    fclose($myfile);

    $counter++;

    if($counter == 5) {

        echo '</tr><tr>';
        $counter = 0;
    }
}



?>

</tr></table>

</body>
</html>
