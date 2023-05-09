<?php


function gettrack(){
    $data = [1, 1, 1, 1, 1];
    $sample = json_encode($data);
 
    $conn = new mysqli("localhost","root", "", "lot");
    $sql = "SELECT * FROM  track";
    $result = mysqli_query($conn,$sql);
        // if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){


                showtrack($row['token']);
                 
              
                

            }



                
}


function trackdetial($token){
    $conn = new mysqli("localhost","root", "", "lot");

    $result = mysqli_query($conn,"SELECT * FROM bet WHERE token = '{$token}' ");

    return $result;


}



function showtrack($token){

    $result  =  trackdetial($token);
    foreach($result as $row){
       echo '
       <tr>
       <td>'.$row['bid'].'</td>
       <td>'.$row['token'].'</td>
       <td>'.$row['user_selection'].'</td>
       <td>'.$row['draw_period'].'</td>

       
       </tr>
       
       ';
    }

}

?>

      
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        border: 1px solid black;
        padding: 15px;
        text-align: left;
        vertical-align: middle;
    }
    th {
        background-color: #ccc;
        color: black;
    }
    td {
        background-color: #eee;
        color: black;
    }
</style>


           <table>
            <tr>
                <th>Bid</th>
                <th>Token</th>
                <th>Bet Number</th>
                <th>Draw Period</th>

            </tr>

           <?=  showtrack("TKD64491383bd9a5");?>

           </table>

