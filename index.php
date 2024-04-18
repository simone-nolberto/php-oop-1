<?php

class Production
{
    public $title;
    public $language;
    public $vote;


    public function __construct(string $title, string $language, int $vote)
    {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
    }
}

$panda = new Production('Pandina', 'italian', 5);
$clio = new Production('Clio', 'french', 7);

var_dump($panda, $clio);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produzioni</title>
</head>

<body>

    <h1>Hello World</h1>

    <ul>
        <li></li>
        <li></li>
        <li></li>
    </ul>


</body>

</html>