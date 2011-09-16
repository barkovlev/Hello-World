<input id="button" onclick="OpenRequest(href)" type="button" value="Click me" />
<div id="ajaxContent">υσι</div>
<script type="text/javascript">
  var request;
  var abortRequest = null;
  var RequestStateText = new Array("Uninitialized.","Loading...","Loaded.","Interactive...","Complete.");
  var href = 'http://www.omega.24a4.ru/result.php';
  
  function OpenRequest(url) {
if (window.XMLHttpRequest) {
request = new XMLHttpRequest();
request.open("POST", url, true);
request.onreadystatechange = processRequestChange;
request.send(''); //request.send(null);
} else if (window.ActiveXObject) {
request = new ActiveXObject("Microsoft.XMLHTTP");
if (request) {
request.onreadystatechange = processRequestChange;
request.open("POST", url, true);
request.send();
}
}
}
 function processRequestChange() {
    if (!abortRequest)
      abortRequest = window.setTimeout("request.abort();", 10000);
    if (request.readyState == 4) {
      clearTimeout(abortRequest);
      abortRequest = null;
    document.getElementById("ajaxContent").innerHTML = request.responseText;
    }
  }
</script>