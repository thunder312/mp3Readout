<html>
<head>
  <title>Readout mp3 data from json</title>
  <link rel="stylesheet" href="default.scss">
</head>
<body>
<script>
      function play(musicId) {
        var audio = document.getElementById(musicId);
        audio.play();
      }
      function pause(musicId) {
        var audio = document.getElementById(musicId);
        audio.pause();
      }
</script>
<?php
    //$myData = file_get_contents("https://github.com/ShivamJoker/sample-songs/blob/master/data.json");
    $myData = file_get_contents("./data/sampleMusic.json");
    $myObject = json_decode($myData);
    $myObjectMap = $myObject;
?>

<div class="container">
	
	<div class="table">
		<div class="table-header">
            <div class="header__item">#</div>
            <div class="header__item">Title</div>
            <div class="header__item">Artist</div>
            <div class="header__item">Artwork</div>
            <div class="header__item__long"></div>
		</div>
		<div class="table-content">	
        <?php foreach($myObjectMap as $key => $item): ?>
        <div class="table-row">
          <div class="table-data"><?PHP echo $item->id; ?></div>
          <div class="table-data"><?PHP echo $item->title; ?></div>
          <div class="table-data"><?PHP echo $item->artist; ?></div>
          <div class="table-data"><a href="<?PHP echo $item->artwork; ?>" target="#"><img class="imgPreview" src="<?PHP echo $item->artwork; ?>"/></a></div>
          <div class="table-data-long">
          <audio controls preload="metadata" class="player">
	        <source src="<?PHP echo $item->url; ?>" type="audio/mpeg">
	            Your browser does not support the audio element.
          </audio><br />
          </div>
        </div>
      <?php endforeach; ?>
		</div>	
	</div>
</div>

</body>
</html>