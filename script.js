var selecttheme = document.getElementById('e');



selecttheme.addEventListener('change', (e) => {
    if (selecttheme.selectedIndex == 0) {
        selecttheme.style.background = "orange"
        document.getElementById('conteneur_tableau').style.backgroundImage = "url('../../../asset/images/imagetheme/naruto.png')"
        document.getElementById('conteneur_tableau').style.backgroundSize = "100%";
        document.getElementById('conteneur_tableau').style.backgroundRepeat = "no-repeat";
    } else if (selecttheme.selectedIndex == 1) {
        selecttheme.style.background = "red"
        document.getElementById('conteneur_tableau').style.backgroundImage = "url('../../../asset/images/imagetheme/op.png')"
        document.getElementById('conteneur_tableau').style.backgroundSize = "100%";
        document.getElementById('conteneur_tableau').style.backgroundRepeat = "no-repeat";
        tdw.style.width = "9vw"
    } else if (selecttheme.selectedIndex == 2) {
        selecttheme.style.background = "blue "
        document.getElementById('conteneur_tableau').style.backgroundImage = "url('../../../asset/images/imagetheme/loltheme.png')"
        document.getElementById('conteneur_tableau').style.backgroundSize = "100%";
        document.getElementById('conteneur_tableau').style.backgroundRepeat = "no-repeat";    }
})

var selectniveau = document.getElementById('f');

selectniveau.addEventListener('change', (e) => {
    if (selectniveau.selectedIndex == 0) {
        selectniveau.style.background = "green"
    } else if (selectniveau.selectedIndex == 1) {
        selectniveau.style.background = "orange"
    } else if (selectniveau.selectedIndex == 2) {
        selectniveau.style.background = "red "
    }
})

var array = [];


function table_donnée (taille, theme, taillecarte) {
    array = [];
    for (let index = 0; index < taille; index++) {
        array.push([]);
        for (let i = 0; i < taille; i++) {
            array[index].push("0");
        }
    }   

    for (let index = 0; index < taille*taille/2; index++) {

        let valeurint = Math.floor(Math.random() * 8)
        placeCard(valeurint);
        placeCard(valeurint);
    }

    console.log(array);
    display_tableau(theme,taillecarte);
}
 
function placeCard(text) {
    var tab = [];
    array.forEach(function get(arrays, index) {
        arrays.forEach( (element, i) => {
            if(element == 0){
                tab.push(index + ";" + i)
            }
        });
    })

    let random = Math.floor(Math.random() * tab.length)
    array[tab[random].split(';')[0]][tab[random].split(';')[1]] = text
}

