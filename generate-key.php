<?php include('inc/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SyntaxScripts Support | Verification Key Generator</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/support.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5 mb-3">
                <h1>Verification Key Generator</h1>
            </div>
            <div class="row">
                <div class="col-3">

                </div>
                <div class="col-6">
                    <div class="input-group mb-3 text-center">
                        <input type="text" class="form-control" id="verifKey" value="<?php echo generateVerifyKey(); ?>" readonly>
                        <button onclick="copyKey()" class="btn btn-outline-secondary" type="button" id="button-addon2">Copy Key</button>
                    </div>
                    <div class="mt-5 alert alert-success" id="keyCopied" style="display: none;">
                        Key copied!
                    </div>
                </div>
                <div class="col-3">

                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script>
            function copyKey() {
            /* Get the text field */
            var copyText = document.getElementById("verifKey");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.value);
            
            $('#keyCopied').show();

            }
        </script>
    </body>
</html>
