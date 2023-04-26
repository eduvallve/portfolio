/* ========== OTHERWORKS STYLES ========== */ /* Uri of the project */
.otherWorks {
  background-color: #0c66b9;
  border: 3vw solid white;
  min-height: unset;
  box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.2705882353);
  background-image: url("/lab/portfolio/uploads/media/bg-002-1200.png");
  background-size: cover;
  background-blend-mode: multiply;
}
.otherWorks__main {
  padding: 15px;
  max-width: calc(100% - 30px);
  display: flex;
  flex-direction: column;
  justify-content: center;
  min-height: calc(100vh - 6vw - 30px);
  font-family: "Raleway";
  font-size: 15px;
}
@media screen and (min-width: 768px) and (max-width: 1200px) {
  .otherWorks__main > .cols .cols.col-8 {
    width: 100%;
  }
}
.otherWorks__main-title {
  margin-top: 1em;
  font-size: 44px;
  font-weight: 400;
  line-height: 45px;
  position: relative;
  margin-bottom: 1em;
  color: white;
  cursor: pointer;
  transition: 0.25s;
  position: relative;
  margin-bottom: 70px;
}
@media (min-width: 960px) {
  .otherWorks__main-title {
    margin-bottom: 150px;
  }
}
.otherWorks__main-title::after {
  content: "";
  width: 100px;
  height: 3px;
  position: absolute;
  bottom: -22px;
  background-color: white;
  left: 0;
}
.otherWorks__list {
  text-align: center;
}
.otherWorks__list img {
  width: 50px;
  height: 50px;
}
.otherWorks__list .heart {
  filter: drop-shadow(0px 6px 4px rgba(0, 0, 0, 0.1450980392));
}
.otherWorks__list .heart__3d-modelling {
  transform-origin: bottom center;
  animation: tdrotate linear 7s infinite;
}
.otherWorks__list .heart__animation-video {
  transform-origin: bottom center;
  animation: pendule ease-in-out 5s infinite;
}
.otherWorks__list .heart__motion-graphics {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 1;
  animation: zigzag ease-in-out 3s infinite;
}
.otherWorks__list .heart__motion-graphics.heart-doubled {
  transform: translate(-50%, -50%);
  mix-blend-mode: lighten;
  z-index: 2;
  animation: zagzig ease-in-out 3s infinite;
}
.otherWorks__list .heart__motion-graphics.heart-doubled.heart-back {
  z-index: 0;
  mix-blend-mode: normal;
}
.otherWorks__list .animation__motion-graphics {
  position: relative;
  height: 50px;
}
.otherWorks__list h4 {
  color: white;
  font-family: "Libre Baskerville";
  font-size: 18px;
  font-weight: lighter;
  opacity: 0.9;
  margin-bottom: 40px;
}
@media (min-width: 768px) {
  .otherWorks__list h4 {
    margin-bottom: 70px;
  }
}
.otherWorks__list--items {
  display: flex;
  flex-direction: column;
  gap: var(--col-gap);
  margin: auto;
  margin-bottom: 80px;
  max-width: 350px;
}
@media (min-width: 768px) {
  .otherWorks__list--items {
    margin-bottom: 70px;
  }
}
.otherWorks__list--item {
  display: flex;
  flex-direction: row;
  gap: var(--col-gap);
  text-align: start;
  align-items: center;
  text-decoration: none;
}
@media screen and (max-width: 767px) {
  .otherWorks__list--item:nth-child(even) {
    flex-direction: row-reverse;
    text-align: end;
  }
}
@media (min-width: 768px) {
  .otherWorks__list--item {
    align-items: flex-start;
    opacity: 0.85;
    transition: 0.25s all;
    cursor: pointer;
  }
  .otherWorks__list--item:hover {
    opacity: 1;
  }
  .otherWorks__list--item:hover .otherWorks__list--item--image {
    transition: 0.5s all;
    filter: opacity(1);
    background-blend-mode: unset;
  }
}
.otherWorks__list--item--image {
  min-width: 60px;
  min-height: 60px;
  background-size: cover;
}
@media (min-width: 768px) {
  .otherWorks__list--item--image {
    background-color: #0b65b8;
    background-blend-mode: luminosity;
    filter: opacity(0.75);
  }
}
.otherWorks__list--item--content {
  color: white;
  line-height: 1.25em;
  display: flex;
  flex-direction: column;
}
.otherWorks__list--item--title {
  font-weight: bold;
}
.otherWorks__list--item--description {
  font-size: 14px;
  margin-top: 0.25em;
}

/* -- Animations -- */
@keyframes tdrotate {
  0% {
    transform: rotateY(0deg) rotateX(0deg);
  }
  24% {
    opacity: 1;
  }
  25% {
    opacity: 0.45;
  }
  50% {
    transform: rotateY(180deg) rotateX(30deg);
  }
  75% {
    opacity: 0.65;
  }
  76% {
    opacity: 1;
  }
  100% {
    transform: rotateY(360deg) rotateX(0deg);
  }
}
@keyframes pendule {
  0% {
    transform: rotateZ(-25deg);
  }
  50% {
    transform: rotateZ(25deg);
  }
  100% {
    transform: rotateZ(-25deg);
  }
}
@keyframes zigzag {
  0% {
    transform: translate(-50%, -50%);
    filter: blur(0);
  }
  50% {
    transform: translate(-65%, -35%);
    filter: blur(2px);
  }
  100% {
    filter: blur(0);
    transform: translate(-50%, -50%);
  }
}
@keyframes zagzig {
  0% {
    transform: translate(-50%, -50%);
    filter: blur(0);
  }
  50% {
    transform: translate(-45%, -55%);
    filter: blur(2px);
  }
  100% {
    filter: blur(0);
    transform: translate(-50%, -50%);
  }
}

/*# sourceMappingURL=otherWorks.css.php.map */
