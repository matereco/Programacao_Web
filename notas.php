<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <!-- 
    * <instituição: União Metropolitana de Educação e Cultura(UNIME), Lauro de Freitas>
    * <curso: Bacharelado em sistemas da informação>
    * <disciplina: programação web II>
    * <Professor: Pablo Ricardo Roxo Silva>
    * <Aluno: Matheus Avelar Almeida Santana>
     -->
    
    
     <form>
       <h1>Digite suas notas </h1> 
       Use ALT ou MOUSE para navegar, e ENTER ou o botão "calcular" para ver sua média
        <p>
        Nota AV1: <input type="number" name="nota" step = any ><br/>
        Nota AV2: <input type="number" name="nota1" step = any ><br/>
        Nota AV3: <input type="number" name="nota2" step = any ><br/>
        </p>
        <input type="hidden" name="form_media">
        <input type="submit" value="Calcular">
    </form> 
    

    <?php 
    
        if(isset($_GET['form_media'])) { 
            // verifica se o valor é numerico
            if(is_numeric($_GET['nota']) && is_numeric($_GET['nota1']) && is_numeric($_GET['nota2'])) {

                $media = ($_GET['nota'] + $_GET['nota1'] + $_GET['nota2'])/3;
                echo 'média final: ' . round(($media),1);
                
                if($media>=7){
                    echo '<p>aluno aprovado</p>';
                } elseif($media>=4 && $media<7) {
                    echo '<p>Aluno ficou de recuperação</p>';
                }else{
                    echo '<p> Aluno Reprovado, sem direito a recuperação. </p>';
                }
            }else{
                echo 'digite os valores corretamente';
            }
            
        }
   
    ?>
</body>

</html>