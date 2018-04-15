var checkbox = document.getElementsByTagName("input");

var i;
var notChecked=0;
for (i=0;i<checkbox.length;i++){
    checkbox[i].addEventListener('click', function () {
        if (this.type=="checkbox") {
            if (this.checked) {
                console.log(this.id);
                console.log(this.name);
                notChecked--;
            }else{
                notChecked++;
            }


            console.log(notChecked);
        }

    });
}
for (i=0;i<checkbox.length;i++){
    if (checkbox[i].type=="checkbox" && !checkbox[i].checked )
        notChecked++;
}
console.log(notChecked);