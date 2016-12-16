
var items=$('.c-slider div');
var circles=$('.rad');

var currentindex=0;
var itemAmt=items.length;
function cycleItems(){
	var item=$('.c-slider div').eq(currentindex);
	items.hide();
	item.css("display","inline-block");
	$(circles[currentindex]).prop("checked", true)
}

var autoslide=setInterval(function(){

	currentindex++;
	console.log(currentindex);
	if(currentindex>itemAmt-1){
		currentindex=0;
	}
	cycleItems();
},30000);

$('.rad').click(function(){
	currentindex=circles.index($(":radio[name='p']:checked"));
	cycleItems();
})

$('.next').click(function(){
	currentindex++;
	if(currentindex>itemAmt-1){
		currentindex=0;
	}
	cycleItems();
})

$('.prev').click(function(){
	currentindex--;
	if(currentindex<0){
		currentindex=itemAmt-1;
	}
	cycleItems();
})

var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");



// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}