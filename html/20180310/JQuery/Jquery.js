var tenAnh = document.getElementById('js-image');
function switcher(){
    console.log(tenAnh.src);
    if(tenAnh.src === "http://127.0.0.1:5500/html/20180310/JQuery/pic_bulboff.gif"){
        tenAnh.src="pic_bulbon.gif";
    }
    else{
        tenAnh.src="pic_bulboff.gif";
    }
}