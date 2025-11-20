<!DOCTYPE html>

<html lang="vi">

<head>

  <meta charset="utf-8" />

  <meta name="viewport" content="width=device-width,initial-scale=1" />

  <title>ONNA Online TV - Xem Tivi Trực Tuyến</title>

  <!-- PlayerJS -->
<script src="https://onnaonlinetv.xyz/playerjs.js"></script>
  <style>

    body { margin:0; font-family:Arial,sans-serif; background:#fafafa; }

    /* Thanh trên */

    .topbar {

      position:fixed; top:0; left:0; right:0; height:48px;

      display:flex; justify-content:space-between; align-items:center;

      padding:6px 10px; background:#fff; border-bottom:1px solid #eee; z-index:1400;

    }

    #menu-btn { font-size:22px; cursor:pointer; }

    #search-btn { width:26px; height:26px; cursor:pointer; }

    /* Thanh tìm kiếm */

    #search-box {

      position:fixed; top:0; left:0; right:0;

      padding:8px; background:#fff; border-bottom:1px solid #eee;

      display:none; z-index:1500; align-items:center; gap:6px;

    }

    #search-box.open { display:flex; }

    #search-input {

      flex:1; padding:8px; border:1px solid #ddd; border-radius:6px;

      -webkit-appearance:none; -moz-appearance:none; appearance:none;

    }

    #search-input::-webkit-search-cancel-button { -webkit-appearance:none; }

    #clear-search { display:none; font-size:16px; cursor:pointer; color:#666; }

    #close-search {

      margin-left: 6px; font-size: 14px; cursor: pointer; color: #000;

      background: #f2f2f2; padding: 6px 10px; border-radius: 6px;

    }

    /* Sidebar */

    #sidebar {

      position:fixed; top:0; left:0; height:100%; width:240px;

      background:#fff; transform:translateX(-100%);

      transition:.28s cubic-bezier(.2,.9,.2,1); z-index:1500;

    }

    #sidebar.open { transform:translateX(0); }

    #overlay {

      position:fixed; inset:0; background:rgba(0,0,0,0.35);

      opacity:0; pointer-events:none; transition:.18s; z-index:1400;

    }

    #overlay.show { opacity:1; pointer-events:auto; }

    #sidebar a {

      display:flex; align-items:center; gap:8px;

      padding:14px 16px; color:#000; font-weight:bold;

      text-decoration:none; border-bottom:1px solid #f5f5f5;

    }

    #sidebar a img { width:22px; height:22px; }

    #sidebar a.active { background:#f5f5f5; }

    /* Grid kênh */

    main { padding-top:56px; padding-bottom:70px; }

    .channels { display:grid; grid-template-columns:repeat(2,1fr); gap:10px; padding:10px; }

    .channel { background:#fff; border-radius:6px; overflow:hidden;

      box-shadow:0 2px 6px rgba(0,0,0,.1); cursor:pointer; }

    .channel img { width:100%; aspect-ratio:16/9; object-fit:cover; display:block; }

    /* Player */

    #player {

      position:fixed; inset:0; background:#000; display:none;

      justify-content:center; align-items:center; z-index:2000; flex-direction:column;

    }

    #player.open { display:flex; }

    #video-player, #audio-player {

      width:100%; height:100%; background:#000; display:none;

    }

    .close-player {

      position:absolute; top:10px; right:10px;

      color:#fff; background:rgba(0,0,0,0.45);

      border:none; padding:6px 10px; border-radius:6px;

      font-size:18px; cursor:pointer;

    }

    /* Bottom nav */

    .bottom-nav {

      position:fixed; left:0; right:0; bottom:0; height:56px;

      background:#fff; border-top:1px solid #ddd;

      display:flex; justify-content:space-around; align-items:center;

      z-index:1400;

    }

    .bottom-nav button {

      background:none; border:none; cursor:pointer;

      display:flex; align-items:center; justify-content:center;

    }

    .bottom-nav img { width:26px; height:26px; }

    .bottom-nav button.active img { filter:brightness(0) saturate(100%); }

  </style>

</head>

<body>

  <!-- Thanh trên -->

  <div class="topbar">

    <div id="menu-btn">☰</div>

    <img id="search-btn" src="/search.png" alt="Search">

  </div>

  <!-- Thanh tìm kiếm -->

  <div id="search-box">

    <input id="search-input" type="search" placeholder="Tìm kênh...">

    <span id="clear-search">✖</span>

    <span id="close-search">Đóng</span>

  </div>

  <!-- Sidebar -->

  <nav id="sidebar">

    <a href="#" class="active" data-tab="tv">

      <alt="TV"> Truyền Hình

    </a>

    <a href="#" data-tab="radio">

      <alt="Radio"> Phát Thanh

    </a>
             
    <a href="/downloadapp.html" class="button-link" id="myButton">Tải Ứng Dụng ONNA Online</a>
        

<script type="text/javascript">

    document.getElementById('myButton').addEventListener('click', function(event) {

        event.preventDefault(); // Ngăn chặn hành vi mặc định của thẻ <a> (chuyển hướng ngay lập tức)

        window.open(this.href, '_blank'); // Mở liên kết trong tab mới

    });

