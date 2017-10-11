<!DOCTYPE html>

<html lang="en">
    <head>

    </head>
    <!-- END HEAD -->
    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index.html">
                <img src="../assets/pages/img/logo1.png"  height="35%" width="35%"alt="" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">

                <h3>Sign Up Verification</h3>
                <p> Hi {{ $user->username }} Please Click on the below button to verify your Account </p>
                <div class="form-actions">
                    <button type="submit" id="register-submit-btn" class="btn green pull-right"> <a href="{{ url('vendor_verification/'.$user->id) }}"> verification </a></button>
                </div>
            <!-- END REGISTRATION FORM -->
        </div>
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class="copyright"> 2017 &copy; Woxi Software LLP - OFFERAPP </div>
        <!-- END COPYRIGHT -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->

    </body>

</html>
