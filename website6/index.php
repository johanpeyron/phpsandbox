<!DOCTYPE html>
<html>
<head>
  <title>Search User</title>
  <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.min.css" />
  <script>
      function ShowSuggestion(str) {
          if (str.length == 0) {
              document.getElementById("output").innerHTML = '';
          } else {
              // AJAX request
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function () {
                  if (this.readyState == 4 && this.status == 200) {
                      document.getElementById('output').innerHTML = this.responseText;
                  }
              }
              xhttp.open("GET", "suggest.php?q=" + str, true);
              xhttp.send();
          }
      }
  </script>
</head>
<body>
    <div class="container">
        <h1> Search Users</h1>
        <form>
            Search User: <input type="text" class="form-control" onkeyup="ShowSuggestion(this.value)">
        </form>
        <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
    </div>
</body>
</html>
