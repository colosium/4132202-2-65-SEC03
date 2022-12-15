<?php
include "condb.php";
?>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Lastname</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM tb_user ORDER BY user_id ASC";
        $result = mysqli_query($link,$sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?=$row['user_id']?></td>
            <td><?=$row['user_name']?></td>
            <td><?=$row['user_pass']?></td>
            <th><button class="btn_edit" data="<?=$row['user_id']?>">EDIT</button></th>
            <th><button class="btn_del" data="<?=$row['user_id']?>">DEL</button></th>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<script>
    $(".btn_del").click(function () {
        let id_val = $(this).attr("data");
        $.ajax({
            url:"/model/user_add.php",
            method:"GET",
            data: {
                id : id_val
            },
            success: funtion(res) {
                $("#div_res").html(res);
                $("#div_action").load("/model/user_data.php");
            }
        });
    });
</script>