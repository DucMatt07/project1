<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include './controllers/homeController.php';
include './controllers/usersController.php';
include './controllers/adminController.php';
$homeController = new homeController;
$usersController = new usersController;
$adminController = new adminController;
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
switch ($action) {
    case 'index':
        $homeController->goToHome();
        break;
    case 'productDetails':
        $homeController->goToProductDetails($_GET['id']);
        break;
    case 'admin':
        if (isset($_SESSION['user_name']) && $_SESSION['role'] == 1) {
            $adminController->goToAdmin($_GET['id']);
        } else {
            header("Location:?action=index");
        }
        break;
    case 'login':
        $usersController->checkLogin();
        break;
    case 'logout':
        $usersController->logout();
        break;
    case 'signIn':
        $usersController->checkSignIn();
        break;
    case 'infoUser':
        $usersController->goToInfoUser($_GET['userName']);
        break;
    case 'startUpdateUser':
        $usersController->startUpdateUser($_GET['id']);
        break;
    case 'goToUpdate':
        if (isset($_SESSION['user_name']) && $_SESSION['role'] == 1) {
            $adminController->goToUpdate($_GET['id'], $_GET['categoryID']);
        } else {
            header("Location:?action=index");
        }
        break;
    case 'startUpdate':
        if (isset($_SESSION['user_name']) && $_SESSION['role'] == 1) {
            $adminController->startUpdate($_GET['id']);
        } else {
            header("Location:?action=index");
        }
        break;
    case 'goToCreate':
        if (isset($_SESSION['user_name']) && $_SESSION['role'] == 1) {
            $adminController->goToCreate();
        } else {
            header("Location:?action=index");
        }
        break;
    case 'startCreate':
        if (isset($_SESSION['user_name']) && $_SESSION['role'] == 1) {
            $adminController->startCreate();
        } else {
            header("Location:?action=index");
        }
        break;
    case 'delete':
        if (isset($_SESSION['user_name']) && $_SESSION['role'] == 1) {
            $adminController->startDelete($_GET['id']);
        } else {
            header("Location:?action=index");
        }
        break;
    case 'sendComment':
        $homeController->sendComment();
        break;
    case 'goToComment':
        if (isset($_SESSION['user_name']) && $_SESSION['role'] == 1) {
            $adminController->goToAdminComment($_GET['id']);
        } else {
            header("Location:?action=index");
        }
        break;
    case 'deleteComment':
        if (isset($_SESSION['user_name']) && $_SESSION['role'] == 1) {
            $adminController->deleteComment($_GET['id'], $_GET['productId']);
        } else {
            header("Location:?action=index");
        }
        break;
    case 'adminUser':
        if (isset($_SESSION['user_name']) && $_SESSION['role'] == 1) {
            $adminController->goToAdminUser();
        } else {
            header("Location:?action=index");
        }
        break;
    case 'updateUserRole':
        if (isset($_SESSION['user_name']) && $_SESSION['role'] == 1) {
            $adminController->updateUserRole($_GET['id']);
        } else {
            header("Location:?action=index");
        }
        break;
    case 'test':
        $homeController->test(1);
        break;
    case 'goToType':
        $homeController->goToType($_GET['id']);
        break;
    case 'sendEmail':
        $usersController->sendEmail();
        break;
    case 'searchProduct':
        $homeController->searchProduct();
        break;
    case 'adminSlider':
        if (isset($_SESSION['user_name']) && $_SESSION['role'] == 1) {
            $adminController->goToAdminSlider();
        } else {
            header("Location:?action=index");
        }
        break;
    case 'goToUpdateSlider':
        if (isset($_SESSION['user_name']) && $_SESSION['role'] == 1) {
            $adminController->goToUpdateSlider($_GET['id']);
        } else {
            header("Location:?action=index");
        }
        break;
    case 'startUpdateSlider':
        if (isset($_SESSION['user_name']) && $_SESSION['role'] == 1) {
            $adminController->startUpdateSlider($_GET['id']);
        } else {
            header("Location:?action=index");
        }
        break;
    case 'adminCategory':
        if (isset($_SESSION['user_name']) && $_SESSION['role'] == 1) {
            $adminController->goToAdminCategory();
        } else {
            header("Location:?action=index");
        }
        break;
    case 'goToCreateCategory':
        if (isset($_SESSION['user_name']) && $_SESSION['role'] == 1) {
            include './views/createCategory.php';
        } else {
            header("Location:?action=index");
        }
        break;
    case 'startCreateCategory':
        if (isset($_SESSION['user_name']) && $_SESSION['role'] == 1) {
            $adminController->startCreateCategory();
        } else {
            header("Location:?action=index");
        }
        break;
    case 'deleteCategory':
        if (isset($_SESSION['user_name']) && $_SESSION['role'] == 1) {
            $adminController->deleteCategory($_GET['id']);
        } else {
            header("Location:?action=index");
        }
        break;
    case 'goToUpdateCategory':
        if (isset($_SESSION['user_name']) && $_SESSION['role'] == 1) {
            $adminController->goToUpdateCategory($_GET['id']);
        } else {
            header("Location:?action=index");
        }
        break;
    case 'startUpdateCategory':
        if (isset($_SESSION['user_name']) && $_SESSION['role'] == 1) {
            $adminController->startUpdateCategory($_GET['id']);
        } else {
            header("Location:?action=index");
        }
        break;
    default:
        echo "Error";
        break;
}
