<?php
error_reporting(0);
session_start();
$p=$_SESSION['user_name'];
echo '<h1><marquee behaviour="scroll" direction="left">Welcome ';
echo $p;
echo '</marquee>';
?>
<html>
<head>
    <title>Hospital Suggestion</title>
    <style>
      body{
		  background-color:red;
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
}
marquee{background-color:white;}
label{width:200px;
	margin-right:10px;
	font-size:28px;
	margin-bottom:15px;
	display:flex;
	align-items:center;}
nav{
  width: 100%;
  height: 75px;
  line-height: 75px;
  padding: 0px 100px;
  position: fixed;
  background-image: linear-gradient(red,lightblue);
}

form
{
  padding:5px;
  width:10%;
  border-radius:5px;
  outline:none;
  background-color:transparent;
  margin:2px 1px;

  margin-top:80px;
  display:flex;
  flex-direction:column;
  gap:20px;
}
form select
{
width:120%;
  margin-top:20px;
  
  display:flex;
  flex-direction:column;
  gap:20px;
}
input
{
  padding:5px;
  border:1px solid blue;
  
  width:15%;
  border-radius:5px;
  outline:none;
  background-color:transparent;
  margin:2px 1px;
}
    </style>
    <script>
        function submitFormOnEnter(event) {
            if(event.keyCode === 13) {
                event.preventDefault();
                document.getElementById('hospitalForm').submit();
            }
        }
    </script>
</head>

<body ><center>
<h4>SET YOUR APPOINTMENT</h4>   


    <form method="post" action="" id="hospitalForm">
      
      <label for="state">Select State:</label>
        <select name="state" id="state" onchange="document.getElementById('hospitalForm').submit()" onkeypress="submitFormOnEnter(event)">
            <option value="">Select</option>
            <option value="Maharashtra" >Maharashtra</option>
            <!-- Add more states here if needed -->
        </select>
        <?php
        // Define an associative array with states as keys and cities as values
        $cities = array(
            "Maharashtra" => array("Mumbai", "Pune", "Nagpur", "Nashik", "Aurangabad","Mumbai", "Pune", "Nagpur", "Nashik", "Aurangabad","Dhule","Ahmednagar","Miraj","Nagpur","Nasik",
			"Solapur","Aurangabad","Thane","Amravati","Nanded","Kolhapur","Sangli","Jalgaon","Akola","Latur","Chandrapur","Parbhani ",
			"Ichalkaranji"," Jalna","Bhusaval","Navi Mumbai","Panvel","Ulhasnagar","Satara","Beed","Yavatmal","Kamptee","Gondia",
			"Barshi"," Achalpur","Osmanabad","Panvel","Wardha","Udgir","Hinganghat","Parli","Karad","Chiplun","Ratnagiri",
			"Pimpri Chinchwad")
            
            // Add more states and their respective cities here
        );

        // Check if the form has been submitted with a state
        if(isset($_POST['state'])){
            // Get the selected state
            $selected_state = $_POST['state'];
            
            // If selected state is found in the array, display its cities
            if(isset($cities[$selected_state])){
                echo "<br><label for='city'>Select City:</label>";
                echo "<select name='city' id='city' onchange='document.getElementById(\"hospitalForm\").submit()'>";
                foreach($cities[$selected_state] as $city){
                    echo "<option value='$city'>$city</option>";
                }
                echo "</select>";
            }
        }
        ?>
   
     <?php
    // Define an associative array with cities as keys and hospital names as values
    $hospitals = array(
        "Mumbai" => array("select","Lilavati Hospital", "Bombay Hospital", "Kokilaben Dhirubhai Ambani Hospital"),
        "Pune" => array("select","Ruby Hall Clinic", "Sahyadri Hospital", "Deenanath Mangeshkar Hospital"),
        "Nagpur" => array("select","Orange City Hospital", "Wockhardt Hospitals", "Care Hospitals"),
        "Nashik" => array("select","Wockhardt Hospitals", "Apollo Hospital", "Sahyadri Super Speciality Hospital"),
        "Aurangabad" => array("select","Bhagwan Trauma and Accident Hospital", "Government Medical College and Hospital", "Datta Meghe Institute of Medical Sciences"),
		"Pimpri Chinchwad" => array("select","Dhanwantari hospital","Lokmanya Hospital,","Sai Hospital","Memorial Hospital",
		"Apollo Hospitals", "Sterling Hospital", "Shalby Hospitals")
     
        // Add more cities and their respective hospitals here
    );
      // Check if the form has been submitted with a city
    if(isset($_POST['city'])){
        // Get the selected city
        $selected_city = $_POST['city'];
        
        // If selected city is found in the array, display its hospitals
        if(isset($hospitals[$selected_city])){
            echo "<br><label for='hospital'>Select Hospital:</label>";
            echo "<select name='hospital' id='hospital'>";
            foreach($hospitals[$selected_city] as $hospital){
                echo "<option value='$hospital'>$hospital</option>";
            }
            echo "</select>";
        }
    }
    ?>
<br>

  
 </form>
  
<label for="email">Confirm Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    <label for="date">Preferred Date:</label><br>
    <input type="date" id="date" name="date" required><br><br>
    <label for="time">Preferred Time:</label><br>
    <input type="time" id="time" name="time" required><br><br>

<a href="certificate.html"><input type="submit" name="set" value="Set" style="background:blue;color:white;height:35px; 
width:100px;margin-top:20px;font-size:18px;border:0;border-radius:5px;cursor:pointer;"></a>
 
</center>
<center>
<a href="index.html"><input type="submit" name="" value="LogOut" style="background:blue;color:white;height:35px; 
width:100px;margin-top:20px;font-size:18px;border:0;border-radius:5px;cursor:pointer;"></a>
</center>

</body>
</html>
