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
	<style type="text/css">
	  div#search_img {
		  width:45%;
	  }
	  .search_form {
		margin:10px;
		padding:10px;
	  }
	</style>
  </head>

  <body>
  
    <div class="brand">HealthTopicsFinder - Search Terms</div>
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
      
		 <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Find out any <strong>Medical Term</strong> you are curious about</h2>
            <hr>
            <img class="img-responsive img-border img-left" src="images/55SIG0001RF.jpg">
            <hr class="visible-xs">
            <p>
	<form role="form" id="searchForm" name="searchForm" class="search_form" method="get" class="form-horizontal" action="terms_search_results.php">
		            <div class="form-group col-lg-4">
					<br /><br />
                      <input type="text" id="inputSearchTerm" name="inputSearchTerm" placeholder="Search Term"  class="form-control">
					  <br /><br />
					  <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
				   <div class="clearfix"></div>
				  </form>
			</p>
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

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript">
		$.validator.setDefaults( {
			submitHandler: function () {
			//	alert( "submitted!" );
				document.searchForm.submit();
			}
		} );

		$( document ).ready( function () 
		{
			$( "#searchForm" ).validate( {
				rules: {
					inputSearchTerm: "required"
				},
				messages: {
					inputSearchTerm: "Please enter a search term",
					
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-lg-4" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".col-lg-4" ).addClass( "has-success" ).removeClass( "has-error" );
				}
			} );

			
		} );
	</script>
  </body>
</html>