const bdFormat = function(num) {
	const formatter = new Intl.NumberFormat('bn-Bd', {
		minimumFractionDigits: 2,
		maximumFractionDigits: 2,
	});

	const bnToEng = function(bnNumber) {
		return bnNumber.replace(/[০-৯]/g, function(bnDigit) {
			return "০১২৩৪৫৬৭৮৯".indexOf(bnDigit);
		});
	}

	const engToBn = function(num) {
		return num.replace(/\d/g, function(d) {
			return "০১২৩৪৫৬৭৮৯"[d];
		});
	}
	return bnToEng(formatter.format(num));
}

const n1 = 123456.2;
const n2 = 123456.126;
const n3 = 123456;
const n4 = 123456.999999;

console.log(bdFormat(n1));
console.log(bdFormat(n2));
console.log(bdFormat(n3));
console.log(bdFormat(n4));