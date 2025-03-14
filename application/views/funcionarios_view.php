<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td, th {
            padding:2px 20px;
        }

        button{
            background-color: orange;
        }
    </style>
</head>
<body>
    <h1>Lista de funcionarios</h1>
     <a href="add-funcionario"><button>Adcionar</button></a>
    <table border='1'>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cpf</th>
                <th>cargo</th>
                <th>setor</th>
                <th>Email</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($funcionarios as $funcionario) { ?>
            <tr>
                <td><?= $funcionario['nome']?></td>
                <td><?= $funcionario['cpf']?></td>
                <td><?= $funcionario['cargo']?></td>
                <td><?= $funcionario['setor']?></td>
                <td><?= $funcionario['email']?></td>
                <td>
                <button>Edtar</button>
                <button>Apagar</button>
                </td>
            </tr>
       <?php } ?>
        </tbody>
    </table> 
</body>
</html>