const divRestaurant = document.querySelector('.restaurants');
const divPlats = document.querySelector('.Plats');



    let maRequete = new XMLHttpRequest();
   
    maRequete.open('GET', 'http://localhost/frameworkExamObjet/index.php?controller=restaurant&task=indexApi' )
 
 
 
    maRequete.onload =  () => {

 
            let data = JSON.parse(maRequete.responseText)
 
            faireDesCardsRestaurants(data);
 
            
    }
 
          maRequete.send();
 
 




function afficheUnRestau(sonId){


    let maRequete = new XMLHttpRequest();
   
    maRequete.open('GET', `http://localhost/frameworkExamObjet/index.php?controller=restaurant&task=showApi&id=${sonId}`)
 
 
 
    maRequete.onload = () => {
 
            let data = JSON.parse(maRequete.responseText)
            
 
            let restaurant = data.restaurant //objet
            let plats = data.plats   //tableau d'objets plat
 
            faireCardRestauEtCardsPlats(restaurant, plats)



    }
 
          maRequete.send();
}


function faireDesCardsRestaurants(tableauRestaurant){

    let cards = "";

    tableauRestaurant.forEach(element => {
        
        card = `        <div class="col-2 p-3 container">

        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <img src="${element.image}" class="card-img-top" alt="...">
            <h5 class="card-title p-2">${element.name}</h5>
            <p class="card-text">${element.address}</p>
            <button value="${element.id}" class="btn btn-primary showRestau">voir la carte</button>
            </div>
        </div>

    </div>`

        cards += card

        divRestaurant.innerHTML = cards
        divPlats.innerHTML = "";

        
    });

        document.querySelectorAll('.showRestau').forEach(bouton =>{

        bouton.addEventListener('click', event =>{
    
            afficheUnRestau(bouton.value);
    
        })
    
    })


}



function faireCardRestauEtCardsPlats(restaurant, plats){

    cardRestau = `        <div class="col-4 p-3">

    <div class="card container" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">${restaurant.name}</h5>
        <p class="card-text">${restaurant.address}</p>
        </div>
             <button class="btn btn-success retourRestau">Retour aux Restaurants</button>
     </div> 

     <h1 class="text-center">La carte : <h1>
   
</div>`

    divRestaurant.innerHTML = cardRestau

    cardsPlats = ""

    plats.forEach(plat => {

        cardPlat = `        <div class="row" data-plat="${plat.id}">
    <hr>
        <p><strong>${plat.name}</strong></p>
        <img src="${plat.images}" style="width: 10rem" class="card-img-top text-center" alt="...">
        <p>${plat.price}</p>
        <p>${plat.description}</p>
        <button class="btn btn-danger supprPlat" value="${plat.id}">Supprimer le plat</button>
    <hr>
</div>`;

        cardsPlats += cardPlat


    })

    divPlats.innerHTML = cardsPlats

    

    document.querySelector('.retourRestau').addEventListener('click', event => {

        let maRequete = new XMLHttpRequest();
   
        maRequete.open('GET', 'http://localhost/frameworkExamObjet/index.php?controller=restaurant&task=indexApi' )
     
     
     
        maRequete.onload =  () => {
    
     
                let data = JSON.parse(maRequete.responseText)
     
                faireDesCardsRestaurants(data);
     
                
        }
     
              maRequete.send();

        

    })


    document.querySelectorAll('.supprPlat').forEach(bouton =>{

        bouton.addEventListener('click', event =>{

            supprimeUnPlat(bouton.value)
        })

    })


}


function  supprimeUnPlat(idPlat){


    let maRequete = new XMLHttpRequest();
   
    maRequete.open('POST', 'http://localhost/frameworkExamObjet/index.php?controller=plat&task=supprApi')
 
 
 
    maRequete.onload =  () => {
 
            //let data = JSON.parse(maRequete.responseText)
 
            //console.log(data)

            let divPlat = document.querySelector(`div[data-plat="${idPlat}"]`)
            
                divPlat.remove()
    }

    maRequete.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        params = "id="+idPlat
          maRequete.send(params);

}