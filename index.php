<?php 

    include('inc/functions.php'); 

    if(isset($_POST['login'])) {
        login();
    }

    if(isLoggedIn()) {
        header("location: dashboard");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SyntaxScripts Support | Verification</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/support.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <?php include('inc/nav.php'); ?>
        <!-- Page content-->
        <div class="container">
            <?php if(isset($_GET['customer']) && $_GET['customer'] == "notfound") { echo '<div class="mt-5 alert alert-danger"><b>Oops,</b> we could not verify that you are a customer. If this is a mistake, create a ticket in our discord!</div>'; } ?>
            <?php if(isset($_GET['verified']) && $_GET['verified'] == "no") { echo '<div class="mt-5 alert alert-danger"><b>Oops,</b> you cannot access that page until you have verified yourself!</div>'; } ?>
            <div class="text-center mt-5 mb-3">
                <h1>Verification</h1>
                <p>In order to proceed to the documentation, you must first verify that you're a verified customer. This is just a small pirate prevention system that helps us protect you (our valued customers) and our hard work.</p>
                <p>Please enter your discord username exactly as it appears when you made the purchase <b>and</b> the verification key that you received with your purchase of one of our scripts. If you didn't receive one (our mistake) reach out to us in our discord by creating a support ticket.</p>
            </div>
            <div class="mt-5">
                <div class="row">
                    <div class="col-3">

                    </div>
                    <div class="col-6">
                        <form action="index" method="POST">
                            <div class="mb-3">
                                <label>Discord#0000</label>
                                <input type="text" name="discord" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label>Verification Key</label>
                                <input type="text" name="verification_key" class="form-control" >
                            </div>
                            <div class="mb-3 float-end">
                                <input type="submit" name="login" class="btn btn-info" value="Verify">
                            </div>
                        </form>
                    </div>
                    <div class="col-3">

                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
