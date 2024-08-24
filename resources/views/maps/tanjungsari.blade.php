<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('map-assets/Plugin/libs/leaflet/leaflet.css') }}" />
    <link rel="stylesheet" href="{{ asset('map-assets/Plugin/fontawesome 5.15.4/all.css') }}" />
    <link rel="stylesheet" href="{{ asset('map-assets/Plugin/libs/leaflet-search/leaflet-search.src.css') }}" />
    <link rel="stylesheet" href="{{ asset('map-assets/Plugin/libs/leaflet-control-search/leaflet-search.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('map-assets/Plugin/libs/leaflet-locatecontrol/L.Control.Locate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('map-assets/Plugin/libs/leaflet/Control.Geocoder.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('map-assets/Plugin/libs/leaflet-mouseposition/L.Control.MousePosition.css') }}" />
    <link rel="stylesheet" href="{{ asset('map-assets/Plugin/libs/leaflet-scale-factor/leaflet.scalefactor.css') }}" />
    <link rel="stylesheet" href="{{ asset('map-assets/Plugin/libs/leaflet-minimap/Control.MiniMap.css') }}" />
    <link rel="stylesheet" href="{{ asset('map-assets/Plugin/libs/leaflet-easybutton-master/easy-button.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('map-assets/Plugin/libs/leaflet-layergrup-control/leaflet.groupedlayercontrol.css') }}" />
    <link rel="stylesheet" href="{{ asset('map-assets/Plugin/css/style.css') }}" />
    <style>
        html,
        body,
        #map {
            height: 100%;
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('map-assets/Plugin/libs/leaflet/leaflet.js') }}"></script>
    <script src="{{ asset('map-assets/Plugin/libs/leaflet-search/leaflet-search.src.js') }}"></script>
    <script src="{{ asset('map-assets/Plugin/libs/fuse/fuse.js') }}"></script>
    <script src="{{ asset('map-assets/Plugin/libs/leaflet/Control.Geocoder.js') }}"></script>
    <script src="{{ asset('map-assets/Plugin/libs/leaflet-locatecontrol/L.Control.Locate.min.js') }}"></script>
    <script src="{{ asset('map-assets/Plugin/libs/leaflet-browser-print-master/leaflet.browser.print.js') }}"></script>
    <script src="{{ asset('map-assets/Plugin/libs/leaflet-minimap/Control.MiniMap.js') }}"></script>
    <script src="{{ asset('map-assets/Plugin/libs/leaflet-layergrup-control/leaflet.groupedlayercontrol.js') }}"></script>
    <script src="{{ asset('map-assets/Plugin/libs/esri-leaflet/esri-leaflet-debug.js') }}"></script>
    <script src="{{ asset('map-assets/Plugin/libs/leaflet-easybutton-master/easy-button.js') }}"></script>
    <script src="{{ asset('map-assets/Plugin/libs/leaflet-mouseposition/L.Control.MousePosition.js') }}"></script>
    <script src="{{ asset('map-assets/Plugin/libs/leaflet-scale-factor/leaflet.scalefactor.min.js') }}"></script>
    <script src="{{ asset('map-assets/Plugin/js_map/Autolinker.min.js') }}"></script>
    <script src="{{ asset('map-assets/Plugin/libs/leaflet-browser-print-master/leaflet.browser.print.js') }}"></script>
    <script src="{{ asset('map-assets/Plugin/libs/leaflet-browser-print-master/leaflet.browser.print.utils.js') }}">
    </script>
    <script src="{{ asset('map-assets/Plugin/libs/leaflet-browser-print-master/leaflet.browser.print.sizes.js') }}">
    </script>

    <!-- Modal Gambar-->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">
                        <b>Gambar Lahan Pertanian</b>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleModal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('map-assets/Img/popup1.jpg') }}" class="d-block w-100"
                                    alt="Gambar 1" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('map-assets/Img/popup2.jpg') }}" class="d-block w-100"
                                    alt="Gambar 2" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('map-assets/Img/popup3.jpg') }}" class="d-block w-100"
                                    alt="Gambar 3" />
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleModal"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleModal"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Data-->
    <div class="modal fade" id="dataModal" tabindex="-1" aria-labelledby="dataModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dataModalLabel">
                        <b>Data Lahan Pertanian</b>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" />
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" />
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" />
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" />
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" />
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" />
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" />
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" />
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress"
                                placeholder="1234 Main St" />
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2"
                                placeholder="Apartment, studio, or floor" />
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity" />
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip" />
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="map"></div>
    <script>
        const icons = {
            SUBSIDI: L.icon({
                iconUrl: "{{ asset('map-assets/Img/legend/subsidi.png') }}",
                iconSize: [15, 15],
            }),
            NON_SUBSIDI: L.icon({
                iconUrl: "{{ asset('map-assets/Img/legend/non-subsidi.png') }}",
                iconSize: [15, 15],
            }),
        };

        const map = L.map("map", {
            zoomControl: false,
            maxZoom: 30,
            minZoom: 1,
        }).setView([-7.52132, 110.70004], 15);

        const title = new L.Control();
        title.onAdd = function() {
            this._div = L.DomUtil.create("div", "info");
            this._div.innerHTML =
                "<h4>PETA SEBARAN SUBSIDI PUPUK PERTANIAN DESA TANJUNGSARI</h4>DIBUAT: GEOCIRCLE INDONESIA";
            return this._div;
        };
        title.addTo(map);

        const zoomBar = L.easyBar([
            L.easyButton("<big>+</big>", function(control, map) {
                map.setZoom(map.getZoom() + 1);
            }),
            L.easyButton("fa-home fa-lg", function(control, map) {
                map.fitBounds(DesaTanjungsari.getBounds());
            }),
            L.easyButton("<big>-</big>", function(control, map) {
                map.setZoom(map.getZoom() - 1);
            }),
        ]);
        zoomBar.addTo(map);

        L.control
            .locate({
                strings: {
                    title: "Cari Lokasi Saya",
                },
            })
            .addTo(map);

        const basemapLayers = {
            OSM: L.tileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
                subdomains: ["a", "b", "c"],
                minZoom: 0,
                maxZoom: 30,
            }),
            GoogleMaps: L.tileLayer(
                "https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}", {
                    minZoom: 0,
                    maxZoom: 30,
                }
            ),
        };
        map.addLayer(basemapLayers.GoogleMaps);

        const basemapLayersCopy = {
            //Basemap: OpenStreetMap
            OSM: L.tileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                subdomains: ["a", "b", "c"],
                minZoom: 0,
                maxZoom: 13,
            }),

            //Basemap: GoogleMaps
            GoogleMaps: L.tileLayer(
                "https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}", {
                    minZoom: 0,
                    maxZoom: 13,
                }
            ),
        };

        L.control
            .browserPrint({
                closePopupsOnPrint: false,
                printModes: [
                    L.control.browserPrint.mode.landscape("Tabloid", "Tabloid"),
                    L.control.browserPrint.mode.landscape(),
                    L.control.browserPrint.mode.portrait(),
                    L.control.browserPrint.mode.auto("Auto", "A4"),
                    L.control.browserPrint.mode.custom("Pilih Area", "A4"),
                ],
            })
            .addTo(map);

        map.createPane("pane_DesaTanjungsari");
        Object.assign(map.getPane("pane_DesaTanjungsari").style, {
            zIndex: 405,
            mixBlendMode: "normal",
        });

        const subsidiLayer = L.featureGroup();
        const nonsubsidiLayer = L.featureGroup();

        const DesaTanjungsari = L.geoJson(null, {
            style: function(feature) {
                const baseStyle = {
                    pane: "pane_DesaTanjungsari",
                    opacity: 1,
                    weight: 1,
                    fillOpacity: 0.6,
                    fill: true,
                    interactive: true,
                };

                switch (String(feature.properties.SB_PPK)) {
                    case "SUBSIDI":
                        return {
                            ...baseStyle, color: "#249308", fillColor: "#9dff63"
                        };
                    case "NON SUBSIDI":
                        return {
                            ...baseStyle, color: "#ff0000", fillColor: "#fb3a3a"
                        };
                    default:
                        return {
                            ...baseStyle, color: "#808080", fillColor: "#d3d3d3"
                        };
                }
            },
            onEachFeature: function(feature, layer) {
                var content =
                    "<div id='carouselExample' class='carousel slide' data-bs-ride='carousel'>" +
                    "<div class='carousel-inner'>" +
                    "<div class='carousel-item active'>" +
                    "<img src='{{ asset('map-assets/Img/popup1.jpg') }}' class='d-block w-100' alt='Gambar 1'>" +
                    "</div>" +
                    "<div class='carousel-item'>" +
                    "<img src='{{ asset('map-assets/Img/popup2.jpg') }}' class='d-block w-100' alt='Gambar 2'>" +
                    "</div>" +
                    "<div class='carousel-item'>" +
                    "<img src='{{ asset('map-assets/Img/popup3.jpg') }}' class='d-block w-100' alt='Gambar 3'>" +
                    "</div>" +
                    "</div>" +
                    "<button class='carousel-control-prev' type='button' data-bs-target='#carouselExample' data-bs-slide='prev'>" +
                    "<span class='carousel-control-prev-icon' aria-hidden='true'></span>" +
                    "<span class='visually-hidden'>Previous</span>" +
                    "</button>" +
                    "<button class='carousel-control-next' type='button' data-bs-target='#carouselExample' data-bs-slide='next'>" +
                    "<span class='carousel-control-next-icon' aria-hidden='true'></span>" +
                    "<span class='visually-hidden'>Next</span>" +
                    "</button>" +
                    "</div>" +
                    "<div class='my-2'>" +
                    "<table class='table table-bordered'>" +
                    "<tr><th>DESA</th><td>" +
                    feature.properties.DESA +
                    "</td></tr>" +
                    "<tr><th>DNOP</th><td>" +
                    feature.properties.DNOP +
                    "</td></tr>" +
                    "<tr><th>PL</th><td>" +
                    feature.properties.PL +
                    "</td></tr>" +
                    "<tr><th>ERDKK</th><td>" +
                    feature.properties.ERDKK +
                    "</td></tr>" +
                    "<tr><th>NIK ERDKK</th><td>" +
                    feature.properties.NIK_1 +
                    "</td></tr>" +
                    "<tr><th>ALAMAT ERDKK</th><td>" +
                    feature.properties.ALMT_1 +
                    "</td></tr>" +
                    "<tr><th>PEMILIK</th><td>" +
                    feature.properties.PMLK +
                    "</td></tr>" +
                    "<tr><th>NIK PEMILIK</th><td>" +
                    feature.properties.NIK_2 +
                    "</td></tr>" +
                    "<tr><th>ALAMAT PEMILIK</th><td>" +
                    feature.properties.ALMT_2 +
                    "</td></tr>" +
                    "<tr><th>PENGGARAP</th><td>" +
                    feature.properties.PGRP +
                    "</td></tr>" +
                    "<tr><th>NIK PENGGARAP</th><td>" +
                    feature.properties.NIK_3 +
                    "</td></tr>" +
                    "<tr><th>ALAMAT PENGGARAP</th><td>" +
                    feature.properties.ALMT_3 +
                    "</td></tr>" +
                    "<tr><th>PENYEWA</th><td>" +
                    feature.properties.PNYW +
                    "</td></tr>" +
                    "<tr><th>NIK PENYEWA</th><td>" +
                    feature.properties.NIK_4 +
                    "</td></tr>" +
                    "<tr><th>ALAMAT PENYEWA</th><td>" +
                    feature.properties.ALMT_4 +
                    "</td></tr>" +
                    "<tr><th>KELOMPOK TANI</th><td>" +
                    feature.properties.KL_TN +
                    "</td></tr>" +
                    "<tr><th>BLOK</th><td>" +
                    feature.properties.BLOK +
                    "</td></tr>" +
                    "<tr><th>JABATAN</th><td>" +
                    feature.properties.JBTN +
                    "</td></tr>" +
                    "<tr><th>JUMLAH PETAK</th><td>" +
                    feature.properties.JML_PTK +
                    "</td></tr>" +
                    "<tr><th>SUBSIDI PUPUK</th><td>" +
                    feature.properties.SB_PPK +
                    "</td></tr>" +
                    "<tr><th>ALAT/MESIN PERTANIAN</th><td>" +
                    feature.properties.ALSTN +
                    "</td></tr>" +
                    "<tr><th>SUMBER AIR</th><td>" +
                    feature.properties.SMBR_AIR +
                    "</td></tr>" +
                    "<tr><th>DAERAH IRIGASI</th><td>" +
                    feature.properties.N_DI +
                    "</td></tr>" +
                    "<tr><th>KOMODITAS MASA TANAM 1</th><td>" +
                    feature.properties.KOM_MT1 +
                    "</td></tr>" +
                    "<tr><th>KOMODITAS MASA TANAM 2</th><td>" +
                    feature.properties.KOM_MT2 +
                    "</td></tr>" +
                    "<tr><th>KOMODITAS MASA TANAM 3</th><td>" +
                    feature.properties.KOM_MT3 +
                    "</td></tr>" +
                    "<tr><th>WAKTU TANAM MASA TANAM 1</th><td>" +
                    feature.properties.WT_MT1 +
                    "</td></tr>" +
                    "<tr><th>WAKTU TANAM MASA TANAM 2</th><td>" +
                    feature.properties.WT_MT2 +
                    "</td></tr>" +
                    "<tr><th>WAKTU TANAM MASA TANAM 3</th><td>" +
                    feature.properties.WT_MT3 +
                    "</td></tr>" +
                    "<tr><th>PRODUKTIVITAS MASA TANAM 1</th><td>" +
                    feature.properties.PR_MT1 +
                    "</td></tr>" +
                    "<tr><th>PRODUKTIVITAS MASA TANAM 2</th><td>" +
                    feature.properties.PR_MT2 +
                    "</td></tr>" +
                    "<tr><th>PRODUKTIVITAS MASA TANAM 3</th><td>" +
                    feature.properties.PR_MT3 +
                    "</td></tr>" +
                    "<tr><th>LUAS</th><td>" +
                    feature.properties.LUAS +
                    "</td></tr>" +
                    "</table>" +
                    "</div>" +
                    "<div class='my-2 text-center'>" +
                    "<button type='button' class='btn btn-outline-primary btn-sm lihat-gambar' data-bs-toggle='modal' data-bs-target='#imageModal'>Lihat Gambar</button> " +
                    "<button type='button' class='btn btn-outline-info btn-sm lihat-gambar' data-bs-toggle='modal' data-bs-target='#dataModal'>Edit Data</button> " +
                    "</div>";

                layer.on({
                    click: function() {
                        layer.bindPopup(content);
                    },
                    mouseover: function() {
                        layer
                            .setStyle({
                                color: "grey",
                                weight: 0.2,
                                opacity: 1,
                                fillColor: "#beeff6",
                                fillOpacity: 0.4,
                            })
                            .bindTooltip(feature.properties.PL);
                    },
                    mouseout: function() {
                        DesaTanjungsari.resetStyle(layer);
                    },
                });

                if (feature.properties.SB_PPK === "SUBSIDI") {
                    subsidiLayer.addLayer(layer);
                } else if (feature.properties.SB_PPK === "NON_SUBSIDI") {
                    nonsubsidiLayer.addLayer(layer);
                }
            },
        });

        function createIconHTML(icon) {
            return `<img src="${icon.options.iconUrl}" width="${icon.options.iconSize[0]}" height="${icon.options.iconSize[1]}" />`;
        }

        const groupedOverlays = {
            "SUBSIDI PUPUK": {
                [`${createIconHTML(icons.SUBSIDI)} SUBSIDI`]: subsidiLayer,
                [`${createIconHTML(icons.NON_SUBSIDI)} NON-SUBSIDI`]: nonsubsidiLayer,
            },
        };

        const layerControl = L.control.groupedLayers(
            basemapLayers,
            groupedOverlays, {
                exclusiveGroups: [],
                groupCheckboxes: true,
            }
        );
        map.addControl(layerControl);

        $.getJSON(
            "https://cdn-project-desa.s3.ap-southeast-1.amazonaws.com/pertanian-boyolali/geojson-files/TANJUNGSARI.geojson",
            function(data) {
                DesaTanjungsari.addData(data);
            }
        );

        subsidiLayer.addTo(map);
        nonsubsidiLayer.addTo(map);

        function createSearchControl(propertyName, placeholder) {
            const searchControl = new L.Control.Search({
                position: "topleft",
                textPlaceholder: placeholder,
                layer: DesaTanjungsari,
                propertyName,
                marker: false,
                collapsed: false,
                moveToLocation: function(latlng, title) {
                    const matchingFeatures = [];
                    DesaTanjungsari.eachLayer(function(layer) {
                        if (
                            layer.feature &&
                            layer.feature.properties[propertyName] === title
                        ) {
                            matchingFeatures.push(layer);
                        }
                    });
                    if (matchingFeatures.length > 0) {
                        const group = L.featureGroup(matchingFeatures);
                        map.fitBounds(group.getBounds());
                    }
                },
            });

            searchControl
                .on("search:locationfound", function(e) {
                    const title = e.text;
                    const matchingFeatures = [];

                    DesaTanjungsari.eachLayer(function(layer) {
                        if (
                            layer.feature &&
                            layer.feature.properties[propertyName] === title
                        ) {
                            matchingFeatures.push(layer);
                            layer.setStyle({
                                fillColor: "cyan",
                                color: "#00edff"
                            });
                            if (layer._popup) layer.openPopup();
                        }
                    });

                    if (matchingFeatures.length > 0) {
                        const group = L.featureGroup(matchingFeatures);
                        map.fitBounds(group.getBounds()); // Akses objek map langsung
                        L.popup()
                            .setLatLng(group.getBounds().getCenter())
                            .setContent(
                                `${matchingFeatures.length} petak lahan ditemukan atas nama '${title}'`
                            )
                            .openOn(map); // Pastikan untuk menggunakan objek map yang benar
                    }
                })
                .on("search:collapsed", function() {
                    DesaTanjungsari.eachLayer(DesaTanjungsari.resetStyle);
                });

            return searchControl;
        }

        const searchContainer = L.control({
            position: "topleft"
        });
        searchContainer.onAdd = function() {
            const div = L.DomUtil.create("div", "search-container");
            div.innerHTML = `
          <button id="toggleSearch" class="search-icon-btn"><i class="fas fa-search"></i></button>
          <div id="searchControls" class="search-controls hidden"></div>`;
            return div;
        };
        searchContainer.addTo(map);

        const searchControlsDiv = document.getElementById("searchControls");

        // Menambahkan kontrol pencarian satu per satu dengan nama yang tetap
        const erdkkSearch = createSearchControl("ERDKK", "Cari Nama ERDKK...");
        const pmlkSearch = createSearchControl("PMLK", "Cari Nama Pemilik...");
        const pgrpSearch = createSearchControl("PGRP", "Cari Nama Penggarap...");
        const pnywSearch = createSearchControl("PNYW", "Cari Nama Penyewa...");
        const klTnSearch = createSearchControl(
            "KL_TN",
            "Cari Nama Kelompok Tani..."
        );

        // Menambahkan kontrol pencarian ke peta dan ke div searchControls
        erdkkSearch.addTo(map);
        searchControlsDiv.appendChild(erdkkSearch.getContainer());

        pmlkSearch.addTo(map);
        searchControlsDiv.appendChild(pmlkSearch.getContainer());

        pgrpSearch.addTo(map);
        searchControlsDiv.appendChild(pgrpSearch.getContainer());

        pnywSearch.addTo(map);
        searchControlsDiv.appendChild(pnywSearch.getContainer());

        klTnSearch.addTo(map);
        searchControlsDiv.appendChild(klTnSearch.getContainer());

        document
            .getElementById("toggleSearch")
            .addEventListener("click", function() {
                const searchControls = document.getElementById("searchControls");
                this.classList.toggle(
                    "active",
                    !searchControls.classList.toggle("hidden")
                );
            });

        L.DomEvent.disableScrollPropagation(searchControlsDiv);
        L.DomEvent.disableClickPropagation(searchControlsDiv);

        /* Scale Bar */
        L.control
            .scale({
                maxWidth: 150,
                position: "bottomright",
            })
            .addTo(map);
        /* Scale Factor Plugin */
        L.control
            .scalefactor({
                maxWidth: 250,
                position: "bottomright",
            })
            .addTo(map);

        // Coordinate Position Plugin
        L.control
            .mousePosition({
                maxWidth: 150,
                position: "bottomright",
            })
            .addTo(map);

        const rect1 = {
            color: "#ff1100",
            weight: 2,
        };
        const rect2 = {
            color: "#0000AA",
            weight: 1,
            opacity: 0,
            fillOpacity: 0,
        };
        const miniMap = new L.Control.MiniMap(basemapLayersCopy.GoogleMaps, {
            width: 100,
            height: 100,
            toggleDisplay: true,
            aimingRectOptions: rect1,
            shadowRectOptions: rect2,
        }).addTo(map);

        map.on("baselayerchange", function(e) {
            miniMap.changeLayer(basemapLayersCopy[e.name]);
        });
    </script>
</body>

</html>
