const range = function(start, end, step = 1) {
	return [ ... Array.from({length: ((end-start)/step) +1 }, (_, i) => start + (i*step))];
}

const r = range(2, 100, 2);


console.log(r);