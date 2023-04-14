<?php
session_start();

// daftar akun pengguna
$accounts = array(
    'admin' => array(
        'password' => 'admin',
        'role' => 'admin'
    ),
    'alby' => array(
        'password' => 'alby',
        'role' => 'employee'
    ),
    'user' => array(
        'password' => 'user',
        'role' => 'customer'
    )
);

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if (isset($accounts[$username]) && $accounts[$username]['password'] === $password && $accounts[$username]['role'] === $role) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;
        $_SESSION['access'] = true;

        if ($role === 'admin') {
            header('Location: admin/index.php');
        } else if ($role === 'employee') {
            header('Location: employee/index.php');
        } else {
            header('Location: customer/index.php');
        }
        exit();
    } else {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Warning!</strong> Username OR Password doesnt match.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
}
?>



<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="login.css" />
    <link href="gambar/icon aff (1).png" rel="icon"/>
</head>

<body>
    <div class="login-page bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-5 d-md-block">
                                <img src="gambar/book.jpg" width="100%">
                            </div>
                            <div class="col-md-7 pe-0">
                                <div class="form-left h-100 py-5 px-5">
                                    <h1>Login</h1>
                                    <br>
                                    <form method="POST" action="" class="row g-4">
                                        <div class="col-12">
                                            <label>Username<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                                <input type="text" class="form-control" name="username" placeholder="Enter username" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label>Password<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                                                <input type="password" class="form-control" name="password" placeholder="Enter Password" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label>Role<span class="text-danger">*</span></label>
                                            <select class="form-select" aria-label="Default select example" name="role">
                                                <option value="admin">Admin</option>
                                                <option value="employee">Employee</option>
                                                <option value="customer">Customer</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary px-4 float-end" name="login" Value="Login">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>