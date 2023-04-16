<html>
  <head>
    <style>
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-image:url(thh.jpg);
        background-repeat: no-repeat;
    background-size:1700px,auto;
    }
      #form-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      table {
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
      }
      td {
        padding: 20px;
        font-size: 20px;
        font-weight:bold;
      }
      .in {
        border: none;
        border-bottom: 2px solid #ccc;
        padding: 8px;
        width: 100%;
        font-size: 16px;
      }
      .in:focus {
        outline: none;
        border-bottom-color: #8db8d9;
      }
      .sub,
      .sub:hover {
        background-color: #8db8d9;
        border: none;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        padding: 10px 20px;
      }
      .reset,
      .reset:hover {
        background-color: #8db8d9;
        border: none;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        padding: 10px 20px;
      }
      .sub:hover,
      .reset:hover,
      .in:hover {
        background-color:antiquewhite;
      }
    </style>
  </head>
  <body>
    <div id="form-wrapper">
      <h1>REGISTER</h1>
      <form name="f1" action="re.php" method="post" enctype="multipart/form-data">
        <table>
          <tr>
            <td>Name</td>
            <td>
              <input id="lname" class="in" type="text" name="nm" placeholder="Enter your name" max="4" maxlength="30" required>
            </td>
          </tr>
          <tr>
            <td>Email Id</td>
            <td>
              <input id="em" class="in" type="email" name="em" placeholder="Enter mail id" max="4" maxlength="24" required>
            </td>
          </tr>
          <tr>
            <td>Password</td>
            <td>
              <input id="pd" class="in" type="password" name="pass" placeholder="Enter password" maxlength="12" required>
            </td>
          </tr>
          <tr>
            <td>Confirm Password</td>
            <td>
              <input id="pd" class="in" type="password" name="cpass" placeholder="Enter above  password" maxlength="12" required>
            </td>
          </tr>
          <tr>
            <td>
              <input class="sub" type="submit" name="submit">
            </td>
            <td>
              <input class="reset" type="reset" name="reset">
            </td>
            <td>
              <a href="index.php">Login
            </td>
          </tr>
        </table>
      </form>
    </div>
  </body>
