let user_id = $('#user').val();

// get seached connections
$.fn.getsconnections = function (name) {

    getsconnectionsAPI(name).then(response => {
        if (response.hasOwnProperty('status')) {
            html = '<h3>No result found</h3>';
            $('#searchd').empty();
            $('#searchd').html(html);
        } else {
            var html = '';
            $.each(response, function (index, element) {
                html += '<div class="user-profy">';
                if (element.gender == 1) {
                    html += '<img src="images/resources/male-user.png" alt=""></img>';
                } else {
                    html += '<img src="images/resources/female-user.png" alt=""></img>';
                }
                html += '<h3>' + element.name + '</h3>';
                html += '<span>' + element.bio + '</span>';
                html += '<ul>';
                html += '<li><button class="btn btn-success add" id="add_' + element.id + '">Add</button></li>';
                html += '<li>&nbsp</li><li><button class="btn btn-danger block" id="block_' + element.id + '">Block</button></li></ul></div>';
            });
            $('#searchd').empty();
            $(html).appendTo('#searchd');
            $.fn.blockbtnlistenerinitialiser();
            $.fn.addbtnlistenerinitialiser();
        }

    });
}

async function getsconnectionsAPI(name) {

    const response = await fetch("http://127.0.0.1/Facebook-app/php/api/searchbynameapi.php?id=" + user_id + "&name=" + name);

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
        var name = $('#search').val();
        $('#searchd').html('<h3>This user has been blocked</h3>');
    });
}

async function blockbyidAPI(id) {

    const response = await fetch("http://127.0.0.1/Facebook-app/php/api/blockconnection.php?id=" + user_id + "&block_id=" + id);

    if (!response.ok) {
        const message = "ERROR OCCURED";
        throw new Error(message);
    }
    const article = await response.json();
    return article;
}

// add btn
$.fn.addbtnlistenerinitialiser = function () {

    $(".add").click(function () {
        var id = $(this).attr('id');
        const myArr = id.split("_");
        var id_num = myArr[1];
        addbyidAPI(id_num);
        var name = $('#search').val();
        $('#searchd').html('<h3>This user has been added</h3>');

    });
}

async function addbyidAPI(id) {

    const response = await fetch("http://127.0.0.1/Facebook-app/php/api/addconnection.php?id=" + user_id + "&con_id=" + id);

    if (!response.ok) {
        const message = "ERROR OCCURED";
        throw new Error(message);
    }

    const article = await response.json();
    return article;
}

// get notification
$.fn.getnotification = function () {

    getnotificationAPI().then(response => {
        if (response.hasOwnProperty('status')) {
            html = '<h3>No result found</h3>';
            $('#notlist').empty();
            $('#notlist').html(html);
        } else {
            var html = '';
            $.each(response, function (index, element) {
                html += '<div class="notfication-details">';
                html += ' <div class="noty-user-img">';
                html += '<img src="images/resources/notification.png" alt=""></div>';
                html += '<div class="notification-info">';
                html += '<h3>' + element.notification + '</h3></div></div>';
            });
            $('#notlist').empty();
            $('#notlist').html(html);
        }

    });
}

async function getnotificationAPI(name) {

    const response = await fetch("http://127.0.0.1/Facebook-app/php/api/recievenotificationapi.php?id=" + user_id);

    if (!response.ok) {
        const message = "ERROR OCCURED";
        throw new Error(message);
    }

    const article = await response.json();
    return article;
}

// get sugg
$.fn.getpendingcon = function () {

    getpendingAPI().then(response => {
        if (response.hasOwnProperty('status')) {
            html = '<h3 class="text-center">No peding  connections</h3>';
            $('#sug').empty();
            $('#sug').html(html);
        } else {
            var html = '';
            $.each(response, function (index, element) {
                html += '<div class="suggestion-usd"><img src="images/resources/useri.png" alt="">';
                html += ' <div class="sgt-text"><h4>' + element.name + '</h4>';
                html += ' <span>Graphic Designer</span></div>';
                html += ' <span><i class="la la-plus accept" id="accept_' + element.id + '"></i></span><span><i class="la la-close decline" id="decline_' + element.id + '"></i></span></div>';
            });
            $('#sug').empty();
            $('#sug').html(html);
            $.fn.acceptbtnlistenerinitialiser();
            $.fn.declinebtnlistenerinitialiser();
            $.fn.loaduserinfo();

        }

    });
}

async function getpendingAPI() {

    const response = await fetch("http://127.0.0.1/Facebook-app/php/api/getpendingconnectionsapi.php?id=" + user_id);

    if (!response.ok) {
        const message = "ERROR OCCURED";
        throw new Error(message);
    }

    const article = await response.json();
    return article;
}

// accept btn
$.fn.acceptbtnlistenerinitialiser = function () {

    $(".accept").click(function () {
        var id = $(this).attr('id');
        const myArr = id.split("_");
        var id_num = myArr[1];
        acceptAPI(id_num);
    });
}

async function acceptAPI(id) {

    const response = await fetch("http://127.0.0.1/Facebook-app/php/api/accpetconnectionapi.php?id=" + user_id + "&con_id=" + id);

    if (!response.ok) {
        const message = "ERROR OCCURED";
        throw new Error(message);
    }

    const article = await response.json();
    $.fn.getpendingcon();
    return article;
}

// decline btn
$.fn.declinebtnlistenerinitialiser = function () {

    $(".decline").click(function () {
        var id = $(this).attr('id');
        const myArr = id.split("_");
        var id_num = myArr[1];
        declineAPI(id_num);
    });
}

async function declineAPI(id) {

    const response = await fetch("http://127.0.0.1/Facebook-app/php/api/declineconnectionapi.php?id=" + user_id + "&con_id=" + id);

    if (!response.ok) {
        const message = "ERROR OCCURED";
        throw new Error(message);
    }

    const article = await response.json();
    $.fn.getpendingcon();
    return article;
}

// load user info
$.fn.loaduserinfo = function () {

    loadinfoAPI().then(response => {
        const myArr = response.name.split(" ");
        var first_name =  myArr[0];
        if(response.gender == 1){
        $('#headicon').html('<img src="images/resources/user1.png" alt=""><a href="#" title="">'+ first_name +'</a><i class="la la-sort-down"></i>');
        }else{
        $('#headicon').html('<img src="images/resources/user2.png" alt=""><a href="#" title="">'+ first_name +'</a><i class="la la-sort-down"></i>');
        }
        $('#imageinfo').html('<img src="'+ response.image +'" alt=""></img>');
        $('#nameinfo').html(response.name);
        $('#bioinfo').html(response.bio);
        $('#coninfo').html(response.connections);
        $('#hrefinfo').html(' <a href="my-profile-feed.php" title="">View Profile</a>');
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

    $("form").submit(function (e) {
        e.preventDefault();
    });

    $('.aa').click(function (event) {
        event.preventDefault();
    });

    $("#searchbtn").click(function () {

        var name = $('#search').val();
        if (name.length > 2) {
            $.fn.getsconnections(name);
        }

    });

    $("#refresh").click(function () {
        $.fn.getpendingcon();
    });


    $("#not").click(function () {
        $.fn.getnotification();
        $.fn.getpendingcon();
    });

    $.fn.getpendingcon();
    $.fn.loaduserinfo();

});