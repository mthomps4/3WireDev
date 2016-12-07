  <header id="main-header">

      <div class="nametag">
        <h1 id="title">Matthew <br> Thompson</h1>
        <span id="tag-line">Designer • Developer • Builder</span>
      </div>

      <!-- <ul id="main-nav" style="display: visable;"> -->
      <ul id="main-nav" ng-controller="active">
        <a href="/" ng-class="{ active: isActive('/') }" class="menuItem">About</a>
        <a href="/contact" ng-class="{ active: isActive('/contact') }" class="menuItem">Contact</a>
        <a href="/projects" ng-class="{ active: isActive('/projects') }" class="menuItem">Projects</a>
        <a href="/blog" ng-class="{ active: isActive('/blog') }" class="menuItem">3WireBuild</a>
      </ul>

  </header> <!--main-navigation-->
