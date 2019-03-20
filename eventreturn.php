<?php
     $server="localhost";
     $username="root";
     $pwd="8306682132";
     $database="collagepro";
    
        // $heading=$_POST['heading'];
        // $dateone=$_POST['dateone'];
        // $datetwo=$_POST['datetwo'];
        // $description=$_POST['description'];
        // $image=$_POST['image'];
        // $imagename= basename($_FILES["image"]["name"]);
    
        $conn=new mysqli($server,$username,$pwd,$database);
       // echo $imagename;
    if($conn->connect_error){
        die("connection failed" . $conn->connect_error);
        }
      
           $sql="select heading,dateone,datetwo from event" ;
           $res=$conn->query($sql);
           $rows=array();
           while($r = mysqli_fetch_assoc($res)) {
               $rows[] = $r;
              
           }
            echo json_encode($rows);
           $conn->close(); 
                
          // header("location:event.php");
        
            // echo "<a class='btn btn-primary' href='purchesadd.php'>ADD MORE</a>";
            // echo "<a class='btn btn-secondary ml-4' href='purches.php'>NO THANKS</a>";
    
            
    
    
?>