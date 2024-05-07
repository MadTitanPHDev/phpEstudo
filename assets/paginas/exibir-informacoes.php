<?php
    if (isset($_POST["acao"]))
    {
        echo "<script>alert('Formulário Foi enviado pelo método POST')</script>";
        
        $nome=$_POST["nome"]; 
        $telefone=$_POST["telefone"]; 
        $email=$_POST["email"]; 
        $radio=$_POST["novidades"]; 
        $msg=$_POST["mensagem"];

        echo "<p>Olá, ".$nome."</p>";

        echo "<p>O seu telefone é: ".$telefone." .</p>";

        echo "<p>O seu email é: ".$email." .</p>";

        if($radio == "sim"){
            echo "<p>".$nome.", a sua escolha foi receber nossas novidades.</p>";
        }
        else{
            echo "<p>".$nome.", a sua escolha foi não receber nossas novidades.</p>";
        
        }
        
        echo "<p>A sua mensagem para nós foi: <br></p>";
        echo "<p>  ".$msg.".</p>";
    
    } 
?>