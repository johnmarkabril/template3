        <nav class="navbar no-margin" style="border-radius: 0px; background-color: #670a12;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="container">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" style="font-size: 16px;font-weight: bold;" id="nav-log">
                        <li><a class="hvr-buzz glyphicon glyphicon-home" href="index.php";"> Home</a></li>
                        <li class="dropdown">
                                  <a class="hvr-buzz glyphicon glyphicon-th-list" href="menu.php#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Menu<span class="caret"></span></a>
                             <ul class="dropdown-menu">
                                    <li><a class="hvr-buzz" href="menu.php"> All Menu</a></li>
                                    <li><a class="hvr-buzz" href="menu.php?categs=Packages">Packages</a></li>
                                    <li><a class="hvr-buzz" href="menu.php?categs=Seafoods">Meat</a></li>
                                    <li><a class="hvr-buzz" href="menu.php?categs=Pasta">Pasta</a></li>
                                    <li><a class="hvr-buzz" href="menu.php?categs=Dessert">Desert</a></li>
                                    <li><a class="hvr-buzz" href="menu.php?categs=Drinks">Drinks</a></li>
                             </ul>
                         </li>
                        <li><a class="hvr-buzz glyphicon glyphicon-calendar" href="event.php";"> Event</a></li>
                        <li><a class="hvr-buzz glyphicon glyphicon-tags" href="reservation.php" ;"> Reservation</a></li>
                        <li><a class="hvr-buzz glyphicon glyphicon-envelope" href="contact.php" ;"> Contact</a></li>
                        <li><a class="hvr-buzz glyphicon glyphicon-log-in" href="" ;" data-toggle="modal" data-target="#myModal"> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="image/logomain.jpg" class="img-responsive" style="width:100%;" />
                    <div class="form-group" style="padding-top: 10px;">
                    <div class="modal-header">
                        <center><h4><i class="fa fa-user"></i> Login</h4></center>
                    </div>
                    </div>
                 <form method="POST" action="login.php">
                        <div class="form-group">
                        <h4><i class="fa fa-envelope prefix"></i>
                            <label>Email Address</label></h4>
                            <input type="text" name="email" id="email" class="form-control" placeholder="E-mail" required />
                        </div>
                        <div class="form-group">
                         <h4><i class="fa fa-lock prefix"></i>
                            <label>Password</label></h4>
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required />
                        </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-lg" style="width: 100%;" value="Login"/>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>