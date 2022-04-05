@extends('plantilla')
@section('content')

<ul class="sidenav" id="mobile-demo">
        <li><a href="150">150CC</a></li>
        <li><a href="200">200CC</a></li>
        <li><a href="250">250CC</a></li>
      </ul>
      <section>
        <div class="col s12 m7">
          <div class="card horizontal grey lighten-2" style="margin-bottom: 180px;">
            <div class="card-image">
              <img src="./Resources/MotoPortada.jpg">
            </div>
            <div class="card-stacked">
              <div class="card-content ">
                <p style="text-align: center; font-size: larger; margin-top: 110px;">En esta página podrás encontrar varios modelos de motocicletas con su respectiva información que puedan ser de tu agrado.</p>
                <p style="text-align: center; font-size: larger;">_______________________________</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="center-align">
        <div class="row">
          <div class="container">
            <div class="card col l12" style="margin-bottom: 100px;">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="./Resources/MotoPortada150.png">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">150CC<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">150CC<i class="material-icons right">close</i></span>
                <p>Una motoneta de 150 cc alcanza una velocidad máxima de 60 mph y rinde hasta 70 mpg, mientras que una motoneta de 250 cc puede alcanzar 75 mph pero rendirá menos de 60 mpg.</p>
              </div>
            </div>
            <div class="card col l12" style="margin-bottom: 100px;">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="./Resources/MotoPortada200.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">200CC<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">200CC<i class="material-icons right">close</i></span>
                <p>La velocidad máxima oscila en los 130 km/h, siempre dependiendo de factores tales como el viento y demás. La filosofía hindú, en cuanto a las motos tiene tres pilares: confiabilidad, robustez y consumo.</p>
              </div>
            </div>  
            <div class="card col l12" style="margin-bottom: 100px;">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="./Resources/MotoPortada250.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">250CC<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">250CC<i class="material-icons right">close</i></span>
                <p>Acelera de 0-100 km/h en unos 8 segundos y llega a alcanzar una velocidad máxima entre 160-170 km/h, lo que permite un uso más cómdo en autopista y viajes más largos. Entre las 250 cc es sin duda la mejor en este aspecto.</p>
              </div>
            </div>
          </div>  
        </div>
    </section>

@endsection