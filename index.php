<?php

class PaginaWeb
{
    private $path = __FILE__;

    public function about($path)
    {
       $this->$path."/about.php";
    }

    public function contact($path)
    {
        $this->$path."/contact.php";
    }

    public function index($path)
    {
        $this->$path."/index.php";
    }

}

$pagina =new PaginaWeb;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="<?php $pagina->about($path) ?>">about</a>
<a href="<?php $pagina->index($path) ?>">index</a>
<a href="<?php $pagina->contact($path) ?>">contact</a>
</body>
</html>
