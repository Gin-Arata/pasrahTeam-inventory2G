<?php

if(isset($_SESSION['userRole'])){
    if($_SESSION['userRole'] == 'admin'){
        header('Location: '.BASEURL2.'/admin');
        exit;
    }
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

class ForgotPass extends Controller
{
    public function index()
    {
        $this->view('reset_password/forgotPassword');
    }

    public function prosesEmailPass()
    {
        $mail = new PHPMailer(true);
        $emailUser = $_POST['email'];

        $data['user'] = $this->model('User_model')->getUserByEmail($emailUser);

        if ($data['user'] != null) {
            $mail->isSMTP();
            $mail->Host = PHPMAILER_HOST;
            $mail->SMTPAuth = true;
            $mail->Username = PHPMAILER_USER;
            $mail->Password = PHPMAILER_PASS;
            $mail->SMTPSecure = PHPMAILER::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('gacorazan143@gmail.com', 'Admin Inventaris');

            $mail->addAddress($data['user']['email_user']);

            $mail->isHTML(true);

            $mail->Subject = 'Reset Password Inventaris';
            $mail->Body = "
            Klik Link Berikut untuk Me-Reset Password Anda : <br>
            <a href='" . BASEURL2 . "/forgotpass/resetpass/" . $data['user']['id_user'] . "'>Reset Password</a>
            ";

            $mail->send();

            Flasher::setFlash('Reset Password', 'Berhasil!', 'Silahkan cek email Anda', 'success');
            header('Location: ' . BASEURL2 . '/login');
        } else {
            Flasher::setFlash('Reset Password', 'Gagal!', 'Silahkan tulis email Anda dengan benar', 'danger');
            header('Location: ' . BASEURL2 . '/forgotpass');
            exit;
        }
    }

    public function resetPass($id)
    {
        $data['id_user'] = $id;
        $this->view('reset_password/resetPassword', $data);
    }

    public function prosesResetPass($id_user)
    {
        $password = $_POST['password'];
        $password_confirmation = $_POST['password_confirmation'];

        if ($password == $password_confirmation) {
            if ($this->model('User_model')->resetPass($id_user, $password) > 0) {
                Flasher::setFlash('Reset Password', 'Berhasil!', 'Password Anda berhasil direset', 'success');
                header('Location: ' . BASEURL2 . '/login');
                exit;
            } else {
                Flasher::setFlash('Reset Password', 'Gagal!', '', 'danger');
                header('Location: ' . BASEURL2 . '/forgotpass/resetpass/' . $id_user);
                exit;
            }
        } else {
            Flasher::setFlash('Reset Password', 'Gagal!', 'Password Anda Tidak Sesuai', 'danger');
            header('Location: ' . BASEURL2 . '/forgotpass/resetpass/' . $id_user);
            exit;
        }
    }
}