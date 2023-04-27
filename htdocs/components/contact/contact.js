/* Config */

const c_cfg = {
    selectors: {
        component: '.contact',
        stars: '.contact__animation--stars'
    },
    classes: {
        star: 'contact__animation--star'
    }
}

/* Class */

class contact {
    constructor() {
        this.init();
    }

    init() {
        this.setRefs();
        this.skyDot();
        setInterval(() => {
            this.skyDot();
        }, 500);
    }

    setRefs() {
        this.base = document.querySelector(c_cfg.selectors.component);
        this.stars = this.base.querySelector(c_cfg.selectors.stars);
    }

    skyDot() {
        const id = `c_star_${Math.floor(Math.random() * 5000)}`;
        const base = this.stars;
        function freshDot() {
            const obj = document.createElement("div");
            obj.classList.add(c_cfg.classes.star);
            obj.style.left = `calc(100vmax * ${Math.random()})`;
            obj.style.top = `calc(100vmax * ${Math.random()})`;
            const size = Math.floor(2 * Math.random()) + 4;
            obj.style.height = size + "px";
            obj.style.width = size + "px";
            obj.id = id;
            base.appendChild(obj);
        }

        new freshDot();

        setTimeout(() => {
            this.stars.querySelector(`#${id}`).remove();
        }, 2500);
    }
}

const CONTACT = new contact();