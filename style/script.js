// function validator(){
   
//    let name;
//    name = getElementById('name').value;
//    if(name.length < 7){
//       document.getElementById("error").innerHTML = 'erro text';
//    }
//    else{
//       document.getElementById("error").innerHTML = 'ok';
//    }
// }
// document.getElementById('signup').onclick{
//    alert('signup done');
// }


















function namechange(){
   var title =  document.getElementById("text");
   const cells = table.getElementsByTagName('h1');
   cells.innerHTML = "hi";
   
}

 function readFile(filename, enc){
   return new Promise(function (fulfill, reject){
     fs.readFile(filename, enc, function (err, res){
       if (err) reject(err);
       else fulfill(res);
     });
   });
 }
 function readJSON(filename){
   return new Promise(function (fulfill, reject){
     readFile(filename, 'utf8').done(function (res){
       try {
         fulfill(JSON.parse(res));
       } catch (ex) {
         reject(ex);
       }
     }, reject);
   });
 }