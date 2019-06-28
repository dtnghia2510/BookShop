<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xóa sách</title>
</head>
<body>
<div class="container-fluid">
    <h3>Cập nhật loại sách</h3>
    <form action="" method="post">
        <input type="hidden" name="book_id" value="<?php echo $result[0] ?>">

        <div class="form-group">
                <label for="">Tên sách</label>
                <input type="text" name="ten_sach" class="form-control col-md-6" value="<?php echo $result[2] ?>">
            </div>
            <div class="form-group">
                <label>Thể loại:</label>
                <select name="bookcategory_id">
                    <?php  foreach ($loaisach as $bookcategory) { ?>
                        <option value="<?php echo $bookcategory['id'] ?>"><?php echo $bookcategory['ten_loaisach'] ?></option>
                        <?php
                    }
                    ?>                    
                </select>
            </div>
            <div class="form-group">
                <label for="">Nhà xuất bản:</label>
                <input type="text" name="nha_xuat_ban" class="form-control col-md-6" value="<?php echo $result[3] ?>">
            </div>
            <div class="form-group">
                <label for="">Số lượng:</label>
                <input type="number" name="so_luong" class="form-control col-md-6" value="<?php echo $result[4] ?>">
            </div>
            <div class="form-group">
                <label for="">Đơn giá:</label>
                <input type="number" name="gia" class="form-control col-md-6" value="<?php echo $result[5] ?>">
            </div>
        <div class="form-group">
            <button type="submit" name="xoa_sach" class="btn btn-success">Xóa</button>
            <a href="?danhsach_sach" class="btn btn-primary">Danh sách</a>
        </div>
    </form>
</div>
</body>
</html>