<?php


$meta = [
    'title' => 'Daxil ol - ' . setting('title')
];

if (post('submit')){
    $email = post('email');
    $password = post('password');

    if (!$email){
        $error = 'E-poçt ünvanınızı qeyd edin!';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = 'E-poçt ünvanınızı düzgün qeyd edin!';
    }elseif(!$password){
        $error = 'Şifrənizi qeyd edin!';
    }else{
        $query = $db->prepare('SELECT * FROM user WHERE user_email = :email');
        $query->execute([
            'email' => $email
        ]);
        $row = $query->fetch(PDO::FETCH_ASSOC);

        if ($row){
            $password_verify = password_verify($password, $row['user_password']);
            if ($password_verify){
                $success = 'Daxil oldunuz, 2 saniyədən sonra İdarəetmə Paneli-nə yönləndiriləcəksiniz.';

                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['user_email'] = $row['user_email'];

                header('Refresh:2;url=' . admin_url());
            }else{
                $error = 'Şifrənizi düzgün qeyd edin!';
            }
        }else{
            $error = 'Belə bir istifadəçi yoxdur. Yenidən cəhd edin!';
        }
    }
}


require admin_view('signin');
?>