const sliderFrames = document.querySelectorAll('.slider-frame');
const dots = document.querySelectorAll('.dot');
let currentIndex = 0;


function showSlide(index) {
    sliderFrames.forEach((frame, idx) => {
        frame.style.display = (idx === index) ? 'block' : 'none';
    });

    dots.forEach(dot => dot.classList.remove('active'));
    dots[index].classList.add('active');
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % sliderFrames.length;
    showSlide(currentIndex);
}

dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        currentIndex = index;
        showSlide(currentIndex);
    });
});

setInterval(nextSlide, 5000);

showSlide(currentIndex);
