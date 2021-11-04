<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Biblioteca</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!-- 
        * <instituição: União Metropolitana de Educação e Cultura(UNIME), Lauro de Freitas>
        * <curso: Bacharelado em sistemas da informação>
        * <disciplina: programação web II>
        * <Professor: Pablo Ricardo Roxo Silva>
        * <Aluno: Matheus Avelar Almeida Santana>
        -->
        
        
        <div class="cadastro">
            <a href="add.php" class ="botao">
                Cadastrar Livro <br>
                <img src="img/addicon.png" alt="">
                
            </a>
        </div>
        <div class="content">
        <h1>Biblioteca Pessoal</h1>
            <table border = "1">
                <tr>
                    
                    <th>NOME</th>
                    <th>AUTOR</th>
                    <th>GÊNERO</th>
                    <th>EDITORA</th>
                    <th>CODIGO</th>
                    <th>OPÇÕES</th>
                </tr>
            
                <?php
                    $conexao = new mysqli('localhost', 'root', '', 'livros');

                    if(!empty($_GET['id'])){
                        /* echo 'apagando pessoa do id= ' . $_GET['id']; */
                        $query = "DELETE FROM livro WHERE id = " . $_GET['id'] . ";";
                        $conexao->query($query);
                    }

                    $query = ("SELECT * FROM livro");
                    $lista = $conexao->query($query);

                    while($a = $lista->fetch_assoc()){
                    echo' 
                            <tr>
                                
                                <td>' . $a['nome']  .'</td>
                                <td>' . $a['autor'] . '</td>
                                <td>' . $a['gênero'] . '</td>
                                <td>' . $a['editora'] . '</td>
                                <td>' . $a['codigo']  .'</td>
                                <td>
                                    <a class="editar" href="edit.php?id='. $a['id'] . '"><img border="0" alt="edit" src="img/edit-icon.png"/></a>
                                    <a class="excluir" href="#" onclick="excluir('. $a['id'] . ')"> <img border="0" alt="edit" src="img/icondelete.png"/></a>
                                </td>
                            </tr>
                        ';
                    }
                

                ?>
            </table>
        </div>
        <div class="rodape">
            Aluno: Matheus Avelar Almeida Santana <br>
            Curso: Sitemas da informação <br>
            <img src="img/icone.png" alt="" class ="logo">
        </div>
        <script type="text/javascript">
            function excluir(id) {
                if(confirm("Quer mesmo apagar o livro?")){
                    window.location = '?id=' + id;
                }
                
            }
        </script>
        
    </body>
</html>