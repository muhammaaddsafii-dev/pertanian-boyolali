const subsidiBangakLayer = L.featureGroup();
const nonsubsidiBangakLayer = L.featureGroup();

const DesaBangak = L.geoJson(null, {
  style: function (feature) {
    const baseStyle = {
      pane: "pane_DesaBangak",
      opacity: 1,
      weight: 1,
      fillOpacity: 0.6,
      fill: true,
      interactive: true,
    };

    switch (String(feature.properties.SB_PPK)) {
      case "SUBSIDI":
        return { ...baseStyle, color: "#249308", fillColor: "#9dff63" };
      case "NON_SUBSIDI":
        return { ...baseStyle, color: "#ff0000", fillColor: "#fb3a3a" };
      default:
        return { ...baseStyle, color: "#808080", fillColor: "#d3d3d3" };
    }
  },
  onEachFeature: function (feature, layer) {
    var content =
      "<div id='carouselExample' class='carousel slide' data-bs-ride='carousel'>" +
      "<div class='carousel-inner'>" +
      "<div class='carousel-item active'>" +
      "<img src='Img/popup1.jpg' class='d-block w-100' alt='Gambar 1'>" +
      "</div>" +
      "<div class='carousel-item'>" +
      "<img src='Img/popup2.jpg' class='d-block w-100' alt='Gambar 2'>" +
      "</div>" +
      "<div class='carousel-item'>" +
      "<img src='Img/popup3.jpg' class='d-block w-100' alt='Gambar 3'>" +
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
      "<a href='URL_DETAIL' class='btn btn-outline-info btn-sm'>Detail Info</a>" +
      "</div>";
    layer.on({
      click: function () {
        layer.bindPopup(content);
      },
      mouseover: function () {
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
      mouseout: function () {
        DesaBangak.resetStyle(layer);
      },
    });

    if (feature.properties.SB_PPK === "SUBSIDI") {
      subsidiBangakLayer.addLayer(layer);
    } else if (feature.properties.SB_PPK === "NON_SUBSIDI") {
      nonsubsidiBangakLayer.addLayer(layer);
    }
  },
});

map.createPane("pane_DesaBangak");
Object.assign(map.getPane("pane_DesaBangak").style, {
  zIndex: 405,
  mixBlendMode: "normal",
});

$.getJSON("/Data/KEC_BANYUDONO/Bangak.geojson", function (data) {
  DesaBangak.addData(data);
});