function display_tableau (theme,taillecarte) {

    array.forEach(element => {

        var newtr = document.createElement('tr')
            document.getElementById('table').appendChild(newtr)
        
        element.forEach(subelement => {
            var newtd = document.createElement('td')
            //newtd.innerHTML =subelement;
            newtd.className = theme + subelement;
            var imgtheme = document.createElement('img')
            imgtheme.src = "../../../asset/images/" + theme + ".png"
            imgtheme.style.width = taillecarte + "vw"
            imgtheme.classList.add(subelement)
            imgtheme.addEventListener("click",function (cflip){
                if (theme == "lolcarte"){
                    if (imgtheme.className == 0){
                        imgtheme.src = "../../../asset/images/cartelol/gangplank.jpg"
                    } else if (imgtheme.className == 1) {
                        imgtheme.src = "../../../asset/images/cartelol/miss_fortune.jpg"
                    } else if (imgtheme.className == 2) {
                        imgtheme.src = "../../../asset/images/cartelol/nasus.jpg"
                    } else if (imgtheme.className == 3) {
                        imgtheme.src = "../../../asset/images/cartelol/orn.jpg"
                    } else if (imgtheme.className == 4) {
                        imgtheme.src = "../../../asset/images/cartelol/pantheon.jpg"
                    } else if (imgtheme.className == 5) {
                        imgtheme.src = "../../../asset/images/cartelol/renekton.jpg"
                    } else if (imgtheme.className == 6) {
                        imgtheme.src = "../../../asset/images/cartelol/aurelionsol.jpg"
                    } else if (imgtheme.className == 7) {
                        imgtheme.src = "../../../asset/images/cartelol/zoe.jpg"
                    }
                } else if (theme == "onepiecetheme"){
                    if (imgtheme.className == 0){
                        imgtheme.src = "../../../asset/images/cartelol/benilde.jpg"
                    } else if (imgtheme.className == 1) {
                        imgtheme.src = "../../../asset/images/cartelol/miss_fortune.jpg"
                    } else if (imgtheme.className == 2) {
                        imgtheme.src = "../../../asset/images/cartelol/nasus.jpg"
                    } else if (imgtheme.className == 3) {
                        imgtheme.src = "../../../asset/images/cartelol/orn.jpg"
                    } else if (imgtheme.className == 4) {
                        imgtheme.src = "../../../asset/images/cartelol/pantheon.jpg"
                    } else if (imgtheme.className == 5) {
                        imgtheme.src = "../../../asset/images/cartelol/renekton.jpg"
                    } else if (imgtheme.className == 6) {
                        imgtheme.src = "../../../asset/images/cartelol/aurelionsol.jpg"
                    } else if (imgtheme.className == 7) {
                        imgtheme.src = "../../../asset/images/cartelol/zoe.jpg"
                    }
                } else if (theme == "narutocarte"){
                    if (imgtheme.className == 0){
                        imgtheme.src = "../../../asset/images/cartelol/gangplank.jpg"
                    } else if (imgtheme.className == 1) {
                        imgtheme.src = "../../../asset/images/cartelol/miss_fortune.jpg"
                    } else if (imgtheme.className == 2) {
                        imgtheme.src = "../../../asset/images/cartelol/nasus.jpg"
                    } else if (imgtheme.className == 3) {
                        imgtheme.src = "../../../asset/images/cartelol/orn.jpg"
                    } else if (imgtheme.className == 4) {
                        imgtheme.src = "../../../asset/images/cartelol/pantheon.jpg"
                    } else if (imgtheme.className == 5) {
                        imgtheme.src = "../../../asset/images/cartelol/renekton.jpg"
                    } else if (imgtheme.className == 6) {
                        imgtheme.src = "../../../asset/images/cartelol/aurelionsol.jpg"
                    } else if (imgtheme.className == 7) {
                        imgtheme.src = "../../../asset/images/cartelol/zoe.jpg"
                    }
                }
            })
            newtd.append(imgtheme);
            newtr.appendChild(newtd);            
        })    
    });
    }

    
    let button = document.getElementById("buttonPourAfficherTableau");
    button.addEventListener("click", function (niveau){
        if (selectniveau.selectedIndex == 0 && selecttheme.selectedIndex == 0) {
            table_donnée(4, "narutocarte","9")
        }
        else if (selectniveau.selectedIndex == 1 && selecttheme.selectedIndex == 0) {
            table_donnée(8, "narutocarte","4.8")
        }
        else if (selectniveau.selectedIndex == 2 && selecttheme.selectedIndex == 0) {
            table_donnée(12, "narutocarte","3")
        }

        else if (selectniveau.selectedIndex == 0 && selecttheme.selectedIndex == 1) {
            table_donnée(4, "onepiecetheme","9")
        }
        else if (selectniveau.selectedIndex == 1 && selecttheme.selectedIndex == 1) {
            table_donnée(8, "onepiecetheme","4.8")
        }
        else if (selectniveau.selectedIndex == 2 && selecttheme.selectedIndex == 1) {
            table_donnée(12, "onepiecetheme","3")
        }

        else if (selectniveau.selectedIndex == 0 && selecttheme.selectedIndex == 2) {
            table_donnée(4, "lolcarte","9")
        }
        else if (selectniveau.selectedIndex == 1 && selecttheme.selectedIndex == 2) {
            table_donnée(8, "lolcarte","4.8")
        }
        else if (selectniveau.selectedIndex == 2 && selecttheme.selectedIndex == 2) {
            table_donnée(12, "lolcarte","3")
        }
        
    })

 var chrono = document.getElementById("chronometre")

 let heure = 0;
 let minute = 0;
 let seconde = 0;
 let ms = 0;

 let timeout 

 const demarrer = () => {
    defilertemps()
 }

 const defilertemps = () => {

    seconde = parseInt(seconde);
    minute = parseInt(minute);
    heure = parseInt(heure);

    ms += 10
    if (ms == 1000){
        ms = 0;
        seconde ++
        if(seconde == 60){
            seconde = 0
            minute ++
            if (minute == 60){
                minute = 0
                heure ++ 
            }
        }
    }

if (heure < 10){
    heure = "0" + heure;
}
if (minute < 10){
    minute = "0" + minute
}
if (seconde < 10){
    seconde = "0" + seconde
}


chrono.textContent = heure + ":" + minute + ":" + seconde + ":" + ms;

timeout = setTimeout(defilertemps,10);
 }

 button.addEventListener("click", demarrer);