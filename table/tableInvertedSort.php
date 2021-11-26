<?php
include_once "./dev-data/testArray.php";
include_once "./utils/returnSubrowElements.php";

$testeInverted = $teste;

// Grab all ['produtos'] from $teste
$products = array_column($testeInverted, 'produtos');

// Grab all ['valor'] from ['produtos']
$price = array_column($products, 'valor');

// Sort $testeInverted indexes based on descending ['valor']
array_multisort($price, SORT_DESC, $testeInverted);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Table Inverted</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <?php if (count($testeInverted) > 0) : ?>
            <table class="table-products">
                <thead>
                    <tr>
                        <th><?php echo implode('</th><th>', array_keys(current($testeInverted[0]))); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($testeInverted  as $products) foreach ($products as $row) : ?>
                        <tr>
                            <?php foreach ($row as $subRow) : $content = returnSubrowElements($subRow) ?>
                                <td><?= $content ?></td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</body>

</html>