<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>divisiveis</title>
</head>
<body>
    <!-- 
    * <instituição: União Metropolitana de Educação e Cultura(UNIME)>
    * <curso: Bacharelado em sistemas da informação>
    * <disciplina: programação web II>
    * <Professor: Pablo Ricardo Roxo Silva>
    * <Aluno: Matheus Avelar Almeida Santana>
     -->
    <form action="divisiveis.php">
        numero 1<input type="number" name="num1" id=""> <br>
        numero 2<input type="number" name="num2" id=""> <br>
        <input type="submit">
        <input type="hidden" name="form_media">
    </form>
    <?php
    if((isset($_GET['form_media']))){
        $num1 = intval( $_GET['num1']);
        $num2 = intval( $_GET['num2']);
        if(($num1>0 && $num2>0) ) {
            
            echo 'numeros naturais até ' . $num1 . ' que são divisiveis por ' . $num2 . ': <br>';
            
            for ($i=$num2; $i <= $num1 ; $i++) { 
                if ($i % $num2 == 0 ){
                    echo('[' . $i  . '] ');
                }
            
            }if($num2>$num1){
                echo('[' . 0  . '] <br>');
                echo ' <b> dica: O "numero1" deve ser maior ou igual ao "numero2"<b>';
                
            }
            
        }elseif(($num1<0||$num2<0)||(empty($num1)||empty($num2))){
            if($num1==0||$num2==0){
                echo('[' . 0  . '] <br>');
            }else{
                echo ' <b> dica: Os numeros devem pertencer ao conjunto dos numeros NATURAIS<b>';
            }
        }
    }
    
    ?>
    
</body>
</html>