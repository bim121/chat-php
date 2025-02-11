<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create new accout</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="./css/signup.css">
    </head>
<body>
    <div class="signup-form">
        <form method="post" action="">
            <div class="form-header">
                <h2>Sign up</h2>
                <p>Fill out this form and start chating with your friends.</p>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="user_name" placeholder="Example: cat121">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="user_pass" placeholder="Enter password">
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name="user_email" placeholder="someone@site.com">
            </div>
            <div class="form-group">
                <label>Country</label>
                <select class="form-control" name="user_country">
                    <option disabled="">Select a Country</option>
                    <option>Pakistan</option>
                    <option>United States of America</option>
                    <option>India</option>
                    <option>UK</option>
                    <option>Bangladesh</option>
                    <option>France</option>
                </select>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <select class="form-control" name="user_gender">
                    <option disabled="">Select a Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Others</option>
                </select>
            </div>
            <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox">I accept the <a href="#">
                    Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign up</button>
            </div>
            <?php include("./signup_user.php"); ?>
        </form>
        <div class="text-center small" style="color: #67428B;">Already have an account?  <a href="
            signin.php">Sign here</a></div>
    </div>
</body>
</html>