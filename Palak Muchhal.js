let pop_song_left = document.getElementById('pop_song_left');
let pop_song_right =document.getElementById('pop_song_right');
let pop_song = document.getElementsByClassName('pop_song')[0];



pop_song_right.addEventListener('click', () => {
    pop_song.scrollLeft += 330;
});

pop_song_left.addEventListener('click',() => {
    pop_song.scrollLeft -= 330;
});

let pop_art_left = document.getElementById('pop_art_left');
let pop_art_right= document.getElementById('pop_art_right');
let Artists_bx = document.getElementsByClassName('Artist_bx')[0];


pop_art_right.addEventListener('click',() => {
    Artists_bx.scrollLeft += 330;
});
pop_art_left.addEventListener('click',() => {
    Artists_bx.scrollLeft -= 330;
});



const music = new Audio('audio/Palak Muchhal/1.mp3');
//music.play();




const songs =[
    {
        id: '1',
        songsName: `Naiyo Lagda <br> <div class="subtitle">Palak Muchhal</div>`,
         poster:"images/palak muchhal/1.jpg" 
    },
    {
       id: '2',
       songsName:`Sanam Re<br> <div class="subtitle">Palak Muchhal</div>`,
       poster:"images/palak muchhal/2.jpg" 
       
    },
    {
        id: '3',
        songsName:`Kaabil Hoon<br> <div class="subtitle">Palak Muchhal</div>`,
        poster:"images/palak muchhal/3.jpg" 
    },
     {
        id: '4',
        songsName:`Chahun Main Yaaa Naa<br> <div class="subtitle">Palak Muchhal</div>`,
        poster:"images/palak muchhal/4.jpg" 
     },
     {
        id: '5',
        songsName:`Kaun Tujhe<br> <div class="subtitle">Palak Muchhal</div>`,
        poster:"images/palak muchhal/5.jpg" 
     },
     {
        id: '6',
        songsName:`Pehla Nasha<br> <div class="subtitle">Palak Muchhal</div>`,
        poster:"images/palak muchhal/6.jpg" 
     },
     {
        id: '7',
        songsName:`Sum Sumne<br> <div class="subtitle">Palak Muchhal</div>`,
        poster:"images/palak muchhal/7.jpg" 
     },
     {
        id: '8',
        songsName:`Dekha Hazaro Dafa<br> <div class="subtitle">Palak Muchhal</div>`,
        poster:"images/palak muchhal/8.jpg" 
     },
     {
        id: '9',
        songsName:`Panchi Bole<br> <div class="subtitle">Palak Muchhal</div>`,
        poster:"images/palak muchhal/9.jpg" 
     },
     {
        id: '10',
        songsName:`Kabhi Yaadon Mein<br> <div class="subtitle">Palak Muchhal</div>`,
        poster: "images/palak muchhal/10.jpg" 
     },
     {
        id: '11',
        songsName:`Laapta<br> <div class="subtitle">Palak Muchhal</div>`,
        poster:"images/palak muchhal/11.jpg" 
     },
     {
        id: '12',
        songsName:`Sanam Teri Kasam<br> <div class="subtitle">Palak Muchhal</div>`,
        poster:"images/palak muchhal/12.jpg" 
     },         
     {
        id: '13',
        songsName:`Dhoka Dhadi<br> <div class="subtitle">Palak Muchhal</div>`,
        poster:"images/palak muchhal/13.jpg" 
     },
     {
        id: '14',
        songsName:`Baatein Ye Kabhi Na<br> <div class="subtitle">Palak Muchhal</div>`,
        poster:"images/palak muchhal/14.jpg" 
     },
     {
        id: '15',
        songsName:`Muskuraa Lena Tum<br> <div class="subtitle">Palak Muchhal</div>`,
        poster:"images/palak muchhal/15.jpg" 
     },
     {
      id: '16',
      songsName:`Befikriyan<br> <div class="subtitle">Palak Muchhal</div>`,
      poster:"images/palak muchhal/16.jpg" 
   },
   {
      id: '17',
      songsName:`Teri Khushboo<br> <div class="subtitle">Palak Muchhal</div>`,
      poster:"images/palak muchhal/17.jpg" 
   },
     {
        id: '18',
        songsName:`Tu Hi Hai Aashiqi<br> <div class="subtitle">Palak Muchhal</div>`,
        poster:"images/palak muchhal/18.jpg" 
     },
     {
        id: '19',
        songsName:`Tujhe Yaad Badi Aaungi<br> <div class="subtitle">Palak Muchhal</div>`,
        poster:"images/palak muchhal/19.jpg" 
     },
     
     {
        id: '20',
        songsName:`Nai Jaana<br> <div class="subtitle">Palak Muchhal</div>`,
        poster:"images/palak muchhal/20.jpg" 
     },
     
     {
        id: '21',
        songsName:`Aadat Ban Gye Ho<br> <div class="subtitle">Palak Muchhal</div>`,
        poster:"images/palak muchhal/21.jpg" 
     },
     
     {
        id: '22',
        songsName:`Zaroori Hai<br> <div class="subtitle">Palak Muchhal</div>`,
        poster:"images/palak muchhal/22.jpg" 
     },
     
     {
        id: '23',
        songsName:`Dhoop Main Zindagi<br> <div class="subtitle">Palak Muchhal</div>`,
        poster:"images/palak muchhal/23.jpg" 
     },
     
     {
        id: '24',
        songsName:`Ore Piya<br> <div class="subtitle">Palak Muchhal</div>`,
        poster:"images/palak muchhal/24.jpg" 
     }
     
     
    ]

