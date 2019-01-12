/**
 * global variable that contains uri defintion of backend
 */
var apiUrl = {
    apiBase: "http://localhost:8080/travel-agency/api",
    apiSearch: "/rechercher"
};

/**
 * 
 * @param {*} url 
 * @param {*} parameters 
 * @param {*} success 
 */
function callGetApi(url, success) {
    var request = $.ajax({
        dataType: "json",
        url: url,
        headers: {"Access-Control-Allow-Origin": "*"},
        type : "GET",
    });
    request.done(success);
    //default fallback
    request.fail(function () {
        console.log("tootooooo");
    });
}

function buildRow(row) {
    var row = '<tr><td><a href=""><div class="hotels"><div class="desc"><img class="imghotels" src=" ' + './images/image1.jpg' + '" alt="image de couverture"></div><div class="hotelinformation"><h2 class="hotelname">'+ row.libelle +  '</h2><p class="hoteldesc"> ' + row.description + '</p></div><div class="price"><h1 class="pricetitle">Prix</h3><h2 class="realprice">' + row.prix + 'DA / Nuit</h1></div></div></a></td></tr>';
    return row;
}
//#####MAIN SCRIPT######
$(document).ready(function () {
    $('#search').click(function (e) {
        console.log('toto');
        var data = {
            location: $('#location').val()
        };
    
        var url = apiUrl.apiBase + apiUrl.apiSearch + "?";
        if (!!data.location) {
            url = url + "adresse=" + data.location;
        }
    
        window.location.href = './search.html?fromData='+ url;

    });


});
