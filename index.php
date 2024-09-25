<?php
    session_start();
    $titre = "Accueil";
    require "./include/header.inc.php";
?>


    <main>
        <h1>Campus Halle aux Farines</h1>
        <section>
            
            <div class="container">

            <div class="left-container">
                <h2>Navigation</h2>
                <div class="input-group-container">
                    <div class="input-group">
                        <div class="input-with-icon">
                            <input id="start" name="start" placeholder="Salle de départ" type="text" />
                            <button class="target-button" id="startButton" type="button">&#128205;</button>
                        </div>
                        <input id="end" name="end" placeholder="Salle d'arrivée" type="text" />
                    </div>
                </div>
                <div class="find-button">
                    <input class="submit" value="Trouver le chemin" onclick="findShortestPath()" type="button" />
                </div>
                
                <div id="error-message-container"></div>
            </div>





              <div class="right-container">

              <div class="buttons-container">
                <button onclick="afficherEtage(1)">&uarr;</button>
                <div id="compteur">0</div>
                <button onclick="afficherEtage(-1)">&darr;</button>
              </div>
              
              
                <div id="etages">
                  <div id="etage0" class="etage">
                  
                    <?php
                    echo '<?xml version="1.0" encoding="UTF-8"?>';
                    ?>

                    <svg id="Calque_0" data-name="Calque 0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1162.45 397.1">
                      <defs>
                        <style>
                          #etage0 .cls-1,#etage0 .cls-2,#etage0 .cls-3,#etage0 .cls-4,#etage0 .cls-5,#etage0 .cls-6,#etage0 .cls-7 {
                            stroke: #1d1d1b;
                            stroke-miterlimit: 10;
                            stroke-width: .25px;
                          }

                          #etage0 .cls-1,#etage0 .cls-8 {
                            fill: none;
                          }

                          #etage0 .cls-9 {
                            letter-spacing: 0em;
                          }

                          #etage0 .cls-10 {
                            letter-spacing: 0em;
                          }

                          #etage0 .cls-11 {
                            letter-spacing: .02em;
                          }

                          #etage0 .cls-12,#etage0 .cls-4 {
                            fill: #f7c5dd;
                          }

                          #etage0 .cls-13 {
                            letter-spacing: -.04em;
                          }

                          #etage0 .cls-2 {
                            fill: #fff;
                          }

                          #etage0 .cls-14 {
                            letter-spacing: -.03em;
                          }

                          #etage0 .cls-15 {
                            letter-spacing: 0em;
                          }

                          #etage0 .cls-16 {
                            letter-spacing: -.06em;
                          }

                          #etage0 .cls-3 {
                            fill: #e94e1b;
                          }

                          #etage0 .cls-17 {
                            letter-spacing: .02em;
                          }

                          #etage0 .cls-18 {
                            letter-spacing: 0em;
                          }

                          #etage0 .cls-19 {
                            letter-spacing: 0em;
                          }

                          #etage0 .cls-5 {
                            fill: #8ecbb5;
                          }

                          #etage0 .cls-6 {
                            fill: #e6332a;
                          }

                          #etage0 .cls-7 {
                            fill: #c8d972;
                          }

                          #etage0 .cls-20 {
                            letter-spacing: 0em;
                          }

                          #etage0 .cls-21 {
                            fill: #1d1d1b;
                            font-family: MyriadPro-Regular, 'Myriad Pro';
                            font-size: 12px;
                          }

                          #etage0 .cls-22 {
                            letter-spacing: -.03em;
                          }

                          #etage0 .cls-23 {
                            letter-spacing: 0em;
                          }

                          #etage0 .cls-24 {
                            letter-spacing: -.07em;
                          }
                        </style>
                      </defs>
                      <line class="cls-2" x1="256.07" y1="170.33" x2="255.24" y2="255.24"/>
                      <rect class="cls-7" x="255.24" y="141.86" width="85.04" height="113.39"/>
                      <rect class="cls-5" x="340.28" y="141.86" width="113.39" height="113.39"/>
                      <rect class="cls-3" x="453.67" y="170.2" width="28.35" height="56.69"/>
                      <rect class="cls-1" x="283.59" y="340.28" width="28.35" height="28.35"/>
                      <rect class="cls-4" x="340.28" y=".13" width="113.39" height="85.04"/>
                      <rect class="cls-4" x="340.28" y="311.94" width="113.39" height="85.04"/>
                      <rect class="cls-5" x="567.05" y="141.86" width="85.04" height="113.39"/>
                      <rect class="cls-5" x="708.79" y="141.86" width="85.04" height="113.39"/>
                      <rect class="cls-4" x="907.21" y=".13" width="85.04" height="85.04"/>
                      <line class="cls-4" x1="255.24" y1=".13" x2="340.28" y2=".13"/>
                      <line class="cls-1" x1="453.67" y1=".13" x2="567.05" y2=".13"/>
                      <line class="cls-1" x1="793.83" y1=".13" x2="907.21" y2=".13"/>
                      <line class="cls-1" x1="992.25" y1=".13" x2="1162.33" y2=".13"/>
                      <line class="cls-1" x1="1162.33" y1="141.86" x2="1162.33" y2=".13"/>
                      <line class="cls-1" x1="992.25" y1="396.98" x2="1048.94" y2="396.98"/>
                      <line class="cls-1" x1="1048.94" y1="255.24" x2="1048.94" y2="396.98"/>
                      <line class="cls-1" x1="907.21" y1="396.98" x2="793.83" y2="396.98"/>
                      <line class="cls-1" x1="567.05" y1="396.98" x2="453.67" y2="396.98"/>
                      <line class="cls-1" x1="283.59" y1="365.79" x2="289.26" y2="365.79"/>
                      <line class="cls-1" x1="289.26" y1="360.12" x2="289.26" y2="365.79"/>
                      <line class="cls-1" x1="294.93" y1="360.12" x2="289.26" y2="360.12"/>
                      <line class="cls-1" x1="294.93" y1="354.46" x2="294.93" y2="360.12"/>
                      <line class="cls-1" x1="300.6" y1="354.46" x2="294.93" y2="354.46"/>
                      <line class="cls-1" x1="300.6" y1="348.79" x2="300.6" y2="354.46"/>
                      <line class="cls-1" x1="306.27" y1="348.79" x2="300.6" y2="348.79"/>
                      <line class="cls-1" x1="306.27" y1="343.12" x2="306.27" y2="348.79"/>
                      <line class="cls-1" x1="311.94" y1="343.12" x2="306.27" y2="343.12"/>
                      <rect class="cls-7" x="907.21" y="311.94" width="85.04" height="85.04"/>
                      <rect class="cls-5" x="907.21" y="141.86" width="85.04" height="113.39"/>
                      <rect class="cls-3" x="878.87" y="170.2" width="28.35" height="56.69"/>
                      <rect class="cls-5" x="1048.94" y="113.51" width="113.39" height="141.73"/>
                      <rect class="cls-2" x="1048.94" y="28.47" width="56.69" height="28.35"/>
                      <rect class="cls-3" x="1105.64" y="28.47" width="28.35" height="28.35"/>
                      <rect class="cls-1" x="283.59" y="28.47" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="283.59" y1="53.98" x2="289.26" y2="53.98"/>
                      <line class="cls-1" x1="289.26" y1="48.31" x2="289.26" y2="53.98"/>
                      <line class="cls-1" x1="294.93" y1="48.31" x2="289.26" y2="48.31"/>
                      <line class="cls-1" x1="294.93" y1="42.64" x2="294.93" y2="48.31"/>
                      <line class="cls-1" x1="300.6" y1="42.64" x2="294.93" y2="42.64"/>
                      <line class="cls-1" x1="300.6" y1="36.98" x2="300.6" y2="42.64"/>
                      <line class="cls-1" x1="306.27" y1="36.98" x2="300.6" y2="36.98"/>
                      <line class="cls-1" x1="306.27" y1="31.31" x2="306.27" y2="36.98"/>
                      <line class="cls-1" x1="311.94" y1="31.31" x2="306.27" y2="31.31"/>
                      <rect class="cls-1" x="482.01" y="28.47" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="482.01" y1="53.98" x2="487.68" y2="53.98"/>
                      <line class="cls-1" x1="487.68" y1="48.31" x2="487.68" y2="53.98"/>
                      <line class="cls-1" x1="493.35" y1="48.31" x2="487.68" y2="48.31"/>
                      <line class="cls-1" x1="493.35" y1="42.64" x2="493.35" y2="48.31"/>
                      <line class="cls-1" x1="499.02" y1="42.64" x2="493.35" y2="42.64"/>
                      <line class="cls-1" x1="499.02" y1="36.98" x2="499.02" y2="42.64"/>
                      <line class="cls-1" x1="504.69" y1="36.98" x2="499.02" y2="36.98"/>
                      <line class="cls-1" x1="504.69" y1="31.31" x2="504.69" y2="36.98"/>
                      <line class="cls-1" x1="510.36" y1="31.31" x2="504.69" y2="31.31"/>
                      <rect class="cls-1" x="482.01" y="340.28" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="482.01" y1="365.79" x2="487.68" y2="365.79"/>
                      <line class="cls-1" x1="487.68" y1="360.12" x2="487.68" y2="365.79"/>
                      <line class="cls-1" x1="493.35" y1="360.12" x2="487.68" y2="360.12"/>
                      <line class="cls-1" x1="493.35" y1="354.46" x2="493.35" y2="360.12"/>
                      <line class="cls-1" x1="499.02" y1="354.46" x2="493.35" y2="354.46"/>
                      <line class="cls-1" x1="499.02" y1="348.79" x2="499.02" y2="354.46"/>
                      <line class="cls-1" x1="504.69" y1="348.79" x2="499.02" y2="348.79"/>
                      <line class="cls-1" x1="504.69" y1="343.12" x2="504.69" y2="348.79"/>
                      <line class="cls-1" x1="510.36" y1="343.12" x2="504.69" y2="343.12"/>
                      <rect class="cls-1" x="652.09" y="198.55" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="652.09" y1="224.06" x2="657.76" y2="224.06"/>
                      <line class="cls-1" x1="657.76" y1="218.39" x2="657.76" y2="224.06"/>
                      <line class="cls-1" x1="663.43" y1="218.39" x2="657.76" y2="218.39"/>
                      <line class="cls-1" x1="663.43" y1="212.72" x2="663.43" y2="218.39"/>
                      <line class="cls-1" x1="669.1" y1="212.72" x2="663.43" y2="212.72"/>
                      <line class="cls-1" x1="669.1" y1="207.05" x2="669.1" y2="212.72"/>
                      <line class="cls-1" x1="674.77" y1="207.05" x2="669.1" y2="207.05"/>
                      <line class="cls-1" x1="674.77" y1="201.38" x2="674.77" y2="207.05"/>
                      <line class="cls-1" x1="680.44" y1="201.38" x2="674.77" y2="201.38"/>
                      <rect class="cls-1" x="680.44" y="170.2" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="680.44" y1="195.72" x2="686.11" y2="195.72"/>
                      <line class="cls-1" x1="686.11" y1="190.05" x2="686.11" y2="195.72"/>
                      <line class="cls-1" x1="691.78" y1="190.05" x2="686.11" y2="190.05"/>
                      <line class="cls-1" x1="691.78" y1="184.38" x2="691.78" y2="190.05"/>
                      <line class="cls-1" x1="697.45" y1="184.38" x2="691.78" y2="184.38"/>
                      <line class="cls-1" x1="697.45" y1="178.71" x2="697.45" y2="184.38"/>
                      <line class="cls-1" x1="703.12" y1="178.71" x2="697.45" y2="178.71"/>
                      <line class="cls-1" x1="703.12" y1="173.04" x2="703.12" y2="178.71"/>
                      <line class="cls-1" x1="708.79" y1="173.04" x2="703.12" y2="173.04"/>
                      <rect class="cls-1" x="850.52" y="340.28" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="850.52" y1="365.79" x2="856.19" y2="365.79"/>
                      <line class="cls-1" x1="856.19" y1="360.12" x2="856.19" y2="365.79"/>
                      <line class="cls-1" x1="861.86" y1="360.12" x2="856.19" y2="360.12"/>
                      <line class="cls-1" x1="861.86" y1="354.46" x2="861.86" y2="360.12"/>
                      <line class="cls-1" x1="867.53" y1="354.46" x2="861.86" y2="354.46"/>
                      <line class="cls-1" x1="867.53" y1="348.79" x2="867.53" y2="354.46"/>
                      <line class="cls-1" x1="873.2" y1="348.79" x2="867.53" y2="348.79"/>
                      <line class="cls-1" x1="873.2" y1="343.12" x2="873.2" y2="348.79"/>
                      <line class="cls-1" x1="878.87" y1="343.12" x2="873.2" y2="343.12"/>
                      <rect class="cls-1" x="850.52" y="28.47" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="850.52" y1="53.98" x2="856.19" y2="53.98"/>
                      <line class="cls-1" x1="856.19" y1="48.31" x2="856.19" y2="53.98"/>
                      <line class="cls-1" x1="861.86" y1="48.31" x2="856.19" y2="48.31"/>
                      <line class="cls-1" x1="861.86" y1="42.64" x2="861.86" y2="48.31"/>
                      <line class="cls-1" x1="867.53" y1="42.64" x2="861.86" y2="42.64"/>
                      <line class="cls-1" x1="867.53" y1="36.98" x2="867.53" y2="42.64"/>
                      <line class="cls-1" x1="873.2" y1="36.98" x2="867.53" y2="36.98"/>
                      <line class="cls-1" x1="873.2" y1="31.31" x2="873.2" y2="36.98"/>
                      <line class="cls-1" x1="878.87" y1="31.31" x2="873.2" y2="31.31"/>
                      <rect class="cls-1" x="992.25" y="340.28" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="992.25" y1="365.79" x2="997.92" y2="365.79"/>
                      <line class="cls-1" x1="997.92" y1="360.12" x2="997.92" y2="365.79"/>
                      <line class="cls-1" x1="1003.59" y1="360.12" x2="997.92" y2="360.12"/>
                      <line class="cls-1" x1="1003.59" y1="354.46" x2="1003.59" y2="360.12"/>
                      <line class="cls-1" x1="1009.26" y1="354.46" x2="1003.59" y2="354.46"/>
                      <line class="cls-1" x1="1009.26" y1="348.79" x2="1009.26" y2="354.46"/>
                      <line class="cls-1" x1="1014.93" y1="348.79" x2="1009.26" y2="348.79"/>
                      <line class="cls-1" x1="1014.93" y1="343.12" x2="1014.93" y2="348.79"/>
                      <line class="cls-1" x1="1020.6" y1="343.12" x2="1014.93" y2="343.12"/>
                      <rect class="cls-1" x="992.25" y="28.47" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="992.25" y1="53.98" x2="997.92" y2="53.98"/>
                      <line class="cls-1" x1="997.92" y1="48.31" x2="997.92" y2="53.98"/>
                      <line class="cls-1" x1="1003.59" y1="48.31" x2="997.92" y2="48.31"/>
                      <line class="cls-1" x1="1003.59" y1="42.64" x2="1003.59" y2="48.31"/>
                      <line class="cls-1" x1="1009.26" y1="42.64" x2="1003.59" y2="42.64"/>
                      <line class="cls-1" x1="1009.26" y1="36.98" x2="1009.26" y2="42.64"/>
                      <line class="cls-1" x1="1014.93" y1="36.98" x2="1009.26" y2="36.98"/>
                      <line class="cls-1" x1="1014.93" y1="31.31" x2="1014.93" y2="36.98"/>
                      <line class="cls-1" x1="1020.6" y1="31.31" x2="1014.93" y2="31.31"/>
                      <line class="cls-1" x1="261.37" y1="240.84" x2="261.13" y2="255.01"/>
                      <line class="cls-1" x1="275.3" y1="255.48" x2="261.13" y2="255.24"/>
                      <path class="cls-1" d="m261.37,240.84c7.83.13,14.07,6.58,13.94,14.41"/>
                      <line class="cls-1" x1="567.05" y1="150.36" x2="566.82" y2="164.53"/>
                      <line class="cls-1" x1="581.23" y1="164.77" x2="567.05" y2="164.53"/>
                      <path class="cls-1" d="m567.29,150.36c7.83.13,14.07,6.58,13.94,14.41"/>
                      <line class="cls-1" x1="581.23" y1="232.57" x2="567.05" y2="232.57"/>
                      <line class="cls-1" x1="567.05" y1="246.74" x2="567.05" y2="232.57"/>
                      <path class="cls-1" d="m581.23,232.57c0,7.83-6.35,14.17-14.17,14.17"/>
                      <line class="cls-1" x1="453.67" y1="246.74" x2="453.67" y2="232.57"/>
                      <line class="cls-1" x1="439.5" y1="232.57" x2="453.67" y2="232.57"/>
                      <path class="cls-1" d="m453.67,246.74c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <line class="cls-1" x1="439.5" y1="164.53" x2="453.67" y2="164.53"/>
                      <line class="cls-1" x1="453.67" y1="150.36" x2="453.67" y2="164.53"/>
                      <path class="cls-1" d="m439.5,164.53c0-7.83,6.35-14.17,14.17-14.17"/>
                      <line class="cls-1" x1="986.58" y1="326.11" x2="986.58" y2="311.94"/>
                      <line class="cls-1" x1="972.41" y1="311.94" x2="986.58" y2="311.94"/>
                      <path class="cls-1" d="m986.58,326.11c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <line class="cls-1" x1="921.38" y1="232.57" x2="907.21" y2="232.57"/>
                      <line class="cls-1" x1="907.21" y1="246.74" x2="907.21" y2="232.57"/>
                      <path class="cls-1" d="m921.38,232.57c0,7.83-6.35,14.17-14.17,14.17"/>
                      <line class="cls-1" x1="907.21" y1="147.53" x2="906.98" y2="161.7"/>
                      <line class="cls-1" x1="921.38" y1="161.93" x2="907.21" y2="161.7"/>
                      <path class="cls-1" d="m907.45,147.53c7.83.13,14.07,6.58,13.94,14.41"/>
                      <g>
                        <line class="cls-1" x1="779.65" y1="164.53" x2="793.83" y2="164.53"/>
                        <line class="cls-1" x1="793.83" y1="150.36" x2="793.83" y2="164.53"/>
                        <path class="cls-1" d="m779.65,164.53c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <line class="cls-1" x1="793.83" y1="246.74" x2="793.83" y2="232.57"/>
                      <line class="cls-1" x1="779.65" y1="232.57" x2="793.83" y2="232.57"/>
                      <path class="cls-1" d="m793.83,246.74c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <text class="cls-21" transform="translate(282.74 201.43)"><tspan x="0" y="0">071E</tspan></text>
                      <text class="cls-21" transform="translate(353.91 48.31)"><tspan x="0" y="0">SE</tspan><tspan class="cls-17" x="11.82" y="0">R</tspan><tspan x="18.47" y="0">VICE SOCIAL</tspan></text>
                      <text class="cls-21" transform="translate(385.03 201.38)"><tspan x="0" y="0">10E</tspan></text>
                      <text class="cls-21" transform="translate(379.63 357.29)"><tspan x="0" y="0">M</tspan><tspan class="cls-18" x="9.65" y="0">E</tspan><tspan class="cls-16" x="15.66" y="0">V</tspan><tspan class="cls-20" x="21.67" y="0">A</tspan></text>
                      <text class="cls-21" transform="translate(603.54 201.43)"><tspan x="0" y="0">9E</tspan></text>
                      <text class="cls-21" transform="translate(744.75 201.43)"><tspan x="0" y="0">5C</tspan></text>
                      <text class="cls-21" transform="translate(943.17 201.43)"><tspan x="0" y="0">4C</tspan></text>
                      <text class="cls-21" transform="translate(943.06 39.81)"><tspan x="0" y="0">PC</tspan><tspan x="-18.47" y="14.4">SÉCURITÉ </tspan></text>
                      <text class="cls-21" transform="translate(937.02 357.29)"><tspan x="0" y="0">027C</tspan></text>
                      <text class="cls-21" transform="translate(1098.89 187.21)"><tspan x="0" y="0">1A</tspan></text>
                      <line class="cls-1" x1="1049.18" y1="122.01" x2="1048.94" y2="136.19"/>
                      <line class="cls-1" x1="1063.12" y1="136.42" x2="1048.94" y2="136.19"/>
                      <path class="cls-1" d="m1049.18,122.01c7.83.13,14.07,6.58,13.94,14.41"/>
                      <line class="cls-1" x1="1063.12" y1="229.73" x2="1048.94" y2="229.73"/>
                      <line class="cls-1" x1="1048.94" y1="243.9" x2="1048.94" y2="229.73"/>
                      <path class="cls-1" d="m1063.12,229.73c0,7.83-6.35,14.17-14.17,14.17"/>
                      <circle class="cls-1" cx="236.04" cy="186" r="7.09"/>
                      <polyline class="cls-12" points="255.24 .13 226.9 .12 226.9 85.16"/>
                      <polyline class="cls-12" points="226.9 311.94 255.24 311.94 255.24 396.98"/>
                      <polyline class="cls-12" points="255.24 .12 255.24 85.16 226.9 85.16"/>
                      <polyline class="cls-12" points="226.9 311.94 226.9 396.98 255.24 396.98"/>
                      <line class="cls-4" x1="226.9" y1="85.16" x2="255.24" y2="85.16"/>
                      <line class="cls-4" x1="255.24" y1="311.94" x2="226.9" y2="311.94"/>
                      <polygon class="cls-2" points="255.24 255.24 226.9 255.24 227.72 170.33 256.07 170.33 255.24 255.24"/>
                      <rect class="cls-6" x="226.9" y="141.86" width="28.35" height="28.35"/>
                      <rect class="cls-1" x="793.83" y="28.47" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="793.83" y1="53.98" x2="799.5" y2="53.98"/>
                      <line class="cls-1" x1="799.5" y1="48.31" x2="799.5" y2="53.98"/>
                      <line class="cls-1" x1="805.16" y1="48.31" x2="799.5" y2="48.31"/>
                      <line class="cls-1" x1="805.16" y1="42.64" x2="805.16" y2="48.31"/>
                      <line class="cls-1" x1="810.83" y1="42.64" x2="805.16" y2="42.64"/>
                      <line class="cls-1" x1="810.83" y1="36.98" x2="810.83" y2="42.64"/>
                      <line class="cls-1" x1="816.5" y1="36.98" x2="810.83" y2="36.98"/>
                      <line class="cls-1" x1="816.5" y1="31.31" x2="816.5" y2="36.98"/>
                      <line class="cls-1" x1="822.17" y1="31.31" x2="816.5" y2="31.31"/>
                      <rect class="cls-1" x="538.71" y="28.47" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="538.71" y1="53.98" x2="544.38" y2="53.98"/>
                      <line class="cls-1" x1="544.38" y1="48.31" x2="544.38" y2="53.98"/>
                      <line class="cls-1" x1="550.05" y1="48.31" x2="544.38" y2="48.31"/>
                      <line class="cls-1" x1="550.05" y1="42.64" x2="550.05" y2="48.31"/>
                      <line class="cls-1" x1="555.72" y1="42.64" x2="550.05" y2="42.64"/>
                      <line class="cls-1" x1="555.72" y1="36.98" x2="555.72" y2="42.64"/>
                      <line class="cls-1" x1="561.38" y1="36.98" x2="555.72" y2="36.98"/>
                      <line class="cls-1" x1="561.38" y1="31.31" x2="561.38" y2="36.98"/>
                      <line class="cls-1" x1="567.05" y1="31.31" x2="561.38" y2="31.31"/>
                      <rect class="cls-1" x="793.83" y="340.28" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="793.83" y1="365.79" x2="799.5" y2="365.79"/>
                      <line class="cls-1" x1="799.5" y1="360.12" x2="799.5" y2="365.79"/>
                      <line class="cls-1" x1="805.16" y1="360.12" x2="799.5" y2="360.12"/>
                      <line class="cls-1" x1="805.16" y1="354.46" x2="805.16" y2="360.12"/>
                      <line class="cls-1" x1="810.83" y1="354.46" x2="805.16" y2="354.46"/>
                      <line class="cls-1" x1="810.83" y1="348.79" x2="810.83" y2="354.46"/>
                      <line class="cls-1" x1="816.5" y1="348.79" x2="810.83" y2="348.79"/>
                      <line class="cls-1" x1="816.5" y1="343.12" x2="816.5" y2="348.79"/>
                      <line class="cls-1" x1="822.17" y1="343.12" x2="816.5" y2="343.12"/>
                      <rect class="cls-1" x="538.71" y="340.28" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="538.71" y1="365.79" x2="544.38" y2="365.79"/>
                      <line class="cls-1" x1="544.38" y1="360.12" x2="544.38" y2="365.79"/>
                      <line class="cls-1" x1="550.05" y1="360.12" x2="544.38" y2="360.12"/>
                      <line class="cls-1" x1="550.05" y1="354.46" x2="550.05" y2="360.12"/>
                      <line class="cls-1" x1="555.72" y1="354.46" x2="550.05" y2="354.46"/>
                      <line class="cls-1" x1="555.72" y1="348.79" x2="555.72" y2="354.46"/>
                      <line class="cls-1" x1="561.38" y1="348.79" x2="555.72" y2="348.79"/>
                      <line class="cls-1" x1="561.38" y1="343.12" x2="561.38" y2="348.79"/>
                      <line class="cls-1" x1="567.05" y1="343.12" x2="561.38" y2="343.12"/>
                      <rect class="cls-4" x="567.05" y="311.94" width="226.77" height="85.04"/>
                      <rect class="cls-4" x="567.05" y=".12" width="226.77" height="85.04"/>
                      <line class="cls-4" x1="226.9" y1="396.98" x2="255.24" y2="396.98"/>
                      <line class="cls-4" x1="255.24" y1="396.98" x2="255.24" y2="311.94"/>
                      <line class="cls-4" x1="255.24" y1="85.16" x2="255.24" y2=".12"/>
                      <line class="cls-4" x1="226.9" y1=".13" x2="255.24" y2=".13"/>
                      <line class="cls-8" x1=".13" y1=".12" x2=".12" y2="396.98"/>
                      <rect class="cls-4" x=".12" y=".12" width="226.77" height="396.85"/>
                      <text class="cls-21" transform="translate(42.45 201.38) scale(1.19 1)"><tspan x="0" y="0">RES</tspan><tspan class="cls-24" x="18.28" y="0">T</tspan><tspan class="cls-14" x="23.34" y="0">A</tspan><tspan class="cls-9" x="30.35" y="0">U</tspan><tspan class="cls-15" x="38.11" y="0">R</tspan><tspan x="44.63" y="0">ANT C</tspan><tspan class="cls-23" x="75.33" y="0">R</tspan><tspan x="81.83" y="0">OUS</tspan></text>
                      <text class="cls-21" transform="translate(636.42 360.12) scale(1.18 1)"><tspan x="0" y="0">B</tspan><tspan class="cls-11" x="6.5" y="0">É</tspan><tspan class="cls-22" x="12.6" y="0">T</tspan><tspan x="18.24" y="0">ONSA</tspan><tspan class="cls-13" x="47.66" y="0">L</tspan><tspan class="cls-10" x="52.86" y="0">ON</tspan></text>
                      <line class="cls-1" x1="255.24" y1="396.98" x2="340.28" y2="396.98"/>
                      <text class="cls-21" transform="translate(634.91 46.38)"><tspan x="0" y="0">RELAIS HANDI</tspan><tspan class="cls-19" x="70.62" y="0">C</tspan><tspan x="77.63" y="0">AP</tspan></text>
                    </svg>

                  </div>
                  <div id="etage1" class="etage">
                    <!-- <img src="Etage01.svg" alt=""> -->
                    <?php
                     echo '<?xml version="1.0" encoding="UTF-8"?>';
                    ?>

                    <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1162.45 397.1">
                      <defs>
                        <style>
                          #etage1 .cls-1,#etage1 .cls-2,#etage1 .cls-3,#etage1 .cls-4,#etage1 .cls-5,#etage1 .cls-6,#etage1 .cls-7 {
                            stroke: #1d1d1b;
                            stroke-miterlimit: 10;
                            stroke-width: .25px;
                          }

                          #etage1 .cls-1,#etage1 .cls-8 {
                            fill: none;
                          }

                          #etage1 .cls-2 {
                            fill: #fff;
                          }

                          #etage1 .cls-3 {
                            fill: #e94e1b;
                          }

                          #etage1 .cls-4 {
                            fill: #f7c5dd;
                          }

                          #etage1 .cls-5 {
                            fill: #8ecbb5;
                          }

                          #etage1 .cls-6 {
                            fill: #e6332a;
                          }

                          #etage1 .cls-7 {
                            fill: #c8d972;
                          }

                          #etage1 .cls-9 {
                            fill: #1d1d1b;
                            font-family: MyriadPro-Regular, 'Myriad Pro';
                            font-size: 12px;
                          }
                        </style>
                      </defs>
                      <line class="cls-2" x1="256.07" y1="170.33" x2="255.24" y2="255.24"/>
                      <rect class="cls-7" x="255.24" y="141.86" width="85.04" height="113.39"/>
                      <rect class="cls-5" x="340.28" y="141.86" width="113.39" height="113.39"/>
                      <rect class="cls-3" x="453.67" y="170.2" width="28.35" height="56.69"/>
                      <rect class="cls-1" x="283.59" y="340.28" width="28.35" height="28.35"/>
                      <rect class="cls-5" x="567.05" y="141.86" width="85.04" height="113.39"/>
                      <rect class="cls-5" x="708.79" y="141.86" width="85.04" height="113.39"/>
                      <line class="cls-4" x1="255.24" y1=".13" x2="340.28" y2=".13"/>
                      <line class="cls-1" x1="453.67" y1=".13" x2="567.05" y2=".13"/>
                      <line class="cls-1" x1="793.83" y1=".13" x2="992.25" y2=".13"/>
                      <line class="cls-1" x1="992.25" y1=".13" x2="1162.33" y2=".13"/>
                      <line class="cls-1" x1="1162.33" y1="141.86" x2="1162.33" y2=".13"/>
                      <line class="cls-1" x1="992.25" y1="396.98" x2="1048.94" y2="396.98"/>
                      <line class="cls-1" x1="1048.94" y1="255.24" x2="1048.94" y2="396.98"/>
                      <line class="cls-1" x1="907.21" y1="396.98" x2="793.83" y2="396.98"/>
                      <line class="cls-1" x1="567.05" y1="396.98" x2="453.67" y2="396.98"/>
                      <line class="cls-1" x1="283.59" y1="365.79" x2="289.26" y2="365.79"/>
                      <line class="cls-1" x1="289.26" y1="360.13" x2="289.26" y2="365.79"/>
                      <line class="cls-1" x1="294.93" y1="360.13" x2="289.26" y2="360.13"/>
                      <line class="cls-1" x1="294.93" y1="354.46" x2="294.93" y2="360.13"/>
                      <line class="cls-1" x1="300.6" y1="354.46" x2="294.93" y2="354.46"/>
                      <line class="cls-1" x1="300.6" y1="348.79" x2="300.6" y2="354.46"/>
                      <line class="cls-1" x1="306.27" y1="348.79" x2="300.6" y2="348.79"/>
                      <line class="cls-1" x1="306.27" y1="343.12" x2="306.27" y2="348.79"/>
                      <line class="cls-1" x1="311.94" y1="343.12" x2="306.27" y2="343.12"/>
                      <rect class="cls-5" x="907.21" y="141.86" width="85.04" height="113.39"/>
                      <rect class="cls-3" x="878.87" y="170.2" width="28.35" height="56.69"/>
                      <rect class="cls-5" x="1048.94" y="113.51" width="113.39" height="141.73"/>
                      <rect class="cls-2" x="1048.94" y="28.47" width="56.69" height="28.35"/>
                      <rect class="cls-3" x="1105.64" y="28.47" width="28.35" height="28.35"/>
                      <rect class="cls-1" x="283.59" y="28.47" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="283.59" y1="53.98" x2="289.26" y2="53.98"/>
                      <line class="cls-1" x1="289.26" y1="48.31" x2="289.26" y2="53.98"/>
                      <line class="cls-1" x1="294.93" y1="48.31" x2="289.26" y2="48.31"/>
                      <line class="cls-1" x1="294.93" y1="42.64" x2="294.93" y2="48.31"/>
                      <line class="cls-1" x1="300.6" y1="42.64" x2="294.93" y2="42.64"/>
                      <line class="cls-1" x1="300.6" y1="36.98" x2="300.6" y2="42.64"/>
                      <line class="cls-1" x1="306.27" y1="36.98" x2="300.6" y2="36.98"/>
                      <line class="cls-1" x1="306.27" y1="31.31" x2="306.27" y2="36.98"/>
                      <line class="cls-1" x1="311.94" y1="31.31" x2="306.27" y2="31.31"/>
                      <rect class="cls-1" x="482.01" y="28.47" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="482.01" y1="53.98" x2="487.68" y2="53.98"/>
                      <line class="cls-1" x1="487.68" y1="48.31" x2="487.68" y2="53.98"/>
                      <line class="cls-1" x1="493.35" y1="48.31" x2="487.68" y2="48.31"/>
                      <line class="cls-1" x1="493.35" y1="42.64" x2="493.35" y2="48.31"/>
                      <line class="cls-1" x1="499.02" y1="42.64" x2="493.35" y2="42.64"/>
                      <line class="cls-1" x1="499.02" y1="36.98" x2="499.02" y2="42.64"/>
                      <line class="cls-1" x1="504.69" y1="36.98" x2="499.02" y2="36.98"/>
                      <line class="cls-1" x1="504.69" y1="31.31" x2="504.69" y2="36.98"/>
                      <line class="cls-1" x1="510.36" y1="31.31" x2="504.69" y2="31.31"/>
                      <rect class="cls-1" x="482.01" y="340.28" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="482.01" y1="365.79" x2="487.68" y2="365.79"/>
                      <line class="cls-1" x1="487.68" y1="360.13" x2="487.68" y2="365.79"/>
                      <line class="cls-1" x1="493.35" y1="360.13" x2="487.68" y2="360.13"/>
                      <line class="cls-1" x1="493.35" y1="354.46" x2="493.35" y2="360.13"/>
                      <line class="cls-1" x1="499.02" y1="354.46" x2="493.35" y2="354.46"/>
                      <line class="cls-1" x1="499.02" y1="348.79" x2="499.02" y2="354.46"/>
                      <line class="cls-1" x1="504.69" y1="348.79" x2="499.02" y2="348.79"/>
                      <line class="cls-1" x1="504.69" y1="343.12" x2="504.69" y2="348.79"/>
                      <line class="cls-1" x1="510.36" y1="343.12" x2="504.69" y2="343.12"/>
                      <rect class="cls-1" x="652.09" y="198.55" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="652.09" y1="224.06" x2="657.76" y2="224.06"/>
                      <line class="cls-1" x1="657.76" y1="218.39" x2="657.76" y2="224.06"/>
                      <line class="cls-1" x1="663.43" y1="218.39" x2="657.76" y2="218.39"/>
                      <line class="cls-1" x1="663.43" y1="212.72" x2="663.43" y2="218.39"/>
                      <line class="cls-1" x1="669.1" y1="212.72" x2="663.43" y2="212.72"/>
                      <line class="cls-1" x1="669.1" y1="207.05" x2="669.1" y2="212.72"/>
                      <line class="cls-1" x1="674.77" y1="207.05" x2="669.1" y2="207.05"/>
                      <line class="cls-1" x1="674.77" y1="201.38" x2="674.77" y2="207.05"/>
                      <line class="cls-1" x1="680.44" y1="201.38" x2="674.77" y2="201.38"/>
                      <rect class="cls-1" x="680.44" y="170.2" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="680.44" y1="195.72" x2="686.11" y2="195.72"/>
                      <line class="cls-1" x1="686.11" y1="190.05" x2="686.11" y2="195.72"/>
                      <line class="cls-1" x1="691.78" y1="190.05" x2="686.11" y2="190.05"/>
                      <line class="cls-1" x1="691.78" y1="184.38" x2="691.78" y2="190.05"/>
                      <line class="cls-1" x1="697.45" y1="184.38" x2="691.78" y2="184.38"/>
                      <line class="cls-1" x1="697.45" y1="178.71" x2="697.45" y2="184.38"/>
                      <line class="cls-1" x1="703.12" y1="178.71" x2="697.45" y2="178.71"/>
                      <line class="cls-1" x1="703.12" y1="173.04" x2="703.12" y2="178.71"/>
                      <line class="cls-1" x1="708.79" y1="173.04" x2="703.12" y2="173.04"/>
                      <rect class="cls-1" x="850.52" y="340.28" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="850.52" y1="365.79" x2="856.19" y2="365.79"/>
                      <line class="cls-1" x1="856.19" y1="360.13" x2="856.19" y2="365.79"/>
                      <line class="cls-1" x1="861.86" y1="360.13" x2="856.19" y2="360.13"/>
                      <line class="cls-1" x1="861.86" y1="354.46" x2="861.86" y2="360.13"/>
                      <line class="cls-1" x1="867.53" y1="354.46" x2="861.86" y2="354.46"/>
                      <line class="cls-1" x1="867.53" y1="348.79" x2="867.53" y2="354.46"/>
                      <line class="cls-1" x1="873.2" y1="348.79" x2="867.53" y2="348.79"/>
                      <line class="cls-1" x1="873.2" y1="343.12" x2="873.2" y2="348.79"/>
                      <line class="cls-1" x1="878.87" y1="343.12" x2="873.2" y2="343.12"/>
                      <rect class="cls-1" x="850.52" y="28.47" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="850.52" y1="53.98" x2="856.19" y2="53.98"/>
                      <line class="cls-1" x1="856.19" y1="48.31" x2="856.19" y2="53.98"/>
                      <line class="cls-1" x1="861.86" y1="48.31" x2="856.19" y2="48.31"/>
                      <line class="cls-1" x1="861.86" y1="42.64" x2="861.86" y2="48.31"/>
                      <line class="cls-1" x1="867.53" y1="42.64" x2="861.86" y2="42.64"/>
                      <line class="cls-1" x1="867.53" y1="36.98" x2="867.53" y2="42.64"/>
                      <line class="cls-1" x1="873.2" y1="36.98" x2="867.53" y2="36.98"/>
                      <line class="cls-1" x1="873.2" y1="31.31" x2="873.2" y2="36.98"/>
                      <line class="cls-1" x1="878.87" y1="31.31" x2="873.2" y2="31.31"/>
                      <rect class="cls-1" x="992.25" y="340.28" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="992.25" y1="365.79" x2="997.92" y2="365.79"/>
                      <line class="cls-1" x1="997.92" y1="360.13" x2="997.92" y2="365.79"/>
                      <line class="cls-1" x1="1003.59" y1="360.13" x2="997.92" y2="360.13"/>
                      <line class="cls-1" x1="1003.59" y1="354.46" x2="1003.59" y2="360.13"/>
                      <line class="cls-1" x1="1009.26" y1="354.46" x2="1003.59" y2="354.46"/>
                      <line class="cls-1" x1="1009.26" y1="348.79" x2="1009.26" y2="354.46"/>
                      <line class="cls-1" x1="1014.93" y1="348.79" x2="1009.26" y2="348.79"/>
                      <line class="cls-1" x1="1014.93" y1="343.12" x2="1014.93" y2="348.79"/>
                      <line class="cls-1" x1="1020.6" y1="343.12" x2="1014.93" y2="343.12"/>
                      <rect class="cls-1" x="992.25" y="28.47" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="992.25" y1="53.98" x2="997.92" y2="53.98"/>
                      <line class="cls-1" x1="997.92" y1="48.31" x2="997.92" y2="53.98"/>
                      <line class="cls-1" x1="1003.59" y1="48.31" x2="997.92" y2="48.31"/>
                      <line class="cls-1" x1="1003.59" y1="42.64" x2="1003.59" y2="48.31"/>
                      <line class="cls-1" x1="1009.26" y1="42.64" x2="1003.59" y2="42.64"/>
                      <line class="cls-1" x1="1009.26" y1="36.98" x2="1009.26" y2="42.64"/>
                      <line class="cls-1" x1="1014.93" y1="36.98" x2="1009.26" y2="36.98"/>
                      <line class="cls-1" x1="1014.93" y1="31.31" x2="1014.93" y2="36.98"/>
                      <line class="cls-1" x1="1020.6" y1="31.31" x2="1014.93" y2="31.31"/>
                      <line class="cls-1" x1="261.37" y1="240.84" x2="261.13" y2="255.01"/>
                      <line class="cls-1" x1="275.3" y1="255.48" x2="261.13" y2="255.24"/>
                      <path class="cls-1" d="m261.37,240.84c7.83.13,14.07,6.58,13.94,14.41"/>
                      <line class="cls-1" x1="567.05" y1="150.36" x2="566.82" y2="164.53"/>
                      <line class="cls-1" x1="581.23" y1="164.77" x2="567.05" y2="164.53"/>
                      <path class="cls-1" d="m567.29,150.36c7.83.13,14.07,6.58,13.94,14.41"/>
                      <line class="cls-1" x1="581.23" y1="232.57" x2="567.05" y2="232.57"/>
                      <line class="cls-1" x1="567.05" y1="246.74" x2="567.05" y2="232.57"/>
                      <path class="cls-1" d="m581.23,232.57c0,7.83-6.35,14.17-14.17,14.17"/>
                      <line class="cls-1" x1="453.67" y1="246.74" x2="453.67" y2="232.57"/>
                      <line class="cls-1" x1="439.5" y1="232.57" x2="453.67" y2="232.57"/>
                      <path class="cls-1" d="m453.67,246.74c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <line class="cls-1" x1="439.5" y1="164.53" x2="453.67" y2="164.53"/>
                      <line class="cls-1" x1="453.67" y1="150.36" x2="453.67" y2="164.53"/>
                      <path class="cls-1" d="m439.5,164.53c0-7.83,6.35-14.17,14.17-14.17"/>
                      <line class="cls-1" x1="921.38" y1="232.57" x2="907.21" y2="232.57"/>
                      <line class="cls-1" x1="907.21" y1="246.74" x2="907.21" y2="232.57"/>
                      <path class="cls-1" d="m921.38,232.57c0,7.83-6.35,14.17-14.17,14.17"/>
                      <line class="cls-1" x1="907.21" y1="147.53" x2="906.98" y2="161.7"/>
                      <line class="cls-1" x1="921.38" y1="161.93" x2="907.21" y2="161.7"/>
                      <path class="cls-1" d="m907.45,147.53c7.83.13,14.07,6.58,13.94,14.41"/>
                      <g>
                        <line class="cls-1" x1="779.65" y1="164.53" x2="793.83" y2="164.53"/>
                        <line class="cls-1" x1="793.83" y1="150.36" x2="793.83" y2="164.53"/>
                        <path class="cls-1" d="m779.65,164.53c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <line class="cls-1" x1="793.83" y1="246.74" x2="793.83" y2="232.57"/>
                      <line class="cls-1" x1="779.65" y1="232.57" x2="793.83" y2="232.57"/>
                      <path class="cls-1" d="m793.83,246.74c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <text class="cls-9" transform="translate(282.74 201.43)"><tspan x="0" y="0">171E</tspan></text>
                      <text class="cls-9" transform="translate(385.03 201.38)"><tspan x="0" y="0">10E</tspan></text>
                      <text class="cls-9" transform="translate(603.55 201.43)"><tspan x="0" y="0">9E</tspan></text>
                      <text class="cls-9" transform="translate(744.75 201.43)"><tspan x="0" y="0">5C</tspan></text>
                      <text class="cls-9" transform="translate(943.17 201.43)"><tspan x="0" y="0">4C</tspan></text>
                      <text class="cls-9" transform="translate(937.02 357.29)"><tspan x="0" y="0">027C</tspan></text>
                      <text class="cls-9" transform="translate(1098.89 187.21)"><tspan x="0" y="0">1A</tspan></text>
                      <line class="cls-1" x1="1049.18" y1="122.01" x2="1048.94" y2="136.19"/>
                      <line class="cls-1" x1="1063.12" y1="136.42" x2="1048.94" y2="136.19"/>
                      <path class="cls-1" d="m1049.18,122.01c7.83.13,14.07,6.58,13.94,14.41"/>
                      <line class="cls-1" x1="1063.12" y1="229.73" x2="1048.94" y2="229.73"/>
                      <line class="cls-1" x1="1048.94" y1="243.9" x2="1048.94" y2="229.73"/>
                      <path class="cls-1" d="m1063.12,229.73c0,7.83-6.35,14.17-14.17,14.17"/>
                      <circle class="cls-1" cx="236.04" cy="186" r="7.09"/>
                      <polygon class="cls-2" points="255.24 255.24 226.9 255.24 227.72 170.33 256.07 170.33 255.24 255.24"/>
                      <rect class="cls-6" x="226.9" y="141.86" width="28.35" height="28.35"/>
                      <rect class="cls-1" x="793.83" y="28.47" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="793.83" y1="53.98" x2="799.5" y2="53.98"/>
                      <line class="cls-1" x1="799.5" y1="48.31" x2="799.5" y2="53.98"/>
                      <line class="cls-1" x1="805.16" y1="48.31" x2="799.5" y2="48.31"/>
                      <line class="cls-1" x1="805.16" y1="42.64" x2="805.16" y2="48.31"/>
                      <line class="cls-1" x1="810.83" y1="42.64" x2="805.16" y2="42.64"/>
                      <line class="cls-1" x1="810.83" y1="36.98" x2="810.83" y2="42.64"/>
                      <line class="cls-1" x1="816.5" y1="36.98" x2="810.83" y2="36.98"/>
                      <line class="cls-1" x1="816.5" y1="31.31" x2="816.5" y2="36.98"/>
                      <line class="cls-1" x1="822.17" y1="31.31" x2="816.5" y2="31.31"/>
                      <rect class="cls-1" x="538.71" y="28.47" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="538.71" y1="53.98" x2="544.38" y2="53.98"/>
                      <line class="cls-1" x1="544.38" y1="48.31" x2="544.38" y2="53.98"/>
                      <line class="cls-1" x1="550.05" y1="48.31" x2="544.38" y2="48.31"/>
                      <line class="cls-1" x1="550.05" y1="42.64" x2="550.05" y2="48.31"/>
                      <line class="cls-1" x1="555.72" y1="42.64" x2="550.05" y2="42.64"/>
                      <line class="cls-1" x1="555.72" y1="36.98" x2="555.72" y2="42.64"/>
                      <line class="cls-1" x1="561.38" y1="36.98" x2="555.72" y2="36.98"/>
                      <line class="cls-1" x1="561.38" y1="31.31" x2="561.38" y2="36.98"/>
                      <line class="cls-1" x1="567.05" y1="31.31" x2="561.38" y2="31.31"/>
                      <rect class="cls-1" x="793.83" y="340.28" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="793.83" y1="365.79" x2="799.5" y2="365.79"/>
                      <line class="cls-1" x1="799.5" y1="360.13" x2="799.5" y2="365.79"/>
                      <line class="cls-1" x1="805.16" y1="360.13" x2="799.5" y2="360.13"/>
                      <line class="cls-1" x1="805.16" y1="354.46" x2="805.16" y2="360.13"/>
                      <line class="cls-1" x1="810.83" y1="354.46" x2="805.16" y2="354.46"/>
                      <line class="cls-1" x1="810.83" y1="348.79" x2="810.83" y2="354.46"/>
                      <line class="cls-1" x1="816.5" y1="348.79" x2="810.83" y2="348.79"/>
                      <line class="cls-1" x1="816.5" y1="343.12" x2="816.5" y2="348.79"/>
                      <line class="cls-1" x1="822.17" y1="343.12" x2="816.5" y2="343.12"/>
                      <rect class="cls-1" x="538.71" y="340.28" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="538.71" y1="365.79" x2="544.38" y2="365.79"/>
                      <line class="cls-1" x1="544.38" y1="360.13" x2="544.38" y2="365.79"/>
                      <line class="cls-1" x1="550.05" y1="360.13" x2="544.38" y2="360.13"/>
                      <line class="cls-1" x1="550.05" y1="354.46" x2="550.05" y2="360.13"/>
                      <line class="cls-1" x1="555.72" y1="354.46" x2="550.05" y2="354.46"/>
                      <line class="cls-1" x1="555.72" y1="348.79" x2="555.72" y2="354.46"/>
                      <line class="cls-1" x1="561.38" y1="348.79" x2="555.72" y2="348.79"/>
                      <line class="cls-1" x1="561.38" y1="343.12" x2="561.38" y2="348.79"/>
                      <line class="cls-1" x1="567.05" y1="343.12" x2="561.38" y2="343.12"/>
                      <line class="cls-4" x1="226.9" y1="396.98" x2="255.24" y2="396.98"/>
                      <line class="cls-4" x1="226.9" y1=".13" x2="255.24" y2=".13"/>
                      <line class="cls-8" x1=".13" y1=".13" x2=".12" y2="396.98"/>
                      <rect class="cls-4" x=".12" y=".13" width="226.77" height="396.85"/>
                      <line class="cls-8" x1="567.05" y1=".13" x2="567.05" y2="141.86"/>
                      <line class="cls-1" x1="567.05" y1=".13" x2="567.05" y2="141.86"/>
                      <line class="cls-1" x1="652.09" y1="141.86" x2="708.79" y2="141.86"/>
                      <line class="cls-1" x1="793.83" y1=".13" x2="793.83" y2="141.86"/>
                      <line class="cls-1" x1="567.05" y1="396.98" x2="567.05" y2="258.08"/>
                      <line class="cls-1" x1="652.09" y1="255.24" x2="708.79" y2="255.24"/>
                      <line class="cls-1" x1="793.83" y1="255.24" x2="793.83" y2="396.98"/>
                      <line class="cls-1" x1="255.24" y1="396.98" x2="340.28" y2="396.98"/>
                      <rect class="cls-7" x="340.28" y="311.94" width="85.04" height="85.04"/>
                      <rect class="cls-7" x="340.28" y=".13" width="56.69" height="85.04"/>
                      <rect class="cls-7" x="396.98" y=".13" width="56.69" height="85.04"/>
                      <rect class="cls-2" x="425.32" y="311.94" width="28.35" height="85.04"/>
                      <rect class="cls-7" x="935.56" y=".13" width="56.69" height="85.04"/>
                      <rect class="cls-7" x="878.87" y=".12" width="56.69" height="85.04"/>
                      <rect class="cls-7" x="878.87" y="311.94" width="56.69" height="85.04"/>
                      <rect class="cls-7" x="935.56" y="311.94" width="56.69" height="85.04"/>
                      <text class="cls-9" transform="translate(370.62 357.29)"><tspan x="0" y="0">165E</tspan></text>
                      <text class="cls-9" transform="translate(356.44 45.48)"><tspan x="0" y="0">166E</tspan></text>
                      <text class="cls-9" transform="translate(413.14 45.48)"><tspan x="0" y="0">164E</tspan></text>
                      <text class="cls-9" transform="translate(894.5 45.48)"><tspan x="0" y="0">124C</tspan></text>
                      <text class="cls-9" transform="translate(951.19 45.48)"><tspan x="0" y="0">122C</tspan></text>
                      <text class="cls-9" transform="translate(894.5 360.12)"><tspan x="0" y="0">125C</tspan></text>
                      <text class="cls-9" transform="translate(951.19 360.13)"><tspan x="0" y="0">123C</tspan></text>
                      <rect class="cls-4" x="226.9" y=".13" width="28.35" height="85.04"/>
                      <rect class="cls-4" x="226.9" y="311.94" width="28.35" height="85.04"/>
                    </svg>
                  </div>
                  <div id="etage2" class="etage"><!-- La carte SVG  -->

                  <?php
                    echo '<?xml version="1.0" encoding="UTF-8"?>';
                  ?>

                    <svg id="Calque_2" data-name="Calque 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1162.45 397.1">
                      <defs>
                        <style>
                          #etage2  .cls-1 {
                            fill: none;
                          }
  
                          #etage2 .cls-1,#etage2 .cls-2,#etage2 .cls-4,#etage2 .cls-5,#etage2 .cls-6,#etage2 .cls-7,#etage2 .cls-8,#etage2 .cls-10 {
                            stroke: #1d1d1b;
                            stroke-miterlimit: 10;
                            stroke-width: .25px;
                          }
  
                          #etage2 .cls-2 {
                            fill: #fff;
                          }
  
                          #etage2 .cls-noeud {
                            stroke: none;
                            fill: none;
                          }
  
                          #etage2 .cls-4 {
                            fill: #e94e1b;
                          }
  
                          #etage2 .cls-5 {
                            fill: #f7c5dd;
                          }
  
                          #etage2 .cls-6 {
                            fill: #8ecbb5;
                          }
  
                          #etage2 .cls-7 {
                            fill: #e6332a;
                          }
  
                          #etage2 .cls-8 {
                            fill: #c8d972;
                          }
  
                          #etage2 .cls-9 {
                            fill: #1d1d1b;
                            font-family: MyriadPro-Regular, 'Myriad Pro';
                            font-size: 12px;
                          }
  
                          #etage2 .cls-10{
                            fill: #009fe3;
                          }
                        </style>
                      </defs>
                      <rect class="cls-8" x=".12" y=".12" width="113.39" height="85.04"/>
                      <rect class="cls-8" x=".13" y="85.16" width="85.04" height="113.39"/>
                      <rect class="cls-8" x="141.86" y="141.86" width="85.04" height="113.39"/>
                      <rect class="cls-2" x="198.55" y=".13" width="56.69" height="85.04"/>
                      <rect class="cls-2" x="198.55" y="311.94" width="56.69" height="85.04"/>
                      <polygon class="cls-2" points="255.24 255.24 226.9 255.24 227.72 170.33 256.07 170.33 255.24 255.24"/>
                      <rect class="cls-8" x="255.24" y="141.86" width="85.04" height="113.39"/>
                      <rect class="cls-6" x="340.28" y="141.86" width="113.39" height="113.39"/>
                      <rect class="cls-4" x="453.67" y="170.2" width="28.35" height="56.69"/>
                      <rect class="cls-1" x="283.59" y="340.28" width="28.35" height="28.35"/>
                      <rect class="cls-8" x="340.28" y=".13" width="113.39" height="85.04"/>
                      <rect class="cls-8" x="340.28" y="311.94" width="113.39" height="85.04"/>
                      <rect class="cls-8" x=".12" y="198.55" width="85.04" height="113.39"/>
                      <rect class="cls-8" x=".13" y="311.94" width="113.39" height="85.04"/>
                      <rect class="cls-8" x="113.51" y="311.94" width="85.04" height="85.04"/>
                      <rect class="cls-8" x="113.51" y=".13" width="85.04" height="85.04"/>
                      <rect class="cls-2" x="538.71" y=".13" width="28.35" height="85.04"/>
                      <rect class="cls-5" x="538.71" y="311.94" width="28.35" height="85.04"/>
                      <rect class="cls-8" x="567.05" y=".13" width="56.69" height="85.04"/>
                      <rect class="cls-8" x="623.75" y=".13" width="56.69" height="85.04"/>
                      <rect class="cls-8" x="680.44" y=".13" width="56.69" height="85.04"/>
                      <rect class="cls-8" x="737.13" y=".13" width="56.69" height="85.04"/>
                      <rect class="cls-2" x="793.83" y=".13" width="28.35" height="85.04"/>
                      <rect class="cls-8" x="567.05" y="311.94" width="56.69" height="85.04"/>
                      <rect class="cls-8" x="623.75" y="311.94" width="113.39" height="85.04"/>
                      <rect class="cls-8" x="737.13" y="311.94" width="56.69" height="85.04"/>
                      <rect class="cls-5" x="793.83" y="311.94" width="28.35" height="85.04"/>
                      <rect class="cls-6" x="567.05" y="141.86" width="85.04" height="113.39"/>
                      <rect class="cls-6" x="708.79" y="141.86" width="85.04" height="113.39"/>
                      <rect class="cls-8" x="907.21" y=".13" width="85.04" height="85.04"/>
                      <line class="cls-1" x1="255.24" y1=".12" x2="340.28" y2=".12"/>
                      <line class="cls-1" x1="453.67" y1=".12" x2="538.71" y2=".12"/>
                      <line class="cls-1" x1="822.17" y1=".13" x2="907.21" y2=".13"/>
                      <line class="cls-1" x1="992.25" y1=".13" x2="1162.33" y2=".13"/>
                      <line class="cls-1" x1="1162.33" y1="141.86" x2="1162.33" y2=".13"/>
                      <line class="cls-1" x1="992.25" y1="396.98" x2="1048.94" y2="396.98"/>
                      <line class="cls-1" x1="1048.94" y1="255.24" x2="1048.94" y2="396.98"/>
                      <line class="cls-1" x1="907.21" y1="396.98" x2="822.17" y2="396.98"/>
                      <line class="cls-1" x1="538.71" y1="396.98" x2="453.67" y2="396.98"/>
                      <line class="cls-1" x1="340.28" y1="396.98" x2="255.24" y2="396.98"/>
                      <line class="cls-1" x1="283.59" y1="365.79" x2="289.26" y2="365.79"/>
                      <line class="cls-1" x1="289.26" y1="360.12" x2="289.26" y2="365.79"/>
                      <line class="cls-1" x1="294.93" y1="360.12" x2="289.26" y2="360.12"/>
                      <line class="cls-1" x1="294.93" y1="354.46" x2="294.93" y2="360.12"/>
                      <line class="cls-1" x1="300.6" y1="354.46" x2="294.93" y2="354.46"/>
                      <line class="cls-1" x1="300.6" y1="348.79" x2="300.6" y2="354.46"/>
                      <line class="cls-1" x1="306.27" y1="348.79" x2="300.6" y2="348.79"/>
                      <line class="cls-1" x1="306.27" y1="343.12" x2="306.27" y2="348.79"/>
                      <line class="cls-1" x1="311.94" y1="343.12" x2="306.27" y2="343.12"/>
                      <rect class="cls-8" x="907.21" y="311.94" width="85.04" height="85.04"/>
                      <rect class="cls-6" x="907.21" y="141.86" width="85.04" height="113.39"/>
                      <rect class="cls-4" x="878.87" y="170.2" width="28.35" height="56.69"/>
                      <rect class="cls-6" x="1048.94" y="113.51" width="113.39" height="141.73"/>
                      <rect class="cls-2" x="1048.94" y="28.47" width="56.69" height="28.35"/>
                      <rect class="cls-4" x="1105.64" y="28.47" width="28.35" height="28.35"/>
                      <rect class="cls-1" x="283.59" y="28.47" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="283.59" y1="53.98" x2="289.26" y2="53.98"/>
                      <line class="cls-1" x1="289.26" y1="48.31" x2="289.26" y2="53.98"/>
                      <line class="cls-1" x1="294.93" y1="48.31" x2="289.26" y2="48.31"/>
                      <line class="cls-1" x1="294.93" y1="42.64" x2="294.93" y2="48.31"/>
                      <line class="cls-1" x1="300.6" y1="42.64" x2="294.93" y2="42.64"/>
                      <line class="cls-1" x1="300.6" y1="36.98" x2="300.6" y2="42.64"/>
                      <line class="cls-1" x1="306.27" y1="36.98" x2="300.6" y2="36.98"/>
                      <line class="cls-1" x1="306.27" y1="31.31" x2="306.27" y2="36.98"/>
                      <line class="cls-1" x1="311.94" y1="31.31" x2="306.27" y2="31.31"/>
                      <rect class="cls-1" x="482.01" y="28.47" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="482.01" y1="53.98" x2="487.68" y2="53.98"/>
                      <line class="cls-1" x1="487.68" y1="48.31" x2="487.68" y2="53.98"/>
                      <line class="cls-1" x1="493.35" y1="48.31" x2="487.68" y2="48.31"/>
                      <line class="cls-1" x1="493.35" y1="42.64" x2="493.35" y2="48.31"/>
                      <line class="cls-1" x1="499.02" y1="42.64" x2="493.35" y2="42.64"/>
                      <line class="cls-1" x1="499.02" y1="36.98" x2="499.02" y2="42.64"/>
                      <line class="cls-1" x1="504.69" y1="36.98" x2="499.02" y2="36.98"/>
                      <line class="cls-1" x1="504.69" y1="31.31" x2="504.69" y2="36.98"/>
                      <line class="cls-1" x1="510.36" y1="31.31" x2="504.69" y2="31.31"/>
                      <rect class="cls-1" x="482.01" y="340.28" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="482.01" y1="365.79" x2="487.68" y2="365.79"/>
                      <line class="cls-1" x1="487.68" y1="360.12" x2="487.68" y2="365.79"/>
                      <line class="cls-1" x1="493.35" y1="360.12" x2="487.68" y2="360.12"/>
                      <line class="cls-1" x1="493.35" y1="354.46" x2="493.35" y2="360.12"/>
                      <line class="cls-1" x1="499.02" y1="354.46" x2="493.35" y2="354.46"/>
                      <line class="cls-1" x1="499.02" y1="348.79" x2="499.02" y2="354.46"/>
                      <line class="cls-1" x1="504.69" y1="348.79" x2="499.02" y2="348.79"/>
                      <line class="cls-1" x1="504.69" y1="343.12" x2="504.69" y2="348.79"/>
                      <line class="cls-1" x1="510.36" y1="343.12" x2="504.69" y2="343.12"/>
                      <rect class="cls-1" x="652.09" y="198.55" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="652.09" y1="224.06" x2="657.76" y2="224.06"/>
                      <line class="cls-1" x1="657.76" y1="218.39" x2="657.76" y2="224.06"/>
                      <line class="cls-1" x1="663.43" y1="218.39" x2="657.76" y2="218.39"/>
                      <line class="cls-1" x1="663.43" y1="212.72" x2="663.43" y2="218.39"/>
                      <line class="cls-1" x1="669.1" y1="212.72" x2="663.43" y2="212.72"/>
                      <line class="cls-1" x1="669.1" y1="207.05" x2="669.1" y2="212.72"/>
                      <line class="cls-1" x1="674.77" y1="207.05" x2="669.1" y2="207.05"/>
                      <line class="cls-1" x1="674.77" y1="201.38" x2="674.77" y2="207.05"/>
                      <line class="cls-1" x1="680.44" y1="201.38" x2="674.77" y2="201.38"/>
                      <rect class="cls-1" x="680.44" y="170.2" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="680.44" y1="195.72" x2="686.11" y2="195.72"/>
                      <line class="cls-1" x1="686.11" y1="190.05" x2="686.11" y2="195.72"/>
                      <line class="cls-1" x1="691.78" y1="190.05" x2="686.11" y2="190.05"/>
                      <line class="cls-1" x1="691.78" y1="184.38" x2="691.78" y2="190.05"/>
                      <line class="cls-1" x1="697.45" y1="184.38" x2="691.78" y2="184.38"/>
                      <line class="cls-1" x1="697.45" y1="178.71" x2="697.45" y2="184.38"/>
                      <line class="cls-1" x1="703.12" y1="178.71" x2="697.45" y2="178.71"/>
                      <line class="cls-1" x1="703.12" y1="173.04" x2="703.12" y2="178.71"/>
                      <line class="cls-1" x1="708.79" y1="173.04" x2="703.12" y2="173.04"/>
                      <rect class="cls-1" x="850.52" y="340.28" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="850.52" y1="365.79" x2="856.19" y2="365.79"/>
                      <line class="cls-1" x1="856.19" y1="360.12" x2="856.19" y2="365.79"/>
                      <line class="cls-1" x1="861.86" y1="360.12" x2="856.19" y2="360.12"/>
                      <line class="cls-1" x1="861.86" y1="354.46" x2="861.86" y2="360.12"/>
                      <line class="cls-1" x1="867.53" y1="354.46" x2="861.86" y2="354.46"/>
                      <line class="cls-1" x1="867.53" y1="348.79" x2="867.53" y2="354.46"/>
                      <line class="cls-1" x1="873.2" y1="348.79" x2="867.53" y2="348.79"/>
                      <line class="cls-1" x1="873.2" y1="343.12" x2="873.2" y2="348.79"/>
                      <line class="cls-1" x1="878.87" y1="343.12" x2="873.2" y2="343.12"/>
                      <rect class="cls-1" x="850.52" y="28.47" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="850.52" y1="53.98" x2="856.19" y2="53.98"/>
                      <line class="cls-1" x1="856.19" y1="48.31" x2="856.19" y2="53.98"/>
                      <line class="cls-1" x1="861.86" y1="48.31" x2="856.19" y2="48.31"/>
                      <line class="cls-1" x1="861.86" y1="42.64" x2="861.86" y2="48.31"/>
                      <line class="cls-1" x1="867.53" y1="42.64" x2="861.86" y2="42.64"/>
                      <line class="cls-1" x1="867.53" y1="36.98" x2="867.53" y2="42.64"/>
                      <line class="cls-1" x1="873.2" y1="36.98" x2="867.53" y2="36.98"/>
                      <line class="cls-1" x1="873.2" y1="31.31" x2="873.2" y2="36.98"/>
                      <line class="cls-1" x1="878.87" y1="31.31" x2="873.2" y2="31.31"/>
                      <rect class="cls-1" x="992.25" y="340.28" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="992.25" y1="365.79" x2="997.92" y2="365.79"/>
                      <line class="cls-1" x1="997.92" y1="360.12" x2="997.92" y2="365.79"/>
                      <line class="cls-1" x1="1003.59" y1="360.12" x2="997.92" y2="360.12"/>
                      <line class="cls-1" x1="1003.59" y1="354.46" x2="1003.59" y2="360.12"/>
                      <line class="cls-1" x1="1009.26" y1="354.46" x2="1003.59" y2="354.46"/>
                      <line class="cls-1" x1="1009.26" y1="348.79" x2="1009.26" y2="354.46"/>
                      <line class="cls-1" x1="1014.93" y1="348.79" x2="1009.26" y2="348.79"/>
                      <line class="cls-1" x1="1014.93" y1="343.12" x2="1014.93" y2="348.79"/>
                      <line class="cls-1" x1="1020.6" y1="343.12" x2="1014.93" y2="343.12"/>
                      <rect class="cls-1" x="992.25" y="28.47" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="992.25" y1="53.98" x2="997.92" y2="53.98"/>
                      <line class="cls-1" x1="997.92" y1="48.31" x2="997.92" y2="53.98"/>
                      <line class="cls-1" x1="1003.59" y1="48.31" x2="997.92" y2="48.31"/>
                      <line class="cls-1" x1="1003.59" y1="42.64" x2="1003.59" y2="48.31"/>
                      <line class="cls-1" x1="1009.26" y1="42.64" x2="1003.59" y2="42.64"/>
                      <line class="cls-1" x1="1009.26" y1="36.98" x2="1009.26" y2="42.64"/>
                      <line class="cls-1" x1="1014.93" y1="36.98" x2="1009.26" y2="36.98"/>
                      <line class="cls-1" x1="1014.93" y1="31.31" x2="1014.93" y2="36.98"/>
                      <line class="cls-1" x1="1020.6" y1="31.31" x2="1014.93" y2="31.31"/>
                      <line class="cls-1" x1="110.68" y1="326.11" x2="110.68" y2="311.94"/>
                      <line class="cls-1" x1="96.5" y1="311.94" x2="110.68" y2="311.94"/>
                      <path class="cls-1" d="m110.68,326.11c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <line class="cls-1" x1="130.52" y1="311.94" x2="116.35" y2="311.94"/>
                      <line class="cls-1" x1="116.35" y1="326.11" x2="116.35" y2="311.94"/>
                      <path class="cls-1" d="m130.52,311.94c0,7.83-6.35,14.17-14.17,14.17"/>
                      <line class="cls-1" x1="85.16" y1="218.39" x2="85.16" y2="204.22"/>
                      <line class="cls-1" x1="70.99" y1="204.22" x2="85.16" y2="204.22"/>
                      <path class="cls-1" d="m85.16,218.39c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <g>
                        <line class="cls-1" x1="70.99" y1="192.88" x2="85.16" y2="192.88"/>
                        <line class="cls-1" x1="85.16" y1="178.71" x2="85.16" y2="192.88"/>
                        <path class="cls-1" d="m70.99,192.88c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <g>
                        <line class="cls-1" x1="93.67" y1="85.16" x2="107.84" y2="85.16"/>
                        <line class="cls-1" x1="107.84" y1="70.99" x2="107.84" y2="85.16"/>
                        <path class="cls-1" d="m93.67,85.16c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <g>
                        <line class="cls-1" x1="178.71" y1="85.16" x2="192.88" y2="85.16"/>
                        <line class="cls-1" x1="192.88" y1="70.99" x2="192.88" y2="85.16"/>
                        <path class="cls-1" d="m178.71,85.16c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <g>
                        <line class="cls-1" x1="235.4" y1="85.16" x2="249.57" y2="85.16"/>
                        <line class="cls-1" x1="249.57" y1="70.99" x2="249.57" y2="85.16"/>
                        <path class="cls-1" d="m235.4,85.16c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <g>
                        <line class="cls-1" x1="207.05" y1="255.24" x2="221.23" y2="255.24"/>
                        <line class="cls-1" x1="221.23" y1="241.07" x2="221.23" y2="255.24"/>
                        <path class="cls-1" d="m207.05,255.24c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <line class="cls-1" x1="249.57" y1="326.11" x2="249.57" y2="311.94"/>
                      <line class="cls-1" x1="235.4" y1="311.94" x2="249.57" y2="311.94"/>
                      <path class="cls-1" d="m249.57,326.11c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <line class="cls-1" x1="261.37" y1="240.84" x2="261.13" y2="255.01"/>
                      <line class="cls-1" x1="275.3" y1="255.48" x2="261.13" y2="255.24"/>
                      <path class="cls-1" d="m261.37,240.84c7.83.13,14.07,6.58,13.94,14.41"/>
                      <g>
                        <line class="cls-1" x1="433.83" y1="85.16" x2="448" y2="85.16"/>
                        <line class="cls-1" x1="448" y1="70.99" x2="448" y2="85.16"/>
                        <path class="cls-1" d="m433.83,85.16c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <line class="cls-1" x1="567.05" y1="150.36" x2="566.82" y2="164.53"/>
                      <line class="cls-1" x1="581.23" y1="164.77" x2="567.05" y2="164.53"/>
                      <path class="cls-1" d="m567.29,150.36c7.83.13,14.07,6.58,13.94,14.41"/>
                      <line class="cls-1" x1="581.23" y1="232.57" x2="567.05" y2="232.57"/>
                      <line class="cls-1" x1="567.05" y1="246.74" x2="567.05" y2="232.57"/>
                      <path class="cls-1" d="m581.23,232.57c0,7.83-6.35,14.17-14.17,14.17"/>
                      <line class="cls-1" x1="448" y1="326.11" x2="448" y2="311.94"/>
                      <line class="cls-1" x1="433.83" y1="311.94" x2="448" y2="311.94"/>
                      <path class="cls-1" d="m448,326.11c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <g>
                        <line class="cls-1" x1="547.21" y1="85.16" x2="561.38" y2="85.16"/>
                        <line class="cls-1" x1="561.38" y1="70.99" x2="561.38" y2="85.16"/>
                        <path class="cls-1" d="m547.21,85.16c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <g>
                        <line class="cls-8" x1="603.9" y1="85.16" x2="618.08" y2="85.16"/>
                        <line class="cls-8" x1="618.08" y1="70.99" x2="618.08" y2="85.16"/>
                        <path class="cls-8" d="m603.9,85.16c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <g>
                        <line class="cls-8" x1="660.6" y1="85.16" x2="674.77" y2="85.16"/>
                        <line class="cls-8" x1="674.77" y1="70.99" x2="674.77" y2="85.16"/>
                        <path class="cls-8" d="m660.6,85.16c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <g>
                        <line class="cls-8" x1="717.29" y1="85.16" x2="731.46" y2="85.16"/>
                        <line class="cls-8" x1="731.46" y1="70.99" x2="731.46" y2="85.16"/>
                        <path class="cls-8" d="m717.29,85.16c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <g>
                        <line class="cls-1" x1="773.98" y1="85.16" x2="788.16" y2="85.16"/>
                        <line class="cls-1" x1="788.16" y1="70.99" x2="788.16" y2="85.16"/>
                        <path class="cls-1" d="m773.98,85.16c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <g>
                        <line class="cls-1" x1="802.33" y1="85.16" x2="816.5" y2="85.16"/>
                        <line class="cls-1" x1="816.5" y1="70.99" x2="816.5" y2="85.16"/>
                        <path class="cls-1" d="m802.33,85.16c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <line class="cls-1" x1="913.12" y1="70.99" x2="912.88" y2="85.16"/>
                      <line class="cls-1" x1="927.05" y1="85.4" x2="912.88" y2="85.16"/>
                      <path class="cls-1" d="m913.12,70.99c7.83.13,14.07,6.58,13.94,14.41"/>
                      <line class="cls-1" x1="453.67" y1="246.74" x2="453.67" y2="232.57"/>
                      <line class="cls-1" x1="439.5" y1="232.57" x2="453.67" y2="232.57"/>
                      <path class="cls-1" d="m453.67,246.74c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <line class="cls-1" x1="439.5" y1="164.53" x2="453.67" y2="164.53"/>
                      <line class="cls-1" x1="453.67" y1="150.36" x2="453.67" y2="164.53"/>
                      <path class="cls-1" d="m439.5,164.53c0-7.83,6.35-14.17,14.17-14.17"/>
                      <line class="cls-8" x1="618.08" y1="326.11" x2="618.08" y2="311.94"/>
                      <line class="cls-8" x1="603.9" y1="311.94" x2="618.08" y2="311.94"/>
                      <path class="cls-8" d="m618.08,326.11c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <line class="cls-8" x1="731.46" y1="326.11" x2="731.46" y2="311.94"/>
                      <line class="cls-8" x1="717.29" y1="311.94" x2="731.46" y2="311.94"/>
                      <path class="cls-8" d="m731.46,326.11c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <line class="cls-1" x1="986.58" y1="326.11" x2="986.58" y2="311.94"/>
                      <line class="cls-1" x1="972.41" y1="311.94" x2="986.58" y2="311.94"/>
                      <path class="cls-1" d="m986.58,326.11c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <line class="cls-1" x1="921.38" y1="232.57" x2="907.21" y2="232.57"/>
                      <line class="cls-1" x1="907.21" y1="246.74" x2="907.21" y2="232.57"/>
                      <path class="cls-1" d="m921.38,232.57c0,7.83-6.35,14.17-14.17,14.17"/>
                      <line class="cls-1" x1="907.21" y1="147.53" x2="906.98" y2="161.7"/>
                      <line class="cls-1" x1="921.38" y1="161.93" x2="907.21" y2="161.7"/>
                      <path class="cls-1" d="m907.45,147.53c7.83.13,14.07,6.58,13.94,14.41"/>
                      <g>
                        <line class="cls-1" x1="779.65" y1="164.53" x2="793.83" y2="164.53"/>
                        <line class="cls-1" x1="793.83" y1="150.36" x2="793.83" y2="164.53"/>
                        <path class="cls-1" d="m779.65,164.53c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <line class="cls-1" x1="793.83" y1="246.74" x2="793.83" y2="232.57"/>
                      <line class="cls-1" x1="779.65" y1="232.57" x2="793.83" y2="232.57"/>
                      <path class="cls-1" d="m793.83,246.74c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <line class="cls-1" x1="788.16" y1="326.11" x2="788.16" y2="311.94"/>
                      <line class="cls-1" x1="773.98" y1="311.94" x2="788.16" y2="311.94"/>
                      <path class="cls-1" d="m788.16,326.11c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <rect class="cls-7" x="226.9" y="141.86" width="28.35" height="28.35"/>
                      <text class="cls-9" transform="translate(41.83 357.29)"><tspan x="0" y="0">279F</tspan></text>
                      <text class="cls-9" transform="translate(27.65 243.9)"><tspan x="0" y="0">280F</tspan></text>
                      <text class="cls-9" transform="translate(141.04 357.29)"><tspan x="0" y="0">277F</tspan></text>
                      <text class="cls-9" transform="translate(27.65 158.86)"><tspan x="0" y="0">281F</tspan></text>
                      <text class="cls-9" transform="translate(41.83 48.31)"><tspan x="0" y="0">278F</tspan></text>
                      <text class="cls-9" transform="translate(141.04 48.31)"><tspan x="0" y="0">274F</tspan></text>
                      <text class="cls-9" transform="translate(172.22 201.43)"><tspan x="0" y="0">275F</tspan></text>
                      <text class="cls-9" transform="translate(282.77 201.43)"><tspan x="0" y="0">270F</tspan></text>
                      <text class="cls-9" transform="translate(381.96 48.31)"><tspan x="0" y="0">264E</tspan></text>
                      <text class="cls-9" transform="translate(385.03 201.38)"><tspan x="0" y="0">12E-2</tspan></text>
                      <text class="cls-9" transform="translate(381.96 357.29)"><tspan x="0" y="0">265E</tspan></text>
                      <text class="cls-9" transform="translate(600.47 201.43)"><tspan x="0" y="0">11E-2</tspan></text>
                      <text class="cls-9" transform="translate(583.21 357.29)"><tspan x="0" y="0">253E</tspan></text>
                      <text class="cls-9" transform="translate(583.22 48.31)"><tspan x="0" y="0">248E</tspan></text>
                      <text class="cls-9" transform="translate(639.91 48.31)"><tspan x="0" y="0">244E</tspan></text>
                      <text class="cls-9" transform="translate(668.25 357.29)"><tspan x="0" y="0">247E</tspan></text>
                      <text class="cls-9" transform="translate(744.75 201.43)"><tspan x="0" y="0">7C-2</tspan></text>
                      <text class="cls-9" transform="translate(696.07 48.31)"><tspan x="0" y="0">238C</tspan></text>
                      <text class="cls-9" transform="translate(752.77 357.29)"><tspan x="0" y="0">237C</tspan></text>
                      <text class="cls-9" transform="translate(752.77 48.31)"><tspan x="0" y="0">234C</tspan></text>
                      <text class="cls-9" transform="translate(943.17 201.43)"><tspan x="0" y="0">6C-2</tspan></text>
                      <text class="cls-9" transform="translate(937.02 76.66)"><tspan x="0" y="0">226C</tspan></text>
                      <text class="cls-9" transform="translate(937.02 357.29)"><tspan x="0" y="0">227C</tspan></text>
                      <text class="cls-9" transform="translate(1098.89 187.21)"><tspan x="0" y="0">2A</tspan></text>
                      <line class="cls-1" x1="1049.18" y1="122.01" x2="1048.94" y2="136.19"/>
                      <line class="cls-1" x1="1063.12" y1="136.42" x2="1048.94" y2="136.19"/>
                      <path class="cls-1" d="m1049.18,122.01c7.83.13,14.07,6.58,13.94,14.41"/>
                      <line class="cls-1" x1="1063.12" y1="229.73" x2="1048.94" y2="229.73"/>
                      <line class="cls-1" x1="1048.94" y1="243.9" x2="1048.94" y2="229.73"/>
                      <path class="cls-1" d="m1063.12,229.73c0,7.83-6.35,14.17-14.17,14.17"/>
                    
                      <!-- les noeuds  -->
  
                      <circle id="277F" class="cls-noeud" cx="129.1" cy="282.17" r="7.09"/>
                      <circle id="279F" class="cls-noeud" cx="100.75" cy="282.17" r="7.09"/>
                      <circle id="280F" class="cls-noeud" cx="100.75" cy="211.31" r="7.09"/>
                      <circle id="281F" class="cls-noeud" cx="100.75" cy="185.79" r="7.09"/>
                      <circle id="278F" class="cls-noeud" cx="100.75" cy="112.09" r="7.09"/>
                      <circle id="274F" class="cls-noeud" cx="185.79" cy="112.09" r="7.09"/>
                      <circle id="275F" class="cls-noeud" cx="214.14" cy="282.17" r="7.09"/>
                      <circle id="270F" class="cls-noeud" cx="268" cy="282.17" r="7.09"/>
                      <circle id="264E" class="cls-noeud" cx="440.91" cy="112.09" r="7.09"/>
                      <circle id="265E" class="cls-noeud" cx="440.91" cy="282.17" r="7.09"/>
                      <circle id="12E-2" class="cls-noeud" cx="508.94" cy="199.97" r="7.09"/>
                      <circle id="11E-2" class="cls-noeud" cx="540.12" cy="199.97" r="7.09"/>
                      <circle id="7C-2" class="cls-noeud" cx="820.75" cy="199.97" r="7.09"/>
                      <circle id="6C-2" class="cls-noeud" cx="851.94" cy="199.97" r="7.09"/>
                      <circle id="2A" class="cls-noeud" cx="1022.01" cy="199.97" r="7.09"/>
                      <circle id="248E" class="cls-noeud" cx="608.16" cy="112.09" r="7.09"/>
                      <circle id="244E" class="cls-noeud" cx="664.85" cy="112.09" r="7.09"/>
                      <circle id="238C" class="cls-noeud" cx="724.38" cy="112.09" r="7.09"/>
                      <circle id="234C" class="cls-noeud" cx="781.07" cy="112.09" r="7.09"/>
                      <circle id="237C" class="cls-noeud" cx="781.07" cy="282.17" r="7.09"/>
                      <circle id="247E" class="cls-noeud" cx="721.54" cy="282.17" r="7.09"/>
                      <circle id="253E" class="cls-noeud" cx="610.99" cy="282.17" r="7.09"/>
                      <circle id="226C" class="cls-noeud" cx="922.8" cy="112.09" r="7.09"/>
                      <circle id="227C" class="cls-noeud" cx="979.5" cy="282.17" r="7.09"/>
                      <circle id="A1-2" class="cls-noeud" cx="508.94" cy="112.09" r="7.09"/>
                      <circle id="B2-2" class="cls-noeud" cx="540.12" cy="112.09" r="7.09"/>
                      <circle id="C3-2" class="cls-noeud" cx="508.94" cy="282.17" r="7.09"/>
                      <circle id="D4-2" class="cls-noeud" cx="540.12" cy="282.17" r="7.09"/>
                      <circle id="E5-2" class="cls-noeud" cx="820.75" cy="112.09" r="7.09"/>
                      <circle id="F6-2" class="cls-noeud" cx="823.59" cy="282.17" r="7.09"/>
                      <circle id="G7-2" class="cls-noeud" cx="851.94" cy="112.09" r="7.09"/>
                      <circle id="H8-2" class="cls-noeud" cx="851.94" cy="282.17" r="7.09"/>
                      <circle id="I9-2" class="cls-noeud" cx="1022.01" cy="112.09" r="7.09"/>
                      <circle id="J10-2" class="cls-noeud" cx="1022.01" cy="282.17" r="7.09"/>

                      <circle id="K11-2" class="cls-noeud" cx="297.34" cy="282.42" r="7.1"/>
                      <circle id="L12-2" class="cls-noeud" cx="297.39" cy="110.83" r="7.1"/>
                      <circle id="M13-2" class="cls-noeud" cx="495.96" cy="281.83" r="7.1"/>
                      <circle id="N14-2" class="cls-noeud" cx="495.96" cy="111.83" r="7.1"/>
                      <circle id="O15-2" class="cls-noeud" cx="864.32" cy="111.83" r="7.1"/>
                      <circle id="P16-2" class="cls-noeud" cx="864.32" cy="281.83" r="7.1"/>
                      <circle id="Q17-2" class="cls-noeud" cx="1006.32" cy="281.83" r="7.1"/>
                      <circle id="R18-2" class="cls-noeud" cx="1006.32" cy="111.83" r="7.1"/>
                      <circle id="TR1-2" class="cls-noeud" cx="298.07" cy="340.83" r="7.1"/>
                      <circle id="TR2-2" class="cls-noeud" cx="297.07" cy="56.83" r="7.1"/>
                      <circle id="TR3-2" class="cls-noeud" cx="496.45" cy="340.83" r="7.1"/>
                      <circle id="TR4-2" class="cls-noeud" cx="496.45" cy="56.83" r="7.1"/>
                      <circle id="TR5-2" class="cls-noeud" cx="863.92" cy="339.83" r="7.1"/>
                      <circle id="TR6-2" class="cls-noeud" cx="864.92" cy="56.83" r="7.1"/>
                      <circle id="TR7-2" class="cls-noeud" cx="1005.92" cy="339.83" r="7.1"/>
                      <circle id="TR8-2" class="cls-noeud" cx="1005.92" cy="56.83" r="7.1"/>
  
                      <!-- utilisateur -->
  
                      <!-- <circle class="cls-10" id="userCircle" cx="550.4" cy="250.68" r="5.67"/> -->
  
                    </svg>

                     <!-- Grille en superposition -->
                     <svg id="gridOverlay_floor2" viewBox="0 0 1162.45 397.1">
                        <!-- Lignes de grille seront ajoutées ici via JavaScript -->
                    </svg>
                    
                  </div>
                  <div id="etage3" class="etage">
                  <?php
                  echo '<?xml version="1.0" encoding="UTF-8"?>';
                  ?>

                    <svg id="Calque_3" data-name="Calque 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1162.45 397.1">
                      <defs>
                        <style>
                        #etage3 .cls-1 {
                            fill: none;
                          }

                          #etage3 .cls-1,#etage3 .cls-2,#etage3 .cls-3,#etage3 .cls-4,#etage3 .cls-5,#etage3 .cls-6 {
                            stroke: #1d1d1b;
                            stroke-miterlimit: 10;
                            stroke-width: .25px;
                          }

                          #etage3 .cls-7 {
                            letter-spacing: -.07em;
                          }

                          #etage3 .cls-8,#etage3 .cls-9 {
                            isolation: isolate;
                          }

                          #etage3 .cls-2 {
                            fill: #fff;
                          }

                          #etage3 .cls-3 {
                            fill: #e94e1b;
                          }

                          #etage3 .cls-9 {
                            fill: #1d1d1b;
                            font-family: ArialMT, Arial;
                            font-size: 12px;
                          }

                          #etage3 .cls-4 {
                            fill: #8ecbb5;
                          }

                          #etage3 .cls-5 {
                            fill: #e6332a;
                          }

                          #etage3 .cls-6 {
                            fill: #c8d972;
                          }

                          
                          #etage3 .cls-noeud {
                            stroke: none;
                            fill: none;
                          }

                        </style>
                      </defs>
                      <line class="cls-1" x1="256.08" y1="170.34" x2="255.25" y2="255.25"/>
                      <rect class="cls-6" x="255.25" y="141.87" width="85.04" height="113.39"/>
                      <rect class="cls-4" x="340.28" y="142.14" width="82.98" height="113.39"/>
                      <rect class="cls-3" x="423.68" y="170.2" width="28.35" height="56.69"/>
                      <rect class="cls-1" x="283.59" y="340.28" width="28.35" height="28.35"/>
                      <rect class="cls-4" x="537.05" y="142.14" width="85.04" height="113.39"/>
                      <rect class="cls-4" x="678.79" y="141.87" width="85.04" height="113.39"/>
                      <line class="cls-1" x1="255.25" y1=".12" x2="340.28" y2=".12"/>
                      <line class="cls-1" x1="423.68" y1=".12" x2="537.05" y2=".13"/>
                      <line class="cls-1" x1="763.84" y1=".13" x2="877.22" y2=".41"/>
                      <line class="cls-1" x1="905.26" y1=".13" x2="990.3" y2=".41"/>
                      <line class="cls-1" x1="906.26" y1="395.85" x2="991.3" y2="396.27"/>
                      <line class="cls-1" x1="935.26" y1="255.25" x2="935.26" y2="312.23"/>
                      <line class="cls-1" x1="877.22" y1="396.99" x2="763.84" y2="396.99"/>
                      <line class="cls-1" x1="537.05" y1="396.99" x2="423.68" y2="396.99"/>
                      <line class="cls-1" x1="283.59" y1="365.8" x2="289.27" y2="365.8"/>
                      <line class="cls-1" x1="289.27" y1="360.12" x2="289.27" y2="365.8"/>
                      <line class="cls-1" x1="294.93" y1="360.12" x2="289.27" y2="360.12"/>
                      <line class="cls-1" x1="294.93" y1="354.46" x2="294.93" y2="360.12"/>
                      <line class="cls-1" x1="300.61" y1="354.46" x2="294.93" y2="354.46"/>
                      <line class="cls-1" x1="300.61" y1="348.8" x2="300.61" y2="354.46"/>
                      <line class="cls-1" x1="306.27" y1="348.8" x2="300.61" y2="348.8"/>
                      <line class="cls-1" x1="306.27" y1="343.12" x2="306.27" y2="348.8"/>
                      <line class="cls-1" x1="311.95" y1="343.12" x2="306.27" y2="343.12"/>
                      <rect class="cls-4" x="877.22" y="141.87" width="58.04" height="113.39"/>
                      <rect class="cls-3" x="848.87" y="170.2" width="28.35" height="56.69"/>
                      <rect class="cls-3" x="1076.69" y="28.47" width="28.35" height="28.35"/>
                      <rect class="cls-1" x="283.59" y="28.47" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="283.59" y1="53.98" x2="289.27" y2="53.98"/>
                      <line class="cls-1" x1="289.27" y1="48.32" x2="289.27" y2="53.98"/>
                      <line class="cls-1" x1="294.93" y1="48.32" x2="289.27" y2="48.32"/>
                      <line class="cls-1" x1="294.93" y1="42.64" x2="294.93" y2="48.32"/>
                      <line class="cls-1" x1="300.61" y1="42.64" x2="294.93" y2="42.64"/>
                      <line class="cls-1" x1="300.61" y1="36.98" x2="300.61" y2="42.64"/>
                      <line class="cls-1" x1="306.27" y1="36.98" x2="300.61" y2="36.98"/>
                      <line class="cls-1" x1="306.27" y1="31.31" x2="306.27" y2="36.98"/>
                      <line class="cls-1" x1="311.95" y1="31.31" x2="306.27" y2="31.31"/>
                      <rect class="cls-1" x="452.02" y="28.47" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="452.02" y1="53.98" x2="457.68" y2="53.98"/>
                      <line class="cls-1" x1="457.68" y1="48.32" x2="457.68" y2="53.98"/>
                      <line class="cls-1" x1="463.36" y1="48.32" x2="457.68" y2="48.32"/>
                      <line class="cls-1" x1="463.36" y1="42.64" x2="463.36" y2="48.32"/>
                      <line class="cls-1" x1="469.02" y1="42.64" x2="463.36" y2="42.64"/>
                      <line class="cls-1" x1="469.02" y1="36.98" x2="469.02" y2="42.64"/>
                      <line class="cls-1" x1="474.7" y1="36.98" x2="469.02" y2="36.98"/>
                      <line class="cls-1" x1="474.7" y1="31.31" x2="474.7" y2="36.98"/>
                      <line class="cls-1" x1="480.36" y1="31.31" x2="474.7" y2="31.31"/>
                      <rect class="cls-1" x="452.02" y="340.28" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="452.02" y1="365.8" x2="457.68" y2="365.8"/>
                      <line class="cls-1" x1="457.68" y1="360.12" x2="457.68" y2="365.8"/>
                      <line class="cls-1" x1="463.36" y1="360.12" x2="457.68" y2="360.12"/>
                      <line class="cls-1" x1="463.36" y1="354.46" x2="463.36" y2="360.12"/>
                      <line class="cls-1" x1="469.02" y1="354.46" x2="463.36" y2="354.46"/>
                      <line class="cls-1" x1="469.02" y1="348.8" x2="469.02" y2="354.46"/>
                      <line class="cls-1" x1="474.7" y1="348.8" x2="469.02" y2="348.8"/>
                      <line class="cls-1" x1="474.7" y1="343.12" x2="474.7" y2="348.8"/>
                      <line class="cls-1" x1="480.36" y1="343.12" x2="474.7" y2="343.12"/>
                      <rect class="cls-1" x="622.1" y="198.56" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="622.1" y1="224.06" x2="627.77" y2="224.06"/>
                      <line class="cls-1" x1="627.77" y1="218.39" x2="627.77" y2="224.06"/>
                      <line class="cls-1" x1="633.43" y1="218.39" x2="627.77" y2="218.39"/>
                      <line class="cls-1" x1="633.43" y1="212.73" x2="633.43" y2="218.39"/>
                      <line class="cls-1" x1="639.1" y1="212.73" x2="633.43" y2="212.73"/>
                      <line class="cls-1" x1="639.1" y1="207.06" x2="639.1" y2="212.73"/>
                      <line class="cls-1" x1="644.78" y1="207.06" x2="639.1" y2="207.06"/>
                      <line class="cls-1" x1="644.78" y1="201.39" x2="644.78" y2="207.06"/>
                      <line class="cls-1" x1="650.45" y1="201.39" x2="644.78" y2="201.39"/>
                      <rect class="cls-1" x="650.45" y="170.2" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="650.45" y1="195.73" x2="656.11" y2="195.73"/>
                      <line class="cls-1" x1="656.11" y1="190.06" x2="656.11" y2="195.73"/>
                      <line class="cls-1" x1="661.79" y1="190.06" x2="656.11" y2="190.06"/>
                      <line class="cls-1" x1="661.79" y1="184.39" x2="661.79" y2="190.06"/>
                      <line class="cls-1" x1="667.46" y1="184.39" x2="661.79" y2="184.39"/>
                      <line class="cls-1" x1="667.46" y1="178.72" x2="667.46" y2="184.39"/>
                      <line class="cls-1" x1="673.12" y1="178.72" x2="667.46" y2="178.72"/>
                      <line class="cls-1" x1="673.12" y1="173.04" x2="673.12" y2="178.72"/>
                      <line class="cls-1" x1="678.79" y1="173.04" x2="673.12" y2="173.04"/>
                      <rect class="cls-1" x="820.53" y="340.28" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="820.53" y1="365.8" x2="826.2" y2="365.8"/>
                      <line class="cls-1" x1="826.2" y1="360.12" x2="826.2" y2="365.8"/>
                      <line class="cls-1" x1="831.86" y1="360.12" x2="826.2" y2="360.12"/>
                      <line class="cls-1" x1="831.86" y1="354.46" x2="831.86" y2="360.12"/>
                      <line class="cls-1" x1="837.54" y1="354.46" x2="831.86" y2="354.46"/>
                      <line class="cls-1" x1="837.54" y1="348.8" x2="837.54" y2="354.46"/>
                      <line class="cls-1" x1="843.21" y1="348.8" x2="837.54" y2="348.8"/>
                      <line class="cls-1" x1="843.21" y1="343.12" x2="843.21" y2="348.8"/>
                      <line class="cls-1" x1="848.87" y1="343.12" x2="843.21" y2="343.12"/>
                      <rect class="cls-1" x="820.53" y="28.47" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="820.53" y1="53.98" x2="826.2" y2="53.98"/>
                      <line class="cls-1" x1="826.2" y1="48.32" x2="826.2" y2="53.98"/>
                      <line class="cls-1" x1="831.86" y1="48.32" x2="826.2" y2="48.32"/>
                      <line class="cls-1" x1="831.86" y1="42.64" x2="831.86" y2="48.32"/>
                      <line class="cls-1" x1="837.54" y1="42.64" x2="831.86" y2="42.64"/>
                      <line class="cls-1" x1="837.54" y1="36.98" x2="837.54" y2="42.64"/>
                      <line class="cls-1" x1="843.21" y1="36.98" x2="837.54" y2="36.98"/>
                      <line class="cls-1" x1="843.21" y1="31.31" x2="843.21" y2="36.98"/>
                      <line class="cls-1" x1="848.87" y1="31.31" x2="843.21" y2="31.31"/>
                      <rect class="cls-1" x="907.26" y="340.28" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="907.26" y1="365.8" x2="912.92" y2="365.8"/>
                      <line class="cls-1" x1="912.92" y1="360.12" x2="912.92" y2="365.8"/>
                      <line class="cls-1" x1="918.6" y1="360.12" x2="912.92" y2="360.12"/>
                      <line class="cls-1" x1="918.6" y1="354.46" x2="918.6" y2="360.12"/>
                      <line class="cls-1" x1="924.27" y1="354.46" x2="918.6" y2="354.46"/>
                      <line class="cls-1" x1="924.27" y1="348.8" x2="924.27" y2="354.46"/>
                      <line class="cls-1" x1="929.93" y1="348.8" x2="924.27" y2="348.8"/>
                      <line class="cls-1" x1="929.93" y1="343.12" x2="929.93" y2="348.8"/>
                      <line class="cls-1" x1="935.6" y1="343.12" x2="929.93" y2="343.12"/>
                      <rect class="cls-1" x="907.26" y="28.47" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="907.26" y1="53.98" x2="912.92" y2="53.98"/>
                      <line class="cls-1" x1="912.92" y1="48.32" x2="912.92" y2="53.98"/>
                      <line class="cls-1" x1="918.6" y1="48.32" x2="912.92" y2="48.32"/>
                      <line class="cls-1" x1="918.6" y1="42.64" x2="918.6" y2="48.32"/>
                      <line class="cls-1" x1="924.27" y1="42.64" x2="918.6" y2="42.64"/>
                      <line class="cls-1" x1="924.27" y1="36.98" x2="924.27" y2="42.64"/>
                      <line class="cls-1" x1="929.93" y1="36.98" x2="924.27" y2="36.98"/>
                      <line class="cls-1" x1="929.93" y1="31.31" x2="929.93" y2="36.98"/>
                      <line class="cls-1" x1="935.6" y1="31.31" x2="929.93" y2="31.31"/>
                      <line class="cls-1" x1="261.37" y1="240.84" x2="261.14" y2="255.01"/>
                      <line class="cls-1" x1="275.3" y1="255.48" x2="261.14" y2="255.25"/>
                      <path class="cls-1" d="m261.37,240.84c7.83.13,14.07,6.58,13.94,14.41"/>
                      <line class="cls-1" x1="537.05" y1="150.37" x2="536.83" y2="164.53"/>
                      <line class="cls-1" x1="551.23" y1="164.78" x2="537.05" y2="164.53"/>
                      <path class="cls-1" d="m537.29,150.37c7.83.13,14.07,6.58,13.94,14.41"/>
                      <line class="cls-1" x1="551.23" y1="232.58" x2="537.05" y2="232.58"/>
                      <line class="cls-1" x1="537.05" y1="246.75" x2="537.05" y2="232.58"/>
                      <path class="cls-1" d="m551.23,232.58c0,7.83-6.35,14.17-14.17,14.17"/>
                      <line class="cls-1" x1="423.68" y1="246.75" x2="423.68" y2="232.58"/>
                      <line class="cls-1" x1="409.51" y1="232.58" x2="423.68" y2="232.58"/>
                      <path class="cls-1" d="m423.68,246.75c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <line class="cls-1" x1="409.51" y1="164.53" x2="423.68" y2="164.53"/>
                      <line class="cls-1" x1="423.68" y1="150.37" x2="423.68" y2="164.53"/>
                      <path class="cls-1" d="m409.51,164.53c0-7.83,6.35-14.17,14.17-14.17"/>
                      <line class="cls-1" x1="891.39" y1="232.58" x2="877.22" y2="232.58"/>
                      <line class="cls-1" x1="877.22" y1="246.75" x2="877.22" y2="232.58"/>
                      <path class="cls-1" d="m891.39,232.58c0,7.83-6.35,14.17-14.17,14.17"/>
                      <line class="cls-1" x1="877.22" y1="147.53" x2="876.98" y2="161.7"/>
                      <line class="cls-1" x1="891.39" y1="161.93" x2="877.22" y2="161.7"/>
                      <path class="cls-1" d="m877.46,147.53c7.83.13,14.07,6.58,13.94,14.41"/>
                      <g>
                        <line class="cls-1" x1="749.66" y1="164.53" x2="763.84" y2="164.53"/>
                        <line class="cls-1" x1="763.84" y1="150.37" x2="763.84" y2="164.53"/>
                        <path class="cls-1" d="m749.66,164.53c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <line class="cls-1" x1="763.84" y1="246.75" x2="763.84" y2="232.58"/>
                      <line class="cls-1" x1="749.66" y1="232.58" x2="763.84" y2="232.58"/>
                      <path class="cls-1" d="m763.84,246.75c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <g class="cls-8">
                        <text class="cls-9" transform="translate(282.77 201.43)"><tspan x="0" y="0">370F</tspan></text>
                      </g>
                      <g class="cls-8">
                        <text class="cls-9" transform="translate(369.03 201.39)"><tspan x="0" y="0">12E-3</tspan></text>
                      </g>
                      <g class="cls-8">
                        <text class="cls-9" transform="translate(570.47 201.43)"><tspan class="cls-7" x="0" y="0">1</tspan><tspan x="5.78" y="0">1E-3</tspan></text>
                      </g>
                      <g class="cls-8">
                        <text class="cls-9" transform="translate(714.76 201.43)"><tspan x="0" y="0">7C-3</tspan></text>
                      </g>
                      <g class="cls-8">
                        <text class="cls-9" transform="translate(901.17 201.43)"><tspan x="0" y="0">6C-3</tspan></text>
                      </g>
                      <circle class="cls-1" cx="236.04" cy="186.01" r="7.09"/>
                      <polygon class="cls-2" points="255.25 255.25 226.9 255.25 227.73 170.34 256.08 170.34 255.25 255.25"/>
                      <rect class="cls-5" x="226.9" y="141.87" width="28.35" height="28.35"/>
                      <line class="cls-1" x1="537.05" y1=".13" x2="537.05" y2="141.87"/>
                      <line class="cls-1" x1="622.1" y1="141.87" x2="678.79" y2="141.87"/>
                      <line class="cls-1" x1="763.84" y1=".13" x2="763.84" y2="141.87"/>
                      <line class="cls-1" x1="537.05" y1="396.99" x2="537.05" y2="255.53"/>
                      <line class="cls-1" x1="622.1" y1="255.25" x2="678.79" y2="255.25"/>
                      <line class="cls-1" x1="763.84" y1="255.25" x2="763.84" y2="396.99"/>
                      <line class="cls-1" x1="255.25" y1="396.99" x2="340.28" y2="396.99"/>
                      <line class="cls-1" x1="340.28" y1=".41" x2="340.28" y2="142.14"/>
                      <line class="cls-1" x1="423.68" y1=".41" x2="423.68" y2="142.14"/>
                      <line class="cls-1" x1="340.28" y1="255.53" x2="340.28" y2="397.27"/>
                      <line class="cls-1" x1="423.68" y1="255.53" x2="423.68" y2="397.27"/>
                      <rect class="cls-6" x="141.87" y="142.14" width="85.04" height="113.39"/>
                      <rect class="cls-2" x="198.56" y=".41" width="56.69" height="85.04"/>
                      <rect class="cls-2" x="198.56" y="312.23" width="56.69" height="85.04"/>
                      <rect class="cls-6" x="113.52" y="312.23" width="85.04" height="85.04"/>
                      <rect class="cls-6" x="113.52" y=".41" width="85.04" height="85.04"/>
                      <rect class="cls-6" x=".12" y="312.23" width="113.39" height="85.04"/>
                      <rect class="cls-6" x=".12" y=".41" width="113.39" height="85.04"/>
                      <rect class="cls-6" x=".13" y="198.84" width="85.04" height="113.39"/>
                      <rect class="cls-6" x=".13" y="85.45" width="85.04" height="113.39"/>
                      <line class="cls-1" x1="877.22" y1="255.53" x2="877.22" y2="397.27"/>
                      <line class="cls-1" x1="877.22" y1=".41" x2="877.22" y2="142.14"/>
                      <line class="cls-1" x1="935.26" y1="85.46" x2="935.26" y2="142.14"/>
                      <rect class="cls-6" x="934.26" y="142.14" width="58.04" height="113.39"/>
                      <polygon class="cls-2" points="1020.82 255.4 992.47 255.4 993.3 142.14 1021.65 142.14 1020.82 255.4"/>
                      <rect class="cls-6" x="1020.65" y="142.14" width="56.68" height="113.39"/>
                      <line class="cls-1" x1="992.3" y1="312.23" x2="992.3" y2="397.27"/>
                      <rect class="cls-2" x="480.36" y=".41" width="56.69" height="85.04"/>
                      <rect class="cls-2" x="763.84" y=".41" width="56.69" height="85.04"/>
                      <rect class="cls-6" x="480.36" y="312.23" width="56.69" height="85.04"/>
                      <rect class="cls-6" x="763.84" y="312.23" width="56.69" height="85.04"/>
                      <rect class="cls-6" x="1019.98" y=".41" width="56.69" height="85.04"/>
                      <rect class="cls-6" x="963.3" y=".41" width="56.69" height="85.04"/>
                      <rect class="cls-6" x="1076.69" y=".41" width="28.35" height="28.35"/>
                      <rect class="cls-6" x="1105.37" y=".41" width="56.69" height="85.04"/>
                      <rect class="cls-6" x="1105.37" y="85.45" width="56.69" height="113.39"/>
                      <rect class="cls-6" x="1105.37" y="198.84" width="56.69" height="113.39"/>
                      <line class="cls-1" x1="992.3" y1="312.23" x2="1105.04" y2="312.23"/>
                      <g class="cls-8">
                        <text class="cls-9" transform="translate(946.6 201.67)"><tspan x="0" y="0">315B</tspan></text>
                      </g>
                      <g class="cls-8">
                        <text class="cls-9" transform="translate(1035.82 201.67)"><tspan x="0" y="0">3</tspan><tspan class="cls-7" x="6.67" y="0">1</tspan><tspan x="12.46" y="0">1B</tspan></text>
                      </g>
                      <g class="cls-8">
                        <text class="cls-9" transform="translate(977.46 45.77)"><tspan x="0" y="0">314B</tspan></text>
                      </g>
                      <g class="cls-8">
                        <text class="cls-9" transform="translate(1034.17 45.77)"><tspan x="0" y="0">310B</tspan></text>
                      </g>
                      <g class="cls-8">
                        <text class="cls-9" transform="translate(1122.39 48.6)"><tspan x="0" y="0">306B</tspan></text>
                      </g>
                      <g class="cls-8">
                        <text class="cls-9" transform="translate(1122.39 144.98)"><tspan x="0" y="0">304B</tspan></text>
                      </g>
                      <g class="cls-8">
                        <text class="cls-9" transform="translate(1119.55 255.53)"><tspan x="0" y="0">305B</tspan></text>
                      </g>
                      <g class="cls-8">
                        <text class="cls-9" transform="translate(780.84 357.58)"><tspan x="0" y="0">331C</tspan></text>
                      </g>
                      <g class="cls-8">
                        <text class="cls-9" transform="translate(497.37 357.58)"><tspan x="0" y="0">357E</tspan></text>
                      </g>
                      <g class="cls-8">
                        <text class="cls-9" transform="translate(170.2 201.67)"><tspan x="0" y="0">375F</tspan></text>
                      </g>
                      <g class="cls-8">
                        <text class="cls-9" transform="translate(144.7 357.58)"><tspan x="0" y="0">377F</tspan></text>
                      </g>
                      <g class="cls-8">
                        <text class="cls-9" transform="translate(39.81 357.58)"><tspan x="0" y="0">379F</tspan></text>
                      </g>
                      <g class="cls-8">
                        <text class="cls-9" transform="translate(31.31 258.36)"><tspan x="0" y="0">381F</tspan></text>
                      </g>
                      <g class="cls-8">
                        <text class="cls-9" transform="translate(31.31 147.81)"><tspan x="0" y="0">380F</tspan></text>
                      </g>
                      <g class="cls-8">
                        <text class="cls-9" transform="translate(39.81 45.77)"><tspan x="0" y="0">378F</tspan></text>
                      </g>
                      <g class="cls-8">
                        <text class="cls-9" transform="translate(141.87 45.77)"><tspan x="0" y="0">376F</tspan></text>
                      </g>
                      <line class="cls-1" x1="249.58" y1="326.4" x2="249.58" y2="312.23"/>
                      <line class="cls-1" x1="235.4" y1="312.23" x2="249.58" y2="312.23"/>
                      <path class="cls-1" d="m249.58,326.4c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <line class="cls-1" x1="192.89" y1="326.4" x2="192.89" y2="312.23"/>
                      <line class="cls-1" x1="178.72" y1="312.23" x2="192.89" y2="312.23"/>
                      <path class="cls-1" d="m192.89,326.4c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <line class="cls-1" x1="107.84" y1="326.4" x2="107.84" y2="312.23"/>
                      <line class="cls-1" x1="93.67" y1="312.23" x2="107.84" y2="312.23"/>
                      <path class="cls-1" d="m107.84,326.4c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <line class="cls-1" x1="85.17" y1="221.51" x2="85.17" y2="207.34"/>
                      <line class="cls-1" x1="70.99" y1="207.34" x2="85.17" y2="207.34"/>
                      <path class="cls-1" d="m85.17,221.51c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <line class="cls-1" x1="70.99" y1="193.17" x2="85.17" y2="193.17"/>
                      <line class="cls-1" x1="85.17" y1="179" x2="85.17" y2="193.17"/>
                      <path class="cls-1" d="m70.99,193.17c0-7.83,6.35-14.17,14.17-14.17"/>
                      <g>
                        <line class="cls-1" x1="93.67" y1="85.45" x2="107.84" y2="85.45"/>
                        <line class="cls-1" x1="107.84" y1="71.27" x2="107.84" y2="85.45"/>
                        <path class="cls-1" d="m93.67,85.45c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <g>
                        <line class="cls-1" x1="207.06" y1="255.53" x2="221.23" y2="255.53"/>
                        <line class="cls-1" x1="221.23" y1="241.36" x2="221.23" y2="255.53"/>
                        <path class="cls-1" d="m207.06,255.53c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <g>
                        <line class="cls-1" x1="178.72" y1="85.45" x2="192.89" y2="85.45"/>
                        <line class="cls-1" x1="192.89" y1="71.27" x2="192.89" y2="85.45"/>
                        <path class="cls-1" d="m178.72,85.45c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <g>
                        <line class="cls-1" x1="235.4" y1="85.45" x2="249.58" y2="85.45"/>
                        <line class="cls-1" x1="249.58" y1="71.27" x2="249.58" y2="85.45"/>
                        <path class="cls-1" d="m235.4,85.45c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <g>
                        <line class="cls-1" x1="517.22" y1="85.45" x2="531.39" y2="85.45"/>
                        <line class="cls-1" x1="531.39" y1="71.27" x2="531.39" y2="85.45"/>
                        <path class="cls-1" d="m517.22,85.45c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <g>
                        <line class="cls-1" x1="1000.15" y1="85.45" x2="1014.32" y2="85.45"/>
                        <line class="cls-1" x1="1014.32" y1="71.27" x2="1014.32" y2="85.45"/>
                        <path class="cls-1" d="m1000.15,85.45c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <g>
                        <line class="cls-1" x1="975.45" y1="255.53" x2="989.62" y2="255.53"/>
                        <line class="cls-1" x1="989.62" y1="241.36" x2="989.62" y2="255.53"/>
                        <path class="cls-1" d="m975.45,255.53c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <line class="cls-1" x1="531.39" y1="326.4" x2="531.39" y2="312.23"/>
                      <line class="cls-1" x1="517.22" y1="312.23" x2="531.39" y2="312.23"/>
                      <path class="cls-1" d="m531.39,326.4c-7.83,0-14.17-6.35-14.17-14.17"/>
                      <line class="cls-1" x1="769.73" y1="70.81" x2="769.51" y2="84.99"/>
                      <line class="cls-1" x1="783.67" y1="85.45" x2="769.51" y2="85.21"/>
                      <path class="cls-1" d="m769.73,70.81c7.83.13,14.07,6.58,13.94,14.41"/>
                      <line class="cls-1" x1="783.67" y1="312.23" x2="769.51" y2="312.23"/>
                      <line class="cls-1" x1="769.51" y1="326.4" x2="769.51" y2="312.23"/>
                      <path class="cls-1" d="m783.67,312.23c0,7.83-6.35,14.17-14.17,14.17"/>
                      <line class="cls-1" x1="1026.55" y1="241.36" x2="1026.32" y2="255.53"/>
                      <line class="cls-1" x1="1040.48" y1="256" x2="1026.32" y2="255.76"/>
                      <path class="cls-1" d="m1026.55,241.36c7.83.13,14.07,6.58,13.94,14.41"/>
                      <line class="cls-1" x1="1119.55" y1="204.51" x2="1105.37" y2="204.51"/>
                      <line class="cls-1" x1="1105.37" y1="218.67" x2="1105.37" y2="204.51"/>
                      <path class="cls-1" d="m1119.55,204.51c0,7.83-6.35,14.17-14.17,14.17"/>
                      <line class="cls-1" x1="1105.6" y1="179" x2="1105.37" y2="193.17"/>
                      <line class="cls-1" x1="1119.78" y1="193.39" x2="1105.6" y2="193.17"/>
                      <path class="cls-1" d="m1105.84,179c7.83.13,14.07,6.58,13.94,14.41"/>
                      <line class="cls-1" x1="1105.37" y1="65.6" x2="1105.14" y2="79.77"/>
                      <line class="cls-1" x1="1119.55" y1="80.02" x2="1105.37" y2="79.77"/>
                      <path class="cls-1" d="m1105.6,65.6c7.83.13,14.07,6.58,13.94,14.41"/>
                      <g>
                        <line class="cls-1" x1="1059.68" y1="85.45" x2="1073.84" y2="85.45"/>
                        <line class="cls-1" x1="1073.84" y1="71.27" x2="1073.84" y2="85.45"/>
                        <path class="cls-1" d="m1059.68,85.45c0-7.83,6.35-14.17,14.17-14.17"/>
                      </g>
                      <line class="cls-1" x1="906.41" y1="312.23" x2="906.41" y2="397.06"/>
                      <line class="cls-1" x1="906.95" y1="312.63" x2="935.47" y2="312.63"/>
                      <line class="cls-1" x1="905.62" y1="86.57" x2="934.14" y2="86.57"/>
                      <line class="cls-1" x1="906.88" y1="1.15" x2="906.88" y2="85.99"/>

                      <!-- les noeuds -->

                      <circle id="370F" class="cls-noeud" cx="269.91" cy="283.57" r="7.1"/>
                      <circle id="375F" class="cls-noeud" cx="212.45" cy="281.57" r="7.1"/>
                      <circle id="377F" class="cls-noeud" cx="184.45" cy="282.57" r="7.1"/>
                      <circle id="379F" class="cls-noeud" cx="99.45" cy="282.57" r="7.1"/>
                      <circle id="381F" class="cls-noeud" cx="99.45" cy="213.57" r="7.1"/>
                      <circle id="380F" class="cls-noeud" cx="99.45" cy="184.57" r="7.1"/>
                      <circle id="378F" class="cls-noeud" cx="99.45" cy="112.57" r="7.1"/>
                      <circle id="376F" class="cls-noeud" cx="184.45" cy="112.57" r="7.1"/>
                      <circle id="357E" class="cls-noeud" cx="523.44" cy="283.05" r="7.1"/>
                      <circle id="12E-3" class="cls-noeud" cx="481.44" cy="199.06" r="7.1" transform="translate(207.84 642.4) rotate(-80.78)"/>
                      <circle id="11E-3" class="cls-noeud" cx="511.56" cy="199.04" r="7.1"/>
                      <circle id="331C" class="cls-noeud" cx="779.44" cy="284.05" r="7.1"/>
                      <circle id="7C-3" class="cls-noeud" cx="794.16" cy="200.06" r="7.1" transform="translate(469.48 951.92) rotate(-80.78)"/>
                      <circle id="6C-3" class="cls-noeud" cx="824.28" cy="200.04" r="7.1"/>
                      <circle id="315B" class="cls-noeud" cx="977.97" cy="281.67" r="7.1" transform="translate(543.28 1201.89) rotate(-80.78)"/>
                      <circle id="311B" class="cls-noeud" cx="1035.09" cy="281.65" r="7.1"/>
                      <circle id="305B" class="cls-noeud" cx="1090.59" cy="213.65" r="7.1"/>
                      <circle id="304B" class="cls-noeud" cx="1091.47" cy="184.67" r="7.1" transform="translate(734.34 1232.46) rotate(-80.78)"/>
                      <circle id="306B" class="cls-noeud" cx="1091.03" cy="71.66" r="7.1"/>
                      <circle id="310B" class="cls-noeud" cx="1063.59" cy="111.65" r="7.1"/>
                      <circle id="314B" class="cls-noeud" cx="1006.47" cy="111.67" r="7.1" transform="translate(735.02 1087.25) rotate(-80.78)"/>

                      <circle id="A1-3" class="cls-noeud" cx="297.45" cy="282.57" r="7.1"/>
                      <circle id="B2-3" class="cls-noeud" cx="298.45" cy="112.57" r="7.1"/>
                      <circle id="C3-3" class="cls-noeud" cx="468.5" cy="283.05" r="7.1"/>
                      <circle id="D4-3" class="cls-noeud" cx="482.5" cy="283.05" r="7.1"/>
                      <circle id="E5-3" class="cls-noeud" cx="510.5" cy="283.05" r="7.1"/>
                      <circle id="F6-3" class="cls-noeud" cx="510" cy="111.05" r="7.1"/>
                      <circle id="G7-3" class="cls-noeud" cx="482" cy="111.05" r="7.1"/>
                      <circle id="H8-3" class="cls-noeud" cx="468" cy="111.05" r="7.1"/>
                      <circle id="I9-3" class="cls-noeud" cx="836.22" cy="284.05" r="7.1"/>
                      <circle id="J10-3" class="cls-noeud" cx="823.22" cy="284.05" r="7.1"/>
                      <circle id="K11-3" class="cls-noeud" cx="795.22" cy="284.05" r="7.1"/>
                      <circle id="L12-3" class="cls-noeud" cx="794.72" cy="112.05" r="7.1"/>
                      <circle id="M13-3" class="cls-noeud" cx="822.72" cy="112.05" r="7.1"/>
                      <circle id="N14-3" class="cls-noeud" cx="836.72" cy="112.05" r="7.1"/>
                      <circle id="O15-3" class="cls-noeud" cx="964.41" cy="354.66" r="7.1"/>
                      <circle id="P16-3" class="cls-noeud" cx="963.41" cy="281.66" r="7.1"/>
                      <circle id="Q17-3" class="cls-noeud" cx="1091.41" cy="281.66" r="7.1"/>
                      <circle id="R18-3" class="cls-noeud" cx="1091.41" cy="111.66" r="7.1"/>
                      <circle id="S19-3" class="cls-noeud" cx="950.41" cy="111.66" r="7.1"/>
                      <circle id="T20-3" class="cls-noeud" cx="949.41" cy="43.66" r="7.1"/>

                      <circle id="TR1-3" class="cls-noeud" cx="297.82" cy="339.66" r="7.1"/>
                      <circle id="TR2-3" class="cls-noeud" cx="298.98" cy="56.66" r="7.1"/>
                      <circle id="TR3-3" class="cls-noeud" cx="467.98" cy="339.66" r="7.1"/>
                      <circle id="TR4-3" class="cls-noeud" cx="467.98" cy="56.66" r="7.1"/>
                      <circle id="TR5-3" class="cls-noeud" cx="837.28" cy="339.66" r="7.1"/>
                      <circle id="TR6-3" class="cls-noeud" cx="837.28" cy="55.66" r="7.1"/>
                      <circle id="TR7-3" class="cls-noeud" cx="936.28" cy="354.66" r="7.1"/>
                      <circle id="TR8-3" class="cls-noeud" cx="936.28" cy="43.66" r="7.1"/>

                    </svg>

                     <!-- Grille en superposition -->
                     <svg id="gridOverlay_floor3" viewBox="0 0 1162.45 397.1"> 
                        <!-- Lignes de grille seront ajoutées ici via JavaScript -->
                    </svg> 

                  </div>
              </div>
  
      
              </div>

              <div id="locationData"></div>

          </div>
       
        </section>


    </main>

    <?php
       require "./include/footer.inc.php";
    ?>

    <div class="help-button">
        <div class="question-mark">?</div>
    </div>


    <!-- Modal -->
    <div class="modal-wrapper" id="modal">
      <div class="modal-body">
        <h2>Légende</h2>
        <img src="./images/legendes.png" alt="legende">
        <button class="close">&times;</button>
      </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.0/papaparse.min.js"></script>
    
    <script>

        const svg = document.getElementById("gridOverlay_floor2");
        const width = 1162.45;
        const height = 397.1;
        const numColumns = 41;
        const numRows = 14;

        function createLine(x1, y1, x2, y2) {
          const line = document.createElementNS("http://www.w3.org/2000/svg", "line");
          line.setAttribute("x1", x1);
          line.setAttribute("y1", y1);
          line.setAttribute("x2", x2);
          line.setAttribute("y2", y2);
          line.classList.add("grid-line");
          svg.appendChild(line);
        }

        function createCircle(x, y, className) {
            const circle = document.createElementNS("http://www.w3.org/2000/svg", "circle");
            circle.setAttribute("cx", x);
            circle.setAttribute("cy", y);
            circle.setAttribute("r", 5);
            circle.setAttribute("id", className === 'user' ? 'userCircle' : ''); // Ajoute un id uniquement pour la classe 'user'
            circle.classList.add(className);
            svg.appendChild(circle);
        }

        function createSVGGrid(svg, width, height, numColumns, numRows) {
            // Generate grid lines
            for (let i = 0; i <= numColumns; i++) {
                const x = (i / numColumns) * width;
                createLine(x, 0, x, height);
            }
            for (let i = 0; i <= numRows; i++) {
                const y = (i / numRows) * height;
                createLine(0, y, width, y);
            }
        }

        createSVGGrid(svg, width, height, numColumns, numRows);
            
        
        // ----------------------------------------------------------------------
        
        // document.addEventListener("DOMContentLoaded", function() {
        //     const circles = document.querySelectorAll('.cls-noeud');

        //     circles.forEach(circle => {
        //         const id = circle.getAttribute('id');
        //         const text = document.createElementNS("http://www.w3.org/2000/svg", "text");
        //         text.setAttribute('x', parseFloat(circle.getAttribute('cx')) - 5); // ajustez la position x pour centrer le texte
        //         text.setAttribute('y', parseFloat(circle.getAttribute('cy')) + 5); // ajustez la position y pour centrer le texte
        //         text.setAttribute('text-anchor', 'middle');
        //         text.setAttribute('font-size', '10px');
        //         text.textContent = id;
        //         circle.parentNode.appendChild(text);
        //     });
        // });

  
        </script>

  <script src="script.js"></script>
</body>
</html>
