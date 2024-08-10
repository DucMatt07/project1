<?php
include './model/usersModel.php';
class usersController
{
    public $usersModel;
    public function __construct()
    {
        $this->usersModel = new usersModel;
    }
    public function checkLogin()
    {
        if (isset($_POST['btn-login'])) {
            session_start();
            $userLogin = $_POST['user'];
            $passwordLogin = $_POST['password'];
            $user =  $this->usersModel->getUser($userLogin);
            if ($user && $user['user_password'] == $passwordLogin) {

                $role =  $user['role'];
                $_SESSION['user_name'] = $userLogin;
                $_SESSION['role'] = $role;
                $_SESSION['user_id'] = $user['id'];
                return header("Location:?action=index");
            } else {
                if (!$user) {
                    $_SESSION['errorUser'] = "Tên đăng nhập không tồn tại";
                } else if ($user['user_password'] != $passwordLogin) {
                    $_SESSION['errorPassword'] = "Mật khẩu của bạn không chính xác";
                }
                $_SESSION['errorsLogin'] = true;
                return header("Location:?action=index");
            }
        }
    }
    public function checkSignIn()
    {
        if (isset($_POST['btn-signIn'])) {
            session_start();
            $userSignIn = $_POST['user'];
            $passwordSignIn = $_POST['password'];
            $passwordRepeat = $_POST['repassword'];
            $emailSignIn = $_POST['email'];
            $checkUser = $this->usersModel->getUser($userSignIn);
            $checkEmail = $this->usersModel->getEmail($emailSignIn);
            if ($checkUser) {
                $_SESSION['errorUserSignIn'] = "Tên đăng nhập đã tồn tại vui lòng sử dụng tên khác";
                $_SESSION['errorsSignIn'] = true;
            }
            if ($passwordSignIn !== $passwordRepeat) {
                $_SESSION['errorPasswordRepeat'] = "Mật khẩu nhập lại không giống";
                $_SESSION['errorsSignIn'] = true;
            }
            if ($checkEmail) {
                $_SESSION['errorEmailSignIn'] = "Email đã được sử dụng vui lòng sử dụng email khác";
                $_SESSION['errorsSignIn'] = true;
            }
            if (!isset($_SESSION['errorsSignIn'])) {
                $this->usersModel->createUser($userSignIn, $passwordSignIn, $emailSignIn);
                $_SESSION['signInSuccess'] = true;
            }
            return header("Location:?action=index");
        }
    }
    public function goToInfoUser($userName)
    {
        $user =  $this->usersModel->getUser($userName);
        return include './views/infoUser.php';
    }
    public function logout()
    {
        session_start();
        if (isset($_SESSION['user_name'])) {
            session_destroy();
        }
        header("Location:?action=index");
    }
    public function startUpdateUser($id)
    {
        if (isset($_POST['btn-updateUser'])) {
            session_start();
            $folder = './img/';
            $password = $_POST['password'];
            $newPassword  = $_POST['newPassword'];
            $userName = $_POST['userName'];
            $img = $_FILES['img'];
            $user = $this->usersModel->getUser($userName);
            if ($password !== $user['user_password']) {
                $_SESSION['errorPasswordOld'] = "Mật khẩu cũ không đúng";
                return header("Location:?action=infoUser&userName=$userName");
            } else {
                if ($img['error'] === UPLOAD_ERR_OK) {
                    $imgName = $img['name'];
                    $dir = $folder . $imgName;
                    move_uploaded_file($img['tmp_name'], $dir);
                    $this->usersModel->updateUser($newPassword, $imgName, $id);
                } else {
                    $imgName = $img['name'];
                    $imgName = null;
                    $this->usersModel->updateUser($newPassword, $imgName, $id);
                }
                $_SESSION['updateUserSuccess'] = true;
                return header("Location:?action=index");
            }
        }
    }
}
