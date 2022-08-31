<?php
    $host = "localhost"; //server name
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "cutesmalldb";                  
    //Creating connection to database
    $connection = new mysqli($host, $dbUsername, $dbPassword, $dbname);                
    //Checking connection
    if (mysqli_connect_error())
    {
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else
    {
        //echo "Connected successfully";
        $SELECT = "SELECT TLName FROM vehicle";
        $ArrayOfTLNames = mysqli_query($connection, $SELECT);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <!--Link CSS file-->
        <link rel= "stylesheet" href = "Template.css">
        <!--Link JavaScript file-->
        <script type="text/javascript" src="Template.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <!--Give webpage a name-->
        <title>Inspection Checklist</title>
        <!--Give webpage a favicon icon-->
        <link rel = "icon" type = "image/x-icon" href = "Favicon Images/favicon.ico">
        <!--Icons Link-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,700,1,-25" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <style>
            .SubHeading
            {
                text-align: left;
                margin-left: 10%;
                font-size: 25px;
                padding: 10px;
            }

            th, td
            {
                border-bottom: none;
            }

            .Heading
            {
                font-size: 35px;
            }
            
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

            .Description
            {
                font-size: 12px;
            }
        </style>
    </head>
    <body >
        <!---------------------------------------------------BACK BUTTON-------------------------------------->
        <button type = "button" class = "BackButton" onclick = "document.location = 'SelectFunctionsTerminalInspector.html'">
            <i class="material-symbols-rounded">reply</i>
        </button>

        <!-----------------------------------------------------CHECKLIST---------------------------------------->
        <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "POST" enctype = "multipart/form-data">
            <aside div class = "Checklist">
                <!---Start Inspection Page-->
                <div class = "Page" id = "StartInspectionPage">
                    <div class = "Heading">INSPECTION CHECKLIST</div>
                    <span class = "material-icons" style = "font-size: 300px; color: #ED1C24; text-align: center; margin-left: auto;margin-right: auto; padding: 30px;">
                        content_paste_search
                    </span>
                    <br/>
                    <br/>
                    <button onclick = "ViewInspectionIDPage()" div class = "ContinueButton">START</button>
                </div>
                <!--Inspection ID details: TLName, Location-->
                <div class = "Page" id = "InspectionIDPage">
                    <div class = "Heading">VEHICLE DETAILS</div>
                    <table>
                        <tbody>
                            <tr>
                                <td colspan = "2" class = "SubHeading" style = "text-align: center;">TL NAME</td>
                            </tr>
                            <tr>
                                <td colspan = "2">
                                    <input div class = "TextInput" type = "text" id = "TLName" name = "TLName" list = "TLNameList" autocomplete = "off" required>
                                    <datalist id = "TLNameList">
                                        <?php
                                            while ($row = mysqli_fetch_array($ArrayOfTLNames))
                                            {
                                        ?>
                                        <!--      <option value = "Given TL Name"> Given TL Name </option>      -->
                                        <option value = "<?php echo $row['TLName']; ?>" > <?php echo $row['TLName']; ?> </option>
                                        <?php
                                            }
                                        ?>
                                    </datalist>
                                    <?php
                                        mysqli_close($connection);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan = "2" class = "SubHeading" style = "text-align: center;">LOCATION</td>
                            </tr>
                            <tr>
                                <td td colspan = "2">
                                    <input type = "radio" id = "KMR" name = "Location" value = "KMR" required style = "display: none;">
                                    <button type = "button" id = "KMRButton" class = "LocationButton" onclick = "document.getElementById('KMR').checked = true; document.getElementById('KMRButton').style.backgroundColor = 'rgba(128, 128, 128, 0.688)'; document.getElementById('KMRButton').style.color = 'white'; document.getElementById('KMRButton').style.border = '5px solid rgba(255, 230, 0, 0.784)';">
                                        KMR
                                    </button>
                                    <input type = "radio" id = "DHP" name = "Location" value = "DHP" required style = "display: none;">
                                    <button type = "button" id = "DHPButton"  class = "LocationButton" onclick = "document.getElementById('DHP').checked = true; document.getElementById('DHPButton').style.backgroundColor = 'rgba(128, 128, 128, 0.688)'; document.getElementById('DHPButton').style.color = 'white'; document.getElementById('DHPButton').style.border = '5px solid rgba(255, 230, 0, 0.784)';">
                                        DHP
                                    </button>
                                    <input type = "radio" id = "VHR" name = "Location" value = "VHR" required style = "display: none;">
                                    <button type = "button" id = "VHRButton"  class = "LocationButton" onclick = "document.getElementById('VHR').checked = true; document.getElementById('VHRButton').style.backgroundColor = 'rgba(128, 128, 128, 0.688)'; document.getElementById('VHRButton').style.color = 'white'; document.getElementById('VHRButton').style.border = '5px solid rgba(255, 230, 0, 0.784)';">
                                        VHR
                                    </button>
                                    <input type = "radio" id = "BHK" name = "Location" value = "BHK" required style = "display: none;">
                                    <button type = "button" id = "BHKButton"  class = "LocationButton" onclick = "document.getElementById('BHK').checked = true; document.getElementById('BHKButton').style.backgroundColor = 'rgba(128, 128, 128, 0.688)'; document.getElementById('BHKButton').style.color = 'white'; document.getElementById('BHKButton').style.border = '5px solid rgba(255, 230, 0, 0.784)';">
                                        BHK
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan = "2">
                                    <input type = "radio" id = "MCH" name = "Location" value = "MCH" required style = "display: none;">
                                    <button type = "button" id = "MCHButton"  class = "LocationButton" onclick = "document.getElementById('MCH').checked = true; document.getElementById('MCHButton').style.backgroundColor = 'rgba(128, 128, 128, 0.688)'; document.getElementById('MCHButton').style.color = 'white'; document.getElementById('MCHButton').style.border = '5px solid rgba(255, 230, 0, 0.784)';">
                                        MCH
                                    </button>
                                    <input type = "radio" id = "MHK" name = "Location" value = "MHK" required style = "display: none;">
                                    <button type = "button" id = "MHKButton"  class = "LocationButton" onclick = "document.getElementById('MHK').checked = true; document.getElementById('MHKButton').style.backgroundColor = 'rgba(128, 128, 128, 0.688)'; document.getElementById('MHKButton').style.color = 'white'; document.getElementById('MHKButton').style.border = '5px solid rgba(255, 230, 0, 0.784)';">
                                        MHK
                                    </button>
                                    <input type = "radio" id = "CKL" name = "Location" value = "CKL" required style = "display: none;">
                                    <button type = "button" id = "CKLButton"  class = "LocationButton" onclick = "document.getElementById('CKL').checked = true; document.getElementById('CKLButton').style.backgroundColor = 'rgba(128, 128, 128, 0.688)'; document.getElementById('CKLButton').style.color = 'white'; document.getElementById('CKLButton').style.border = '5px solid rgba(255, 230, 0, 0.784)';">
                                        CKL
                                    <input type = "radio" id = "TJB" name = "Location" value = "TJB" required style = "display: none;">
                                    <button type = "button" id = "TJBButton"  class = "LocationButton" onclick = "document.getElementById('TJB').checked = true; document.getElementById('TJBButton').style.backgroundColor = 'rgba(128, 128, 128, 0.688)'; document.getElementById('TJBButton').style.color = 'white'; document.getElementById('TJBButton').style.border = '5px solid rgba(255, 230, 0, 0.784)';">
                                        TJB
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan = "2">
                                    <input type = "radio" id = "SKP" name = "Location" value = "SKP" required style = "display: none;">
                                    <button type = "button" id = "SKPButton"  class = "LocationButton" onclick = "document.getElementById('SKP').checked = true; document.getElementById('SKPButton').style.backgroundColor = 'rgba(128, 128, 128, 0.688)'; document.getElementById('SKPButton').style.color = 'white'; document.getElementById('SKPButton').style.border = '5px solid rgba(255, 230, 0, 0.784)';">
                                        SKP
                                    </button>
                                    <input type = "radio" id = "SWL" name = "Location" value = "SWL" required style = "display: none;">
                                    <button type = "button" id = "SWLButton"  class = "LocationButton" onclick = "document.getElementById('SWL').checked = true; document.getElementById('SWLButton').style.backgroundColor = 'rgba(128, 128, 128, 0.688)'; document.getElementById('SWLButton').style.color = 'white'; document.getElementById('SWLButton').style.border = '5px solid rgba(255, 230, 0, 0.784)';">
                                        SWL
                                    </button>
                                    <input type = "radio" id = "SSH" name = "Location" value = "SSH" required style = "display: none;">
                                    <button type = "button" id = "SSHButton"  class = "LocationButton" onclick = "document.getElementById('SSH').checked = true; document.getElementById('SSHButton').style.backgroundColor = 'rgba(128, 128, 128, 0.688)'; document.getElementById('SSHButton').style.color = 'white'; document.getElementById('SSHButton').style.border = '5px solid rgba(255, 230, 0, 0.784)';">
                                        SSH
                                    </button>
                                    <input type = "radio" id = "QUETTA" name = "Location" value = "QUETTA" required style = "display: none;">
                                    <button type = "button" id = "QUETTAButton"  class = "LocationButton" onclick = "document.getElementById('QUETTA').checked = true; document.getElementById('QUETTAButton').style.backgroundColor = 'rgba(128, 128, 128, 0.688)'; document.getElementById('QUETTAButton').style.color = 'white'; document.getElementById('QUETTAButton').style.border = '5px solid rgba(255, 230, 0, 0.784)';">
                                        QUETTA
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button onclick = "ViewPreviousInspectionSummaryPage()" div class = "ContinueButton">CONTINUE</button>
                    <br />
                </div>
                <!--Previous Inspection Summary: TLName, Hauiler Name, Location, DateAndTime, Faults Detected, Additonal Remarks, Images??, Compliance Status, Action, Notified-->
                <div class = "Page" id = "PreviousInspectionSummaryPage">
                    <!-- ADD PHP HERE-->
                    <div class = "Heading">PREVIOUS INSPECTION SUMMARY</div>
                    <div class = "SubHeading">TL NAME:
                        <br>
                        <span class = "Description" id = "PreviousInspectionSummaryTLName"></span>
                    </div>
                    <div class = "SubHeading">HAULIER NAME:
                        <br>
                        <span class = "Description" id = "PreviousInspectionSummaryHaulierName"></span>
                    </div>
                    <div class = "SubHeading">LAST INSPECTION DATE:
                        <br>
                        <span class = "Description" id = "PreviousInspectionSummaryLastInspectionDate"></span>    
                    </div>
                    <div class = "SubHeading">LOCATION:
                        <br>
                        <span class = "Description" id = "PreviousInspectionSummaryLocation"></span>   
                    </div>
                    <div class = "SubHeading">INSPECTION SUMMARY:
                        <br>
                        <span class = "Description" id = "PreviousInspectionSummaryInspectionSummary"></span>
                    </div>
                    <div class = "SubHeading">COMPLIANCE STATUS:
                        <br>
                        <span class = "Description" id = "PreviousInspectionSummaryComplianceStatus"></span>
                    </div>
                    <div class = "SubHeading">ACTION TAKEN:
                        <br>
                        <span class = "Description" id = "PreviousInspectionSummaryActionStatus"></span>
                    </div>
                    <div class = "SubHeading">NOTIFIED PARTIES:
                        <br>
                        <span class = "Description" id = "PreviousInspectionSummaryNotify"></span>
                    </div>

                    <button onclick = "ViewInspectionIDPage()" div class = "PreviousButton">PREVIOUS</button>
                    <button onclick = "ViewExpiryDatesCheckPage()" div class = "ContinueButton">CONTINUE</button>
                    <br />
                </div>
                <!--Expriy Dates Check: Full checklist-->
                <div class = "Page" id = "ExpiryDatesCheckPage">
                    <!-- ADD PHP CODE HERE-->
                    <div class = "Heading">EXPIRY DATES CHECK</div>
                    <div class = "SubHeading">CALIBRATION:
                        <br>
                        <span class = "Description" id = "PreviousInspectionSummaryLastCalibrationTestExpiryDate"></span>
                    </div>
                    <div class = "SubHeading">EXPLOSIVES LICENSE:
                        <br>
                        <span class = "Description" id = "PreviousInspectionSummaryExplosivesLicenseExpiryDate"></span>
                    </div>
                    <div class = "SubHeading">HYDROTEST:
                        <br>
                        <span class = "Description" id = "PreviousInspectionSummaryLastHydroTestExpiryDate"></span>
                    </div>

                    <button onclick = "ViewPreviousInspectionSummaryPage()" div class = "PreviousButton">PREVIOUS</button>
                    <button onclick = "ViewVehicleDocumentsPage()" div class = "ContinueButton">CONTINUE</button>
                    <br />
                </div>
                <!--Vehicle Documents Page: Full checklist-->
                <div class = "Page" id = "VehicleDocumentsPage">
                    <div class = "Heading">VEHICLE DOCUMENTS</div>
                    <table>
                        <thead>
                            <th>DOCUMENT</th>
                            <th>PRESENT</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Valid CNIC
                                </td>
                                <td>
                                    <label for = "ValidCNIC" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "ValidCNIC" name = "ValidCNIC">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Valid HTV License
                                </td>
                                <td>
                                    <label for = "ValidHTVLicense" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "ValidHTVLicense" name = "ValidHTVLicense">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Vehicle Registration Documents
                                </td>
                                <td>
                                    <label for = "VehicleRegistrationDocuments" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "VehicleRegistrationDocuments" name = "VehicleRegistrationDocuments">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Term Card
                                </td>
                                <td>
                                    <label for = "TermCard" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "TermCard" name = "TermCard">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Handbook
                                </td>
                                <td>
                                    <label for = "Handbook" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "Handbook" name = "Handbook">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Fitness Certificate
                                </td>
                                <td>
                                    <label for = "FitnessCertificate" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "FitnessCertificate" name = "FitnessCertificate">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Explosives License
                                </td>
                                <td>
                                    <label for = "ExplosivesLicense" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "ExplosivesLicense" name = "ExplosivesLicense">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type = "file" id = "VehicleDocumentsImageUpload" name = "VehicleDocumentsImageUpload" onchange = "document.getElementById('VehicleDocumentsImageUploadIcon').style.display = 'none'; document.getElementById('VehicleDocumentsImageUploadDone').style.display = 'block';" hidden>
                                    <button type = "button" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('VehicleDocumentsImageUpload').click();">
                                        <span class = "material-icons-round" id = "VehicleDocumentsImageUploadDone" style = "font-size: 40px; color: #1db11a; display: none;">check_circle</span>
                                        <span class = "material-icons-outlined" id = "VehicleDocumentsImageUploadIcon" style = "font-size: 40px;">file_upload</span><br>
                                        <br/>
                                        Upload Image
                                    </button>
                                </td>
                                <td>
                                    <input type = "text" id = "VehicleDocumentsFurtherComments" name = "VehicleDocumentsFurtherComments" style = "display: none; width: 100%; height: 100%; text-align: center;" placeholder = "Futher comments (if any)...">
                                    <button type = "button" id = "VehicleDocumentsFurtherCommentsButton" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('VehicleDocumentsFurtherComments').style.display = 'block'; document.getElementById('VehicleDocumentsFurtherCommentsButton').style.display = 'none'">
                                        <span class = "material-icons" style = "font-size: 40px;">comment</span>
                                        <br/>
                                        Further Comments
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button onclick = "ViewExpiryDatesCheckPage()" div class = "PreviousButton">PREVIOUS</button>
                    <button onclick = "ViewSafetyEquipmentChecklistPage()" div class = "ContinueButton">CONTINUE</button>
                    

                    <br />
                </div>
                <!--Safety Equipment Checklist Page: Full checklist-->
                <div class = "Page" id = "SafetyEquipmentChecklistPage">
                    <div class = "Heading">SAFETY EQUIPMENT CHECKLIST</div>
                    <table>
                        <thead>
                            <th>ITEM</th>
                            <th>OK</th>
                            <th>DAMAGED</th>
                            <th>MISSING</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Hazchem Codes
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "HazchemCodesOK" name = "HazchemCodes" value = "OK"  required>
                                        <span class = "OKButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "HazchemCodesDamaged" name = "HazchemCodes" value = "Damaged">
                                        <span class = "YellowButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "HazchemCodesMissing" name = "HazchemCodes" value = "Missing">
                                        <span class = "RedButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Driver PPE
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "DriverPPEOK" name = "DriverPPE" value = "OK"  required>
                                        <span class = "OKButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "DriverPPEDamaged" name = "DriverPPE" value = "Damaged">
                                        <span class = "YellowButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "DriverPPEMissing" name = "DriverPPE" value = "Missing">
                                        <span class = "RedButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Mask Respirator
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "MaskRespiratorOK" name = "MaskRespirator" value = "OK"  required>
                                        <span class = "OKButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "MaskRespiratorDamaged" name = "MaskRespirator" value = "Damaged">
                                        <span class = "YellowButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "MaskRespiratorMissing" name = "MaskRespirator" value = "Missing">
                                        <span class = "RedButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Safety Cones With Reflective Tape
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "SafetyConesWithReflectiveTapeOK" name = "SafetyConesWithReflectiveTape" value = "OK"  required>
                                        <span class = "OKButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "SafetyConesWithReflectiveTapeDamaged" name = "SafetyConesWithReflectiveTape" value = "Damaged">
                                        <span class = "YellowButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "SafetyConesWithReflectiveTapeMissing" name = "SafetyConesWithReflectiveTape" value = "Missing">
                                        <span class = "RedButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    First Aid Box
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "FirstAidBoxOK" name = "FirstAidBox" value = "OK"  required>
                                        <span class = "OKButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "FirstAidBoxDamaged" name = "FirstAidBox" value = "Damaged">
                                        <span class = "YellowButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "FirstAidBoxMissing" name = "FirstAidBox" value = "Missing">
                                        <span class = "RedButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Spill Kit
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "SpillKitOK" name = "SpillKit" value = "OK"  required>
                                        <span class = "OKButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "SpillKitDamaged" name = "SpillKit" value = "Damaged">
                                        <span class = "YellowButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "SpillKitMissing" name = "SpillKit" value = "Missing">
                                        <span class = "RedButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Explosives-proof Torch
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "ExplosivesProofTorchOK" name = "ExplosivesProofTorch" value = "OK" required>
                                        <span class = "OKButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "ExplosivesProofTorchDamaged" name = "ExplosivesProofTorch" value = "Damaged">
                                        <span class = "YellowButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "ExplosivesProofTorchMissing" name = "ExplosivesProofTorch" value = "Missing">
                                        <span class = "RedButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Spare Tyre
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "SpareTyreOK" name = "SpareTyre" value = "OK" required>
                                        <span class = "OKButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "SpareTyreDamaged" name = "SpareTyre" value = "Damaged">
                                        <span class = "YellowButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "SpareTyreMissing" name = "SpareTyre" value = "Missing">
                                        <span class = "RedButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Fire Extinguisher
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "FireExtinguisherOK" name = "FireExtinguisher" value = "OK" required>
                                        <span class = "OKButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "FireExtinguisherDamaged" name = "FireExtinguisher" value = "Damaged">
                                        <span class = "YellowButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "FireExtinguisherMissing" name = "FireExtinguisher" value = "Missing">
                                        <span class = "RedButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan = "2">
                                    <input type = "file" id = "SafetyEquipmentImageUpload" name = "SafetyEquipmentImageUpload" style = "display: none;" onchange = "document.getElementById('SafetyEquipmentImageUploadIcon').style.display = 'none'; document.getElementById('SafetyEquipmentImageUploadDone').style.display = 'block';" hidden>
                                    <button type = "button" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('SafetyEquipmentImageUpload').click();">
                                        <span class = "material-icons-round" id = "SafetyEquipmentImageUploadDone" style = "font-size: 40px; color: #1db11a; display: none;">check_circle</span>
                                        <span class = "material-icons-outlined" id = "SafetyEquipmentImageUploadIcon" style = "font-size: 40px;">file_upload</span><br>
                                        <br/>
                                        Upload Image
                                    </button>
                                </td>
                                <td colspan = "2">
                                    <input type = "text" id = "SafetyEquipmentFurtherComments" name = "SafetyEquipmentFurtherComments" style = "display: none; width: 100%; height: 100%; text-align: center;" placeholder = "Futher comments (if any)...">
                                    <button type = "button" id = "SafetyEquipmentFurtherCommentsButton" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('SafetyEquipmentFurtherComments').style.display = 'block'; document.getElementById('SafetyEquipmentFurtherCommentsButton').style.display = 'none'">
                                        <span class = "material-icons" style = "font-size: 40px;">comment</span><br>
                                        <br/>
                                        Further Comments
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button onclick = "ViewVehicleDocumentsPage()" div class = "PreviousButton">PREVIOUS</button>
                    <button onclick = "ViewTyresInspectionPage()" div class = "ContinueButton">CONTINUE</button>

                    <br />
                </div>
                <!--Tyres Inspection Page: Full checklist-->
                <div class = "Page" id = "TyresInspectionPage">
                    <div class = "Heading">TYRES INSPECTION</div>
                    <table>
                        <thead>
                            <th>PROPERTY</th>
                            <th>PASS/FAIL</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Tyre Depth < 2mm
                                </td>
                                <td>
                                    <label for = "TyreDepth" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "TyreDepth" name = "TyreDepth">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Air Pressure
                                </td>
                                <td>
                                    <label for = "AirPressure" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "AirPressure" name = "AirPressure">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Wires Visibility
                                </td>
                                <td>
                                    <label for = "WiresVisibility" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "WiresVisibility" name = "WiresVisibility">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type = "file" id = "TyresImageUpload" name = "TyresImageUpload" style = "display: none;" onchange = "document.getElementById('TyresImageUploadIcon').style.display = 'none'; document.getElementById('TyresImageUploadDone').style.display = 'block';" hidden>
                                    <button type = "button" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('TyresImageUpload').click();">
                                        <span class = "material-icons-round" id = "TyresImageUploadDone" style = "font-size: 40px; color: #1db11a; display: none;">check_circle</span>
                                        <span class = "material-icons-outlined" id = "TyresImageUploadIcon" style = "font-size: 40px;">file_upload</span><br>
                                        <br/>
                                        Upload Image
                                    </button>
                                </td>
                                <td>
                                    <input type = "text" id = "TyresFurtherComments" name = "TyresFurtherComments" style = "display: none; width: 100%; height: 100%; text-align: center;" placeholder = "Futher comments (if any)...">
                                    <button type = "button" id = "TyresFurtherCommentsButton" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('TyresFurtherComments').style.display = 'block'; document.getElementById('TyresFurtherCommentsButton').style.display = 'none'">
                                        <span class = "material-icons" style = "font-size: 40px;">comment</span><br>
                                        <br/>
                                        Further Comments
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button onclick = "ViewSafetyEquipmentChecklistPage()" div class = "PreviousButton">PREVIOUS</button>
                    <button onclick = "ViewLightsInspectionPage()" div class = "ContinueButton">CONTINUE</button>
                    

                    <br />
                </div>
                <!--Lights Inspection Page: Full checklist-->
                <div class = "Page" id = "LightsInspectionPage">
                    <div class = "Heading">LIGHTS INSPECTION</div>
                    <table>
                        <thead>
                            <th></th>
                            <th>OK</th>
                            <th>DIMMING</th>
                            <th>DAMAGED</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    DRL
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "DRLOK" name = "DRL" value = "OK" required>
                                        <span class = "OKButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "DRLDimming" name = "DRL" value = "Dimming">
                                        <span class = "YellowButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "DRLDamaged" name = "DRL" value = "Damaged">
                                        <span class = "RedButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Cabin Light
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "CabinLightOK" name = "CabinLight" value = "OK" required>
                                        <span class = "OKButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "CabinLightDimming" name = "CabinLight" value = "Dimming">
                                        <span class = "YellowButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "CabinLightDamaged" name = "CabinLight" value = "Damaged">
                                        <span class = "RedButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Head Light
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "HeadLightOK" name = "HeadLight" value = "OK" required>
                                        <span class = "OKButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "HeadLightDimming" name = "HeadLight" value = "Dimming">
                                        <span class = "YellowButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "HeadLightDamaged" name = "HeadLight" value = "Damaged">
                                        <span class = "RedButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Brake Light
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "BrakeLightOK" name = "BrakeLight" value = "OK" required>
                                        <span class = "OKButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "BrakeLightDimming" name = "BrakeLight" value = "Dimming">
                                        <span class = "YellowButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "BrakeLightDamaged" name = "BrakeLight" value = "Damaged">
                                        <span class = "RedButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Fog Light
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "FogLightOK" name = "FogLight" value = "OK" required>
                                        <span class = "OKButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "FogLightDimming" name = "FogLight" value = "Dimming">
                                        <span class = "YellowButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "FogLightDamaged" name = "FogLight" value = "Damaged">
                                        <span class = "RedButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Parking Light
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "ParkingLightOK" name = "ParkingLight" value = "OK" required>
                                        <span class = "OKButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "ParkingLightDimming" name = "ParkingLight" value = "Dimming">
                                        <span class = "YellowButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "ParkingLightDamaged" name = "ParkingLight" value = "Damaged">
                                        <span class = "RedButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Indicator
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "IndicatorLightOK" name = "IndicatorLight" value = "OK" required>
                                        <span class = "OKButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "IndicatorLightDimming" name = "IndicatorLight" value = "Dimming">
                                        <span class = "YellowButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "IndicatorLightDamaged" name = "IndicatorLight" value = "Damaged">
                                        <span class = "RedButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ABS Light
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "ABSLightOK" name = "ABSLight" value = "OK" required>
                                        <span class = "OKButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "ABSLightDimming" name = "ABSLight" value = "Dimming">
                                        <span class = "YellowButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "ABSLightDamaged" name = "ABSLight" value = "Damaged">
                                        <span class = "RedButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan = "2">
                                    <input type = "file" id = "LightsImageUpload" name = "LightsImageUpload" style = "display: none;" onchange = "document.getElementById('LightsImageUploadIcon').style.display = 'none'; document.getElementById('LightsImageUploadDone').style.display = 'block';" hidden>
                                    <button type = "button" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('LightsImageUpload').click();">
                                        <span class = "material-icons-round" id = "LightsImageUploadDone" style = "font-size: 40px; color: #1db11a; display: none;">check_circle</span>
                                        <span class = "material-icons-outlined" id = "LightsImageUploadIcon" style = "font-size: 40px;">file_upload</span><br>
                                        <br/>
                                        Upload Image
                                    </button>
                                </td>
                                <td colspan = "2">
                                    <input type = "text" id = "LightsFurtherComments" name = "LightsFurtherComments" style = "display: none; width: 100%; height: 100%; text-align: center;" placeholder = "Futher comments (if any)...">
                                    <button type = "button" id = "LightsFurtherCommentsButton" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('LightsFurtherComments').style.display = 'block'; document.getElementById('LightsFurtherCommentsButton').style.display = 'none'">
                                        <span class = "material-icons" style = "font-size: 40px;">comment</span><br>
                                        <br/>
                                        Further Comments
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button onclick = "ViewTyresInspectionPage()" div class = "PreviousButton">PREVIOUS</button>
                    <button onclick = "ViewHornsBuzzersInspectionPage()" div class = "ContinueButton">CONTINUE</button>
                    
                    <br />
                </div>
                <!--Horns & Buzzers Page: Full checklist-->
                <div class = "Page" id = "HornsBuzzersInspectionPage">
                    <div class = "Heading">HORNS/BUZZERS INSPECTION</div>
                    <table>
                        <thead>
                            <th></th>
                            <th>OK</th>
                            <th>WEAKENING</th>
                            <th>DAMAGED</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Horn
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "HornOK" name = "Horn" value = "OK" required>
                                        <span class = "OKButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "HornWeakening" name = "Horn" value = "Weakening">
                                        <span class = "YellowButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "HornDamaged" name = "Horn" value = "Damaged">
                                        <span class = "RedButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Reverse Buzzer
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "ReverseBuzzerOK" name = "ReverseBuzzer" value = "OK" required>
                                        <span class = "OKButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "ReverseBuzzerWeakening" name = "ReverseBuzzer" value = "Weakening">
                                        <span class = "YellowButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "ReverseBuzzerDamaged" name = "ReverseBuzzer" value = "Damaged">
                                        <span class = "RedButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ID Key Buzzer
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "IDKeyBuzzerOK" name = "IDKeyBuzzer" value = "OK" required>
                                        <span class = "OKButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "IDKeyBuzzerWeakening" name = "IDKeyBuzzer" value = "Weakening">
                                        <span class = "YellowButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                                <td>
                                    <label class = "container">
                                        <input type = "radio" id = "IDKeyBuzzerDamaged" name = "IDKeyBuzzer" value = "Damaged">
                                        <span class = "RedButton"></span>
                                        <br/><br/>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan = "2">
                                    <input type = "file" id = "HornsBuzzersImageUpload" name = "HornsBuzzersImageUpload" style = "display: none;" onchange = "document.getElementById('HornsBuzzersImageUploadIcon').style.display = 'none'; document.getElementById('HornsBuzzersImageUploadDone').style.display = 'block';" hidden>
                                    <button type = "button" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('HornsBuzzersImageUpload').click();">
                                        <span class = "material-icons-round" id = "HornsBuzzersImageUploadDone" style = "font-size: 40px; color: #1db11a; display: none;">check_circle</span>
                                        <span class = "material-icons-outlined"  id = "HornsBuzzersImageUploadIcon" style = "font-size: 40px;">file_upload</span><br>
                                        <br/>
                                        Upload Image
                                    </button>
                                </td>
                                <td colspan = "2">
                                    <input type = "text" id = "HornsBuzzersFurtherComments" name = "HornsBuzzersFurtherComments" style = "display: none; width: 100%; height: 100%; text-align: center;" placeholder = "Futher comments (if any)...">
                                    <button type = "button" id = "HornsBuzzersFurtherCommentsButton" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('HornsBuzzersFurtherComments').style.display = 'block'; document.getElementById('HornsBuzzersFurtherCommentsButton').style.display = 'none'">
                                        <span class = "material-icons" style = "font-size: 40px;">comment</span><br>
                                        <br/>
                                        Further Comments
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button onclick = "ViewLightsInspectionPage()" div class = "PreviousButton">PREVIOUS</button>
                    <button onclick = "ViewSwitchesValvesCablesPage()" div class = "ContinueButton">CONTINUE</button>

                    <br />
                </div>
                <!--Switches Page: Full checklist-->
                <div class = "Page" id = "SwitchesValvesCablesPage">
                    <div class = "Heading">SWITCHES, VALVES & CABLES INSPECTION</div>
                    <table>
                        <thead>
                            <th>ITEM</th>
                            <th>PASS/FAIL</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Interlock Switch
                                </td>
                                <td>
                                    <label for = "InterlockSwitch" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "InterlockSwitch" name = "InterlockSwitch">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Master Switch
                                </td>
                                <td>
                                    <label for = "MasterSwitch" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "MasterSwitch" name = "MasterSwitch">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Engine Cut-off Switch
                                </td>
                                <td>
                                    <label for = "EngineCutOffSwitch" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "EngineCutOffSwitch" name = "EngineCutOffSwitch">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Valves
                                </td>
                                <td>
                                    <label for = "Valves" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "Valves" name = "Valves">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Earthing Cable
                                </td>
                                <td>
                                    <label for = "EarthingCable" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "EarthingCable" name = "EarthingCable">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Earthing Strip
                                </td>
                                <td>
                                    <label for = "EarthingStrip" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "EarthingStrip" name = "EarthingStrip">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Wiring Insulation
                                </td>
                                <td>
                                    <label for = "WiringInsulation" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "WiringInsulation" name = "WiringInsulation">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type = "file" id = "SwitchesValvesCablesImageUpload" name = "SwitchesValvesCablesImageUpload" style = "display: none;" onchange = "document.getElementById('SwitchesValvesCablesImageUploadIcon').style.display = 'none'; document.getElementById('SwitchesValvesCablesImageUploadDone').style.display = 'block';" hidden>
                                    <button type = "button" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('SwitchesValvesCablesImageUpload').click();">
                                        <span class = "material-icons-round" id = "SwitchesValvesCablesImageUploadDone" style = "font-size: 40px; color: #1db11a; display: none;">check_circle</span>
                                        <span class = "material-icons-outlined"  id = "SwitchesValvesCablesImageUploadIcon" style = "font-size: 40px;">file_upload</span><br>
                                        <br/>
                                        Upload Image
                                    </button>
                                </td>
                                <td>
                                    <input type = "text" id = "SwitchesValvesCablesFurtherComments" name = "SwitchesValvesCablesFurtherComments" style = "display: none; width: 100%; height: 100%; text-align: center;" placeholder = "Futher comments (if any)...">
                                    <button type = "button" id = "SwitchesValvesCablesFurtherCommentsButton" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('SwitchesValvesCablesFurtherComments').style.display = 'block'; document.getElementById('SwitchesValvesCablesFurtherCommentsButton').style.display = 'none'">
                                        <span class = "material-icons" style = "font-size: 40px;">comment</span><br>
                                        <br/>
                                        Further Comments
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button onclick = "ViewHornsBuzzersInspectionPage()" div class = "PreviousButton">PREVIOUS</button>
                    <button onclick = "ViewCoversPipesGuardsPage()" div class = "ContinueButton">CONTINUE</button>
                    

                    <br />
                </div>
                <!--Covers, Pipes, Guards Page: Full checklist-->
                <div class = "Page" id = "CoversPipesGuardsPage">
                    <div class = "Heading">COVERS, PIPES & GUARDS INSPECTION</div>
                    <table>
                        <thead>
                            <th>ITEM</th>
                            <th>PASS/FAIL</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Frontguard
                                </td>
                                <td>
                                    <label for = "Frontguard" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "Frontguard" name = "Frontguard">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Rearguard
                                </td>
                                <td>
                                    <label for = "Rearguard" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "Rearguard" name = "Rearguard">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Sideguard
                                </td>
                                <td>
                                    <label for = "Sideguard" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "Sideguard" name = "Sideguard">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Safety Railing And Lock
                                </td>
                                <td>
                                    <label for = "SafetyRailingAndLock" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "SafetyRailingAndLock" name = "SafetyRailingAndLock">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Manhole Cover
                                </td>
                                <td>
                                    <label for = "ManHoleCover" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "ManHoleCover" name = "ManHoleCover">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Fuel Tank Cap
                                </td>
                                <td>
                                    <label for = "FuelTankCap" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "FuelTankCap" name = "FuelTankCap">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Sealing System
                                </td>
                                <td>
                                    <label for = "SealingSystem" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "SealingSystem" name = "SealingSystem">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Hose
                                </td>
                                <td>
                                    <label for = "Hose" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "Hose" name = "Hose">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    VDU Pipeline
                                </td>
                                <td>
                                    <label for = "VDUPipeline" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "VDUPipeline" name = "VDUPipeline">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Pressure Gauge
                                </td>
                                <td>
                                    <label for = "PressureGauge" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "PressureGauge" name = "PressureGauge">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type = "file" id = "CoversPipesGuardsImageUpload" name = "CoversPipesGuardsImageUpload" style = "display: none;" onchange = "document.getElementById('CoversPipesGuardsImageUploadIcon').style.display = 'none'; document.getElementById('CoversPipesGuardsImageUploadDone').style.display = 'block';" hidden>
                                    <button type = "button" style = "height: 100%; padding: 20px;"onclick = "document.getElementById('CoversPipesGuardsImageUpload').click();">
                                        <span class = "material-icons-round" id = "CoversPipesGuardsImageUploadDone" style = "font-size: 40px; color: #1db11a; display: none;">check_circle</span>
                                        <span class = "material-icons-outlined" id = "CoversPipesGuardsImageUploadIcon" style = "font-size: 40px;">file_upload</span><br>
                                        <br/>
                                        Upload Image
                                    </button>
                                </td>
                                <td>
                                    <input type = "text" id = "CoversPipesGuardsFurtherComments" name = "CoversPipesGuardsFurtherComments" style = "display: none; width: 100%; height: 100%; text-align: center;" placeholder = "Futher comments (if any)...">
                                    <button type = "button" id = "CoversPipesGuardsFurtherCommentsButton" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('CoversPipesGuardsFurtherComments').style.display = 'block'; document.getElementById('CoversPipesGuardsFurtherCommentsButton').style.display = 'none'">
                                        <span class = "material-icons" style = "font-size: 40px;">comment</span><br>
                                        <br/>
                                        Further Comments
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button onclick = "ViewSwitchesValvesCablesPage()" div class = "PreviousButton">PREVIOUS</button>
                    <button onclick = "ViewMiscellaneousPartsPage()" div class = "ContinueButton">CONTINUE</button>

                    <br />
                </div>
                <!--Miscellaneous Parts Page: Full checklist-->
                <div class = "Page" id = "MiscellaneousPartsPage">
                    <div class = "Heading">MISCELLANEOUS PARTS INSPECTION</div>
                    <table>
                        <thead>
                            <th>ITEM</th>
                            <th>PASS/FAIL</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Pedal Rubbers
                                </td>
                                <td>
                                    <label for = "PedalRubbers" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "PedalRubbers" name = "PedalRubbers">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Three-point Seatbelt
                                </td>
                                <td>
                                    <label for = "ThreePointSeatbelt" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "ThreePointSeatbelt" name = "ThreePointSeatbelt">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Steering Wheel Adjustment
                                </td>
                                <td>
                                    <label for = "SteeringWheelAdjustment" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "SteeringWheelAdjustment" name = "SteeringWheelAdjustment">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    AC/Heater
                                </td>
                                <td>
                                    <label for = "ACHeater" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "ACHeater" name = "ACHeater">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Front Bumper
                                </td>
                                <td>
                                    <label for = "FrontBumper" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "FrontBumper" name = "FrontBumper">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Rear Bumper
                                </td>
                                <td>
                                    <label for = "RearBumper" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "RearBumper" name = "RearBumper">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Automatic Slack Adjuster
                                </td>
                                <td>
                                    <label for = "AutomaticSlackAdjuster" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "AutomaticSlackAdjuster" name = "AutomaticSlackAdjuster">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Wiper
                                </td>
                                <td>
                                    <label for = "Wiper" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "Wiper" name = "Wiper">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Spray
                                </td>
                                <td>
                                    <label for = "Spray" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "Spray" name = "Spray">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Battery
                                </td>
                                <td>
                                    <label for = "Battery" class = "switch">
                                        <input type = "checkbox" value = "FAIL" id = "Battery" name = "Battery">
                                        <span class = "slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type = "file" id = "MiscellaneousPartsImageUpload" name = "MiscellaneousPartsImageUpload" style = "display: none;" onchange = "document.getElementById('MiscellaneousPartsImageUploadIcon').style.display = 'none'; document.getElementById('MiscellaneousPartsImageUploadDone').style.display = 'block';" hidden>
                                    <button type = "button" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('MiscellaneousPartsImageUpload').click();">
                                        <span class = "material-icons-round" id = "MiscellaneousPartsImageUploadDone" style = "font-size: 40px; color: #1db11a; display: none;">check_circle</span>
                                        <span class = "material-icons-outlined" id = "MiscellaneousPartsImageUploadIcon" style = "font-size: 40px;">file_upload</span><br>
                                        <br/>
                                        Upload Image
                                    </button>
                                </td>
                                <td>
                                    <input type = "text" id = "MiscellaneousPartsFurtherComments" name = "MiscellaneousPartsFurtherComments" style = "display: none; width: 100%; height: 100%; text-align: center;" placeholder = "Futher comments (if any)...">
                                    <button type = "button" id = "MiscellaneousPartsFurtherCommentsButton" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('MiscellaneousPartsFurtherComments').style.display = 'block'; document.getElementById('MiscellaneousPartsFurtherCommentsButton').style.display = 'none'">
                                        <span class = "material-icons" style = "font-size: 40px;">comment</span><br>
                                        <br/>
                                        Further Comments
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button onclick = "ViewCoversPipesGuardsPage()" div class = "PreviousButton">PREVIOUS</button>
                    <button onclick = "ViewAdditionalRemarksPage()" div class = "ContinueButton">CONTINUE</button>
                    

                    <br />
                </div>
                <!--Additnal Remarks Page: Full checklist-->
                <div class = "Page" id = "AdditionalRemarksPage">
                    <div class = "Heading">ADDITIONAL REMARKS</div>
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <input type = "file" id = "AdditionalRemarksImageUpload" name = "AdditionalRemarksImageUpload" style = "display: none;" onchange = "document.getElementById('AdditionalRemarksImageUploadIcon').style.display = 'none'; document.getElementById('AdditionalRemarksImageUploadDone').style.display = 'block';" hidden>
                                    <button type = "button" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('AdditionalRemarksImageUpload').click();">
                                        <span class = "material-icons-round" id = "AdditionalRemarksImageUploadDone" style = "font-size: 40px; color: #1db11a; display: none;">check_circle</span>
                                        <span class = "material-icons-outlined" id = "AdditionalRemarksImageUploadIcon" style = "font-size: 40px;">file_upload</span><br>
                                        <br/>
                                        Upload Image
                                    </button>
                                </td>
                                <td>
                                    <input type = "text" id = "AdditionalRemarksFurtherComments" name = "AdditionalRemarksFurtherComments" style = "display: none; width: 100%; height: 100%; text-align: center;" placeholder = "Futher comments (if any)...">
                                    <button type = "button" id = "AdditionalRemarksFurtherCommentsButton" style = "height: 100%; padding: 20px;" onclick = "document.getElementById('AdditionalRemarksFurtherComments').style.display = 'block'; document.getElementById('AdditionalRemarksFurtherCommentsButton').style.display = 'none'">
                                        <span class = "material-icons" style = "font-size: 40px;">comment</span><br>
                                        <br/>
                                        Further Comments
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button onclick = "ViewMiscellaneousPartsPage()" div class = "PreviousButton">PREVIOUS</button>
                    <button onclick = "ViewConsclusiveRemarksPage()" div class = "ContinueButton">CONTINUE</button>

                    <br />
                </div>
                <!--Conclusive Remarks Checklist Page: Full checklist-->
                <div class = "Page" id = "ConclusiveRemarksPage">
                    <div class = "Heading">CONCLUSIVE REMARKS</div>
                    <div class = "SubHeading">Compliance Status:</div>
                    <label class = "container2">Fit
                        <input type = "radio" id = "ComplianceStatusFit" name = "ComplianceStatus" value = "Fit" required>
                        <span class = "checkmark2" id = "OKButton"></span>
                        <br/>
                    </label>
                    <br/>
                    <label class = "container2">Delayable Concerns
                        <input type = "radio" id = "ComplianceStatusDelayable" name = "ComplianceStatus" value = "Delayable Concerns">
                        <span class = "checkmark2" id = "YellowButton"></span>
                        <br/>
                    </label>
                    <br/>
                    <label class = "container2">Previous Concerns Not Rectified
                        <input type = "radio" id = "ComplianceStatusPreviousConcernsNotRectified" name = "ComplianceStatus" value = "Previous Concerns Not Rectified">
                        <span class = "checkmark2" id = "OrangeButton"></span>
                        <br/>
                    </label>
                    <br/>
                    <label class = "container2">Critical
                        <input type = "radio" id = "ComplianceStatusCritical" name = "ComplianceStatus" value = "Critical">
                        <span class = "checkmark2" id = "RedButton"></span>
                        <br/>
                    </label>
                    <br/><br/>
                    <div class = "SubHeading">Action:</div>
                    <label class = "container2">Allow
                        <input type = "radio" id = "ActionStatusAllow" name = "ActionStatus" value = "Allow" required>
                        <span class = "checkmark2" id = "OKButton"></span>
                        <br/>
                    </label>
                    <br/>
                    <label class = "container2">Allow With Warning
                        <input type = "radio" id = "ActionStatusAllowWithWarning" name = "ActionStatus" value = "Allow With Warning">
                        <span class = "checkmark2" id = "YellowButton"></span>
                        <br/>
                    </label>
                    <br/>
                    <label class = "container2">Refuse Loading
                        <input type = "radio" id = "ActionStatusRefuseLoading" name = "ActionStatus" value = "Refuse Loading">
                        <span class = "checkmark2" id = "RedButton"></span>
                        <br/>
                    </label>
                    <br/><br/>
                    <div class = "SubHeading">Notify:</div>
                    <label class = "container1">RT Engineer
                        <input type = "checkbox" id = "NotifyRTEngineer" name = "Notify[]" value = "RT Engineer">
                        <span class = "checkmark1"></span>
                        <br/>
                    </label>
                    <br/>
                    <label class = "container1">Haulier
                        <input type = "checkbox" id = "NotifyHaulier" name = "Notify[]" value = "Haulier">
                        <span class = "checkmark1"></span>
                        <br/>
                    </label>
                    <br/>
                    <label class = "container1">OtD Manager
                        <input type = "checkbox" id = "NotifyOtDManager" name = "Notify[]" value = "OtD Manager">
                        <span class = "checkmark1"></span>
                        <br/>
                    </label>
                    <br/><br/>
                    <button onclick = "ViewAdditionalRemarksPage()" div class = "PreviousButton">PREVIOUS</button>
                    <button onclick = "ViewCurrentInspectionSummaryPage()" div class = "ContinueButton">CONTINUE</button>
                    <br />
                </div>
                <!--Current Summary Page: Full checklist-->
                <div class = "Page" id = "CurrentInspectionSummaryPage">
                    <div class = "Heading">CURRENT INSPECTION SUMMARY</div>
                    <button onclick = "ViewConsclusiveRemarksPage()" div class = "PreviousButton">PREVIOUS</button>
                    <button onclick = "ViewInspectionCompletePage()" div class = "ContinueButton">CONFIRM</button>
                    <br />
                </div>
                <!--Inspection Complete Page: Full checklist-->
                <div class = "Page" id = "InspectionCompletePage">
                    <div class = "Heading">INSPECTION COMPLETE!</div>
                    <span class = "material-symbols-outlined" style = "font-size: 300px; color: #1db11a; text-align: center; margin-left: auto;margin-right: auto; padding: 30px;">
                    inventory
                    </span>
                    <br/>
                    <br/>
                    <button div class = "CloseButton" onclick = "document.location = 'SelectFunctionsTerminalInspector.html';">
                        SAVE
                    </button>
                </div>
            </aside>
            <input type = "submit" id = "SubmitButton" name = "SubmitButton" value = "Submit" hidden>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                try
                {
                    $InspectionSummary = "FAULTS DETECTED:";
                    $FitnessTestsExpiryDatesIssues = "NONE";
                    $VehicleDocumentsIssues = "NONE";
                    $SafetyEquipmentIssues = "NONE";
                    $TyresIssues = "NONE";
                    $LightsIssues = "NONE";
                    $HornsBuzzersIssues = "NONE";
                    $SwitchesValvesCablesIssues = "NONE";
                    $CoversPipesGuardsIssues = "NONE";
                    $MiscellaneousPartsIssues = "NONE";


                    $DateAndTime = date("Y-m-d H:i:s");
                    $TLName = $_POST['TLName'];
                    $Location = $_POST['Location'];

                    
                    //------------ GET INFO FROM OTHER DATABASE -------------
                    /*
                    $TLName
                    $HaulierName
                    $LastInspectionDate
                    $InspectionSummary
                    $CurrentComplianceStatus
                    $ActionStatus
                    $Notify

                    $LastCalibrationTestExpiryDate
                    $ExplosivesLicenseExpiryDate
                    $LastHydroTestExpiryDate*/
                    

                    //-------------------------------------------------
                    /*
                    $ValidCNIC = NULL;
                    $ValidHTVLicense = NULL;
                    $VehicleRegistrationDocuments = NULL;
                    $TermCard = NULL;
                    $Handbook = NULL;
                    $FitnessCertificate = NULL;
                    $ExplosivesLicense = NULL;
                    */
                    $VehicleDocumentsFurtherComments = $_POST['VehicleDocumentsFurtherComments'];

                    if (empty($_POST['ValidCNIC']) && empty($_POST['ValidHTVLicense']) && empty($_POST['VehicleRegistrationDocuments']) && empty($_POST['TermCard']) && empty($_POST['Handbook']) && empty($_POST['FitnessCertificate']) && empty($_POST['ExplosivesLicense']) && !empty($VehicleDocumentsFurtherComments))
                    {
                        $InspectionSummary .= "\nVehicle Documents are OK.\nComments: " . $VehicleDocumentsFurtherComments;
                    }
                    else
                    {
                        if ( !empty($_POST['ValidCNIC']) )
                        {
                            $InspectionSummary .= "\nValid CNIC not onboard.";
                            $VehicleDocumentsIssues = "YES";
                        }
                        if ( !empty($_POST['ValidHTVLicense']) )
                        {
                            $InspectionSummary .= "\nValid HTV License not onboard.";
                            $VehicleDocumentsIssues = "YES";
                        }
                        if ( !empty($_POST['VehicleRegistrationDocuments']) )
                        {
                            $InspectionSummary .= "\nVehicle Registration Documents not onboard.";
                            $VehicleDocumentsIssues = "YES";
                        }
                        if ( !empty($_POST['TermCard']) )
                        {
                            $InspectionSummary .= "\nTerm Card not onboard.";
                            $VehicleDocumentsIssues = "YES";
                        }
                        if ( !empty($_POST['Handbook']) )
                        {
                            $InspectionSummary .= "\nHandbook not onboard.";
                            $VehicleDocumentsIssues = "YES";
                        }
                        if ( !empty($_POST['FitnessCertificate']) )
                        {
                            $InspectionSummary .= "\nFitness Certificate not onboard.";
                            $VehicleDocumentsIssues = "YES";
                        }
                        if ( !empty($_POST['ExplosivesLicense']) )
                        {
                            $InspectionSummary .= "\nExplosives License not onboard.";
                            $VehicleDocumentsIssues = "YES";
                        }
                        if ( !empty($VehicleDocumentsFurtherComments) )
                        {
                            $InspectionSummary .= "\nComments: " . $VehicleDocumentsFurtherComments;
                            $VehicleDocumentsIssues = "YES";
                        }
                    }
                    //-------------------------------------------------
                    $HazchemCodes = $_POST['HazchemCodes'];
                    $DriverPPE = $_POST['DriverPPE'];
                    $MaskRespirator = $_POST['MaskRespirator'];
                    $SafetyConesWithReflectiveTape = $_POST['SafetyConesWithReflectiveTape'];
                    $FirstAidBox = $_POST['FirstAidBox'];
                    $SpillKit = $_POST['SpillKit'];
                    $ExplosivesProofTorch = $_POST['ExplosivesProofTorch'];
                    $SpareTyre = $_POST['SpareTyre'];
                    $FireExtinguisher = $_POST['FireExtinguisher'];
                    $SafetyEquipmentFurtherComments = $_POST['SafetyEquipmentFurtherComments'];

                    if ( $HazchemCodes == "OK" && $DriverPPE == "OK" && $MaskRespirator == "OK" && $SafetyConesWithReflectiveTape == "OK" && $FirstAidBox == "OK" && $SpillKit == "OK" && $ExplosivesProofTorch == "OK" && $SpareTyre == "OK" && $FireExtinguisher == "OK" && !empty($SafetyEquipmentFurtherComments))
                    {
                        $InspectionSummary .= "\nSafety Equipment is OK.\nComments: " . $SafetyEquipmentFurtherComments;
                    }
                    else
                    {
                        if ( $HazchemCodes != "OK" )
                        {
                            $InspectionSummary .= "\nHazchem Codes are " . $HazchemCodes;
                            $SafetyEquipmentIssues = "YES";
                        }
                        if ( $DriverPPE != "OK" )
                        {
                            $InspectionSummary .= "\nDriver PPE is " . $DriverPPE;
                            $SafetyEquipmentIssues = "YES";
                        }
                        if ( $MaskRespirator != "OK" )
                        {
                            $InspectionSummary .= "\nMask Respirator is " . $MaskRespirator;
                            $SafetyEquipmentIssues = "YES";
                        }
                        if ( $SafetyConesWithReflectiveTape != "OK" )
                        {
                            $InspectionSummary .= "\nSafety Cones With Reflective Tape are " . $SafetyConesWithReflectiveTape;
                            $SafetyEquipmentIssues = "YES";
                        }
                        if ( $FirstAidBox != "OK" )
                        {
                            $InspectionSummary .= "\nFirst Aid Box is " . $FirstAidBox;
                            $SafetyEquipmentIssues = "YES";
                        }
                        if ( $SpillKit != "OK" )
                        {
                            $InspectionSummary .= "\nSpill Kit is " . $SpillKit;
                            $SafetyEquipmentIssues = "YES";
                        }
                        if ( $ExplosivesProofTorch != "OK" )
                        {
                            $InspectionSummary .= "\nExplosives-proof Torch is " . $ExplosivesProofTorch;
                            $SafetyEquipmentIssues = "YES";
                        }
                        if ( $SpareTyre != "OK" )
                        {
                            $InspectionSummary .= "\nSpare Tyre is " . $SpareTyre;
                            $SafetyEquipmentIssues = "YES";
                        }
                        if ( $FireExtinguisher != "OK" )
                        {
                            $InspectionSummary .= "\nFire Extinguisher is " . $FireExtinguisher;
                            $SafetyEquipmentIssues = "YES";
                        }
                        if ( !empty($SafetyEquipmentFurtherComments) )
                        {
                            $InspectionSummary .= "\nComments: " . $SafetyEquipmentFurtherComments;
                            $SafetyEquipmentIssues = "YES";
                        }
                    }
                    //---------------------------------------------------------
                    $TyreDepth = NULL;
                    $AirPressure = NULL;
                    $WiresVisibility = NULL;
                    $TyresFurtherComments = $_POST['TyresFurtherComments'];

                    if (empty($_POST['TyreDepth']) && empty($_POST['AirPressure']) && empty($_POST['WiresVisibility']) && !empty($TyresFurtherComments))
                    {
                        $InspectionSummary .= "\nTyres are OK.\nComments: " . $TyresFurtherComments;
                    }
                    else
                    {
                        if ( !empty($_POST['TyreDepth']) )
                        {
                            $InspectionSummary .= "\nTyre Depth is not OK.";
                            $TyresIssues = "YES";
                        }
                        if ( !empty($_POST['AirPressure']) )
                        {
                            $InspectionSummary .= "\nTyre Air Pressure is not OK.";
                            $TyresIssues = "YES";
                        }
                        if ( !empty($_POST['WiresVisibility']) )
                        {
                            $InspectionSummary .= "\nWires Visibility is not OK.";
                            $TyresIssues = "YES";
                        }
                        if ( !empty($TyresFurtherComments) )
                        {
                            $InspectionSummary .= "\nComments: " . $TyresFurtherComments;
                            $TyresIssues = "YES";
                        }
                    }
                    //-------------------------------------------------
                    $DRL = $_POST['DRL'];
                    $CabinLight = $_POST['CabinLight'];
                    $HeadLight = $_POST['HeadLight'];
                    $BrakeLight = $_POST['BrakeLight'];
                    $FogLight = $_POST['FogLight'];
                    $ParkingLight = $_POST['ParkingLight'];
                    $IndicatorLight = $_POST['IndicatorLight'];
                    $ABSLight = $_POST['ABSLight'];
                    $LightsFurtherComments = $_POST['LightsFurtherComments'];

                    if ( $DRL == "OK" && $CabinLight == "OK" && $HeadLight == "OK" && $BrakeLight == "OK" && $FogLight == "OK" && $ParkingLight == "OK" && $IndicatorLight == "OK" && $ABSLight == "OK" && $FireExtinguisher == "OK" && !empty($LightsFurtherComments))
                    {
                        $InspectionSummary .= "\nLights are OK.\nComments: " . $LightsFurtherComments;
                    }
                    else
                    {
                        if ( $DRL != "OK" )
                        {
                            $InspectionSummary .= "\nDRL is " . $DRL;
                            $LightsIssues = "YES";
                        }
                        if ( $CabinLight != "OK" )
                        {
                            $InspectionSummary .= "\nCabin Light is " . $CabinLight;
                            $LightsIssues = "YES";
                        }
                        if ( $HeadLight != "OK" )
                        {
                            $InspectionSummary .= "\nHead Light is " . $HeadLight;
                            $LightsIssues = "YES";
                        }
                        if ( $BrakeLight != "OK" )
                        {
                            $InspectionSummary .= "\nBrake Light is " . $BrakeLight;
                            $LightsIssues = "YES";
                        }
                        if ( $FogLight != "OK" )
                        {
                            $InspectionSummary .= "\nFog Light is " . $FogLight;
                            $LightsIssues = "YES";
                        }
                        if ( $ParkingLight != "OK" )
                        {
                            $InspectionSummary .= "\nParking Light is " . $ParkingLight;
                            $LightsIssues = "YES";
                        }
                        if ( $IndicatorLight != "OK" )
                        {
                            $InspectionSummary .= "\nIndicator Light is " . $IndicatorLight;
                            $LightsIssues = "YES";
                        }
                        if ( $ABSLight != "OK" )
                        {
                            $InspectionSummary .= "\nABS Light is " . $ABSLight;
                            $LightsIssues = "YES";
                        }
                        if ( !empty($LightsFurtherComments) )
                        {
                            $InspectionSummary .= "\nComments: " . $LightsFurtherComments;
                            $LightsIssues = "YES";
                        }
                    }
                    //-------------------------------------------------
                    $Horn = $_POST['Horn'];
                    $ReverseBuzzer = $_POST['ReverseBuzzer'];
                    $IDKeyBuzzer = $_POST['IDKeyBuzzer'];
                    $HornsBuzzersFurtherComments = $_POST['HornsBuzzersFurtherComments'];

                    if ( $Horn == "OK" && $ReverseBuzzer == "OK" && $IDKeyBuzzer == "OK" && !empty($HornsBuzzersFurtherComments))
                    {
                        $InspectionSummary .= "\nHorns/Buzzers are OK.\nComments: " . $HornsBuzzersFurtherComments;
                    }
                    else
                    {
                        if ( $Horn != "OK" )
                        {
                            $InspectionSummary .= "\nHorn is " . $Horn;
                            $HornsBuzzersIssues = "YES";
                        }
                        if ( $ReverseBuzzer != "OK" )
                        {
                            $InspectionSummary .= "\nReverse Buzzer is " . $ReverseBuzzer;
                            $HornsBuzzersIssues = "YES";
                        }
                        if ( $IDKeyBuzzer != "OK" )
                        {
                            $InspectionSummary .= "\nID Key Buzzer is " . $IDKeyBuzzer;
                            $HornsBuzzersIssues = "YES";
                        }
                        if ( !empty($HornsBuzzersFurtherComments) )
                        {
                            $InspectionSummary .= "\nComments: " . $HornsBuzzersFurtherComments;
                            $HornsBuzzersIssues = "YES";
                        }
                    }
                    //-------------------------------------------------
                    /*
                    $InterlockSwitch = NULL;
                    $MasterSwitch = NULL;
                    $EngineCutOffSwitch = NULL;
                    $Valves = NULL;
                    $EarthingCable = NULL;
                    $EarthingStrip = NULL;
                    $WiringInsulation = NULL;
                    */
                    $SwitchesValvesCablesFurtherComments = $_POST['SwitchesValvesCablesFurtherComments'];

                    if (empty($_POST['InterlockSwitch']) && empty($_POST['MasterSwitch']) && empty($_POST['EngineCutOffSwitch']) && empty($_POST['Valves']) && empty($_POST['EarthingCable']) && empty($_POST['EarthingStrip']) && empty($_POST['WiringInsulation']) && !empty($SwitchesValvesCablesFurtherComments))
                    {
                        $InspectionSummary .= "\nSwitches, Valves and Cables are OK.\nComments: " . $SwitchesValvesCablesFurtherComments;
                    }
                    else
                    {
                        if ( !empty($_POST['InterlockSwitch']) )
                        {
                            $InspectionSummary .= "\nInterlock Switch is not OK.";
                            $SwitchesValvesCablesIssues = "YES";
                        }
                        if ( !empty($_POST['MasterSwitch']) )
                        {
                            $InspectionSummary .= "\nMaster Switch is not OK.";
                            $SwitchesValvesCablesIssues = "YES";
                        }
                        if ( !empty($_POST['EngineCutOffSwitch']) )
                        {
                            $InspectionSummary .= "\nEngine Cut-off Switch is not OK.";
                            $SwitchesValvesCablesIssues = "YES";
                        }
                        if ( !empty($_POST['Valves']) )
                        {
                            $InspectionSummary .= "\nValves are not OK.";
                            $SwitchesValvesCablesIssues = "YES";
                        }
                        if ( !empty($_POST['EarthingCable']) )
                        {
                            $InspectionSummary .= "\nEarthing Cable is not OK.";
                            $SwitchesValvesCablesIssues = "YES";
                        }
                        if ( !empty($_POST['EarthingStrip']) )
                        {
                            $InspectionSummary .= "\nEarthing Strip is not OK.";
                            $SwitchesValvesCablesIssues = "YES";
                        }
                        if ( !empty($_POST['WiringInsulation']) )
                        {
                            $InspectionSummary .= "\nWiring Insulation is not OK.";
                            $SwitchesValvesCablesIssues = "YES";
                        }
                        if ( !empty($SwitchesValvesCablesFurtherComments) )
                        {
                            $InspectionSummary .= "\nComments: " . $SwitchesValvesCablesFurtherComments;
                            $SwitchesValvesCablesIssues = "YES";
                        }
                    }
                    //-------------------------------------------------
                    /*
                    $Frontguard = NULL;
                    $Rearguard = NULL;
                    $Sideguard = NULL;
                    $SafetyRailingAndLock = NULL;
                    $ManHoleCover = NULL;
                    $FuelTankCap = NULL;
                    $SealingSystem = NULL;
                    $Hose = NULL;
                    $VDUPipeline = NULL;
                    $PressureGauge = NULL;
                    */
                    $CoversPipesGuardsFurtherComments = $_POST['CoversPipesGuardsFurtherComments'];

                    if (empty($_POST['Frontguard']) && empty($_POST['Rearguard']) && empty($_POST['Sideguard']) && empty($_POST['SafetyRailingAndLock']) && empty($_POST['ManHoleCover']) && empty($_POST['FuelTankCap']) && empty($_POST['SealingSystem']) && empty($_POST['Hose']) && empty($_POST['VDUPipeline']) && empty($_POST['PressureGauge']) && !empty($CoversPipesGuardsFurtherComments))
                    {
                        $InspectionSummary .= "\nCovers, Pipes and Guards are OK.\nComments: " . $CoversPipesGuardsFurtherComments;
                    }
                    else
                    {
                        if ( !empty($_POST['Frontguard']) )
                        {
                            $InspectionSummary .= "\nFrontguard is not OK.";
                            $CoversPipesGuardsIssues = "YES";
                        }
                        if ( !empty($_POST['Rearguard']) )
                        {
                            $InspectionSummary .= "\nRearguard is not OK.";
                            $CoversPipesGuardsIssues = "YES";
                        }
                        if ( !empty($_POST['Sideguard']) )
                        {
                            $InspectionSummary .= "\nSideguard is not OK.";
                            $CoversPipesGuardsIssues = "YES";
                        }
                        if ( !empty($_POST['SafetyRailingAndLock']) )
                        {
                            $InspectionSummary .= "\nSafetyRailingAndLock are not OK.";
                            $CoversPipesGuardsIssues = "YES";
                        }
                        if ( !empty($_POST['ManHoleCover']) )
                        {
                            $InspectionSummary .= "\nManhole Cover is not OK.";
                            $CoversPipesGuardsIssues = "YES";
                        }
                        if ( !empty($_POST['FuelTankCap']) )
                        {
                            $InspectionSummary .= "\nFuel Tank Cap is not OK.";
                            $CoversPipesGuardsIssues = "YES";
                        }
                        if ( !empty($_POST['SealingSystem']) )
                        {
                            $InspectionSummary .= "\nSealing System is not OK.";
                            $CoversPipesGuardsIssues = "YES";
                        }
                        if ( !empty($_POST['Hose']) )
                        {
                            $InspectionSummary .= "\nHose is not OK.";
                            $CoversPipesGuardsIssues = "YES";
                        }
                        if ( !empty($_POST['VDUPipeline']) )
                        {
                            $InspectionSummary .= "\nVDU Pipeline is not OK.";
                            $CoversPipesGuardsIssues = "YES";
                        }
                        if ( !empty($_POST['PressureGauge']) )
                        {
                            $InspectionSummary .= "\nPressure Gauge is not OK.";
                            $CoversPipesGuardsIssues = "YES";
                        }
                        if ( !empty($CoversPipesGuardsFurtherComments) )
                        {
                            $InspectionSummary .= "\nComments: " . $CoversPipesGuardsFurtherComments;
                            $CoversPipesGuardsIssues = "YES";
                        }
                    }
                    //-------------------------------------------------
                    /*
                    $PedalRubbers = NULL;
                    $ThreePointSeatbelt = NULL;
                    $SteeringWheelAdjustment = NULL;
                    $ACHeater = NULL;
                    $FrontBumper = NULL;
                    $RearBumper = NULL;
                    $AutomaticSlackAdjuster = NULL;
                    $Wiper = NULL;
                    $Spray = NULL;
                    $Battery = NULL;
                    */
                    $MiscellaneousPartsFurtherComments = $_POST['MiscellaneousPartsFurtherComments'];

                    if (empty($_POST['PedalRubbers']) && empty($_POST['ThreePointSeatbelt']) && empty($_POST['SteeringWheelAdjustment']) && empty($_POST['ACHeater']) && empty($_POST['FrontBumper']) && empty($_POST['RearBumper']) && empty($_POST['AutomaticSlackAdjuster']) && empty($_POST['Wiper']) && empty($_POST['Spray']) && empty($_POST['Battery']) && !empty($MiscellaneousPartsFurtherComments))
                    {
                        $InspectionSummary .= "\nMiscellaneous Parts are OK.\nComments: " . $MiscellaneousPartsFurtherComments;
                    }
                    else
                    {
                        if ( !empty($_POST['PedalRubbers']) )
                        {
                            $InspectionSummary .= "\nPedal Rubbers are not OK.";
                            $MiscellaneousPartsIssues = "YES";
                        }
                        if ( !empty($_POST['ThreePointSeatbelt']) )
                        {
                            $InspectionSummary .= "\n3-Point Seatbelt is not OK.";
                            $MiscellaneousPartsIssues = "YES";
                        }
                        if ( !empty($_POST['SteeringWheelAdjustment']) )
                        {
                            $InspectionSummary .= "\nSteering Wheel Adjustment is not OK.";
                            $MiscellaneousPartsIssues = "YES";
                        }
                        if ( !empty($_POST['ACHeater']) )
                        {
                            $InspectionSummary .= "\nAC/Heater is not OK.";
                            $MiscellaneousPartsIssues = "YES";
                        }
                        if ( !empty($_POST['FrontBumper']) )
                        {
                            $InspectionSummary .= "\nFront Bumper is not OK.";
                            $MiscellaneousPartsIssues = "YES";
                        }
                        if ( !empty($_POST['RearBumper']) )
                        {
                            $InspectionSummary .= "\nRear Bumper is not OK.";
                            $MiscellaneousPartsIssues = "YES";
                        }
                        if ( !empty($_POST['AutomaticSlackAdjuster']) )
                        {
                            $InspectionSummary .= "\nAutomatic Slack Adjuster is not OK.";
                            $MiscellaneousPartsIssues = "YES";
                        }
                        if ( !empty($_POST['Wiper']) )
                        {
                            $InspectionSummary .= "\nWiper is not OK.";
                            $MiscellaneousPartsIssues = "YES";
                        }
                        if ( !empty($_POST['Spray']) )
                        {
                            $InspectionSummary .= "\nSpray is not OK.";
                            $MiscellaneousPartsIssues = "YES";
                        }
                        if ( !empty($_POST['Battery']) )
                        {
                            $InspectionSummary .= "\nBattery is not OK.";
                            $MiscellaneousPartsIssues = "YES";
                        }
                        if ( !empty($MiscellaneousPartsFurtherComments) )
                        {
                            $InspectionSummary .= "\nComments: " . $MiscellaneousPartsFurtherComments;
                            $MiscellaneousPartsIssues = "YES";
                        }
                    }
                    //-------------------------------------------------

                    if ( $InspectionSummary == "FAULTS DETECTED:")
                    {
                        $InspectionSummary .= "\nNone.";
                    }

                    if ( !empty($AdditionalRemarksFurtherComments) )
                    {
                        $InspectionSummary .= "\nADDITIONAL REMARKS: " . $AdditionalRemarksFurtherComments;
                    }
                    else
                    {
                        $InspectionSummary .= "\nADDITIONAL REMARKS:\nNone.";
                    }

                    //------------------------------------------------IMAGE HANDLING----------------------------------------------------
                    /*
                    <NOTE-TO-SELF>
                    PHP File (including image files) Upload Steps:
                    1. Get file name:
                    $FileName = $_FILES['ValueInNameTagOfInputInHTMLForm']['name'];
                    2. Make temporary copy of file on server:
                    $TemporaryFileCopy = $_FILES['ValueInNameTagOfInputInHTMLForm']['tmp_name'];
                    3. Give path to destination folder where you want file to be uploaded:
                    $DestinationFolderPath = "UploadedImages/";
                    4. Move temporary copy of file to store it in the destination folder with its original file name:
                    move_uploaded_file($TemporaryFileCopy, $DestinationFolderPath.$FileName)
                    5. OR do all four steps in one step like this:
                    move_uploaded_file($_FILES['ValueInNameTagOfInputInHTMLForm']['tmp_name'], "UploadedImages/".$_FILES['ValueInNameTagOfInputInHTMLForm']['name']);
                    */

                    $VehicleDocumentsImageUpload = $_FILES["VehicleDocumentsImageUpload"]["name"];
                    $SafetyEquipmentImageUpload = $_FILES['SafetyEquipmentImageUpload']['name'];
                    $TyresImageUpload = $_FILES['TyresImageUpload']['name'];
                    $LightsImageUpload = $_FILES['LightsImageUpload']['name'];
                    $HornsBuzzersImageUpload = $_FILES['HornsBuzzersImageUpload']['name'];
                    $SwitchesValvesCablesImageUpload = $_FILES['SwitchesValvesCablesImageUpload']['name'];
                    $CoversPipesGuardsImageUpload = $_FILES['CoversPipesGuardsImageUpload']['name'];
                    $MiscellaneousPartsImageUpload = $_FILES['MiscellaneousPartsImageUpload']['name'];
                    $AdditionalRemarksImageUpload = $_FILES['AdditionalRemarksImageUpload']['name'];
                    $Images = 0;
                    $DestinationFolder = "C:/xampp/htdocs/Vehicle Database Application/From Scratch/InspectionImages/";
                    
                    if (!empty($VehicleDocumentsImageUpload))
                    {
                        $Images = $Images + 1;
                        $VehicleDocumentsImageUpload = "" . date("j-n-Y H.i.s ") . $TLName . " " . ". Image " . strval($Images) . " " . $_FILES['VehicleDocumentsImageUpload']['name'];
                        $TemporaryImageCopy = $_FILES['VehicleDocumentsImageUpload']['tmp_name'];
                        move_uploaded_file($TemporaryImageCopy, $DestinationFolder.$VehicleDocumentsImageUpload);
                    }
                    if (!empty($SafetyEquipmentImageUpload))
                    {
                        $Images = $Images + 1;
                        $SafetyEquipmentImageUpload = "" . date("j-n-Y H.i.s ") . $TLName . " " . ". Image " . strval($Images) . " " . $_FILES['SafetyEquipmentImageUpload']['name'];
                        $TemporaryImageCopy = $_FILES['SafetyEquipmentImageUpload']['tmp_name'];
                        move_uploaded_file($TemporaryImageCopy, $DestinationFolder.$SafetyEquipmentImageUpload);
                    }
                    if (!empty($TyresImageUpload))
                    {
                        $Images = $Images + 1;
                        $TyresImageUpload = "" . date("j-n-Y H.i.s ") . $TLName . " " . ". Image " . strval($Images) . " " . $_FILES['TyresImageUpload']['name'];
                        $TemporaryImageCopy = $_FILES['TyresImageUpload']['tmp_name'];
                        move_uploaded_file($TemporaryImageCopy, $DestinationFolder.$TyresImageUpload);
                    }
                    if (!empty($LightsImageUpload))
                    {
                        $Images = $Images + 1;
                        $LightsImageUpload = "" . date("j-n-Y H.i.s ") . $TLName . " " . ". Image " . strval($Images) . " " . $_FILES['LightsImageUpload']['name'];
                        $TemporaryImageCopy = $_FILES['LightsImageUpload']['tmp_name'];
                        move_uploaded_file($TemporaryImageCopy, $DestinationFolder.$LightsImageUpload);
                    }
                    if (!empty($HornsBuzzersImageUpload))
                    {
                        $Images = $Images + 1;
                        $HornsBuzzersImageUpload = "" . date("j-n-Y H.i.s ") . $TLName . " " . ". Image " . strval($Images) . " " . $_FILES['HornsBuzzersImageUpload']['name'];
                        $TemporaryImageCopy = $_FILES['HornsBuzzersImageUpload']['tmp_name'];
                        move_uploaded_file($TemporaryImageCopy, $DestinationFolder.$HornsBuzzersImageUpload);
                    }
                    if (!empty($SwitchesValvesCablesImageUpload))
                    {
                        $Images = $Images + 1;
                        $SwitchesValvesCablesImageUpload = "" . date("j-n-Y H.i.s ") . $TLName . " " . ". Image " . strval($Images) . " " . $_FILES['SwitchesValvesCablesImageUpload']['name'];
                        $TemporaryImageCopy = $_FILES['SwitchesValvesCablesImageUpload']['tmp_name'];
                        move_uploaded_file($TemporaryImageCopy, $DestinationFolder.$SwitchesValvesCablesImageUpload);
                    }
                    if (!empty($CoversPipesGuardsImageUpload))
                    {
                        $Images = $Images + 1;
                        $CoversPipesGuardsImageUpload = "" . date("j-n-Y H.i.s ") . $TLName . " " . ". Image " . strval($Images) . " " . $_FILES['CoversPipesGuardsImageUpload']['name'];
                        $TemporaryImageCopy = $_FILES['CoversPipesGuardsImageUpload']['tmp_name'];
                        move_uploaded_file($TemporaryImageCopy, $DestinationFolder.$CoversPipesGuardsImageUpload);
                    }
                    if (!empty($MiscellaneousPartsImageUpload))
                    {
                        $Images = $Images + 1;
                        $MiscellaneousPartsImageUpload = "" . date("j-n-Y H.i.s ") . $TLName . " " . ". Image " . strval($Images) . " " . $_FILES['MiscellaneousPartsImageUpload']['name'];
                        $TemporaryImageCopy = $_FILES['MiscellaneousPartsImageUpload']['tmp_name'];
                        move_uploaded_file($TemporaryImageCopy, $DestinationFolder.$MiscellaneousPartsImageUpload);
                    }
                    if (!empty($AdditionalRemarksImageUpload))
                    {
                        $Images = $Images + 1;
                        $AdditionalRemarksImageUpload = "" . date("j-n-Y H.i.s ") . $TLName . " " . ". Image " . strval($Images) . " " . $_FILES['AdditionalRemarksImageUpload']['name'];
                        $TemporaryImageCopy = $_FILES['AdditionalRemarksImageUpload']['tmp_name'];
                        move_uploaded_file($TemporaryImageCopy, $DestinationFolder.$AdditionalRemarksImageUpload);
                    }
                    //-------------------------------------------------

                    if ($Images == 0)
                    {
                        $Images = "NONE";
                    }
                    $ComplianceStatus = $_POST['ComplianceStatus'];
                    $ActionStatus = $_POST['ActionStatus'];
                    if (empty($_POST['Notify']))
                    {
                        $Notify = "NONE";
                    }
                    else
                    {
                        $NotifyArray = $_POST['Notify'];
                        $Notify = "";
                        foreach ($NotifyArray as $NotifyArrayElement)
                        {
                            $Notify .= $NotifyArrayElement . "\n";
                        }
                    }

                    //Create databse connection
                    //Make INSERT query
                    //Copy paste from InspectionsList code
                    //-------------------------------------------------
                    if (!empty($DateAndTime) && !empty($Location) && !empty($TLName) && !empty($InspectionSummary) && !empty($FitnessTestsExpiryDatesIssues)  && !empty($VehicleDocumentsIssues) && !empty($TyresIssues) && !empty($LightsIssues) && !empty($HornsBuzzersIssues) && !empty($SafetyEquipmentIssues) && !empty($SwitchesValvesCablesIssues) && !empty($CoversPipesGuardsIssues) && !empty($MiscellaneousPartsIssues) && !empty($Images) && !empty($ComplianceStatus) && !empty($ActionStatus) && !empty($Notify))
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
                            die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
                        }
                        else
                        {
                            //echo "Connected successfully";
                            $INSERT = "INSERT INTO inspectionscollection (DateAndTime, Location, TLName, InspectionSummary, FitnessTestsExpiryDatesIssues, VehicleDocumentsIssues, TyresIssues, LightsIssues, HornsBuzzersIssues, SafetyEquipmentIssues, SwitchesValvesCablesIssues, CoversPipesGuardsIssues, MiscellaneousPartsIssues, Images, ComplianceStatus, ActionStatus, Notify) VALUES ('". $DateAndTime . "','". $Location . "','". $TLName . "','". $InspectionSummary . "','". $FitnessTestsExpiryDatesIssues . "','". $VehicleDocumentsIssues . "','". $TyresIssues . "','". $LightsIssues . "','". $HornsBuzzersIssues . "','". $SafetyEquipmentIssues . "','". $SwitchesValvesCablesIssues . "','". $CoversPipesGuardsIssues . "','". $MiscellaneousPartsIssues . "','". $Images . "','". $ComplianceStatus . "','". $ActionStatus . "','". $Notify . "')";
                            if ($conn->query($INSERT))
                            {
                                //echo "New record inserted successfully";
                                echo "<script>ViewInspectionCompletePage();</script>";
                            }
                            else
                            {
                                //echo "Not inserted";
                            }
                            $conn->close();
                        }             
                    }
                    //---------------------------------------------
                }
                catch (Exception $e)
                {
                    echo $e;
                }
            }  
        ?>
    </body>
</html>

                    


