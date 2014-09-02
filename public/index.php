<?php
//Chamada do autoload
require_once "../autoload.php";

$request = new \CODE\Request\Request();
$validator = new \CODE\Form\Validator\Validator($request);
//Form Protótipo
$form =  new \CODE\Form\Form($validator);

//Formulário de Contato
$formContato = clone $form;

$nome = new \CODE\Form\Elements\Text('nome');
$nome->setLabel('Nome');
$formContato->add($nome);

$email = new \CODE\Form\Elements\Email('email');
$email->setLabel('Email');
$formContato->add($email);

$assunto = new CODE\Form\Elements\Text('assunto');
$assunto->setLabel('Assunto');
$formContato->add($assunto);

$mensagem = new CODE\Form\Elements\TextArea('mensagem');
$mensagem->setLabel('Mensagem');
$formContato->add($mensagem);

$submit = new CODE\Form\Elements\Submit('enviar', 'Enviar');
$formContato->add($submit);

//Formulário de Cadastro newsletter
$formNews = clone $form;

$email = new \CODE\Form\Elements\Email('email');
$email->setLabel('Email');
$formNews->add($email);

$submit = new CODE\Form\Elements\Submit('enviar', 'Enviar');
$formNews->add($submit);


//Formulário de busca
$formSearch = clone $form;

$nome = new \CODE\Form\Elements\Text('term');
$nome->setAttributes(array('placeholder'=>'O que você está procurando?'));
$formSearch->add($nome);

$submit = new CODE\Form\Elements\Submit('buscar', 'Buscar');
$formSearch->add($submit);


//Formulário de Login
$formLogin = clone $form;

$email = new \CODE\Form\Elements\Email('email');
$email->setLabel('Email');
$formLogin->add($email);

$senha = new \CODE\Form\Elements\Password('senha');
$senha->setLabel('Senha');
$formLogin->add($senha);

$submit = new CODE\Form\Elements\Submit('enviar', 'Buscar');
$formLogin->add($submit);




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
            <h3>Form Contato</h3>
            <?php echo $formContato->openTag();?>

            <?php echo $formContato->render();?>

            <?php echo $formContato->closeTag();?>
        </div>
        <div class="col-lg-6">
            <h3>Newsletter</h3>
            <?php echo $formNews->openTag();?>
            <?php echo $formNews->createField('email');?>
            <?php echo $formNews->createField('enviar');?>
            <?php echo $formNews->closeTag();?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Busca</h3>
            <?php echo $formSearch->openTag();?>
            <?php echo $formSearch->createField('term');?>
            <?php echo $formSearch->createField('buscar');?>
            <?php echo $formSearch->closeTag();?>
        </div>
        <div class="col-lg-6">
            <h3>Login</h3>
            <?php echo $formLogin->openTag();?>
            <?php echo $formLogin->createField('email');?>
            <?php echo $formLogin->createField('senha');?>
            <?php echo $formLogin->createField('enviar');?>
            <?php echo $formLogin->closeTag();?>
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