<?php
    try
    {   
        $host = "localhost"; //server name
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "inspectionslist";

        //Creating connection to database
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        //Checking connection
        if (mysqli_connect_error())
        {
            die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
        }
        else
        {
            //echo "Connected successfully";
        }
    }
    catch(Exception $e)
    {
        echo "ERROR.";
    }
?>

<!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Notifications</title>
            <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"-->
            <link rel = "stylesheet" href = "Template.css">
                    <!--Give webpage a favicon icon-->
        <link rel = "icon" type = "image/x-icon" href = "Favicon Images/favicon.ico">
        <!--Icons Link-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,700,1,-25" />

            <style>
                table
                {
                    border-collapse: collapse;
                }

                table tr:hover
                {
                    background-color: #ccc;
                    border: 1px solid #ccc;
                }

                button
            {
                font-family: 'League Spartan';
                width: 100%;
                height: 100%;
                border: 5px solid rgb(52, 51, 51);
                background-color:  #FFD500;
                padding: 20px;
                color: rgb(52, 51, 51);
                text-align: center;
                cursor:pointer;
            }

            button:hover
            {
                border: 5px solid #FFD500;
                background-color:  rgb(52, 51, 51);
                padding: 20px;
                color: #FFD500;
                font-weight: bold;
            }

            button:active
            {
                border: 5px solid rgb(52, 51, 51);
                background-color:  #FFD500;
                padding: 20px;
                color: rgb(52, 51, 51);
            }

            .material-icons
            {
                color: rgb(52, 51, 51);
                font-size: 60px;
                transition-property: color;
            }

            button:hover .material-icons
            {
                color: #FFD500;
                font-size: 70px;
            }

            button:active .material-icons
            {
                color: rgb(52, 51, 51);
                font-size: 70px;
            }

                .BackButton
            {
                margin: 1%;
                position: absolute;
                width:max-content;
                height: max-content;
                border-radius: 50%;
                color: rgb(0, 0, 0);
                background-color: #ED1C24;
                border: 5px solid black;
            }

            .BackButton .material-symbols-rounded
            {
                color:rgb(0, 0, 0);
                font-size: 40px;
            }

            .BackButton:hover
            {
                position:absolute;
                background-color: #ED1C24;
                border: 5px solid black;
            }

            .BackButton:hover .material-symbols-rounded
            {
                color:rgb(0, 0, 0);
                font-size: 50px;
            }

            .BackButton:active
            {
                background-color: rgb(172, 10, 10);
            }

            tbody tr td
            {
                font-size: 12px;
                font-weight: lighter;
            }

            .Circle
            {
                text-align: center;
                margin-left: auto;
                margin-right: auto;
                width: 10px;
                height: 10px;
                border-radius: 20px;
                background-color: grey;
                padding: 5px;
            }

            #GreenCircle
            {
                background-color: green;
            }

            #YellowCircle
            {
                background-color: #e1ec14;
            }

            #OrangeCircle
            {
                background-color: #f37221;
            }

            #RedCircle
            {
                background-color: #ED1C24;
            }
            </style>
        </head>
        <body>
            <button type = "button" class = "BackButton" onclick = "document.location = 'SelectFunctionsRTEngineer.html'">
                <i class="material-symbols-rounded">reply</i>
            </button>
            <div class = "Heading" style = "font-size: 60px; display: block; padding-top: 3%; padding-bottom: 3%;">NOTIFICATIONS</div>
            <?php
                $SELECT = 'SELECT * FROM inspectionscollection';
                $AllDatabaseData = mysqli_query($conn, $SELECT);
                $NoOfRowsInDatabase = mysqli_num_rows($AllDatabaseData);
                if ($NoOfRowsInDatabase > 0)
                {
                    echo "<table style = 'text-align: center; margin-left: auto; margin-right: auto;'>";
                        echo "<thead>";
                            echo "<tr style = 'background-color: #FBCE07; border: none;'>";
                                echo "<th>DATE & TIME</th>";
                                echo "<th>LOCATION</th>";
                                echo "<th>TL NAME</th>";
                                echo "<th>INSPECTION SUMMARY</th>";
                                echo "<th>IMAGES</th>";
                                echo "<th>COMPLIANCE STATUS</th>";
                                echo "<th>ACTION</th>";
                                echo "<th>NOTIFIED PARTIES</th>";
                            echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                            //Printing all rows in the database
                            while ($DatabaseEntry = mysqli_fetch_assoc($AllDatabaseData))
                            {
                                if (!empty($DatabaseEntry['Notify']))
                                {
                                    echo "<tr>";
                                        echo "<td>" . $DatabaseEntry['DateAndTime'] . "</td>";
                                        echo "<td>" . $DatabaseEntry['Location'] . "</td>";
                                        echo "<td>" . $DatabaseEntry['TLName'] . "</td>";
                                        echo nl2br("<td>" . $DatabaseEntry['InspectionSummary'] . "</td>");
                                        echo "<td>" . $DatabaseEntry['Images'] . "</td>";
                                        $ComplianceStatusString = $DatabaseEntry['ComplianceStatus'];
                                        if ($ComplianceStatusString == "Fit")
                                        {
                                            echo "<td><div class = 'Circle' id = 'GreenCircle'></div><br>" . $DatabaseEntry['ComplianceStatus'] . "</td>";
                                        }
                                        else if ($ComplianceStatusString == "DelayableConcerns")
                                        {
                                            echo "<td><div class = 'Circle' id = 'YellowCircle'></div><br>" . $DatabaseEntry['ComplianceStatus'] . "</td>";
                                        }
                                        else if ($ComplianceStatusString == "PreviousConcernsNotRectified")
                                        {
                                            echo "<td><div class = 'Circle' id = 'OrangeCircle'></div><br>" . $DatabaseEntry['ComplianceStatus'] . "</td>";
                                        }
                                        else if ($ComplianceStatusString == "Critical")
                                        {
                                            echo "<td><div class = 'Circle' id = 'RedCircle'></div><br>" . $DatabaseEntry['ComplianceStatus'] . "</td>";
                                        }
                                        else
                                        {
                                            echo "<td><div class = 'Circle'></div><br>" . $DatabaseEntry['ComplianceStatus'] . "</td>";
                                        }
                                        $ActionStatusString = $DatabaseEntry['ActionStatus'];
                                        if ($ActionStatusString == "Allow")
                                        {
                                            echo "<td><div class = 'Circle' id = 'GreenCircle'></div><br>" . $DatabaseEntry['ActionStatus'] . "</td>";
                                        }
                                        else if ($ActionStatusString == "AllowWithWarning")
                                        {
                                            echo "<td><div class = 'Circle' id = 'YellowCircle'></div><br>" . $DatabaseEntry['ActionStatus'] . "</td>";
                                        }
                                        else if ($ActionStatusString == "RefuseLoading")
                                        {
                                            echo "<td><div class = 'Circle' id = 'RedCircle'></div><br>" . $DatabaseEntry['ActionStatus'] . "</td>";
                                        }
                                        else
                                        {
                                            echo "<td><div class = 'Circle'></div><br>" . $DatabaseEntry['ActionStatus'] . "</td>";
                                        }
                                        echo nl2br("<td>" . $DatabaseEntry['Notify'] . "</td>");
                                    echo "</tr>";
                                }
                            }
                        echo "</tbody>";
                    
                    echo "</table>";
                }
                else
                {
                    echo "0 entries in database.";
                }
                
                $conn->close(); //Closing established connections
            ?>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        </body>
    </html>