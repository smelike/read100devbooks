var list = document.getElementsByClassName("amplitude-play-pause")

for (var item in list) {
	// console.log(item)
	let obt = list[item]
	let atr = obt.getAttribute('data-aodurl')
	console.log(atr)
}



----


var list = document.getElementsByClassName("item-vert-pc--hori-mb")

var info = []

for (var item in list) {
	let obt = list[item]
	let fs = obt.firstElementChild
	console.info("%s", fs)
	//console.log(fs)
	let ls = obt.lastElementChild
	//console.log(ls)
	console.info("%s", ls)
}

console.info(info)

----


var list = document.getElementsByClassName("item-vert-pc--hori-mb")

var info = []

for (var item in list) {
	let obt = list[item]
	let fs = obt.firstElementChild
	console.log(fs)
	let ls = obt.lastElementChild
	console.log(ls)
}
