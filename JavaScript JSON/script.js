// fetch('./data.json')
//   .then((response) => response.json())
//   .then((data) => {
//     let posts = data.posts;
//     let card = document.getElementById('post-card');
//     console.log(posts.length);
//     for (let i = 0; i < posts.length; i++) {
//       card.innerHTML += `<div class="col-md-4">
//                             <div class="card border-dark mb-3" style="max-width: 18rem;">
//                               <div class="card-header">Author : ${posts[i].username}</div>
//                               <div class="card-body text-dark">
//                                 <h5 class="card-title">${posts[i].title}</h5>
//                                 <p class="card-text">${posts[i].body}</p>
//                               </div>
//                             </div>
//                           </div>`;
//     }
//   });

filterSelection(null);

function filterSelection(key) {
  $.getJSON('./data.json', function (data) {
    let posts = data.posts;

    if (key) {
      posts = posts.filter(function (value) {
        return value.username === key; //post.username === 'James"
      });
    }

    $('#post-card')
      .empty()
      .append(
        posts.map(function (each) {
          return `<div class="col-md-4">
                  <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">${each.username}</div>
                    <div class="card-body text-dark">
                      <h5 class="card-title">${each.title}</h5>
                      <p class="card-text">${each.body}</p>
                    </div>
                  </div>
                </div>`;
        })
      );
  });
}
