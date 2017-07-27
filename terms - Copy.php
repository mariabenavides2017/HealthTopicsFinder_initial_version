<?php
ini_set('default_charset', 'utf-8');
$servername = "localhost";
$username = "root";
$password = "maria";
$dbname = "medterms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// retrieve all the medical terms by Alphabet letter
$sql = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'A%'";
$result = $conn->query($sql);

$sqlB = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'B%'";
$resultB = $conn->query($sqlB);

$sqlC = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'C%'";
$resultC = $conn->query($sqlC);

$sqlD = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'D%'";
$resultD = $conn->query($sqlD);

$sqlE = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'E%'";
$resultE = $conn->query($sqlE);

$sqlF = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'F%'";
$resultF = $conn->query($sqlF);

$sqlG = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'G%'";
$resultG = $conn->query($sqlG);

$sqlH = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'H%'";
$resultH = $conn->query($sqlH);

$sqlI = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'I%'";
$resultI = $conn->query($sqlI);

$sqlJ = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'J%'";
$resultJ = $conn->query($sqlJ);

$sqlK = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'K%'";
$resultK = $conn->query($sqlK);

$sqlL = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'L%'";
$resultL = $conn->query($sqlL);

$sqlM = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'M%'";
$resultM = $conn->query($sqlM);

$sqlN = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'N%'";
$resultN = $conn->query($sqlN);

$sqlO = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'O%'";
$resultO = $conn->query($sqlO);

$sqlP = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'P%'";
$resultP = $conn->query($sqlP);

$sqlQ = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'Q%'";
$resultQ = $conn->query($sqlQ);

$sqlR = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'R%'";
$resultR = $conn->query($sqlR);

$sqlS = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'S%'";
$resultS = $conn->query($sqlS);

$sqlT = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'T%'";
$resultT = $conn->query($sqlT);

$sqlU = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'U%'";
$resultU = $conn->query($sqlU);

$sqlV = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'V%'";
$resultV = $conn->query($sqlV);

$sqlW = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'W%'";
$resultW = $conn->query($sqlW);

$sqlX = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'X%'";
$resultX = $conn->query($sqlX);

$sqlY = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'Y%'";
$resultY = $conn->query($sqlY);

$sqlZ = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'Z%'";
$resultZ = $conn->query($sqlZ);






?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HealthTopicsFinder - Search Terms</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <link href="css/business-casual.css" rel="stylesheet">
	<link rel="stylesheet" href="css/colorbox.css" />
	
	 <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/jquery.colorbox.js"></script>
	<style type="text/css">
	.bs-example{
		margin: 20px;
		padding: 10px;
		background-color:#FFF;
	}
	div#sectionA, div#sectionB, div#sectionC, div#sectionB h3, div#sectionB p {
		background-color:#FFF;
	}
	.table-background-color {
		background-color:#FFF;
	}
	.section-style {
		background-color:#FFF;
	}
	.tab-content h3 {
		margin-left:20px;
	}
	.nav.nav-tabs>li>a {
       padding: 5px;
    }
	.section-style h4 {
		 text-transform: none;
		 letter-spacing: normal;
         font-weight: 200;
	}
	
	a.clsterms:link {text-decoration: none}
    a.clsterms:visited {text-decoration: none}
    a.clsterms:hover {text-decoration: none}
    a.clsterms:active {text-decoration: none}

	
