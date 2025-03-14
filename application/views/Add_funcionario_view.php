<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario cadastro</title>
</head>
<body>
    
    <h1>aqui vai o formulario de cadastro</h1>
<form action="adicionar-funcionario" method='post'>
    <div>
        <label for="nome">nome<label>
        <input type="text" placeholder="nome">
     </div>
     <div>
         <label for="senha">senha</label>
         <input type="text" placeholder="senha"> 
     </div>
     <div>
         <label for="cargo">cargo</label>
         <input type="text" placeholder="cargo"> 
     </div>
     <div>
        <label for="cpf">cpf</label>
        <input type="text" placeholder="cpf"> 
     </div>
     <div>
        <label for="email">email</label>
        <input type="text" placeholder="email"> 
     </div>
     <div>
        <label for="telefone">telefone</label>
        <input type="text" placeholder="telefone"> 
     </div>
     <div>
        <label for="senha">senha</label>
        <input type="text" placeholder="senha"> 
     </div>
     <div>
        <label for="tipo">tipo</label>
        <select required name="tipo" id="tipo">
            <option value="comun">comun</option>
            <option value="gestor">gestor</option>
        </select>
     </div>
    <button type="submint">Enviar</button>
    </form>

    
</body>
</html>