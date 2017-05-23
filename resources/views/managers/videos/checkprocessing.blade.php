@extends('managers.master')
@section('header')
<title>Manager::Check Processing</title>
<meta name="csrf-token" content="{{ Session::token() }}"> 
    <!--
<script src="https://apis.google.com/js/api.js"></script>
<script>
function start() {
  // 2. Initialize the JavaScript client library.
  gapi.client.init({
    'apiKey': 'YOUR_API_KEY',
    // clientId and scope are optional if auth is not required.
    'clientId': '339936867913-fqfm1amr7sbo1qfsn8ph2j82c18u8jrt.apps.googleusercontent.com',
    'scope': 'profile',
  }).then(function() {
    // 3. Initialize and make the API request.
    return gapi.client.request({
      'path': 'https://people.googleapis.com/v1/people/me',
    })
  }).then(function(response) {
    console.log(response.result);
  }, function(reason) {
    console.log('Error: ' + reason.result.error.message);
  });
};
// 1. Load the JavaScript client library.
gapi.load('client', start);
</script>

-->
@endsection
@section('title','Check Processing tool')
@section('content')
<script src="https://apis.google.com/js/api.js"></script>
<script type="text/javascript" src="https://apis.google.com/js/client.js">
</script>
<script>

  // 2. Initialize the JavaScript client library.
  /*
  gapi.client.init({
    'apiKey': 'AIzaSyBqMa2pBNbqYPac54EV49lnGEqqSonDLjo',
    // clientId and scope are optional if auth is not required.
    'clientId': '339936867913-fqfm1amr7sbo1qfsn8ph2j82c18u8jrt.apps.googleusercontent.com',
    'scope': 'https://www.googleapis.com/auth/drive',
  }).then(function() {
    // 3. Initialize and make the API request.
    return gapi.client.request({
      'path': 'https://www.googleapis.com/auth/drive',
    })
  }).then(function(response) {
    console.log(response.result);
  }, function(reason) {
    console.log('Error: ' + reason.result.error.message);
  });
};
// 1. Load the JavaScript client library.
gapi.load('client', start);
*/
</script>
<!--
<script>
 var CLIENT_ID = '339936867913-fqfm1amr7sbo1qfsn8ph2j82c18u8jrt';
 var SCOPES = 'https://www.googleapis.com/auth/drive.file';
     var handleClientLoad = function() {
        window.setTimeout(checkAuth, 1);
    }
 
    var checkAuth = function () {
        gapi.auth.authorize(
            {'client_id': CLIENT_ID, 'scope': SCOPES, 'immediate': true},
            handleAuthResult);
    }
    
    var checkAuthNonImmediate = function() {
        gapi.auth.authorize(
            {'client_id': CLIENT_ID, 'scope': SCOPES, 'immediate': false},
            handleAuthResult);
    }
      var handleAuthResult = function(authResult) {
        $("#authorizeButton").hide();
        if (authResult && !authResult.error){
           retrieveAllFiles();
          // printFile('0BwGqYM_7rbRwSjZVUlpCbnZsd3c');
   
        }
        else{
            $("#authorizeButton").show();
            $("#authorizeButton").attr("onclick", "checkAuthNonImmediate();");
        }
    }


