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

//UserGroup
if (isset($_GET['tao_usergroup'])){
    require_once './controllers/UserGroupController.php';
    $user_group = new UserGroupController();
    $data = $user_group->create();
    include('./views/UserGroup/create.php');
}
if (isset($_GET['danhsach_usergroup'])){
    require_once './controllers/UserGroupController.php';
    $user_group = new UserGroupController();
    $data = $user_group->index();
    include "./views/UserGroup/index.php";
}
//Kiem tra lay 1 record
if (isset($_GET['edit_usergroup'])){
    require_once './controllers/UserGroupController.php';
    $user_group = new UserGroupController();
    $result = $user_group->detail();
    include "./views/UserGroup/update.php";
}
//Update du lieu
if (isset($_POST['capnhat_usergroup'])){
    require_once './controllers/UserGroupController.php';
    $user_group = new UserGroupController();
    $result = $user_group->update();
}
//Check button to delete
if (isset($_GET['delete_usergroup'])){
    require_once './controllers/UserGroupController.php';
    $user_group = new UserGroupController();
    $result = $user_group->delete_detail();
    include "./views/UserGroup/delete.php";
}
//Delete du lieu
if (isset($_POST['xoa_usergroup'])){
    require_once './controllers/UserGroupController.php';
    $user_group = new UserGroupController();
    $result = $user_group->delete();
}
//End usergroup

//User
if (isset($_GET['tao_user'])){
    require './controllers/UserGroupController.php';
    require './controllers/UserController.php';
    $user_group = new UserGroupController();
    $user = new UserController();
    $data = $user_group->index();
    $user = $user->create();
//    goi view
    include './views/User/create.php';
}
if (isset($_GET['danhsach_taikhoan'])){
    require "./controllers/UserController.php";
    $user = new UserController();
    $data = $user->index();
    include "./views/User/index.php";
}
//Kiem tra lay 1 record
if (isset($_GET['edit_user'])){
    require './controllers/UserGroupController.php';
    require './controllers/UserController.php';
    $user_group = new UserGroupController();
    $user = new UserController();
    $data = $user_group->index();
    $result = $user->detail();
    include "./views/User/update.php";
}
//Update du lieu
if (isset($_POST['capnhat_user'])){
    require_once './controllers/UserController.php';
    $user_group = new UserController();
    $result = $user_group->update();
}
//Delete
if (isset($_GET['delete_user'])){
    require './controllers/UserGroupController.php';
    require './controllers/UserController.php';
    $user_group = new UserGroupController();
    $user = new UserController();
    $data = $user_group->index();
    $result = $user->delete_detail();
    include "./views/User/delete.php";
}
//Delete du lieu
if (isset($_POST['xoa_user'])){
    require_once './controllers/UserController.php';
    $use = new UserController();
    $result = $user->delete();
}