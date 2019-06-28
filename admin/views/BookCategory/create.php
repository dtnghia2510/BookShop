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
        <h3>Thêm mới loại sách</h3>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Tên loại sách</label>
                <input type="text" name="ten_loaisach" class="form-control col-md-6">
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea name="mo_ta" class="form-control col-md-6" rows="6"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Lưu</button>
                <a href="?dachsach_theloaisach" class="btn btn-primary">Danh sách thể loại sách</a>
            </div>
        </form>
    </div>
</body>
</html>