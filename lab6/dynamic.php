<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Spinner - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  .toggler { width: 500px; height: 200px; }
  #button { padding: .5em 1em; text-decoration: none; }
  #effect { width: 240px; height: 170px; padding: 0.4em; position: relative; }
  #effect h3 { margin: 0; padding: 0.4em; text-align: center; }
   .ui-controlgroup-vertical {
      width: 150px;
    }
    .ui-controlgroup.ui-controlgroup-vertical > button.ui-button,
    .ui-controlgroup.ui-controlgroup-vertical > .ui-controlgroup-label {
      text-align: center;
    }
    #car-type-button {
      width: 120px;
    }
    .ui-controlgroup-horizontal .ui-spinner-input {
      width: 20px;
    }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script>
  $( function() {
    var spinner = $( "#spinner" ).spinner();

    $( "#disable" ).on( "click", function() {
      if ( spinner.spinner( "option", "disabled" ) ) {
        spinner.spinner( "enable" );
      } else {
        spinner.spinner( "disable" );
      }
    });
    $( "#destroy" ).on( "click", function() {
      if ( spinner.spinner( "instance" ) ) {
        spinner.spinner( "destroy" );
      } else {
        spinner.spinner();
      }
    });
    $( "#getvalue" ).on( "click", function() {
      alert( spinner.spinner( "value" ) );
    });
    $( "#setvalue" ).on( "click", function() {
      spinner.spinner( "value", 5 );
    });

    $( "button" ).button();
  } );
  $( function() {
    $( ".controlgroup" ).controlgroup()
    $( ".controlgroup-vertical" ).controlgroup({
      "direction": "vertical"
    });
  } );
  </script>
</head>
<body>
 <center>
<p>
  <label for="spinner">Select a value:</label>
  <input id="spinner" name="value">
</p>

<p>
  <button id="disable">Toggle disable/enable</button>
  <button id="destroy">Toggle widget</button>
</p>

<p>
  <button id="getvalue">Get value</button>
  <button id="setvalue">Set value to 5</button>
</p>
 <hr>
 <script>
  $( function() {
    // run the currently selected effect
    function runEffect() {
      // get effect type from
      var selectedEffect = $( "#effectTypes" ).val();

      // Most effect types need no options passed by default
      var options = {};
      // some effects have required parameters
      if ( selectedEffect === "scale" ) {
        options = { percent: 50 };
      } else if ( selectedEffect === "size" ) {
        options = { to: { width: 200, height: 60 } };
      }

      // Run the effect
      $( "#effect" ).hide( selectedEffect, options, 1000, callback );
    };

    // Callback function to bring a hidden box back
    function callback() {
      setTimeout(function() {
        $( "#effect" ).removeAttr( "style" ).hide().fadeIn();
      }, 1000 );
    };

    // Set effect from select menu value
    $( "#button" ).on( "click", function() {
      runEffect();
    });
  } );
  </script>


<div class="toggler">
  <div id="effect" class="ui-widget-content ui-corner-all">
    <h3 class="ui-widget-header ui-corner-all">Hide</h3>
    <p>
      Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
    </p>
  </div>
</div>

<select name="effects" id="effectTypes">
  <option value="blind">Blind</option>
  <option value="bounce">Bounce</option>
  <option value="clip">Clip</option>
  <option value="drop">Drop</option>
  <option value="explode">Explode</option>
  <option value="fade">Fade</option>
  <option value="fold">Fold</option>
  <option value="highlight">Highlight</option>
  <option value="puff">Puff</option>
  <option value="pulsate">Pulsate</option>
  <option value="scale">Scale</option>
  <option value="shake">Shake</option>
  <option value="size">Size</option>
  <option value="slide">Slide</option>
</select>

<button id="button" class="ui-state-default ui-corner-all">Run Effect</button>
 <hr>

<div class="widget">
  <h1>Controlgroup</h1>
  <fieldset>
    <legend>Rental Car</legend>
    <div class="controlgroup">
      <select id="car-type">
        <option>Compact car</option>
        <option>Midsize car</option>
        <option>Full size car</option>
        <option>SUV</option>
        <option>Luxury</option>
        <option>Truck</option>
        <option>Van</option>
      </select>
      <label for="transmission-standard">Standard</label>
      <input type="radio" name="transmission" id="transmission-standard">
      <label for="transmission-automatic">Automatic</label>
      <input type="radio" name="transmission" id="transmission-automatic">
      <label for="insurance">Insurance</label>
      <input type="checkbox" name="insurance" id="insurance">
      <label for="horizontal-spinner" class="ui-controlgroup-label"># of cars</label>
      <input id="horizontal-spinner" class="ui-spinner-input">
      <button>Book Now!</button>
    </div>
  </fieldset>
  <br>
  <fieldset>
    <legend>Rental Car</legend>
    <div class="controlgroup-vertical">
      <select>
        <option>Compact car</option>
        <option>Midsize car</option>
        <option>Full size car</option>
        <option>SUV</option>
        <option>Luxury</option>
        <option>Truck</option>
        <option>Van</option>
      </select>
      <label for="transmission-standard-v">Standard</label>
      <input type="radio" name="transmission-v" id="transmission-standard-v">
      <label for="transmission-automatic-v">Automatic</label>
      <input type="radio" name="transmission-v" id="transmission-automatic-v">
      <label for="insurance-v">Insurance</label>
      <input type="checkbox" name="insurance" id="insurance-v">
      <label for="vertical-spinner" class="ui-controlgroup-label"># of cars</label>
      <input id="vertical-spinner" class="ui-spinner-input">
      <button id="book">Book Now!</button>
    </div>
  </fieldset>
</div>

<div style="height: 150px; width: 100%;"></div>
<script type="text/javascript">
	var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = dd + '/' + mm + '/' + yyyy;
</script>
<input type="text" size="5">
<input type="submit" id="sub" onclick="alert('Повідомлення отримано '+today)">

</center>
</body>
</html>
