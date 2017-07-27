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

$sql = "SELECT id, title, url, language, also_called, full_summary FROM health_topics WHERE language LIKE '%English%' LIMIT 500";
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
    <link href="css/business-casual.css" rel="stylesheet">
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
        <div class="box">
          <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center"><strong>Terms Listing</strong></h2>
            <hr>
          </div>
          <div class="col-lg-12">
   			<?php
			    if ($result->num_rows > 0) {
                   // output data of each row
				   echo '<div class="table-responsive">';
				   echo '<table id="terms" class="table table-striped table-hover" cellspacing="0" width="100%">';
				   echo '<thead><tr><th>Title</th><th>URL</th><th>Language</th><th>Also called</th><th>Summary</th></tr></thead>';
                    while($row = $result->fetch_assoc()) {
					  echo '<tbody>';	
              		  echo '<tr>';
					  echo '<td>' . $row["title"] . '</td>';
					  echo '<td><a href="' . $row["url"] . '" target="_blank">' . $row['url'] . '</a></td>';
					  echo '<td>' . $row["language"] . '</td>';
					  echo '<td>' . $row["also_called"] . '</td>';
					  echo '<td>' . substr(strip_tags($row['full_summary']),0,110) . '</td>';
					  echo '</tr>';
					  echo '</tbody>';
		            }
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

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>