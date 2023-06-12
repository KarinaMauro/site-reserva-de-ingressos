<!DOCTYPE html>
<html>
<head>
  <title>Cabeçalho do Site</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="index.php">
  <link rel="stylesheet" type="text/css" href="filmes.css">
  <link rel="stylesheet" type="text/css" href="crud.css">
  <link rel="stylesheet" type="text/css" href="apeq.php">

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
      
    <div class="search-bar">
      <form>
        
        <button ><img src="search.png" alt="Ícone de Pesquisa"></button>
      </form>
    </div>
    
  </header>
<?php 
require_once 'db.php';
?>
    <br><br><br><br><br> <br>
<div class="container">
   <div class="container-formulario">
    <center><p style= "font-family:monospace;font-size:30px">Realizar reserva</p></center>
    <?php
    if (isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $cidade = $_POST['cidade'];
        $filme = $_POST['filme'];
        $sala = $_POST['sala'];
        $poltrona = $_POST['poltrona'];

        $stmt = $pdo->prepare('SELECT COUNT(*) FROM ingressos WHERE poltrona = ? AND sala = ?');
        $stmt->execute([$poltrona, $sala]);
        $count = $stmt->fetchColumn();

        if ($count > 0 ) {
            $error = 'Está poltrona já esta ocupada nesta sala.';
        } else {
            $stmt = $pdo->prepare('INSERT INTO ingressos(nome, cidade, filme, sala, poltrona)
            VALUES(:nome, :cidade, :filme, :sala, :poltrona)');
            $stmt ->execute(['nome' => $nome, 'cidade' => $cidade, 'filme' => $filme, 'sala' => $sala, 'poltrona' => $poltrona]);

            if ($stmt->rowCount()) {
            echo '<span>Cadastro realizado com sucesso!</span>';
            } else {
            echo '<span>Erro ao Cadastrar. Tente Novamente mais tarde.</span>';
            }
        }
        if (isset($error)) {
            echo '<span>' . $error . '</span>';
        }
    }
    ?>
    <form method="post">
    
        <label for = "nome">Nome:</label>
        <input type = "text" name="nome" require><br>

        <label for = "cidade">Cidade:</label>
        <input type = "cidade" name="cidade" require><br>
        
        <label for="estado">Filme: </label>
        <select id="filme" name="filme">
            <option value="Velozes e furiosos">Velozes e furiosos</option>
            <option value="Apequena">Apequena...</option>
            <option value="Flash">Flash</option>
            <option value="homem aranha-atraz do aranhaverso">home aranha-atravez do aranhaverso</option><br></select>

            <label for="estado">Sala: </label>
        <select id="sala" name="sala">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option><br></select>

            <label for="estado">Poltrona: </label>
        <select id="poltrona" name="poltrona">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option></select>
      
        <center><div>
            <button type = "submit" name="submit" value="Agendar">Agendar</bottun>
            <button><a href="listar.php">Listar</a></botton></center>
    </div>
    </form>
    </div>
  

    <div class="texto">
  <div class="texto-esquerda">

    <p style="font-size:19px;color:white";>𝘚𝘦𝘫𝘢 𝘉𝘦𝘮 𝘷𝘪𝘯𝘥𝘰 𝘢𝘰 𝘯𝘰𝘴𝘴𝘰 𝘴𝘪𝘵𝘦 ,𝘱𝘰𝘳 𝘢𝘲𝘶𝘪 𝘷𝘤 𝘱𝘰𝘥𝘦 𝘷𝘪𝘴𝘶𝘢𝘭𝘪𝘻𝘢𝘳 𝘧𝘪𝘭𝘮𝘦𝘴 𝘦 𝘧𝘪𝘤𝘢𝘳 𝘱𝘰𝘳 𝘥𝘦𝘯𝘵𝘳𝘰 𝘥𝘢𝘴 𝘯𝘰𝘷𝘪𝘥𝘢𝘥𝘦𝘴 𝘯𝘰𝘴 𝘤𝘪𝘯𝘦𝘮𝘢𝘴,</p>
    <p style="font-size:19px;color:white";>𝘨𝘢𝘳𝘢𝘯𝘵𝘪𝘯𝘥𝘰 𝘴𝘦𝘶 𝘪𝘯𝘨𝘳𝘦𝘴𝘴𝘰, 𝘦𝘴𝘤𝘰𝘭𝘩𝘦𝘯𝘥𝘰 𝘢 𝘴𝘢𝘭𝘢 𝘲𝘶𝘦 𝘥𝘦𝘴𝘦𝘫𝘢 𝘢𝘴𝘴𝘪𝘴𝘵𝘪𝘳 𝘦 𝘧𝘪𝘤𝘢𝘯𝘥𝘰 𝘱𝘰𝘳 𝘥𝘦𝘯𝘵𝘳𝘰 𝘥𝘰𝘴 𝘩𝘰𝘳𝘢𝘳𝘪𝘰𝘴.</p>
    <p style="font-size:19px;color:white";>𝘛𝘶𝘥𝘰 𝘯𝘰 𝘮𝘦𝘭𝘩𝘰𝘳 𝘱𝘳𝘦ç𝘰 ,𝘣𝘢𝘴𝘵𝘢 𝘧𝘢𝘻𝘦𝘳 𝘴𝘦𝘶 𝘊𝘈𝘋𝘈𝘚𝘛𝘙𝘖 𝘢𝘲𝘶𝘪, 𝘫á 𝘨𝘢𝘯𝘩𝘢𝘯𝘥𝘰 𝘴𝘦𝘶 𝘵𝘪𝘤𝘬𝘦𝘵 𝘥𝘦 𝘱𝘳𝘰𝘮𝘰çã𝘰.</p>
  
  </div>
</div>
<div class="em-cartaz">
    <p style="color:white;font-size: 17px;">𝙴𝙼 𝙲𝙰𝚁𝚃𝙰𝚉</p>
  </div>
    <div class="filme-container">
  <div class="filme-lista">
    <!-- Filmes -->
    <div class="filme">
    <div class="film-poster">
    <a href="v10.php">
      <img src="imagens/v10.webp" alt="Filme 1" /></a>
  </div>
    </div>
    </a>
    <div class="filme">
    <div class="film-poster">
    <a href="apeq.php">
      <img src="imagens/se.webp" alt="Filme 2" />
      </div>
  </a>
    </div>
    <div class="filme">
    <div class="film-poster">
    <a href="aran.php">
      <img src="imagens/aran.webp"alt="Filme 3" />
      </div>
  </a>
    </div>
    <div class="filme">
    <div class="film-poster">
    <a href="flx.php">
      <img src="imagens/the.webp" alt="Filme 4" />
      </div>
  </a>
    </div>
   
   
    
    <!-- Adicione mais filmes aqui -->
  
</div>
<br><br>
<p style="background:darkred;font-size:5px";>-</p>
<center><p style="font-size:18px";>🇪​🇳​🇹​🇷​🇪​ 🇪​🇲​ 🇨​🇴​🇳​🇹​🇦​🇹​🇴​ 🇨​🇴​🇳​🇴​🇸​🇨​🇴​</p></center>

</div>
<center>
<div class="finaliz-container">
<div class="finaliz-lista">
    <!-- Filmes -->
    <div class="finaliz">
    <div class="filiz-poster">
    <p style="color:white;font-size:18px;background:black">@sᴜᴘᴏʀᴛ.ᴄɪɴᴇᴛɪᴄᴋᴇᴛ</a>
  </div>
    </div>
    </a>
    <div class="finaliz">
    <div class="filiz-poster">
    <p style="color:white;font-size:18px;background:black">(𝟻𝟻)𝟿𝟿𝟶𝟸𝟿𝟷𝟿-𝟹𝟿</a>
      </div>
  </a>
    </div>
    <div class="finaliz">
    <div class="filiz-poster">
    <p style="color:white;font-size:18px;background:black">@ᴄɪɴᴇ.ᴛɪᴄᴋᴇᴛ</a>
      </div>
      
      
  
   
  </center>
    </body>
    </html>


