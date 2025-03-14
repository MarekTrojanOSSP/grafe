<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
<h2>Přihlášení</h2>

<div class="form-container">

<form action="/action_page.php" method="post">
  <div class="imgcontainer">
    <img src="img/pig.png" alt="Logor" class="logo">
    <p>Info: Potom nahratit logem školy(Proč to vůbec je v img?)</p>
  </div>

  <div class="container">
    <label for="uname"><b>Jméno</b></label>
    <input type="text" placeholder="Zadejte jméno" name="uname" required>

    <br>

    <label for="psw"><b>Heslo</b></label>
    <input type="password" placeholder="Zadejte heslo" name="psw" required>
        
    <button type="submit">Přihlásit</button>
    <label>
  </div>

</div>  

</form>

</body>
</html>