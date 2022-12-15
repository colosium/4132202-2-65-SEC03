<?php
echo "Hello PHP !!";

//phpinfo();

$no = 10;
$name = 'Fluk';
?>

<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Dang</td>
        </tr>
        <tr>
        <?php
        for($i = 2; $i <5; $i++) {
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?= $name ?></td>
            </tr>
        <?php
        }
        ?>
        </tr>
    </tbody>
</table>