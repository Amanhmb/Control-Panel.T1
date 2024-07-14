<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        body {
            display: flex;
            font-family: "Lato", sans-serif;
            font-weight: 400;
  font-style: normal;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            font-family: "Lato", sans-serif;
            font-weight: 400;
  font-style: normal;
            text-align: center;
            border: 2px solid gray;
            padding: 20px;
        }
        .container button {
            font-family: "Lato", sans-serif;
            font-weight: 400;
  font-style: normal;
            display: block;
            margin: 10px auto;
            padding: 10px 20px;
            font-size: 16px;
            border: 2px solid #000;
            border-radius: 5px;
        }
        aside
        {
background-color: white;
color:red ;
        }
        .stop {
            border-color: red;
        }
    </style>
</head>
<body>
        <?php
       #الاتصال بقاعدة  البيانات 
       $host = 'localhost';
       $username="root";
       $password="";
       try {
       $pdo=new PDO("mysql:host=localhost; dbname=regiset; charset=utf8",$username,$password);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mov = $_POST['mov'];

    // Insert the 'mov' value into the database
    $stmt = $pdo->prepare("INSERT INTO user (mov) VALUES (:mov)");
    $stmt->execute(['mov' => $mov]);

    
}

       ?>
       <div id='moth'    class="container">
        <img src='https://i.pinimg.com/564x/2b/9b/7f/2b9b7f839a256d0aca6cfbeb4d131896.jpg' alt='Logo ' width="250">
    <form  user="" method='POST'>
        <aside>
            <div   id="div">
                <h3> Control Panel </h3>
        <button type="submit" name="mov" value="stop">Stop</button>
        <button type="submit" name="mov" value="right">Right</button>
        <button type="submit" name="mov" value="left">Left</button>
        <button type="submit" name="mov" value="backward">Backward</button>
        <button type="submit" name="mov" value="backward">Forward</button>
        </div>
        </aside> 
        <!== display infromation ==>
        <main>

</main>
    </form>
    </div>
</body>
</html>