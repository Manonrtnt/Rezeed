function equalizer() {
   
   for (let i=1 ; i<25 ; i++) {

      let randDelay = Math.random() * 150;
      let randDuration = 2350 + Math.random() * 2500;
      let bar = document.querySelector(`#bar${i}`);

      anime({
         targets: bar,
         direction: 'alternate',
         d: [
            { value: secondStates[i-1] },
            { value: thirdStates[i-1] },
            { value: forthStates[i-1] },
            { value: initialStates[i-1] },
            { value: thirdStates[i-1] },
            { value: secondStates[i-1] },
            { value: initialStates[i-1] },
            { value: thirdStates[i-1] }
         ],
         easing: 'linear',
         delay: randDelay,
         duration: randDuration,
         loop: true
      })
   }

   anime({
      targets: `.bar`,
         direction: 'alternate',
         strokeWidth: '55px',
         duration: 2500,
         delay: anime.stagger(200),
         loop: true,
   })
}