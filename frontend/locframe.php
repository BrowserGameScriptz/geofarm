
<html>

<head>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <title>finding location</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">



  <script type="text/javascript">

  if ("geolocation" in navigator) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var lat = position.coords.latitude;
      var lng = position.coords.longitude;
      rlat = Math.round( lat * 1000 ) / 1000
      rlng = Math.round( lng * 1000) / 1000
      updatepage(rlat,rlng);
    },
    function(failure) {
      //document.writeln("geoloc failed :(");
      var fileloc = "backend/visitfarm.php";
      var lurl = ""+0+""+0;
      lurl = lurl.split('.').join('');
      lurl = lurl.split('-').join('');


      $('#maincontent').load(fileloc, {s:lurl});
    }
  );
} else {
  document.writeln("no geolocation :(");
  var fileloc = "backend/visitfarm.php";
  var lurl = ""+0+""+0;
  lurl = lurl.split('.').join('');
  lurl = lurl.split('-').join('');


  $('#maincontent').load(fileloc, {s:lurl});
}

function updatepage(rlat, rlng)
{
    rlat = Math.round( rlat * 100 ) / 100;
    rlng = Math.round( rlng * 100) / 100;
    $('#debug').html(rlat + ", " + rlng);

    var fileloc = "backend/visitfarm.php";
    var lurl = ""+rlat+""+rlng;
    lurl = lurl.split('.').join('');
    lurl = lurl.split('-').join('');


    $('#maincontent').load(fileloc, {s:lurl});

}



</script>
</head>
<body>

<div id="maincontent">

</div>



<br>
<div id="debug">

</div>



</body>
</html>