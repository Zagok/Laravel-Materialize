<style>
    body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
    }

    main {
    flex: 1 0 auto;
    }
     </style>
<nav style="height: 65px; margin-bottom: 150px;" class="blue-grey darken-4">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo"><img style="height: 50px; margin-left: 20px; margin-top: 8px;" src="./Resources/MM.png"></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href='{{route(150)}}'>150CC</a></li>
            <li><a href='{{route(200)}}'>200CC</a></li>
            <li><a href='{{route(250)}}'>250CC</a></li>
          </ul>
        </div>
      </nav>