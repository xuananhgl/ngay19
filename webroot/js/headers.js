

var courseApi ='http://localhost:8765/headersapi.json';
function start(){
        getCourses(renderCourses);
        createForm();
        editForm(); 
       
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
  console.log(courses);
      document.getElementById("aa").innerHTML = courses.headers[0].id_headers;
      document.getElementById("ss").innerHTML = courses.headers[0].about;
      document.getElementById("dd").innerHTML = courses.headers[0].title; 
      document.getElementById("ff").innerHTML = courses.headers[0].button;
      document.getElementById("gg").innerHTML = courses.headers[0].button_video;
     
        return;
}
function createForm(){
var createBtn = document.querySelector('#create');
createBtn.onclick =function(){

    var button = document.querySelector('input[name ="button"]').value;
    var button_video = document.querySelector('input[name ="button_video"]').value;
    var title = document.querySelector('input[name="title"]').value;
    var about = document.querySelector('input[name ="about"]').value;
    var id_headers = document.querySelector('input[name="id_headers"]').value;
    var data = {
        about:about,
        title:title,
        id_headers:id_headers,
        button:button,
        button_video:button_video,
    };
        var url = 'http://localhost:8765/headersapi.json'; 
    postData(url, data);
}
}
async function postData(url, data) {
  const response = await fetch(url, {
        method: 'POST', 
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(data) 
  });
  return response.json();
  }
  async function deleteData(id) {
        var id =  document.getElementById('aa').innerHTML;
        console.log(id);
        var url1 = 'http://localhost:8765/headersapi/'+ id +'.json';
        console.log(url1);
        
        const response = await fetch(url1, {
        method: 'DELETE', 
        headers: {
          'Content-Type': 'application/json'
        },
  });
         return response.json();
       
    }
  function editForm(){
var createBtn = document.querySelector('#creat');
createBtn.onclick =function(){

    var button = document.querySelector('input[name ="button"]').value;
    var button_video = document.querySelector('input[name ="button_video"]').value;
    var title = document.querySelector('input[name="title"]').value;
    var about = document.querySelector('input[name ="about"]').value;
    var id_headers = document.querySelector('input[name="id_headers"]').value;
    var data = {
        about:about,
        title:title,
        id_headers:id_headers,
        button:button,
        button_video:button_video,
       
       
    };
 console.log(data);
         var id =  document.getElementById('aa').innerHTML;
        var url = 'http://localhost:8765/headersapi/'+ id +'.json'; 
    editData(url, data);
}
}
async function editData(url, data) {
  const response = await fetch(url, {
        method: 'PUT', 
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(data) 
  });
  return response.json();
  }

