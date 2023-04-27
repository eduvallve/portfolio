const FE_ROLES = ["engineer", "problem solver", "creative", "developer"];

class Brief {
  constructor() {
    this.init();
  }

  init() {
    this.setRefs();
    this.setListeners();
    this.startAutoDev();
  }

  setRefs() {
    this.base = document.querySelector(".brief");
    this.sun = this.base.querySelector(".brief__animation--sun");
    this.stars = this.base.querySelector(".brief__animation--stars");
    this.name = this.base.querySelector(".brief__name");
    this.feList = this.base.querySelector(".brief__role--list");
  }

  setListeners() {
    window.addEventListener("scroll", () => this.scrollMovement());
  }

  scrollMovement() {
    this.moveSun();
    this.changeSkyBgColor();
    this.toggleStars();
  }

  moveSun() {
    const scrollY = parseInt(window.scrollY);
    this.sun.style.transform = "translateY(calc(100vh - " + scrollY + "px))";
  }

  changeSkyBgColor(bgColor = "rgba(0, 0, 33, 1)") {
    let scroll = window.pageYOffset;
    let windowHeight = window.innerHeight;
    const sunSize = this.sun.offsetHeight;
    const electricBlue = "rgba(31,94,148,1)";
    if (scroll < sunSize / 20) {
      this.base.style.backgroundColor = bgColor;
    } else if (scroll > sunSize / 20 && scroll < sunSize) {
      this.base.style.backgroundColor = "orange";
    } else if (scroll > sunSize && scroll < windowHeight / 1.5 + sunSize) {
      this.base.style.backgroundColor = "lightblue";
    } else {
      this.base.style.backgroundColor = electricBlue;
    }
  }

  toggleStars() {
    let scroll = window.pageYOffset;
    const sunSize = this.sun.offsetHeight;
    if (scroll < sunSize / 20) {
      this.stars.style.opacity = 1;
    } else if (scroll > sunSize / 20) {
      this.stars.style.opacity = 0;
    }
  }

  startAutoDev() {
    this.moveFrontendRoleSlider();
    this.createSkyDots();
  }

  moveFrontendRoleSlider() {
    const feList = this.feList;
    let i = 0;
    setInterval(function () {
      feList.innerHTML = "";
      const li = document.createElement("li");
      li.classList.add("brief__role--item");
      const text = document.createTextNode(FE_ROLES[i]);
      li.appendChild(text);
      feList.appendChild(li);
      i < FE_ROLES.length - 1 ? i++ : (i = 0);
    }, 3000);
  }

  createSkyDots() {
    var base = this.stars;
    function freshDot() {
      this.obj = document.createElement("div");
      this.obj.classList.add("brief__animation--star");
      this.obj.style.left = `calc(100vmax * ${Math.random()})`;
      this.obj.style.top = `calc(100vmax * ${Math.random()})`;
      const starColor = Math.random() * 45 + 35;
      this.obj.style.backgroundColor = `rgb(255 255 255 / ${starColor}%)`;
      const size = Math.floor(7 * Math.random());
      this.obj.style.height = size + "px";
      this.obj.style.width = size + "px";

      base.appendChild(this.obj);
    }
    var dot = [];
    for (var i = 0; i < 150; i++) {
      dot.push(new freshDot());
    }
  }
}

const BRIEF = new Brief();