<html>  
      <head>  
           <title>Webslesson Tutorial</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <style>
   
   .box
   {
    width:750px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:100px;
   }
  </style>
      </head>  
      <body>  
        <div class="container box">
          <h3 align="center">Database</h3><br />
          <?php
          $connect = mysqli_connect("localhost", "root", "", "test"); //Connect PHP to MySQL Database
          $query = '';
          $table_data = '';
          $filename = "data(13).json";
          $data = file_get_contents($filename); 
          $array = json_decode($data, true); 
          foreach($array as $row) 
          {
           $query .= "INSERT INTO tbl_employee(userId,id,title,body) VALUES ('".$row["userId"]."', '".$row["id"]."', '".$row["title"]."', '".$row["body"]."'); ";  
           $table_data .= '
            <tr>
       <td>'.$row["userId"].'</td>
       <td>'.$row["id"].'</td>
       <td>'.$row["title"].'</td>
       <td>'.$row["body"].'</td>
      </tr>
           '; //Data for display on Web page
          }
          if(mysqli_multi_query($connect, $query)) 
    {
     echo '<h3>Imported JSON Data</h3><br />';
     echo '
      <table class="table table-bordered">
        <tr>
         <th width="45%">userId</th>
         <th width="10%">id</th>
         <th width="45%">title</th>
<th width="10%">body</th>
        </tr>
     ';
     echo $table_data;  
     echo '</table>';
          }




          ?>
     <br />
         </div>  
      </body>  
 </html>  
 