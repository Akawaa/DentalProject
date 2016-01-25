<img class="im_co" src="<?php echo base_url();?>assets/images/im_co.gif">

<div class="col-lg-6 col-md-5 col-xs-10 col-lg-offset-3">
    <div class="col-lg-8 col-lg-offset-2">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="active connection"><a href="#patient" data-toggle="tab">Patient</a>
            </li>
            <li class="connection"><a href="#staff" data-toggle="tab">Staff</a>
            </li>
        </ul>
    </div>

    <div class="col-lg-12">
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade in active" id="patient">
                <form method="post" action="<?=site_url("Users_c/ConnectionViewPatient")?>">

                    <h2>Sign In</h2>

                    <input id="register-input" type="text" name="username" placeholder="Username">

                    <input id="register-input" type="password" name="password" placeholder="Password">

                    <input class="register-button" type="submit" value="Login">

                    <?= validation_errors(); ?>

                </form>
            </div>

            <div class="tab-pane fade" id="staff">
                <form method="post" action="<?=site_url("Users_c/ConnectionViewStaff")?>">

                    <h2>Sign In</h2>

                    <input id="register-input" type="text" name="username" placeholder="Username">

                    <input id="register-input" type="password" name="password" placeholder="Password">

                    <input class="register-button" type="submit" value="Login">

                    <?= validation_errors(); ?>

                </form>
            </div>
        </div>
    </div>
</div>