// Array.from(document.getElementsByClassName('songItem')).forEach((e,i) =>{
//     e.getElementsByTagName('img')[0].src = songs[i].poster;
//     e.getElementsByTagName('h5')[0].innerHTML = songs[i].songsName;

// });

// search data start
let search_result = document.getElementsByClassName('search_result')[0];

  songs.forEach(element => {
   const {id,songsName,poster} = element;
   let card = document.createElement('a');
   card.classList.add('card')
    card.href = "#" + id;
   card.innerHTML =`
   <img src="${poster}" alt="">
                <div class="content">
                   ${songsName}
                </div>
    `;
    search_result.appendChild(card);

  });

 let input = document.getElementsByTagName('input')[0];

 input.addEventListener('keyup',() =>{
  let input_value = input.value.toUpperCase();
  let item =search_result.getElementsByTagName('a');
 for(let i=0; i < item.length; i++){
   let as = item[i].getElementsByClassName('content')[0];
 let text_value = as.textContent || as.innerHTML;

if(text_value.toUpperCase().indexOf(input_value)>-1){
      item[i].style.display ='flex';
    }else{
   item[i].style.display ="none";
    }

   if(input.value ==0){
      search_result.style.display = "none";

   }else{
      search_result.style.display ="";
   }
  }
 });

let masterplay = document.getElementById('masterplay');
let wave = document.getElementById('wave');
masterplay.addEventListener('click', () => {
    if(music.paused || music.currentTime <= 0){
        music.play();
        wave.classList.add('active1');
        masterplay.classList.remove('bi-play-fill');
        masterplay.classList.add('bi-pause-fill');
    }else{
        music.pause();
        wave.classList.remove('active1');
        masterplay.classList.add('bi-play-fill');
        masterplay.classList.remove('bi-pause-fill');
    }
});

const  makeAllplays =() => {
    Array.from(document.getElementsByClassName('playlistplay')).forEach((el) => {
        el.classList.add('bi-play-circle-fill');
        el.classList.remove('bi-pause-circle-fill');
    })
};
const  makesAllBackground =() => {
    Array.from(document.getElementsByClassName('songItem')).forEach((el) => {
        el.style.background = `rgb(105,105,105,.0)`;
    })
};


