<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    
</head>
<body>
    <header>
     <div class="playlist_part">
     <h6 id="menu_list_active_button"><i class="bi bi-music-note-list"></i></h6>
     <h6 id="menu_list_unactive_button"><i class="bi bi-x-circle-fill"></i></h6>
       <h1>Playlist</h1>
        <div class="playlist">
<h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i> Playlist</h4>
<h4><span></span><i class="bi bi-music-note-beamed"></i>Last listened</h4>
<h4><span></span><i class="bi bi-music-note-beamed"></i> Recommended</h4>
        </div>
        <div class="menu_song">
            <li class="songItem">
                <span>01</span>
              <img src="images/Amit trivedi/1.jpg" alt="">
                <h5>Shaam <br> <div class="subtitle">Amit Trivedi</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="1"></i>
            </li>
            <li class="songItem">
                <span>02</span>
                <img src="images/Amit trivedi/2.jpg" alt="">
                <h5>Dear Zindagi<br> <div class="subtitle">Amit Trivedi</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="2"></i>
            </li>
            <li class="songItem">
                <span>03</span>
                <img src="images/Amit trivedi/3.jpg" alt="">
                <h5>Ghodey Pe Sawar<br> <div class="subtitle">Amit Trivedi</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="3"></i>
            </li>
            <li class="songItem">
                <span>04</span>
                <img src="images/Amit trivedi/4.jpg" alt="">
                <h5>Phero Na Nazariya<br> <div class="subtitle">Amit Trivedi</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="4"></i>
            </li>
            <li class="songItem">
                <span>05</span>
                <img src="images/Amit trivedi/5.jpg" alt="">
                <h5>Boli Tujhse<br> <div class="subtitle">Amit Trivedi</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="5"></i>
            </li>
            <li class="songItem">
                <span>06</span>
                <img src="images/Amit trivedi/6.jpg" alt="">
                <h5>Jhallah Wallah<br> <div class="subtitle">Amit Trivedi</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="6"></i>
            </li>
            <li class="songItem">
                <span>07</span>
                <img src="images/Amit trivedi/7.jpg" alt="">
                <h5>Dosti<br> <div class="subtitle">Amit Trivedi</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="7"></i>
            </li>
            <li class="songItem">
                <span>08</span>
                <img src="images/Amit trivedi/8.jpg" alt="">
                <h5>Just Go To Hell Dil<br> <div class="subtitle">Amit Trivedi</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="8"></i>
                </li>
            <li class="songItem">
                <span>09</span>
                <img src="images/Amit trivedi/9.jpg" alt="">
                <h5>Chaudhry<br> <div class="subtitle">Amit Trivedi</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="9"></i>
            </li>
            <li class="songItem">
                <span>10</span>
                <img src="images/Amit trivedi/10.jpg" alt="">
                <h5>Lagan Lagi Re<br> <div class="subtitle">Amit Trivedi</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="10"></i>
            </li>
            <li class="songItem">
                <span>11</span>
                <img src="images/Amit trivedi/11.jpg" alt="">
                <h5>Shubharambh<br> <div class="subtitle">Amit Trivedi</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="11"></i>
            </li>
            <li class="songItem">
                <span>12</span>
                <img src="images/Amit trivedi/12.jpg" alt="">
                <h5>Udta Panjab<br> <div class="subtitle">Amit Trivedi</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="12"></i>
            </li>
            <li class="songItem">
                <span>13</span>
                <img src="images/Amit trivedi/13.jpg" alt="">
                <h5>Gal Mitthi Mitthi<br> <div class="subtitle">Amit Trivedi</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="13"></i>
            </li>
            <li class="songItem">
                <span>14</span>
                <img src="images/Amit trivedi/14.jpg" alt="">
                <h5>Jadu Salona<br> <div class="subtitle">Amit Trivedi</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="14"></i>
            </li>
            <li class="songItem">
                <span>15</span>
                <img src="images/Amit trivedi/15.jpg" alt="">
                <h5>Atak Gaya<br> <div class="subtitle">Amit Trivedi</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="15"></i>
            </li>
        </div>
     </div>
     <div class="songs_part">
      <nav>
        <ul>
            <li>Discover <span></span></li>
            <li>My Library</li>
            <li>Radio</li>
        </ul>
       <div class="search">
        <i class="bi bi-search-heart-fill"></i>
        <input type="text" placeholder="search" >
        <div class="search_result">
            <!-- <a href="#" class="card">
                <img src="images/1.jpg" alt="">
                <div class="content">
                    Lakshy
                    <div class="subtitle">Arijit</div>

                </div>
            </a> -->
        </div>
       </div>
       <div class="user">
        <a href="welcome.php"><img src="images/home.png" alt=""></a>
       </div>
      </nav>  
       <div class="content">
        <h1>Amit Trivedi😇</h1>
        <p>you were the shadow to my light did you feel us Another start you fade <br>Away afraid our aim is out of sight wanna see us alive</p>
        <div class="buttons">
            <button>PLAY</button>
            <button>Follow</button>
        </div>
      </div>
    <div class="popular_song">
        <div class="h4">
            <h4>Popular Song</h4>
            <div class="btn_s">
                <i class="bi bi-arrow-left-short" id="pop_song_left"></i>
                <i class="bi bi-arrow-right-short" id="pop_song_right"></i>
            </div>
        </div>
        <div class="pop_song">
             <li class="songItem">
           <div class="img_play">
            <img src="images/Amit trivedi/16.jpg" alt="">
            <i class="bi playlistplay bi-play-circle-fill" id="16"></i>
        </div>
            <h5>Gulabo<br> <div class="subtitle">Amit Trivedi</div>
            </h5>
        </li> 
        <li class="songItem">
            <div class="img_play">
                <img src="images/Amit trivedi/17.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="17"></i>
         </div>
             <h5>Hu Ba Hu<br> <div class="subtitle">Amit Trivedi</div>
             </h5>
         </li>
         <li class="songItem">
            <div class="img_play">
                 <img src="images/Amit trivedi/18.jpg" alt=""> 
             <i class="bi playlistplay bi-play-circle-fill" id="18"></i>
         </div>
             <h5>Gudgudi<br> <div class="subtitle">Amit Trivedi</div>
             </h5>
         </li>
         <li class="songItem">
            <div class="img_play">
                <img src="images/Amit trivedi/19.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="19"></i>
         </div>
             <h5>Jaikal Mahakal<br> <div class="subtitle">Amit Trivedi</div>
             </h5>
         </li>
         <li class="songItem">
            <div class="img_play">
                <img src="images/Amit trivedi/20.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="20"></i>
         </div>
             <h5>Shauq<br> <div class="subtitle">Amit Trivedi</div>
             </h5>
         </li>
         <li class="songItem">
            <div class="img_play">
                <img src="images/Amit trivedi/21.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="21"></i>
         </div>
             <h5>Daryaa<br> <div class="subtitle">Amit Trivedi</div>
             </h5>
         </li>
         <li class="songItem">
            <div class="img_play">
                <img src="images/Amit trivedi/22.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="22"></i>
         </div>
             <h5>Halka Halka<br> <div class="subtitle">Amit Trivedi</div>
             </h5>
         </li>
         <li class="songItem">
            <div class="img_play">
                <img src="images/Amit trivedi/23.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="23"></i>
         </div>
             <h5>Jumme Raat<br> <div class="subtitle">Amit Trivedi</div>
             </h5>
         </li>
         
         <li class="songItem">
            <div class="img_play">
                <img src="images/Amit trivedi/24.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="24"></i>
         </div>
             <h5>Fursat<br> <div class="subtitle">Amit Trivedi</div>
             </h5>
         </li> 
        </div>
    </div>
    <div class="popular_artists">
        <div class="h4">
            <h4>Popular Artist</h4>
            <div class="btn_s">
                <i class="bi bi-arrow-left-short" id="pop_art_left"></i>
                <i class="bi bi-arrow-right-short" id="pop_art_right"></i>
            </div>
        </div>
        <div class="item Artist_bx">
           
              <li>
                  <a href="Palak Muchhal.php"><img src="images/873958-palakmuchhal-100719.avif" alt=""></a>
               </li>
               
                  <li>
               <a href="Darshan Raval.php"><img src="images/Darshan Raval/darshan raval.jpg" alt=""></a>
               </li> 
               
               <li>
                  <a href="Neha Kakkar.php"><img src="images/nehakakkar.jpg" alt=""></a>
               </li>
               <li>
                  <a href="Amit trivedi.php"><img src="images/amit trivedi.jpeg" alt=""></a>
               </li>
               <li>
                <a href="Shreya Ghoshal.php"><img src="images/Shreya-Ghoshal-best-female-singer-in-bollywood-2023-1.webp" alt=""></a>
                  </li>
               <li>
                 <a href="Sonu Nigam.php"><img src="images/Sonu-nigam.webp" alt=""></a>
               </li>
               <li>
                <a href="Jubin Nautiyal.php"><img src="images/jubin.jpg" alt=""></a>
                    </li>
             
               <li>
           <a href="Arman Malik.php"><img src="images/images (1).jpeg" alt=""></a>
               </li>
              
              <li>
                <a href="Arijit Singh.php"><img src="images/20_05_2021-arijit_singh_21660518.jpg" alt=""></a>
              </li>
        </div>
    </div>
     </div>   

     <div class="music_play">
        <div class="wave" id="wave">
            <div class="wave1"></div>
            <div class="wave1"></div>
            <div class="wave1"></div>
        </div>
      <img src="images/Amit trivedi/1.jpg" alt="" id="poster_music_play">
        <h5 id="title">
            shaam
            <div class="subtitile">Amit Trivedi</div>
        </h5>
        <div class="icons">
            <i class="bi shuffle bi-music-note-beamed">next</i>
            <i class="bi bi-skip-start-fill" id="previous"></i>
            <i class="bi bi-play-fill" id="masterplay"></i>
            <i class="bi bi-skip-end-fill" id="further"></i>
           <a href="" download id="download_music"><i class="bi bi-cloud-arrow-down" ></i></a> 
        </div>
        <span id="currentstart">0:00</span>
        <div class="bar">
            <input type="range" id="seek" min="0" max="100">
            <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currentend">0:30</span>
            <div class="vol">
                <i class="bi bi-volume-up" id="vol_icon"></i>
                <input type="range" min="0" max="100" id="vol">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>
            </div>
        </div>
    </header>
    <script src="Amit trivedi.js"></script>
    <script>
    let menu_list_active_button = document.getElementById('menu_list_active_button');
   let playlist_part = document.getElementsByClassName('playlist_part')[0];

   menu_list_active_button.addEventListener('click', () =>{
      playlist_part.style.transform  ="unset";
    //   menu_list_active_button.style.opacity=0;
      menu_list_unactive_button.style.opacity=1;
   })
   document.querySelector('#menu_list_unactive_button').addEventListener('click', () => {
    document.querySelector('.playlist-part').style.transform = 'translateX(-100%)';
    menu_list_active_button.style.opacity=1;
    menu_list_unactive_button.style.opacity=0;
});

   </script>
</body>
</html>