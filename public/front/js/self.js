$(".btn-open").click(function(){
    $('.form-reply').css('display','none')
    var service = this.id;
    var service_id = '#f-' + service
    $(service_id).show('slow');
});

$(document).on("click", '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});
function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
}


$(document).ready(function () {
    var back = ['green','cyan','voilet','red','orange','blue','black'];
    var rand = back[Math.floor(Math.random() * back.length)];
    $('.color-lebel').addClass('clr-' + rand);
})

