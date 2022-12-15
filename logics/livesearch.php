<?php

include_once 'connect.php';

if(isset($_POST['query'])){
    $input = $_POST['query'];
    $statement = $conn->prepare("SELECT * FROM user WHERE name LIKE CONCAT('%','?','%') ");
    $statement -> bind_param("ss",$input,$input);
}else{
    $statement=$conn->prepare("SELECT * FROM user");
}
$statement->execute();
$result=$statement->get_result();

if($result->num_rows>0){
    $output = "<thead>
                <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>";

                while ($row = $result->fetch_assoc()) {
                    $output .="
                    <tr>
                      <td>".$row["id"]." </a>
                        <br>
                      </td>
                      <td>
                        ".$row["name"]."
                      </td>
                      <td>
                        ".$row["email"]."
                      </td>
                      <td>
                        ".$row["phone"]."
                      </td>
                      
                    </tr>";
                }
                $output .= "</tbody>";
                echo $output;
            
}else{
    echo "<h3> NOt found<h3>";
}


?>