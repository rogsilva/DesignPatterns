<?php
//Chamada do autoload
require_once "../autoload.php";

$request = new \CODE\Request\Request();
$validator = new \CODE\Form\Validator\Validator($request);
//Form Protótipo
$form =  new \CODE\Form\Form($validator);

//Formulário de Cadastro
$formCadastro = clone $form;

$fieldset1 = new \CODE\Form\Elements\Fieldset('field1', 'Informações Pessoais');

$nome = new \CODE\Form\Elements\Text('nome');
$nome->setLabel('Nome');
$fieldset1->add($nome);

$email = new \CODE\Form\Elements\Email('email');
$email->setLabel('Email');
$fieldset1->add($email);

$formCadastro->add($fieldset1);

$fieldset2 = new \CODE\Form\Elements\Fieldset('field2', 'Informações de Acesso');

$login = new CODE\Form\Elements\Text('login');
$login->setLabel('Login');
$fieldset2->add($login);

$pass = new CODE\Form\Elements\Password('senha');
$pass->setLabel('Senha');
$fieldset2->add($pass);

$formCadastro->add($fieldset2);

$submit = new CODE\Form\Elements\Submit('enviar', 'Enviar');
$formCadastro->add($submit);





?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aula Code Education - Foundation">
    <meta name="author" content="Rogério SIlva">

    <title>Code Education - Design Patterns</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo "http://".$_SERVER['HTTP_HOST']?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo "http://".$_SERVER['HTTP_HOST']?>/css/custom.css" rel="stylesheet">

    <!-- JavaScript -->
    <script src="<?php echo "http://".$_SERVER['HTTP_HOST']?>/js/jquery-1.10.2.js"></script>
    <script src="<?php echo "http://".$_SERVER['HTTP_HOST']?>/js/bootstrap.js"></script>


</head>

<body>


<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Design Patterns</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a>
                </li>
            </ul>

        </div>
        <!-- /.navbar-collapse -->

    </div>
    <!-- /.container -->
</nav>

<div class="container">


    <div class="row">
        <div class="col-lg-6">
            <h3>Form Cadastro</h3>
            <?php echo $formCadastro->openTag();?>

            <?php echo $formCadastro->createField('field1');?>

            <?php echo $formCadastro->createField('field2');?>

            <?php echo $formCadastro->createField('enviar');?>

            <?php echo $formCadastro->closeTag();?>
        </div>
    </div>


    <footer class="navbar-fixed-bottom ">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Todos os direitos reservados - <?php echo date('Y');?></p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->


</body>

</html>