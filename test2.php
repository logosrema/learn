<?php


function updategames(){
    $data = [1, 1, 1, 1, 1];
    $sample = json_encode($data);
 
    $conn = new mysqli("localhost","root", "", "bettest");
    $sql = "SELECT * FROM  game_name";
    $result = mysqli_query($conn,$sql);
        // if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                 
              //  $name = $row["name"];
                 $id = $row["gn_id"];
             echo"<pre>";
                foreach ($row as $data)

                if($id == 1){
                    $sql = "UPDATE game_name SET sample ='$sample' WHERE id = $id";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        echo "updated";
                    }
                    // if(mysqli_affected_rows($result) > 0){
                    //     echo $name. " has been updated";
                    // }
                 }




                // $sql = "UPDATE game_name SET name='$name' WHERE id='$id'";
                // $result = mysqli_query($conn,$sql);
                
                
}
        // }
}

updategames();

