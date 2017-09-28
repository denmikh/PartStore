  $(document).ready (function () {
    init();
  });

function addNodes() {
  partsbase.forEach(function(item) {
    var article = "<article id='"+item.id+"'>" + "<h2>" +item.name+ "<h2>" + "<img src='" +item.url_img+"'/>" + "<p>" +item.description+ "</p>" + "<p>"+item.applicability+"</p>" + "<h>"+item.price+"</h>" + "</article>"
    $(".articles").append(article);
	});
};


function init() {
  addNodes();
  $("article").bind("click", function (event) {
    console.log(event);
    var id = parseInt(event.currentTarget.id);
    populateModal(id);
  });
};

function populateModal(itemId) {
  var item = getDetail(itemId);
  $("#myModal").find("#head").html(item.name);
  $("#myModal").find("#min_description").html(item.description);
  $("#myModal").find("#img").html("<img src='" +item.url_img+"'/>");
  $("#myModal").find("#price").html(item.price);
  $("#myModal").find("#article").html(item.orig_article);
  $("#myModal").find("#applicability").html(item.applicability);
  $("#myModal").find("#full_description").html(item.full_description);
  $("#myModal").modal('show');
};

function getDetail(id) {
  var result;
  partsbase.forEach(function(item) {
    if (id == item.id) {
      result = item;
    }
  });
  return result;
};
