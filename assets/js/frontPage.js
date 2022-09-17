var comingSoonWrapper = document.querySelector('.coming-soon h1');
comingSoonWrapper.innerHTML = comingSoonWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

const comingSoonAnimation = anime.timeline({
    autoplay: false,

});


comingSoonAnimation.add({
    targets: '.coming-soon h1 .letter',
    translateX: [40, 0],
    translateZ: 0,
    opacity: [0, 1],
    easing: "easeOutExpo",
    duration: 1200,
    delay: (el, i) => 300 + 60 * i,
    complete: function () {
        document.body.classList.add("logo-done");
    }
});



const logoAnimation = anime.timeline({
    update: function (anim) {

        if (anim.progress > 90) {
            comingSoonAnimation.play();
        }
    }
})

logoAnimation.add({
    targets: '#fa-letter-1',
    fill: ['#212121', '#E5D14B'],
    easing: 'easeOutBack',
    duration: 700,
}).add({
    targets: '#fa-letter-2',
    fill: ['#212121', '#E5D14B'],
    easing: 'easeOutBack',
    duration: 700,
}, '-=150').add({
    targets: '#fa-letter-3',
    fill: ['#212121', '#E5D14B'],
    easing: 'easeOutBack',
    duration: 700,
}, '-=150').add({
    targets: '#fa-letter-4',
    fill: ['#212121', '#E5D14B'],
    easing: 'easeOutBack',
    duration: 700,
}, '-=150').add({
    targets: '#en-letter-1',
    fill: ['#212121', '#E5D14B'],
    easing: 'easeOutBack',
    duration: 300,
}, '-=200').add({
    targets: '#en-letter-2',
    fill: ['#212121', '#E5D14B'],
    easing: 'easeOutBack',
    duration: 300,
}, '-=200').add({
    targets: '#en-letter-3',
    fill: ['#212121', '#E5D14B'],
    easing: 'easeOutBack',
    duration: 300,
}, '-=200').add({
    targets: '#en-letter-4',
    fill: ['#212121', '#E5D14B'],
    easing: 'easeOutBack',
    duration: 300,
}, '-=200').add({
    targets: '#en-letter-5',
    fill: ['#212121', '#E5D14B'],
    easing: 'easeOutBack',
    duration: 300,
}, '-=200').add({
    targets: '#en-letter-6',
    fill: ['#212121', '#E5D14B'],
    easing: 'easeOutBack',
    duration: 300,
}, '-=200').add({
    targets: '#en-letter-7',
    fill: ['#212121', '#E5D14B'],
    easing: 'easeOutBack',
    duration: 300,
}, '-=200').add({
    targets: '#en-letter-8',
    fill: ['#212121', '#E5D14B'],
    easing: 'easeOutBack',
    duration: 300,
}, '-=200').add({
    targets: '#en-letter-9',
    fill: ['#212121', '#E5D14B'],
    easing: 'easeOutBack',
    duration: 300,

}, '-=200');

