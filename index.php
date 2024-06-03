<?php include "header.php"; ?>

<!-- start banner Area -->
<section class="banner-area relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row fullscreen align-items-center justify-content-between">
      <div class="col-lg-6 col-md-6 banner-left point">
        <br><br><br>
        <h3 class="text-white">SISTEM INFORMASI GEOGRAFIS</h3>
        <h3 class="text-white">PEMETAAN DAN ANALISIS KERAWANAN BENCANA ALAM DI INDONESIA</h3>
        <p class="text-white">Platform online ini akan membantu anda untuk melihat daerah-daerah yang rentan terhadap bencana alam di Indonesia. Dengan menggunakan data spasial, aplikasi ini menampilkan peta interaktif yang menunjukkan lokasi dan informasi tentang berbagai bencana alam. Dengan fitur web yang mudah digunakan, Anda dapat menjelajahi dan memahami risiko bencana alam dengan lebih baik untuk mempersiapkan langkah-langkah mitigasi yang tepat.</p>
        <a href="#pesebaran" class="btn btn-info text-uppercase">Lihat Detail</a>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- End banner Area -->
<main id="main">
  <!-- Start about-info Area -->
  <section class="price-area section-gap">
    <section id="pesebaran" class="about-info-area section-gap">
      <div class="container">
        <div class="title text-center">
          <h1 class="mb-10">PETA PERSEBARAN <br> BENCANA ALAM</h1>
          <br>
        </div>
        <div class="row align-items-center">
          <!-- QGIS awal -->
        <div id="map"></div>
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
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-0.8851869149161379,99.76133609709281],[1.9109643323497907,105.2110054521842]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        L.control.locate({locateOptions: {maxZoom: 19}}).addTo(map);
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map.createPane('pane_GoogleRoad_0');
        map.getPane('pane_GoogleRoad_0').style.zIndex = 400;
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
        map.addLayer(layer_GoogleRoad_0);
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
        map.createPane('pane_ADM_KOTAKAB_2021_1');
        map.getPane('pane_ADM_KOTAKAB_2021_1').style.zIndex = 401;
        map.getPane('pane_ADM_KOTAKAB_2021_1').style['mix-blend-mode'] = 'normal';
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
        map.addLayer(layer_ADM_KOTAKAB_2021_1);
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
        map.createPane('pane_TitikApiHotspotseIndonesiaTahun2019_2');
        map.getPane('pane_TitikApiHotspotseIndonesiaTahun2019_2').style.zIndex = 402;
        map.getPane('pane_TitikApiHotspotseIndonesiaTahun2019_2').style['mix-blend-mode'] = 'normal';
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
        map.addLayer(layer_TitikApiHotspotseIndonesiaTahun2019_2);
        var osmGeocoder = new L.Control.Geocoder({
            collapsed: true,
            position: 'topleft',
            text: 'Search',
            title: 'Testing'
        }).addTo(map);
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
        map.addControl(new L.Control.Search({
            layer: layer_ADM_KOTAKAB_2021_1,
            initial: false,
            hideMarkerOnCollapse: true,
            propertyName: 'WADMKK'}));
        document.getElementsByClassName('search-button')[0].className +=
         ' fa fa-binoculars';
        resetLabels([layer_ADM_KOTAKAB_2021_1]);
        map.on("zoomend", function(){
            resetLabels([layer_ADM_KOTAKAB_2021_1]);
        });
        map.on("layeradd", function(){
            resetLabels([layer_ADM_KOTAKAB_2021_1]);
        });
        map.on("layerremove", function(){
            resetLabels([layer_ADM_KOTAKAB_2021_1]);
        });

        </script>

          <!-- QGIS akhir -->
        </div>
      </div>
      <div class="container">
      <a href="qgis2web/index.html" style="position:relative;" class="mt-2 btn btn-info text-uppercase">Lihat Detail</a>
      </div>
    </section>
    <!-- End about-info Area -->
    <!-- Start price Area -->
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-8">
          <div class="title text-center">
            <h1 class="mb-10">JANGKAUAN PETA</h1>
            <p>Jangkauan peta dalam website ini mencakup seluruh wilayah Indonesia, dari Sabang hingga Merauke. Pengguna dapat melihat detail dari daerah-daerah yang rentan terhadap berbagai bencana alam seperti gempa bumi, banjir, ataupun longsor di pulau-pulau besar seperti Jawa, Sumatera, Kalimantan, Sulawesi, dan Papua. Selain itu, peta juga mencakup kepulauan kecil dan daerah terpencil di seluruh nusantara. Dengan cakupan yang luas ini, pengguna dapat memperoleh pemahaman yang holistik tentang kerawanan bencana alam di seluruh Indonesia.</p>
          </div>
        </div>
      </div>
      <!-- End other-issue Area -->
    </div>
    </div> <!-- ======= Counts Section ======= -->
    <section id="counts">
      <div class="container">
        <div class="title text-center">
          <h1 class="mb-10">JUMLAH TINGKAT <br>PERSEBARAN TITIK PANAS</h1>
          <br>
        </div>
        <div class="row d-flex justify-content-center">
          <?php
          include_once "countsma.php";
          $obj = json_decode($data);
          $ti_ap = "";
          foreach ($obj->results as $item) {
            $ti_ap .= $item->ta;
          }
          ?>
          <div class="text-center">
            <h1><span data-toggle="counter-up"><?php echo $ti_ap; ?></span></h1>
            <br>
          </div>
        </div>
      </div>
    </section><!-- End Counts Section -->
    </div>
  </section>
  <?php include "footer.php"; ?>