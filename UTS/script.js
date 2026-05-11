document.addEventListener("DOMContentLoaded", function() {
    const teksGerak = document.getElementById('animasi');
    let letak = 0;
    function jalanTerus() {
        if (teksGerak) {
            letak -= 1.5;
            if (letak < -1500) { 
                letak = window.innerWidth; 
            }    
            teksGerak.style.transform = `translateX(${letak}px)`;
            requestAnimationFrame(jalanTerus); 
        }
    }
    if (teksGerak) {
        jalanTerus();
    }
});
function kirimPesan() {
    alert("SYSTEM: Berhasil, Koneksi Aman\n\nPesan enkripsi Anda berhasil dikirim ke server pusat ZkyCyber, Operator kami akan segera merespons");
    const formKontak = document.querySelector('.form');
    if (formKontak) {
        formKontak.reset();
    }
}