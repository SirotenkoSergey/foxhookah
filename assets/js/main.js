$(document).ready(function(){
    ymaps.ready(function () {
        var myMap = new ymaps.Map('map', {
                center: [47.255271, 39.763264],
                zoom: 13
            }, {
                searchControlProvider: 'yandex#search'
            }),
            MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
            ),
            myPlacemarkWithContent1 = new ymaps.Placemark([47.235510, 39.804970]);
            myPlacemarkWithContent2 = new ymaps.Placemark([47.281212, 39.717546]);
            myPlacemarkWithContent3 = new ymaps.Placemark([47.249262, 39.713495]);
            myPlacemarkWithContent4 = new ymaps.Placemark([47.249556, 39.696588]);
            myPlacemarkWithContent5 = new ymaps.Placemark([47.234996, 39.712902]);
            myPlacemarkWithContent6 = new ymaps.Placemark([47.254008, 39.767618]);
        myMap.geoObjects
            .add(myPlacemarkWithContent1)
            .add(myPlacemarkWithContent2)
            .add(myPlacemarkWithContent3)
            .add(myPlacemarkWithContent4)
            .add(myPlacemarkWithContent5)
            .add(myPlacemarkWithContent6);
    });
    $("select").selectmenu();

    //===modal-action===
    var userConsert = localStorage.getItem("userConsert");
    if(userConsert == null) $("#start-modal").fadeIn(200);
    $("#start-modal .btn.btn-transparent").on("click", function(){
        $("#start-modal").fadeOut(200);
        localStorage.setItem("userConsert", true);
    });
    $("#start-modal .btn.btn-default").on("click", function(){
        window.close();
    });
 
    $(".banner-content a, footer .btn, .clients-item .btn, .send-order").on("click", function(){
        $("#feedback-modal").fadeIn(200);
    });

    $(".modal-close").on("click", function(){
        $(".modal-wrapper").fadeOut(200);
    });
});