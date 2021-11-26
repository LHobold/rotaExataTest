<?php
include_once "./dev-data/testArray.php";
include_once "./utils/returnSubrowElements.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Table</title>
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
                    <?php foreach ($teste  as $products) foreach ($products as $row) : ?>
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