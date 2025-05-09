<?php
include 'config/dbConn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud Operation</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light text-dark">


  <div class="container">


    <nav class="navbar" style="background-color: #e3f2fd;" data-bs-theme="light">
      <button class="btn btn-sm btn-primary">

        <a href="./config/insertData.php" class="text-light text-decoration-none">Add student</a>
      </button>
      <button class="btn btn-sm btn-primary">

        <a href="./controller/auth.php" class="text-light text-decoration-none">Log In</a>
      </button>
      <button class="btn btn-sm btn-primary">

        <a href="/config/insertData.php" class="text-light text-decoration-none">Add student</a>
      </button>
    </nav>

    <div class="container py-5">
      <h1 class="text-center fw-bold mb-4">Student Information</h1>
      <div class="table-responsive">


        <table class="table table-bordered table-hover table-striped align-middle bg-white shadow rounded">
          <thead class="table-dark text-uppercase text-white">
            <tr>
              <th>SN</th>
              <th>First name</th>
              <th>Last name</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            <?php

            $sql = "select * from MyGuests";
            $result = mysqli_query($conn, $sql);
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];

                $sn+=1;
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $email = $row['email'];

            ?>

                <tr>
                  <td><?php echo  $sn ?></td>
                  <td><?php echo $firstname ?></td>
                  <td><?php echo $lastname ?></td>
                  <td><?php echo $email ?></td>
                  <td>
                    <button class="btn btn-sm btn-primary">
                      <a href="./action/update.php?updateid=<?php echo $id ?>"
                        class="text-light text-decoration-none">Update</a>
                    </button>

                    <button class="btn btn-sm btn-danger">
                      <a href="action/delete.php?deleteid=<?php echo $id ?>"
                        class="text-light text-decoration-none">Delete</a>

                    </button>
                  </td>

                </tr>



            <?php }
            } ?>


          </tbody>
        </table>
      </div>
    </div>


  </div>

  <!-- Bootstrap 5 JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>