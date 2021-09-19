let user_id = $('#user').val();

//load user info
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
    $.fn.loaduserinfo();
});