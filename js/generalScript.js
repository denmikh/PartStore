  $(document).ready (function () {
  	addNodes();
    click()
  });

function addNodes() {
  partsbase.forEach(function(item) {
    var article = "<article>" + "<h2>" +item.name+ "<h2>" + "<img src='" +item.url_img+"'/>" + "<p>" +item.description+ "</p>" + "<p>"+item.applicability+"</p>" + "<h>"+item.price+"</h>" + "</article>"
    $(".articles").append(article);
      //$("article").append(item.name +" "+ item.description +" "+ item.applicability +" "+ item.price +" "+ item.url_img);
	});
};

function click() {
$("article").bind("click", function (ev) {
  console.log(ev);
  alert("Привет");
});
};
