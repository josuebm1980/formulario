<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário</title>
        
        <style>
        .error{
            color: red;
        }
        </style>
        
    </head>
    <body>
        <p>Formulário com PHP</p>
        <form method="POST" action="">

            <p class="error">*Obrigatório</p>

            Nome:<input type="text" name="nome"> 
            <span class="error">*</span><br><br>
            Email:<input type="text" name="email">
            <span class="error">*</span><br><br>
             Website:<input type="text" name="website"><br><br>
            Comentário:
            <textarea name="Comentário" id="" cols="30" rows="3"></textarea>
                <br><br> 
            Gênero:
            <input name="gênero" value="Masculino" type="radio">Masculino
            <input name="gênero"  value="Femenino"  type="radio">Femenino
            <input name="gênero"  value="Outros" type="radio">Outros<br><br>

            <button name="enviado" type="enviar">submit</button>
            <h2><b>Dados enviados:</b></h2>
            
            
            
            <?php
                if(isset($_POST['enviado'])){ 
                    
                    if(empty($_POST['nome']) || strlen($_POST['nome']) < 3 || strlen($_POST['nome']) > 100){
                        echo '<p class="error">Preencha campo nome</p>';
                        die();
                    }
                    if(empty($_POST['email']) || !filter_var ($_POST['email'], FILTER_VALIDATE_EMAIL)){
                        echo '<p class="error">Preencha campo e-mail</p>';
                        die();

                    }

                    $genero = "";
                    if(isset($_POST['gênero'])){
                        $genero = $_POST['gênero'];
                        if($genero != 'Masculino' && $genero !='Femenino' && $genero != 'Outros'){
                            echo '<p class="error">Preencha corretamente o gênero!</p>';
                        }
                    }
                       
                       
                echo "<p><b>Nome: </b>" . $_POST['nome'] . "</p>";
                echo "<p><b>Email: </b>" . $_POST['email'] . "</p>";
                echo "<p><b>Website: </b> " . $_POST['website'] . "</p>";
                echo "<p><b>Comentário: </b> " . $_POST['Comentário'] . "</p>";
                echo "<p><b>Gênero: </b> " . $_POST['gênero'] . "</p>"; }  
                    
                    
                
                
                    
            
            
            ?>
        </form>
    </body>
</html>