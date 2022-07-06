
<?php
$servername = "localhost";
$username = "root";
$password = "";
$pr = "€";


try {
    $pdo = new PDO("mysql:host=$servername;dbname=music", $username, $password);

    $sql = 'SELECT id_number,
                    album_name,
                    artist_name,
                    total_songs,
                    year,
                    prix
               FROM products
              ORDER BY id_number';

    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DK MUSICS</title>
        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


  <style>
    ul {
  list-style: none;
  display: inline-block;
  padding: 60px 20px;
}

 a {
  text-align: right;
  text-decoration: none;
  list-style: none;
  text-transform: uppercase;
  padding: 60px 20px;
  
}




nav img {
 
  width: 140px;
}
    body{
        background-color: #D9AFD9;
        background-image: linear-gradient(0deg, #D9AFD9 0%, #97D9E1 100%);

        background-repeat: no-repeat;
    }
  </style>
     
        
    </head>
    <body>

        <div class="container">
        <navbar class="bgs bg-dark p-5 text-center m-5 ">
            <img src="./images/Logo.png" alt="">
         
            <a href="./admin.php">HOME</a>
            <a href="./products.php">Products</a>
            <a href="./admin.php">Admin</a>
            <a href="./signup.php">Create Account</a>
      
        </navbar>
        <h5 class="display-1  text-center">ALBUM COLLECTIONS</h5>
            <hr>
            <table class=" table table-striped table-hover text-center">
                <thead>
                    <tr>
                        <th>NUMBER</th>
                        <th>ALBUM NAME</th>
                        <th>ARTISTE NAME</th>
                        <th>TOTAL SONGS</th>
                        <th>YEAR</th>
                        <th>PRIX</th>
                      
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['id_number']) ?></td>
                            <td><?php echo htmlspecialchars($row['album_name']); ?></td>
                            <td><?php echo htmlspecialchars($row['artist_name']); ?></td>
                            <td><?php echo htmlspecialchars($row['total_songs']) ?></td>
                            <td><?php echo htmlspecialchars($row['year']); ?></td>
                            <td><?php echo htmlspecialchars($row['prix']).$pr; ?></td>
                      <!-- <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['album'] ).'"/>';?></td> -->

                            <td><input class="btn btn-warning" type="button" value="Ajouter au panier"></td>
                            <td><input class="btn btn-success" type="button" value=" Achetez maintenant"></td>
                        </tr> 
                    <?php endwhile; ?>
                </tbody>
            </table>
            </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<?php
    include_once('footer.php');
    ?>
    </body>

</html>







