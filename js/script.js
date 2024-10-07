let container = document.getElementById("container");

function tambahgambar() {
    let images = [
        'images/atin 1.jpg',
        'images/enstn.jpeg',
        'images/jkw.jpeg',
        'images/lc.jpeg',
        'images/pncak.jpg',
        'images/tsl.jpeg',
        'images/enstn.jpeg',
        'images/jkw.jpeg',
        'images/pncak.jpg',
        'images/tsl.jpeg'
    ];

    let sounds = [
        'sounds/Rekomendasi-Lagu-DJ-Remix-1.mp3', 
        'sounds/Rekomendasi-Lagu-DJ-Remix-2-1.mp3', 
        'sounds/Rekomendasi-Lagu-DJ-Remix-3.mp3', 
        'sounds/Rekomendasi-Lagu-DJ-Remix-4.mp3', 
        'sounds/Rekomendasi-Lagu-DJ-Remix-5.mp3', 
        'sounds/Rekomendasi-Lagu-DJ-Remix-6.mp3', 
        'sounds/Rekomendasi-Lagu-DJ-Remix-7.mp3', 
        'sounds/Rekomendasi-Lagu-DJ-Remix-8.mp3', 
        'sounds/Rekomendasi-Lagu-DJ-Remix-9.mp3', 
        'sounds/Rekomendasi-Lagu-DJ-Remix-10.mp3'
    ];

    // Menghapus konten di dalam container sebelum menambahkan gambar baru
    container.innerHTML = "";

    for (let i = 0; i < images.length; i++) {
        let img = document.createElement('img');
        img.src = images[i];
        img.alt = `Gambar ${i+1}`;
        img.onclick = function() {
            let audio = new Audio(sounds[i]);
            audio.play();
        };
        container.appendChild(img);
    }
}
