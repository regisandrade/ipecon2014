 <style type="text/css">
   #mapa{
      width: 1010px;
      height: 450px;
      border:1px solid #000;
      position: relative;
      top: 100px;
   }
</style>
<script type="text/javascript">
  var map;

  function initialize() {
      var latlng = new google.maps.LatLng(<?php echo LATITUDE; ?>, <?php echo LONGITUDE; ?>);

      var options = {
          zoom: 5,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
      };

      map = new google.maps.Map(document.getElementById("mapa"), options);
  }

  initialize();
</script>
<div id="pagina-interna">
  <div class="internaCtrl">
    <div class="titulo">Localização</div>
    <div class="texto">
      <div id="mapa"></div>
    </div>
  </div>
</div>