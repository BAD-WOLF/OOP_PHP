<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!--change-->
        <meta name="description" content="Descrição do seu site"> <!--change-->
        <!--<meta name="keywords" content="palavras, separadas, por, vírgula">-->
        <meta property="og:title" content="Título da Página"> <!--change-->
  		<meta property="og:description" content="Descrição da Página"> <!--change-->
        <meta property="og:image" content="caminho/para/imagem.jpg"> <!--change-->
        <meta property="og:url" content="https://www.example.com"> <!--change-->
        <meta name="author" content="Seu Nome"> <!--change-->
        <title>Título da página</title> <!--change-->
        <link rel="stylesheet" href="styles/css/default.css">
    </head>
    <body>
        <!-- Conteúdo do site aqui -->

        <?php
        /** code ... */
        require_once "Video.php";
        require_once "Gafanhoto.php";

        use CompleteProject\Gafanhoto\Gafanhoto;
        use CompleteProject\Video\Video;
        $v[] = new Video("curso de php", false);
        $v[] = new Video("cursso de python", false);
        $v[] = new Video("cursso de java", false);

        print "<pre>";
        print_r($v);
        $g[] = new Gafanhoto("matheu", 18, "M");
        $g[] = new Gafanhoto("jhessy", 19, "F");
        $g[] = new Gafanhoto("herique", 21, "M");
        print_r($g);
        ?>

    </body>
</html>
