<?php include "header.php" ?>

    

    <div class="container">

        <!-- Idedam Menu/ Navbar -->
        <?php include "navbar.php" ?>

    </div>

    


    <!--------------------------- account page ------------------------------>

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/image1.png" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">

                            <form id="LoginForm" >
                                <input type="text" placeholder="Username">
                                <input type="password" placeholder="Password">
                                <button type="submit" class="btn">Login</button>
                                <a href="">Forgot password</a>
                            </form>

                            <form id="RegForm" >
                                <input type="text" placeholder="Username">
                                <input type="email" placeholder="Email">
                                <input type="password" placeholder="Password">
                                <button type="submit" class="btn">Register</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
                 
            </div>
        </div>
    </div>
    
  



<?php include "footer.php" ?>