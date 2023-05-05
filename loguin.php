<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/form.css">
    <?php include 'cabecalho.php'?>
    
    <title>MEU NEGOCIO</title>
</head>
<body>  
<main id="index">

        <!-- <div id="titutlo">
            <h1>
                CADASTRO E LOGUIN 
            </h1>
            <span class="line"></span>
        </div> -->
    

    <section id="sect2" class="face front rotary">
    <form name="cadastro" id="cdr" action="#" method="post">
    <div class="container">
        <h2>Cadastrar </h2>
   
    <div class="row100">
        <div class="col">
            <div class="inputbox">
                <input type="text" id="nome" name="c_nome" required="required">
                <span type="" class="text">NOME</span>
                <span class="line"></span>
            </div>
        </div>
    </div>
    <div class="row100">
        <div class="col">
            <div class="inputbox">
                <input type="text" id="usuario" name="c_usurario" required="required">
                <span class="text">Usuario</span>
                <span class="line"></span>
            </div>
        </div>
    </div>
    <div class="row100">
        <div class="col">
            <div class="inputbox">
                <input type="text" id="email"name="c_email" required="required">
                <span class="text">E-mail</span>
                <span class="line"></span>
            </div>
        </div>
    </div>
    <div class="row100">
        <div class="col">
            <div class="inputbox">
                <input type="text" id="senha" name="c_senha" required="required">
                <span class="text">Senha</span>
                <span class="line"></span>
            </div>
        </div>
    </div>
    <div class="row100">
        <div class="col">
            <button type="submit" id="btn_salvar" class="button">Salvar</button> 
            <button id="btn1"  class="button-form " >Entrar</button> 
        </div>
        
    </div>
</div>
</form>
    </section>



<section id="sect1" class="face back ">
<form name="f_log" id="lgn" action="#" method="post">
    <div class="container">
        <h2>Entrar</h2>
   
    <div class="row100">
        <div class="col">
            <div class="inputbox">
                <input type="text" name="l_usuario" id="l_user" required="required">
                <span class="text">Usurario ou Email</span>
                <span class="line"></span>
            </div>
        </div>
    </div>
    <div class="row100">
        <div class="col">
            <div class="inputbox">
                <input type="text" name="lsenha" id="l_pass" required="required">
                <span class="text">Senha</span>
                <span class="line"></span>
            </div>
        </div>
    </div>
    <div class="row100">
        <div class="col">
            <button type="submit" id="btn_salvar" class="button-form">Entrar</button> 
            
            <button id="btn"  class="button-form " >Criar Conta</button> 
        </div>
       
    </div>
           
</form>         
       
</section> 
    
</main>

    <script src="./script/jquery-3.6.0.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="./script/script.js"></script>

</body>
</html>