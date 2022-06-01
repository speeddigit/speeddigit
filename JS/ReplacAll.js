function route(...param) {
	let url = 'http://pos.test/';
	url += param.join('/');
	return url;
}

let tempUrl = route('all', 'products',':id1', ':id2', ':id3');

// tempUrl = tempUrl.replace(':id1', 1);
// tempUrl = tempUrl.replace(':id2', 2);

tempUrl = [1, 2, 'edit'].reduce(function(cumulator = tempUrl, value) {
	return cumulator += value	
});

console.log(tempUrl);