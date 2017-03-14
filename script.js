window.onload = function () {
        (function(){
            var date = new Date();
            // paneme aja õigel kujul kokku
            var time = date.getHours()+':'+ date.getMinutes()+':'+date.getSeconds()+':'+date.getMilliseconds();
            document.getElementsByTagName('div')[0].innerHTML = "Aeg JS'is: "+time; //otsib meie lehelt esimese div tagi
            window.setTimeout(arguments.callee,1); //määrab ära, millal uuendatakse aega millisekundites
        })();
    }