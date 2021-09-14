<?php include('../components/header.php'); ?>

    <div class='my-account'>
        <link rel="stylesheet" href="../assets/styles/forgot_password.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <script src="../js/forgot_password.js"></script>
        <div id='myDIV'>Step 1 : Enter your email address</div>
        <!-- OTP request container-->
        <section class='container-wrapper'>
            <header>Forgot Password</header>
            <form action='' method='POST' id='container-1' name='form-mail'>
                <label for='email' class='labeling'> Email Address
                    <input type='text' name='email' id='email' placeholder='Enter your Email address'
                           class='input-style'>
                    <input type='submit' value='Send OTP' id='button1' onclick='checkEmail()'>
                </label>
            </form>
            <form action='#' method='POST' id='container-2'>
                <label for='otp' class='labeling'>OTP
                    <input type='text' id='otp' placeholder='OTP Code' class='input-style' required maxlength='6'>
                    <input type='submit' value='Submit' id='button1'>
                </label>
            </form>
            <a href='login.php' class='return_login'>Return to login</a>
        </section>
    </div>

<?php include('../components/footer.php'); ?>