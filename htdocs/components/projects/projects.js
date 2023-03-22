class projects {
    constructor() {
        this.init();
    }

    init() {
        this.setRefs();
        this.addEventListeners();
    }

    setRefs() {
        this.base = document.querySelector(".projects");
        this.projectsList = this.base.querySelectorAll(".projects__item");
    }

    addEventListeners() {
        let mouse = {x: 0, y: 0, moved: false};
        const projects = this.base.querySelectorAll(".projects__item");
        projects.forEach((project) => {
            project.addEventListener("mousemove", (e) => {
                const rect = project.getBoundingClientRect();
                mouse.moved = true;
                mouse.x = e.clientX - rect.left;
                mouse.y = e.clientY - rect.top;
            });
        });

        // Ticker event will be called on every frame
        TweenLite.ticker.addEventListener('tick', () => {
            if (mouse.moved){
                projects.forEach((project) => {
                    const rect = project.getBoundingClientRect();
                    this.parallaxIt(project, -30, mouse, rect);
                });
            }
            mouse.moved = false;
        });
    }

    parallaxIt(target, movement, mouse, rect) {
        const targetImg = target.querySelector(".projects__item--img img");
        if (targetImg) {
            console.log(targetImg, movement);
            TweenMax.to(targetImg, 0.5, {
                x: (mouse.x - rect.width / 2) / rect.width * movement,
                y: (mouse.y - rect.height / 2) / rect.height * movement
            });
        }
    }
}

const PROJECTS = new projects();