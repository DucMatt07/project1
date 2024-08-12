<?php
include './model/usersModel.php';
require("./PHPMailer/src/PHPMailer.php");
require("./PHPMailer/src/SMTP.php");
require("./PHPMailer/src/Exception.php");
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
    public function sendEmail()
    {
        if (isset($_POST['btn-forgotPass'])) {
            $emailForgot = $_POST['email'];
            $emailFind = $this->usersModel->getEmail($emailForgot);
            if (!$emailFind) {
                $_SESSION['errorEmailForgot'] = "Không tồn tại email bạn đã nhập vui lòng kiểm tra lại";
                $_SESSION['errorForgot'] = true;
                return header("Location:?action=index");
            } else {
                $password = $emailFind['user_password'];
                $mail = new PHPMailer\PHPMailer\PHPMailer();
                $mail->IsSMTP(); // enable SMTP
                $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
                $mail->SMTPAuth = true; // authentication enabled
                $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
                $mail->Host = "smtp.gmail.com";
                $mail->Port = 465; // or 587
                $mail->IsHTML(true);
                $mail->Username = "manhtd0707@gmail.com";
                $mail->Password = "oiyqhmvuknfbview";
                $mail->SetFrom("manhtd0707@gmail.com");
                $mail->Subject = mb_encode_mimeheader("Gửi lại mật khẩu của bạn", "UTF-8", "B");
                $mail->Body = "Mật khẩu của bạn là: $password ";
                $mail->AddAddress("$emailForgot");
                if ($mail->Send()) {
                    $_SESSION['sendEmailSuccess'] = true;
                    return header("Location:?action=index");
                }
            }
        }
    }
}
