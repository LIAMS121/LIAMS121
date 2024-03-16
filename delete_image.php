<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E fashion berry</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css
" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>

<body>
    <?php require_once "includes/database.php";
    require_once "includes/session.php";



    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM admins WHERE id =:id";
    $start = $connection->prepare($sqlSelect);
    $start->bindValue(":id", $id);
    $start->execute();
    $details = $start->rowCount();
    if ($details == 1) {
        $details = $start->fetch(PDO::FETCH_ASSOC);
        if (!$details['image']) {
            echo "<script>  swal({
            title: \"You don't have any profile picture\",
            type: \"error\",
            showConfirmButton: true
          }, function(){
                window.location.href = \"profile.php\";
          });
          </script>";
        } else {
            $sqlDelete = "UPDATE admins SET image='' WHERE id=:id";
            $start = $connection->prepare($sqlDelete);
            $start->bindValue(":id", $id);
            $start->execute();
            echo "<script>  swal({
                title: \"Profile picture deleted successfully\",
                type: \"success\",
                showConfirmButton: true
              }, function(){
                    window.location.href = \"profile.php\";
              });
              </script>";
            // header("location: profile.php");
        }
    }
    ?>


</body>