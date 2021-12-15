<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Music Forum</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
    />
  </head>
<body>
    <div class="share-btn-container">
  
        <a href="#" class="twitter-btn">
          <i class="fab fa-twitter"></i>
        </a>

  
        <a href="#" class="linkedin-btn">
          <i class="fab fa-linkedin"></i>
        </a>
  
        <a href="#" class="whatsapp-btn">
          <i class="fab fa-whatsapp"></i>
        </a>
      </div>
      <div class="content">
    <div class="top-bar">
        <h1>
            Music Forum
        </h1>
    </div>
    <div class="main">
        <div class="header">
        </div>
        <textarea></textarea>
        <button>add comment</button>
        <div class="comments">
        </div>
    </div>
    <script src="data.js"></script>
    <script>
        var id = window.location.search.slice(1);
        var thread = threads.find(t => t.id == id);
        var header = document.querySelector('.header');
        var headerHtml = `
            <h4 class="title">
                ${thread.title}
            </h4>
            <div class="bottom">
                <p class="timestamp">
                    ${new Date(thread.date).toLocaleString()}
                </p>
                <p class="comment-count">
                    ${thread.comments.length} comments
                </p>
            </div>
        `
        header.insertAdjacentHTML('beforeend', headerHtml)

        function addComment(comment) {
            var commentHtml = `
                <div class="comment">
                    <div class="top-comment">
                        <p class="user">
                            ${comment.author}
                        </p>
                        <p class="comment-ts">
                            ${new Date(comment.date).toLocaleString()}
                        </p>
                    </div>
                    <div class="comment-content">
                        ${comment.content}
                    </div>
                </div>
            `
            comments.insertAdjacentHTML('beforeend', commentHtml);
        }

        var comments = document.querySelector('.comments');
        for (let comment of thread.comments) {
            addComment(comment);
        }

        var btn = document.querySelector('button');
        btn.addEventListener('click', function() {
            var txt = document.querySelector('textarea');
            var comment = {
                content: txt.value,
                date: Date.now(),
                author: 'Joshua'
            }
            addComment(comment);
            txt.value = '';
            thread.comments.push(comment);
            localStorage.setItem('threads', JSON.stringify(threads));
        })
    </script>
    </div>
    <script src="main.js"></script>
    <style>
        body {
  margin: 10px 60px;
}
a {
  text-decoration: none;
  color: black;
}
h1, h4, ol {
  margin: 0;
}
p {
  margin: 5px 0;
}
.top-bar {
  background-color: skyblue;
  padding: 0 40px;
}
.main {
  background-color: #F6F6EF;
  padding: 10px 15px;
}
.row {
  padding: 5px 0;
}
.bottom {
  display: flex;
  color: grey;
  font-size: 12px;
}
.timestamp {
  padding-right: 10px;
}
    </style>
</body>
</html>