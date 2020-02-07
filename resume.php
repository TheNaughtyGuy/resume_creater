<!DOCTYPE html>
<html lang ="en">
<head>
  <meta http-equiv="Content-Type content="text/html; charset="=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="resume.css">
  <script src="resume.js">
  </script>

</head>
<body><div style="float: center;">
<div class="row">
<div class="column1">


<h1 class=head>Contact</h1>

<h1 class=val1><?php echo $_POST["contact_no"]; ?><br>

    <?php echo $_POST["email"]; ?></h1>



<h1 class=head1>Address</h1>

<h1 class=val1><?php echo $_POST["Short_Address"]; ?><br> <?php echo $_POST["State/Territory"]; ?>, <?php echo $_POST["Country"]; ?> - <?php echo $_POST["PinCode"]; ?></h1>



<h1 class=head1>Top Skills</h1>

<h1 class=val1><?php echo $_POST["skills_type1"]; ?> : </h1><h1 class=val2><?php echo $_POST["skills1"]; ?></h1><br>

<h1 class=val1><?php echo $_POST["skills_type2"]; ?> : </h1><h1 class=val2><?php echo $_POST["skills2"]; ?></h1><br>

<h1 class=val1><?php echo $_POST["skills_type3"]; ?> : </h1><h1 class=val2><?php echo $_POST["skills3"]; ?></h1><br>



<h1 class=head1>Other Links</h1>

<h1 class=val1><?php echo $_POST["linkname1"]; ?>  <h1 class=val2>(<?php echo $_POST["link1"]; ?> )</h1><br><br>

<h1 class=val1> <?php echo $_POST["linkname2"]; ?> </h1><h1 class=val2>(<?php echo $_POST["link2"]; ?> )</h1><br><br>

<h1 class=val1><?php echo $_POST["linkname3"]; ?> </h1><h1 class=val2>(<?php echo $_POST["link3"]; ?> )</h1>



<h1 class=head1>Languages</h1>

<h2 class=val1><?php echo $_POST["lang1"]; ?> </h2><h2 class=val2>(professional Working)</h2><br>

<h2 class=val1><?php echo $_POST["lang2"]; ?> </h2><h2 class=val2>(Native)</h2><br>

<h2 class=val1><?php echo $_POST["lang3"]; ?> </h2><h2 class=val2>(Elementary)</h2><br>
<div class=gap>
page 1 of 1<br><br></div>
</div>



<div class="column2">
    
<h1 class="heading"><?php echo $_POST["name"]; ?></h1><br>
<h1 class="value2"> <?php echo $_POST["student@"]; ?> </h1><br>
<h1 class="place"><?php echo $_POST["clg_add"]; ?></h1>


<h1 class="value1">Objective</h1>

<h1 class="value2"><?php echo $_POST["objective"]; ?></h1><br>

<h1 class="value1">Education</h1>

<div>
<h1 class="value2"><?php echo $_POST["Institute_name1"]; ?></h1><br>
<h1 class="value3"><?php echo $_POST["Degree1"]; ?> - <?php echo $_POST["Dshort1"]; ?>, <?php echo $_POST["Branch1"]; ?>  </h1><br>
<h1 class="value3">CGPA- <?php echo $_POST["cgpa1"]; ?> · (<?php echo $_POST["year1"]; ?>)</h1><br><br>
</div>
<div>
<h1 class="value2"><?php echo $_POST["Institute_name2"]; ?></h1><br>
<h1 class="value3"><?php echo $_POST["Class2"]; ?> – <?php echo $_POST["Board2"]; ?> · (<?php echo $_POST["year2"]; ?>) - <?php echo $_POST["cgpa2"]; ?></h1><br><br>
</div>
<div>
<h1 class="value2"><?php echo $_POST["Institute_name3"]; ?></h1><br>
<h1 class="value3"><?php echo $_POST["Class3"]; ?> – <?php echo $_POST["Board3"]; ?> · (<?php echo $_POST["year3"]; ?>) - <?php echo $_POST["cgpa3"]; ?></h1></div><br>


<h1 class="value1">Projects</h1>

<table style="width:100%; height:150px; font-size: 20px;">
  <tr>
    <th>Project Title</th>
    <th>Technologies used</th>
    <th>Description</th>
    <th>Link</th>
  </tr>
  <tr>
    <td><?php echo $_POST["project_title1"]; ?></td>
    <td><?php echo $_POST["Tech1"]; ?></td>
    <td><?php echo $_POST["Desc1"]; ?></td>
    <td><a href="<?php echo $_POST["Plink1"]; ?>">link</a></td>
  </tr>
  <tr>
    <td><?php echo $_POST["project_title1"]; ?></td>
    <td><?php echo $_POST["Tech2"]; ?></td>
    <td><?php echo $_POST["Desc2"]; ?></td>
    <td><a href="<?php echo $_POST["Plink2"]; ?>">link</a></td>
  </tr>
  <tr>
    <td><?php echo $_POST["project_title1"]; ?></td>
    <td><?php echo $_POST["Tech3"]; ?></td>
    <td><?php echo $_POST["Desc3"]; ?></td>
    <td><a href="<?php echo $_POST["Plink3"]; ?>">link</a></td>
  </tr>
  <tr>
    <td><?php echo $_POST["project_title1"]; ?></td>
    <td><?php echo $_POST["Tech4"]; ?></td>
    <td><?php echo $_POST["Desc4"]; ?></td>
    <td><a href="<?php echo $_POST["Plink4"]; ?>">link</a></td>
  </tr>
</table>


<h1 class="value1">Academic Achievements</h1>
<ul style="list-style-type:circle;">
  <li><h1 class="value2"><?php echo $_POST["Acd_Ach1"]; ?></h1><br></li>
  <li><h1 class="value2"><?php echo $_POST["Acd_Ach2"]; ?></h1><br></li>
  <li><h1 class="value2"><?php echo $_POST["Acd_Ach3"]; ?></h1></li>
</ul>


<?php
if(isset($_POST['submit'])){
if(!empty($_POST["include_curr"])) {
echo 


"<h1 class=\"value1\">Extra-Curricular Activities:</h1>


<ul style=\"list-style-type:circle;\">
	<li><h1 class=\"value2\"> ". $_POST["Curr1"] . " –</h1> <h1 class=\"value3\">" . $_POST["discription1"] . "</h1><br></li>
	<li><h1 class=\"value2\">" . $_POST["Curr2"] . " -</h1> <h1 class=\"value3\">" . $_POST["discription2"] . "</h1><br></li>
	<li><h1 class=\"value2\">" . $_POST["Curr3"] . " -</h1> <h1 class=\"value3\">" . $_POST["discription3"] . "</h1></li>
</ul>"

;
}}?>

<h1 class="value1">Hobbies: </h1>
<h1 class="value2"> <?php echo $_POST["hobbi"]; ?></h1>
  </div>
</div>
</body>
</html>
