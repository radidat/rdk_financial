
/* signature contrat de location*/

const canvas = document.getElementById('signature-pad'); 
let inputrdk = document.getElementById('signature-rdk'); 
const  inputClient = document.getElementById('signature-client'); 
const  button = document.getElementById('save-signature'); 
const  buttonClearRdk = document.querySelector('.clear-signature-rdk'); 


// This also causes canvas to be cleared.
function resizeCanvas() {
  // When zoomed out to less than 100%, for some very strange reason,
  // some browsers report devicePixelRatio as less than 1
  // and only part of the canvas is cleared then.
  var ratio =  Math.max(window.devicePixelRatio || 1, 1);
  canvas.width = canvas.offsetWidth * ratio;
  canvas.height = canvas.offsetHeight * ratio;
  canvas.getContext("2d").scale(ratio, ratio);
}

window.onresize = resizeCanvas;
resizeCanvas();
const signaturePad = new SignaturePad(canvas,{ 
     backgroundColor: 'rgb(255,255, 255)'
})


button.addEventListener('click', ()=>{ 
                  if(signaturePad.isEmpty()){ 
                     inputrdk.value =''; 

                  }else { 
                    let data = signaturePad.toDataURL(); 
                      inputrdk.value = data;
                      console.log(inputrdk);
                  }
})

buttonClearRdk.addEventListener('click', (e)=>{ 
    e.preventDefault();
                   signaturePad.clear(); 
                     inputrdk ='';
})

console.log("hello world")

