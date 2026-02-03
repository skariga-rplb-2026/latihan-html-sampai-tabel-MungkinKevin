
let uskor = 0
let cskor = 0

function main(user_choice) {
    //alert(user_choice)
    
    //set COM's random choice
    const komputer = ["gunting","batu","kertas"]
    const random = Math.floor(Math.random() * komputer.length)
    let cchoice = komputer[random]

    
    document.getElementById("pil_com").src = "img/"+cchoice+".jpg"
    document.getElementById("pil_user").src = "img/"+user_choice+".jpg"

    //user == com > seri
    //gunting - kertas && batu - gunting && kertas - batu > menang
    //else > kalah

    
    
    if (user_choice == cchoice) {
        document.getElementById("hasil").innerHTML = "SERI"
        
    }   
    else if ( 
        (user_choice == "batu" && cchoice == "gunting") ||
        (user_choice == "kertas" && cchoice == "batu") ||
        (user_choice == "gunting" && cchoice == "kertas")) {
        document.getElementById("hasil").innerHTML = "MENANG"
        uskor++
        
    } else {
        document.getElementById("hasil").innerHTML = "KALAH"
        cskor++
        
    }

    document.getElementById("skor").innerHTML = "Skor user: " + uskor + "|" + "Skor Komputer: " + cskor
}