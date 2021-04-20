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

