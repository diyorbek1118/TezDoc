<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
  /* ==============================
     TEZDOC CAROUSEL STYLE
     (boshqa sahifalarga ta’sir qilmaydi)
  ============================== */

  .doc-carousel-wrapper {
    position: relative;
    width: 1000px;
    height: 450px;
    margin: 60px auto;
    overflow: hidden;
    z-index: 50;
  }

  .doc-carousel-container {
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    perspective: 1000px;
  }

  .doc-carousel-item {
    position: absolute;
    transition: all 0.6s ease;
    border-radius: 15px;
    overflow: hidden;
    cursor: pointer;
  }

  .doc-carousel-item img {
    width: 260px;
    height: 400px;
    object-fit: cover;
    border-radius: 15px;
    display: block;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
  }

  .doc-caption {
    position: absolute;
    bottom: 0;
    width: 100%;
    padding: 10px;
    text-align: center;
    background: rgb(89, 89, 224);
    color: #fff;
    font-weight: 500;
    font-size: 1rem;
  }

  .doc-prev-btn,
  .doc-next-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 2rem;
    color: #333;
    background: rgba(255, 255, 255, 0.7);
    border: none;
    cursor: pointer;
    padding: 10px 15px;
    border-radius: 50%;
    z-index: 100;
    transition: 0.3s;
  }

  .doc-prev-btn:hover,
  .doc-next-btn:hover {
    background: white;
    transform: translateY(-50%) scale(1.1);
  }

  .doc-prev-btn { left: 10px; }
  .doc-next-btn { right: 10px; }

  @media (max-width: 1024px) {
    .doc-carousel-wrapper {
      width: 90%;
      height: 420px;
    }
    .doc-carousel-item img {
      width: 220px;
      height: 360px;
    }
  }

  @media (max-width: 768px) {
    .doc-carousel-wrapper {
      width: 100%;
      height: 350px;
    }
    .doc-carousel-item img {
      width: 180px;
      height: 300px;
    }
  }
.btncontainer {
    display: flex;
    justify-content: center; /* markazlashtirish */
    gap: 15px; /* tugmalar orasida bo'shliq */
    margin: 30px 0; 
}

/* Umumiy button dizayni */
.btncontainer button {
    appearance: none;
    background-color: #1899D6;
    border: none;
    border-radius: 16px;
    box-sizing: border-box;
    color: #FFFFFF;
    cursor: pointer;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .8px;
    line-height: 20px;
    padding: 10px 20px;
    text-align: center;
    text-transform: uppercase;
    transition: all 0.2s ease;
    outline: none;
}

/* Hover effekti */
.btncontainer button:hover {
    filter: brightness(1.1);
}

/* Active button */
.btncontainer button.active {
    background-color: #0F75C1;
    box-shadow: 0 4px 0 #0A4F7A;
    transform: translateY(2px);
}


.btn-container {
    display: flex;
    justify-content: center;
    margin: 50px 0;
}

/* Tugma dizayni */
#showAllBtn {
    background: linear-gradient(135deg, #1E90FF, #1877D6);
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    padding: 15px 40px;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    transition: all 0.3s ease;
    text-transform: uppercase;
}

/* Hover effekti */
#showAllBtn:hover {
    transform: translateY(-4px) scale(1.05);
    box-shadow: 0 12px 25px rgba(0,0,0,0.35);
    background: linear-gradient(135deg, #1877D6, #0F62A4);
}

/* Active click effekti */
#showAllBtn:active {
    transform: translateY(2px) scale(0.98);
    box-shadow: 0 6px 15px rgba(0,0,0,0.25);
}

/* Ripple effekti */
#showAllBtn::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 30px;
    top: 0;
    left: 0;
    pointer-events: none;
    background: rgba(255,255,255,0.2);
    opacity: 0;
    transform: scale(0.8);
    transition: opacity 0.4s, transform 0.4s;
}

