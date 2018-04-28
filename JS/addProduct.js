var select = document.getElementById("categorie");
var forum  = document.getElementById("forum");

    select.addEventListener('click', function () {
        var url = "addProductForum.php";
        var value= select.value;
        $.post(url,
            {
                tab:value
            },
            function(data, status){
                console.log ("Status: " + status);
                forum.innerHTML=data;

            });
    });


