ymaps.ready(init);

function init() {
    var myPlacemark,
        myMap = new ymaps.Map('map', {
            center: [40.198965,44.504228],
            zoom: 14
        }, {
            searchControlProvider: 'yandex#search'
        });

    myMap.geoObjects.add(new ymaps.Placemark([40.198965,44.504228], {
            balloonContent: '<strong>INFOEXPERT ACADEMY</strong>'
        }, {
            preset: 'islands#icon',
            iconColor: '#0095b6'
        }))


    //
    // var myGeocoder = ymaps.geocode("Վիկտոր Համբարձումյան 113");
    //
    // myGeocoder.then(
    //
    //     function (res) {
    //
    //         alert('Координаты объекта :' + res.geoObjects.get(0).geometry.getCoordinates());
    //
    //     },
    //
    //     function (err) {
    //
    //         alert('Ошибка');
    //
    //     }
    //
    // );

}
