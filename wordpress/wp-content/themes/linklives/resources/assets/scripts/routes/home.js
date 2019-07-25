export default {
  init() {

    // basic idea is as follows:
    // measure the mouse's distance from center of the image and apply a transform rotateX and rotateY of between -5deg and 5deg accordingly
    //
    // const image = document.querySelector('.tilt');
    //
    // image.addEventListener('mousemove', event => {
    //   const { top, bottom, left, right } = event.target.getBoundingClientRect();
    //
    //   const middleX = (right - left) / 2;
    //   const middleY = (bottom - top) / 2;
    //
    //   const clientX = event.clientX;
    //   const clientY = event.clientY;
    //
    //   const offsetX = (clientX - middleX) / middleX;
    //   const offsetY = (middleY - clientY) / middleY;
    //
    //   event.target.style.transform = `perspective(1000px) rotateY(${offsetX *
    //     2}deg) rotateX(${offsetY * 2}deg) scale3d(1, 1, 1)`;
    // });

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
