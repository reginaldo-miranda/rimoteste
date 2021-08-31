
  
function checarNaN(val) {
  
  if (isNaN(val))
    val = 0;
   return val;
}


function checartroco(valtroco){
  
 if (valtroco < 0 ){
    alert('deu');
    n2.setAttribute('disabled','');
    n4.setAttribute('disabled','');
    n3.setAttribute('disabled','');
    
    return checarNaN(valtroco);
 
    
 }else{
   alert('valor maior') 
     document.getElementById('troco').innerHTML = 'Falta';
   return checarNaN(valtroco);
 }
}


function calcular() {

  var n1 = checarNaN(parseFloat(document.getElementById('n1').value, 10));
  var n2 = checarNaN(parseFloat(document.getElementById('n2').value, 10));
  var n3 = checarNaN(parseFloat(document.getElementById('n3').value, 10));
  var n4 = checarNaN(parseFloat(document.getElementById('n4').value, 10));

  var ress = checartroco(document.getElementById('resultado').innerHTML = n1-n2);
  var ress = checartroco(document.getElementById('resultado').innerHTML = ress-n3);
  var ress = checartroco(document.getElementById('resultado').innerHTML = ress-n4);

 $('#resto').val(ress);
  
}
   
  function limparinputs(){
       // alert('limpar');
          document.getElementById('n2').value= '';
          document.getElementById('n3').value= '';
          document.getElementById('n4').value= '';
          document.getElementById('resto').value= '';
          n2.removeAttribute('disabled','');
          n3.removeAttribute('disabled','');
          n4.removeAttribute('disabled','');


  }
