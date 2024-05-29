<?php include "includes/logheader.php" ?>

   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="210" src="images/logo/logo.png" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                    <h2 style="text-align:center;"> Admin Login Portal</h2><br>
                     <form>
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Users </label>
                              <select id="users" name ="user" >
                              <option selected>Choose...</option>
                              <option value="admin">Admin</option>
                              <option value="manager">Manager</option>
                              <option value="accountant">Accountant</option>
                            </select>
                           </div>
                           <div class="field">
                              <label class="label_field">Email</label>
                              <input type="email" name="email" placeholder=" Enter Email Here" />
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="password" placeholder="Enter Password" />
                           </div>
                           <div class="field">
                           <label class="label_field">Re-Password</label>
                              <input type="password" name="password1" placeholder="Enter Password" />
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt" type = "submit">Register New User</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <?php include "includes/logfooter.php" ?>