</style>
  </head>

  <body>
  
    <div class="brand">HealthTopicsFinder  - Terms Listing</div>
    <div class="address-bar">12818 NW 8 LN, Miami FL 33182 | 305.316.7561</div>

    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">HealthTopicsFinder</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="terms.php">Terms</a></li>
            <li><a href="search.php">Search</a></li>
			<li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <div class="container">
	<div class="row">
	    <div class="bs-example">
		<hr>
        <h2 class="intro-text text-center"><strong>Browse the A-Z index</strong></h2>
        <hr>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#sectionA">A</a></li>
        <li><a data-toggle="tab" href="#sectionB">B</a></li>
        <li><a data-toggle="tab" href="#sectionC">C</a></li>
		<li><a data-toggle="tab" href="#sectionD">D</a></li>
		<li><a data-toggle="tab" href="#sectionE">E</a></li>
		<li><a data-toggle="tab" href="#sectionF">F</a></li>
		<li><a data-toggle="tab" href="#sectionG">G</a></li>
		<li><a data-toggle="tab" href="#sectionH">H</a></li>
		<li><a data-toggle="tab" href="#sectionI">I</a></li>
		<li><a data-toggle="tab" href="#sectionJ">J</a></li>
		<li><a data-toggle="tab" href="#sectionK">K</a></li>
		<li><a data-toggle="tab" href="#sectionL">L</a></li>
		<li><a data-toggle="tab" href="#sectionM">M</a></li>
		<li><a data-toggle="tab" href="#sectionN">N</a></li>
		<li><a data-toggle="tab" href="#sectionO">O</a></li>
		<li><a data-toggle="tab" href="#sectionP">P</a></li>
		<li><a data-toggle="tab" href="#sectionQ">Q</a></li>
		<li><a data-toggle="tab" href="#sectionR">R</a></li>
		<li><a data-toggle="tab" href="#sectionS">S</a></li>
		<li><a data-toggle="tab" href="#sectionT">T</a></li>
		<li><a data-toggle="tab" href="#sectionU">U</a></li>
		<li><a data-toggle="tab" href="#sectionV">V</a></li>
		<li><a data-toggle="tab" href="#sectionW">W</a></li>
		<li><a data-toggle="tab" href="#sectionX">X</a></li>
		<li><a data-toggle="tab" href="#sectionY">Y</a></li>
		<li><a data-toggle="tab" href="#sectionZ">Z</a></li>
    </ul>
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
		  <h3>Section A</h3>
          <div class="box section-style">
          <div class="col-lg-14 section-style">
   			<?php
			    if ($result->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$result->num_rows .' result(s) start with A:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $result->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110) . '...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
      
			?>
          </div>
        </div>
        </div><!-- end of section A -->
        <div id="sectionB" class="tab-pane fade">
            <h3>Section B</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultB->num_rows > 0) {
					echo '<h4>The following '.$resultB->num_rows .' result(s) start with B:' .'</h4>';
                   // output data of each row
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultB->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110) . '...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
      
			?>
          </div>
        </div>
	    </div><!-- end of section B -->
        <div id="sectionC" class="tab-pane fade">
            <h3>Section C</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultC->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultC->num_rows .' result(s) start with C:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultC->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110) . '...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section C -->
		<div id="sectionD" class="tab-pane fade">
            <h3>Section D</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultD->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultD->num_rows .' result(s) start with D:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultD->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110) .'...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section D -->
		<div id="sectionE" class="tab-pane fade">
            <h3>Section E</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultE->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultE->num_rows .' result(s) start with E:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultE->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110) . '...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section E -->
		<div id="sectionF" class="tab-pane fade">
            <h3>Section F</h3>
             <div class="box section-style">
            <div class="col-lg-14 section-style">
   			<?php
			    if ($resultF->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultF->num_rows .' result(s) start with F:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultF->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110) . '...'. '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section F -->
		<div id="sectionG" class="tab-pane fade">
            <h3>Section G</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultG->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultG->num_rows .' result(s) start with G:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultG->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110).'...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section G -->
        <div id="sectionH" class="tab-pane fade">
            <h3>Section H</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultH->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultH->num_rows .' result(s) start with H:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultH->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110).'...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section H -->
        <div id="sectionI" class="tab-pane fade">
            <h3>Section I</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultI->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultI->num_rows .' result(s) start with I:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultI->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110) .'...'. '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section H -->
		<div id="sectionJ" class="tab-pane fade">
            <h3>Section J</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultJ->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultJ->num_rows .' result(s) start with J:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultJ->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110).'...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section I -->
		<div id="sectionK" class="tab-pane fade">
            <h3>Section K</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultK->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultK->num_rows .' result(s) start with K:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultK->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110).'...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section K -->
		<div id="sectionL" class="tab-pane fade">
            <h3>Section L</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultL->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultL->num_rows .' result(s) start with L:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultL->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110).'...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section L -->
		<div id="sectionM" class="tab-pane fade">
            <h3>Section M</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultM->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultM->num_rows .' result(s) start with M:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultM->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110).'...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section M -->
		<div id="sectionN" class="tab-pane fade">
            <h3>Section N</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultN->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultN->num_rows .' result(s) start with N:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultN->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110).'...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section N -->
		<div id="sectionO" class="tab-pane fade">
            <h3>Section O</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultO->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultO->num_rows .' result(s) start with O:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultO->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110).'...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section O -->
		<div id="sectionP" class="tab-pane fade">
            <h3>Section P</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultP->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultP->num_rows .' result(s) start with P:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultP->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110).'...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section P -->
		<div id="sectionQ" class="tab-pane fade">
            <h3>Section Q</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultQ->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultQ->num_rows .' result(s) start with Q:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultQ->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110).'...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section Q -->
		<div id="sectionR" class="tab-pane fade">
            <h3>Section R</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultR->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultR->num_rows .' result(s) start with R:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultR->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110).'...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section R -->
		<div id="sectionS" class="tab-pane fade">
            <h3>Section S</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultS->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultS->num_rows .' result(s) start with S:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultS->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110).'...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section S -->
		<div id="sectionT" class="tab-pane fade">
            <h3>Section T</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultT->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultT->num_rows .' result(s) start with T:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultT->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110).'...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section T -->
		<div id="sectionU" class="tab-pane fade">
            <h3>Section U</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultU->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultU->num_rows .' result(s) start with U:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultU->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110).'...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section U -->
		<div id="sectionV" class="tab-pane fade">
            <h3>Section V</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultV->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultV->num_rows .' result(s) start with V:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultV->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110).'...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section V -->
		<div id="sectionW" class="tab-pane fade">
            <h3>Section W</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultW->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultW->num_rows .' result(s) start with W:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultW->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110).'...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section W -->
		<div id="sectionX" class="tab-pane fade">
            <h3>Section X</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultX->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultX->num_rows .' result(s) start with X:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultX->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110).'...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section X -->
		<div id="sectionY" class="tab-pane fade">
            <h3>Section Y</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultY->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultY->num_rows .' result(s) start with Y:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultY->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110).'...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section Y -->
		<div id="sectionZ" class="tab-pane fade">
            <h3>Section Z</h3>
             <div class="box section-style">
             <div class="col-lg-14 section-style">
   			<?php
			    if ($resultZ->num_rows > 0) {
                   // output data of each row
				   echo '<h4>The following '.$resultV->num_rows .' result(s) start with Z:' .'</h4>';
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $resultZ->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="clsterms inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110).'...' . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
					  echo '<script>';
					  echo '$(".inline'.$row['id'].'").colorbox({inline:true, width:"50%"});';
					  echo '</script>';
					  echo '</td>';
					  echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>'; 
					echo '</div>';	
                } else {
                     echo "0 results - No Terms found at this moment";
                }  
         
			?>
          </div>
        </div>
	    </div><!-- end of section Z -->
		
		
		
		
    </div>
    </div>
	</div>

      
    </div><!-- /.container -->
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p>Copyright &copy; Company 2016</p>
          </div>
        </div>
      </div>
    </footer>

  </body>
</html>