        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card" style="margin-top: 150px;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Login</h5>
                            <form action="<?php echo $action ?>" method="post">
                                <div class="form-label-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control"  required autofocus>
                                </div>
                                <div class="form-label-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control"  required>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Login" style=" background-color: black; margin-top: 30px;">Login</button>
                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>