let user_id = $('#user').val();

// load connections
$.fn.getconnections = function () {

    getconnectionsAPI().then(response => {
        if (response.hasOwnProperty('status')) {
            html = '<div class="col-lg-12 text-center"><h2>You have no connections yet!</h2></div>';
            $('#row').empty();
            $('#row').html(html);
        } else {
            var html = '';
            var i = 0;
            $.each(response, function (index, element) {
                html += '<div class="col-lg-3 col-md-4 col-sm-6 col-12"><div class="company_profile_info"><div class="company-up-info">';
                if (element.gender == 1) {
                    html += '<img src="images/resources/pf-icon1.png" alt="">';
                } else {
                    html += '<img src="images/resources/pf-icon2.png" alt="">';
                }
                html += '<h3>' + element.name + '</h3><h4>Graphic Designer</h4><ul>';
                html += '<li><button class="btn btn-danger unf" id="unf_' + element.id + '">unfriend</button></li>';
                html += '<li><button class="btn btn-dark block" id="block_' + element.id + '">block</button></li></ul></div>';
                html += ' </div><div class="row"></div></div>';
                i++;
            });
            $('#row').empty();
            $(html).appendTo('#row');
            $.fn.blockbtnlistenerinitialiser();
            $.fn.unfriendtnlistenerinitialiser();
        }

    });
}

async function getconnectionsAPI() {

    const response = await fetch("http://127.0.0.1/Facebook-app/php/api/getconnectionsapi.php?id=" + user_id);

    if (!response.ok) {
        const message = "ERROR OCCURED";
        throw new Error(message);
    }

    const article = await response.json();
    return article;
}

// block btn
$.fn.blockbtnlistenerinitialiser = function () {

    $(".block").click(function () {
        var id = $(this).attr('id');
        const myArr = id.split("_");
        var id_num = myArr[1];
        blockbyidAPI(id_num);

    });
}

async function blockbyidAPI(id) {

    const response = await fetch("http://127.0.0.1/Facebook-app/php/api/blockconnection.php?id=" + user_id + "&block_id=" + id);

    if (!response.ok) {
        const message = "ERROR OCCURED";
        throw new Error(message);
    }
    const article = await response.json();
    $.fn.getconnections();
    return article;
}

// unfriend btn
$.fn.unfriendtnlistenerinitialiser = function () {

    $(".unf").click(function () {
        var id = $(this).attr('id');
        const myArr = id.split("_");
        var id_num = myArr[1];
        unfriendbyidAPI(id_num);

    });
}

async function unfriendbyidAPI(id) {

    const response = await fetch("http://127.0.0.1/Facebook-app/php/api/unfriendapi.php?id=" + user_id + "&con_id=" + id);

    if (!response.ok) {
        const message = "ERROR OCCURED";
        throw new Error(message);
    }

    const article = await response.json();
    $.fn.getconnections();
    return article;
}

$.fn.loaduserinfo = function () {

    loadinfoAPI().then(response => {
        const myArr = response.name.split(" ");
        var first_name =  myArr[0];
        if(response.gender == 1){
        $('#headicon').html('<img src="images/resources/user1.png" alt=""><a href="#" title="">'+ first_name +'</a><i class="la la-sort-down"></i>');
        }else{
        $('#headicon').html('<img src="images/resources/user2.png" alt=""><a href="#" title="">'+ first_name +'</a><i class="la la-sort-down"></i>');
        }
    });

}

async function loadinfoAPI(id) {

    const response = await fetch("http://127.0.0.1/Facebook-app/php/api/getuserinfoapi.php?id=" + user_id);

    if (!response.ok) {
        const message = "ERROR OCCURED";
        throw new Error(message);
    }

    const article = await response.json();
    return article;
}

// on page load
$(document).ready(function () {
    $.fn.getconnections();
    $.fn.loaduserinfo();
});