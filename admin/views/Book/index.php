<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sách</title>
</head>
<body>

<nav class="">
    <p>
        <a href="?tao_sach" class="btn btn-primary">Thêm mới</a>
    </p>
    <form method="post">
        <table class="table-bordered table table-stripped">
            <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>Tên sách</th>
                <th>Tên loại sách</th>
                <th>NXB</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Ngày tạo</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
            foreach ($data as $book){
                ?>
                <tr>
                    <td><?php echo $book['book_id'] ?></td>
                    <td><a href="?edit_sach=<?php echo $book['book_id'] ?>"><?php echo $book['ten_sach'] ?></a></td>
                    <td><?php echo $book['ten_loaisach'] ?></td>
                    <td><?php echo $book['nha_xuat_ban'] ?></td>
                    <td><?php echo $book['so_luong'] ?></td>
                    <td><?php echo $book['gia'] ?></td>
                    <td><?php echo $book['ngay_tao'] ?></td>
                    <td class = "text-center">
                        <a href="?edit_sach=<?php echo $book['book_id'] ?>">Edit</a> |
                        <a href="?delete_sach=<?php echo $book['book_id'] ?>">Delete</a>
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