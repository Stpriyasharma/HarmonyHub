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
               <img src="images/1.jpg" alt="">
                <h5>Lakshya <br> <div class="subtitle"> Shankar Mahadevan</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="1"></i>
            </li>
            <li class="songItem">
                <span>02</span>
           <img src="images/2.jpg" alt="">
                <h5>Desh Mere <br> <div class="subtitle"> Arijit Singh,Arko</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="2"></i>
            </li>
            <li class="songItem">
                <span>03</span>
             <img src="images/3.jpg" alt="">
                <h5>Mera Safar <br> <div class="subtitle">Iqlipse Nova</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="3"></i>
            </li>
            <li class="songItem">
                <span>04</span>
          <img src="images/4.jpg" alt="">
                <h5>Befikra <br> <div class="subtitle">Meet bros,Aditi Singh Sharma</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="4"></i>
            </li>
            <li class="songItem">
                <span>05</span>
           <img src="images/5.jpg" alt="">
                <h5>Ek Zindagi <br> <div class="subtitle">Tanishkaa Sanghavi,Sachin Jigar</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="5"></i>
            </li>
            <li class="songItem">
                <span>06</span>
          <img src="images/6.jpg" alt="">
                <h5>Jeete Hain Chal <br> <div class="subtitle">Kavita Seth</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="6"></i>
            </li>
            <li class="songItem">
                <span>07</span>
              <img src="images/7.jpg" alt="">
                <h5>Besabriyaan<br> <div class="subtitle">Armaan Malik</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="7"></i>
            </li>
            <li class="songItem">
                <span>08</span>
          <img src="images/8.jpg" alt="">
                <h5>White Brown Black<br> <div class="subtitle">Avvy Sra,Karan Ujla</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="8"></i>
                </li>
            <li class="songItem">
                <span>09</span>
               <img src="images/9.jpg" alt="">
                <h5>Gone Girl<br> <div class="subtitle">Badshah</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="9"></i>
            </li>
            <li class="songItem">
                <span>10</span>
         <img src="images/10.jpg" alt="">
                <h5>Heeriye<br> <div class="subtitle"> Arijit Singh</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="10"></i>
            </li>
            <li class="songItem">
                <span>11</span>
          <img src="images/11.jpg" alt="">
                <h5>Mahadeva<br> <div class="subtitle">Hanshraj Raghuvanshi</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="11"></i>
            </li>
            <li class="songItem">
                <span>12</span>
            <img src="images/12.jpg" alt="">
                <h5>Pasoori<br> <div class="subtitle">Shae Gill,Ali Sethi</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="12"></i>
            </li>
            <li class="songItem">
                <span>13</span>
            <img src="images/13.jpg" alt="">
                <h5>Bande Hai Hum Uske<br> <div class="subtitle">Julius Packiam-Joshilay</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="13"></i>
            </li>
            <li class="songItem">
                <span>14</span>
               <img src="images/14.jpg" alt="">
                <h5>Zinda Banda<br> <div class="subtitle">Arijit Singh</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="14"></i>
            </li>
            <li class="songItem">
                <span>15</span>
               <img src="images/15.jpg" alt="">
                <h5>Chaleya<br> <div class="subtitle">Arijit Singh ,Anirudh Ravichander,Shilpa Rao , Kumaar</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="15"></i>
            </li>
            <li class="songItem">
                <span>16</span>
               <img src="images/16.jpg" alt="">
                <h5>Wafa ne bewafai<br> <div class="subtitle">Arijit Singh, Neeti Mohon</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="16"></i>
            </li>
            <li class="songItem">
                <span>17</span>
               <img src="images/17.jpg" alt="">
                <h5>Dil jhoom<br> <div class="subtitle">Mithoon, Arijit Singh ,Sayeed Quadri</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="17"></i>
            </li>
            <li class="songItem">
                <span>18</span>
               <img src="images/18.jpg" alt="">
                <h5>Woh din<br> <div class="subtitle">Pritam , Arijit Singh</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="18"></i>
            </li> <li class="songItem">
                <span>19</span>
               <img src="images/19.jpg" alt="">
                <h5>Humari adhoori kahani<br> <div class="subtitle">Arijit Singh, Jeet Gannguli</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="19"></i>
            </li>
            <li class="songItem">
                <span>20</span>
               <img src="images/20.jpg" alt="">
                <h5>Galti se mistake<br> <div class="subtitle">Pritam ,Arijit Singh,Amit Mishra</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="20"></i>
            </li>
            <li class="songItem">
                <span>21</span>
               <img src="images/21.jpg" alt="">
                <h5>Jhoome jo pathan<br> <div class="subtitle">Vishal-Shekhar ,Arijit Singh, Sukriti Kakkar</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="21"></i>
            </li>
            <li class="songItem">
                <span>22</span>
               <img src="images/22.jpg" alt="">
                <h5>Tera yaar hoon main<br> <div class="subtitle">Rochak Kohli ,Arijit Singh</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="22"></i>
            </li>
            <li class="songItem">
                <span>23</span>
               <img src="images/23.jpg" alt="">
                <h5>Tujhe kitna chahe aur hum<br> <div class="subtitle">Mithoon , Arijit Singh</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="23"></i>
            </li>
            <li class="songItem">
                <span>24</span>
               <img src="images/24.jpg" alt="">
                <h5>Humdard<br> <div class="subtitle">Arijit Singh</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="24"></i>
            </li>

            <li class="songItem">
                <span>25</span>
               <img src="images/25.jpg" alt="">
                <h5>Jaan nishar<br> <div class="subtitle">Arijit Singh</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="25"></i>
            </li>
            <li class="songItem">
                <span>26</span>
               <img src="images/26.jpg" alt="">
                <h5>Kesariya<br> <div class="subtitle">Pritam ,Arijit Singh , Amitabh Bhattacharya</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="26"></i>
            </li>
            <li class="songItem">
                <span>27</span>
               <img src="images/27.jpg" alt="">
                <h5>Muskurane<br> <div class="subtitle">Jeet Gannguli ,Arijit Singh</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="27"></i>
            </li>
            <li class="songItem">
                <span>28</span>
               <img src="images/28.jpg" alt="">
                <h5>Khariyat <br> <div class="subtitle">Pritam ,Arijit Singh</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="28"></i>
            </li>
            <li class="songItem">
                <span>29</span>
               <img src="images/29.jpg" alt="">
                <h5>O maahi<br> <div class="subtitle">Pritam , Arijit Singh , Irshad Kamil</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="29"></i>
            </li>
            <li class="songItem">
                <span>30</span>
               <img src="images/30.jpg" alt="">
                <h5>Uska hi bna<br> <div class="subtitle">Arijit Singh</div>
                </h5>
                <i class="bi playlistplay bi-play-circle-fill" id="30"></i>
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
        <h1>Feel The Music !!!!!!</h1>
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
          <img src="images/31.jpg" alt="">
            <i class="bi playlistplay bi-play-circle-fill" id="31"></i>
        </div>
            <h5>Satranga<br> <div class="subtitle">Shreyas Puranik , Arijit Singh</div>
            </h5>
        </li> 
        <li class="songItem">
            <div class="img_play">
          <img src="images/32.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="32"></i>
         </div>
             <h5>Baaton Ko Teri <br> <div class="subtitle">Arijit Singh</div>
             </h5>
         </li>
         <li class="songItem">
            <div class="img_play">
          <img src="images/33.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="33"></i>
         </div>
             <h5>Hua Hai Aaj Phli Baar <br> <div class="subtitle"> Amaal Malik , Armaan Malik , Palak Mucchal</div>
             </h5>
         </li>
         <li class="songItem">
            <div class="img_play">
         <img src="images/34.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="34"></i>
         </div>
             <h5>Bol Do Na Zara<br> <div class="subtitle">Amaal Malik , Armaan Malik ,Rashmi Virag</div>
             </h5>
         </li>
         <li class="songItem">
            <div class="img_play">
         <img src="images/35.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="35"></i>
         </div>
             <h5>Dil Me Ho Tum<br> <div class="subtitle">Armaan Malik , Rochak Kohli , Bappi Lahiri</div>
             </h5>
         </li>
         <li class="songItem">
            <div class="img_play">
          <img src="images/36.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="36"></i>
         </div>
             <h5>Sab Tera <br> <div class="subtitle">Armaan Malik , Shraddha Kapoor</div>
             </h5>
         </li>
         <li class="songItem">
            <div class="img_play">
         <img src="images/37.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="37"></i>
         </div>
             <h5>Pehla Pyaar<br> <div class="subtitle">Kavita Seth</div>
             </h5>
         </li>
         <li class="songItem">
            <div class="img_play">
        <img src="images/38.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="38"></i>
         </div>
             <h5>Main Rahoon Ya Na Rahoon <br> <div class="subtitle">Amaal Malik , Armaan Malik ,Rashmi Virag</div>
             </h5>
         </li>
         
         <li class="songItem">
            <div class="img_play">
      <img src="images/39.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="39"></i>
         </div>
             <h5>Jab Tak<br> <div class="subtitle">Armaan Malik</div>
             </h5>
         </li>  <li class="songItem">
            <div class="img_play">
      <img src="images/40.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="40"></i>
         </div>
             <h5>De Taali<br> <div class="subtitle">Pritam , YO YO Honey Singh , Armaan Malik , Amitabh Bhattacharya</div>
             </h5>
         </li>
         <li class="songItem">
            <div class="img_play">
      <img src="images/41.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="41"></i>
         </div>
             <h5>Wajah Tum HO<br> <div class="subtitle">Armaan Malik</div>
             </h5>
         </li>
         <li class="songItem">
            <div class="img_play">
      <img src="images/42.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="42"></i>
         </div>
             <h5>Jeene Laga Hoon<br> <div class="subtitle">Atif Aslam , Sachin Jigar , Shreya Ghosal</div>
             </h5>
         </li>
         <li class="songItem">
            <div class="img_play">
      <img src="images/43.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="43"></i>
         </div>
             <h5>Dil Diyaan Gallan<br> <div class="subtitle">Vishal-Shekhar ,Atif Aslam , Irshad Kmail</div>
             </h5>
         </li>
         <li class="songItem">
            <div class="img_play">
      <img src="images/44.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="44"></i>
         </div>
             <h5>Piya O Re Piya<br> <div class="subtitle">Atif Aslam , Sachin Jigar , Shreya Ghosal</div>
             </h5>
         </li>
         <li class="songItem">
            <div class="img_play">
      <img src="images/45.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="45"></i>
         </div>
             <h5>O Saathi<br> <div class="subtitle">Atif Aslam , Arko</div>
             </h5>
         </li>
         <li class="songItem">
            <div class="img_play">
      <img src="images/46.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="46"></i>
         </div>
             <h5>Dekhte Dekhte <br> <div class="subtitle">Atif Aslam , Nusrat Fateh Ali Khan , Rochak Kohli</div>
             </h5>
         </li>
         <li class="songItem">
            <div class="img_play">
      <img src="images/47.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="47"></i>
         </div>
             <h5>Tajdar-E-Haram<br> <div class="subtitle">Atif Aslam</div>
             </h5>
         </li>
         <li class="songItem">
            <div class="img_play">
      <img src="images/48.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="48"></i>
         </div>
             <h5>Chogada <br> <div class="subtitle">Darshan Raval ,Asees kaur</div>
             </h5>
         </li>
         <li class="songItem">
            <div class="img_play">
      <img src="images/49.jpg" alt="">
             <i class="bi playlistplay bi-play-circle-fill" id="49"></i>
         </div>
             <h5>Woh Lamhe Woh Raatein<br> <div class="subtitle">Atif Aslam</div>
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
      <img src="images/1.jpg" alt="" id="poster_music_play">
        <h5 id="title">
            Lakshy
            <div class="subtitile">Shankar Mahadevan</div>
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
    <script src="script.js"></script>
    <script>
    let menu_list_active_button = document.getElementById('menu_list_active_button');
   let playlist_part = document.getElementsByClassName('playlist_part')[0];

   menu_list_active_button.addEventListener('click', () =>{
      playlist_part.style.transform  ="unset";
     
      menu_list_unactive_button.style.opacity=1;
   })
   document.querySelector('#menu_list_unactive_button').addEventListener('click', () => {
     playlist_part.style.transform = 'translateX(-100%)';
    menu_list_active_button.style.opacity=1;
    menu_list_unactive_button.style.opacity=0;
});

   </script>
</body>
</html>