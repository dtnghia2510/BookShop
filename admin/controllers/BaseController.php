<?php
//Book category
if (isset($_GET['tao_loai_sach'])){
    require_once './controllers/BookCategoryController.php';
    $loaisach = new BookCategoryController();
    $data = $loaisach->create();
    include('./views/BookCategory/create.php');
}
if (isset($_GET['dachsach_theloaisach'])){
    require_once './controllers/BookCategoryController.php';
    $loaisach = new BookCategoryController();
    $data = $loaisach->index();
    include "./views/BookCategory/index.php";
}
//update
//Kiem tra lay 1 record
if (isset($_GET['edit_theloaisach'])){
    require_once './controllers/BookCategoryController.php';
    $loaisach = new BookCategoryController();
    $result = $loaisach->detail();
    include "./views/BookCategory/update.php";
}
//Update du lieu
if (isset($_POST['capnhat_theloaisach'])){
    require_once './controllers/BookCategoryController.php';
    $loaisach = new BookCategoryController();
    $result = $loaisach->update();
}
//Check button to delete
if (isset($_GET['delete_theloaisach'])){
    require_once './controllers/BookCategoryController.php';
    $loaisach = new BookCategoryController();
    $result = $loaisach->delete_detail();
    include "./views/BookCategory/delete.php";
}
//Delete du lieu
if (isset($_POST['xoa_theloaisach'])){
    require_once './controllers/BookCategoryController.php';
    $loaisach = new BookCategoryController();
    $result = $loaisach->delete();
}
//End bookcategory
