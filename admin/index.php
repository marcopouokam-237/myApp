<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin zone</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="title">
                <img src="../images/logo3.jpg" alt="">
                <h1>Bienvenue Admin</h1>
            </div>
            <div class="profile">
                <img src="" alt="">
            </div>
        </header>
        <main>
            <table>
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Nom Produit</th>
                        <th>Prix</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    
                        <?php
                        include_once '../conn.php';

                           if (isset($_GET['id'])) {
                            $id =  $_GET['id'];
                            $requete ="DELETE FROM `produit` WHERE `id`='$id'";
                            $delete= $bdd->query($requete)
                            ;
                           }
                          
                           // read all row from database table
                           $sql = "SELECT * FROM produit ORDER BY id ";
                           $result = $bdd->query($sql);


                           if (!$result) {
                          die("Invalid query: " . $bdd->error);
                           }

                          //read data of each row
                          while ($row = $result->fetch_assoc()) {
                           echo "<tr>
                           <td>" . $row["id"] . "</td>
                           <td>" . $row["nom"] . "</td>
                           <td>" . $row["prix"] . "</td>
                           <td>" . $row["description"] . "</td>
                           <td class='warning'>" . $row["img"] . "</td>
                           
                           <td><a href='./index.php?id=".$row['id']."' class='btn'>Supprimer</a></td>
                           <td><a href='./mod.php?id=".$row['id']."' class='btn plus'>Modifier</a></td>
                           </tr> 
                           ";
        
                           }
                       ?>
                        <style>
                        dialog::backdrop{
                            backdrop-filter: blur(2px);
                        }
                        .modal{
                            position: relative;
                            padding: 15px 30px;
                            border: none;
                            background: #f2f2f2;
                            margin-top: 350px;
                            margin-left: 650px;
                            box-shadow: 10px 15px 15px 5px rgba(0, 0, 0, 0.2);
                
                        }
                        .closeBtn{
                            background: #111;
                            border: none;
                            padding: 15px 18px;
                            color: #fff;
                            position: relative;
                            margin-top: 20px;
                            margin-left: 10%;
                            border-radius: 3px;
                        }
                        .title{
                            position: relative;
                            margin-top: 10px;
                            display: flex;
                        }
                        .input-field{
                            position: relative;
                            display: flex;
                            margin-top: 30px;
                        }
                        .input-field input{
                            padding: 10px 15px;
                            width: 100px;
                            margin: 15px;
                            border-radius: 10px;
                            border:1px solid #222;
                        }
                        .endbtn{
                            display:flex;
                        }
                    </style>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>