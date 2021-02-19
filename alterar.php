<?php 
    require_once('db.class.php');
    
    $objDb = new db();
    $link = $objDb->conecta_db();
    $query = "SELECT codigo, nome, ra, email FROM alunos";
    $query2 = "SELECT codigo, descricao FROM turmas";
    $dados = mysqli_query($link, $query);
    $dados2 = mysqli_query($link, $query2);

?>

<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Web Lines</title>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="img/logo300x85.png" href="index.php">
        </div><!--Logo-->
        <div class="menu">
            <ul>
                <li><a href="index.php">Cadastrar</a></li>
                <li><a href="#">Consultar</a></li>
                <li><a href="#">Alterar</a></li>
                <li><a href="#">remover</a></li>
            </ul>
        </div><!--Menu de navegação-->    
    </div><!--Barra de navegação-->
    <section>
        <div class="cabecalho">
            <h1>Alterar alunos</h1>
            <hr>
        </div>

        <div class="formulario">
            <form action="alterar_aluno.php" method="POST">
               
            <div class="campo">
                    <label for="aluno"><strong>Aluno</strong></label><br>
                    <select id="aluno" name="turma"required >
                        <option selected disabled>
                            Selecione um aluno
                        </option>
                        <?php 
                            while($aluno = mysqli_fetch_array($dados)){
                        ?>       
                        <option value="   <?php  echo $aluno['codigo'] ?>    ">
                            <?php 
                                echo $aluno['nome'];
                            ?>
                       </option>
                        <?php
                             } 
                        ?>                  
                        
                    </select>
                </div>           
            
            
            <div class="campo">
                    <label for="nome"><strong>Nome</strong></label><br>
                    <input type="text" name="nome" id="nome" placeholder="Nome completo" required>
                </div>
                <div class="campo">
                    <label for="ra"><strong>R.A</strong></label><br>
                    <input type="text" name="ra" id="ra"  placeholder="R.A" required>
                </div>
                <div class="campo">
                    <label for="email" ><strong>E-mail</strong></label><br>
                    <input type="text" name="email" id="email"  placeholder="E-mail">
                </div>

                <div class="campo">
                        <label for="turma"><strong>Turma</strong></label><br>
                        <select id="turma" name="turma"required >
                            <option selected disabled>
                                Selecione uma turma
                            </option>
                            <?php 
                                while($turmas = mysqli_fetch_array($dados2)){
                            ?>       
                            <option value="   <?php  echo $turmas['codigo'] ?>    ">
                                <?php 
                                    echo $turmas['descricao'];
                                ?>
                            </option>
                            <?php
                                } 
                            ?>                   
                        </select>
                </div>


                <input type="reset" class="btn" value="Limpar"> 
                <button type="submit" class="btn"> Enviar</button>
            </form>
        </div>
    </section>

</body>
</html>