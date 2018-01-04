<html>
<head>
<title>SavePaste</title>
<link rel="stylesheet" type="text/css" href="/includes/dark.css" />
<link rel="stylesheet" type="text/css" href="/includes/app.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="/includes/hlight.js"></script>
<script type="text/javascript">
			var app = null;
			// Handle pops
			var handlePop = function(evt) {
				var path = evt.target.location.pathname;
				if (path === '/') { app.newDocument(true); }
				else { app.loadDocument(path.substring(1, path.length)); }
			};
			// Set up the pop state to handle loads, skipping the first load
			// to make chrome behave like others:
			// http://code.google.com/p/chromium/issues/detail?id=63040
			setTimeout(function() {
				window.onpopstate = function(evt) {
					try { handlePop(evt); } catch(err) { /* not loaded yet */ }
				};
			}, 1000);
			// Construct app and load initial path
			$(function() {
				app = new haste('savepaste', { twitter: true });
				handlePop({ target: window });
			});
		</script>

 <script>
 if( ! ("autofocus" in document.createElement( "input" ) ) )
 {
 document.getElementById( "input" ).focus();
 }
 </script>

<script>
function validateForm() {
var x = document.forms["myForm"]["input"].value;
if (x == "") {
    document.getElementById( "input" ).focus();
    return false;
}
}
</script>

<style>
.save-b {
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  padding: 7px 12px;
  border: 1px solid #018dc4;
  -webkit-border-radius: 3px;
  border-radius: 0px;
  font: normal 24px/normal Tahoma, Geneva, sans-serif;
  color: rgba(255,255,255,0.9);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: #0199d9;
  -webkit-box-shadow: 4px 4px 3px 0 rgba(0,0,0,0.2) ;
  box-shadow: 4px 4px 3px 0 rgba(0,0,0,0.2) ;
  text-shadow: 2px 1px 0 rgba(15,73,168,0.66) ;
  -webkit-transition: all 300ms cubic-bezier(0.23, 1, 0.32, 1);
  -moz-transition: all 300ms cubic-bezier(0.23, 1, 0.32, 1);
  -o-transition: all 300ms cubic-bezier(0.23, 1, 0.32, 1);
  transition: all 300ms cubic-bezier(0.23, 1, 0.32, 1);
}

.save-b:hover {
  background: #0f759e;
  -webkit-transition: all 300ms cubic-bezier(0.86, 0, 0.07, 1);
  -moz-transition: all 300ms cubic-bezier(0.86, 0, 0.07, 1);
  -o-transition: all 300ms cubic-bezier(0.86, 0, 0.07, 1);
  transition: all 300ms cubic-bezier(0.86, 0, 0.07, 1);
}

.save-b:active {
  background: #0199d9;
  -webkit-transition: all 300ms cubic-bezier(0.23, 1, 0.32, 1);
  -moz-transition: all 300ms cubic-bezier(0.23, 1, 0.32, 1);
  -o-transition: all 300ms cubic-bezier(0.23, 1, 0.32, 1);
  transition: all 300ms cubic-bezier(0.23, 1, 0.32, 1);
}
#save1 {
    position: fixed;
    top: 0px;
    right: 0px;
    z-index: +1000;
}
#linenos {
    color: #7d7d7d;
    z-index: -1000;
    position: absolute;
    top: 20px;
    left: 0px;
    width: 30px;
    font-size: 13px;
    font-family: monospace;
    text-align: right;
}
input:required {
    top: -180px
    border: 7px solid #FFF;
}
</style>

<script type="text/javascript">
$(window).bind("pageshow", function() {
    $("#txtar1")[0].reset();
});
</script>
</head>
<body>
<div id="linenos">></div>
<form name="myForm" method="post" action="upload.php"  onsubmit="return validateForm()" autocomplete="off">
<div id="txtar1"><textarea id="input" rows="34" cols="165" type="text" name="input" pattern=".{10,}" autofocus></textarea></div>
<br>
<br>
<div id="save1"><input type="submit" class="save-b" value="Save" /></div>
</form>
</body>
</html>
