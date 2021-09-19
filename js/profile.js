let user_id = $('#user').val();

//load user info
$.fn.loaduserinfo = function () {

    loadinfoAPI().then(response => {
        const myArr = response.name.split(" ");
        var first_name =  myArr[0];
        if(response.gender == 1){
        $('#headicon').html('<img src="images/resources/user1.png" alt=""><a href="#" title="">'+ first_name +'</a><i class="la la-sort-down"></i>');
        $('#userimage').html('<img src="images/resources/malep.png" alt=""></img>');
        }else{
        $('#headicon').html('<img src="images/resources/user2.png" alt=""><a href="#" title="">'+ first_name +'</a><i class="la la-sort-down"></i>');
        $('#userimage').html('<img src="images/resources/fmalep.png" alt=""></img>');
        }
        $('#name').val(response.name);
        $('#bio').val(response.bio);
        $('#connumber').html(response.connections);
        $('#name').val(response.name);proid
        $('#biop').html(response.bio);
        $('#proid').html('<h3>' +response.name + '</h3>&nbspProfile');
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

// update info
$.fn.updateinfo = function () {

    updateinfoAPI().then(response => {
        console.log("waw");
    });

}

async function updateinfoAPI() {

        var name = $('#name').val();
        var bio = $('#bio').val();
        const response = await fetch("http://127.0.0.1/Facebook-app/php/api/updateinfoapi.php", {
			method: 'POST',
			body: new URLSearchParams({
                "id": user_id,
				"name": name,
				"bio": bio
			})
		});

    if (!response.ok) {
        const message = "ERROR OCCURED";
        throw new Error(message);
    }

    const article = await response.json();
    $.fn.loaduserinfo();
    return article;
}

// on page load
$(document).ready(function () {
    $.fn.loaduserinfo();

    $('#updatebtn').click(function (){

        $.fn.updateinfo();

    });

});