<?php
include_once "header.php";
include_once "Calculate.php";
$tmp = new Calculate(); ?>
<div style="padding:0  350px;  ">
    <table style="border-style: double;">
        <tbody class="table table-bordered">
        <tr>
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <td><?= $tmp->calc($i); ?></td>
            <?php endfor; ?>
        </tr>
        <tr>
            <?php for ($i = 6; $i <= 10; $i++): ?>
                <td><?= $tmp->calc($i); ?></td>
            <?php endfor; ?>
        </tr>
        </tbody>
    </table>
</div>
<?php include_once 'footer.php' ?>