var retrieveAllFiles = function()  {
        var retrievePageOfFiles = function(request) {
            request.execute(function(resp) {
                displayFileList(resp.items);
                var nextPageToken = resp.nextPageToken;
                if (nextPageToken) {
                    request = gapi.client.request({
                        'path': '/drive/v2/files',
                        'method': 'GET',
                        'pageToken': nextPageToken,
                        'params': {
                        'q': 'trashed = false'
                        }
                    });
                    retrievePageOfFiles(request);
                }
            });
        }
        var initialRequest = gapi.client.request({
            'path': '/drive/v2/files',
            'method': 'GET',
            'params': {
            'q': 'trashed = false'
            }
        });
        retrievePageOfFiles(initialRequest, []);
    }

    var displayFileList = function(result){
        if(result.length > 0){
                $("#data-grid").show();
                for(var counter = 0; counter < result.length; counter++){
                     $("#data-grid").append("<div>" + result[counter].title + "</div>");
                }
            }
    }
    function printFile(fileId) {
  var request = gapi.client.drive.files.get({
    'fileId': fileId
  });
  request.execute(function(resp) {
    console.log('Title: ' + resp.title);
    console.log('Description: ' + resp.description);
    console.log('MIME type: ' + resp.mimeType);
  });
}
function downloadFile(file, callback) {
  if (file.downloadUrl) {
    var accessToken = gapi.auth.getToken().access_token;
    var xhr = new XMLHttpRequest();
    xhr.open('GET', file.downloadUrl);
    xhr.setRequestHeader('Authorization', 'Bearer ' + accessToken);
    xhr.onload = function() {
      callback(xhr.responseText);
    };
    xhr.onerror = function() {
      callback(null);
    };
    xhr.send();
  } else {
    callback(null);
  }
}

 function test() {
    var accessToken = gapi.auth.getToken().access_token;
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "https://www.googleapis.com/drive/v3/files/"+'1A1RguZpYFLyO9qEs-EnnrpikIpzAbDcZs3Gcsc7Z4nE', true);
    xhr.setRequestHeader('Authorization','Bearer '+accessToken);
    xhr.onload = function(){
        console.log(xhr);
    }
    xhr.send('alt=media');
  }
$(document).ready(function(){
  $("#authorizeButton").click(function(){
    handleClientLoad();
    
   // downloadFile();
  });

});
</script>
-->
<!--
<div class="col-md-9" >
	<form name="frmTeacher" action=""  method="POST" enctype="multipart/form-data" class="form-horizontal">
    <input type="hidden" name="_token"  value="{{ csrf_token() }}">

    
 
 


  <div class="form-group">
    <label class="control-label col-sm-3" for="video">Video:</label>
    <div class="col-sm-9">


  
  <input type="text">
    <input type="button" value="Check" onclick="uploadFile()">


    </div>
  </div>



       
</form>
  <button id="signin-button" onclick="handleSignInClick()">Sign In</button>
    <button id="signout-button" onclick="handleSignOutClick()">Sign Out</button>

</div>
-->


