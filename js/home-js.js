/**
 * Created by Rudda Beltrao on 16/01/2017.
 */

 
var index = 0;
carrousel();

function carrousel() {

    var i;
    var x = document.getElementsByClassName("mySlider");

    for(i=0; i<x.length; i++){

        x[i].style.display = "none";

    }

    index++;
    if(index > x.length){
        index = 1;
    }

    x[index  -1].style.display = "block";

    setTimeout(carrousel, 2000);

}

