import './bootstrap';

// import function to register Swiper custom elements
import { register } from 'swiper/element/bundle';
// register Swiper custom elements
register();

class GradientAnimation {
  constructor(element, minRadius, maxRadius, speed, count) {
    this.cnv        = document.querySelector(element);
    this.ctx        = this.cnv.getContext(`2d`);

    this.circlesNum = count;
    this.minRadius  = minRadius;
    this.maxRadius  = maxRadius;
    this.speed      = speed;
    
    (window.onresize = () => {
      this.setCanvasSize();
      this.createCircles();
    })();
    this.drawAnimation();

  }
  setCanvasSize() {
    this.w = this.cnv.width  = innerWidth * devicePixelRatio;
    this.h = this.cnv.height = innerHeight * devicePixelRatio;
    this.ctx.scale(devicePixelRatio, devicePixelRatio)
  }
  createCircles() {
    this.circles = [];
    for (let i = 0 ; i < this.circlesNum ; ++i) {
      this.circles.push(new Circle(this.w, this.h, this.minRadius, this.maxRadius));
    }
  }
  drawCircles() {
    this.circles.forEach(circle => circle.draw(this.ctx, this.speed));
  }
  clearCanvas() {
    this.ctx.clearRect(0, 0, this.w, this.h); 
  }
  drawAnimation() {
    this.clearCanvas();
    this.drawCircles();
    window.requestAnimationFrame(() => this.drawAnimation());
  }
}

class Circle {
  constructor(w, h, minR, maxR) {
    this.x = Math.random() * w;
    this.y = Math.random() * h;
    this.angle  = Math.random() * Math.PI * 2;
    this.radius = Math.random() * (maxR - minR) + minR;
    this.firstColor  = `hsla(256, 70%, 54%, 0)`;
    // this.secondColor = `hsla(259, 100%, 50%, 0)`;
    // this.thirdColor = `hsla(336, 100%, 50%, 0)`;
    this.fourthColor = `hsla(166, 33%, 50%, 1)`;
    // this.firstColor  = `hsla(${Math.random() * 360}, 100%, 50%, 1)`;
    // this.secondColor = `hsla(${Math.random() * 360}, 100%, 50%, 0)`;
  }
  draw(ctx, speed) {
    this.angle += speed;
    const x = this.x + Math.cos(this.angle) * 200;
    const y = this.y + Math.sin(this.angle) * 200;
    const gradient = ctx.createRadialGradient(x, y, 0, x, y, this.radius);
          gradient.addColorStop(1, this.firstColor);
        //   gradient.addColorStop(1, this.secondColor);
        //   gradient.addColorStop(1, this.thirdColor);
          gradient.addColorStop(0, this.fourthColor);
        // gradient.addColorStop(0, this.firstColor);
        // gradient.addColorStop(1, this.secondColor);

    ctx.globalCompositeOperation = `overlay`;
    ctx.fillStyle = gradient;
    ctx.beginPath();
    ctx.arc(x, y, this.radius, 0, Math.PI * 2);
    ctx.fill(); 
  }
}

window.onload = () => {
  new GradientAnimation(`#menu-desktop-canvas`, 200, 200, .007, 15);
  new GradientAnimation(`#footer-canvas`, 300, 500, .004, 8);
}






