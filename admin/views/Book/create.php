<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới sách</title>
</head>
<body>
    <div class="container-fluid">
        <h3>Thêm mới sách</h3>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Tên sách</label>
                <input type="text" name="ten_sach" class="form-control col-md-6">
            </div>
            <div class="form-group">
                <label>Thể loại:</label>
                <select name="bookcategory_id">
                    <?php  foreach ($loaisach as $bookcategory) { ?>
                        <option value="<?php echo $bookcategory['bookcategory_id'] ?>"><?php echo $bookcategory['ten_loaisach'] ?></option>
                        <?php
                    }
                    ?>                    
                </select>
            </div>
            <div class="form-group">
                <label for="">Nhà xuất bản:</label>
                <input type="text" name="nha_xuat_ban" class="form-control col-md-6">
            </div>
            <div class="form-group">
                <label for="">Số lượng:</label>
                <input type="number" name="so_luong" class="form-control col-md-6">
            </div>
            <div class="form-group">
                <label for="">Đơn giá:</label>
                <input type="number" name="gia" class="form-control col-md-6">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Lưu</button>
                <a href="?danhsach_sach" class="btn btn-primary">Danh sách</a>
            </div>
        </form>
    </div>
</body>
</html>