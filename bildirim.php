<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
<div>
<form class="form-horizontal" action="bildirimekle.php" method="post" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Başlık</label>  
  <div class="col-md-5">
  <input id="textinput" required="" name="baslik" placeholder="placeholder" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">İçerik</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="icerik"></textarea>
  </div>
</div>


<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Ek Sayısı</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input name="eksay" name="radios" id="radios-0" value="1" type="radio">
      1
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input name="eksay" name="radios" id="radios-1" value="2" type="radio">
      2
    </label>
	</div>
  <div class="radio">
    <label for="radios-2">
      <input name="eksay" name="radios" id="radios-2" value="3" type="radio">
      3
    </label>
	</div>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Ek1</label>
  <div class="col-md-4">
    <input id="filebutton" name="fileToUpload" class="input-file" type="file">
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Ek2</label>
  <div class="col-md-4">
    <input id="filebutton" name="fileToUpload2" class="input-file" type="file">
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Ek3</label>
  <div class="col-md-4">
    <input id="filebutton" name="fileToUpload3" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Gönder</button>
  </div>
</div>


</fieldset>
</form>

</div>
</body>
</html>
