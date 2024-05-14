<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta Name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="Email"],
        input[type="tel"],
        input[type="date"],
        select,
        textarea {
            width: calc(100% - 22px);
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            float: right;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        textarea {
            width: calc(100% - 22px);
            resize: vertical;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Registration</h1>
        <form action="#" method="post">
    <label for="ID">ID:</label><br>
    <input type="text" id="ID" name="ID" required><br>
    <label for="Name">Name:</label><br>
    <input type="text" id="Name" name="Name" required><br>
    <label for="Email">Email:</label><br>
    <input type="email" id="Email" name="Email" required><br>
    <label for="Phone">Phone:</label><br>
    <input type="tel" id="Phone" name="Phone" required><br>
    <label for="Address">Address:</label><br>
    <input type="text" id="Address" name="Address" required><br>
    <label for="City">City:</label><br>
    <input type="text" id="City" name="City" required><br>
    <label for="Country">Country:</label><br>
    <input type="text" id="Country" name="Country" required><br>
    <label for="Date_of_Birth">Date:</label><br>
    <input type="date" id="Date_of_Birth" name="Date_of_Birth" required><br>
    <label for="Gender">Gender:</label><br>
    <select id="Gender" name="Gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select><br>
    <label for="Additional_Information">Additional Information:</label><br>
    <textarea id="Additional_Information" name="Additional_Information" rows="4" cols="50"></textarea><br>
    <button type="submit" name="submit">Submit</button>
</form>
<?php
    require "../Controller/FormationC.php";
    $formationController = new FormationController();
    
    if(isset($_POST['submit'])) {
        $ID = $_POST['ID']; 
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];
        $Address = $_POST['Address'];
        $City = $_POST['City'];
        $Country = $_POST['Country'];
        $Date_of_Birth = $_POST['Date_of_Birth'];
        $Gender = $_POST['Gender'];
        $Additional_Information = $_POST['Additional_Information'];

        if (!empty($ID) && !empty($Name) && !empty($Email) && !empty($Phone) && !empty($Address) && !empty($City) && !empty($Country) && !empty($Date_of_Birth) && !empty($Gender) && !empty($Additional_Information)) {
            $formationController->addFormation($ID, $Name, $Email, $Phone, $Address, $City, $Country, $Date_of_Birth, $Gender, $Additional_Information);
        } else {
            echo "<p>Tous les champs sont obligatoires.</p>";
        }
    }
?>

            
        </form>
    </div>
</body>
</html>
