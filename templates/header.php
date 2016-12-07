  <header id="main-header">

    <button id="menuButton">menu</button>
    <ul id="mobile-nav" style="display: none;"  ng-controller="active">
        <a ng-class="{ active: isActive('/') }" class="mobileNavItem" href="/"><li>About</li></a>
        <a ng-class="{ active: isActive('/contact') }" class="mobileNavItem" href="/contact"><li>Contact</li></a>
        <a ng-class="{ active: isActive('/projects') }" class="mobileNavItem" href="/projects"><li>Projects</li></a>
        <a ng-class="{ active: isActive('/blog') }" class="mobileNavItem" href="/blog"><li>3WireBuild</li></a>
    </ul>

      <div class="nametag">
        <h1 id="title">Matthew <br> Thompson</h1>
        <span id="tag-line">Designer • Developer • Builder</span>
      </div>

      <ul id="main-nav" style="display: none;">
        <a href="/"><li>About</li></a>
        <a href="/contact"><li>Contact</li></a>
        <a href="/projects"><li>Projects</li></a>
        <a href="/blog"><li>3WireBuild</li></a>
      </ul>

  </header> <!--main-navigation-->
