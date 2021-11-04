<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Month</title>
</head>
<body>
    <!-- 
    * <instituição: União Metropolitana de Educação e Cultura(UNIME), Lauro de Freitas>
    * <curso: Bacharelado em sistemas da informação>
    * <disciplina: programação web II>
    * <Professor: Pablo Ricardo Roxo Silva>
    * <Aluno: Matheus Avelar Almeida Santana>
     -->
    <form action = "meses.php">
    <h2>Digite o mês, com seu numero e nome correspondente:</h2>
       Numero <input type="number" name="num">
       Nome <input type="text" name="mes">
    
        <input type="submit">
        <input type="hidden" name="form_media">
    </form> 
    <pre>

        <?php
            if(!empty($_GET['num']) && !empty($_GET['mes'])){
                
                $num = $_GET['num'];
                $mes = strtolower($_GET['mes']);
                $a = [
                    1 => 'janeiro',
                    2 => 'fevereiro',
                    3 => 'março',
                    4 => 'abril',
                    5 => 'maio',
                    6 => 'junho',
                    7 => 'julho',
                    8 => 'agosto',
                    9 => 'setembro',
                    10 => 'outubro',
                    11 => 'novembro',
                    12 => 'dezembro',
                ];
                // print_r($a);
                if($num<=12 && $num>=1){  
                    if($a[$num] == $mes){
                        echo 'Correto, o mês ' . $num . ' é o mês de ' . $mes ;
                    }else{
                        echo ' Incorreto, o numero ' . '"' . $num . '"' . ' não corresponde ao mês ' . '"' . $mes . '"' ;
                    } 
                }else{
                    echo ' Digite os valores nos campos Corretamente: <b>(Numero (de 1 a 12) nome do mês correspondente)</b>';
                }

            }else{
                echo ' Digite os valores nos campos Corretamente: (Numero (de 1 a 12) nome do mês correspondente)';

            }
        ?>  

    </pre>
    
</body>
</html>