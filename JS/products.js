var checkbox = document.querySelectorAll("input[type=checkbox]");
var divLeft= document.getElementById("left");
var scroll= document.getElementById("scroll");
var prixVal= document.getElementById("prixVal");

var i;
var notChecked=0;
function verif_carct_sp (ch){
   return   ch.replace("\\","\\\"");
}
scroll.addEventListener('change',function () {
       prixVal.innerText=scroll.value;
       var  str=generate_query();
        var url = "filtre.php";
          $.post("filtre.php",
                {
                    req: str
                },
            function(data, status){
            divLeft.innerHTML=data;

            });
        });

function generate_query () {
     str = "";
    for (i = 0; i < checkbox.length; i++) {
        if (checkbox[i].checked) {
            str += "\`" + checkbox[i].name + "\`=\"" +verif_carct_sp( checkbox[i].id) + "\" or ";
        }
    }
    str=str.substr(0,str.length-3);
    if (str.length!=0)
        str+=" AND ";
        str+="`prix` BETWEEN "+scroll.min+ " AND "+scroll.value;

    return str;
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


