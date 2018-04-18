var checkbox = document.getElementsByTagName("input");
var divLeft= document.getElementById("left");

var i;
var notChecked=0;
function generate_query () {
     str = "";
    for (i = 0; i < checkbox.length; i++) {
        if (checkbox[i].checked) {
            str += "\`" + checkbox[i].name + "\`=\"" + checkbox[i].id + "\" or ";
        }
    }
    return str.substr(0,str.length-3);
}
for (i=0;i<checkbox.length;i++){
    checkbox[i].addEventListener('click', function () {
        var str=generate_query();
        var url = "filtre.php";
            $.post("filtre.php",
                {
                    req: str
                },
                function(data, status){
                   console.log ("Status: " + status);
                   divLeft.innerHTML=data;

                });


    });
}
for (i=0;i<checkbox.length;i++){
    if (checkbox[i].type=="checkbox" && !checkbox[i].checked )
        notChecked++;
}
console.log(notChecked);