<script type="text/javascript">
      // Client ID and API key from the Developer Console
      var CLIENT_ID = '339936867913-fqfm1amr7sbo1qfsn8ph2j82c18u8jrt';

      // Array of API discovery doc URLs for APIs used by the quickstart
      var DISCOVERY_DOCS = ["https://www.googleapis.com/discovery/v1/apis/drive/v2/rest"];

      // Authorization scopes required by the API; multiple scopes can be
      // included, separated by spaces.
      var SCOPES = 'https://www.googleapis.com/auth/drive.metadata.readonly';

      var authorizeButton = document.getElementById('authorize-button');
      var signoutButton = document.getElementById('signout-button');

      /**
       *  On load, called to load the auth2 library and API client library.
       */
       function handleClientLoad() {
        gapi.load('client:auth2', initClient);
      }

      /**
       *  Initializes the API client library and sets up sign-in state
       *  listeners.
       */
       function initClient() {
        gapi.client.init({
          discoveryDocs: DISCOVERY_DOCS,
          clientId: CLIENT_ID,
          scope: SCOPES
        }).then(function () {
          // Listen for sign-in state changes.
       //   gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

          // Handle the initial sign-in state.
       //   updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
      //    authorizeButton.onclick = handleAuthClick;
      //    signoutButton.onclick = handleSignoutClick;
    });
      }

      /**
       *  Called when the signed in status changes, to update the UI
       *  appropriately. After a sign-in, the API is called.
       */
       /*
      function updateSigninStatus(isSignedIn) {
        if (isSignedIn) {
          authorizeButton.style.display = 'none';
          signoutButton.style.display = 'block';
          listFiles();
        } else {
          authorizeButton.style.display = 'block';
          signoutButton.style.display = 'none';
        }
      }
      */
      /**
       *  Sign in the user upon button click.
       */
       function handleAuthClick(event) {
        gapi.auth2.getAuthInstance().signIn();
      }

      /**
       *  Sign out the user upon button click.
       */
       function handleSignoutClick(event) {
        gapi.auth2.getAuthInstance().signOut();
      }

      /**
       * Append a pre element to the body containing the given message
       * as its text node. Used to display the results of the API call.
       *
       * @param {string} message Text to be placed in pre element.
       */
       /*
      function appendPre(message) {
        var pre = document.getElementById('content');
        var textContent = document.createTextNode(message + '\n');
        pre.appendChild(textContent);
      }
      */
      /**
       * Print files.
       */
       /*
      function listFiles() {
        gapi.client.drive.files.list({
          'maxResults': 10
        }).then(function(response) {
          appendPre('Files:');
          var files = response.result.items;
          if (files && files.length > 0) {
            for (var i = 0; i < files.length; i++) {
              var file = files[i];
              appendPre(file.title + ' (' + file.id + ')'+' - '+file.thumbnailLink);
            }
          } else {
            appendPre('No files found.');
          }
        });
      }
      */
      function returnProcess(argument) {
       //   console.log(argument);

     }

     function isProcessOk(fileId, callback) {
      var request = gapi.client.drive.files.get({
        'fileId': fileId
      });
      var thumbLink = "";
      request.execute(function(resp) {
       /*   console.log('Title: ' + resp.title);
          console.log('Description: ' + resp.description);
          console.log('MIME type: ' + resp.mimeType);
          console.log('Thumb link: ' + resp.thumbnailLink);
          */
       //   return resp;


       callback(resp);
  //       returnProcess(resp.thumbnailLink.length>0 ?true:false);

  
});

     //   return thumbLink;
    //    return false;
  }
  function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
    results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
  }
  var API ="{{url('/')}}";
  $(document).ready(function(){
    $("#getfile").click(function(){
   // handleClientLoad();
   //console.log(getParameterByName('id','https://drive.google.com/uc?id=0BwGqYM_7rbRwTkt0SUQ2VXJsaXc&export=media'));
   isProcessOk(getParameterByName('id','https://drive.google.com/open?id=0BwGqYM_7rbRwWEVWVkNtSDR6NUk'), function(resp){
    console.log(rest.title);
  });
   // downloadFile();
 });
    $("#btnCheckProcessing").click(function(){
      $("#processOk").html("");
      $("#processing").html("");
      var url = API + "/managersites/video/ajax/list/20/1?cateid=&key=&status=pending";
      $.get(url, function(data, status){
        //alert("Data: " + data + "\nStatus: " + status);
        var json = data,
        arrObj = JSON.parse(json);
        console.log(arrObj);
       //  for(i=0; i<arrObj.length;i++){
        // }
        var i=0;
        var obj = arrObj[i];
        loop(i,obj);
        function loop(i,obj){
         
          isProcessOk(getParameterByName('id',obj.url_drive), function(resp){
           
            if(resp.thumbnailLink){
              if($("#acceptChange").is(':checked')){
               
               $.get(API + "/managersites/video/ajax/setstatus/"+obj.id+"/active", function(data, status){
                alert("Data: " + data + "\nStatus: " + status);
              });
             }
             
             
             console.log(true);
             console.log(obj);
             var row = "<div>";
             row += obj.slug;
             row += "</div>";
             $("#processOk").append(row);
           }else{
            console.log(false);
            var row = "<div>";
            row += obj.slug;
            row += "</div>";
            $("#processing").append(row);
          }
        });
          if(i+1< arrObj.length){
            loop(i+1,arrObj[i+1]);
          }
        }

        
      });
    });

  });
</script>

<button class="btn btn-success" id="btnCheckProcessing">Check processing</button>
<hr>
<div class="checkbox">
  <label>
    <input id="acceptChange" type="checkbox"> Chuyển trạng thái tất cả video process ok sang active
  </label>
</div>
<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Video process ok</h3>
  </div>
  <div class="panel-body">
   <div id="processOk">

   </div>
 </div>
</div>
<div class="panel panel-warning">
  <div class="panel-heading">
    <h3 class="panel-title">Video processing</h3>
  </div>
  <div class="panel-body">
    <div id="processing">

    </div>
  </div>
</div>









<script async defer src="https://apis.google.com/js/api.js"
onload="this.onload=function(){};handleClientLoad()"
onreadystatechange="if (this.readyState === 'complete') this.onload()">
</script>
@endsection
@section('footer')

@endsection
