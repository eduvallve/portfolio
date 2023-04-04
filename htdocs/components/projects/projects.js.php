<script type="text/javascript">
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
        this.imgFlaotingMovement();
        this.filterProjectsCategory();
    }

    imgFlaotingMovement() {
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

    filterProjectsCategory() {
        this.base.querySelectorAll(".projects__filter-category").forEach((category) => {
            category.addEventListener("click", (e) => this.updateProjectsDiv(e));
        });
    }

    parallaxIt(target, movement, mouse, rect) {
        const targetImg = target.querySelector(".projects__item--img img");
        if (targetImg) {
            TweenMax.to(targetImg, 0.5, {
                x: (mouse.x - rect.width / 2) / rect.width * movement,
                y: (mouse.y - rect.height / 2) / rect.height * movement
            });
        }
    }

    updateProjectsDiv(e) {
        const projects = this.base.querySelectorAll(".projects__item");
        projects.forEach((project) => {
            project.classList.add("fade-left");
        });

        setTimeout(() => {
            this.base.querySelector('.projects__list').innerHTML = '';

            const filter = e.target.dataset.filter.toLowerCase().replaceAll(' ','-');
            const filename = window.location.pathname + "htdocs/components/projects/projects.filter.php?filter=" + filter;
            this.file_get_contents(filename);
            this.updateActiveFilter(filter);
        }, 500);
    }

    file_get_contents(filename) {
        fetch(filename).then((resp) => resp.text()).then(data => {
            // Initialize the document parser
            const parser = new DOMParser();
            let doc = parser.parseFromString(data, 'text/html');

            // Get the <body> element content
            let body = doc.querySelector('body').innerHTML;

            // Replace my empty element with the retrieved content
            this.base.querySelector('.projects__list').innerHTML = body;
            this.imgFlaotingMovement();
        });
    }

    updateActiveFilter(filter) {
        this.base.querySelectorAll(".projects__filter-category").forEach((category) => {
            if (category.dataset.filter === filter) {
                category.classList.add("active");
            } else {
                category.classList.remove("active");
            }
        });
    }
}

const PROJECTS = new projects();
</script>