<?php
        $nome = $_POST["nome"];

        $usuario = $_POST["usuario"];

        $email = $_POST["email"];

        $senha = $_POST["senha"];

        $confirmasenha = $_POST["confirmasenha"];

        $sucesso = "Cadastro realizado com sucesso!";



 
        if(empty ($email)){

            echo "Email nao informado ou icorreto, ";

        }
        
        if(empty ($nome)){

            echo "Nome nao informado, ";

        }
        
        if(empty ($usuario)){

            echo "Usuario nao infromado ou incorreto, ";

        }
        
        if(empty ($senha)){

            echo "Senha nao informada, ";

        }
        
        if(empty ($confirmasenha)){

            echo "Senha nao informada, ";

        }
        
        if(empty ($senha = $confirmasenha)){

            echo "As senhas nao conferem, ";

        }

        else {

           echo "Cadastro realizado com sucesso!, ";
        
        }
?>