let index =0;
let poster_music_play = document.getElementById('poster_music_play');
let download_music = document.getElementById('download_music')
let title = document.getElementById('title');
Array.from(document.getElementsByClassName('playlistplay')).forEach((e) => {
    e.addEventListener('click',(el) =>{
        index = el.target.id;
        music.src =`audio/Palak Muchhal/${index}.mp3`;
        poster_music_play.src =`images/palak muchhal/${index}.jpg`;
        music.play();
        masterplay.classList.remove('bi-play-fill');
        masterplay.classList.add('bi-pause-fill');
      download_music.href = `audio/Palak Muchhal/${index}.mp3`;
        let songTitels = songs.filter((els) =>{
            return els.id == index;
        });

        songTitels.forEach(elss =>{
            let{songsName} = elss;
           title.innerHTML = songsName;
         download_music.setAttribute('download',songsName);
        });

        makesAllBackground();
        Array.from(document.getElementsByClassName('songItem'))[index-1].style.background="rgb(105,105,105.1)";
        makeAllplays();
        el.target.classList.remove('bi-play-circle-fill');
        el.target.classList.add('bi-pause-circle-fill');
        wave.classList.add('active1');
    });

   });

   let currentstart = document.getElementById('currentstart');
   let currentend = document.getElementById('currentend');
   let seek = document.getElementById('seek');
   let bar2 = document.getElementById('bar2');
   let dot = document.getElementsByClassName('dot')[0];


   music.addEventListener('timeupdate', () => {
      let music_curr = music.currentTime;
      let music_dur = music.duration;

      let min1 = Math.floor(music_dur /60);
      let sec1 = Math.floor(music_dur % 60);

      if(sec1 < 10){
         sec1 = `0${sec1}`
      }
      currentend.innerText = `${min1}:${sec1}`;

      let min2 = Math.floor(music_curr /60);
      let sec2 = Math.floor(music_curr % 60);
     if(sec2 <10){
          sec2 = `0${sec2}`;
     }
     currentstart.innerText =`${min2}:${sec2}`;
     let progressBar = parseInt((music_curr / music_dur)*100);
     seek.value = progressBar;
     let seekbar = seek.value;
     bar2.style.width = `${seekbar}%`;
     dot.style.left = `${seekbar}%`
   });
    
   seek.addEventListener('change',() =>{
      music.currentTime = seek.value*music.duration / 100;
   });

   let vol_icon = document.getElementById('vol_icon');
   let vol = document.getElementById('vol');
   let vol_bar = document.getElementsByClassName('vol_bar')[0];
   let vol_dot = document.getElementById('vol_dot');

 vol.addEventListener('change',() =>{
   if(vol.value == 0){
      vol_icon.classList.remove('bi-volume-up-fill');
      vol_icon.classList.remove('bi-volume-down-fill');
      vol_icon.classList.add('bi-volume-off-fill');
   }
   if(vol.value >0){
      vol_icon.classList.remove('bi-volume-up-fill');
      vol_icon.classList.add('bi-volume-down-fill');
      vol_icon.classList.remove('bi-volume-off-fill');
   }
   if(vol.value >50){
      vol_icon.classList.add('bi-volume-up-fill');
      vol_icon.classList.remove('bi-volume-down-fill');
      vol_icon.classList.remove('bi-volume-off-fill');
   }

   let vol_a= vol.value;
   vol_bar.style.width = `${vol_a}%`;
   vol_dot.style.left =`${vol_a}%`;
   music.volume = vol_a /100;
 });

 
   let previous = document.getElementById('previous');
   let further = document.getElementById('further');
   
   
   previous.addEventListener('click',() =>{
      index--;
      if(index < 1){
         index = 24;
         // index = Array.from(document.getElementsByClassName('songItem')).length -1;
      }
      music.src =`audio/Palak Muchhal/${index}.mp3`;
      poster_music_play.src =`images/palak muchhal/${index}.jpg`;
      music.play();
      masterplay.classList.remove('bi-play-fill');
      masterplay.classList.add('bi-pause-fill');

      let songTitels = songs.filter((els) =>{
          return els.id == index;
      });

      songTitels.forEach(elss =>{
          let{songsName} = elss;
         title.innerHTML = songsName;

      });
      makesAllBackground();
      Array.from(document.getElementsByClassName('songItem'))[index-1].style.background="rgb(105,105,105.1)";
      makeAllplays();
      el.target.classList.remove('bi-play-circle-fill');
      el.target.classList.add('bi-pause-circle-fill');
      wave.classList.add('active1');
  })
//   Array.from(document.getElementsByClassName('songItem')).length -1
further.addEventListener('click',() =>{
   index++;
   if(index >24 ){
      index=1;
   }
   
   music.src =`audio/Palak Muchhal/${index}.mp3`;
      poster_music_play.src =`images/palak muchhal/${index}.jpg`;
      music.play();
      masterplay.classList.remove('bi-play-fill');
      masterplay.classList.add('bi-pause-fill');

      let songTitels = songs.filter((els) =>{
          return els.id == index;
      });

      songTitels.forEach(elss =>{
          let{songsName} = elss;
         title.innerHTML = songsName;

      });
      makesAllBackground();
      Array.from(document.getElementsByClassName('songItem'))[index-1].style.background="rgb(105,105,105.1)";
      makeAllplays();
      el.target.classList.remove('bi-play-circle-fill');
      el.target.classList.add('bi-pause-circle-fill');
      wave.classList.add('active1');
});
  
