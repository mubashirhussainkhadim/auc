     <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
<li> <a href="../index.php">Home site</a>

                 
                

                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                        
                        <?php
                         $name=$_SESSION['name'];
                          echo  $name;
                            ?> 

                             <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="view_profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                    
                        <li class="divider"></li>
                        <li>
                            <a href="./logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->



            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="./index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>

                   



                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Profile<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="./view_profile.php">View Profile</a>
                            </li>
                            <li>
                                <a href="./update_profile.php">Update profile</a>
                            </li>
                           
                        </ul>
                    </li>




                    
                   
                    <li>
                        <a href="view_post.php"><i class="fa fa-fw fa-file"></i> Bid history </a>
                    </li>

                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>