#showAllBtn:active::after {
    opacity: 1;
    transform: scale(1);
    transition: 0s;
}
</style>
<body>
    <!-- ========== TEZDOC CAROUSEL (ISOLATED) ========== -->

    <div class="btncontainer">
      <button class="active">Hammasi</button>
      <button>Arizalar</button>
      <button>Shartnomalar</button>
      <button>Shaxsiy</button>
    </div>
<div class="doc-carousel-wrapper">
  <div class="doc-carousel-container" id="docCarousel">
    <a href="#" class="doc-carousel-item"><img src="{{ asset('images/ariza.png') }}" alt=""><div class="doc-caption">Ariza</div></a>
    <a href="#" class="doc-carousel-item"><img src="{{ asset('images/ariza.png') }}" alt=""><div class="doc-caption">Dwger</div></a>
    <a href="#" class="doc-carousel-item"><img src="{{ asset('images/ariza.png') }}" alt=""><div class="doc-caption">Freger</div></a>
    <a href="#" class="doc-carousel-item"><img src="{{ asset('images/ariza.png') }}" alt=""><div class="doc-caption">Ffgr33</div></a>
    <a href="#" class="doc-carousel-item"><img src="{{ asset('images/ariza.png') }}" alt=""><div class="doc-caption">Vvvvvv</div></a>
    <a href="#" class="doc-carousel-item"><img src="{{ asset('images/ariza.png') }}" alt=""><div class="doc-caption">Ccccccc</div></a>
  </div>

  <button class="doc-prev-btn" id="docPrevBtn">‹</button>
  <button class="doc-next-btn" id="docNextBtn">›</button>
</div>

<div class="btn-container">
    <button id="showAllBtn">Hammasini ko'rish</button>
</div>

<script>
  // ==============================
  // TEZDOC CAROUSEL SCRIPT (ISOLATED)
  // ==============================
  (function() {
    const items = document.querySelectorAll('.doc-carousel-item');
    const total = items.length;
    let currentIndex = 0;

    function updateCarousel() {
      items.forEach((item, i) => {
        const offset = (i - currentIndex + total) % total;

        if (offset === 0) { // markazdagi rasm
          item.style.transform = 'translateX(0) scale(1) rotateY(0deg)';
          item.style.zIndex = 5;
          item.style.opacity = 1;
        } else if (offset === 1) {
          item.style.transform = 'translateX(280px) scale(0.9) rotateY(-10deg)';
          item.style.zIndex = 4;
          item.style.opacity = 0.9;
        } else if (offset === 2) {
          item.style.transform = 'translateX(540px) scale(0.8) rotateY(-20deg)';
          item.style.zIndex = 3;
          item.style.opacity = 0.6;
        } else if (offset === total - 1) {
          item.style.transform = 'translateX(-280px) scale(0.9) rotateY(10deg)';
          item.style.zIndex = 4;
          item.style.opacity = 0.9;
        } else if (offset === total - 2) {
          item.style.transform = 'translateX(-540px) scale(0.8) rotateY(20deg)';
          item.style.zIndex = 3;
          item.style.opacity = 0.6;
        } else {
          item.style.opacity = 0;
          item.style.zIndex = 1;
          item.style.transform = 'translateX(0) scale(0)';
        }
      });
    }

    document.getElementById('docNextBtn').addEventListener('click', () => {
      currentIndex = (currentIndex + 1) % total;
      updateCarousel();
    });

    document.getElementById('docPrevBtn').addEventListener('click', () => {
      currentIndex = (currentIndex - 1 + total) % total;
      updateCarousel();
    });

    updateCarousel();
  })();
</script>
<!-- ========== /TEZDOC CAROUSEL END ========== -->

<script>
// Active state ishlashi
const buttons = document.querySelectorAll('.btncontainer button');

buttons.forEach(btn => {
    btn.addEventListener('click', () => {
        // Barcha buttonlardan active klassini olib tashlash
        buttons.forEach(b => b.classList.remove('active'));
        // Bosilgan buttonga active berish
        btn.classList.add('active');
    });
});
</script>


</body>
</html>