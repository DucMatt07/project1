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
        $adminController->goToUpdate($_GET['id'], $_GET['categoryID']);
        break;
    case 'startUpdate':
        $adminController->startUpdate($_GET['id']);
        break;
    case 'goToCreate':
        $adminController->goToCreate();
        break;
    case 'startCreate':
        $adminController->startCreate();
        break;
    case 'delete':
        $adminController->startDelete($_GET['id']);
        break;
    case 'sendComment':
        $homeController->sendComment();
        break;
    case 'goToComment':
        $adminController->goToAdminComment($_GET['id']);
        break;
    case 'deleteComment':
        $adminController->deleteComment($_GET['id'], $_GET['productId']);
        break;
    case 'adminUser':
        $adminController->goToAdminUser();
        break;
    case 'updateUserRole':
        $adminController->updateUserRole($_GET['id']);
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
    default:
        echo "Error";
        break;
}
