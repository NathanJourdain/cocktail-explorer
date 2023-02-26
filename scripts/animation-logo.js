addEventListener('DOMContentLoaded', function(){

    const TL = gsap.timeline({repeat: -1, yoyo: true});
    TL.pause();

    TL.to('#straw', {duration: 0.5, y: 10, rotation: 3, ease: 'power1.inOut', repeat: -1, yoyo: true});
    TL.to('#mint_right', {duration: 0.5, rotation: 5, transformOrigin: 'bottom', ease: 'power1.inOut', repeat: -1, yoyo: true}, '-=0.3');
    TL.to('#mint_left', {duration: 0.5, rotation: -5, transformOrigin: 'bottom', ease: 'power1.inOut', repeat: -1, yoyo: true}, '-=0.3');
    TL.to('#lemon', {duration: 0.5, y: 10, ease: 'power1.inOut', repeat: -1, yoyo: true}, '-=0.3');
    TL.to('#ice_1', {duration: 0.5, y: 8, ease: 'power1.inOut', repeat: -1, yoyo: true}, '-=0.3');
    TL.to('#ice_2', {duration: 0.5, y: 15, rotate: -2, ease: 'power1.inOut', repeat: -1, yoyo: true}, '-=0.5');
    TL.to('#ice_3', {duration: 0.5, y: 5, rotation: 3, ease: 'power1.inOut', repeat: -1, yoyo: true}, '-=0.6');
    TL.to('#olive', {duration: 0.5, y: 10, x: 5, rotation: -3, ease: 'power1.inOut', repeat: -1, yoyo: true}, '-=0.3');

    TL.play();

});