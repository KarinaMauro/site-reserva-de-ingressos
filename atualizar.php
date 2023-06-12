<?php
include 'db.php';

if (!isset($_GET['id'])) {
    header('Location: listar.php');
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM ingressos WHERE id = ?');
$stmt->execute([$id]);
$appointment = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$appointment) {
header('Location:Listar.php');
exit;
}
$nome = $appointment['nome'];
$cidade = $appointment['cidade'];
$filme = $appointment['filme'];
$sala = $appointment['sala'];
$poltrona = $appointment['poltrona'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Atualiazar Compromisso</h1>
    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $nome; ?>" required><br>
        
        <label for="cidade"></label>
        <input type="cidade" name="cidade" value="<?php echo $cidade; ?>" required><br>

        <label for="filme">filme:</label>
        <input type="tel" name="filme" value="<?php echo $filme; ?>" required><br>

        <label for="filme">sala:</label>
        <input type="tel" name="filme" value="<?php echo $filme; ?>" required><br>

        <label for="poltrona">poltrona:</label>
        <input type="poltrona" name="poltrona" value="<?php echo $poltrona; ?>" required><br>

     </form>

</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $filme = $_POST['filme'];
    $filme = $_POST['sala'];
    $poltrona = $_POST['poltrona'];



// validacao dos dados do formulario aqui
$stmt = $pdo->prepare('UPDATE frutas SET nome = ?, cidade = ?, filme = ?, sala = ?, poltrona = ?'); 
$stmt->execute([$nome, $cidade, $filme, $sala $poltrona, $id]);
header ('Location: listar.php');
exit;
}
?>

