//Bouton play

var play_btns = document.querySelectorAll(".play");

play_btns.forEach(play_btn => {
    play_btn.addEventListener("mouseover", function(){
        this.src = "pictures/black_play_button.svg"
    })
    play_btn.addEventListener("mouseout", function(){
        this.src = "pictures/play_button.svg"
    })
})

/*filter button

var filter_btn = document.querySelector("#filter_btn");

function filterColor(){
    filter_btn.src = "pictures/black_filter_btn";
}

filter_btn.addEventListener("mouseover", filterColor)
filter_btn.removeEventListener("mouseout", filterColor)*/