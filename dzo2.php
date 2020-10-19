<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="WSIT domaci zadatak">
    <meta name="keywords" content="WSIT domaci zadatak">
    <meta name="author" content="Zoran Sudar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osoba</title>
    <link href="css/main.css" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> -->
</head>
<body>
    <table>
        <br>
        <tr>
          <th class="ime">Ime</th>
          <th class="prezime">Prezime</th>
          <th class="jmbg">JMBG</th>
        </tr>
        <tr>
          <td>Marko</td>
          <td>Marković</td>
          <td>4132567891234</td>          
         </tr>
        <tr >
          <td id="drugi_red">Dejan</td>
          <td id="drugi_red">Dejanović</td>
          <td id="drugi_red">2134567891234</td>
          </tr>
        <tr>
          <td>Petar</td>
          <td>Petrović</td>
          <td>6134527891234</td>
        </tr>
        <?php
        $ime=$_POST["ime"];
        $prezime=$_POST["prezime"];
        $jmbg=$_POST["jmbg"];

         echo "<tr>"; 
         echo "<td>$ime</td>";
         echo "<td>$prezime</td>"; 
         echo "<td>$jmbg</td>"; 
         echo "</tr>"; ?>
      </table>
      <br>
      <br>
      <form class="forma1" action="dzo2.php" method="POST">
        <label for="ime">Ime</label>
        <input type="text" id="ime" name="ime" value=""><br>
        <label for="prezime">Prezime</label>
        <input type="text" id="prezime" name="prezime" value=""><br>
        <label for="jmbg">JMBG</label>
        <input type="text" id="jmbg" name="jmbg" value=""><br>
        <input class="btn" type="submit" value="Potvrdi">
      </form> 
      
            
</body>
</html>