<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới loại sách</title>
</head>
<body>
<div class="container-fluid">
    <h3>Thêm mới tài khoản</h3>
    <form action="" method="post">

        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Chọn nhóm người dùng</label>
                <select name="user_group_id" class="form-control">
                    <option value="">----Chọn nhóm người dùng----</option>
                    <?php
                    foreach ($data as $item ){
                        ?>
                        <option value="<?php echo $item['user_group_id'] ?>">
                            <?php echo $item['ten_group'] ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="">Tên đăng nhập</label>
                <input type="text" name="user_name" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Mật khẩu</label>
                <input type="password" name="password" class="form-control ">
            </div>
            <div class="form-group col-md-6">
                <label for="">Xác nhận mật khẩu</label>
                <input type="password" name="confirm_password" class="form-control ">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Số điện thoại</label>
                <input type="text" name="phone" class="form-control ">
            </div>
            <div class="form-group col-md-6">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Địa chỉ</label>
                <input type="text" name="address" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Lưu</button>
            <a href="?danhsach_taikhoan" class="btn btn-primary">Danh sách thể loại sách</a>
        </div>
    </form>
</div>
</body>
</html>