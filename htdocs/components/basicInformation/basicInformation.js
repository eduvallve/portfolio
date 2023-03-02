class basicInformation {
constructor() {
    this.init();
}

init() {
    this.setRefs();
    this.createSkyDots();
    setInterval(() => {
        this.deleteSkyDots();
        this.createSkyDots();
    }, 5000);
}

setRefs() {
    this.base = document.querySelector(".basicInformation");
    this.stars = this.base.querySelector(".basicInformation__animation--stars");
}

deleteSkyDots() {
    this.stars.innerHTML = '';
}

createSkyDots() {
    var base = this.stars;
    function freshDot() {
        this.obj = document.createElement("div");
        this.obj.classList.add("basicInformation__animation--star");
        this.obj.style.left = `calc(100vmax * ${Math.random()})`;
        this.obj.style.top = `calc(100vmax * ${Math.random()})`;
        this.size = Math.floor(2 * Math.random()) + 4;
        this.obj.style.height = this.size + "px";
        this.obj.style.width = this.size + "px";
        base.appendChild(this.obj);
    }
    var dot = [];
    for (var i = 0; i < 10; i++) {
        dot.push(new freshDot());
    }
}
}

const BASICINFORMATION = new basicInformation();