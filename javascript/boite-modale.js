(function(){
    console.log("tester si javascript fouctionne");
   let boite__modale = document.querySelector(".boite__modale")
  let cours__desc__bouton = document.querySelectorAll('.cours__desc__boutton')
  console.log(cours__desc__bouton.length)  

  for (const bout of cours__desc__bouton) {
      bout.addEventListener('mousedown',function(){
        boite__modale.classList.add('ouvrir')
        console.log(boite__modale.classList)
      })
  }

  boite__modale.addEventListener('mousedown', function(){
    boite__modale.classList.remove('ouvrir')
  })

 

})()



