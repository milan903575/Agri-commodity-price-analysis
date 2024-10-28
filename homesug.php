<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["selected_district"])) {
    $selected_district = $_POST["selected_district"];

    // Define the path to your Python executable and script
    $python_executable = "C:\\Users\\mkuma\\AppData\\Local\\Programs\\Python\\Python311\\python.exe";
    $python_script = "C:\\xampp\\htdocs\\ap\\pro\\data_ccesspy.py";

    // Run the Python script in the background using the defined executable
    $command = "$python_executable $python_script > /dev/null 2>&1 &";
    exec($command, $output, $return_var);

    // Check for errors or successful execution
    if ($return_var !== 0) {
        echo "Error executing Python script: " . implode("\n", $output);
    } else {
        echo "Python script executed successfully.";
        // You can add the JavaScript alert here if required
        echo "<script>alert('Python script executed.');</script>";
    }

    // Further processing or redirection if needed
    // header("Location: http://localhost/ap/pro/sugcrop.php");
    // exit();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>selection of location</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    padding: 20px;
    background: #180835;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  html, body {
    height: 100%;
  }
.card {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    border-radius: 30px;
    padding: 10px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    width: 96%;
    height: 650px;
    background: #12c2e9;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */

}

  .left-container {
    background: #000000; 
background: -webkit-linear-gradient(to right, #434343, #000000);
background: linear-gradient(to right, #434343, #000000); 
    flex: 1;
    max-width: 30%;
    display: flex;
    flex-direction: column;
    align-items: center;
    height:530px;
    padding: 10px;
    margin: 30px;
    border-radius: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  
  .right-container {
    background: #000000; 
    background: -webkit-linear-gradient(to left, #434343, #000000);
    background: linear-gradient(to left, #434343, #000000); 
    flex: 1;
    max-width:70%;
    height:530px;
    padding: 10px;
    margin: 20px;
    border-radius:30px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  @media only screen and (max-width: 860px) {
    .card
     {
     flex-direction: column;
     margin: 10px;
     height: auto;
     width: 90%;
    }
    .left-container{
        flex: 1;
        max-width:100%; 
    }
  }
  @media only screen and (max-width: 600px) {
    .card
     {
     flex-direction: column;
     margin: 10px;
    }
    .left-container{
        flex: 1;
        max-width:100%; 
    }
  }
iframe {

    width: 250px;
    height: 150px;
    border-radius: 10px; /* Adjust the border-radius value to control the curvature */
    margin: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}


  
  h2 {
    font-size: 24px;
    margin-bottom: 5px;
  }
  h3 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 5px;
  }
  .gradienttext{
    background-image: linear-gradient(to right, #ee00ff 0%, #fbff00 100%);
    color: transparent;
    -webkit-background-clip: text;
  }
  p {
    font-size: 18px;
    margin-bottom: 20px;
    color:aliceblue
  }
  
  table {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 280px;
    border-collapse: collapse;
  }
  
  td {
    
    padding: 10px;
    border: none;
    border-radius: 20px;
    color: white;
  }
  
  td:first-child {
    font-weight: bold;
  }
  .credit a {
  text-decoration: none;
  color: #fff;
  font-weight: 800;
}

.credit {
    color: #fff;
  text-align: center;
  margin-top: 10px;
  font-family: Verdana,Geneva,Tahoma,sans-serif;
}
       
    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background: #f9f9f9;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 15px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #2980b9;
    }


    </style>
</head>

<body background='http://localhost/ap/pro/bgl.jpg'>
    <div class="card" >
        <div class="left-container">
            <iframe src="https://www.youtube.com/embed/mZXetb1TPEg?si=l8J14CT2RNQh-mEB &autoplay=1&mute=1"></iframe>
            <iframe src="https://www.youtube.com/embed/wougJaN_Ha0?si=_ecnEuLaz0Rp3dFu &autoplay=1&mute=1"></iframe>
            <iframe src="https://www.youtube.com/embed/OqREBOP7A0I?si=dy9rBLfbrzCcHnGc &autoplay=1&mute=1"></iframe>
        </div>
        <div class="right-container"><br/><br/><br/><br/><br/><br/><br/>
            <form id="districtForm" action="" method="POST">
                <label for="state">Select State:</label>
                <select name="state" id="state">
                    <option value="">Select State</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="West Bengal">West Bengal</option>
                    <option value="Punjab">Punjab</option>
                    <!-- Add more states here -->
                </select>
                <label for="district">Select District:</label>
                <select name="district" id="district">
                    <option value="">Select District</option>
                </select>
                <!-- Hidden input fields to store selected state and district -->
                <input type="hidden" name="selected_state" id="selected-state">
                <input type="hidden" name="selected_district" id="selected-district">
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>

    <script>
    document.getElementById('state').addEventListener('change', function () {
        var state = this.value;
        var districtDropdown = document.getElementById('district');
        var selectedStateInput = document.getElementById('selected-state');

        // Clear previous options
        districtDropdown.innerHTML = '';

        if (state === 'Maharashtra') {
            addDistricts(['Mumbai', 'Pune', 'Nagpur', 'Nashik']); // Additional districts for Maharashtra
        } else if (state === 'Karnataka') {
            addDistricts(['Bangalore', 'Mysore', 'Hubli', 'Mangalore', 'Udupi']); // Additional districts for Karnataka
        } else if (state === 'West Bengal') {
            addDistricts(['Jalpaiguri', 'Kolkata', 'Murshidabad', 'Bankura']); // Additional districts for West Bengal
        } else if (state === 'Punjab') {
            addDistricts(['Jalandhar', 'Patiala']);
            // Add more conditions for other states and their respective districts
        }

        function addDistricts(districts) {
            districts.forEach(function (district) {
                var option = document.createElement('option');
                option.value = district;
                option.text = district;
                districtDropdown.appendChild(option);
            });
        }

        // Update the hidden input field with the selected state
        selectedStateInput.value = state;
    });

    // Listen for district selection
    document.getElementById('districtForm').addEventListener('submit', function (event) {
        event.preventDefault();

        var selectedDistrict = document.getElementById('district').value;

        // Use AJAX to send the selected district to the PHP file
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'store.php', true); // Change this URL to your PHP file
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log('Script executed. Initiating redirect.');
                    window.location.href = 'http://localhost/ap/pro/sugcrop.php';
                } else {
                    console.error('Error:', xhr.status);
                }
            }
        };

        xhr.send('selected_district=' + selectedDistrict);
    });

    </script>
</body>

</html>
