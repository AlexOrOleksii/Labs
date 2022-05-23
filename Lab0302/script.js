const cnvs = document.getElementById("canvas");
const ctxt = canvas.getContext("2d");

let frame = 0;
const image = new Image();
image.src = "sprite02-sheet.png"

const cropXWidth = 109;

window.setInterval(() => {
	ctxt.clearRect(0, 0, cropXWidth, image.height);
	
	ctxt.drawImage(image, 109 * frame, 0, 106, image.height, 0, 0, 
				   cropXWidth, image.height);

	frame++;

	if(frame >= 14)
		frame = 0;

}, 100);
