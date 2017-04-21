<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid" id="navContainer">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-book"></span> Book Store</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

            </ul>

            <ul class="nav navbar-nav navbar-right">

                <?php session_start();

                if($_SESSION['login']){
                    ?>
                       <li><a href="template/dashboard.php" id="btnDashboard"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a> </li>
                    <li><a href="#" id="btnLogout"><span class="glyphicon glyphicon-log-out"></span> Logout</a> </li>
                    <?php
                }else{
                    ?>
                    <li>
                        <a href="#" class="pull-right" data-toggle="modal" data-target="#loginModal">
                            <span class="glyphicon glyphicon-log-in"></span> Login</a>
                    </li>
                    <li><a href="#" class="pull-right" data-toggle="modal" data-target="#regModal">
                         <span class="glyphicon glyphicon-registration-mark"></span> Register</a>
                    </li>

                    <?php
                }
                ?>

                <!---<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>--->
            </ul>
        </div><!-- /.navbar-collapse -->




    </div>


    <!-- /.container-fluid -->



</nav>

<!-- Modal for Login -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Login</h4>
            </div>
            <div class="modal-body">

                <form role="form">
                    <div id="loginInfo"></div>
                    <div class="form-group">
                        <label for="loginUserName" class="control-label">User Name</label>
                        <input type="text" class="form-control" name="loginUserName" id="loginUserName">
                    </div>
                    <div class="form-group">
                        <label for="loginPassword" class="control-label">Password</label>
                        <input type="password" class="form-control" name="loginPassword" id="loginPassword">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="btnLogin">LOGIN</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Register -->
<div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Register</h4>
            </div>
            <div class="modal-body">

                <form role="form">
                    <div id="registerInfo"></div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="regUserName" id="regUserName" placeholder="User Name">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="regPassword" id="regPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="regConPassword" id="regConPassword" placeholder="Confirm password">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="btnRegister">REGISTER</button>
            </div>
        </div>
    </div>
</div>