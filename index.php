<!DOCTYPE html>
<html lang="en">
<head>
  <title>Çağın Ağırdemir Kişisel Site.</title>
  <meta charset="utf-8">
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

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav"><center>
      <h4>Çağın Ağırdemir Kişisel Site.</h4>
	   <img src="2.jpg" class="img-rounded" alt="Cinque Terre" width="128" height="128">
	   <br>
	   <br>
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Kişisel</a></li>
  <li><a data-toggle="tab" href="#menu1">Proje</a></li>
  <li><a data-toggle="tab" href="#menu2">İletişim</a></li>
</ul>
<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>Kişisel Bilgiler</h3>
	<table style="width:100%">
  <tr>
    <th width="30%" style="text-align:right" ><span class="glyphicon glyphicon-pencil"></th>
    <th><h5> &nbsp; Çağın Ağırdemir</h5></th> 
  </tr>
  <tr>
    <th width="30%" style="text-align:right" ><span class="glyphicon glyphicon-map-marker"></span></th>
    <th><h5> &nbsp; Ankara, Turkey</h5></th> 
  </tr>
  <tr>
    <th width="30%" style="text-align:right" ><span class="glyphicon glyphicon-envelope"></span></th>
    <th><h5> &nbsp; destek@caginagirdemir.online</h5></th> 
  </tr>
  <tr>
    <th width="30%" style="text-align:right" ><span class="glyphicon glyphicon-globe"></span></th>
    <th><h5> &nbsp; facebook/cagin.agirdemir</h5></th> 
	<th><h5> &nbsp; instagram/caginagirdemir</h5></th> 
  </tr>
  <tr>
    <th width="30%" style="text-align:right" ><span class="glyphicon glyphicon-headphones"></span></th>
    <th><h5> &nbsp; Calvin Harris</h5></th> 
  </tr>
  </table>

  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Tübitak 2209a Projesi</h3>
 <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title" style="text-align:left">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Dökümanlar</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse" style="text-align:left">
      <div class="panel-body">
	  <?php
 
$dizin = opendir('documents');
while($dosya = readdir($dizin)) {
	if(! is_dir($dosya)){ 
	$dosya_d=$dosya;
	$id=rand(0,10000);
   echo "<p><button type=\"button\" class=\"btn-link\" data-toggle=\"modal\" data-target=\"#myModal".$id."\">".$dosya_d."</button></p>";
   	 echo "<div id=\"myModal".$id."\" class=\"modal fade\" role=\"dialog\">";
	 echo "<div class=\"modal-dialog\">";
	 echo "<div class=\"modal-content\">";
	 echo "<div class=\"modal-header\">";
     echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
     echo "<h4 class=\"modal-title\">Bu döküman kişiseldir.</h4>";
     echo "</div>";
     echo "<div class=\"modal-body\">";
	 echo "<p><form class=\"form-horizontal\" action=\"dokumankontrol.php\" method=\"post\">";
	 echo "<div class=\"form-group\">";
     echo "<label class=\"col-md-4 control-label\" for=\"passwordinput\">Şifre</label>";
     echo "<div class=\"col-md-6\">";
     echo "<input id=\"passwordinput\" name=\"sifre\" placeholder=\"sifre\" class=\"form-control input-md\" required=\"\" type=\"password\">";
	 echo "<input type=\"hidden\" name=\"dosyaadi\" value=\"".$dosya_d."\">";
     echo "</div>";
     echo "</div>";
	 echo "<div class=\"form-group\">";
     echo "<label class=\"col-md-4 control-label\" for=\"singlebutton\"></label>";
     echo "<div class=\"col-md-4\">";
     echo "<button id=\"singlebutton\" name=\"singlebutton\" class=\"btn btn-primary\">Gönder</button>";
     echo "</div>";
     echo "</div>";
	 echo "</form></p>";
     echo "</div>";
     echo "<div class=\"modal-footer\">";
     echo " <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>";
     echo " </div>";
     echo "</div>";
	 echo "</div>";
	 echo "</div>";
	}
}
 
?>
	  </div>
    </div>
  </div>
</div> 
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>İletişim</h3>

<form class="form-horizontal" action="iletisim.php" method="post" >
<fieldset>

