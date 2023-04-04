/* ========== CONTACT STYLES ========== */ /* --- Colors */
.contact {
  position: relative;
}
.contact__main {
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  font-family: "Raleway";
  font-size: 18px;
  text-align: center;
  padding: 0 15px;
}
.contact__main-title {
  margin-top: 1em;
  font-size: 44px;
  font-weight: 400;
  line-height: 45px;
  cursor: pointer;
  transition: 0.25s;
  position: relative;
  margin-bottom: 70px;
}
.contact__main-title::after {
  content: "";
  width: 100px;
  height: 3px;
  position: absolute;
  bottom: -35px;
  background-color: #0b66b9;
  left: 50%;
  transform: translateX(-50%);
}
.contact__main-description {
  line-height: 1.25em;
  font-size: 0.9em;
}
.contact__main-cta {
  margin-top: 50px;
}
@media screen and (min-width: 768px) and (max-width: 959px) {
  .contact__main > .cols > .col-4 {
    width: 66%;
  }
}
.contact .btn {
  display: inline-block;
  padding: 0.5em 1em;
}
@media screen and (max-width: 767px) {
  .contact .btn:last-of-type {
    margin-bottom: 25px;
  }
}
.contact__animation {
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}
.contact__animation--star {
  position: absolute;
  border-radius: 50%;
  background-color: lightblue;
  transition: opacity 1s ease;
  animation: dotWave ease-in-out 2.5s;
}
.contact__bg {
  background-image: url("/portfolio/uploads/media/bg-002-1200.webp");
  background-size: cover;
  background-position: center;
  filter: opacity(0.75) blur(2px);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}
@media (min-width: 768px) {
  .contact__bg {
    filter: opacity(0.25) blur(2px);
  }
}