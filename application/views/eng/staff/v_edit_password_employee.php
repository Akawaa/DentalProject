<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->

        <!-- .row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Edit Employee
                </h1>

            </div>
        </div>
        <!-- /.row -->

        <!-- .row -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-clock-o fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <?php date_default_timezone_set('Europe/London');?>
                                <div class="huge hour" id="hour"></div>
                                <div class="day" id="day"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-lg-offset-6">
                <a href="<?= site_url('/Staff_c/settingStaff');?>">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-reply fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Back</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- FORM -->
        <?php echo form_open('Staff_c/confirmEditPasswordStaff') ?>

        <div class="col-lg-6 col-lg-offset-3">
            <h2 class="page-header">Log</h2>

            <input type="hidden" name="idStaff" value="<?= $id_staff; ?>">

            <div class="form-group">
                <label for="pass1_staff">Password</label>
                <input type="password" class="form-control" name="pass1_staff" id="password" value="">
            </div>
            <?php echo form_error('pass1_staff','<small style="color: red;"><i>',"</i></small>");?>


            <div class="form-group">
                <label for="pass2_staff">Confirm password</label>
                <input type="password" class="form-control" name="pass2_staff" id="passwordConfirm" value="">
            </div>
            <?php echo form_error('pass2_staff','<small style="color: red;"><i>',"</i></small>");?>


        </div>


        <div class="col-lg-5 col-lg-offset-5">
            <input type="submit" class="btn btn-lg btn-success" style="padding: 10px 55px;" value="Update">

        </div>

        <?php echo form_close() ?>
        <!-- FORM -->
