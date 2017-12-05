<?php
    echo json_encode (
        "[
            {
                "id": 1,
                "name": "SACHS 34542",
                "orig_article": "Nissan 54303-BN425",
                "description": "Серия амортизаторов SUPER TOURING",
                "full_description": "Амортизаторы на любой вкус и по сходной цене отвечают высоким требованиям комфорта и безопасности – почти для любого автомобиля. Максимальная надежность амортизаторов Super Touring устанавливает стандарт для этой отрасли. Разработанные и созданные со всей компетенцией завода-изготовителя они представляют собой безопасность, надежность и стабильность.",
                "applicability": "Nissan Almera N16, Nissan Primera P12",
                "price": "4354 руб.",
                "url_img": "img/1.jpg"
            }
        ]"
    );
?>
<!-- 
<script>
$(document).ready (function () {
    $("select[name='country']").bind("change", function () {
        $("select[name='city']").empty();
        $.get("countrycheck.php", {country: $("select[name='country']").val()}, function (data) {
            data = JSON.parse(data);
            $("select[name='city']").empty();
            for(var id in data) {
                $("select[name='city']").append($("<option value='"+ id +"'>" + data[id] + "</option>"));
            }
    });
});
});
</script> -->