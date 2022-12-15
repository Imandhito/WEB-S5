<?php
include 'logics/connect.php';

if(isset($_POST['input'])){
    $input = $_POST['input'];
    $sql = "SELECT * FROM user WHERE name LIKE '{$input}%'";

    $result = $conn->query($sql);
    if(mysqli_num_rows($result)>0){?>
        <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                  <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                      <td>
                        <a href="users-profile.php?id='<?= $row["id"] ?>'"> <?= $row["id"] ?> </a>
                        <br>
                      </td>
                      <td>
                        <?= $row["name"] ?>
                      </td>
                      <td>
                        <?= $row["email"] ?>
                      </td>
                      <td>
                        <?= $row["phone"] ?>
                      </td>
                      <td>
                        <a href="edit-user-form.php?id='<?= $row["id"] ?>'"><button class="btn btn-outline-info alert-delete-confirm">Update</button></a>
                        <button onclick="deleteConfirm(<?= $row['id'] ?>)" class="btn btn-outline-danger alert-delete-confirm">Delete</button>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>

<?php

    }else{
        echo "<h6 class='text-danger text-center mt-3'>No Data Found</h6>";
    }
}


?>