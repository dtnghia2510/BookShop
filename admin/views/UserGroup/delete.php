<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cập nhật nhóm người dùng</title>
</head>
<body>
<div class="container-fluid">
    <h3>Cập nhật nhóm người dùng</h3>
    <form action="" method="post">
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" name="id" readonly value="<?php echo $result[0] ?>" class="form-control col-md-6">
        </div>
        <div class="form-group">
            <label for="">Tên nhóm</label>
            <input type="text" name="ten_group" value="<?php echo $result[1] ?>" class="form-control col-md-6">
        </div>
        <div class="form-group">
            <button type="submit" name="xoa_usergroup" class="btn btn-success">Xóa</button>
            <a href="?danhsach_usergroup" class="btn btn-primary">Danh sách nhóm người dùng</a>
        </div>
    </form>
</div>
</body>
</html>