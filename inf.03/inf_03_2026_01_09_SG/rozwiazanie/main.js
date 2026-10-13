// Skrypt 2
function zmianaSekcji(sekcjaID){
    // sekcje
    let kolorSection = document.getElementById('kolorSection');
    let ksztaltSection = document.getElementById('ksztaltSection');
    let wzorSection = document.getElementById('wzorSection');
    // przyciski
    let kolorButton = document.getElementById('kolorButton');
    let ksztalButton = document.getElementById('ksztaltButton');
    let wzorButton = document.getElementById('wzorButton');

    if(sekcjaID === 'kolorSection'){
        kolorSection.style.display="block";
        ksztaltSection.style.display="none";
        wzorSection.style.display="none";

        kolorButton.style.backgroundColor="Salmon";
        ksztalButton.style.backgroundColor="crimson";
        wzorButton.style.backgroundColor="crimson";
    }else if(sekcjaID === 'ksztaltSection'){
        kolorSection.style.display="none";
        ksztaltSection.style.display="block";
        wzorSection.style.display="none";

        kolorButton.style.backgroundColor="crimson";
        ksztalButton.style.backgroundColor="Salmon";
        wzorButton.style.backgroundColor="crimson";
    } else if(sekcjaID === 'wzorSection'){
        kolorSection.style.display="none";
        ksztaltSection.style.display="none";
        wzorSection.style.display="block";

        kolorButton.style.backgroundColor="crimson";
        ksztalButton.style.backgroundColor="crimson";
        wzorButton.style.backgroundColor="Salmon";
    }
}