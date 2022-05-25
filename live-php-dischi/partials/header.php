<header class="bg-dark p-3 d-flex align-items-center justify-content-between">
  <div class="logo">
    <img height="50" src="http://orig12.deviantart.net/846f/f/2015/245/9/b/new_spotify_icon_by_mattroxzworld-d98301o.png" alt="">
  </div>

  <div class="filter">
    <form action="/index.php" method="get">

      <select name="genre" id="genre">
        <option value="">All genres</option>
        <option value="Rock">Rock</option>
        <option value="Pop">Pop</option>
        <option value="Jazz">Jazz</option>
        <option value="Metal">Metal</option>
      </select>

      <button type="submit">Filter</button>

    </form>
  </div>
</header>