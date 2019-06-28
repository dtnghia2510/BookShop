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
        <a href="?tao_user" class="btn btn-primary">Thêm mới</a>
    </p>
    <form method="post">
        <table class="table-bordered table table-stripped">
            <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>Tên nhóm</th>
                <th>Tên đăng nhập</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
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
                    <td><?php echo $value['ten_group'] ?></td>
                    <td><?php echo $value['username'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                    <td><?php echo $value['phone'] ?></td>
                    <td><?php echo $value['address'] ?></td>
                    <td class = "text-center">
                        <a href="?edit_user=<?php echo $value['user_id'] ?>">Edit</a> |
                        <a href="?delete_user=<?php echo $value['user_id'] ?>">Delete</a>
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