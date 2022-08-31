<?php

//Alas, you have found the wizard fetching your precious data!


//This include basically is a short version of coding everything in one place. Don't worry, I have made one for the other database as well.
include('cutesmalldb.php');

//I initiated the database variable here.
$data = new Databases;

//Populated the $_POST array here
    $val = $_POST;


//This is my beautiful query, magnificent, pristine. I only catered it to the TLName but you can add more to the SQL query.
    $info = $data->query("select * from vehicle WHERE TLName = '".$val['TLName']."' ");

//This is me demanding mysqli to fetch the array and populate the $rows variable.
    $rows = mysqli_fetch_array($info);

//Over here i'm checking if I got something from that query.
    if(is_array($rows))
    {
        echo json_encode($rows);
    }
    else
    {
        echo '*plays sad music* no data found :(';
    }

