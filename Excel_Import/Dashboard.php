<!-- Putty 접속하는법
ssh leey@kabru.sdstated.edu

접속 비밀번호 yunhyeokLEE!

mysql -u epidemiaweb_test -p epidemia_test

Mysql password : eishoo6Pheis
 -->

<!DOCTYPE html>
<style>
        @import url('http://fonts.googleapis.com/css?family=Amarante');
      html { overflow-y: scroll; }

      ::selection { background: #5f74a0; color: #fff; }
      ::-moz-selection { background: #5f74a0; color: #fff; }
      ::-webkit-selection { background: #5f74a0; color: #fff; }

      /** page structure **/
      #wrapper {
        display: block;
        width: 850px;
        background: #fff;
        margin: 0 auto;
        padding: 10px 17px;
        -webkit-box-shadow: 2px 2px 3px -1px rgba(0,0,0,0.35);
      }

      #keywords {
        margin: 0 auto;
        font-size: 1.2em;
        margin-bottom: 15px;
      }


      #keywords thead {
        cursor: pointer;
        background: #c9dff0;
      }
      #keywords thead tr th {
        font-weight: bold;
        padding: 12px 30px;
        padding-left: 42px;
      }
      #keywords thead tr th span {
        padding-right: 20px;
        background-repeat: no-repeat;
        background-position: 100% 100%;
      }

      #keywords thead tr th.headerSortUp, #keywords thead tr th.headerSortDown {
        background: #acc8dd;
      }

      #keywords thead tr th.headerSortUp span {
        background-image: url('http://i.imgur.com/SP99ZPJ.png');
      }
      #keywords thead tr th.headerSortDown span {
        background-image: url('http://i.imgur.com/RkA9MBo.png');
      }


      #keywords tbody tr {
        color: #555;
      }
      #keywords tbody tr td {
        text-align: center;
        padding: 15px 10px;
      }
      #keywords tbody tr td.lalign {
        text-align: left;
      }
      .myButton {
    	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
    	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
    	box-shadow:inset 0px 1px 0px 0px #ffffff;
    	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f9f9f9), color-stop(1, #e9e9e9));
    	background:-moz-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
    	background:-webkit-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
    	background:-o-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
    	background:-ms-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
    	background:linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%);
    	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f9f9f9', endColorstr='#e9e9e9',GradientType=0);
    	background-color:#f9f9f9;
    	-moz-border-radius:6px;
    	-webkit-border-radius:6px;
    	border-radius:6px;
    	border:1px solid #ffffff;
    	display:inline-block;
    	cursor:pointer;
    	color:#666666;
    	font-family:Arial;
    	font-size:15px;
    	font-weight:bold;
    	padding:6px 24px;
    	text-decoration:none;
    	text-shadow:0px 1px 0px #ffffff;
      }
    .myButton:hover {
    	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #e9e9e9), color-stop(1, #f9f9f9));
    	background:-moz-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
    	background:-webkit-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
    	background:-o-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
    	background:-ms-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
    	background:linear-gradient(to bottom, #e9e9e9 5%, #f9f9f9 100%);
    	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9',GradientType=0);
    	background-color:#e9e9e9;
    }
    .myButton:active {
    	position:relative;
    	top:1px;
    }
</style>
<html>
  <body>
<!-- Dashboard Table -->
 <div id="wrapper">
  <h1>Dashboard</h1>
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>Original File</span></th>
        <th><span>Rows Uploaded</span></th>
        <th><span>Rows in Use</span></th>
        <th><span>Upload Time</span></th>
        <th><span>User</span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="lalign">Excel File1</td>
        <td>6,000</td>
        <td>110</td>
        <td>4-21-2016</td>
        <td>22.2</td>
      </tr>
      <tr>
        <td class="lalign">Excel File2</td>
        <td>2,200</td>
        <td>500</td>
        <td>01-21-2017</td>
        <td>EPIDEMIA</td>
      </tr>
      <tr>
        <td class="lalign">Excel File3</td>
        <td>13,500</td>
        <td>900</td>
        <td>01-21-2011</td>
        <td>EPIDEMIA</td>
      </tr>
      <tr>
        <td class="lalign">Excel File4</td>
        <td>8,700</td>
        <td>350</td>
        <td>01-21-2016</td>
        <td>EPIDEMIA</td>
      </tr>
      <tr>
        <td class="lalign">Excel File5</td>
        <td>9,900</td>
        <td>460</td>
        <td>01-21-2017</td>
        <td>EPIDEMIA</td>
      </tr>
      <tr>
        <td class="lalign">Excel File6</td>
        <td>10,500</td>
        <td>748</td>
        <td>01-22-2017</td>
        <td>EPIDEMIA</td>
      </tr>
    </tbody>
  </table>
 </div>


<!-- File Upload  -->
  <form enctype="multipart/form-data" action="" method="post" role="form" name="import">
          <li><label for="exampleInputFile">File Upload</label></li>
          <input type="file" class="myButton" name="file" id="file">
          <p>Only Excel</p>
          <!-- <a href="#" class="myButton">light grey</a> -->
      <input type="submit" class="myButton" name="submit" value="submit"/>
  </form>
<!--PDO로 연결하기 -->
  <?php

    $servername = "localhost";
    $username = "epidemiaweb_test";
    $password = "eishoo6Pheis";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=epidemia_test", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
      }
      catch(PDOException $e) {
          echo $e->getMessage();
      }

    if(isset($_POST['submit'])) {
      try {
        $file_excel = $_FILES["file"]["name"];
        $file_size = $_FILES["file"]["size"];
        $file_dir = $_FILES["file"]['tmp_name'];

        if(empty($file_excel)) {
          $errMSG =  "Please Select Excel File";
        }
        else {
        $c = 0;
        if(!isset($errMSG)) {
           $handle = fopen($file_dir,"r");
              //File Upload Start
            try {
              $upload_dir = 'user_images/';
              $ExcelExt = strtolower(pathinfo($file_excel,PATHINFO_EXTENSION)); // get Excel Extension
              $valid_extensions = array('xls','csv','xlsx'); //valid extension
              $userExcel = rand(1000,10000000).".".$ExcelExt;
              if(in_array($ExcelExt,$valid_extensions)) {
                  if($file_size < 50000000) {
                    move_uploaded_file($file_dir,$upload_dir.$userExcel);
                  }
                  else {
                    $errMSG = "Sorry, your file is too large it should be less then 50MB";
                  }
              }
              else {
                    $errMSG = "Uploaded file is empty";
              }
              if(!isset($errMSG))
              {
                $stmt = $conn->prepare("INSERT INTO FileLee (FileName) VALUES('$file_excel')");
                $stmt->bindParam('$file_excel',$file_excel);
                if($stmt->execute())
                   {
                    $successMSG = "new record succesfully inserted ...";
                   }
                else
                  {
                    $errMSG = "error while inserting....";
                  }
              }//  if(!isset($errMSG))
            }
           catch(PDOException $e) {
             echo "File Upload failed: ";
             }
             //File Upload

             //Excel Data insert into MySQL
             try {
                if($handle !==FALSE) {
                  while(($filesop = fgetcsv($handle,10000,','))!==FALSE) {
                      $id = $filesop[0];
                      $name = $filesop[1];
                      $population = $filesop[2];
                      $pop_density = $filesop[3];
                      $country = $filesop[4];
                      $latitude = $filesop[5];
                      $longitude = $filesop[6];
                      echo $id;
                      $stmt = $conn->prepare("INSERT INTO Data (ID,name,population,pop_density,country,latitude,longitude) VALUES ('$id','$name','$population','$pop_density','$country','$latitude','$longitude')");
                      $c = $c + 1;
                      $stmt->execute($filesop);
                  }
                }
                else {
                  echo "Insert part is problem";
                }
                fclose($handle);
                $stmt->close();
                $conn->close();
              } //try
             catch(PDOException $e) {
               echo "Error occured";
                  die($e->getMessage());
            }
             //Excel Data insert End..!

           }
        }//else
      }//try
      catch(PDOException $e) {
          echo "File Upload failed: ";
      }
      $conn = null;
    }//$_post['submit']
?>
<!-- Import File to Mysql -->
</body>
</html>

<!-- // This is to upload File into DB
CREATE TABLE IF NOT EXISTS `FileLee` (
`ID` int(11) NOT NULL AUTO_INCREMENT,
`FileName` VARCHAR(30) NOT NULL,
 PRIMARY KEY (`ID`) ) ;


// This is to upload each column data into mySQL
CREATE TABLE IF NOT EXISTS `Data` (
`ID` int(11) NOT NULL,
`name` VARCHAR(30) NOT NULL,
`population` int(20) NOT NULL,
`pop_density` int(20) NOT NULL,
`country` VARCHAR(20) NOT NULL,
`latitude` FLOAT(20) NOT NULL,
`longitude` FLOAT(20) NOT NULL,
PRIMARY KEY (`ID`) ); -->
