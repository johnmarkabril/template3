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
                        <li><a class="hvr-buzz" href="index.php" style="background-color: #670a12;">Home</a></li>
                        <li><a class="hvr-buzz" href="menu.php" style="background-color: #670a12;">Menu</a></li>
                        <li><a class="hvr-buzz" href="event.php" style="background-color: #670a12;">Event</a></li>
                        <li><a class="hvr-buzz" href="reservation.php" style="background-color: #670a12;">Reservation</a></li>
                        <li><a class="hvr-buzz" href="contact.php" style="background-color: #670a12;">Contact</a></li>
                        <li><a class="hvr-buzz" href="" style="background-color: #670a12;" data-toggle="modal" data-target="#myModal">Login</a></li>
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
                        <h4><center>Please Login</center></h4>
                    </div>
                    <form method="POST" action="login.php">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="E-mail" required />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-lg" style="width: 100%;" value="Login"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>