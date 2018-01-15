<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Teste</title>
    </head>
    <body>
	<table style="width:100%">
                <tr>
                    <th>
                         <?php echo $_SESSION['nome_teste']; ?>
                    </th>
                </tr>
        </table>
    </body>
</html>
