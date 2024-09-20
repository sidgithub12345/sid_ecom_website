

<?php 

session_start();

include('../server/connection.php');

if(isset( $_SESSION['admin_logged_in'])){
    header('location: index.php');
    exit;
}

if(isset($_POST['login_btn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


    $stmt = $conn->prepare("SELECT admin_id,admin_name,admin_email,admin_password FROM admins WHERE admin_email= ? AND admin_password = ? LIMIT 1");

    $stmt->bind_param('ss',$email,$password);

    if($stmt->execute()){
        $stmt->bind_result($admin_id,$admin_name,$admin_email,$admin_password);
        $stmt->store_result();

        if($stmt->num_rows() == 1){
            $stmt->fetch();

            $_SESSION['admin_id'] = $admin_id;
            $_SESSION['admin_name'] = $admin_name;
            $_SESSION['admin_email'] = $admin_email;
            $_SESSION['admin_logged_in'] = true;


            header('location: index.php?login_success=logged in successfully');


        }else{
            header('location: login.php?error=could not verify your account');
        }
    }else{
        header('location: login.php?error=something went wrong');
    }




}







?>










<?php include('header.php'); ?>




    <!-- login -->
    <div class="mx-auto container">
        <form enctype="multipart/form-data" action="login.php" method="POST" id="login-form">
                <p style="color:red" class="text-center"><?php if(isset($_GET['error'])) { echo $_GET['error']; } ?></p>
                <div class="form-group mt-2">
                    <label >Email</label>
                    <input type="text" class="form-control" id="login-email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="login-password" name="password" placeholder="Password" required>
                </div>

                <div class="form-group mt-3">
                    <input type="submit" class="btn btn-primary" name="login_btn" value="login">
                </div>
        </form>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>