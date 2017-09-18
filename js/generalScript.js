  $(document).ready (function () {
  	addNodes();
    click()
  });

function addNodes() {
  partsbase.forEach(function(item) {
    var article = "<article id='"+item.id+"'>" + "<h2>" +item.name+ "<h2>" + "<img src='" +item.url_img+"'/>" + "<p>" +item.description+ "</p>" + "<p>"+item.applicability+"</p>" + "<h>"+item.price+"</h>" + "</article>"
    $(".articles").append(article);
	});
};

function click() {
$("article").bind("click", function (event) {
  console.log(event);
  var data = event.currentTarget.innerHTML;
  $("#text").html(data);
  $("#myModal").modal('show');
});
};