let shuffle = document.getElementsByClassName('shuffle')[0];

shuffle.addEventListener('click',()=> {
let a = shuffle.innerHTML;
switch (a) {
   case "next":
      shuffle.classList.add('bi-arrow-repeat');
      shuffle.classList.remove('bi-music-note-beamed');
      shuffle.classList.remove('bi-shuffle');
      shuffle.innerHTML = 'repeat';
      break;

   case "repeat":
      shuffle.classList.remove('bi-arrow-repeat');
      shuffle.classList.remove('bi-music-note-beamed');
      shuffle.classList.add('bi-shuffle');
      shuffle.innerHTML = 'random';
      break;

      case "random":
         shuffle.classList.remove('bi-arrow-repeat');
         shuffle.classList.add('bi-music-note-beamed');
         shuffle.classList.remove('bi-shuffle');
         shuffle.innerHTML = 'next';
         break;
}
});


const next_music =() => {
   if (index == songs.length) {
      index =1;
     } else {
      index++;
     }
      music.src =`audio/Palak Muchhal/${index}.mp3`;
      poster_music_play.src =`images/palak muchhal/${index}.jpg`;;
      music.play();
      masterplay.classList.remove('bi-play-fill');
      masterplay.classList.add('bi-pause-fill');
    download_music.href = `audio/Palak Muchhal/${index}.mp3`;
      let songTitels = songs.filter((els) =>{
          return els.id == index;
      });
   
      songTitels.forEach(elss =>{
          let{songsName} = elss;
         title.innerHTML = songsName;
       download_music.setAttribute('download',songsName);
      });
   
      makesAllBackground();
      Array.from(document.getElementsByClassName('songItem'))[index-1].style.background="rgb(105,105,105.1)";
      makeAllplays();
      el.target.classList.remove('bi-play-circle-fill');
      el.target.classList.add('bi-pause-circle-fill');
      wave.classList.add('active1');
}

const repeat_music =() => {
   index;
   music.src =`audio/Palak Muchhal/${index}.mp3`;
      poster_music_play.src =`images/palak muchhal/${index}.jpg`;
      music.play();
      masterplay.classList.remove('bi-play-fill');
      masterplay.classList.add('bi-pause-fill');
      download_music.href =`audio/Palak Muchhal/${index}.mp3`;
     
      let songTitels = songs.filter((els) =>{
          return els.id == index;
      });
   
      songTitels.forEach(elss =>{
          let{songsName} = elss;
         title.innerHTML = songsName;
       download_music.setAttribute('download',songsName);
      });
   
      makesAllBackground();
      Array.from(document.getElementsByClassName('songItem'))[index-1].style.background="rgb(105,105,105.1)";
      makeAllplays();
      el.target.classList.remove('bi-play-circle-fill');
      el.target.classList.add('bi-pause-circle-fill');
      wave.classList.add('active1');
}

const random_music =() => {
   if (index == songs.length) {
      index =1;
     } else {
      index =Math.floor((Math.random()*songs.length)+1);
     }
      music.src =`audio/Palak Muchhal/${index}.mp3`;
      poster_music_play.src =`images/palak muchhal/${index}.jpg`;
      music.play();
      masterplay.classList.remove('bi-play-fill');
      masterplay.classList.add('bi-pause-fill');
    download_music.href = `audio/Palak Muchhal/${index}.mp3`;
      let songTitels = songs.filter((els) =>{
          return els.id == index;
      });
   
      songTitels.forEach(elss =>{
          let{songsName} = elss;
         title.innerHTML = songsName;
       download_music.setAttribute('download',songsName);
      });
   
      makesAllBackground();
      Array.from(document.getElementsByClassName('songItem'))[index-1].style.background="rgb(105,105,105.1)";
      makeAllplays();
      el.target.classList.remove('bi-play-circle-fill');
      el.target.classList.add('bi-pause-circle-fill');
      wave.classList.add('active1');
}
music.addEventListener('ended',()=>{
   let b = shuffle.innerHTML;
    switch (b) {
      case 'repeat':
         repeat_music();
         break;
      case 'next':
         next_music();
         break;
      case 'random':
         random_music();
         break;
    }
   })
   


