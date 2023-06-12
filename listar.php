<?php
include_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="crud.css">
    
</head>
<body>
<header class="site-header">
    <div class="logo">
     <p style="color:white;font-family: inika;font-size: 25px;">𝒞𝐼𝒩𝐸-𝒯𝐼𝒞𝒦𝐸𝒯</p>
    </div>
    <div class="download-links">
        <a href="filme1.jpg" download>𝙿𝙰𝙶𝙸𝙽𝙰 𝙸𝙽𝙸𝙲𝙸𝙰𝙻</a>
        <a href="filme2.jpg" download>𝙵𝙸𝙻𝙼𝙴𝚂</a>
        <a href="filme2.jpg" download>𝙲𝙸𝙽𝙴𝙼𝙰𝚂</a>
      </div>
</header>

    <center>
    <center><p style="color:white;font-family: inika;font-size: 30px;">Cadastro realizado</p></center>
    <center><p style="color:white;font-family: inika;font-size: 17px;">Parabens, agora seu ticket está garantido,basta retornar ao site e fazer sua reserva</p></center>
    <?php
    $stmt = $pdo->prepare('SELECT * FROM ingressos');
    $stmt->execute();
    $ingressos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if (count($ingressos) == 0) {
        echo '<p>Nenhum cadastro realizado.</p>';
    } else {
        echo '<table border="1">';
        echo '<thead><tr><th>Nome</th><th>cidade</th><th>filme</th><th>sala</th><th>poltrona</th><th colspan="2">Opçoes</th></tr></thead>';
        echo '<tbody>';

        foreach ($ingressos as  $ingressoss) {
            echo "<tr>";
            echo "<td>" . $ingressoss['nome'] . '</td>';
            echo "<td>" . $ingressoss['cidade'] . '</td>';
            echo "<td>" . $ingressoss['filme'] . '</td>';
            echo "<td>" . $ingressoss['sala'] . '</td>';
            echo "<td>" . $ingressoss['poltrona'] . '</td>';
            echo '<td><a style="color:white;" href="atualizar.php?id=' . $ingressoss['id'] . '">Atualizar</a></td>';
            echo '<td><a style="color:white;" href="deletar.php?id=' . $ingressoss['id'] . '">Deletar</a></td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    }
    ?>
    </center>
   
</body>
</html>