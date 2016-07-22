@extends('layouts.contacto')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"> 
                   <h1>La mejor comida para mascotas al norte de Bogotà</h1> 
                </div>

                <div class="panel-body">


        <div class="row">
			<div id="map"></div>
        </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tambien puedes hacer tus pedidos por whatsapp</div>

                <div class="panel-body">
                   <a href="whatsapp://send?text=http://www.petdelivery.co" data-action="share/whatsapp/share">
                   	305-7064871
                   </a> 
                   <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwww.petdelivery.co&layout=button_count&size=small&mobile_iframe=true&appId=500499870153256&width=91&height=20" width="91" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                </div>
            </div>
        </div>
    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="row text-center" style="background:black;color;white;">

       Todos los  derechos reservados
        
    </div>
</footer>
@endsection
