    <style>
  input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
  }

  button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
  }

  button:hover {
      opacity: 0.8;
  }

  .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
  }

  .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
  }

  .container {
      padding: 16px;
  }

  span.psw {
      float: right;
      padding-top: 16px;
  }
  #content {
    margin-top: 0px;
    padding: 20px;
  }

  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
      span.psw {
         display: block;
         float: none;
      }
      .cancelbtn {
         width: 100%;
      }
  }
  </style>

  <div id="content">
  <h3 style="text-align: center;">Login</h3>
   <?php if(isset($login_error_msg)): ?>
      <div class="form-group has-error">
          <label style="word-break:break-all;" class="col-xs-12 col-sm-12 col-md-12 help-block"><?php echo $login_error_msg?></label>
      </div>                            
      <?php endif; ?>
  <form action="#" method="post" class="form-horizontal">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button type="submit" data-original-title="login">Login</button>
  </form>
  </div>

