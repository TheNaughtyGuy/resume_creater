<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author"
	content="Mukesh Bari">
	<meta name="viewport"
	content="width=device-width,
	initial-scale=1.0">
	<link rel="stylesheet"
	href="myquize.css">
	<script src="myquize.js">
	</script>
<title>
Create Resume
</title>
</head>
<body><div>
	<form action="resume.php" method="post">	
	<h1 style="padding-right:  10%">Personal Information</h1>
		<div class="row">
		<div class="column1"><br>Full Name: <br>
	<input type="text" width: name="name" value="Full Name" required><br>
	<br>
	Contact No: <br>
	<input type="text" name="contact_no" value="(+91) 9876543210" required><br>
	<br>Email: <br>
	<input type="text" name="email" value="my@dot.com" required><br>
	<br>
	</div>
	<div class="column2">
	<br>Brief Intro: <br>
	<div class="inL">
	<input required type="text" width: name="student@" value="Student at College"  style="width: 50%"> 
	 <input required type="text" name="clg_add" value="City State, India - PinCode" style="width: 50%"></div><br>
	<br>Address: <br>
	<div class="inL">
	<input type="text" width: name="Short_Address" value="Short Address"  style="width: 40%"> 
	 <input type="text" name="State/Territory" value="State/Territory" style="width: 20%"> <br><br><input type="text" name="Country" value=" Country" style="width: 20%">  <input type="text" value="Pin Code" name="PinCode" style="width: 20%"></div><br>
	</div></div><br>

	<h1 style="padding-right:  10%">Professional Profile</h1>
	<br>Objective: <br>
	<textarea required style="width: 80%" name="objective">To secure a position in _field_ (eg. software) role where I can effectively contribute and enhance my skills.</textarea><br><br>



	<br>Education: <br>
	<p class="hint"> * current college + (10+2)/higher secondary + (10)/high school</p>
	<input type="text" name="Institute_name1" value="Institute name, City" required><br>
	<div class="inL">
	<input type="text" name="Degree1" value="Full form of course/Degree"  style="width: 40%"> 
	 <input type="text" name="Dshort1" value="Short form" style="width: 10%"> <br><input type="text" name="Branch1" value="Branch name" style="width: 30%">  <input type="text" value="start yr-End yr" name="year1" style="width: 20%"></div><br>
	 <input type="text" name="cgpa1" value="CGPA (with till_)"  style="width: 20%"> <br>

	 <br>
	 <input type="text" name="Institute_name2" value="Institute name, City" required><br>
	 <div class="inL">
	 <input type="text" name="Class2" value="eg Class 12"  style="width: 20%"> 
	 <input type="text" name="Board2" value="Board" style="width: 20%"> <br>
	 <input type="text" name="year2" value="Year" style="width: 20%">  
	 <input type="text" name="cgpa2" value="CGPA/Percent"  style="width: 20%"> </div><br>

	 <br>
	 <input type="text" name="Institute_name3" value="Institute name, City" required><br>
	 <div class="inL">
	 <input type="text" name="Class3" value="eg. Class 10"  style="width: 20%"> 
	 <input type="text" name="Board3" value="Board" style="width: 20%"> <br>
	 <input type="text" name="year3" value="Year" style="width: 20%">  
	 <input type="text" name="cgpa3" value="CGPA/Percent"  style="width: 20%"> </div><br>


	<br>Top Skills: <br>
	
	<div class="inL">
	<input type="text" width: name="skills_type1" value="eg. Programming" required style="width: 20%"> :
	<input type="text" name="skills1" value="eg. JAVA, C++, Python, C" required></div><br><br>
	<div class="inL">
	<input type="text" width: name="skills_type2" value="eg. Core" required style="width: 20%"> :
	<input type="text" name="skills2" value="eg. Data Structure and Alogorithm" required></div><br><br>
	<div class="inL">
	<input type="text" width: name="skills_type3" value="eg. Other"  style="width: 20%"> :
	<input type="text" name="skills3" value="eg. HTML, CSS, MySQL, PHP, JS, Android" ></div><br><br>


	<br>Projects Detail: <br>
	<p class="hint"> * best 4 projects </p>
	<div class="inL">
	 <input type="text" width: name="project_title1" value="project_title"  style="width: 15%"> 
	 <input type="text" name="Tech1" value="Tech used" style="width: 25%"> 
	 <input type="text" name="Desc1" value=" Short Discription" style="width: 50%"> <br>
	 <input type="text" value="link" name="Plink1"></div><br>
	 <br>
	 <div class="inL">
	 <input type="text" width: name="project_title2" value="project_title"  style="width: 15%"> 
	 <input type="text" name="Tech2" value="Tech used" style="width: 25%"> 
	 <input type="text" name="Desc2" value=" Short Discription" style="width: 50%"> <br>
	 <input type="text" value="link" name="Plink2"></div><br><br>
	 <div class="inL">
	 <input type="text" width: name="project_title3" value="project_title"  style="width: 15%"> 
	 <input type="text" name="Tech3" value="Tech used" style="width: 25%"> 
	 <input type="text" name="Desc3" value=" Short Discription" style="width: 50%"> <br>
	 <input type="text" value="link" name="Plink3"></div><br><br>
	 <div class="inL">
	
	 <input type="text" width: name="project_title4" value="project_title"  style="width: 15%"> 
	 <input type="text" name="Tech4" value="Tech used" style="width: 25%"> 
	 <input type="text" name="Desc4" value=" Short Discription" style="width: 50%"> <br>
	 <input type="text" value="link" name="Plink4"></div><br><br>

	<br>Other Links: <br>

	<div class="inL">
	<input type="text" width: name="link1" value="eg. gitHub"  style="width: 20%"> :
	<input type="text" name="linkname1" value="it's link"></div><br><br>
	<div class="inL">
	<input type="text" width: name="link2" value="eg. CodeChef"  style="width: 20%"> :
	<input type="text" name="linkname2" value="it's link"></div><br><br>
	<div class="inL">
	<input type="text" width: name="link3" value="eg. HackerRank"  style="width: 20%"> :
	<input type="text" name="linkname3" value="it's link"></div><br><br>
	

	<br>Languages: <br>
	<div class="inL">
	Professsional Working: <input type="text" name="lang1" value="eg. English" style="width: 150px ">  
	Native: <input type="text" name="lang2" value="eg. Hindi" style="width: 150px">  
	Elementory: <input type="text" name="lang3" value="eg. French, Marathi" style="width: 150px">  </div><br><br>
	
	<br>Academic Achievements:<br>
	<input type="text" name="Acd_Ach1" value="eg. JEE rank" >  <br>
	<input type="text" name="Acd_Ach2" value="eg. any kind of scholarship" >  <br>
	<input type="text" name="Acd_Ach3" value="eg. rank in any olympia" >  <br><br>

	
	<br>Extra-Curricular Activities: <p class="hint"><input type="checkbox" name="include_curr[]"> * optional, tick for including it </p> 

	<div class="inL">
	<input type="text" name="Curr1"  value="eg. Club/Society/NGO"  style="width: 20%"> :
	<input type="text" name="discription1"  value="Discription"></div><br>
	<div class="inL">
	<input type="text" name="Curr2"  value="eg. Competition/Participation" style="width: 20%"> :
	<input type="text" name="discription2" value="Discription"  ></div><br>
	<div class="inL">
	<input type="text" name="Curr3"  value="eg. Any event organized" style="width: 20%"> :
	<input type="text" name="discription3" value="Discription" ></div><br>

	<br>Hobbies:<br>
	<input type="text" name="hobbi" value="eg. Sports/Music/Art/Reading" >  <br><br>


	<Input type="submit" value="Submit" name="submit" style="width: 120px;  background-color: darkgreen "><br>


</form></div>
</body></html>
