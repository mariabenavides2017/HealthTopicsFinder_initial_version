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

$sql = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' AND title LIKE 'A%'";
$result = $conn->query($sql);?>
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
 <!--   <script src="js/jquery-1.10.2.js"></script>  -->
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
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#sectionA">Section A</a></li>
        <li><a data-toggle="tab" href="#sectionB">Section B</a></li>
        <li><a data-toggle="tab" href="#sectionC">Section C</a></li>
    </ul>
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
            <h3>Section A</h3>
             <div class="box section-style">
          <div class="col-lg-14 section-style">
            <hr>
            <h2 class="intro-text text-center"><strong>Terms Listing</strong></h2>
            <hr>
          </div>
          <div class="col-lg-14 section-style">
   			<?php
			    if ($result->num_rows > 0) {
                   // output data of each row
				   echo '<div class="table-background-color table-responsive table-bordered">';
				   echo '<table id="terms" class="table section-style table-striped table-hover" cellspacing="5" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Also called</th><th>Summary</th></tr></thead>';
				   echo '<tbody>';
                    while($row = $result->fetch_assoc()) {
					  echo '<tr>';
					  echo '<td><p class="text-primary"><strong>' . $row["title"] . '</strong></p></td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td><p><a class="inline' .$row['id'].'"' . ' href="#inline_content'.$row['id'].'">' . substr(strip_tags($row['full_summary']),0,110) . '</a>' .'</p><div style="display:none;"><div id="inline_content'.$row['id'].'"  style="padding:10px; background:#fff;">' . $row['full_summary'] . '</div></div>';
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
                $conn->close();

			?>
          </div>
        </div>
        </div>
        <div id="sectionB" class="tab-pane fade">
            <h3>Section B</h3>
            <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
        </div>
        <div id="sectionC" class="tab-pane fade">
            <h3>Section C</h3>
            <p>Esta es section C</p>
        </div>
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