window.onload = myMove();
function myMove() {
    let flyObj = document.getElementById("bird");   
    let position = 0;
    let newposition = 0;
    let id = setInterval(movePlane, 10);
    function movePlane(){
        if(position < 400){
            flyObj.style.top = position + 'px';
            flyObj.style.left = position + 'px';
            position++;
        }
        else if(position < 1024){
            flyObj.style.top = 0;
            flyObj.style.bottom = position + 'px';
            flyObj.style.left = position + 'px';
            position++;
        }
        else{
            flyObj.style.left = 0;
            flyObj.style.bottom = position + 'px';
            position = 0;
        }
        
    }
}
// function myMove() {
//     var elem = document.getElementById("bird");   
//     var pos = 0;
//     var id = setInterval(frame, 10);
//     function frame() {
//       if (pos == 550) {
//         clearInterval(id);
//       } else {
//         pos++; 
//         elem.style.top = pos + 'px'; 
//         elem.style.left = pos + 'px'; 
//       }
//     }
//   }