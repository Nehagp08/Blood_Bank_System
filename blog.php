<?php
       require 'includes/header.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body 
{
    font-family: "Lato", sans-serif;
    background:black;  
 }

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: red;
  width: 25%;
  height: 600px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  /* background-color: inherit; */
  background-color:red;
  color: white;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: black;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
  color:black;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 2px solid green;
  width: 75%;
  border-left: none;
  height: 600px;
  color:white;
}
.tabcontent h2{
 margin-top:25px;
 margin-left:25px;
 font-size:2.9rem;
 color: white;
 text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}
.tabcontent h5
{
    margin-top:30px;
    margin-left:25px;
    font-size:1.5rem;
    font-weight:400;
}
</style>
</head>
<body>

<h2>Vertical Tabs</h2>
<p>Click on the buttons inside the tabbed menu:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Blood Donation')" id="defaultOpen">Blood Donation</button>
  <button class="tablinks" onclick="openCity(event, 'Type of Blood Donation')">Type of Blood Donation</button>
  <button class="tablinks" onclick="openCity(event, 'Tips on Blood Doanating')">Tips on Blood Doanating</button>
  <button class="tablinks" onclick="openCity(event, 'Why donate blood?')">Why donate blood?</button>
  <button class="tablinks" onclick="openCity(event, 'Who needs blood?')">Who needs blood?</button>
  <button class="tablinks" onclick="openCity(event, 'Eligibility to donate')">Eligibility to donate</button>
  <button class="tablinks" onclick="openCity(event, 'Know Your Blood Group')">Know Your Blood Group</button>
 
</div>

<div id="Blood Donation" class="tabcontent">
  <h2>Blood Donation</h2>
  <h5>Blood is the most precious gift that anyone can give to another person — the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components — red cells, platelets and plasma — which can be used individually for patients with specific conditions.</h5>
  <h5>Blood donation is healthy for our body because it makes our blood less viscose which will help in combating cardiovascular and other diseases. 38% of the population all over the world is capable of donating blood;</h5>
</div>

<div id="Type of Blood Donation" class="tabcontent">
  <h2>Type of Blood Donation</h2>
  <h5>Blood donations are divided into three groups based on who will receive the collected blood. An allogeneic (also called homologous) donation is when a donor gives blood for storage at a blood bank for transfusion to an unknown recipient. A directed or replacement donor donation is when a person, often a family member, donates blood for transfusion to a specific individual. Directed donations are rare in developed countries like Canada but are common in developing countries such as Ghana. The third kind is when a person has blood stored that will be transfused back to the donor at a later date, usually after surgery. This is called an autologous donation. Blood that is used to make medications can be made from allogeneic donations or from donations exclusively used for manufacturing.</h5> 
</div>

<div id="Tips on Blood Doanating" class="tabcontent">
  <h2>Tips on Blood Doanating</h2>
  <h5>Please have a good meal at least 3 hours before donating blood. <br>
      Please accept the snacks offered to you after the donation, it is vital you have them. You are recommended to have a good meal later.<br>
      Please avoid smoking on the day before donating. You can smoke 3 hours after donation. <br>
      You will not be eligible to donate blood if you have consumed alcohol 48 hours before donation. <br>
      You wont feel drained or tired if you continue to drink fluids and have a good meal. <br>
      You can resume your normal activities after donating blood, though you are asked to refrain from exercise or heavy weight lifting for twelve hours after donation. <br>
      If you choose to consume alcohol, you can on the next day. <br>
      While donating blood you will not feel any pain. <br>
</h5>
</div>

<div id="Why donate blood?" class="tabcontent">
  <h2>Why donate blood?</h2>
  <h5>A blood donation is truly an altruistic gift that an individual can give to others in need. In only 45-60 minutes, an eligible individual can donate one unit of blood that can be separated into four individual components that could help save multiple lives.</h5>
  <h5>This is where you come in. The time taken by a patient's body to replace it could cost his/her life. Sometimes the body might not be in a condition to replace it at all.</h5> 
</div>

<div id="Who needs blood?" class="tabcontent">
  <h2>Who needs blood?</h2>
  <h5>Every 2 seconds someone needs blood. Your blood helps more than one life at a time. Accidents, premature babies, major surgeries require Whole blood, where your blood after testing is used directly. Trauma, Anemia, other surgeries requires only RBC, which is separated from your blood.</h5>
  <h5>
Every two seconds someone in the U.S. needs blood. It is essential for surgeries, cancer treatment, chronic illnesses, and traumatic injuries. Whether a patient receives whole blood, red cells, platelets or plasma, this lifesaving care starts with one person making a generous donation.</h5> 
</div>

<div id="Eligibility to donate" class="tabcontent">
  <h2>Eligibility to donate</h2>
  <h5>You should not be suffering from any of the following diseases or taking medicines for them <br>
      1. Hepatitis B, C <br>
      2. AIDS <br>
      3. Diabetes (are you under medication currently?) <br>
      4. Fits/ Convulsions (are you under medication currently?) <br>
      5. Cancer <br>
      6. Leprosy or any other infectious diseases <br>
      7. Any allergies (Only if you are suffering from severe symptoms) <br>
      8. Hemophilia/ Bleeding problems <br>
      9. Kidney disease , Heart disease <br>
      10. Hormonal disorders <br>
      11. Any other type of Jaundice (within 5 years) <br>
      12. Malaria (within 1 year) <br>
      13. Organ Transplant (within one year) <br>
      14. Blood Transfusion (within the last 6 months) <br>
      15. Blood Donation (within the last 3 months) <br>

</div>

<div id="Know Your Blood Group" class="tabcontent">
  <h2>Know Your Blood Group</h2>
  <h5>Blood is grouped into four types: A, B, AB, and O. <br>
      Each Type is also classified by an Rh factor: Either positive (+) or negative (-). <br>
      When a blood transfusion is necessary, donor and patient blood must be compatible. If not, the patient's body will react to the incompatible donor cells, leading to complications, maybe even death. Your ABO blood grouping and Rh factor are inherited from your parents. <br>


Following are the Blood Groups <br>
O Positive <br>
O Negative <br>
A Positive <br>
A Negative <br>
B Positive <br>
B Negative <br>
AB Positive <br>
AB Negative <br>
Blood Group O (Universal Donor)</h5> 
</div>


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
