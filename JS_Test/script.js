(function () {
    "use strict";

    var main = $("#main")
    var btn = $("button")
   


 

    start();

    

   function getUserBlog(id){
      var counter = 0;

       console.log(id+ ' was clicked')
       $(main).empty();
       $.getJSON('https://jsonplaceholder.typicode.com/posts?userId='+id,
         function(data){
            console.log(data)
            $('<button type="button" class="btn btn-secondary btn-lg btn-block mb-3">Back To Main Blog</button>').appendTo(main).click(
                function(){
                    $(main).empty();
                    start();
                    
                }

            )
            nextThreePosts(data);

      

          $('<button type="button" class="btn btn-secondary btn-lg btn-block mb-3"> Next 3 posts </button>').appendTo(main).click(
            function(){
                $(main).empty();
                start();
                
            }

        )

        

         }   
    )
   }

   
  function start(){
    $.getJSON('https://jsonplaceholder.typicode.com/users',
    function(data){

        $.each(data , function(index, user){
        $('<div class="jumbotron jumbotron-fluid"><div class="container"><h1 class="display-4">'
        
        + user.name + '</h1><a href="#" class="btn btn-outline-primary"> '+ user.website +' </a><button id='+ user.id +' type="button" class="btn btn-outline-primary ml-1"> Go To Blog! </button> <div ><h5> Company: '+ user.company.name +'</h5> <p class="card-text">' +
        user.company.catchPhrase
        +'</p></div> </div></div></div>').appendTo(main).find('button').click(
            function(){
                getUserBlog(this.id)
            }
        )
        })

    }
  )
  }

  function nextThreePosts(data){
      
          
        $.each(data, function(index, post){
             
                   $('<div class="container mb-3" ><div class="card"><h5 class="card-header"> BOlG NUMBER:'+ post.id +'</h5><div class="card-body"><h5 class="card-title">Blog Title: '+post.title +'</h5><p class="card-text">'+
                  post.body +'</p><button type="button" class="btn btn-outline-warning" id='+ post.id +'> See Comments </button><div id="comments"></div> </div></div></div>').appendTo(main).find('button').click(
                      function(){
                          getComments(this.id);
                      }
                  )
             
         })
    

  }

  function  getComments(id){

         $(this).html("Hide Comments") 
        $.getJSON('https://jsonplaceholder.typicode.com/comments?postId=' + id,
        function(data){
             

            $.each(data , function(index, comment){
                var comments = $("#comments")

               $('<p>Comment '+ comment.body +' <p>').appendTo(comments)

               
            
    
            })
            
        }
    
    )
      

  }



}());   