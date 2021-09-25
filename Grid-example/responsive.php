<!DOCTYPE html>
<html>
<head>
<style>
.container {
display:grid;
height:100vh;
grid-template-columns:1fr 1fr 1fr 1fr;
grid-template-rows: 0.2fr 1.5fr 1.2fr 0.8fr;
grid-template-areas:
"nav nav nav nav"
"sidebar main main main"
"sidebar content1 content2 content3"
"sidebar footer footer footer";
grid-gap:0.2rem;
}
nav{
  background:#a7ffeb;
  grid-area:nav;
}
main{
  background:#84ffff;
  grid-area:main;
}
#content1{
  background:#6fffd2;
  grid-area:content1;
}
#content2{
  background:#64ffda;
  grid-area:content2;
}
#content3{
  background:#73ffba;
  grid-area:content3;
}
footer{
  background:#1de9b6;
  grid-area:footer;
}
#sidebar{
  background:#18ffff;
  grid-area:sidebar;
  }img{
    width: auto;
    width: auto;
  }

  @media only screen and (max-width: 550px){
    .container{
      grid-template-columns:1fr;
      grid-template-rows:0.4 fr 0.4 fr 2.2fr 1.2fr 1.2fr 1fr;
      grid-template-areas:
"nav "
"sidebar"
"main"
"content1 "
"content2"
" content3"
" footer";
    }
  }
</style>
</head>
<body>

<div class="container">
  <nav>Navbar</nav>
  <main>Main</main>
  <div id="sidebar">Sidebar</div>
  <div id="content1">  <img src="https://img.br.de/90dfff93-e1e3-4506-ab3b-84df5c17b998.jpeg?width=525&q=85" loading="lazy" alt="..." ></div>
  <div id="content2">Content2</div>
  <div id="content3">Content3</div>
  <footer>Footer</footer>
</div>
</body>
</html>