<!-- Form Name -->
<legend>İletişim Formu</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">İsiminiz</label>  
  <div class="col-md-8">
  <input id="textinput" name="isim" placeholder="isminiz" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Mail</label>  
  <div class="col-md-8">
  <input id="textinput" name="mail" placeholder="mail@mail.com" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Düşünceniz</label>
  <div class="col-md-4">                     
    <textarea style="width:24ch" rows="5" class="form-control" id="textarea" name="icerik"></textarea>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group" >
  <label class="col-md-4 control-label" for="radios">Site Nasıl</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0" >
      <input name="oy" id="radios-0" value="1" type="radio">
      İyi,Beğendim
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input name="oy" name="radios" id="radios-1" value="2" type="radio">
      Orta,İdareEder
    </label>
	</div>
  <div class="radio">
    <label for="radios-2">
      <input name="oy" name="radios" id="radios-2" value="3" type="radio">
      Kötü,Geliştirilmeli
    </label>
	</div>
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
</div>

</center>
    </div>

    <div class="col-sm-9">
      <h4><small>Bildirimler</small></h4>
	  <?php
$servername = "localhost";
$username = "u392064796_user";
$password = "cagin1990";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM u392064796_db.Bildirimler ORDER BY Id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	   echo "<hr>";
      echo "<h2>".$row["baslik"]."</h2>";
	  echo "<h5>".$row["icerik"]."</h5>";
      echo "<h5><span class=\"glyphicon glyphicon-time\"></span>".$row["tarih"]."</h5>";
	  
	 if($row["eksay"]>0)
	 {
	 echo "<h5><span class=\"glyphicon glyphicon-paperclip\"></span>";
     echo "<button type=\"button\" class=\"btn-link\" data-toggle=\"modal\" data-target=\"#".$row["Id"]."1\">Ek1</button>"; 
	 echo "<div id=\"".$row["Id"]."1\" class=\"modal fade\" role=\"dialog\">";
	 echo "<div class=\"modal-dialog\">";
	 echo "<div class=\"modal-content\">";
	 echo "<div class=\"modal-header\">";
     echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
     echo "<h4 class=\"modal-title\">Ek1</h4>";
     echo "</div>";
     echo "<div class=\"modal-body\">";
	 echo "<p><img src=\"uploads\\".$row["Ek1"]."\"></p>";
     echo "</div>";
     echo "<div class=\"modal-footer\">";
     echo " <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>";
     echo " </div>";
     echo "</div>";
	 echo "</div>";
	 echo "</div>";
		if($row["eksay"]>1)
		{
	  echo "<h5><span class=\"glyphicon glyphicon-paperclip\"></span>";
	  echo "<button type=\"button\" class=\"btn-link\" data-toggle=\"modal\" data-target=\"#".$row["Id"]."2\">Ek2</button>";
	  echo "<div id=\"".$row["Id"]."2\" class=\"modal fade\" role=\"dialog\">";
	  echo "<div class=\"modal-dialog\">";
	  echo "<div class=\"modal-content\">";
	  echo "<div class=\"modal-header\">";
      echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
      echo "<h4 class=\"modal-title\">Ek2</h4>";
      echo "</div>";
      echo "<div class=\"modal-body\">";
	  echo "<p><img src=\"uploads\\".$row["Ek2"]."\"></p>";
      echo "</div>";
      echo "<div class=\"modal-footer\">";
      echo " <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>";
      echo " </div>";
      echo "</div>";
	  echo "</div>";
      echo "</div>";
		 if($row["eksay"]>2)
		  {
		echo "<h5><span class=\"glyphicon glyphicon-paperclip\"></span>";
		echo "<button type=\"button\" class=\"btn-link\" data-toggle=\"modal\" data-target=\"#".$row["Id"]."3\">Ek3</button>";
		echo "<div id=\"".$row["Id"]."3\" class=\"modal fade\" role=\"dialog\">";
		echo "<div class=\"modal-dialog\">";
		echo "<div class=\"modal-content\">";
		echo "<div class=\"modal-header\">";
		echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
		echo "<h4 class=\"modal-title\">Ek3</h4>";
		echo "</div>";
		echo "<div class=\"modal-body\">";
		echo "<p><img src=\"uploads\\".$row["Ek3"]."\"></p>";
		echo "</div>";
		echo "<div class=\"modal-footer\">";
		echo " <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>";
		echo " </div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		  }
			
		}
	
	 }
      
	  echo "</h5>";
      echo "<br><br>";
    }
} else {
    echo "0 results";

}


	  ?>


<? $conn->close(); ?>
          </div>
        </div>
      </div>

<footer class="container-fluid">
  <p></p>
</footer>

</body>
</html>
