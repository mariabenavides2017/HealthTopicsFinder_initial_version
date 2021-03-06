function tplawesome(e,t){res=e;for(var n=0;n<t.length;n++){res=res.replace(/\{\{(.*?)\}\}/g,function(e,r){return t[n][r]})}return res}

 
$(function() {

    $(window).on("resize", resetVideoHeight);

});

function handleAPILoaded() {
	 var search_term = getQueryString('wikiTerm');
     // prepare the request
     var request = gapi.client.youtube.search.list({
            part: "snippet",
            type: "video",
            q:  search_term,
            maxResults: 3,
            order: "viewCount",
            publishedAfter: "2015-01-01T00:00:00Z"
       }); 
       // execute the request
      request.execute(function(response) {
          var results = response.result;
          $("#results").html("");
          $.each(results.items, function(index, item) {
			  
            $.get("tpl/item.html", function(data) {
                $("#results").append(tplawesome(data, [{"title":item.snippet.title, "videoid":item.id.videoId}]));
				
            });
	
	          });
          resetVideoHeight();
      });
 
 };


function resetVideoHeight() {
    $(".video").css("height", $("#results").width() * 9/16);
}

function init() {
    gapi.client.setApiKey("AIzaSyDIsQVzJ-aRhEXryqgDA65mxhILEcaqeoM");
    gapi.client.load("youtube", "v3", function() {
        // yt api is ready
		 window.setTimeout(handleAPILoaded, 1);
    });
}

function getQueryString (field, url)
{
	var href = url ? url : window.location.href;
	var href_dec = decodeURIComponent(href);
    var reg = new RegExp( '[?&]' + field + '=([^&#]*)', 'i' );
    var string = reg.exec(href_dec);
    return string ? string[1] : null;
}
