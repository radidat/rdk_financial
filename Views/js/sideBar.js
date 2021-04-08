sidebar  = document.querySelector('.navbarHead'); 
btnOpen = document.querySelector('.btn-open')
bkgd= document.querySelector('#background')
btnClose = document.querySelector('.close')

if(btnOpen){ 
  btnOpen.addEventListener('click', (e)=>{
    e.stopPropagation()
    sidebar.classList.add('openSidebar');
    bkgd.classList.add('opacity');
    
})
}

if(btnClose){
  btnClose.addEventListener('click', (e)=>{
    e.stopPropagation()

    sidebar.classList.remove('openSidebar');
    bkgd.classList.remove('opacity');
    

    
})
}


document.addEventListener('click', (e)=>{
          e.stopPropagation()
    if(sidebar.classList.contains('openSidebar')){
        sidebar.classList.remove('openSidebar');
        bkgd.classList.remove('opacity');
    }



})
/*
 let bg = document.getElementById('color')
bg.style.backgroundColor ='black'

 let currentPathName = window.location.pathname
   if(currentPathName){
    let tabPathName= currentPathName.split('/')
    tabPathName.find( element =>{ 

      console.log(element)
      if(element === 'acceuil.php'){ 
        return document.body.style.backgroundColor = 'rgb(66, 66, 66)';
      }else if(element ==='clients.html'){
         return document.body.style.backgroundColor = 'rgb(66, 66, 66)';
      }else if(element ==='information_Vehicule.html'){ 
          return document.body.style.backgroundColor = '#53B4FF';
      }else if(element ==='ajout_vehicule.html'){ 
        return document.body.style.backgroundColor = '#A9CC34';
      }else if(element ==='contravention.html'){ 
        return document.body.style.backgroundColor = '#A9CC34';
      }else if(element ==='etat_vehicule.html'){ 
        return document.body.style.backgroundColor = '#A9CC34';
      }else if(element ==='detail_client.html'){ 
        return document.body.style.backgroundColor = '#A9CC34';
      }else if(element ==='location.html'){
        return document.body.style.backgroundColor = '#53B4FF';
      }else if(element ==='information_client.html'){
        return document.body.style.backgroundColor = '#A9CC34';
      }else if(element ==='connexion.html'){
        return document.body.style.backgroundColor = '#fff';
      }else if(element ==='inscription.html'){
        return document.body.style.backgroundColor = '#A9CC34';
      }else if(element ==='etat_vehicule_client.html'){
        return document.body.style.backgroundColor = '#A9CC34';
      }
      
    })
   }
     */
