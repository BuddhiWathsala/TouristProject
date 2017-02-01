<style>
.navbar-fixed-left {
  width: 200px;
  position: fixed;
  border-radius: 0;
  height: 100%;
}

.navbar-fixed-left .navbar-nav > li {
  float: none;  /* Cancel default li float: left */
  width:100%;
}

.navbar-fixed-left + .container {
  padding-left: 160px;
}

/* On using dropdown menu (To right shift popuped) */
.navbar-fixed-left .navbar-nav > li > .dropdown-menu {
  margin-top: -50px;

}
</style>

<div class="navbar navbar-inverse navbar-fixed-left" id="myLeftNavbar">


  <ul class="nav navbar-nav">
    <li><a href="#"><i class="fa fa-user fa-fw" aria-hidden="true"></i>&nbsp Profile</a></li>
    <li><a href="#"><i class="fa fa-sliders" aria-hidden="true"></i>&nbsp Main Slider</a></li>
   <li>
    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-camera-retro fa-sm"></i>&nbsp Photogrphers <i class="fa fa-fw fa-caret-down"></i></a>

    <ul id="demo" class="collapse">
        <li>
            HTML
        </li>
        <li>
            CSS
        </li>
        <li>
            PHP
        </li>
    </ul>
      </li>

   <li><a href="#">Link4</a></li>
   <li><a href="#">Link5</a></li>
  </ul>
</div>
