

var courseApi ='http://localhost:8765/homes.json';
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
      document.getElementById("demo3").innerHTML = courses.pres[0].id;
      document.getElementById("demo2").innerHTML = courses.pres[0].about_pres;
      document.getElementById("demo1").innerHTML = courses.pres[0].title_pres; 
      document.getElementById("demo4").innerHTML = courses.pres[0].author;
      document.getElementById("demo5").innerHTML = courses.pres[0].dress;
      document.getElementById("demo6").innerHTML = courses.pres[0].link;
        return;
}
function createForm(){
var createBtn = document.querySelector('#create');
createBtn.onclick =function(){

    var author = document.querySelector('input[name ="author"]').value;
    var dress = document.querySelector('input[name ="dress"]').value;
    var link = document.querySelector('input[name ="link"]').value;
    var title_pres = document.querySelector('input[name="title_pres"]').value;
    var about_pres = document.querySelector('input[name ="about_pres"]').value;
    var id = document.querySelector('input[name="id"]').value;
    var data = {
        about_pres:about_pres,
        title_pres:title_pres,
        id:id,
        author:author,
        dress:dress,
        link:link,
    };
        var url = 'http://localhost:8765/homes/.json'; 
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
        var id =  document.getElementById('demo3').innerHTML;
        console.log(id);
        var url1 = 'http://localhost:8765/homes/'+ id +'.json';
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

    var author = document.querySelector('input[name ="author"]').value;
    var dress = document.querySelector('input[name ="dress"]').value;
    var link = document.querySelector('input[name ="link"]').value;
    var title_pres = document.querySelector('input[name="title_pres"]').value;
    var about_pres = document.querySelector('input[name ="about_pres"]').value;
    var id = document.querySelector('input[name="id"]').value;
    var data = {
        about_pres:about_pres,
        title_pres:title_pres,
        id:id,
        author:author,
        dress:dress,
        link:link,
    };

         var id =  document.getElementById('demo3').innerHTML;
        var url = 'http://localhost:8765/homes/'+ id +'.json'; 
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
