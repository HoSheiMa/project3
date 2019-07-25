window.onload = () => {
  Show_flags = () => {
    var v = $("#myTextArea___livespell_proxy").text();
    var fpf = [];
    if (v.length == 0) return;
    var fp = list_cauntry;
    for (var i = 0; i < fp.length; i++) {
      if (v.includes(fp[i]["name"])) {
        fpf.push(fp[i]);
      }
    }
    $(".r_shower_ctxt").html(" ");
    console.log(fpf);
    for (var i = 0; i < fpf.length; i++) {
      $(".r_shower_ctxt").append(
        `<tr><td><img width=50 src="${_link +
          fpf[i]["code"].toLocaleLowerCase() +
          _type}"></td><td>${fpf[i]["name"]}</td></tr>`
      );
    }
    $(".r_shower").slideDown();
  };
  Show_famous = () => {
    var v = $("#myTextArea___livespell_proxy").text();
    var fpf = [];
    if (v.length == 0) return;
    var fp = famous_people;
    for (var i = 0; i < fp.length; i++) {
      if (v.includes(fp[i])) {
        fpf.push(fp[i]);
      }
    }
    $(".r_shower_ctxt2").html(" ");
    console.log(fpf);
    for (var i = 0; i < fpf.length; i++) {
      $(".r_shower_ctxt2").append(`<tr><td>${fpf[i]}</td></tr>`);
    }
    $(".r_shower2").slideDown();
  };
};
