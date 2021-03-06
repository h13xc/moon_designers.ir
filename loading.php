<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Loading ...</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta http-equiv='Refresh' content='3;url=regesterproject.php'>
    <style>
* {
box-sizing: border-box;
}

body {
min-height: 100vh;
background-color: #1d2630;
display: flex;
justify-content: space-between;
flex-wrap: wrap;
align-items: flex-start;
overflow: hidden;
}
* {
  margin: 0;
  padding: 0;
  font-family: 'Open Sans', sans-serif;
  font-weight: bold;
  text-transform: uppercase;
}

.background {
  position: absolute;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background: #ebefec;
  z-index: 0;
  color: black;
  font-size: 5vmin;
  letter-spacing: 3vmin;
  transition: .5s;
}

.background span {
  background: #ebefec;
  padding-left: 0;
  margin-left: auto;
  margin-right: auto;
  width: 80vmin;
  display: block;
  margin-top: 18.6vmin;
}

.background span:before {
  text-align: center;
  display: inline-block;
  width: 46vmin;
  content: 'Moon ';
}

.background_marge_title {
  position: absolute;
  background: black;
  width: 100vw;
  height: 0.5vh;
  top: 22.1vmin;
  z-index: -1;
}

.loader:hover + .background span:before {
  content: 'dark ';
}

.loader:hover,
.loader:hover + .background {
  cursor: pointer;
  filter: invert(100%);
  transition: .5s;
}

.loader {
  z-index: 1;
  position: absolute;
  top: 58%;
  left: 50.2%;
  transition: .5s;
}

.load_base {
  position: absolute;
  background: black;
}

.load1,
.load2 {
  width: 20vmin;
  height: 20vmin;
  left: calc(50% - 1.25vmin - 10vmin);
  top: calc(50% - 1.25vmin - 10vmin);
}

.load1 {
  animation: load1 2s ease infinite;
}

.load2 {
  background: transparent;
  animation: load2 2s ease infinite;
}

.out_loader {
  width: 18vmin;
  height: 18vmin;
  left: calc(50% - 9vmin);
  top: calc(50% - 9vmin);
  background: #ebefec;
  animation: load1 2s ease infinite;
}

.in_loader {
  width: 3vmin;
  height: 3vmin;
  border: 0.3vmin solid black;
  border-radius: 100vmin;
  background: #ebefec;
}

.in_loader1 {
  animation: in_load1 2s ease infinite;
}

.in_loader2 {
  animation: in_load2 2s ease infinite;
}

.in_loader3 {
  animation: in_load3 2s ease infinite;
}

.in_loader4 {
  animation: in_load4 2s ease infinite;
}

@keyframes load1 {
  0% {
    transform: rotate(0deg);
    border-radius: 2vmin;
  }
  60% {
    transform: rotate(360deg);
    border-radius: 10vmin;
  }
  80% {
    transform: rotate(360deg);
    border-radius: 7vmin;
  }
  90% {
    transform: rotate(360deg);
    border-radius: 3.5vmin;
  }
  100% {
    transform: rotate(360deg);
    border-radius: 2vmin;
  }
}

@keyframes load2 {
  0% {
    transform: rotate(0deg);
  }
  60% {
    transform: rotate(-360deg);
  }
  100% {
    transform: rotate(-360deg);
  }
}

@keyframes in_load1 {
  0% {
    opacity: 0;
    top: calc(50% - 1.25vmin);
    left: calc(50% - 1.25vmin);
  }
  25% {
    opacity: 0;
  }
  35% {
    opacity: 1;
  }
  60% {
    top: calc(-50% - 1.25vmin);
    left: calc(50% - 1.25vmin);
  }
  68% {
    opacity: 1;
  }
  72% {
    opacity: 0;
  }
  100% {
    opacity: 0;
    top: calc(50% - 1.25vmin);
    left: calc(50% - 1.25vmin);
  }
}

@keyframes in_load2 {
  0% {
    opacity: 0;
    top: calc(50% - 1.25vmin);
    left: calc(50% - 1.25vmin);
  }
  25% {
    opacity: 0;
  }
  35% {
    opacity: 1;
  }
  70% {
    top: calc(50% - 1.25vmin);
    left: calc(150% - 1.25vmin);
  }
  76% {
    opacity: 1;
  }
  80% {
    opacity: 0;
  }
  100% {
    opacity: 0;
    top: calc(50% - 1.25vmin);
    left: calc(50% - 1.25vmin);
  }
}

@keyframes in_load3 {
  0% {
    opacity: 0;
    top: calc(50% - 1.25vmin);
    left: calc(50% - 1.25vmin);
  }
  25% {
    opacity: 0;
  }
  35% {
    opacity: 1;
  }
  80% {
    top: calc(150% - 1.25vmin);
    left: calc(50% - 1.25vmin);
  }
  84% {
    opacity: 1;
  }
  88% {
    opacity: 0;
  }
  100% {
    opacity: 0;
    top: calc(50% - 1.25vmin);
    left: calc(50% - 1.25vmin);
  }
}

@keyframes in_load4 {
  0% {
    opacity: 0;
    top: calc(50% - 1.25vmin);
    left: calc(50% - 1.25vmin);
  }
  25% {
    opacity: 0;
  }
  35% {
    opacity: 1;
  }
  90% {
    top: calc(50% - 1.25vmin);
    left: calc(-50% - 1.25vmin);
  }
  91% {
    opacity: 1;
  }
  95% {
    opacity: 0;
  }
  100% {
    opacity: 0;
    top: calc(50% - 1.25vmin);
    left: calc(50% - 1.25vmin);
  }
}
.load
{
  font-size: 2.5vw;
  position: absolute;
  margin-top: 80vh;
  margin-left: 43%;
  color: black;
  font-weight: bold;
}
    </style>
  </head>
  <body>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<div class="loader">
  <div class="load_base load1">
    <div class="load_base out_loader"></div>
  </div>
  <div class="load_base load2">
    <div class="load_base in_loader in_loader1"></div>
    <div class="load_base in_loader in_loader2"></div>
    <div class="load_base in_loader in_loader3"></div>
    <div class="load_base in_loader in_loader4"></div>
  </div>
</div>
<div class="background">
  <span>D S N</span>
  <div class="background_marge_title"></div>
</div>
  <div class="load">Loading ....</div>
  </body>
</html>
