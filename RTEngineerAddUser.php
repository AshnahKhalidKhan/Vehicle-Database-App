<!DOCTYPE html>
<html>
    <head>
        <!--Link CSS file-->
        <link rel= "stylesheet" href = "Template.css">
        <!--Link JavaScript file-->
        <!--Give webpage a name-->
        <title>Add User</title>
        <!--Give webpage a favicon icon-->
        <link rel = "icon" type = "image/x-icon" href = "Favicon Images/favicon.ico">
        <!--Icons Link-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,700,1,-25" />
        <style>

            table
            {
                margin-left: auto;
                margin-right: auto;
                text-align: center;
                padding: 20px;
                width: 100%;
                height: 100%;
                table-layout: fixed;
                /*border-collapse: collapse;*/
                align-self: center;
                
            }
            
            /* Create a custom radio button */
            .OKButton {
                position: absolute;
                top: 0;
                left: 0;
                height: 25px;
                width: 25px;
                background-color: #eee;
                border-radius: 50%;
                margin-left:50%;
                margin-right: 50%;
            }
            
            /* On mouse-over, add a grey background color */
            .container:hover input ~ .OKButton {
                background-color: #1caf19;
            }
            
            /* When the radio button is checked, add a blue background */
            .container input:checked ~ .OKButton {
                background-color: #1caf19;
            }
            
            /* Create the indicator (the dot/circle - hidden when not checked) */
            .OKButton:after {
                content: "";
                position: absolute;
                display: none;
            }
            
            /* Show the indicator (dot/circle) when checked */
            .container input:checked ~ .OKButton:after {
                display: block;
            }
            
            /* Style the indicator (dot/circle) */
            .container .OKButton:after {
                margin-left: auto;
                margin-right: auto;
                top: 9px;
                left: 9px;
                width: 8px;
                height: 8px;
                border-radius: 50%;
                background: white;
            }

            th, td
            {
                
                border: none;
                font-size: 20px;
                color: rgb(52, 51, 51);
                text-align: center;
                margin-left: auto;
                margin-right: auto;
                padding: 10px;
            }

            th
            {
                padding: 0px;
                padding-bottom: 20px;
                font-size: 70px;
                font-weight: bolder;
            }

            table
            {
                padding: 5px;
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
                font-size: 30px;
            }

            button:hover
            {
                border: 5px solid #FFD500;
                background-color:  rgb(52, 51, 51);
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

            .AccountSymbol, .SuccessSymbol
            {
                margin-left: auto;
                margin-left: auto;
                text-align: center;
            }

            .AccountSymbol .material-icons
            {
                font-size: 70px;
                background-color: #FFD500;
                border-radius: 100%;
                text-align: center;
                padding: 15px;
                display: inline-block;
                width: fit-content;
                height: fit-content;
                vertical-align: -15%;
            }

            .SuccessSymbol button
            {
                width: fit-content;
                background-color: #FFD500;
                font-size: 40px;
            }

            .SuccessSymbol button:hover
            {
                width: fit-content;
                background-color: rgb(52, 51, 51);
                font-size: 50px;
            }

            .SuccessSymbol .material-icons
            {
                font-size: 290px;
                color:rgb(52, 51, 51);
                background-color: #FFD500;
                border-radius: 100%;
            }

            .SuccessSymbol button:hover .material-icons
            {
                font-size: 300px;
                background-color: rgb(52, 51, 51);
                color: #FFD500;
                border: none;
                border-radius: 100%;
            }

            td input
            {
                width: 100%;
                height: 100%;
                font-size: 20px;
                text-align: center;
                background-color: rgb(230, 228, 228);
                border: 2px solid #FFD500;
            }

            td input:focus
            {
                background-color: white;
                border: 3px solid #FFD500;
            }

            td input:required:valid
            {
                background-color: #FFD500;
                border: 3px solid rgb(52, 51, 51);
            }

            .Checklist
            {
                text-align: center;
                border: 30px solid rgb(52, 51, 51);
                height: 50%;
                margin: auto;
                width: 50%;
                display: block;
            }

            .Page
            {
                background-color: white;
                opacity: 95%;
                padding: 20px;
            }

        </style>
    </head>
    <body>
        <button type = "button" class = "BackButton" onclick = "document.location = 'SelectFunctionsRTEngineer.html'">
            <i class="material-symbols-rounded">reply</i>
        </button>
        <div class = "Checklist Page" id = "Page">
            <form action = "" method = "POST" id = "Login">
                <table>
                    <thead>
                        <th class = "AccountSymbol" id = "AccountSymbolID" colspan = "4">
                            <span class = "material-icons" id = "AccountIconID">person_add_alt_1</span>
                             ADD USER
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan = "2">USERNAME</td>
                            <td colspan = "2"><input type = "text" id = "Username" name = "Username" required></td>
                        </tr>
                        <tr>
                            <td colspan = "2">PASSWORD</td>
                            <td colspan = "2"><input type = "password" id = "Password" name = "Password" required></td>
                        </tr>
                        <tr>
                            <td colspan = "2">RE-ENTER PASSWORD</td>
                            <td colspan = "2"><input type = "password" id = "ReTypePassword" name = "ReTypePassword" required></td>
                        </tr>
                        <tr>
                            <td rowspan = "3" colspan = "2">USER TYPE</td>
                            <td colspan = "2">
                                <label class = "container2">
                                    <input type = "radio" id = "UserTypeRTEngineer" name = "UserType" value = "RTEngineer" required>
                                    <span class = "checkmark2" id = "OKButton"></span>RT Engineer
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan = "2">
                                <label class = "container2">
                                    <input type = "radio" id = "UserTypeRTCC" name = "UserType" value = "RTCC" required>
                                    <span class = "checkmark2" id = "OKButton"></span>RTCC
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan = "2">
                                <label class = "container2">
                                    <input type = "radio" id = "UserTypeTerminalInspector" name = "UserType" value = "TerminalInspector" required>
                                    <span class = "checkmark2" id = "OKButton"></span>Terminal Inspector
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td  colspan = "2" style = "padding-bottom: 2px;">
                                <button type = "submit" id = "SubmitButton" name = "SubmitButton">
                                    Add User
                                </button>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </form> 
            <div class = "SuccessSymbol" id = "SuccessSymbol" style = "display: none;">
                <button type = "button" onclick = "document.location='SelectFunctionsRTEngineer.html'">
                    <br/>
                    VERIFIED
                    <br/>
                    <i class="material-icons">how_to_reg</i>
                    <br/>
                    <span style = "font-size: 20px;">CLICK TO COMPLETE</span>
                    <br/>
                </button>
            </div>
            <?php
                if (isset($_POST['SubmitButton']))
                {
                    //Collectiing form data
                    $Username = $_POST['Username'];
                    $Password = $_POST['Password'];
                    $ReTypePassword = $_POST['ReTypePassword'];
                    $UserType = $_POST['UserType'];

                    //Database related details
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
                        if ($Password == $ReTypePassword)
                        {
                            if ($UserType == "RTEngineer")
                            {
                                $INSERT = "INSERT INTO rtengineerlogin (Username, Password) VALUES ('" . $Username . "','" . $Password ."')";
                            }
                            else if ($UserType == "RTCC")
                            {
                                $INSERT = "INSERT INTO rtcclogin (Username, Password) VALUES ('" . $Username . "','" . $Password ."')";
                            }
                            else if ($UserType == "TerminalInspector")
                            {
                                $INSERT = "INSERT INTO terminalinspectorlogin (Username, Password) VALUES ('" . $Username . "','" . $Password ."')";

                            }

                            if ($conn->query($INSERT))
                            {
                                echo "<script>
                                document.getElementById('Login').style.display = 'none';
                                document.getElementById('SuccessSymbol').style.display = 'block';
                                document.getElementById('Page').style.borderColor = 'white';
                                </script>";
                            }
                            else
                            {
                                echo "<script type = 'text/javascript'>document.getElementById('AccountSymbolID').style.display = 'none';</script>";
                                echo "<table>";
                                    echo "<tbody>";
                                        echo "<tr>";
                                        echo "<td>Unknown error. Please try again.</td>";
                                        echo "</tr>";
                                    echo "</tbody>";
                                echo "</table>";
                            }
                            $conn->close();
                        }
                        else
                        {
                            echo "<script>
                                    document.getElementById('AccountSymbolID').style.fontSize = '30px';
                                    document.getElementById('AccountIconID').style.fontSize = '30px';
                                </script>";
                            echo "<table>";
                                echo "<tbody>";
                                    echo "<tr>";
                                    echo "<td>Both passwords do not match. Please try again.</td>";
                                    echo "</tr>";
                                echo "</tbody>";
                            echo "</table>";
                        }
                    }
                }
            ?>
        </div>
    </body>
</html>

