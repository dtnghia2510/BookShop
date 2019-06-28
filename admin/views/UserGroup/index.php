<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách nhóm người dùng</title>
</head>
<body>
<nav class="">
    <p>
        <a href="?tao_usergroup" class="btn btn-primary">Thêm mới</a>
    </p>
    <form method="post">
        <table class="table-bordered table table-stripped">
            <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Tên nhóm</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
            foreach ($data as $value){
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $value['user_group_id'] ?></td>
                    <td><?php echo $value['ten_group'] ?></td>
                    <td class = "text-center">
                        <a href="?edit_usergroup=<?php echo $value['user_group_id'] ?>">Edit</a> |
                        <a href="?delete_usergroup=<?php echo $value['user_group_id'] ?>">Delete</a>
                    </td>
                </tr>
                <?php
                $i++;
            }
            ?>
            </tbody>
        </table>
    </form>
</nav>
</body>
</html>