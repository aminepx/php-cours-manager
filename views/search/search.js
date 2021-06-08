const items=document.querySelectorAll('.card')
   var divText
   let input
     document.getElementById('search').addEventListener('keyup',function(e){
         input=e.target.value
         for (let i = 0; i < items.length; i++) {

                   divText=items[i].children[1].firstElementChild.innerText
                   if(divText.indexOf(input)!=-1)
                   {
                       items[i].style.display='block'
                   }
                   else
                   {
                       items[i].style.display='none'
                   }
         }
         
     });



     

     




    