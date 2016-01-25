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
        <?php echo form_open('Staff_c/confirmEditStaff') ?>

        <div class="col-lg-6">
            <h2 class="page-header">Information</h2>


            <div class="form-group">
                <label>Post</label>
                <select class="form-control" name="post_staff">
                    <?php foreach ($post as $key=>$value) : ?>
                        <option value="<?php echo $key; ?>" <?php if($key==$id_post) echo 'selected' ;?>>
                            <?= $value ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <?php echo form_error('post_staff','<small style="color: red;"><i>',"</i></small>");?>


            <input type="hidden" name="idStaff" value="<?= $id_staff; ?>">

            <div class="form-group">
                <label for="name_staff" >Name</label>
                <input type="text" class="form-control" name="name_staff" value="<?= set_value('name_staff',$staff_name);?>">
            </div>
            <?php echo form_error('name_staff','<small style="color: red;"><i>',"</i></small>");?>

            <div class="form-group">
                <label for="surname_staff">Surname</label>
                <input type="text" class="form-control" name="surname_staff" value="<?= set_value('surname_staff',$staff_surname);?>">
            </div>
            <?php echo form_error('surname_staff','<small style="color: red;"><i>',"</i></small>");?>

        </div>

        <div class="col-lg-6">
            <h2 class="page-header">Contact</h2>
            <div class="form-group">
                <label for="phone_staff">Phone</label>
                <input type="text" class="form-control" name="phone_staff" value="<?= set_value('phone_staff',$staff_phone);?>">
            </div>
            <?php echo form_error('phone_staff','<small style="color: red;"><i>',"</i></small>");?>

            <div class="form-group">
                <label for="email_staff">Email</label>
                <input type="text" class="form-control" name="email_staff" value="<?= set_value('email_staff',$staff_email);?>">
            </div>
            <?php echo form_error('email_staff','<small style="color: red;"><i>',"</i></small>");?>
        </div>

        <div class="col-lg-5 col-lg-offset-5">
            <input type="submit" class="btn btn-lg btn-success" style="padding: 10px 55px;" value="Update">

        </div>

<?php echo form_close() ?>
<!-- FORM -->
