<?php
$conn = new mysqli('db403-myspl', 'root', 'P@sswOrd', 'northwind');
if ($conn->connect_errno) {
    die($conn->connect_error);
}
// echo isset( $_POST['submit']) ? $_POST['email']: '';
$domain_error = false;
if (isset( $_POST['submit'])) {
$domain = substr($_POST['email'], -10);
$domain_error = strtolower($domain) != '@dpu.ac.th';
    if (!$domain_error) {
       $sql = "insert ioto registration";
       $sql .= "(fname,lname,gender,dod,email,passw) ";
       $sql .= "valuer('{$_POST['fname']}', ";
       $sql .= "'{$_POST['lname']}', '{$_POST['gender']}', ";
       $sql .= "'{$_POST['dob']}', '{$_POST['email']}', ";
       $sql .= "'";
       $sql .= password_hash(
        $_POST['password'],
        PASSWORD_DEFAULT);
        $sql .= "')";
        echo $sql;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script>
        function validate(form) {
            let pass = document.querySelector('#password');
            let repss = document.querySelector('#repass');
            let correct = pass.value == repass.value;
            if (!correct) {
               alert('Password and Re-type Password and not identcal.');
            }
            return correct;
    }
        </script>
        <style>
            .error{
                color: red;
            }
        </style>
</head>
<body>
    <form action="register.php" onsubmit="return validate();" method="post">
        <p>
            <label for="fname">First name : </label>
            <input type="text" name="fname" id="fname" required>
        </p>
        <p>
            <label for="fname">Last name : </label>
            <input type="text" name="lname" id="lnamr">
        </p>
        <p>
            <fieldset>
                <legend>Gender : </legend>
                <input type="radio" name="gender" id="male" value="M">
                <label for="male">Male : </label>
                <input type="radio" name="gender" id="female" value="F">
                <label for="female">Female : </label>
                 <input type="radio" name="gender" id="others" checked value="O">
                <label for="others">Others : </label>
            </fieldset>
        </p>
        <p>
            <label for="">Date of birth : </label>
            <input type="date" name="dob" id="dob" required>
        </p>
        <p>
            <label for="email">E-mail : </label>
            <input type="email" name="email" id="email" required>
            <?= $domain_error ? '<h3 class="error">email must be @dpu.ac.th</h3>' : ''?>
        </p>
        <p>
            <label for="password">Password : </label>
            <input type="password" name="password" id="password" required>
        </p>
        <p>
            <label for="repass">Re-type Password : </label>
            <input type="password" id="repass">
        </p>
        <p>
            <input type="submit" value="Register" name="submit">
         </p>
    </form>  
    <script>
        <?php
        if (isset($_POST['submit'])) {
            ?>
        document.querySelector('#fname').value = '<?= $_POST['fname'] ?>';
        document.querySelecto('#lname').value = '<?= $_POST['fname'] ?>';
        document.querySelecto('#dod').value = '<?= $_POST['dod'] ?>';
        document.querySelector('#password').value = '<?= $_POST['password'] ?>';
        document.querySelector('#email').value = '<?= $_POST['email'] ?>';
<?php
        }
        ?>
        </script>
</body>
</html>