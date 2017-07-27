
<?php
// sanitize input
$wikiTerm = strip_tags($_GET['wikiTerm']);
?><!DOCTYPE html>
<link rel="icon" href="data:;base64,iVBORw0KGgo=">
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
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  -->
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
	
	<style type="text/css">
	.bs-example{
		margin: 20px;
		padding: 10px;
		background-color:#FFF;
	}
	div#sectionA, div#sectionB, div#sectionC, div#sectionB, div#sectionB p {
		background-color:#FFF;
		text-transform: none;
	}
    .tab-content h3 {
		text-transform: none;
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
  
    <div class="brand">HealthTopicsFinder - <?=$wikiTerm ?></div>
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
        <li class="active"><a data-toggle="tab" href="#sectionA">Definition</a></li>
        <li><a data-toggle="tab" href="#sectionB">Pictures</a></li>
		<li><a data-toggle="tab" href="#sectionC">Videos</a></li>
    </ul>
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
            <h3>wikipedia's definition</h3>
			<div id="wikipedia_article"></div>
          
           <script>
 //  var searchTerm = "<?=$wikiTerm ?>";
  
  var searchTerm = "Alzheimer's_disease";
  
  $.ajax({
        url: "https://en.wikipedia.org/w/api.php",
        data: {
            format: "json",
            action: "parse",
            page: searchTerm,
            prop: "text",
            section: 0,
        },
        dataType: 'jsonp',
        headers: {
            'Api-User-Agent': 'MyCoolTool/1.1 (http://example.com/MyCoolTool/; MyCoolTool@example.com) BasedOnSuperLib/1.4'
        },
        success: function (data) {
            var markup = data.parse.text["*"];
            var i = $('<div></div>').html(markup);
            $('#wikipedia_article').html(i);
			var prefix = "https://en.wikipedia.org";
            $('#wikipedia_article a').each(function(){
              var currentHref = $(this).attr('href');
			  var iValue = currentHref.indexOf('http://');
			  if (iValue == -1) {
			     $(this).attr('href',prefix+currentHref);
			  }
            
            });	
        }
    });
	
	
</script>
	
        </div>
        <div id="sectionB" class="tab-pane fade">
     
	   <div class="box">
            <div id="pic_results"></div>
    <script>
 
	    $("#results").empty();
        $.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?",
        {
          tags: "<?=$wikiTerm ?>", 
          tagmode: "health",
		  text: "health",
          format: "json"
        },
        function(data) {
		   var counter = 1; 	
          $.each(data.items, function(i,item){
			 
             if (counter <= 3) {
				
				$("#pic_results").append("<div class='col-sm-4 text-left' ><img class='img-responsive' src='" + item.media.m + "' alt='" + item.tags + "' />" + "<h3><small>" + item.tags + "</small></h3>" + "</div>");
		        counter = counter + 1;
				
			   } else {
				 $("#pic_results").append("<div class='clearfix'></div>");
				 counter = 1;
			   
			   } 
			 
            if ( i == 12 ) return false;
			
			
          });
		  
		    $("#pic_results").append("<div class='clearfix'></div>");
        });
   
    </script>
       </div><!-- end of box -->
	
        </div>
		<div id="sectionC" class="tab-pane fade">
         <div class="box">
		      <div id="results"></div>
	     </div>
	   </div>
		
    </div>
		
		
      </div>
  </div><!-- row -->
	  
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
 <script src="js/youtube_app.js?wikiTerm=<?=$wikiTerm ?>"></script>
 <script src="https://apis.google.com/js/client.js?onload=init"></script>
  </body>
</html>