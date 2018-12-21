        <section>
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-9 col-lg-offset-1 col-md-9 col-md-offset-1">
                <h1>REGISTRATION FORM</h1>  
                <form action="includes/signup.inc.php" method="POST">
                    <p><font color="red">* Required Fields</font></p> 
                <div class="form-group">
                    <label for="firstname">First name</label>
                    <div>
                            <input type="text" name="first" placeholder="Firstname" required>
                    </div>
                    </div>
                     <div class="form-group">
                    <label for= "lastname">Last name</label>
                    <div>
                       <input type="text" name="last" placeholder="Lastname" required>
                    </div>
                    </div>
                    <div class="form-group">
                         <label for="e-mail">E-mail</label>
  <div> <input type="text" name="email" placeholder="E-mail" required></div>
                   </div>
                    <div class="form-group">
                         <label for= "password">Password</label>
                         <div>
                        <input type="password" name="pwd" placeholder="Password" required>
                        <div>
                    </div>
               <div class="form-group">
                         <label for= "password">Re-enter Password</label>
                       <div> <input type="password" name="rpwd" placeholder="Password" required><div>
                    </div>
                    <div class="form-group">
                        <label for= "uid">Username</label>
                        <div><input type="text" name="uid" placeholder="Username" required></div>
                    </div>
                    <div class="form-group">
                         <label for= "contactno.">Contact Number</label>
                       <div> <input type="tel" name="cno" class="form-control" placeholder="enter your contact no."required>
                    </div>
                    <div class="control-group">
                    <label class="control-label">Address</label>
                    <div class="controls">
                        <div><input id="address-line1" name="address"  type="text" placeholder="address" class="form-control input-xlarge" required></div>
                        <p class="help-block">Address</p>
                    </div>
                </div>
                    <div class="form-group">
                         <label for= "pincode">Pincode</label>
                       <div> <input type="tel" class="form-control" name="pincode" placeholder="enter pincode"required>
                    </div>
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                   </form>
                  </div>
            </div>
        </div>
  </div>

</section>