<?php
//Book category
require './controllers/BookCategoryController.php';
require './controllers/BookController.php';
if (isset($_GET['tao_loai_sach'])){    
    $loaisach = new BookCategoryController();
    $data = $loaisach->create();
    include('./views/BookCategory/create.php');
}
if (isset($_GET['dachsach_theloaisach'])){
    $loaisach = new BookCategoryController();
    $data = $loaisach->index();
    include "./views/BookCategory/index.php";
}
//update
//Kiem tra lay 1 record
if (isset($_GET['edit_theloaisach'])){
    $loaisach = new BookCategoryController();
    $result = $loaisach->detail();
    include "./views/BookCategory/update.php";
}
//Update du lieu
if (isset($_POST['capnhat_theloaisach'])){
    $loaisach = new BookCategoryController();
    $result = $loaisach->update();
}
//Check button to delete
if (isset($_GET['delete_theloaisach'])){
    $loaisach = new BookCategoryController();
    $result = $loaisach->delete_detail();
    include "./views/BookCategory/delete.php";
}
//Delete du lieu
if (isset($_POST['xoa_theloaisach'])){
    $loaisach = new BookCategoryController();
    $result = $loaisach->delete();
}
//End bookcategory
//Book
if (isset($_GET['tao_sach'])){
    $loaisach_controller = new BookCategoryController();
    $loaisach = $loaisach_controller->listBookCategory();
    $sach = new BookController();
    $data = $sach->create();
    include('./views/Book/create.php');
}
if (isset($_GET['danhsach_sach'])){
    $sach = new BookController();
    $data = $sach->index();
    // echo var_dump($data);
    include "./views/Book/index.php";
}
//update
 //Kiem tra lay 1 record
if (isset($_GET['edit_sach'])){        
    $loaisach_controller = new BookCategoryController();
    $loaisach = $loaisach_controller->listBookCategory();
    $sach = new BookController();
    $result = $sach->detail();
    include "./views/Book/update.php";
}
//Update du lieu
if (isset($_POST['capnhat_sach'])){
    $sach = new BookController();
    $result = $sach->update();
}
//Check button to delete
if (isset($_GET['delete_sach'])){
    
    $loaisach_controller = new BookCategoryController();
    $loaisach = $loaisach_controller->listBookCategory();
    $sach = new BookController();
    $result = $sach->delete_detail();
    include "./views/Book/delete.php";
}
//Delete du lieu
if (isset($_POST['xoa_sach'])){
    $sach = new BookController();
    $result = $sach->delete();
}