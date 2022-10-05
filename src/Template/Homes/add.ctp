 

 
 <div id="top"></div>
<div id="bbb"></div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
$(document).ready(function(){
    
        $("#div1").load("http://localhost:8765/headers");
    });

</script>

<p id="demo"></p>
<p id="demo1"></p>
<p id="demo2"></p>
<p id="demo3"></p>

<h2> Forms</h2>

<form id="form" >
  <input type="text" name="id" value="" />
  <input type="text" name="title_pres" value="" />
 
  <button type='submit'>send</button>
  <button id="create" type="button">cr</button>

</form>



<script>

var courseApi ='http://localhost:8765/homes.json';
function start(){
    getCourses(renderCourses);
    createForm(); 
}
start();
function getCourses(callback){
    fetch(courseApi)
    .then(function(response){
        return response.json();

    })
    .then(callback);
}

function renderCourses(courses){
const arrays = Object.values(courses);
  arrays.forEach(function(array){
 document.getElementById("demo").innerHTML = array[0].author;
 document.getElementById("demo1").innerHTML = array[0].title_pres; 
 document.getElementById("demo2").innerHTML = array[0].bnt; 
 document.getElementById("demo3").innerHTML = array[0].id;       
});
}
function createForm(){
  var createBtn = document.querySelector('#create');
    createBtn.onclick =function(e){
      console.log(e);
      form = document.getElementById('form');
      var formData = new FormData(form);
      console.log(formData);
      var url = ''
      postCourses(courseApi, formData );
    }
  //  var about = document.querySelector('input[name ="id"]').value;
      
  // var title = document.querySelector('input[name="title_pres"]').value;
    
  // // var btn = document.querySelector('input[name="bnt"]').value;



  // for (const [key, value] of formData) {

  //   var output = `${key}: ${value}, \n `;
  //   console.log(output);
  //   return output;
  
  // }
    
  // }
}
async function postCourses(url = 'http://localhost:8765/homes.json', data, callback) {

  var data ={id:'22'}
  
  var response = await fetch(url, {
    method: 'POST', 
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body:  JSON.stringify(data),
  });
  return response.json(); 
}




</script>