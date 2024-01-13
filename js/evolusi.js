let daftar_surat = $("#daftar_surat");

$.ajax({
  url: "https://quran-api-id.vercel.app/surahs",
  type: "GET",
  success: function (data) {
    console.log(data);
    lists_surat = ``;
    for (i = 0; i < data.length; i++) {
      lists_surat +=
        `    
    <div class="col-md-12 col-lg-4 my-2">
    <a href="detail.php?id=` +
        data[i].number +
        `&status=` +
        sts +
        `" style="text-decoration: none; color: #212121;">  
    <div class="card shadow-sm">
      <div class="card-body">
      <div class="row">
      <div class="col-10">
      <h5 style="font-size: 20px;" class="card-title d-inline font-weight-bold">` +
        data[i].name +
        `</h5> - ` +
        data[i].translation +
        `
      <p class="card-text">` +
        data[i].revelation +
        `- ` +
        data[i].numberOfAyahs +
        ` Ayat</p>
      </div>
      <div class="col-2 d-flex p-1 align-items-center">
      <img src="img/rub-el-hizb_10234184.png" class="img-fluid fontAyatImg">
      </div>
      </div>
      </div>
    </div>
    </a>
    </div>
    `;
      //   lists_surat += data[i].name;
    }
    daftar_surat.html(lists_surat);
  },
});