</script>

  </nav>

  <div id="overlay"></div>

  <!-- Danh sách kênh -->

  <main>

    <section class="channels" id="channels"></section>

  </main>

  <!-- Player -->

  <div id="player">

    <video id="video-player" controls playsinline></video>

    <audio id="audio-player" controls></audio>

    <button class="close-player">✖</button>

  </div>

  <!-- Bottom nav -->

  <div class="bottom-nav">

    <button id="btn-tv" class="active">

      <img src="/tv.png" alt="TV">

    </button>

    <button id="btn-radio">

      <img src="/radio.png" alt="Radio">

    </button>

  </div>

<script>

const playlistUrl = "/iptv.m3u";

let allChannels = [];

let activeTab = "tv";

const channelsEl = document.getElementById("channels");

const player = document.getElementById("player");

const videoPlayer = document.getElementById("video-player");

const audioPlayer = document.getElementById("audio-player");

const closePlayer = document.querySelector(".close-player");

// Sidebar

const sidebar = document.getElementById("sidebar");

const overlay = document.getElementById("overlay");

document.getElementById("menu-btn").onclick = () => { sidebar.classList.add("open"); overlay.classList.add("show"); };

overlay.onclick = () => { sidebar.classList.remove("open"); overlay.classList.remove("show"); };

// Search

const searchBtn = document.getElementById("search-btn");

const searchBox = document.getElementById("search-box");

const searchInput = document.getElementById("search-input");

const clearSearch = document.getElementById("clear-search");

const closeSearch = document.getElementById("close-search");

searchBtn.onclick = () => { searchBox.classList.toggle("open"); if(searchBox.classList.contains("open")) searchInput.focus(); };

searchInput.oninput = () => {

  clearSearch.style.display = searchInput.value ? "block" : "none";

  filterChannels(searchInput.value.trim().toLowerCase());

};

clearSearch.onclick = () => { searchInput.value=""; clearSearch.style.display="none"; filterChannels(""); };

closeSearch.onclick = () => { searchBox.classList.remove("open"); searchInput.value=""; clearSearch.style.display="none"; filterChannels(""); };

// Tabs

document.querySelectorAll("#sidebar a").forEach(a=>{

  a.onclick = e => { e.preventDefault(); showTab(a.dataset.tab); sidebar.classList.remove("open"); overlay.classList.remove("show"); };

});

document.getElementById("btn-tv").onclick = ()=>showTab("tv");

document.getElementById("btn-radio").onclick = ()=>showTab("radio");

function showTab(tab){

  activeTab = tab;

  document.querySelectorAll("#sidebar a").forEach(a=>a.classList.toggle("active",a.dataset.tab===tab));

  document.getElementById("btn-tv").classList.toggle("active",tab==="tv");

  document.getElementById("btn-radio").classList.toggle("active",tab==="radio");

  renderChannels();

}

function filterChannels(keyword){

  document.querySelectorAll(".channel").forEach(ch=>{

    const name = ch.querySelector("img").alt.toLowerCase();

    ch.style.display = name.includes(keyword) ? "" : "none";

  });

}

// Player

function openPlayer(type,src){

  player.classList.add("open");

  if(type==="tv"){

    audioPlayer.style.display="none"; audioPlayer.pause(); audioPlayer.src="";

    videoPlayer.style.display="block"; videoPlayer.src=src; videoPlayer.play();

  } else {

    videoPlayer.style.display="none"; videoPlayer.pause(); videoPlayer.src="";

    audioPlayer.style.display="block"; audioPlayer.src=src; audioPlayer.play();

  }

}

closePlayer.onclick = ()=>{

  videoPlayer.pause(); audioPlayer.pause();

  videoPlayer.src=""; audioPlayer.src="";

  player.classList.remove("open");

};

// Parse M3U

async function loadPlaylist(){

  try {

    const res = await fetch(playlistUrl);

    const text = await res.text();

    parseM3U(text);

    showTab("tv");

  } catch(e){ console.error(e); }

}

function parseM3U(txt){

  const lines = txt.split("\n");

  let currentTitle="", currentLogo="", currentGroup="";

  for(let i=0;i<lines.length;i++){

    let line=lines[i].trim();

    if(line.startsWith("#EXTINF:")){

      currentTitle=""; currentLogo=""; currentGroup="";

      const commaIndex = line.indexOf(",");

      if(commaIndex>=0) currentTitle=line.substring(commaIndex+1).trim();

      const logoMatch=line.match(/tvg-logo="([^"]+)"/i);

      if(logoMatch) currentLogo=logoMatch[1];

      const groupMatch=line.match(/group-title="([^"]+)"/i);

      if(groupMatch) currentGroup=groupMatch[1].toLowerCase();

      let url=lines[i+1] ? lines[i+1].trim() : "";

      if(url && !url.startsWith("#")){

        let type="tv";
        
        if(currentGroup.includes("truyền hình")||currentGroup.includes("tv")) type="tv";

        if(currentGroup.includes("phát thanh")||currentGroup.includes("radio")) type="radio";

        allChannels.push({title:currentTitle, logo:currentLogo, type, src:url});

      }

    }

  }

}

function renderChannels(){

  channelsEl.innerHTML="";

  allChannels.filter(ch=>ch.type===activeTab).forEach(ch=>{

    const div=document.createElement("div");

    div.className="channel"; div.dataset.type=ch.type; div.dataset.src=ch.src;

    const img=document.createElement("img");

    img.src=ch.logo||"https://via.placeholder.com/400x225.png?text="+encodeURIComponent(ch.title);

    img.alt=ch.title;

    div.appendChild(img);

    div.onclick=()=>openPlayer(ch.type,ch.src);

    channelsEl.appendChild(div);

  });

}

loadPlaylist();

</script>

</body>

</html>
