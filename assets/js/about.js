const aboutbackgroundAnimation = anime({
    targets: '.about-background',
    backgroundColor: ['#ffc107', '#d32f2f'],
    duration: 400,
    easing: 'easeInOutQuad',
    autoplay: false,
});

document.addEventListener("scroll", function () {
    let height = window.scrollY / (document.documentElement.scrollHeight - document.documentElement.clientHeight)
    aboutbackgroundAnimation.seek(aboutbackgroundAnimation.duration * height);
})