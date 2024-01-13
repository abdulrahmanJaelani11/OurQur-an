let link = "https://quran-api-id.vercel.app/surahs/" + id;
let detail_surat = $("#detail_surat");
let judul_surat = $("#judul_surat");
let revelation = $("#revelation");
let arti = $("#arti");
let list_arab = `<div class="card" style="width: 100%;">
<ul class="list-group list-group-flush">
`;
let display =
  sts != undefined || sts != "" ? "display:block;" : "display:none;";

$.ajax({
  url: link,
  type: "GET",
  dataType: "json",
  success: function (data) {
    console.log(data);
    judul_surat.html(data.name);
    revelation.html(data.revelation);
    arti.html(data.translation);
    // `<audio src="` + data.audio + `" controls></audio>`;

    $.each(data.ayahs, function () {
      list_arab +=
        `<li class="list-group-item">
        <div style="width: 100%;" class="text-right">
            <img src="` +
        this.image.primary +
        `" class="img-fluid fontAyatImg">
        <span style='font-size: 20px;' class="fontAyat">` +
        this.arab +
        `</span>
        <p class="mt-3">` +
        this.translation +
        `</p>
        <div id="text_detail" style="` +
        display +
        `">
          <p class="text-justify mt-3">` +
        this.tafsir.jalalayn +
        `</p>
        </div>
        </div>
        </li>`;
    });
    list_arab += `</ul></div>`;
    detail_surat.html(list_arab);
  },
});
