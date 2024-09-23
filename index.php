<?php
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['sim'])) {
        $message = 'A felicidade é como uma xícara de café!';
    } elseif (isset($_POST['nao'])) {
        $message = 'Pois vou criar um mundo repleto de dor e sofrimento, este mundo que estou prestes a criar é um espelho distorcido de tudo que já vivi!';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <style>
        #flex{
            height: 100vh;
            width: 100vw;
            display: flex;
            align-items: center;
           justify-content: center;

        }
        .container{
            margin: auto;
            width: 15%;
            border: 2px solid black;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <section>
        <div id="flex">
    <div class="container">
        <h1>Mãe tem café?</h1>
        <form method="post">
            <button type="submit" name="sim">Tem</button>
            <button type="submit" name="nao">Tem não</button>
        </form>
    <?php if ($message): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
    </div>
    </div>
    </section>
</body>
</html>
