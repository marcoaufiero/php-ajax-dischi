<?php 

include_once __DIR__ . "/../db.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
    <main>
        
        <div class="card-box">
            
            <?php foreach ($database as $elem) { ?>
                
                <div class="card">

                    <img src=" <?php echo $elem['poster'] ?> " alt="">

                    <h2>
                        <?php echo $elem['title'] ?>
                    </h2>

                    <p>
                        <?php echo $elem['author'] ?>
                    </p>

                    <p>
                        <?php echo $elem['year'] ?>
                    </p>

                </div>

            <?php } ?>


        </div>
        
    </main>

    



</body>
</html>