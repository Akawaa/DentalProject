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
                        <i class="fa fa-user-md fa-fw"></i> <?php if($this->session->userdata('post_right')==1){echo "Dr";} ?> <?= $this->session->userdata('staff_surname'); ?>  <?= strtoupper($this->session->userdata('staff_name')); ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?= site_url('Staff_c/staffFile/'.$this->session->userdata('id_staff')); ?>"><i class="fa fa-user-md fa-fw"></i> Profile</a>
                        </li>
                        <li><a href="<?= site_url('/Staff_c/settingStaff');?>"><i class="fa fa-gear fa-fw"></i> Settings</a>
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
                            <a href="<?= site_url('/Staff_c/index');?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?= site_url('/Staff_c/appointment');?>"><i class="fa fa-calendar fa-fw"></i> Appointments</a>
                        </li>
                        <li>
                            <a href="<?= site_url('/Staff_c/patientAdmin');?>"><i class="fa fa-database fa-fw"></i> Patients</a>
                        </li>
                        <li>
                            <a href="<?= site_url('/Staff_c/invoiceStaff');?>"><i class="fa fa-fw fa-money"></i> Invoices</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> Documentations<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= site_url('/Staff_c/documentationFilling');?>">Fillings</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('/Staff_c/documentationCrown');?>">Crowns</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('/Staff_c/documentationBrace');?>">Braces</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-plus-square fa-fw"></i> Others<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= site_url('/Staff_c/articles');?>">Articles</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('/Staff_c/gallery');?>"> Gallery</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('/Staff_c/surveyAnswer');?>"> Questionnaire survey</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php if($this->session->userdata('post_right')==1 || $this->session->userdata('post_right')==2 || $this->session->userdata('post_right')==3) :?>
                            <li>
                                <a href="<?= site_url('/Staff_c/settingStaff');?>"><i class="fa fa-fw fa-wrench"></i> Settings</a>
                            </li>
                        <?php endif;?>
                        <li>
                            <a href="<?= site_url('/Home_c');?>" target="_blank"><i class="fa fa-fw fa-sign-in"></i> Web Site</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>