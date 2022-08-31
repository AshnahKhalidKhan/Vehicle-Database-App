<!DOCTYPE html>
<html>
    <head>
        <!--Link CSS file-->
        <link rel= "stylesheet" href = "Induction.css">
        <!--Link JavaScript file-->
        <script type="text/javascript" src = "Induction.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <!--Give webpage a name-->
        <title>Induction Checklist</title>
        <!--Give webpage a favicon icon-->
        <link rel = "icon" type = "image/x-icon" href = "Favicon Images/favicon.ico">
        <!--Icons Link-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Round">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,700,1,-25" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <style>
            .SubHeading
            {
                text-align: left;
                margin-left: 10%;
                font-size: 30px;
                padding: 10px;
            }

            th, td
            {
                border-bottom: none;
                width: 100%;
                height: 100%;
                text-align: center;
                padding: 5px;
                font-size: 20px;
            }

            .SideLabel
            {
                font-size: 20px;
            }

            .Heading
            {
                font-size: 35px;
            }

            /**/
            
            /**/
            
            .BackButton
            {
                font-family: 'League Spartan';
                padding: 20px;
                text-align: center;
                cursor:pointer;
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
                font-weight: bold;
                padding: 20px;
            }

            .BackButton:hover .material-symbols-rounded
            {
                color:rgb(0, 0, 0);
                font-size: 50px;
            }

            .BackButton:active
            {
                background-color: rgb(172, 10, 10);
                padding: 20px;
            }

            body
            {
                background-image: url('https://d2csxpduxe849s.cloudfront.net/media/81B82121-29E3-4B23-B3B0AD6A2CCB2F50/57002A9C-7E91-4C7D-9DC983EE31F3C745/webimage-df5391e7-22bd-49b4-9195-474cd4f97f78.jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }

            .LocationButton
            {
                width: auto;
                height: auto;
                padding: 10px;
                background-color: white;
                border: 2px solid rgba(255, 230, 0, 0.784);
            }

            .LocationButton:hover, .LocationButton:active
            {
                color: white;
                background-color: rgba(128, 128, 128, 0.688);
                border: 5px solid rgba(255, 230, 0, 0.784);
            }

            input
            {
                text-align: center;
            }

            select
            {
                text-align: center;
                width: 100%;
            }

            table td select, table td input
            {
                width: 100%;
                padding: 5px;
            }

        </style>
        <script>
            function SelectGVSFlexi()
            {
                if (document.getElementById('GVS').checked == true)
                {
                    document.getElementById('GVSButton').style.backgroundColor = '#3abe06';
                    document.getElementById('GVSButton').style.border = '2px solid black';
                    document.getElementById('FlexiButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('FlexiButton').style.border = '1px solid black';
                    document.getElementById('Flexi').checked = false;
                }
                else if (document.getElementById('Flexi').checked == true)
                {
                    document.getElementById('GVSButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('GVSButton').style.border = '1px solid black';
                    document.getElementById('FlexiButton').style.backgroundColor = '#3abe06';
                    document.getElementById('FlexiButton').style.border = '2px solid black';
                    document.getElementById('GVS').checked = false;
                }     
            }

            function SelectRigidArticulated()
            {
                if (document.getElementById('Rigid').checked == true)
                {
                    document.getElementById('RigidButton').style.backgroundColor = '#3abe06';
                    document.getElementById('RigidButton').style.border = '2px solid black';
                    document.getElementById('ArticulatedButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('ArticulatedButton').style.border = '1px solid black';
                    document.getElementById('Articulated').checked = false;
                }
                else if (document.getElementById('Articulated').checked == true)
                {
                    document.getElementById('RigidButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('RigidButton').style.border = '1px solid black';
                    document.getElementById('ArticulatedButton').style.backgroundColor = '#3abe06';
                    document.getElementById('ArticulatedButton').style.border = '2px solid black';
                    document.getElementById('Rigid').checked = false;
                }     
            }

            function SelectAX()
            {
                if (document.getElementById('3AX').checked == true)
                {
                    document.getElementById('3AXButton').style.backgroundColor = '#3abe06';
                    document.getElementById('3AXButton').style.border = '2px solid black';
                    document.getElementById('5AXButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('5AXButton').style.border = '1px solid black';
                    document.getElementById('5AX').checked = false;
                    document.getElementById('6AXButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('6AXButton').style.border = '1px solid black';
                    document.getElementById('6AX').checked = false;
                }
                else if (document.getElementById('5AX').checked == true)
                {
                    document.getElementById('5AXButton').style.backgroundColor = '#3abe06';
                    document.getElementById('5AXButton').style.border = '2px solid black';
                    document.getElementById('3AXButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('3AXButton').style.border = '1px solid black';
                    document.getElementById('3AX').checked = false;
                    document.getElementById('6AXButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('6AXButton').style.border = '1px solid black';
                    document.getElementById('6AX').checked = false;
                }
                else if (document.getElementById('6AX').checked == true)
                {
                    document.getElementById('6AXButton').style.backgroundColor = '#3abe06';
                    document.getElementById('6AXButton').style.border = '2px solid black';
                    document.getElementById('5AXButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('5AXButton').style.border = '1px solid black';
                    document.getElementById('5AX').checked = false;
                    document.getElementById('3AXButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('3AXButton').style.border = '1px solid black';
                    document.getElementById('3AX').checked = false;
                }     
            }

            function SelectLoading()
            {
                if (document.getElementById('BottomLoading').checked == true)
                {
                    document.getElementById('BottomLoadingButton').style.backgroundColor = '#3abe06';
                    document.getElementById('BottomLoadingButton').style.border = '2px solid black';
                    document.getElementById('TopLoadingButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('TopLoadingButton').style.border = '1px solid black';
                    document.getElementById('TopLoading').checked = false;
                }
                else if (document.getElementById('TopLoading').checked == true)
                {
                    document.getElementById('BottomLoadingButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('BottomLoadingButton').style.border = '1px solid black';
                    document.getElementById('TopLoadingButton').style.backgroundColor = '#3abe06';
                    document.getElementById('TopLoadingButton').style.border = '2px solid black';
                    document.getElementById('BottomLoading').checked = false;
                } 
            }

            function SelectLightning()
            {
                if (document.getElementById('LightningLED').checked == true)
                {
                    document.getElementById('LightningLEDButton').style.backgroundColor = '#3abe06';
                    document.getElementById('LightningLEDButton').style.border = '2px solid black';
                    document.getElementById('LightningConventionalButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('LightningConventionalButton').style.border = '1px solid black';
                    document.getElementById('LightningConventional').checked = false;
                }
                else if (document.getElementById('LightningConventional').checked == true)
                {
                    document.getElementById('LightningLEDButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('LightningLEDButton').style.border = '1px solid black';
                    document.getElementById('LightningConventionalButton').style.backgroundColor = '#3abe06';
                    document.getElemenConventionaltById('LightningConventionalButton').style.border = '2px solid black';
                    document.getElementById('LightningLED').checked = false;
                } 
            }

            function SelectTruckPrimeMoverBrakes()
            {
                if (document.getElementById('ABSTruckPrimeMoverBrakes').checked == true)
                {
                    document.getElementById('ABSTruckPrimeMoverBrakesButton').style.backgroundColor = '#3abe06';
                    document.getElementById('ABSTruckPrimeMoverBrakesButton').style.border = '2px solid black';
                    document.getElementById('EBSTruckPrimeMoverBrakesButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('EBSTruckPrimeMoverBrakesButton').style.border = '1px solid black';
                    document.getElementById('EBSTruckPrimeMoverBrakes').checked = false;
                }
                else if (document.getElementById('EBSTruckPrimeMoverBrakes').checked == true)
                {
                    document.getElementById('ABSTruckPrimeMoverBrakesButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('ABSTruckPrimeMoverBrakesButton').style.border = '1px solid black';
                    document.getElementById('EBSTruckPrimeMoverBrakesButton').style.backgroundColor = '#3abe06';
                    document.getElementById('EBSTruckPrimeMoverBrakesButton').style.border = '2px solid black';
                    document.getElementById('ABSTruckPrimeMoverBrakes').checked = false;
                } 
            }

            function SelectTankTrailerBrakes()
            {
                if (document.getElementById('ABSTankTrailerBrakes').checked == true)
                {
                    document.getElementById('ABSTankTrailerBrakesButton').style.backgroundColor = '#3abe06';
                    document.getElementById('ABSTankTrailerBrakesButton').style.border = '2px solid black';
                    document.getElementById('EBSTankTrailerBrakesButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('EBSTankTrailerBrakesButton').style.border = '1px solid black';
                    document.getElementById('EBSTankTrailerBrakes').checked = false;
                    document.getElementById('NATankTrailerBrakesButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('NATankTrailerBrakesButton').style.border = '1px solid black';
                    document.getElementById('NATankTrailerBrakes').checked = false;
                }
                else if (document.getElementById('EBSTankTrailerBrakes').checked == true)
                {
                    document.getElementById('EBSTankTrailerBrakesButton').style.backgroundColor = '#3abe06';
                    document.getElementById('EBSTankTrailerBrakesButton').style.border = '2px solid black';
                    document.getElementById('ABSTankTrailerBrakesButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('ABSTankTrailerBrakesButton').style.border = '1px solid black';
                    document.getElementById('ABSTankTrailerBrakes').checked = false;
                    document.getElementById('NATankTrailerBrakesButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('NATankTrailerBrakesButton').style.border = '1px solid black';
                    document.getElementById('NATankTrailerBrakes').checked = false;
                }
                else if (document.getElementById('NATankTrailerBrakes').checked == true)
                {
                    document.getElementById('NATankTrailerBrakesButton').style.backgroundColor = '#3abe06';
                    document.getElementById('NATankTrailerBrakesButton').style.border = '2px solid black';
                    document.getElementById('EBSTankTrailerBrakesButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('EBSTankTrailerBrakesButton').style.border = '1px solid black';
                    document.getElementById('EBSTankTrailerBrakes').checked = false;
                    document.getElementById('ABSTankTrailerBrakesButton').style.backgroundColor = '#e7e7e7';
                    document.getElementById('ABSTankTrailerBrakesButton').style.border = '1px solid black';
                    document.getElementById('ABSTankTrailerBrakes').checked = false;
                }  
            }
        </script>
    </head>
    <body >
        <!---------------------------------------------------BACK BUTTON-------------------------------------->
        <button type = "button" class = "BackButton" onclick = "document.location = 'SelectFunctionsRTEngineer.html'">
            <i class="material-symbols-rounded">reply</i>
        </button>

        <!-----------------------------------------------------CHECKLIST---------------------------------------->
        <aside div class = "Checklist">
        <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "POST" enctype = "multipart/form-data">
            <!---Start Induction Page-->
            <div class = "Page" id = "StartInductionPage">
                <div class = "Heading">INDUCTION CHECKLIST</div>
                <span class = "material-icons" style = "font-size: 300px; color: #ED1C24; text-align: center; margin-left: auto;margin-right: auto; padding: 30px;">
                    content_paste_search
                </span>
                <br/>
                <br/>
                <button onclick = "ViewVehicleIDPage()" div class = "ContinueButton">START</button>
            </div>
            <!--Vehicle ID Details: TL Name, Haulier Name -->
            <div class = "Page" id = "VehicleIDPage">
                <div class = "Heading">VEHICLE ID DETAILS</div>
                <table>
                    <tbody>
                        <tr>
                            <td div class = "SideLabel">
                                TL NAME
                            </td>
                            <td>
                                <input type = "text" id = "TLName" name = "TLName" div class = "Input" placeholder = "e.g. ABC123VV" required>
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                HAUILER NAME
                            </td>
                            <td>
                                <select id = "HaulierName" name = "HaulierName"  placeholder = "Select Option" div class = "Input" required>
                                    <option>Select Option</option>
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
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                ENGINE NUMBER
                            </td>
                            <td>
                                <input type = "text" id = "EngineNumber" name = "EngineNumber" div class = "Input" placeholder = "Enter value" required>
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                ENGINE POWER
                            </td>
                            <td>
                                <input type = "number" id = "EnginePower" name = "EnginePower" step = "1" div class = "Input" placeholder = "Enter value" required>
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                CHASSIS NUMBER
                            </td>
                            <td>
                                <input type = "text" id = "ChassisNumber" name = "ChassisNumber" div class = "Input" placeholder = "Enter value" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button onclick = "ViewVehicleTypePage()" div class = "ContinueButton">CONTINUE</button>
                <br>
            </div>
            <!--Previous Inspection Summary: TLName, Hauiler Name, Location, DateAndTime, Faults Detected, Additonal Remarks, Images??, Compliance Status, Action, Notified-->
            <div class = "Page" id = "VehicleTypePage">
                <div class = "Heading">VEHICLE TYPE</div>
                    <!--
                    <div class = "SubHeading">TL NAME: <span id = "TLNameres"></span></div>
                    <div class = "SubHeading">HAULIER NAME: <span id = "HNameres"></span></div>
                    <div class = "SubHeading">LAST INSPECTION DATE: <span id = "LIDateres"></span></div>
                    <div class = "SubHeading">FAULTS DETECTED: <span id = "FDetectres"></span></div>
                    <div class = "SubHeading">ADITIONAL REMARKS: <span id = "ARemarksres"></span></div>
                    <div class = "SubHeading">COMPLIANCE STATUS: <span id = "CStatusres"></span></div>
                    <div class = "SubHeading">ACTION TAKEN: <span id = "ATakenres"></span></div>
                    <div class = "SubHeading">NOTIFIED PARTIES: <span id = "NPartyres"></span></div>
                    -->

                <!--
                    EXPLANATION

                    I put span tags with different IDs infront of every heading because that's where I'll have the data be shown via JS
                    when the ajax request gives a success message.

                    The function name for the ajax request is called when you click the continue button to call ViewVehicleTypePage() 
                    which in turn calls vtypeinfo(); in the Induction.js file.

                    The code where I have the select query and returning data from is in the file vehicletypeinfo.php.

                    I have made 2 db files one for inspectionlist db and one for cutesmalldb so it's simpler and cleaner for you to do
                    queries, inserts and updates.

                    The rest of the explanation is in vtypeinfo(); in Induction.js
                -->

                <table>
                    <tbody>
                        <tr>
                            <td colspan = "2">
                                GVS/FLEXI
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type = "radio" id = "GVS" name = "GVSFlexi" value = "GVS" style = "display: none;" required>
                                <button type = "button" id = "GVSButton" style = "width: 100%; height: 100%; padding: 20px;" onclick = "document.getElementById('GVS').checked = true; SelectGVSFlexi();">                                    <span class = "material-icons" style = "font-size: 40px; -webkit-transform: scaleX(-1); transform: scaleX(-1);">local_shipping</span>
                                    <br/>
                                    GVS
                                </button>
                            </td>
                            <td>
                                <input type = "radio" id = "Flexi" name = "GVSFlexi" value = "Flexi" style = "display: none;" required>
                                <button type = "button" id = "FlexiButton" style = "width: 100%; height: 100%; padding: 20px;" onclick = "document.getElementById('Flexi').checked = true; SelectGVSFlexi();">
                                    <span class = "material-icons" style = "font-size: 40px;">local_shipping</span>
                                    <br/>
                                    Flexi
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <tbody>
                        <tr>
                            <td colspan = "2">
                                RIGID/ARTICULATED
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type = "radio" id = "Rigid" name = "RigidArticulated" value = "Rigid" style = "display: none; width: 100%; height: 100%; text-align: center;" required>
                                <button type = "button" id = "RigidButton" style = "width: 100%; height: 100%; padding: 20px;" onclick = "document.getElementById('Rigid').checked = true; SelectRigidArticulated();">
                                    <span class = "material-icons" style = "font-size: 40px; -webkit-transform: scaleX(-1); transform: scaleX(-1);">local_shipping</span>
                                    <br/>
                                    Rigid
                                </button>
                            </td>
                            <td>
                                <input type = "radio" id = "Articulated" name = "RigidArticulated" value = "Articulated" style = "display: none; width: 100%; height: 100%; text-align: center;" required>
                                <button type = "button" id = "ArticulatedButton" style = "width: 100%; height: 100%; padding: 20px;" onclick = "document.getElementById('Articulated').checked = true; SelectRigidArticulated();">
                                    <span class = "material-icons" style = "font-size: 40px;">local_shipping</span>
                                    <br/>
                                    Articulated
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <tbody>
                        <tr>
                            <td colspan = "3">
                                AXLE
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type = "radio" id = "3AX" name = "AX" value = "3AX" style = "display: none; width: 100%; height: 100%; text-align: center;" required>
                                <button type = "button" id = "3AXButton" style = "width: 100%; height: 100%; padding: 20px;" onclick = "document.getElementById('3AX').checked = true; SelectAX();">
                                    <span class = "material-icons" style = "font-size: 40px;">local_shipping</span>
                                    <br/>
                                    3 AX
                                </button>
                            </td>
                            <td>
                                <input type = "radio" id = "5AX" name = "AX" value = "5AX" style = "display: none; width: 100%; height: 100%; text-align: center;" required>
                                <button type = "button" id = "5AXButton" style = "width: 100%; height: 100%; padding: 20px;" onclick = "document.getElementById('5AX').checked = true; SelectAX();">
                                    <span class = "material-icons" style = "font-size: 40px;">local_shipping</span>
                                    <br/>
                                    5 AX
                                </button>
                            </td>
                            <td>
                                <input type = "radio" id = "6AX" name = "AX" value = "6AX" style = "display: none; width: 100%; height: 100%; text-align: center;" required>
                                <button type = "button" id = "6AXButton" style = "width: 100%; height: 100%; padding: 20px;" onclick = "document.getElementById('6AX').checked = true; SelectAX();">
                                    <span class = "material-icons" style = "font-size: 40px;">local_shipping</span>
                                    <br/>
                                    6 AX
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <button onclick = "ViewVehicleIDPage()" div class = "PreviousButton">PREVIOUS</button>
                <button onclick = "ViewVehicleMeasurementsPage()" div class = "ContinueButton">CONTINUE</button>
                <br>
            </div>
            <!--Expriy Dates Check: Full checklist-->
            <div class = "Page" id = "VehicleMeasurementsPage">
                <div class = "Heading">VEHICLE MEASUREMENTS</div>
                <table>
                    <tbody>
                        <tr>
                            <td div class = "SideLabel">
                                VEHICLE LENGTH
                            </td>
                            <td>
                                <input type = "number" id = "VehicleLength" name = "VehicleLength" step = "0.01" div class = "Input" placeholder = "(in meters)" required>
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                VEHICLE WIDTH
                            </td>
                            <td>
                                <input type = "number" id = "VehicleWidth" name = "VehicleWidth" step = "0.01" div class = "Input" placeholder = "(in meters)" required>
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                VVEHICLE HEIGHT
                            </td>
                            <td>
                                <input type = "number" id = "VehicleHeight" name = "VehicleHeight" step = "0.01" div class = "Input" placeholder = "(in meters)" required>
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                VEHICLE WEIGHT
                            </td>
                            <td>
                                <input type = "number" id = "VehicleWeight" name = "VehicleWeight" step = "0.01" div class = "Input" placeholder = "(in kg)" required>
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                TOTAL VEHICLE CAPACITY
                            </td>
                            <td>
                                <input type = "number" id = "VehicleTotalCapacity" name = "VehicleTotalCapacity" step = "0.01" div class = "Input" placeholder = "(in litres)" required>
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                TOTAL COMPARTMENTS
                            </td>
                            <td div class = "SideLabel">
                                <select id = "TotalCompartments" name = "TotalCompartments"  placeholder = "Select Option" div class = "Input" required>
                                    <option value = "3">3</option>
                                    <option value = "4">4</option>
                                    <option value = "5">5</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button onclick = "ViewVehicleTypePage()" div class = "PreviousButton">PREVIOUS</button>
                <button onclick = "ViewTruckPrimeMoverDetailsPage()" div class = "ContinueButton">CONTINUE</button>
                
                <br />
            </div>
            <!--Vehicle Documents Page: Full checklist-->
            <div class = "Page" id = "TruckPrimeMoverDetailsPage">
                <div class = "Heading">TRUCK/PRIMEMOVER DETAILS</div>
                <table>
                    <tbody>
                        <tr>
                            <td div class = "SideLabel">
                                MANUFACTURER
                            </td>
                            <td>
                                <select id = "TruckPrimeMoverManufacturer" name = "TruckPrimeMoverManufacturer" div class = "Input" required>
                                    <option>Select Option</option>
                                    <option value = "DAEWOO">DAEWOO</option>
                                    <option value = "FAW">FAW</option>
                                    <option value = "FUSO">FUSO</option>
                                    <option value = "Hino">HINO</option>
                                    <option value = "ISUZU">ISUZU</option>
                                    <option value = "RENAULT">RENAULT</option>
                                    <option value = "UnapprovedManufacturer">Unapproved Manufacturer</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                MANUFACTURING DATE
                            </td>
                            <td>
                                <input type = "date" id = "TruckPrimeMoverManufacturingDate" name = "TruckPrimeMoverManufacturingDate" div class = "Input" placeholder = "e.g. ABC123VV" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <thead>
                        <th colspan = "2">TYPE OF BRAKES</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type = "radio" id = "ABSTruckPrimeMoverBrakes" name = "TruckPrimeMoverBrakes" value = "ABS" style = "display: none; width: 100%; height: 100%; text-align: center;" required>
                                <button type = "button" id = "ABSTruckPrimeMoverBrakesButton" style = "width: 100%; height: 100%; padding: 20px;" onclick = "document.getElementById('ABSTruckPrimeMoverBrakes').checked = true; SelectTruckPrimeMoverBrakes();">
                                    ABS
                                </button>
                            </td>
                            <td>
                                <input type = "radio" id = "EBSTruckPrimeMoverBrakes" name = "TruckPrimeMoverBrakes" value = "EBS" style = "display: none; width: 100%; height: 100%; text-align: center;" required>
                                <button type = "button" id = "EBSTruckPrimeMoverBrakesButton" style = "width: 100%; height: 100%; padding: 20px;" onclick = "document.getElementById('EBSTruckPrimeMoverBrakes').checked = true; SelectTruckPrimeMoverBrakes();">
                                    EBS
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>     


                <button onclick = "ViewVehicleMeasurementsPage()" div class = "PreviousButton">PREVIOUS</button>
                <button onclick = "ViewTankTrailerDetailsPage()" div class = "ContinueButton">CONTINUE</button>
                

                <br />
            </div>
            <!--Safety Equipment Checklist Page: Full checklist-->
            <div class = "Page" id = "TankTrailerDetailsPage">
                <div class = "Heading">TANK/TRAILER DETAILS</div>
                <table>
                    <tbody>
                        <tr>
                            <td div class = "SideLabel">
                                MANUFACTURER
                            </td>
                            <td>
                                <select id = "TankTrailerManufacturer" name = "TankTrailerManufacturer" div class = "Input" required>
                                    <option>Select Option</option>
                                    <option value = "ACPL">ACPL</option>
                                    <option value = "CIMC">CIMC</option>
                                    <option value = "MEW">MEW</option>
                                    <option value = "PVE">PVE</option>
                                    <option value = "UnapprovedManufacturer">Unapproved Manufacturer</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                MANUFACTURING DATE
                            </td>
                            <td>
                                <input type = "date" id = "TankTrailerManufacturingDate" name = "TankTrailerManufacturingDate" div class = "Input" placeholder = "e.g. ABC123VV" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <thead>
                        <th colspan = "3">TYPE OF BRAKES</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type = "radio" id = "ABSTankTrailerBrakes" name = "TankTrailerBrakes" value = "ABS" style = "display: none; width: 100%; height: 100%; text-align: center;" required>
                                <button type = "button" id = "ABSTankTrailerBrakesButton" style = "width: 100%; height: 100%; padding: 20px;" onclick = "document.getElementById('ABSTankTrailerBrakes').checked = true; SelectTankTrailerBrakes();">
                                    ABS
                                </button>
                            </td>
                            <td>
                                <input type = "radio" id = "EBSTankTrailerBrakes" name = "TankTrailerBrakes" value = "EBS" style = "display: none; width: 100%; height: 100%; text-align: center;" required>
                                <button type = "button" id = "EBSTankTrailerBrakesButton" style = "width: 100%; height: 100%; padding: 20px;" onclick = "document.getElementById('EBSTankTrailerBrakes').checked = true; SelectTankTrailerBrakes();">
                                    EBS
                                </button>
                            </td>
                            <td>
                                <input type = "radio" id = "NATankTrailerBrakes" name = "TankTrailerBrakes" value = "N/A" style = "display: none; width: 100%; height: 100%; text-align: center;" required>
                                <button type = "button" id = "NATankTrailerBrakesButton" style = "width: 100%; height: 100%; padding: 20px;" onclick = "document.getElementById('NATankTrailerBrakes').checked = true; SelectTankTrailerBrakes();">
                                    N/A
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button onclick = "ViewTruckPrimeMoverDetailsPage()" div class = "PreviousButton">PREVIOUS</button>
                <button onclick = "ViewCompartmentDetailsPage()" div class = "ContinueButton">CONTINUE</button>

                <br />
            </div>
            <!--Tyres Inspection Page: Full checklist-->
            <div class = "Page" id = "CompartmentDetailsPage">
                <div class = "Heading">COMPARTMENT DETAILS</div>
                <table>
                    <thead>
                        <th colspan = "3">COMPARTMENT # 1</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Capacity</td>
                            <td>Positive Opening Pressure</td>
                            <td>Negative Opening Pressure</td>
                        </tr>
                        <tr>
                            <td>
                                <input type = "number" id = "CMPT1Capacity" name = "CMPT1Capacity" step = "100" div class = "Input" placeholder = "(in litres)" required>
                            </td>
                            <td>
                                <input type = "number" id = "CMPT1PositiveOpeningPressure" name = "CMPT1PositiveOpeningPressure" step = "0.01" div class = "Input" placeholder = "(in mbar)" required>
                            </td>
                            <td>
                                <input type = "number" id = "CMPT1NegativeOpeningPressure" name = "CMPT1NegativeOpeningPressure" step = "0.01" div class = "Input" placeholder = "(in mbar)" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <thead>
                        <th colspan = "3">COMPARTMENT # 2</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Capacity</td>
                            <td>Positive Opening Pressure</td>
                            <td>Negative Opening Pressure</td>
                        </tr>
                        <tr>
                            <td>
                                <input type = "number" id = "CMPT2Capacity" name = "CMPT2Capacity" step = "100" div class = "Input" placeholder = "(in litres)" required>
                            </td>
                            <td>
                                <input type = "number" id = "CMPT2PositiveOpeningPressure" name = "CMPT2PositiveOpeningPressure" step = "0.01" div class = "Input" placeholder = "(in mbar)" required>
                            </td>
                            <td>
                                <input type = "number" id = "CMPT2NegativeOpeningPressure" name = "CMPT2NegativeOpeningPressure" step = "0.01" div class = "Input" placeholder = "(in mbar)" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <thead>
                        <th colspan = "3">COMPARTMENT # 3</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Capacity</td>
                            <td>Positive Opening Pressure</td>
                            <td>Negative Opening Pressure</td>
                        </tr>
                        <tr>
                            <td>
                                <input type = "number" id = "CMPT3Capacity" name = "CMPT3Capacity" step = "100" div class = "Input" placeholder = "(in litres)" required>
                            </td>
                            <td>
                                <input type = "number" id = "CMPT3PositiveOpeningPressure" name = "CMPT3PositiveOpeningPressure" step = "0.01" div class = "Input" placeholder = "(in mbar)" required>
                            </td>
                            <td>
                                <input type = "number" id = "CMPT3NegativeOpeningPressure" name = "CMPT3NegativeOpeningPressure" step = "0.01" div class = "Input" placeholder = "(in mbar)" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <thead>
                        <th colspan = "3">COMPARTMENT # 4</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Capacity</td>
                            <td>Positive Opening Pressure</td>
                            <td>Negative Opening Pressure</td>
                        </tr>
                        <tr>
                            <td>
                                <input type = "number" id = "CMPT4Capacity" name = "CMPT4Capacity" step = "100" div class = "Input" placeholder = "(in litres)" required>
                            </td>
                            <td>
                                <input type = "number" id = "CMPT4PositiveOpeningPressure" name = "CMPT4PositiveOpeningPressure" step = "0.01" div class = "Input" placeholder = "(in mbar)" required>
                            </td>
                            <td>
                                <input type = "number" id = "CMPT4NegativeOpeningPressure" name = "CMPT4NegativeOpeningPressure" step = "0.01" div class = "Input" placeholder = "(in mbar)" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <thead>
                        <th colspan = "3">COMPARTMENT # 5</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Capacity</td>
                            <td>Positive Opening Pressure</td>
                            <td>Negative Opening Pressure</td>
                        </tr>
                        <tr>
                            <td>
                                <input type = "number" id = "CMPT5Capacity" name = "CMPT5Capacity" step = "100" div class = "Input" placeholder = "(in litres)" required>
                            </td>
                            <td>
                                <input type = "number" id = "CMPT5PositiveOpeningPressure" name = "CMPT5PositiveOpeningPressure" step = "0.01" div class = "Input" placeholder = "(in mbar)" required>
                            </td>
                            <td>
                                <input type = "number" id = "CMPT5NegativeOpeningPressure" name = "CMPT5NegativeOpeningPressure" step = "0.01" div class = "Input" placeholder = "(in mbar)" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
                


                <button onclick = "ViewTankTrailerDetailsPage()" div class = "PreviousButton">PREVIOUS</button>
                <button onclick = "ViewFeaturesChecklistPage()" div class = "ContinueButton">CONTINUE</button>
                

                <br />
            </div>
            <!--Lights Inspection Page: Full checklist-->
            <div class = "Page" id = "FeaturesChecklistPage">
                <div class = "Heading">FEATURES CHECKLIST</div>
                <table>
                    <thead>
                        <th>FEATURE</th>
                        <th>AVAILABLE</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Carbon 8.8 Bolts
                            </td>
                            <td>
                                <label for = "CarbonEightPointEightBolts" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "CarbonEightPointEightBolts" name = "CarbonEightPointEightBolts">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                Speed Limiting Device
                            </td>
                            <td>
                                <label for = "SpeedLimitingDevice" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "SpeedLimitingDevice" name = "SpeedLimitingDevice">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Reversing Alarms
                            </td>
                            <td>
                                <label for = "ReversingAlarms" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "ReversingAlarms" name = "ReversingAlarms">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Wheel Nut Torque Indicators
                            </td>
                            <td>
                                <label for = "WheelNutTorqueIndicators" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "WheelNutTorqueIndicators" name = "WheelNutTorqueIndicators">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                AEB
                            </td>
                            <td>
                                <label for = "AEB" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "AEB" name = "AEB">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Full Airbrake
                            </td>
                            <td>
                                <label for = "FullAirBrake" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "FullAirBrake" name = "FullAirBrake">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Air Pressure Buzzer
                            </td>
                            <td>
                                <label for = "AirPressureBuzzer" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "AirPressureBuzzer" name = "AirPressureBuzzer">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Valve Caps
                            </td>
                            <td>
                                <label for = "ValveCaps" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "ValveCaps" name = "ValveCaps">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Jumpstart Plug
                            </td>
                            <td>
                                <label for = "JumpStartPlug" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "JumpStartPlug" name = "JumpStartPlug">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Dual Pole Switch
                            </td>
                            <td>
                                <label for = "DualPoleSwitch" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "DualPoleSwitch" name = "DualPoleSwitch">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Crosslock Device
                            </td>
                            <td>
                                <label for = "CrossLockDevice" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "CrossLockDevice" name = "CrossLockDevice">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                8 vs 10 Studs
                            </td>
                            <td>
                                <label for = "EightVSTenStuds" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "EightVSTenStuds" name = "EightVSTenStuds">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                VRU Dia 4"
                            </td>
                            <td>
                                <label for = "VRUDiaFourInches" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "VRUDiaFourInches" name = "VRUDiaFourInches">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Auto Slack Adjustment
                            </td>
                            <td>
                                <label for = "AutoSlackAdjustment" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "AutoSlackAdjustment" name = "AutoSlackAdjustment">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Forward-facing Camera
                            </td>
                            <td>
                                <label for = "ForwardFacingCamera" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "ForwardFacingCamera" name = "ForwardFacingCamera">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Driver-facing Camera
                            </td>
                            <td>
                                <label for = "DriverFacingCamera" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "DriverFacingCamera" name = "DriverFacingCamera">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Active Fatigue Detection Devices
                            </td>
                            <td>
                                <label for = "ActiveFatigueDetectionDevices" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "ActiveFatigueDetectionDevices" name = "ActiveFatigueDetectionDevices">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Lane Departure Warning System
                            </td>
                            <td>
                                <label for = "LaneDepartureWarningSystem" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "LaneDepartureWarningSystem" name = "LaneDepartureWarningSystem">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Blindspot Monitoring
                            </td>
                            <td>
                                <label for = "BlindSpotMonitoring" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "BlindSpotMonitoring" name = "BlindSpotMonitoring">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Steering Wheel Airbag
                            </td>
                            <td>
                                <label for = "SteeringWheelAirbag" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "SteeringWheelAirbag" name = "SteeringWheelAirbag">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Forward Collision Warning
                            </td>
                            <td>
                                <label for = "ForwardCollisionWarning" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "ForwardCollisionWarning" name = "ForwardCollisionWarning">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Cabin Rollover Protection
                            </td>
                            <td>
                                <label for = "CabinRollOverProtection" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "CabinRollOverProtection" name = "CabinRollOverProtection">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Tanker Rollover Protection
                            </td>
                            <td>
                                <label for = "TankerRollOverProtection" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "TankerRollOverProtection" name = "TankerRollOverProtection">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Overfill Protection
                            </td>
                            <td>
                                <label for = "OverfillProtection" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "OverfillProtection" name = "OverfillProtection">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Side Under-runs Protection
                            </td>
                            <td>
                                <label for = "SideUnderRunsProtection" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "SideUnderRunsProtection" name = "SideUnderRunsProtection">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Rear Under-runs Protection
                            </td>
                            <td>
                                <label for = "RearUnderRunsProtection" class = "switch">
                                    <input type = "checkbox" value = "NO" id = "RearUnderRunsProtection" name = "RearUnderRunsProtection">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <button onclick = "ViewCompartmentDetailsPage()" div class = "PreviousButton">PREVIOUS</button>
                <button onclick = "ViewVehiclePartsDetailsPage()" div class = "ContinueButton">CONTINUE</button>
                
                
                <br />
            </div>
            <!--Horns & Buzzers Page: Full checklist-->
            <div class = "Page" id = "VehiclePartsDetailsPage">
                <div class = "Heading">VEHICLE PARTS DETAILS</div>
                <table>
                    <thead>
                        <th colspan = "2">TYPE OF LOADING</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type = "radio" id = "BottomLoading" name = "BottomTopLoading" value = "Bottom-Loading" style = "display: none; width: 100%; height: 100%; text-align: center;" required>
                                <button type = "button" id = "BottomLoadingButton" style = "width: 100%; height: 100%; padding: 20px;" onclick = "document.getElementById('BottomLoading').checked = true; SelectLoading();">
                                    Bottom-Loading
                                </button>
                            </td>
                            <td>
                                <input type = "radio" id = "TopLoading" name = "BottomTopLoading" value = "Top-Loading" style = "display: none; width: 100%; height: 100%; text-align: center;" required>
                                <button type = "button" id = "TopLoadingButton" style = "width: 100%; height: 100%; padding: 20px;" onclick = "document.getElementById('TopLoading').checked = true; SelectLoading();">
                                    Top-Loading
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <thead>
                        <th colspan = "2">TYPE OF LIGHTNING</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type = "radio" id = "LightningLED" name = "LightningLEDConventional" value = "LED" style = "display: none; width: 100%; height: 100%; text-align: center;" required>
                                <button type = "button" id = "LightningLEDButton" style = "width: 100%; height: 100%; padding: 20px;" onclick = "document.getElementById('LightningLED').checked = true; SelectLightning();">
                                    LED
                                </button>
                            </td>
                            <td>
                                <input type = "radio" id = "LightningConventional" name = "LightningLEDConventional" value = "Conventional" style = "display: none; width: 100%; height: 100%; text-align: center;" required>
                                <button type = "button" id = "LightningConventionalButton" style = "width: 100%; height: 100%; padding: 20px;" onclick = "document.getElementById('LightningConventional').checked = true; SelectLightning();">
                                    Conventional
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <tbody>
                        <tr>
                            <td div class = "SideLabel">
                                Side Under-runs Height
                            </td>
                            <td>
                                <input type = "number" id = "SideUnderRunsHeight" name = "SideUnderRunsHeight" step = "0.01" div class = "Input" placeholder = "(in meters)" required> 
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                Rear Under-runs Height
                            </td>
                            <td>
                                <input type = "number" id = "RearUnderRunsHeight" name = "RearUnderRunsHeight" step = "0.01" div class = "Input" placeholder = "(in meters)" required> 
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                Front Bumper Height
                            </td>
                            <td>
                                <input type = "number" id = "FrontBumperHeight" name = "FrontBumperHeight" step = "0.01" div class = "Input" placeholder = "(in meters)" required> 
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                Coaming Height
                            </td>
                            <td>
                                <input type = "number" id = "CoamingHeight" name = "CoamingHeight" step = "0.01" div class = "Input" placeholder = "(in meters)" required> 
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                Rolling Grade Ability
                            </td>
                            <td>
                                <input type = "number" id = "RollingGradeAbility" name = "RollingGradeAbility" step = "0.01" div class = "Input" placeholder = "(in meters)" required> 
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                Vehicle Power To Weight Ratio
                            </td>
                            <td>
                                <input type = "number" id = "VehiclePowerToWeightRatio" name = "VehiclePowerToWeightRatio" step = "0.01" div class = "Input" placeholder = "(in meters)" required> 
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <button onclick = "ViewFeaturesChecklistPage()" div class = "PreviousButton">PREVIOUS</button>
                <button onclick = "ViewCertificatesReportsPage()" div class = "ContinueButton">CONTINUE</button>

                <br />
            </div>
            <!--Switches Page: Full checklist-->
            <div class = "Page" id = "CertificatesReportsPage">
                <div class = "Heading">CERTIFICATES & REPORTS</div>
                <table>
                    <tbody>
                        <tr>
                            <td div class = "SideLabel">
                                Third-party Inspection Report
                            </td>
                            <td>
                                <input type = "file" id = "ThirdPartyInspectionReport" name = "ThirdPartyInspectionReport" style = "display: none;" onchange = "document.getElementById('ThirdPartyInspectionReportIcon').style.display = 'none'; document.getElementById('ThirdPartyInspectionReportDone').style.display = 'block';" required>
                                <button type = "button" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('ThirdPartyInspectionReport').click()">
                                    <span class = "material-icons-round" id = "ThirdPartyInspectionReportDone" style = "font-size: 40px; color: #1db11a; display: none;">check_circle</span>
                                    <span class = "material-icons-outlined" id = "ThirdPartyInspectionReportIcon" style = "font-size: 40px;">file_upload</span><br>
                                    Upload File
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                Hydro-testing Report
                            </td>
                            <td>
                                <input type = "file" id = "HydroTestingReport" name = "HydroTestingReport" style = "display: none;" onchange = "document.getElementById('HydroTestingReportIcon').style.display = 'none'; document.getElementById('HydroTestingReportDone').style.display = 'block';" required>
                                <button type = "button" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('HydroTestingReport').click()">
                                    <span class = "material-icons-round" id = "HydroTestingReportDone" style = "font-size: 40px; color: #1db11a; display: none;">check_circle</span>
                                    <span class = "material-icons-outlined" id = "HydroTestingReportIcon" style = "font-size: 40px;">file_upload</span><br>
                                    Upload File
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                PV Testing Report
                            </td>
                            <td>
                                <input type = "file" id = "PVTestingReport" name = "PVTestingReport" style = "display: none;" onchange = "document.getElementById('PVTestingReportIcon').style.display = 'none'; document.getElementById('PVTestingReportDone').style.display = 'block';" required>
                                <button type = "button" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('PVTestingReport').click()">
                                    <span class = "material-icons-round" id = "PVTestingReportDone" style = "font-size: 40px; color: #1db11a; display: none;">check_circle</span>
                                    <span class = "material-icons-outlined" id = "PVTestingReportIcon" style = "font-size: 40px;">file_upload</span><br>
                                    Upload File
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                Trailer Tank Certificate
                            </td>
                            <td>
                                <input type = "file" id = "TrailerTankCertificate" name = "TrailerTankCertificate" style = "display: none;" onchange = "document.getElementById('TrailerTankCertificateIcon').style.display = 'none'; document.getElementById('TrailerTankCertificateDone').style.display = 'block';" required>
                                <button type = "button" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('TrailerTankCertificate').click()">
                                    <span class = "material-icons-round" id = "TrailerTankCertificateDone" style = "font-size: 40px; color: #1db11a; display: none;">check_circle</span>
                                    <span class = "material-icons-outlined" id = "TrailerTankCertificateIcon" style = "font-size: 40px;">file_upload</span><br>
                                    Upload File
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                Emission Certificate
                            </td>
                            <td>
                                <input type = "file" id = "EmissionCertificate" name = "EmissionCertificate" style = "display: none;" onchange = "document.getElementById('EmissionCertificateIcon').style.display = 'none'; document.getElementById('EmissionCertificateDone').style.display = 'block';" required>
                                <button type = "button" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('EmissionCertificate').click()">
                                    <span class = "material-icons-round" id = "EmissionCertificateDone" style = "font-size: 40px; color: #1db11a; display: none;">check_circle</span>
                                    <span class = "material-icons-outlined" id = "EmissionCertificateIcon" style = "font-size: 40px;">file_upload</span><br>
                                    Upload File
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                Tareweight Slip
                            </td>
                            <td>
                                <input type = "file" id = "TareweightSlip" name = "TareweightSlip" style = "display: none;" onchange = "document.getElementById('TareweightSlipIcon').style.display = 'none'; document.getElementById('TareweightSlipDone').style.display = 'block';" required>
                                <button type = "button" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('TareweightSlip').click()">
                                    <span class = "material-icons-round" id = "TareweightSlipDone" style = "font-size: 40px; color: #1db11a; display: none;">check_circle</span>
                                    <span class = "material-icons-outlined" id = "TareweightSlipIcon" style = "font-size: 40px;">file_upload</span><br>
                                    Upload File
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button onclick = "ViewVehiclePartsDetailsPage()" div class = "PreviousButton">PREVIOUS</button>
                <button onclick = "ViewImportantDatesPage()" div class = "ContinueButton">CONTINUE</button>
                

                <br />
            </div>
            <!--Covers, Pipes, Guards Page: Full checklist-->
            <div class = "Page" id = "ImportantDatesPage">
                <div class = "Heading">IMPORTANT DATES</div>
                <table>
                    <tbody>
                        <tr>
                            <td div class = "SideLabel">
                                Vehicle Induction Date
                            </td>
                            <td>
                                <input type = "date" id = "VehicleInductionDate" name = "VehicleInductionDate" div class = "Input" required>
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                Last Calibration Expiry Date
                            </td>
                            <td>
                                <input type = "date" id = "LastCalibrationTestExpiryDate" name = "LastCalibrationTestExpiryDate" div class = "Input" required>
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                Explosives License Expiry Date
                            </td>
                            <td>
                                <input type = "date" id = "ExplosivesLicenseExpiryDate" name = "ExplosivesLicenseExpiryDate" div class = "Input" required>
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                Last Hydro-test Expiry Date
                            </td>
                            <td>
                                <input type = "date" id = "LastHydroTestExpiryDate" name = "LastHydroTestExpiryDate" div class = "Input" required>
                            </td>
                        </tr>
                        <tr>
                            <td div class = "SideLabel">
                                Last Inspection Date
                            </td>
                            <td>
                                <input type = "date" id = "LastInspectionDate" name = "LastInspectionDate" div class = "Input" required>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <button onclick = "ViewCertificatesReportsPage()" div class = "PreviousButton">PREVIOUS</button>
                <button onclick = "ViewVehicleStatusPage()" div class = "ContinueButton">CONTINUE</button>

                <br />
            </div>
            <!--Miscellaneous Parts Page: Full checklist-->
            <div class = "Page" id = "VehicleStatusPage">
                <div class = "Heading">VEHICLE STATUS</div>
                <div class = "SubHeading">Compliance Status:</div>
                <label class = "container2">Fit
                    <input type = "radio" id = "CurrentComplianceStatusFit" name = "CurrentComplianceStatus" value = "Fit" required>
                    <span class = "checkmark2" id = "OKButton"></span>
                    <br/>
                </label>
                <br/>
                <label class = "container2">Delayable Concerns
                    <input type = "radio" id = "CurrentComplianceStatusDelayable" name = "CurrentComplianceStatus" value = "Delayable Concerns">
                    <span class = "checkmark2" id = "YellowButton"></span>
                    <br/>
                </label>
                <br/>
                <label class = "container2">Previous Concerns Not Rectified
                    <input type = "radio" id = "CurrentComplianceStatusPreviousConcernsNotRectified" name = "CurrentComplianceStatus" value = "Previous Concerns Not Rectified">
                    <span class = "checkmark2" id = "OrangeButton"></span>
                    <br/>
                </label>
                <br/>
                <label class = "container2">Critical
                    <input type = "radio" id = "CurrentComplianceStatusCritical" name = "CurrentComplianceStatus" value = "Critical">
                    <span class = "checkmark2" id = "RedButton"></span>
                    <br/>
                </label>
                <br/><br/>
                <div class = "SubHeading">Action:</div>
                <label class = "container2">Allow
                    <input type = "radio" id = "LastActionStatusAllow" name = "LastActionStatus" value = "Allow"required>
                    <span class = "checkmark2" id = "OKButton"></span>
                    <br/>
                </label>
                <br/>
                <label class = "container2">Allow With Warning
                    <input type = "radio" id = "LastActionStatusAllowWithWarning" name = "LastActionStatus" value = "Allow With Warning">
                    <span class = "checkmark2" id = "YellowButton"></span>
                    <br/>
                </label>
                <br/>
                <label class = "container2">Refuse Loading
                    <input type = "radio" id = "LastActionStatusRefuseLoading" name = "LastActionStatus" value = "Refuse Loading">
                    <span class = "checkmark2" id = "RedButton"></span>
                    <br/>
                </label>
                <br/><br/>
                <button onclick = "ViewImportantDatesPage()" div class = "PreviousButton">PREVIOUS</button>
                <button onclick = "ViewInductionCompletePage()" div class = "ContinueButton">CONFIRM</button>
                <br />
            </div>
            <!--Additnal Remarks Page: Full checklist-->
            <div class = "Page" id = "InductionCompletePage">
                <div class = "Heading">INDUCTION COMPLETE!</div>
                <span class = "material-symbols-outlined" style = "font-size: 300px; color: #1db11a; text-align: center; margin-left: auto;margin-right: auto; padding: 30px;">
                    inventory
                </span>
                <br/>
                <br/>
                <button div class = "CloseButton" onclick = "document.location = 'SelectFunctionsRTEngineer.html'">SAVE</button>
                <input type = "submit" id = "SubmitButton" name = "SubmitButton" hidden>
            </div>
            </form>
        </aside>
    </body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
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
            die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else
        {
            try
            {
                //echo "CONNEDCTED!!";
                //$ = $_POST[''];
                $TLName = $_POST['TLName'];
                $HaulierName = $_POST['HaulierName'];
                $GVSFlexi = $_POST['GVSFlexi'];
                $RigidArticulated = $_POST['RigidArticulated'];
                $AX = $_POST['AX'];
                $EngineNumber = $_POST['EngineNumber'];
                $EnginePower = $_POST['EnginePower'];
                $ChassisNumber = $_POST['ChassisNumber'];
                //
                $VehicleLength = $_POST['VehicleLength'];
                $VehicleWidth = $_POST['VehicleWidth'];
                $VehicleHeight = $_POST['VehicleHeight'];
                $VehicleWeight = $_POST['VehicleWeight'];
                $VehicleTotalCapacity = $_POST['VehicleTotalCapacity'];
                $TotalCompartments = $_POST['TotalCompartments'];
                //
                $TruckPrimeMoverManufacturer = $_POST['TruckPrimeMoverManufacturer'];
                $TruckPrimeMoverManufacturingDate = $_POST['TruckPrimeMoverManufacturingDate'];
                $TruckPrimeMoverBrakes = $_POST['TruckPrimeMoverBrakes'];
                //
                $TankTrailerManufacturer = $_POST['TankTrailerManufacturer'];
                $TankTrailerManufacturingDate = $_POST['TankTrailerManufacturingDate'];
                $TankTrailerBrakes = $_POST['TankTrailerBrakes'];
                //
                $CMPT1Capacity = $_POST['CMPT1Capacity'];
                $CMPT1PositiveOpeningPressure = $_POST['CMPT1PositiveOpeningPressure'];
                $CMPT1NegativeOpeningPressure = $_POST['CMPT1NegativeOpeningPressure'];
                //
                $CMPT2Capacity = $_POST['CMPT2Capacity'];
                $CMPT2PositiveOpeningPressure = $_POST['CMPT2PositiveOpeningPressure'];
                $CMPT2NegativeOpeningPressure = $_POST['CMPT2NegativeOpeningPressure'];
                //
                $CMPT3Capacity = $_POST['CMPT3Capacity'];
                $CMPT3PositiveOpeningPressure = $_POST['CMPT3PositiveOpeningPressure'];
                $CMPT3NegativeOpeningPressure = $_POST['CMPT3NegativeOpeningPressure'];
                //
                $CMPT4Capacity = $_POST['CMPT4Capacity'];
                $CMPT4PositiveOpeningPressure = $_POST['CMPT4PositiveOpeningPressure'];
                $CMPT4NegativeOpeningPressure = $_POST['CMPT4NegativeOpeningPressure'];
                //
                $CMPT5Capacity = $_POST['CMPT5Capacity'];
                $CMPT5PositiveOpeningPressure = $_POST['CMPT5PositiveOpeningPressure'];
                $CMPT5NegativeOpeningPressure = $_POST['CMPT5NegativeOpeningPressure'];
                //
                if (!empty($_POST['CarbonEightPointEightBolts']))
                {
                    $CarbonEightPointEightBolts = $_POST['CarbonEightPointEightBolts'];
                }
                else
                {
                    $CarbonEightPointEightBolts = "YES";
                }
                if (!empty($_POST['SpeedLimitingDevice']))
                {
                    $SpeedLimitingDevice = $_POST['SpeedLimitingDevice'];
                }
                else
                {
                    $SpeedLimitingDevice = "YES";
                }
                if (!empty($_POST['ReversingAlarms']))
                {
                    $ReversingAlarms = $_POST['ReversingAlarms'];
                }
                else
                {
                    $ReversingAlarms = "YES";
                }
                if (!empty($_POST['WheelNutTorqueIndicators']))
                {
                    $WheelNutTorqueIndicators = $_POST['WheelNutTorqueIndicators'];
                }
                else
                {
                    $WheelNutTorqueIndicators = "YES";
                }
                if (!empty($_POST['AEB']))
                {
                    $AEB = $_POST['AEB'];
                }
                else
                {
                    $AEB = "YES";
                }
                if (!empty($_POST['FullAirBrake']))
                {
                    $FullAirBrake = $_POST['FullAirBrake'];
                }
                else
                {
                    $FullAirBrake = "YES";
                }
                if (!empty($_POST['AirPressureBuzzer']))
                {
                    $AirPressureBuzzer = $_POST['AirPressureBuzzer'];
                }
                else
                {
                    $AirPressureBuzzer = "YES";
                }
                if (!empty($_POST['ValveCaps']))
                {
                    $ValveCaps = $_POST['ValveCaps'];
                }
                else
                {
                    $ValveCaps = "YES";
                }
                if (!empty($_POST['JumpStartPlug']))
                {
                    $JumpStartPlug = $_POST['JumpStartPlug'];
                }
                else
                {
                    $JumpStartPlug = "YES";
                }
                if (!empty($_POST['DualPoleSwitch']))
                {
                    $DualPoleSwitch = $_POST['DualPoleSwitch'];
                }
                else
                {
                    $DualPoleSwitch = "YES";
                }
                if (!empty($_POST['CrossLockDevice']))
                {
                    $CrossLockDevice = $_POST['CrossLockDevice'];
                }
                else
                {
                    $CrossLockDevice = "YES";
                }
                if (!empty($_POST['EightVSTenStuds']))
                {
                    $EightVSTenStuds = $_POST['EightVSTenStuds'];
                }
                else
                {
                    $EightVSTenStuds = "YES";
                }
                if (!empty($_POST['VRUDiaFourInches']))
                {
                    $VRUDiaFourInches = $_POST['VRUDiaFourInches'];
                }
                else
                {
                    $VRUDiaFourInches = "YES";
                }
                if (!empty($_POST['AutoSlackAdjustment']))
                {
                    $AutoSlackAdjustment = $_POST['AutoSlackAdjustment'];
                }
                else
                {
                    $AutoSlackAdjustment = "YES";
                }
                if (!empty($_POST['ForwardFacingCamera']))
                {
                    $ForwardFacingCamera = $_POST['ForwardFacingCamera'];
                }
                else
                {
                    $ForwardFacingCamera = "YES";
                }
                if (!empty($_POST['DriverFacingCamera']))
                {
                    $DriverFacingCamera = $_POST['DriverFacingCamera'];
                }
                else
                {
                    $DriverFacingCamera = "YES";
                }
                if (!empty($_POST['ActiveFatigueDetectionDevices']))
                {
                    $ActiveFatigueDetectionDevices = $_POST['ActiveFatigueDetectionDevices'];
                }
                else
                {
                    $ActiveFatigueDetectionDevices = "YES";
                }
                if (!empty($_POST['LaneDepartureWarningSystem']))
                {
                    $LaneDepartureWarningSystem = $_POST['LaneDepartureWarningSystem'];
                }
                else
                {
                    $LaneDepartureWarningSystem = "YES";
                }
                if (!empty($_POST['BlindSpotMonitoring']))
                {
                    $BlindSpotMonitoring = $_POST['BlindSpotMonitoring'];
                }
                else
                {
                    $BlindSpotMonitoring = "YES";
                }
                if (!empty($_POST['SteeringWheelAirbag']))
                {
                    $SteeringWheelAirbag = $_POST['SteeringWheelAirbag'];
                }
                else
                {
                    $SteeringWheelAirbag = "YES";
                }
                if (!empty($_POST['ForwardCollisionWarning']))
                {
                    $ForwardCollisionWarning = $_POST['ForwardCollisionWarning'];
                }
                else
                {
                    $ForwardCollisionWarning = "YES";
                }
                if (!empty($_POST['CabinRollOverProtection']))
                {
                    $CabinRollOverProtection = $_POST['CabinRollOverProtection'];
                }
                else
                {
                    $CabinRollOverProtection = "YES";
                }
                if (!empty($_POST['TankerRollOverProtection']))
                {
                    $TankerRollOverProtection = $_POST['TankerRollOverProtection'];
                }
                else
                {
                    $TankerRollOverProtection = "YES";
                }
                if (!empty($_POST['OverfillProtection']))
                {
                    $OverfillProtection = $_POST['OverfillProtection'];
                }
                else
                {
                    $OverfillProtection = "YES";
                }
                if (!empty($_POST['SideUnderRunsProtection']))
                {
                    $SideUnderRunsProtection = $_POST['SideUnderRunsProtection'];
                }
                else
                {
                    $SideUnderRunsProtection = "YES";
                }
                if (!empty($_POST['RearUnderRunsProtection']))
                {
                    $RearUnderRunsProtection = $_POST['RearUnderRunsProtection'];
                }
                else
                {
                    $RearUnderRunsProtection = "YES";
                }
                //
                $BottomTopLoading = $_POST['BottomTopLoading'];
                $LightningLEDConventional = $_POST['LightningLEDConventional'];
                $SideUnderRunsHeight = $_POST['SideUnderRunsHeight'];
                $RearUnderRunsHeight = $_POST['RearUnderRunsHeight'];
                $FrontBumperHeight = $_POST['FrontBumperHeight'];
                $CoamingHeight = $_POST['CoamingHeight'];
                $RollingGradeAbility = $_POST['RollingGradeAbility'];
                $VehiclePowerToWeightRatio = $_POST['VehiclePowerToWeightRatio'];
                //
                /* Make new folder named with TL Name */
                $DestinationFolder = "C:/xampp/htdocs/Vehicle Database Application/From Scratch/Vehicle Profiles/" . $TLName;
                mkdir($DestinationFolder);
                $DestinationFolder = $DestinationFolder . "/";
                $ThirdPartyInspectionReport = $_FILES['ThirdPartyInspectionReport']['name'];
                $HydroTestingReport = $_FILES['HydroTestingReport']['name'];
                $PVTestingReport = $_FILES['PVTestingReport']['name'];
                $TrailerTankCertificate = $_FILES['TrailerTankCertificate']['name'];
                $EmissionCertificate = $_FILES['EmissionCertificate']['name'];
                $TareweightSlip = $_FILES['TareweightSlip']['name'];

                if (!empty($ThirdPartyInspectionReport))
                {
                    $ThirdPartyInspectionReport = "" . $TLName . " - Third Party Inspection Report - " . $_FILES['ThirdPartyInspectionReport']['name'];
                    $TemporaryFileCopy = $_FILES['ThirdPartyInspectionReport']['tmp_name'];
                    move_uploaded_file($TemporaryFileCopy, $DestinationFolder.$ThirdPartyInspectionReport);
                    $ThirdPartyInspectionReport = "UPLOADED";
                }
                else
                {
                    $ThirdPartyInspectionReport = "NONE";
                }
                if (!empty($HydroTestingReport))
                {
                    $HydroTestingReport = "" . $TLName . " - Hydro Testing Report - " . $_FILES['HydroTestingReport']['name'];
                    $TemporaryFileCopy = $_FILES['HydroTestingReport']['tmp_name'];
                    move_uploaded_file($TemporaryFileCopy, $DestinationFolder.$HydroTestingReport);
                    $HydroTestingReport = "UPLOADED";
                }
                else
                {
                    $HydroTestingReport = "NONE";
                }
                if (!empty($PVTestingReport))
                {
                    $PVTestingReport = "" . $TLName . " - PV Testing Report - " . $_FILES['PVTestingReport']['name'];
                    $TemporaryFileCopy = $_FILES['PVTestingReport']['tmp_name'];
                    move_uploaded_file($TemporaryFileCopy, $DestinationFolder.$PVTestingReport);
                    $PVTestingReport = "UPLOADED";
                }
                else
                {
                    $PVTestingReport = "NONE";
                }
                if (!empty($TrailerTankCertificate))
                {
                    $TrailerTankCertificate = "" . $TLName . " - Trailer Tank Certificate - " . $_FILES['TrailerTankCertificate']['name'];
                    $TemporaryFileCopy = $_FILES['TrailerTankCertificate']['tmp_name'];
                    move_uploaded_file($TemporaryFileCopy, $DestinationFolder.$TrailerTankCertificate);
                    $TrailerTankCertificate = "UPLOADED";
                }
                else
                {
                    $TrailerTankCertificate = "NONE";
                }
                if (!empty($EmissionCertificate))
                {
                    $EmissionCertificate = "" . $TLName . " - Emission Certificate - " . $_FILES['EmissionCertificate']['name'];
                    $TemporaryFileCopy = $_FILES['EmissionCertificate']['tmp_name'];
                    move_uploaded_file($TemporaryFileCopy, $DestinationFolder.$EmissionCertificate);
                    $EmissionCertificate = "UPLOADED";
                }
                else
                {
                    $EmissionCertificate = "NONE";
                }
                if (!empty($TareweightSlip))
                {
                    $TareweightSlip = "" . $TLName . " - Tareweight Slip - " . $_FILES['TareweightSlip']['name'];
                    $TemporaryFileCopy = $_FILES['TareweightSlip']['tmp_name'];
                    move_uploaded_file($TemporaryFileCopy, $DestinationFolder.$TareweightSlip);
                    $TareweightSlip = "UPLOADED";
                }
                else
                {
                    $TareweightSlip = "NONE";
                }
                //
                $VehicleInductionDate = $_POST['VehicleInductionDate'];
                $LastCalibrationTestExpiryDate = $_POST['LastCalibrationTestExpiryDate'];
                $ExplosivesLicenseExpiryDate = $_POST['ExplosivesLicenseExpiryDate'];
                $LastHydroTestExpiryDate = $_POST['LastHydroTestExpiryDate'];
                $LastInspectionDate = $_POST['LastInspectionDate'];
                //
                $CurrentComplianceStatus = $_POST['CurrentComplianceStatus'];
                $LastActionStatus = $_POST['LastActionStatus'];
                //---------------------------------------------------------------------------------------------
                if (!empty($TLName) && !empty($HaulierName) && !empty($GVSFlexi) && !empty($RigidArticulated) && !empty($AX) && !empty($EngineNumber) && !empty($EnginePower) && !empty($ChassisNumber) && !empty($VehicleLength) && !empty($VehicleWidth) && !empty($VehicleHeight) && !empty($VehicleWeight) && !empty($VehicleTotalCapacity) && !empty($TotalCompartments) && !empty($TruckPrimeMoverManufacturer) && !empty($TruckPrimeMoverManufacturingDate) && !empty($TruckPrimeMoverBrakes) && !empty($TankTrailerManufacturer) && !empty($TankTrailerManufacturingDate) && !empty($TankTrailerBrakes) && !empty($CMPT1Capacity) && !empty($CMPT1PositiveOpeningPressure) && !empty($CMPT1NegativeOpeningPressure) && !empty($CMPT2Capacity) && !empty($CMPT2PositiveOpeningPressure) && !empty($CMPT2NegativeOpeningPressure) && !empty($CMPT3Capacity) && !empty($CMPT3PositiveOpeningPressure) && !empty($CMPT3NegativeOpeningPressure) && !empty($CMPT4Capacity) && !empty($CMPT4PositiveOpeningPressure) && !empty($CMPT4NegativeOpeningPressure) && !empty($CMPT5Capacity) && !empty($CMPT5PositiveOpeningPressure) && !empty($CMPT5NegativeOpeningPressure) && !empty($CarbonEightPointEightBolts) && !empty($SpeedLimitingDevice) && !empty($ReversingAlarms) && !empty($WheelNutTorqueIndicators) && !empty($AEB) && !empty($FullAirBrake) && !empty($AirPressureBuzzer) && !empty($ValveCaps) && !empty($JumpStartPlug) && !empty($DualPoleSwitch) && !empty($CrossLockDevice) && !empty($EightVSTenStuds) && !empty($VRUDiaFourInches) && !empty($AutoSlackAdjustment) && !empty($ForwardFacingCamera) && !empty($DriverFacingCamera) && !empty($ActiveFatigueDetectionDevices) && !empty($LaneDepartureWarningSystem) && !empty($BlindSpotMonitoring) && !empty($SteeringWheelAirbag) && !empty($ForwardCollisionWarning) && !empty($CabinRollOverProtection) && !empty($TankerRollOverProtection) && !empty($OverfillProtection) && !empty($SideUnderRunsProtection) && !empty($RearUnderRunsProtection) && !empty($BottomTopLoading) && !empty($LightningLEDConventional) && !empty($SideUnderRunsHeight) && !empty($RearUnderRunsHeight) && !empty($FrontBumperHeight) && !empty($CoamingHeight) && !empty($RollingGradeAbility) && !empty($VehiclePowerToWeightRatio) && !empty($ThirdPartyInspectionReport) && !empty($HydroTestingReport) && !empty($PVTestingReport) && !empty($TrailerTankCertificate) && !empty($EmissionCertificate) && !empty($TareweightSlip) && !empty($VehicleInductionDate) && !empty($LastCalibrationTestExpiryDate) && !empty($ExplosivesLicenseExpiryDate) && !empty($LastHydroTestExpiryDate) && !empty($LastInspectionDate) && !empty($CurrentComplianceStatus) && !empty($LastActionStatus))
                {           
                    echo "INSIDeeeeeeeeeeeeeeeeeeeeeeeeeeee";     
                    $INSERT = "INSERT INTO vehicle (TLName, HaulierName, GVSFlexi, RigidArticulated, AX, EngineNumber, EnginePower, ChassisNumber, VehicleLength, VehicleWidth, VehicleHeight, VehicleWeight, VehicleTotalCapacity, TotalCompartments, TruckPrimeMoverManufacturer, TruckPrimeMoverManufacturingDate, TruckPrimeMoverBrakes, TankTrailerManufacturer, TankTrailerManufacturingDate, TankTrailerBrakes, CMPT1Capacity, CMPT1PositiveOpeningPressure, CMPT1NegativeOpeningPressure, CMPT2Capacity, CMPT2PositiveOpeningPressure, CMPT2NegativeOpeningPressure, CMPT3Capacity, CMPT3PositiveOpeningPressure, CMPT3NegativeOpeningPressure, CMPT4Capacity, CMPT4PositiveOpeningPressure, CMPT4NegativeOpeningPressure, CMPT5Capacity, CMPT5PositiveOpeningPressure, CMPT5NegativeOpeningPressure, CarbonEightPointEightBolts, SpeedLimitingDevice, ReversingAlarms, WheelNutTorqueIndicators, AEB, FullAirBrake, AirPressureBuzzer, ValveCaps, JumpStartPlug, DualPoleSwitch, CrossLockDevice, EightVSTenStuds, VRUDiaFourInches, AutoSlackAdjustment, ForwardFacingCamera, DriverFacingCamera, ActiveFatigueDetectionDevices, LaneDepartureWarningSystem, BlindSpotMonitoring, SteeringWheelAirbag, ForwardCollisionWarning, CabinRollOverProtection, TankerRollOverProtection, OverfillProtection, SideUnderRunsProtection, RearUnderRunsProtection, BottomTopLoading, LightningLEDConventional, SideUnderRunsHeight, RearUnderRunsHeight, FrontBumperHeight, CoamingHeight, RollingGradeAbility, VehiclePowerToWeightRatio, ThirdPartyInspectionReport, HydroTestingReport, PVTestingReport, TrailerTankCertificate, EmissionCertificate, TareweightSlip, VehicleInductionDate, LastCalibrationTestExpiryDate, ExplosivesLicenseExpiryDate, LastHydroTestExpiryDate, LastInspectionDate, CurrentComplianceStatus, LastActionStatus) VALUES ('". $TLName . "','". $HaulierName . "','". $GVSFlexi . "','". $RigidArticulated . "','". $AX . "','". $EngineNumber . "','". $EnginePower . "','". $ChassisNumber . "','". $VehicleLength . "','". $VehicleWidth . "','". $VehicleHeight . "','". $VehicleWeight . "','". $VehicleTotalCapacity . "','". $TotalCompartments . "','". $TruckPrimeMoverManufacturer . "','". $TruckPrimeMoverManufacturingDate . "','". $TruckPrimeMoverBrakes . "','". $TankTrailerManufacturer . "','". $TankTrailerManufacturingDate . "','". $TankTrailerBrakes . "','". $CMPT1Capacity . "','". $CMPT1PositiveOpeningPressure . "','". $CMPT1NegativeOpeningPressure . "','". $CMPT2Capacity . "','". $CMPT2PositiveOpeningPressure . "','". $CMPT2NegativeOpeningPressure . "','". $CMPT3Capacity . "','". $CMPT3PositiveOpeningPressure . "','". $CMPT3NegativeOpeningPressure . "','". $CMPT4Capacity . "','". $CMPT4PositiveOpeningPressure . "','". $CMPT4NegativeOpeningPressure . "','". $CMPT5Capacity . "','". $CMPT5PositiveOpeningPressure . "','". $CMPT5NegativeOpeningPressure . "','". $CarbonEightPointEightBolts . "','". $SpeedLimitingDevice . "','". $ReversingAlarms . "','". $WheelNutTorqueIndicators . "','". $AEB . "','". $FullAirBrake . "','". $AirPressureBuzzer . "','". $ValveCaps . "','". $JumpStartPlug . "','". $DualPoleSwitch . "','". $CrossLockDevice . "','". $EightVSTenStuds . "','". $VRUDiaFourInches . "','". $AutoSlackAdjustment . "','". $ForwardFacingCamera . "','". $DriverFacingCamera . "','". $ActiveFatigueDetectionDevices . "','". $LaneDepartureWarningSystem . "','". $BlindSpotMonitoring . "','". $SteeringWheelAirbag . "','". $ForwardCollisionWarning . "','". $CabinRollOverProtection . "','". $TankerRollOverProtection . "','". $OverfillProtection . "','". $SideUnderRunsProtection . "','". $RearUnderRunsProtection . "','". $BottomTopLoading . "','". $LightningLEDConventional . "','". $SideUnderRunsHeight . "','". $RearUnderRunsHeight . "','". $FrontBumperHeight . "','". $CoamingHeight . "','". $RollingGradeAbility . "','". $VehiclePowerToWeightRatio . "','". $ThirdPartyInspectionReport . "','". $HydroTestingReport . "','". $PVTestingReport . "','". $TrailerTankCertificate . "','". $EmissionCertificate . "','". $TareweightSlip . "','". $VehicleInductionDate . "','". $LastCalibrationTestExpiryDate . "','". $ExplosivesLicenseExpiryDate . "','". $LastHydroTestExpiryDate . "','". $LastInspectionDate . "','". $CurrentComplianceStatus . "','". $LastActionStatus . "')";
                    if ($conn->query($INSERT))
                    {
                        //echo "New record inserted successfully";
                        echo "<script>ViewInductionCompletePage();</script>";
                    }
                    else
                    {
                        echo "Nothingggggggg";
                    }
                    $conn->close();
                }
            }
            catch (Exception $e)
            {
                echo $e;
            }
        }
    }
?>