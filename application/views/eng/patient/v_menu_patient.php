<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" onclick="return false;">South Sea Dental</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown profile-->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?= $this->session->userdata('patient_surname'); ?>  <?= strtoupper($this->session->userdata('patient_name')); ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?= site_url('Patient_c/profil_patient/'.$this->session->userdata('id_staff')); ?>"><i class="fa fa-user fa-fw"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?= site_url('/Users_c/deconnection');?>"><i class="fa fa-sign-out fa-fw"></i> Log Out</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?= site_url('/Patient_c/index');?>"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="<?= site_url('/Patient_c/filePatient');?>"><i class="fa fa-stethoscope fa-fw"></i> Your file</a>
                        </li>
                        <li>
                            <a href="<?= site_url('/Patient_c/invoice');?>"><i class="fa fa-fw fa-money"></i> Invoices</a>
                        </li>
                        <li>
                            <a href="<?= site_url('/Patient_c/survey');?>"><i class="fa fa-fw fa-question-circle"></i> Questionnaire Survey</a>
                        </li>
                        <li>
                            <a href="<?= site_url('/Home_c');?>" target="_blank"><i class="fa fa-fw fa-sign-in"></i> Web Site</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>