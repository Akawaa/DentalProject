<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->

        <!-- .row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Questionnaire survey
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
                <a href="<?= site_url('/Patient_c/');?>">
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

        <?php $id_survey= (isset($id_survey)) ? $id_survey : NULL;

        if($id_survey!=null): ?>
            <h1>Thank you for your participation</h1>
        <?php else: ?>
            <!-- FORM -->
            <?php echo form_open('Patient_c/confirmSurvey') ?>
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p style="font-size: 1.5em"><strong>Welcome to your personal account.</strong></p>
                            <p style="font-size: 1em">Here, you can visualize your next appointment, all your invoices as well as your dental file. And to reply
                                to the questionnaire survey.</p>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Question 1
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                            <label>How do you know our dental office ?</label>
                            <br>
                            <label class="radio-inline">
                                <input type="radio" name="first_survey" id="first_survey1" value="friend">Friend
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="first_survey" id="first_survey2" value="family">Family
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="first_survey" id="first_survey3" value="internet">Internet
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="first_survey" id="first_survey3" value="advertisement">Advertisement in a magazine
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="first_survey" id="first_survey4" value="other">Other
                            </label>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <?php echo form_error('first_survey','<small style="color: red;"><i>',"</i></small>");?>
                            </div>
                         </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Question 2
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>How do you make your appointments ?</label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="second_survey" id="second_survey1" value="phone">Phone
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="second_survey" id="second_survey2" value="family">Into our dental office
                                    </label>
                                </div>
                             </div>
                            <div class="panel-footer">
                                <?php echo form_error('second_survey','<small style="color: red;"><i>',"</i></small>");?>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Question 3
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>On a scale from 0 to 5, how much do you rate the easiness to make an appointment and the provided information ?</label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="third_survey" id="third_survey1" value="0">0 - Not satisfactory at all
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="third_survey" id="third_survey2" value="1">1 - Very unsatisfactory
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="third_survey" id="third_survey3" value="2">2 - Unsatisfactory
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="third_survey" id="third_survey4" value="3">3 - Moderatly satisfactory
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="third_survey" id="third_survey5" value="4">4 - Satisfactory
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="third_survey" id="third_survey6" value="5">5 - Hightly satisfactory
                                    </label>
                                </div>
                             </div>
                            <div class="panel-footer">
                                <?php echo form_error('third_survey','<small style="color: red;"><i>',"</i></small>");?>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Question 4
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>On a scale from 0 to 5, how much do you rate the quality of your welcome ?</label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="fourth_survey" id="fourth_survey1" value="0">0 - Not satisfactory at all
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="fourth_survey" id="fourth_survey2" value="1">1 - Very unsatisfactory
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="fourth_survey" id="fourth_survey3" value="2">2 - Unsatisfactory
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="fourth_survey" id="fourth_survey4" value="3">3 - Moderatly satisfactory
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="fourth_survey" id="fourth_survey5" value="4">4 - Satisfactory
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="fourth_survey" id="fourth_survey6" value="5">5 - Hightly satisfactory
                                    </label>
                                </div>
                             </div>
                            <div class="panel-footer">
                                <?php echo form_error('fourth_survey','<small style="color: red;"><i>',"</i></small>");?>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Question 5
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>On a scale from 0 to 5, how much do you rate the friendliness of our staff ?</label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="fifth_survey" id="fifth_survey1" value="0">0 - Not satisfactory at all
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="fifth_survey" id="fifth_survey2" value="1">1 - Very unsatisfactory
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="fifth_survey" id="fifth_survey3" value="2">2 - Unsatisfactory
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="fifth_survey" id="fifth_survey4" value="3">3 - Moderatly satisfactory
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="fifth_survey" id="fifth_survey5" value="4">4 - Satisfactory
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="fifth_survey" id="fifth_survey6" value="5">5 - Hightly satisfactory
                                    </label>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <?php echo form_error('fifth_survey','<small style="color: red;"><i>',"</i></small>");?>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Question 6
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>On a scale from 0 to 5, how much do you rate the cleanness of the examination rooms ?</label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="sixth_survey" id="sixth_survey1" value="0">0 - Not satisfactory at all
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="sixth_survey" id="sixth_survey2" value="1">1 - Very unsatisfactory
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="sixth_survey" id="sixth_survey3" value="2">2 - Unsatisfactory
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="sixth_survey" id="sixth_survey4" value="3">3 - Moderatly satisfactory
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="sixth_survey" id="sixth_survey5" value="4">4 - Satisfactory
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="sixth_survey" id="sixth_survey6" value="5">5 - Hightly satisfactory
                                    </label>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <?php echo form_error('sixth_survey','<small style="color: red;"><i>',"</i></small>");?>
                            </div>
                        </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Question 7
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>On a scale from 0 to 5, how much do you rate experience of our staff ?</label>
                                        <br>
                                        <label class="radio-inline">
                                            <input type="radio" name="seventh_survey" id="seventh_survey1" value="0">0 - Not satisfactory at all
                                        </label>
                                        <br>
                                        <label class="radio-inline">
                                            <input type="radio" name="seventh_survey" id="seventh_survey2" value="1">1 - Very unsatisfactory
                                        </label>
                                        <br>
                                        <label class="radio-inline">
                                            <input type="radio" name="seventh_survey" id="seventh_survey3" value="2">2 - Unsatisfactory
                                        </label>
                                        <br>
                                        <label class="radio-inline">
                                            <input type="radio" name="seventh_survey" id="seventh_survey4" value="3">3 - Moderatly satisfactory
                                        </label>
                                        <br>
                                        <label class="radio-inline">
                                            <input type="radio" name="seventh_survey" id="seventh_survey5" value="4">4 - Satisfactory
                                        </label>
                                        <br>
                                        <label class="radio-inline">
                                            <input type="radio" name="seventh_survey" id="seventh_survey6" value="5">5 - Hightly satisfactory
                                        </label>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <?php echo form_error('seventh_survey','<small style="color: red;"><i>',"</i></small>");?>
                                </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Question 8
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>On a scale from 0 to 5, how much do you rate globally your appointment(s) ?</label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="eighth_survey" id="eighth_survey1" value="0">0 - Not satisfactory at all
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="eighth_survey" id="eighth_survey2" value="1">1 - Very unsatisfactory
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="eighth_survey" id="eighth_survey3" value="2">2 - Unsatisfactory
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="eighth_survey" id="eighth_survey4" value="3">3 - Moderatly satisfactory
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="eighth_survey" id="eighth_survey5" value="4">4 - Satisfactory
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="eighth_survey" id="eighth_survey6" value="5">5 - Hightly satisfactory
                                    </label>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <?php echo form_error('eighth_survey','<small style="color: red;"><i>',"</i></small>");?>
                            </div>
                        </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Question 9
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>On a scale from 0 to 5, how much do you rate accessibility/ergonomic of our web site ?</label>
                                        <br>
                                        <label class="radio-inline">
                                            <input type="radio" name="ninth_survey" id="ninth_survey1" value="0">0 - Not satisfactory at all
                                        </label>
                                        <br>
                                        <label class="radio-inline">
                                            <input type="radio" name="ninth_survey" id="ninth_survey2" value="1">1 - Very unsatisfactory
                                        </label>
                                        <br>
                                        <label class="radio-inline">
                                            <input type="radio" name="ninth_survey" id="ninth_survey3" value="2">2 - Unsatisfactory
                                        </label>
                                        <br>
                                        <label class="radio-inline">
                                            <input type="radio" name="ninth_survey" id="ninth_survey4" value="3">3 - Moderatly satisfactory
                                        </label>
                                        <br>
                                        <label class="radio-inline">
                                            <input type="radio" name="ninth_survey" id="ninth_survey5" value="4">4 - Satisfactory
                                        </label>
                                        <br>
                                        <label class="radio-inline">
                                            <input type="radio" name="ninth_survey" id="ninth_survey6" value="5">5 - Hightly satisfactory
                                        </label>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <?php echo form_error('ninth_survey','<small style="color: red;"><i>',"</i></small>");?>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Question 10 (<i>Optional</i>)
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Do you have additional remarks ?</label>
                                        <textarea  class="form-control" name="tenth_survey"><?= set_value('tenth_survey') ?></textarea>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <?php echo form_error('tenth_survey','<small style="color: red;"><i>',"</i></small>");?>
                                </div>
                            </div>

                    </div>

                    <div class="col-lg-5 col-lg-offset-5">
                        <input type="submit" class="btn btn-lg btn-success" style="padding: 0.6em 3em;" value="Confirm">
                    </div>
                </div>

            </div>
            <?php echo form_close() ?>
            <!-- FORM -->
        <?php endif;?>

