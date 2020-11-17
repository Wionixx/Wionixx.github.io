<!DOCTYPE HTML>
<html>
 <head>
 	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
<link rel = "stylesheet" href = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"> </script>
<script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  $( function() {
    $( "#menu" ).menu();
  } );
  $( function() {
    var handle = $( "#custom-handle" );
    $( "#slider" ).slider({
      create: function() {
        handle.text( $( this ).slider( "value" ) );
      },
      slide: function( event, ui ) {
        handle.text( ui.value );
      }
    });
  } );
  </script>
  <style>
  .ui-menu { width: 150px; }
  #custom-handle {
    width: 3em;
    height: 1.6em;
    top: 50%;
    margin-top: -.8em;
    text-align: center;
    line-height: 1.6em;
  }
  </style>
</head>
<body>
	<!-- Accordion -->
<div id="accordion">
  <h3>Adidas</h3>
  <div>
    <p>
    Adidas — немецкая транснациональная компания по производству спортивной одежды, обуви и аксессуаров. Это крупнейший производитель спортивной одежды в Европе и второй по величине в мире после Nike.
    </p>
  </div>
  <h3>Nike</h3>
  <div>
    <p>
    Nike — американская транснациональная компания, специализирующаяся на спортивной одежде и обуви.Nike продает свою продукцию под собственным брендом, а также под марками Nike Golf, Nike Pro, Nike +, Air Jordan, Nike Blazers, Air Force 1, Nike Dunk, Air Max, Foamposite, Nike Skateboarding, Nike CR7, Hurley International, Converse.
    </p>
  </div>
  <h3>Gucci</h3>
  <div>
    <p>
Gucci — итальянский дом моды, производитель одежды, парфюмерии, аксессуаров и текстиля. Принадлежит французскому конгломерату Kering, является второй крупнейшей по объёмам продаж компанией-производителем модных товаров после LVMH.
    </p>
  </div>
  <h3>Puma</h3>
  <div>
    <p>
    Компания Puma — немецкий производитель спортивной обуви, одежды и аксессуаров, один из мировых лидеров в своей отрасли. Изделия из Германии пользуются сегодня огромным спросом. И это неудивительно. Высокое качество, долговечность, отличные эстетические характеристики — это далеко не полный перечень преимуществ немецкой продукции, принадлежащей известному бренду. Приобрести изделия Puma — сегодня не проблема.
    </p>
    <p>
    </p>
  </div>
  <br><br>




<!-- Slider -->
<div id="slider">
  <div id="custom-handle" class="ui-slider-handle"></div>
</div>
<br><br>
</body>
</html>
