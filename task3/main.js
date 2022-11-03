const dark = document.getElementById('darkSwitch');
   const x = document.getElementById('body');
   const card = document.getElementById('card');
   const boxcard = document.getElementById('boxcard');
   const fcaption = document.getElementById('fcaption');
   const table = document.getElementById('table');
   const formulir = document.getElementById('formulir');
   const box2 = document.getElementById('box-2');
dark.addEventListener("click", function mode(){
   if(x.style.backgroundColor == 'rgb(32, 32, 34)') {
      dark.style.backgroundColor = 'black';
      x.style.backgroundColor = 'white';
      card.style.color = '#202022';
      boxcard.style.backgroundColor = '#F8F7F5';
      card.style.backgroundColor = '#F8F7F5';
      table.style.backgroundColor = '#F8F7F5';
      table.style.color = '#202022';
      formulir.style.backgroundColor = '#f8f3f3';
      formulir.style.color = '#202022';
      fcaption.style.color = 'black';
      document.getElementById('btn-dark').innerHTML = "<p>Tema gelap</p>";
      
      
   }else{
      x.style.backgroundColor = '#202022';   
      card.style.color = 'white';
      card.style.backgroundColor = '#202022';
      boxcard.style.backgroundColor = '#202022';
      fcaption.style.color = 'white';
      table.style.backgroundColor = '#202022';
      table.style.color = 'white';
      formulir.style.backgroundColor = '#2a2a2c';
      formulir.style.boxShadow = 'none';
      formulir.style.border = '1px solid white';
      formulir.style.color = '#f8f7f5';
      dark.style.backgroundColor = 'green';
   }
});

const perkecil = document.getElementById('perkecil');
perkecil.addEventListener("click", function showInfo(){
   const superbox = document.getElementById('superbox');
   if(superbox.style.display == 'none') {
      superbox.style.display = '';
      document.getElementById('perkecil').innerHTML = "<h3># Tentang Saya</h3>";
   }else{
      superbox.style.display = 'none';
      document.getElementById('perkecil').innerHTML = "<h3># Tentang Saya ...</h3>";
   }
});

const pengalaman = document.getElementById('pengalaman');
pengalaman.addEventListener("click", function showInfo(){
   const kecil2 = document.getElementById('superbox-pengalaman');
   if(kecil2.style.display == 'none') {
      kecil2.style.display = '';
      document.getElementById('pengalaman').innerHTML = "<h3>#pengalaman Kerja</h3>";
   }else{
      kecil2.style.display = 'none';
      document.getElementById('pengalaman').innerHTML = "<h3>#Pengalaman Kerja ...</h3>";
   }
});

const hubungi = document.getElementById('hubungi');
hubungi.addEventListener("click", function showInfo(){
   const kecil3 = document.getElementById('superbox-hubungi');
   if(kecil3.style.display == 'none') {
      kecil3.style.display = '';
      document.getElementById('hubungi').innerHTML = "<h3>#Hubungi Saya</h3>";
   }else{
      kecil3.style.display = 'none';
      document.getElementById('hubungi').innerHTML = "<h3>#Hubungi Saya ...</h3>";
   }
});
