/****** Open Window Patient File *****/
function openWindow(url,titre,taille){
    window.open(url,titre,taille);
}

/****** DESABLED INPUT PRICE *****/
function priceTreatment(){
    element = document.getElementById('job_completed');

    if(element.checked == true){
        document.getElementById('price').disabled =false;
    }else{
        document.getElementById('price').disabled =true;
    }
}

/****** CHECK ALL *****/
function checkAll(ref, name) {
    var form = ref;

    while (form.parentNode && form.nodeName.toLowerCase() != 'form'){
        form = form.parentNode;
    }

    var elements = form.getElementsByTagName('input');

    for (var i = 0; i < elements.length; i++) {
        if (elements[i].type == 'checkbox' && elements[i].name == name) {
            elements[i].checked = ref.checked;
        }
    }
}



