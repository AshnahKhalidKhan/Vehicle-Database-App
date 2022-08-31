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
            <title>Inspection Collection</title>
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

                td select
                {
                    margin-left: auto;
                    margin-right: auto;
                    text-align: center;
                    width: 100%;
                }

                #SubmitButton
                {
                    background-color: #FBCE07;
                }

                #SubmitButton:hover
                {
                    background-color: #ED1C24;
                    color: black;
                    border: 5px solid black;
                }

                #TLNameSelection, #LocationSelection, #ComplianceStatusSelection, #ActionStatusSelection
                {
                    visibility: hidden;
                }

                #CategoryTable:hover tr
                {
                    background-color: white;
                    border: none;
                }

                td input
                {
                    width: 100%;
                    height: 30%;
                }
            </style>
            <script>
                function DisplaySelection()
                {
                    var x0 = document.getElementById("TLName");
                    var x1 = document.getElementById("TLNameSelection");
                    if (x0.checked == true)
                    {
                        x1.style.visibility = 'visible';
                    }
                    else
                    {
                        x1.style.visibility = 'hidden';
                    }
                    x0 = document.getElementById("Location");
                    x1 = document.getElementById("LocationSelection");
                    if (x0.checked == true)
                    {
                        x1.style.visibility = 'visible';
                    }
                    else
                    {
                        x1.style.visibility = 'hidden';
                    }
                    x0 = document.getElementById("ComplianceStatus");
                    x1 = document.getElementById("ComplianceStatusSelection");
                    if (x0.checked == true)
                    {
                        x1.style.visibility = 'visible';
                    }
                    else
                    {
                        x1.style.visibility = 'hidden';
                    }
                    x0 = document.getElementById("ActionStatus");
                    x1 = document.getElementById("ActionStatusSelection");
                    if (x0.checked == true)
                    {
                        x1.style.visibility = 'visible';
                    }
                    else
                    {
                        x1.style.visibility = 'hidden';
                    }
                }             
            </script>
        </head>
        <body>
            <button type = "button" class = "BackButton" onclick = "document.location = 'SelectFunctionsRTCC.html'">
                <i class="material-symbols-rounded">reply</i>
            </button>
            <div class = "Heading" style = "font-size: 60px; display: block; padding-top: 3%; padding-bottom: 3%;">INSPECTIONS COLLECTION</div>
            <form action = "" method = "POST">
                <table id = "CategoryTable">
                    <thead>
                        <th colspan = "5">Select Category To View By</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type = "checkbox" id = "TLName" name = "TLName" onclick = "DisplaySelection()">
                                <label for = "TLName">TL Name</label>
                            </td>
                            <td>
                                <input type = "checkbox" id = "Location" name = "Location" onclick = "DisplaySelection()">
                                <label for = "Location">Location</label>
                            </td>
                            <td>
                                <input type = "checkbox" id = "ComplianceStatus" name = "ComplianceStatus" onclick = "DisplaySelection()">
                                <label for = "ComplianceStatus">Compliance Status</label>
                            </td>
                            <td>
                                <input type = "checkbox" id = "ActionStatus" name = "ActionStatus" onclick = "DisplaySelection()">
                                <label for = "ActionStatus">Action</label>
                            </td>
                            <td>
                                <button type = "submit" id = "SubmitButton" name = "SubmitButton">
                                    FILTER
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td id = "TLNameSelection">
                                <input type = "text" id = "SelectTLName" name = "SelectTLName" placeholder = "Enter TL Name (NOTE: case-sensitive field).">
                            </td>
                            <td id = "LocationSelection">
                                <select id = "SelectLocation" name = "SelectLocation" div class = "Input">
                                    <option></option>
                                    <option value = "KMR">KMR</option>
                                    <option value = "DHP">DHP</option>
                                    <option value = "VHR">VHR</option>
                                    <option value = "BHK">BHK</option>
                                    <option value = "MCH">MCH</option>
                                    <option value = "MHK">MHK</option>
                                    <option value = "CKL">CKL</option>
                                    <option value = "TJB">TJB</option>
                                    <option value = "SKP">SKP</option>
                                    <option value = "SWL">SWL</option>
                                    <option value = "SSH">SSH</option>
                                    <option value = "QUETTA">QUETTA</option>
                                </select>
                            </td>
                            <td id = "ComplianceStatusSelection">
                                <select id = "SelectComplianceStatus" name = "SelectComplianceStatus" div class = "Input">
                                    <option></option>
                                    <option value = "Fit">Fit</option>
                                    <option value = "Delayable Concerns">Delayable Concerns</option>
                                    <option value = "Previous Concerns Not Rectified">Previous Concerns Not Rectified</option>
                                    <option value = "Critical">Critical</option>
                                </select>
                            </td>
                            <td id = "ActionStatusSelection">
                                <select id = "SelectActionStatus" name = "SelectActionStatus" div class = "Input">
                                    <option></option>
                                    <option value = "Allow">Allow</option>
                                    <option value = "Allow With Warning">Allow With Warning</option>
                                    <option value = "Refuse Loading">Refuse Loading</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <br/>

            <?php
                $SELECT = "SELECT * FROM inspectionscollection";
                if (isset($_POST['SubmitButton']))
                {
                    $WHERE = " WHERE ";
                    if (!empty($_POST['SelectTLName']))
                    {
                        $WHERE .= "TLName = '" . $_POST['SelectTLName'] . "'";
                    }
                    if (!empty($_POST['SelectLocation']))
                    {
                        if ($WHERE != " WHERE ")
                        {
                            $WHERE .= " AND ";
                        }
                        $WHERE .= "Location = '" . $_POST['SelectLocation'] . "'";
                    }
                    if (!empty($_POST['SelectComplianceStatus']))
                    {
                        if ($WHERE != " WHERE ")
                        {
                            $WHERE .= " AND ";
                        }
                        $WHERE .= "ComplianceStatus = '" . $_POST['SelectComplianceStatus'] . "'";
                    }
                    if (!empty($_POST['SelectActionStatus']))
                    {
                        if ($WHERE != " WHERE ")
                        {
                            $WHERE .= " AND ";
                        }
                        $WHERE .= "ActionStatus = '" . $_POST['SelectActionStatus'] . "'";
                    }
                    if ($WHERE != " WHERE ")
                    {
                        $SELECT .= $WHERE;
                    }            
                }
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
                                    else if ($ComplianceStatusString == "Delayable Concerns")
                                    {
                                        echo "<td><div class = 'Circle' id = 'YellowCircle'></div><br>" . $DatabaseEntry['ComplianceStatus'] . "</td>";
                                    }
                                    else if ($ComplianceStatusString == "Previous Concerns Not Rectified")
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
                                    else if ($ActionStatusString == "Allow With Warning")
                                    {
                                        echo "<td><div class = 'Circle' id = 'YellowCircle'></div><br>" . $DatabaseEntry['ActionStatus'] . "</td>";
                                    }
                                    else if ($ActionStatusString == "Refuse Loading")
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