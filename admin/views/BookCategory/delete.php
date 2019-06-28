<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xóa loại sách</title>
</head>
<body>
<div class="container-fluid">
    <h3>Cập nhật loại sách</h3>
    <form action="" method="post">
        <input type="hidden" name="bookcategory_id" value="<?php echo $result[0] ?>">

        <div class="form-group">
            <label for="">Tên loại sách</label>
            <input type="text" name="ten_loaisach" value="<?php echo $result[1] ?>" class="form-control col-md-6">
        </div>
        <div class="form-group">
            <label for="">Mô tả</label>
            <textarea name="mo_ta" class="form-control col-md-6" rows="6"><?php echo $result[2] ?></textarea>
        </div>
        <div class="form-group">
            <button type="submit" name="xoa_theloaisach" class="btn btn-success">Xóa</button>
            <a href="?dachsach_theloaisach" class="btn btn-primary">Danh sách thể loại sách</a>
        </div>
    </form>
</div>
</body>
</html>