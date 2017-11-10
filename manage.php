<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> .: File Management :. : File Management system @ IST.SUT </title>

  <!-- Header -->
  <?php include("header.php"); ?>

</head>

<body>

  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Files<span>@ist</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"> ยินดีต้อนรับคุณ <i class="fa fa-user fa-3" aria-hidden="true"></i> [_username] </a></li>
          <li class="btn-trial"><a href="#footer">ออกจากระบบ</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->

  <!--Modal box-->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Login</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <div class="form-group">
              <form name="" id="loginForm">
                <div class="form-group has-feedback">
                  <!----- username -------------->
                  <input class="form-control" placeholder="Username" id="loginid" type="text" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <!----- password -------------->
                  <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="checkbox icheck">
                      <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                              </label>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button type="button" class="btn btn-green btn-block btn-flat" onclick="userlogin()">Sign In</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--/ Modal box-->


  <!--Cta-->
  <section id="cta-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

          <h2 class="text-center">Download</h2>
          <p class="cta-2-txt"> รายงานการประชุมคณะกรรมการประจำสำนักวิชาเทคโนโลยีสังคม </p>


          <table class="table table-hover table-responsive">
            <thead>
              <tr>
                <th>
                  ลำดับที่
                </th>
                <th>
                  รายละเอียด
                </th>
                <th>
                  วันที่
                </th>
                <th>
                  Download
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  1
                </td>
                <td>
                  รายงานการประชุมคณะกรรมการ exmple 1
                </td>
                <td>
                  Fri, 10 Nov 2017 
                </td>
                <td>
                  <button type="button" class="btn btn-default">  <i class="fa fa-file fa-2" aria-hidden="true">            </i></button>
                  <button type="button" class="btn btn-primary" href="edit.php">      <i class="fa fa-pencil-square-o fa-2" aria-hidden="true"> </i></button>
                  <button type="button" class="btn btn-danger">       <i class="fa fa-trash fa-2" aria-hidden="true">           </i></button>
                </td>
              </tr>
              <tr>
                <td>
                  1
                </td>
                <td>
                  รายงานการประชุมคณะกรรมการ exmple 1
                </td>
                <td>
                  Fri, 10 Nov 2017 
                </td>
                <td>
                  <button type="button" class="btn btn-default">  <i class="fa fa-file fa-2" aria-hidden="true">            </i></button>
                  <button type="button" class="btn btn-primary" href="edit.php">      <i class="fa fa-pencil-square-o fa-2" aria-hidden="true"> </i></button>
                  <button type="button" class="btn btn-danger">       <i class="fa fa-trash fa-2" aria-hidden="true">           </i></button>
                </td>
              </tr>
              <tr>
                <td>
                  1
                </td>
                <td>
                  รายงานการประชุมคณะกรรมการ exmple 1
                </td>
                <td>
                  Fri, 10 Nov 2017 
                </td>
                <td>
                  <button type="button" class="btn btn-default">  <i class="fa fa-file fa-2" aria-hidden="true">            </i></button>
                  <button type="button" class="btn btn-primary" href="edit.php">      <i class="fa fa-pencil-square-o fa-2" aria-hidden="true"> </i></button>
                  <button type="button" class="btn btn-danger">       <i class="fa fa-trash fa-2" aria-hidden="true">           </i></button>
                </td>
              </tr>
            </tbody>
          </table>
          

        </div>
      </div>
    </div>
  </section>
  <!--/ Cta-->

    <!-- Header -->
  <?php include("footer.php"); ?>



</body>

</html>
