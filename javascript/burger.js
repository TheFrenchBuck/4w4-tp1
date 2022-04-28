(function(){
    let burger = document.querySelector(".burger")
    burger.addEventListener("mousedown", function()
    {
        console.log("burger");
       
        if(!this.classList.contains('burger__x')){
            
            this.classList.add(' burger__x');


        }
        else{
            this.classList.remove(' burger__x');

        }
        

    })
})