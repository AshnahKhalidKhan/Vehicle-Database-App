<?php
    try
    {   
        $host = "localhost"; //server name
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "cutesmalldb";

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
            <title>Vehicle Profiles</title>
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

                #TLNameSelection, #HaulierNameSelection, #GVSFlexiSelection, #RigidArticulatedSelection, #VehicleTotalCapacitySelection, #TotalCompartmentsSelection, #BottomTopLoadingSelection, #ComplianceStatusSelection, #ActionStatusSelection
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

            table th, table td
            {
                text-align: center;
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
                    x0 = document.getElementById("HaulierName");
                    x1 = document.getElementById("HaulierNameSelection");
                    if (x0.checked == true)
                    {
                        x1.style.visibility = 'visible';
                    }
                    else
                    {
                        x1.style.visibility = 'hidden';
                    }
                    x0 = document.getElementById("GVSFlexi");
                    x1 = document.getElementById("GVSFlexiSelection");
                    if (x0.checked == true)
                    {
                        x1.style.visibility = 'visible';
                    }
                    else
                    {
                        x1.style.visibility = 'hidden';
                    }
                    x0 = document.getElementById("RigidArticulated");
                    x1 = document.getElementById("RigidArticulatedSelection");
                    if (x0.checked == true)
                    {
                        x1.style.visibility = 'visible';
                    }
                    else
                    {
                        x1.style.visibility = 'hidden';
                    }
                    x0 = document.getElementById("VehicleTotalCapacity");
                    x1 = document.getElementById("VehicleTotalCapacitySelection");
                    if (x0.checked == true)
                    {
                        x1.style.visibility = 'visible';
                    }
                    else
                    {
                        x1.style.visibility = 'hidden';
                    }
                    x0 = document.getElementById("TotalCompartments");
                    x1 = document.getElementById("TotalCompartmentsSelection");
                    if (x0.checked == true)
                    {
                        x1.style.visibility = 'visible';
                    }
                    else
                    {
                        x1.style.visibility = 'hidden';
                    }
                    x0 = document.getElementById("BottomTopLoading");
                    x1 = document.getElementById("BottomTopLoadingSelection");
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
            <button type = "button" class = "BackButton" onclick = "document.location = 'SelectFunctionsRTEngineer.html'">
                <i class="material-symbols-rounded">reply</i>
            </button>
            <div class = "Heading" style = "font-size: 60px; display: block; padding-top: 3%; padding-bottom: 3%;">VEHICLE PROFILES</div>
            <form action = "" method = "POST">
                <table id = "CategoryTable">
                    <thead>
                        <th colspan = "10">Select Category To View By</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type = "checkbox" id = "TLName" name = "TLName" onclick = "DisplaySelection()">
                                <br/><label for = "TLName">TL Name</label>
                            </td>
                            <td>
                                <input type = "checkbox" id = "HaulierName" name = "HaulierName" onclick = "DisplaySelection()">
                                <br/><label for = "HaulierName">Hauiler Name</label>
                            </td>
                            <td>
                                <input type = "checkbox" id = "GVSFlexi" name = "GVSFlexi" onclick = "DisplaySelection()">
                                <br/><label for = "GVSFlexi">GVS/Flexi</label>
                            </td>
                            <td>
                                <input type = "checkbox" id = "RigidArticulated" name = "RigidArticulated" onclick = "DisplaySelection()">
                                <br/><label for = "RigidArticulated">Rigid/Articulated</label>
                            </td>
                            <td>
                                <input type = "checkbox" id = "VehicleTotalCapacity" name = "VehicleTotalCapacity" onclick = "DisplaySelection()">
                                <br/><label for = "VehicleTotalCapacity">Total Capacity</label>
                            </td>
                            <td>
                                <input type = "checkbox" id = "TotalCompartments" name = "TotalCompartments" onclick = "DisplaySelection()">
                                <br/><label for = "TotalCompartments">Total Compartments</label>
                            </td>
                            <td>
                                <input type = "checkbox" id = "BottomTopLoading" name = "BottomTopLoading" onclick = "DisplaySelection()">
                                <br/><label for = "BottomTopLoading">Bottom/Top Loading</label>
                            </td>
                            <td>
                                <input type = "checkbox" id = "ComplianceStatus" name = "ComplianceStatus" onclick = "DisplaySelection()">
                                <br/><label for = "ComplianceStatus">Compliance Status</label>
                            </td>
                            <td>
                                <input type = "checkbox" id = "ActionStatus" name = "ActionStatus" onclick = "DisplaySelection()">
                                <br/><label for = "ActionStatus">Action</label>
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
                            <td id = "HaulierNameSelection">
                                <select id = "SelectHaulierName" name = "SelectHaulierName" div class = "Input">
                                    <option></option>
                                    <option value = "Ali&Company">ALI & COMPANY</option>
                                    <option value = "BadshahTransportCo">BADSHAH TRANSPORT CO</option>
                                    <option value = "Fakhr-e-KhushabTransport">FAKHR-E-KHUSHAB TRANSPORT</option>
                                    <option value = "MAAwan&Co">M A AWAN & CO</option>
                                    <option value = "MAbbasLogistics">M ABBAS LOGISTICS</option>
                                    <option value = "RanaEnterprises">RANA ENTERPRISES</option>
                                    <option value = "Rasch(Private)Limited">RASCH (PRIVATE) LIMITED</option>
                                    <option value = "SaleemCarriageCompany">SALEEM CARRIAGE COMPANY</option>
                                    <option value = "SanghiTransportCompany">SANGHI TRANSPORT COMPANY</option>
                                    <option value = "SyedAkbarKhan">SYED AKBAR KHAN</option>
                                    <option value = "TristarTransportPvtLtd">TRISTAR TRANSPORT PVT LTD</option>
                                </select>
                            </td>
                            <td id = "GVSFlexiSelection">
                                <select id = "SelectGVSFlexi" name = "SelectGVSFlexi" div class = "Input">
                                    <option></option>
                                    <option value = "GVS">GVS</option>
                                    <option value = "Flexi">Flexi</option>
                                </select>
                            </td>
                            <td id = "RigidArticulatedSelection">
                                <select id = "SelectRigidArticulated" name = "SelectRigidArticulated" div class = "Input">
                                    <option></option>
                                    <option value = "Rigid">Rigid</option>
                                    <option value = "Articulated">Articulated</option>
                                </select>
                            </td>
                            <td id = "VehicleTotalCapacitySelection">
                                <input type = "number" id = "SelectVehicleTotalCapacity" name = "SelectVehicleTotalCapacity" placeholder = "Integer value only">
                            </td>
                            <td id = "TotalCompartmentsSelection">
                                <select id = "SelectTotalCompartments" name = "SelectTotalCompartments" div class = "Input">
                                    <option></option>
                                    <option value = "3">3</option>
                                    <option value = "4">4</option>
                                    <option value = "5">5</option>
                                </select>
                            </td>
                            <td id = "BottomTopLoadingSelection">
                                <select id = "SelectBottomTopLoading" name = "SelectBottomTopLoading" div class = "Input">
                                    <option></option>
                                    <option value = "Bottom-Loading">Bottom-Loading</option>
                                    <option value = "Top-Loading">Top-Loading</option>
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
                $SELECT = "SELECT * FROM vehicle";
                if (isset($_POST['SubmitButton']))
                {
                    $WHERE = " WHERE ";
                    if (!empty($_POST['SelectTLName']))
                    {
                        $WHERE .= "TLName = '" . $_POST['SelectTLName'] . "'";
                    }
                    if (!empty($_POST['SelectHaulierName']))
                    {
                        if ($WHERE != " WHERE ")
                        {
                            $WHERE .= " AND ";
                        }
                        $WHERE .= "HaulierName = '" . $_POST['SelectHaulierName'] . "'";
                    }
                    if (!empty($_POST['SelectGVSFlexi']))
                    {
                        if ($WHERE != " WHERE ")
                        {
                            $WHERE .= " AND ";
                        }
                        $WHERE .= "GVSFlexi = '" . $_POST['SelectGVSFlexi'] . "'";
                    }
                    if (!empty($_POST['SelectRigidArticulated']))
                    {
                        if ($WHERE != " WHERE ")
                        {
                            $WHERE .= " AND ";
                        }
                        $WHERE .= "RigidArticulated = '" . $_POST['SelectRigidArticulated'] . "'";
                    }
                    if (!empty($_POST['SelectVehicleTotalCapacity']))
                    {
                        if ($WHERE != " WHERE ")
                        {
                            $WHERE .= " AND ";
                        }
                        $WHERE .= "VehicleTotalCapacity = '" . $_POST['SelectVehicleTotalCapacity'] . "'";
                    }
                    if (!empty($_POST['SelectTotalCompartments']))
                    {
                        if ($WHERE != " WHERE ")
                        {
                            $WHERE .= " AND ";
                        }
                        $WHERE .= "TotalCompartments = '" . $_POST['SelectTotalCompartments'] . "'";
                    }
                    if (!empty($_POST['SelectBottomTopLoading']))
                    {
                        if ($WHERE != " WHERE ")
                        {
                            $WHERE .= " AND ";
                        }
                        $WHERE .= "BottomTopLoading = '" . $_POST['SelectBottomTopLoading'] . "'";
                    }                    
                    if (!empty($_POST['SelectComplianceStatus']))
                    {
                        if ($WHERE != " WHERE ")
                        {
                            $WHERE .= " AND ";
                        }
                        $WHERE .= "CurrentComplianceStatus = '" . $_POST['SelectComplianceStatus'] . "'";
                    }
                    if (!empty($_POST['SelectActionStatus']))
                    {
                        if ($WHERE != " WHERE ")
                        {
                            $WHERE .= " AND ";
                        }
                        $WHERE .= "LastActionStatus = '" . $_POST['SelectActionStatus'] . "'";
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
                                echo "<th>TL<br>NAME</th>";
                                echo "<th>HAULIER<br>NAME</th>";
                                echo "<th>VEHICLE<br>TYPE</th>";
                                echo "<th>TOTAL<br>CAPACITY</th>";
                                echo "<th>TOTAL<br>COMPARTMENTS</th>";
                                echo "<th>EXPIRY<br>DATES</th>";
                                echo "<th>LAST<br>INSPECTION<br>DATE</th>";
                                echo "<th>CURRENT<br>COMPLIANCE<br>STATUS</th>";
                                echo "<th>LAST<br>ACTION<br>TAKEN</th>";
                            echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                            //Printing all rows in the database
                            while ($DatabaseEntry = mysqli_fetch_assoc($AllDatabaseData))
                            {
                                echo "<tr>";
                                    echo "<td>" . $DatabaseEntry['TLName'] . "</td>";
                                    echo "<td>" . $DatabaseEntry['HaulierName'] . "</td>";
                                    echo "<td>" . $DatabaseEntry['GVSFlexi'] . "<br><br>"  . $DatabaseEntry['RigidArticulated'] . "<br><br>" . $DatabaseEntry['BottomTopLoading'] . "</td>";
                                    echo "<td>" . $DatabaseEntry['VehicleTotalCapacity'] . "</td>";
                                    echo "<td>" . $DatabaseEntry['TotalCompartments'] . "</td>";
                                    echo "<td>Calibration Test:<br>" . $DatabaseEntry['LastCalibrationTestExpiryDate'] . "<br><br>Explosives License:<br>" . $DatabaseEntry['ExplosivesLicenseExpiryDate'] . "<br><br>HydroTest:<br>" . $DatabaseEntry['LastHydroTestExpiryDate'] . "</td>";                               
                                    echo "<td>" . $DatabaseEntry['LastInspectionDate'] . "</td>";
                                    $ComplianceStatusString = $DatabaseEntry['CurrentComplianceStatus'];
                                    if ($ComplianceStatusString == "Fit")
                                    {
                                        echo "<td><div class = 'Circle' id = 'GreenCircle'></div><br>" . $DatabaseEntry['CurrentComplianceStatus'] . "</td>";
                                    }
                                    else if ($ComplianceStatusString == "Delayable Concerns")
                                    {
                                        echo "<td><div class = 'Circle' id = 'YellowCircle'></div><br>" . $DatabaseEntry['CurrentComplianceStatus'] . "</td>";
                                    }
                                    else if ($ComplianceStatusString == "Previous Concerns Not Rectified")
                                    {
                                        echo "<td><div class = 'Circle' id = 'OrangeCircle'></div><br>" . $DatabaseEntry['CurrentComplianceStatus'] . "</td>";
                                    }
                                    else if ($ComplianceStatusString == "Critical")
                                    {
                                        echo "<td><div class = 'Circle' id = 'RedCircle'></div><br>" . $DatabaseEntry['CurrentComplianceStatus'] . "</td>";
                                    }
                                    else
                                    {
                                        echo "<td><div class = 'Circle'></div><br>" . $DatabaseEntry['CurrentComplianceStatus'] . "</td>";
                                    }
                                    $LastActionStatusString = $DatabaseEntry['LastActionStatus'];
                                    if ($LastActionStatusString == "Allow")
                                    {
                                        echo "<td><div class = 'Circle' id = 'GreenCircle'></div><br>" . $DatabaseEntry['LastActionStatus'] . "</td>";
                                    }
                                    else if ($LastActionStatusString == "Allow With Warning")
                                    {
                                        echo "<td><div class = 'Circle' id = 'YellowCircle'></div><br>" . $DatabaseEntry['LastActionStatus'] . "</td>";
                                    }
                                    else if ($LastActionStatusString == "Refuse Loading")
                                    {
                                        echo "<td><div class = 'Circle' id = 'RedCircle'></div><br>" . $DatabaseEntry['LastActionStatus'] . "</td>";
                                    }
                                    else
                                    {
                                        echo "<td><div class = 'Circle'></div><br>" . $DatabaseEntry['LastActionStatus'] . "</td>";
                                    }
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