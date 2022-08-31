<!DOCTYPE html>
<html>
    <head>
        <!--Link CSS file-->
        <link rel= "stylesheet" href = "Template.css">
        <!--Link JavaScript file-->
        <script type="text/javascript" src="Template.js"></script>
        <!--Give webpage a name-->
        <title>RTCC Login</title>
        <!--Give webpage a favicon icon-->
        <link rel = "icon" type = "image/x-icon" href = "Favicon Images/favicon.ico">
        <!--Icons Link-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,700,1,-25" />
        <style>
            
            th, td
            {
                
                border: none;
                font-size: 30px;
                color: rgb(52, 51, 51);
                text-align: center;
                margin-left: auto;
                margin-right: auto;
                padding: 10px;
            }

            th
            {
                padding: 0px;
                font-size: 70px;
                padding-bottom: 10px;
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

            .AccountsSymbol, .CheckSymbol
            {
                margin-left: auto;
                margin-left: auto;
                text-align: center;
            }

            .AccountsSymbol .material-icons
            {
                font-size: 130px;
                background-color: #FFD500;
                border-radius: 100%;

            }

            .CheckSymbol button
            {
                width: fit-content;
                background-color: #FFD500;
                font-size: 40px;
            }

            .CheckSymbol button:hover
            {
                width: fit-content;
                background-color: rgb(52, 51, 51);
                font-size: 50px;
            }

            .CheckSymbol .material-icons
            {
                font-size: 300px;
                color:rgb(52, 51, 51);
                background-color: #FFD500;
                border-radius: 100%;
            }

            .CheckSymbol button:hover .material-icons
            {
                font-size: 310px;
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

        </style>
    </head>
    <body >
        <button type = "button" class = "BackButton" onclick = "document.location = 'SelectUserFinal.html'">
            <i class="material-symbols-rounded">reply</i>
        </button>
        
        <div id = "Login">
            <br/>
            <!--Background image and heading area-->
            <div class = "AccountsSymbol" id = "AccountSymbol">
                <i class="material-icons">account_circle</i>
            </div>  
            <form action = "" method = "POST">
                <table style = "padding-bottom: 0px;">
                    <thead>
                        <th colspan = "5">LOGIN</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Username</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type = "text" id = "Username" name = "Username" required></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Password</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type = "password" id = "Password" name = "Password" required></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td style = "padding-bottom:2px;">
                                <button type = "submit" id = "SubmitButton" name = "SubmitButton">
                                    Sign In
                                </button>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <div class = "CheckSymbol" id = "CheckSymbol" style = "display: none;">
            <br/><br/><br/><br/><br/>
            <button type = "button" onclick = "document.location='SelectFunctionsTerminalInspector.html'">
                <br/>
                VERIFIED
                <br/>
                <i class="material-icons">check_circle_outline</i>
                <br/>
                <span style = "font-size:20px;">CLICK TO CONTINUE</span>
                <br/>
            </button>
        </div>
        <?php
            if (isset($_POST['SubmitButton']))
            {
                //Collectiing form data
                $Username = $_POST['Username'];
                $Password = $_POST['Password'];

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
                    $SELECT = "SELECT * FROM `terminalinspectorlogin` WHERE Username = '$Username' AND Password = '$Password'";
                    $AllDatabaseData = mysqli_query($conn, $SELECT);
                    $NoOfRowsInDatabase = mysqli_num_rows($AllDatabaseData);
                    if ($NoOfRowsInDatabase > 0)
                    {
                        echo "<script type = 'text/javascript'>
                            document.getElementById('Login').style.display = 'none';
                            document.getElementById('CheckSymbol').style.display = 'block';
                            </script>";
                    }
                    else
                    {
                        echo "<script type = 'text/javascript'>document.getElementById('AccountSymbol').style.fontSize = 'medium';</script>";
                        echo "<table>";
                                echo "<tbody>";
                                    echo "<tr>";
                                        echo "<td>Login Failed. Please try again.</td>";
                                    echo "</tr>";
                                echo "</tbody>";
                            echo "</table>";
                    }
                }
            }
        ?>
    </body>
</html>

