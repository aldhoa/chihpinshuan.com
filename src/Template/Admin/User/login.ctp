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
      width: 50%;
  }

  button:hover {
      opacity: 0.8;
  }

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

<!--top-Header-messaages-->
<div class="btn-group rightzero"> 
  <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a>
  <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> 
  <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a>
  <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> 
</div>
<!--close-top-Header-messaages--> 

<div id="content">
  

  <h2>Cripy Pork Jerky</h2>

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

