const images = document.querySelectorAll('.image');
const lightbox = document.getElementById('lightbox');
const lightboxImage = document.getElementById('lightbox-image');
const closeButton = document.querySelector('.close');

images.forEach(image => {
  image.addEventListener('click', () => {
    const imageUrl = image.querySelector('img').src;
    lightboxImage.src = imageUrl;
    lightbox.style.display = 'block';
  });
});

closeButton.addEventListener('click', () => {
  lightbox.style.display = 'none';
});
