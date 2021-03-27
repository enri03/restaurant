
let btnAdd= document.getElementById('add');
let btnSub=document.getElementById('sub');
let btnInput=document.getElementById('input');



btnAdd.addEventListener('click',()=>{ btnInput.value= parseInt(btnInput.value)+1;});
btnSub.addEventListener('click',()=>btnInput.value= parseInt(btnInput.value)-1);



