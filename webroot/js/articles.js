var courseApi ='http://localhost:8765/articlesapi.json';
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

                document.getElementById("id_article").innerHTML = courses.articles[0].id_article;
                document.getElementById("about").innerHTML = courses.articles[0].about;
                document.getElementById("title").innerHTML = courses.articles[0].title;
                    document.getElementById("body").innerHTML = courses.articles[0].body;
                    document.getElementById("img").innerHTML = courses.articles[0].img;
                    document.getElementById("link").innerHTML = courses.articles[0].link;

                    document.getElementById("id_article1").innerHTML = courses.articles[1].id_article;
                document.getElementById("about1").innerHTML = courses.articles[1].about;
                document.getElementById("title1").innerHTML = courses.articles[1].title;
                    document.getElementById("body1").innerHTML = courses.articles[1].body;
                    document.getElementById("l").innerHTML = courses.articles[1].img;
                    document.getElementById("n").innerHTML = courses.articles[1].link;

                    document.getElementById("id_article2").innerHTML = courses.articles[2].id_article;
                document.getElementById("about2").innerHTML = courses.articles[2].about;
                document.getElementById("title2").innerHTML = courses.articles[2].title;
                    document.getElementById("body2").innerHTML = courses.articles[2].body;
                    document.getElementById("u").innerHTML = courses.articles[2].img;
                    document.getElementById("i").innerHTML = courses.articles[2].link;
                    document.getElementById("id_article3").innerHTML = courses.articles[3].id_article;
                document.getElementById("about3").innerHTML = courses.articles[3].about;
                document.getElementById("title3").innerHTML = courses.articles[3].title;
                    document.getElementById("body3").innerHTML = courses.articles[3].body;
                    document.getElementById("a").innerHTML = courses.articles[3].img;
                    document.getElementById("b").innerHTML = courses.articles[3].link;
}
function createForm(){
var createBtn = document.querySelector('#create');
createBtn.onclick =function(){

    var body = document.querySelector('input[name ="body"]').value;
    var img = document.querySelector('input[name ="img"]').value;
    var link = document.querySelector('input[name ="link"]').value;
    var title = document.querySelector('input[name="title"]').value;
    var about = document.querySelector('input[name ="about"]').value;
    var id_article = document.querySelector('input[name="id_article"]').value;
    var data = {
        about:about,
        title:title,
        id_article:id_article,
        body:body,
        img:img,
        link:link,
    };
        var url = 'http://localhost:8765/articlesapi.json'; 
        console.log(data);
        console.log(url);
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
        var id =  document.getElementById('id_article').innerHTML;
        console.log(id);
        var url1 = 'http://localhost:8765/articlesapi/'+ id +'.json';
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

    var body = document.querySelector('input[name ="body"]').value;
    var img = document.querySelector('input[name ="img"]').value;
    var link = document.querySelector('input[name ="link"]').value;
    var title = document.querySelector('input[name="title"]').value;
    var about = document.querySelector('input[name ="about"]').value;
    var id_article = document.querySelector('input[name="id_article"]').value;
    var data = {
        about:about,
        title:title,
        id_article:id_article,
        body:body,
        img:img,
        link:link,
    };

          var id = id_article; 
        var url = 'http://localhost:8765/articlesapi/'+ id +'.json';
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