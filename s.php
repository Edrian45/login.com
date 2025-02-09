
<!DOCTYPE html>
<html>
<head>
    <title>Bio Data Fillup  </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            width: 40%;
            margin: auto;
            overflow: hidden;
        }
        .container1 {
            width: 90%;
            margin: auto;
            overflow: hidden;
        }
        h1 {
            text-align: center;
            border-bottom: 2px solid black;
        }
        h3 {
            border-bottom: 2px solid black;
        }
        h2{
            text-align: center;
            font-family: Cambria;
        }
        form {
            background: whitesmoke;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
        }
        input[type="text"], input[type="number"] {
            width: 95%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid black;
            border-radius: 4px;
        }
        input[type="submit"] {
            background: blue;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: green;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
            border: 1px solid black;
        }
        th {
            background-color: #009a3c;
            color: white;
            text-align: center;
        }
        tr:nth-child(even) {
            background-color:rgb(184, 183, 183);
        }
        @media (max-width: 600px) {
            table, th, td {
                display: block;
                width: 100%;
            }
            th, td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }
            th::before, td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-weight: bold;
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <div class="container1">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $age = htmlspecialchars((int) $_POST['age']);
            $gender = htmlspecialchars($_POST['gender']);
            $address = htmlspecialchars($_POST['address']);
            $email = htmlspecialchars($_POST['email']);
            $contact = htmlspecialchars($_POST['contact']);
            $mothernm = htmlspecialchars($_POST['mothernm']);
            $fathernm = htmlspecialchars($_POST['fathernm']);
            $moto = htmlspecialchars($_POST['moto']);
            $elementary = htmlspecialchars($_POST['elementary']);
            $attend = htmlspecialchars($_POST['attend']);
            $highschl = htmlspecialchars($_POST['highschl']);
            $attend1 = htmlspecialchars($_POST['attend1']);
            $college = htmlspecialchars($_POST['college']);
            $attend2 = htmlspecialchars($_POST['attend2']);
            
            echo "<h1>My Bio Data</h1>";
            echo "
            <table>
                <tr>
                    <th>Field</th>
                    <th>Details</th>
                </tr>
                <tr>
                    <td data-label='Field'>Full Name</td>
                    <td data-label='Details'>{$name}</td>
                </tr>
                <tr>
                    <td data-label='Field'>Age</td>
                    <td data-label='Details'>{$age}</td>
                </tr>
                <tr>
                    <td data-label='Field'>Gender</td>
                    <td data-label='Details'>{$gender}</td>
                </tr>
                <tr>
                    <td data-label='Field'>Address</td>
                    <td data-label='Details'>{$address}</td>
                </tr>
                <tr>
                    <td data-label='Field'>Email</td>
                    <td data-label='Details'>{$email}</td>
                </tr>
                <tr>
                    <td data-label='Field'>Contact Number</td>
                    <td data-label='Details'>{$contact}</td>
                </tr>
                <tr>
                    <td data-label='Field'>Mother's Name</td>
                    <td data-label='Details'>{$mothernm}</td>
                </tr>
                <tr>
                    <td data-label='Field'>Father's Name</td>
                    <td data-label='Details'>{$fathernm}</td>
                </tr>
            </table>
            <h3>MOTO</h3>
            <h2>'' <em>{$moto}</em> ''</h2>
            <h3>EDUCATIONAL BACKGROUND</h3>
            <table>
                <tr>
                    <th>Field</th>
                    <th>Details</th>
                </tr>
                <tr>
                    <td data-label='Field'>Elementary School</td>
                    <td data-label='Details'>{$elementary}<li>Date Graduated: {$attend}</li>
                    </td>
                </tr>
                <tr>
                    <td data-label='Field'>High School</td>
                    <td data-label='Details'>{$highschl}<li>Date Graduated: {$attend1}</li>
                    </td>
                </tr>
                <tr>
                    <td data-label='Field'>College</td>
                    <td data-label='Details'>{$college}<li>Date Graduated: {$attend2}</li>
                    </td>
                </tr>
            </table>
            ";
        } else {
        ?>
    </div>
     <div class="container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h1>FILLUP THIS FORM FOR YOUR BIO DATA</h1>
            Full Name: <input type="text" name="name" required><br><br>
            Age: <input type="number" name="age" required><br><br>
            Gender: <input type="text" name="gender" required><br><br>
            Address: <input type="text" name="address" required><br><br>
            Email Address: <input type="text" name="email" required><br><br>
            Contact Number: <input type="text" name="contact" required><br><br>
            Mother's Name: <input type="text" name="mothernm" required><br><br>
            Father's Name: <input type="text" name="fathernm" required><br><br>
            Your Moto in Life: <input type="text" name="moto" required><br><br>
            Elementary School: <input type="text" name="elementary" required><br><br>
            Elementary Year Graduated: <input type="text" name="attend" required><br><br>
            High School: <input type="text" name="highschl" required><br><br>
            High School Year Graduated: <input type="text" name="attend1" required><br><br>
            College: <input type="text" name="college" required><br><br>
            College Year Graduated: <input placeholder="" type="text" name="attend2" required><br><br>
            <center><input class="submit" type="submit" value="Submit"></center>
        </form>
        <?php
        }
        ?>
    </div>
</body>
</html>