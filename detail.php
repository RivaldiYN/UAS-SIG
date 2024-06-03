<?php include "header.php"; ?>
<?php
$id = $_GET['id_titik'];
include_once "ambildata_id.php";
$obj = json_decode($data);
$id_titik = "";
$kabupaten_kota = "";
$ibukota = "";
$luas_wilayah = "";
$status = "";
$titik_panas = "";
$curah_hujan = "";
$lat = "";
$long = "";
foreach ($obj->results as $item) {
  $id_titik .= $item->id_titik;
  $kabupaten_kota .= $item->kabupaten_kota;
  $ibukota .= $item->ibukota;
  $luas_wilayah .= $item->luas_wilayah;
  $status .= $item->status;
  $titik_panas .= $item->titik_panas;
  $curah_hujan .= $item->curah_hujan;
  $lat .= $item->latitude;
  $long .= $item->longitude;
}

$title = "Detail dan Lokasi : " . $kabupaten_kota;
//include_once "header.php"; 
?>

<!-- start banner Area -->
<section class="about-banner relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Detail Informasi Geografis <br> Provinsi Riau
        </h1>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->
<!-- Start about-info Area -->
<section class="about-info-area section-gap">
  <div class="container" style="padding-top: 120px;">
    <div class="row">
      <div class="col-md-7" data-aos="fade-up" data-aos-delay="200">
        <div class="panel panel-info panel-dashboard">
          <div class="panel-heading centered">
            <h2 class="panel-title"><strong>Informasi Bancana Alam </strong></h4>
          </div>
          <div class="panel-body">
            <table class="table">
              <tr>
                <!-- <th>Item</th> -->
                <th>Detail</th>
              </tr>
              <tr>
                <td>Kabupaten/Kota</td>
                <td>
                  <h5><?php echo $kabupaten_kota ?></h5>
                </td>
              </tr>
              <tr>
                <td>Ibukota</td>
                <td>
                  <h5><?php echo $ibukota ?></h5>
                </td>
              </tr>
              <tr>
                <td>Luas Wilayah(Km2)</td>
                <td>
                  <h5><?php echo $luas_wilayah ?></h5>
                </td>
              </tr>
              <tr>
                <td>Status</td>
                <td>
                  <h5><?php echo $status ?></h5>
                </td>
              </tr>
              <tr>
                <td>Titik Panas</td>
                <td>
                  <h5><?php echo $titik_panas ?></h5>
                </td>
              </tr>
              <tr>
                <td>Curah Hujan</td>
                <td>
                  <h5><?php echo $curah_hujan ?></h5>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-5" data-aos="zoom-in">
        <div class="panel panel-info panel-dashboard">
          <div class="panel-heading centered">
            <h2 class="panel-title"><strong>Lokasi</strong></h4>
          </div>
          <div class="panel-body">
            <div id="" style="width:100%;height:300px;">
              <!-- QGIS awal -->
        <div id="map2"></div>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap"></script>

        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script><script src="js/L.Control.Locate.min.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="js/leaflet-control-geocoder.Geocoder.js"></script>
        <script src="js/leaflet-search.js"></script>
        <script src="data/ADM_KOTAKAB_2021_1.js"></script>
        <script src="data/TitikApiHotspotseIndonesiaTahun2019_2.js"></script>
        <script>
        var highlightLayer;
        function highlightFeature(e) {
            highlightLayer = e.target;

            if (e.target.feature.geometry.type === 'LineString') {
              highlightLayer.setStyle({
                color: '#ffff00',
              });
            } else {
              highlightLayer.setStyle({
                fillColor: '#ffff00',
                fillOpacity: 1
              });
            }
            highlightLayer.openPopup();
        }
        var map2 = L.map('map2', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-0.8851869149161379,99.76133609709281],[1.9109643323497907,105.2110054521842]]);
        var hash = new L.Hash(map2);
        map2.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        L.control.locate({locateOptions: {maxZoom: 19}}).addTo(map2);
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map2.createPane('pane_GoogleRoad_0');
        map2.getPane('pane_GoogleRoad_0').style.zIndex = 400;
        var layer_GoogleRoad_0 = L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            pane: 'pane_GoogleRoad_0',
            opacity: 1.0,
            attribution: '<a href="https://www.google.at/permissions/geoguidelines/attr-guide.html">Map data ©2015 Google</a>',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 20
        });
        layer_GoogleRoad_0;
        map2.addLayer(layer_GoogleRoad_0);
        function pop_ADM_KOTAKAB_2021_1(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker.link(feature.properties['WADMKK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker.link(feature.properties['WADMPR'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_ADM_KOTAKAB_2021_1_0(feature) {
            switch(String(feature.properties['WADMKK'])) {
                case 'Bengkalis':
                    return {
                pane: 'pane_ADM_KOTAKAB_2021_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(219,119,175,1.0)',
                interactive: true,
            }
                    break;
                case 'Indragiri Hilir':
                    return {
                pane: 'pane_ADM_KOTAKAB_2021_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(186,221,97,1.0)',
                interactive: true,
            }
                    break;
                case 'Indragiri Hulu':
                    return {
                pane: 'pane_ADM_KOTAKAB_2021_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(205,21,208,1.0)',
                interactive: true,
            }
                    break;
                case 'Kampar':
                    return {
                pane: 'pane_ADM_KOTAKAB_2021_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(207,187,99,1.0)',
                interactive: true,
            }
                    break;
                case 'Kepulauan Meranti':
                    return {
                pane: 'pane_ADM_KOTAKAB_2021_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(96,237,190,1.0)',
                interactive: true,
            }
                    break;
                case 'Kota Dumai':
                    return {
                pane: 'pane_ADM_KOTAKAB_2021_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(149,61,231,1.0)',
                interactive: true,
            }
                    break;
                case 'Kota Pekanbaru':
                    return {
                pane: 'pane_ADM_KOTAKAB_2021_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(22,101,213,1.0)',
                interactive: true,
            }
                    break;
                case 'Kuantan Singingi':
                    return {
                pane: 'pane_ADM_KOTAKAB_2021_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(232,84,99,1.0)',
                interactive: true,
            }
                    break;
                case 'Pelalawan':
                    return {
                pane: 'pane_ADM_KOTAKAB_2021_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(18,181,203,1.0)',
                interactive: true,
            }
                    break;
                case 'Rokan Hilir':
                    return {
                pane: 'pane_ADM_KOTAKAB_2021_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(68,60,221,1.0)',
                interactive: true,
            }
                    break;
                case 'Rokan Hulu':
                    return {
                pane: 'pane_ADM_KOTAKAB_2021_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(72,219,19,1.0)',
                interactive: true,
            }
                    break;
                case 'Siak':
                    return {
                pane: 'pane_ADM_KOTAKAB_2021_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(240,171,135,1.0)',
                interactive: true,
            }
                    break;
                default:
                    return {
                pane: 'pane_ADM_KOTAKAB_2021_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(56,228,91,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map2.createPane('pane_ADM_KOTAKAB_2021_1');
        map2.getPane('pane_ADM_KOTAKAB_2021_1').style.zIndex = 401;
        map2.getPane('pane_ADM_KOTAKAB_2021_1').style['mix-blend-mode'] = 'normal';
        var layer_ADM_KOTAKAB_2021_1 = new L.geoJson(json_ADM_KOTAKAB_2021_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_ADM_KOTAKAB_2021_1',
            layerName: 'layer_ADM_KOTAKAB_2021_1',
            pane: 'pane_ADM_KOTAKAB_2021_1',
            onEachFeature: pop_ADM_KOTAKAB_2021_1,
            style: style_ADM_KOTAKAB_2021_1_0,
        });
        bounds_group.addLayer(layer_ADM_KOTAKAB_2021_1);
        map2.addLayer(layer_ADM_KOTAKAB_2021_1);
        function pop_TitikApiHotspotseIndonesiaTahun2019_2(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['FID'] !== null ? autolinker.link(feature.properties['FID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Lat'] !== null ? autolinker.link(feature.properties['Lat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Long'] !== null ? autolinker.link(feature.properties['Long'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Tgl_ddmmyy'] !== null ? autolinker.link(feature.properties['Tgl_ddmmyy'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Time_UTC'] !== null ? autolinker.link(feature.properties['Time_UTC'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TK__'] !== null ? autolinker.link(feature.properties['TK__'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Satelit'] !== null ? autolinker.link(feature.properties['Satelit'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kabupaten'] !== null ? autolinker.link(feature.properties['Kabupaten'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Provinsi'] !== null ? autolinker.link(feature.properties['Provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_TitikApiHotspotseIndonesiaTahun2019_2_0() {
            return {
                pane: 'pane_TitikApiHotspotseIndonesiaTahun2019_2',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(232,0,58,1.0)',
                interactive: true,
            }
        }
        map2.createPane('pane_TitikApiHotspotseIndonesiaTahun2019_2');
        map2.getPane('pane_TitikApiHotspotseIndonesiaTahun2019_2').style.zIndex = 402;
        map2.getPane('pane_TitikApiHotspotseIndonesiaTahun2019_2').style['mix-blend-mode'] = 'normal';
        var layer_TitikApiHotspotseIndonesiaTahun2019_2 = new L.geoJson(json_TitikApiHotspotseIndonesiaTahun2019_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_TitikApiHotspotseIndonesiaTahun2019_2',
            layerName: 'layer_TitikApiHotspotseIndonesiaTahun2019_2',
            pane: 'pane_TitikApiHotspotseIndonesiaTahun2019_2',
            onEachFeature: pop_TitikApiHotspotseIndonesiaTahun2019_2,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_TitikApiHotspotseIndonesiaTahun2019_2_0(feature));
            },
        });
        bounds_group.addLayer(layer_TitikApiHotspotseIndonesiaTahun2019_2);
        map2.addLayer(layer_TitikApiHotspotseIndonesiaTahun2019_2);
        var osmGeocoder = new L.Control.Geocoder({
            collapsed: true,
            position: 'topleft',
            text: 'Search',
            title: 'Testing'
        }).addTo(map2);
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .className += ' fa fa-search';
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .title += 'Search for a place';
        var baseMaps = {};
        L.control.layers(baseMaps,{'<img src="legend/TitikApiHotspotseIndonesiaTahun2019_2.png" /> Titik Api Hotspot se-Indonesia Tahun 2019': layer_TitikApiHotspotseIndonesiaTahun2019_2,'ADM_KOTAKAB_2021<br /><table><tr><td style="text-align: center;"><img src="legend/ADM_KOTAKAB_2021_1_Bengkalis0.png" /></td><td>Bengkalis</td></tr><tr><td style="text-align: center;"><img src="legend/ADM_KOTAKAB_2021_1_IndragiriHilir1.png" /></td><td>Indragiri Hilir</td></tr><tr><td style="text-align: center;"><img src="legend/ADM_KOTAKAB_2021_1_IndragiriHulu2.png" /></td><td>Indragiri Hulu</td></tr><tr><td style="text-align: center;"><img src="legend/ADM_KOTAKAB_2021_1_Kampar3.png" /></td><td>Kampar</td></tr><tr><td style="text-align: center;"><img src="legend/ADM_KOTAKAB_2021_1_KepulauanMeranti4.png" /></td><td>Kepulauan Meranti</td></tr><tr><td style="text-align: center;"><img src="legend/ADM_KOTAKAB_2021_1_KotaDumai5.png" /></td><td>Kota Dumai</td></tr><tr><td style="text-align: center;"><img src="legend/ADM_KOTAKAB_2021_1_KotaPekanbaru6.png" /></td><td>Kota Pekanbaru</td></tr><tr><td style="text-align: center;"><img src="legend/ADM_KOTAKAB_2021_1_KuantanSingingi7.png" /></td><td>Kuantan Singingi</td></tr><tr><td style="text-align: center;"><img src="legend/ADM_KOTAKAB_2021_1_Pelalawan8.png" /></td><td>Pelalawan</td></tr><tr><td style="text-align: center;"><img src="legend/ADM_KOTAKAB_2021_1_RokanHilir9.png" /></td><td>Rokan Hilir</td></tr><tr><td style="text-align: center;"><img src="legend/ADM_KOTAKAB_2021_1_RokanHulu10.png" /></td><td>Rokan Hulu</td></tr><tr><td style="text-align: center;"><img src="legend/ADM_KOTAKAB_2021_1_Siak11.png" /></td><td>Siak</td></tr><tr><td style="text-align: center;"><img src="legend/ADM_KOTAKAB_2021_1_12.png" /></td><td></td></tr></table>': layer_ADM_KOTAKAB_2021_1,"Google Road": layer_GoogleRoad_0,}).addTo(map);
        setBounds();
        var i = 0;
        layer_ADM_KOTAKAB_2021_1.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['WADMKK'] !== null?String('<div style="color: #323232; font-size: 10pt; font-family: \'Open Sans\', sans-serif;">' + layer.feature.properties['WADMKK']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_ADM_KOTAKAB_2021_1'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        map2.addControl(new L.Control.Search({
            layer: layer_ADM_KOTAKAB_2021_1,
            initial: false,
            hideMarkerOnCollapse: true,
            propertyName: 'WADMKK'}));
        document.getElementsByClassName('search-button')[0].className +=
         ' fa fa-binoculars';
        resetLabels([layer_ADM_KOTAKAB_2021_1]);
        map2.on("zoomend", function(){
            resetLabels([layer_ADM_KOTAKAB_2021_1]);
        });
        map2.on("layeradd", function(){
            resetLabels([layer_ADM_KOTAKAB_2021_1]);
        });
        map2.on("layerremove", function(){
            resetLabels([layer_ADM_KOTAKAB_2021_1]);
        });

        var marker = L.marker([$lat, $long]).addTo(map2);
        var circle = L.circle([$lat, $long], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 500
}).addTo(map2);

        </script>

          <!-- QGIS akhir -->
            
            </div>
          </div>
        </div>
      </div>
</section>
<!-- End about-info Area -->
<?php include "footer.php"; ?>