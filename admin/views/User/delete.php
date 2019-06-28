<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cập nhật người dùng</title>
</head>
<body>
<div class="container-fluid">
    <h3>Cập nhật người dùng</h3>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $result[0] ?>" class="form-control">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Nhóm người dùng</label>
                <select name="user_group_id" id="" class="form-control">
                    <option value="<?php echo $result[5] ?>"><?php echo $result[7] ?></option>
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
                <input type="text" name="user_name" value="<?php echo $result[1] ?>" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Mật khẩu</label>
                <input type="password" value="<?php echo $result[2] ?>" name="password" class="form-control ">
            </div>
            <div class="form-group col-md-6">
                <label for="">Xác nhận mật khẩu</label>
                <input type="password" value="<?php echo $result[3] ?>" name="confirm_password" class="form-control ">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Số điện thoại</label>
                <input type="text" value="<?php echo $result[5] ?>" name="phone" class="form-control ">
            </div>
            <div class="form-group col-md-6">
                <label for="">Email</label>
                <input type="email" value="<?php echo $result[4] ?>" name="email" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Địa chỉ</label>
                <input type="text" value="<?php echo $result[6] ?>" name="address" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <button type="submit" name="xoa_user" class="btn btn-success">Xóa</button>
            <a href="?danhsach_taikhoan" class="btn btn-primary">Danh sách thể loại sách</a>
        </div>
    </form>
</div>
</body>
</html>