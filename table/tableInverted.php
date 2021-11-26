<?php
include_once "./dev-data/testArray.php";
include_once "./utils/returnSubrowElements.php";

// If is necessary only to reverse the $teste array, array_reverse($teste) or a for with inverse counter can do it.
// If is necessary to reverse the $teste array based on a array column (like ['valor']), then check 'tableInvertedSort.php'

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
        <?php if (count($teste) > 0) : ?>
            <table class="table-products">
                <thead>
                    <tr>
                        <th><?php echo implode('</th><th>', array_keys(current($teste[0]))); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = count($teste) - 1; $i >= 0; $i--) foreach ($teste[$i] as $row) : ?>
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