<?php

namespace XuongOop\Salessa\Controllers\Client;

use XuongOop\Salessa\Commons\Controller;
use XuongOop\Salessa\Models\User;
use Rakit\Validation\Validator;

class RegisterController extends Controller
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function showFormRegister()
    {
        avoid_login();

        $this->renderViewClient('register');
    }

    public function register()
    {
        avoid_login();

        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name'                  => 'required|max:50',
            'email'                 => 'required|email',
            'password'              => 'required|min:6',
            'confirm_password'      => 'required|same:password',
            'avatar'                => 'uploaded_file:0,2M,png,jpg,jpeg',
            'type'                  => 'required|in:admin,member',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('auth/register'));
            exit;
        } else {
            $data = [
                'name'      => $_POST['name'],
                'email'     => $_POST['email'],
                'password'  => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'type'      => 'member',
            ];

            if (isset($_FILES['avatar']) && $_FILES['avatar']['size'] > 0) {
                $from = $_FILES['avatar']['tmp_name'];
                $to = 'assets/uploads/' . time() . '_' . $_FILES['avatar']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['avatar'] = $to;
                } else {
                    $_SESSION['errors']['avatar'] = 'Upload không thành công';

                    header('Location: ' . url('auth/register'));
                    exit;
                }
            }

            $this->user->insert($data);

            $_SESSION['user'] = $data;
            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Đăng ký thành công';

            header('Location: ' . url());
            exit;
        }
    }
}
