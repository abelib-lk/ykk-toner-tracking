<style>
  .logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
  }
</style>

<nav class="navbar-dark bg-dark fixed-top bg-primary" style="padding:0;min-height: 3.5rem">
  <div class="container-fluid mt-2 mb-2">
    <div class="col-lg-12">
      <!--div class="col-md-2 float-left" style="display: flex;">
      <img class="" src="assets/uploads/logo.png" alt="" width="60" height="30">
    </div-->
    <div class="col-md-8 float-left text-white">
        <a class="navbar-brand" href="#">
          <img src="assets/uploads/logo.png" alt="YKK Logo" width="50" height="25">
        </a>
        <large><b>Toner Tracking/Monitoring System</b></large>
      </div>
      <div class="col-md-0 float-right text-white">
        <a href="ajax.php?action=logout" class=" btn btn-outline-success text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
      </div>
    </div>
  </div>

</nav>