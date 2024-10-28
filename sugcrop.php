
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>output page</title>
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




.inright-container {
    background: #fff; /* White background */
    border-radius: 15px; /* Slightly rounded corners */
    padding: 20px; /* Increased padding for better spacing */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Soft box shadow */
    overflow: hidden; /* Hide overflow content */
}

.inright-container h2 {
    font-size: 28px; /* Larger font size for headings */
    margin-bottom: 10px;
    color: #333; /* Darker text color */
}

.inright-container p {
    font-size: 18px;
    margin-bottom: 15px;
    color: #555; /* Slightly darker text color */
}

.inright-container table {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.inright-container td {
    padding: 15px;
    border: none;
    border-radius: 10px;
    color: #fff; /* White text color */
    background-color: #3498db; /* Blue background color */
}

.inright-container td:first-child {
    font-weight: bold;
}

.inright-container .credit {
    color: #555;
    text-align: center;
    margin-top: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.inright-container .credit a {
    text-decoration: none;
    color: #3498db;
    font-weight: 800;
}



.inleft-container {
            background: #ffffff;
            flex: 1;
            width: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 530px;
            padding: 10px;
            margin: 30px;
            border-radius: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            overflow: hidden;
        }
        .left-card {
            background: #ffffff;
            flex: 1;
            height: 100%;
	    width: 250px;
            border-radius: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #333; /* Adjust text color */
	}
  h2, h3 {
            font-size: 24px;
            margin-bottom: 5px;
            color: #555; /* Adjust text color */
        }
        p {
            font-size: 18px;
            margin-bottom: 20px;
            color: #777; /* Adjust text color */
        }
        .transparent-bg {
            background: rgba(255, 255, 255, 0.8); /* Adjust transparency */
            padding: 5px; /* Adjust padding for a better visual */
            border-radius: 10px;
            margin: 5px 0; /* Adjust margin */
        }

</style>


</head>
<body>
    <div class="card">
  <div class="left-container">

<div class="inleft-container">
<div class="left-card">
            <?php
            // Include the PHP code here
            $json_path = 'C:\\xampp\\htdocs\\ap\\pro\\m.json';

            if (file_exists($json_path)) {
                $json_content = file_get_contents($json_path);
                $variables = json_decode($json_content, true);

                $s1 = isset($variables['State']) ? $variables['State'] : '';
                $d = isset($variables['District']) ? $variables['District'] : '';

                echo "<h2>State:</h2>";
                echo "<p>$s1</p>";

                echo "<h2>District:</h2>";
                echo "<p>$d</p>";
            } else {
                echo "File not found: $json_path";
            }
            ?>
        </div>
</div>



  </div>
  <div class="right-container">


<!-- Inside the left-container div in your HTML -->
<div class="inright-container">
    <?php
    // php_script.php
    $json_path = 'C:\\xampp\\htdocs\\ap\\pro\\k.json';

    // Check if the file exists
    if (file_exists($json_path)) {
        $json_content = file_get_contents($json_path);
        $my_variables = json_decode($json_content, true);

        // Access individual variables if they exist
        $variable1 = isset($my_variables['Soil']) ? $my_variables['Soil'] : '';
        $variable2 = isset($my_variables['Temp']) ? $my_variables['Temp'] : '';
        $variable3 = isset($my_variables['Rain']) ? $my_variables['Rain'] : '';
        $variable4 = isset($my_variables['Humidity']) ? $my_variables['Humidity'] : '';
        $variable5 = isset($my_variables['Crops']) ? $my_variables['Crops'] : [];

        // Display the variables in the left container
        echo "<h2>Soil Type:</h2>";
        echo "<p>$variable1</p>";

        echo "<h2>Temp(C):</h2>";
        echo "<p>$variable2</p>";

        echo "<h2>Annual Rainfall(cm):</h2>";
        echo "<p>$variable3</p>";

        echo "<h2>Humidity:</h2>";
        echo "<p>$variable4</p>";

        echo "<h2>Recommended Crops:</h2>";
        echo "<p>" . implode(', ', $variable5) . "</p>";
    } else {
        echo "File not found: $json_path";
    }
    ?>
</div>



  </div>
</div>





</body>
</html>











    
       

   
