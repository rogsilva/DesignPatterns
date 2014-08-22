<?php
//Chamada do autoload
require_once "../autoload.php";

$form = new \CODE\Form\Form();
$form->setAttributes(array(
    "action" => "#",
    "method" => "post",
    "id" => "myForm",
    "class" => "form form-horizontal"
));

$nome = new \CODE\Form\Elements\Text("nome");
$nome->setAttributes(array("id"=>"nome"))
    ->setLabel("Nome");
$form->add($nome);

$email = new \CODE\Form\Elements\Email("email");
$email->setAttributes(array("id"=>"email"))
    ->setLabel("E-mail");
$form->add($email);

$assunto = new \CODE\Form\Elements\Text("assunto");
$assunto->setAttributes(array("id"=>"assunto"))
    ->setLabel("Assunto");
$form->add($assunto);

$deptoOptions = array( 1 => "Suporte", 2 => "Finanças", 3 => "Cancelamento");
$departamento = new \CODE\Form\Elements\Select("departamento", $deptoOptions);
$departamento->setAttributes(array("id"=>"departamento"))
    ->setLabel("Departamento");
$form->add($departamento);

$news = new \CODE\Form\Elements\Checkbox("news", "Sim", 1);
$news->setAttributes(array("id"=>"news"))
    ->setLabel("Assinar Newsletter");
$form->add($news);

$tipo1 = new \CODE\Form\Elements\Radio("tipo", "CLT", 1);
$tipo1->setAttributes(array("id"=>"tipo1", 'checked'=> true))
    ->setLabel("Tipo de Profissional");
$form->add($tipo1);

$tipo2 = new \CODE\Form\Elements\Radio("tipo", "PJ", 2);
$tipo2->setAttributes(array("id"=>"tipo2"));
$form->add($tipo2);


$conteudo = new \CODE\Form\Elements\TextArea("conteudo");
$conteudo->setAttributes(array("id"=>"conteudo", "rows" => "5"))
    ->setLabel("Conteúdo");
$form->add($conteudo);


$submit = new \CODE\Form\Elements\Submit("submit", "Enviar");
$submit->setAttributes(array("id"=>"submit"));
$form->add($submit);



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
        <div class="col-lg-12">
            <?php echo $form->openTag();?>

            <?php echo $form->render();?>

            <?php echo $form->closeTag();?>
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