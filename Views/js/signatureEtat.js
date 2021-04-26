
/*signature client et RDK etat*/

const canvasTwo = document.getElementById('signature-pad-rdk'); 
const canvasThree= document.getElementById('signature-pad-client'); 

const  inputRdkEtat = document.getElementById('signature-rdk-etat'); 

const  inputClientEtat = document.getElementById('signature-client-etat'); 


const  buttonSavesignatureClientEtat = document.getElementById('save-signature-client-etat'); 

const  buttonClearClientEtatVehicule = document.querySelector('.clear-signature-client-etat ');
const buttonClearRdkEtatVehicule = document.querySelector('.clear-signature-rdk-etat');

function resizeCanvasTwo() {
  // When zoomed out to less than 100%, for some very strange reason,
  // some browsers report devicePixelRatio as less than 1
  // and only part of the canvas is cleared then.
  var ratio =  Math.max(window.devicePixelRatio || 1, 1);
  canvasTwo.width = canvasTwo.offsetWidth * ratio;
  canvasTwo.height = canvasTwo.offsetHeight * ratio;
  canvasTwo.getContext("2d").scale(ratio, ratio);
}

window.onresize = resizeCanvasTwo;
resizeCanvasTwo();

const signaturePadTwo= new SignaturePad(canvasTwo,{ 
   backgroundColor: 'rgb(255,255, 255)'
})







function resizeCanvasThree() {
    // When zoomed out to less than 100%, for some very strange reason,
    // some browsers report devicePixelRatio as less than 1
    // and only part of the canvas is cleared then.
    var ratio =  Math.max(window.devicePixelRatio || 1, 1);
    canvasThree.width = canvasThree.offsetWidth * ratio;
    canvasThree.height = canvasThree.offsetHeight * ratio;
    canvasThree.getContext("2d").scale(ratio, ratio);
}

window.onresize = resizeCanvasThree;
resizeCanvasThree();



const signaturePadThree = new SignaturePad(canvasThree,{ 
     backgroundColor: 'rgb(255,255, 255)'
})


buttonSavesignatureClientEtat.addEventListener('click', ()=>{ 
                  if(signaturePadThree.isEmpty() && signaturePadTwo.isEmpty()){ 
                     inputClientEtat.value ='';
                     inputRdkEtat.value ='';

                  }else { 
                    let data = signaturePadThree.toDataURL(); 
                    let dataTwo = signaturePadTwo.toDataURL(); 
                      inputClientEtat.value = data;
                      inputRdkEtat.value = dataTwo;
                    console.log(inputClientEtat, inputRdkEtat);
                  }
})

buttonClearRdkEtatVehicule.addEventListener('click', (e)=>{ 
    e.preventDefault();
                   signaturePadTwo.clear(); 
                     inputRdkEtat='';
  })
  

buttonClearClientEtatVehicule.addEventListener('click', (e)=>{ 
    e.preventDefault();
                   signaturePadThree.clear(); 
                   inputClientEtat ='';
})
