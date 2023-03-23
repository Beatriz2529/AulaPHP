<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Detalhes do Autor</title>

</head>

<body>
    <?php
    include 'app/menu.php';
    ?>
    <div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">

    <?php
    $id = $_GET["idautor"];
    echo "O ID da pessoa é: ".$id;
    require 'app/conexao.php';
    $sql = "SELECT * FROM actor WHERE actor_id = ".$id;

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo '<li class="list-group-item">'.$row["first_name"].'</li>
          <li class="list-group-item">'.$row["last_name"].'</li>
          <li class="list-group-item">'.$row["last_update"].'</li>';  
    }
    } else {
        echo "0 results";
    }
    $conn->close();
    include 'app/rodape.php';
    ?>
    </ul>
</div>
</body>

</html>