var getUrlParameter = function getUrlParameter(sParam) {
    return  window.location.search.substring(10);

};

$(document).ready(function () {
    var toLoad = getUrlParameter('fromData');
    var responseHandler = function (data) {
        console.log("toto");
        $.each(data, function (index, item) {
          $('#tableContainer').find('tbody').append($(buildRow(item)));  
        });
    }
    callGetApi(toLoad, responseHandler);
})