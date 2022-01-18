//masukan atau input
var row1 = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
var row2 = ["q", "w", "e", "r", "t", "y", "u", "i", "o", "p"];
var row3 = ["a", "s", "d", "f", "g", "h", "j", "k", "l", ";"];
var row4 = ["z", "x", "c", "v", "b", "n", "m", ",", ".", "/"];
//menggabungkan beberapa string dari inputan
var allRows = row1.concat(row2).concat(row3).concat(row4);

//membuat keluaran
var outputtedText = [];

//membuat ke variabel array
var charactersPlaceInArray;

//membuat objek
function TransformedText () {
  this.horizontalFlipValue = [];
  this.verticalFlipValue = [];
  this.linearShiftValue = [];
}

// fungsi horizontal flip 
TransformedText.prototype.horizontalFlip = function (outputtedText) {
  this.horizontalFlipValue = []; 
  for (var i = 0; i < outputtedText.length; i ++)
  {
    //cari karakter array
    if ($.inArray(outputtedText[i], row1) != -1) {   
      //menacari array
      charactersPlaceInArray = row1.indexOf(outputtedText[i], row1);
      this.horizontalFlipValue.push(row1[(row1.length - 1) - charactersPlaceInArray]);
    } else if ($.inArray(outputtedText[i], row2) != -1) {
      charactersPlaceInArray = row2.indexOf(outputtedText[i], row2);
      this.horizontalFlipValue.push(row2[(row2.length - 1) - charactersPlaceInArray]);
    } else if ($.inArray(outputtedText[i], row3) != -1) {
      charactersPlaceInArray = row3.indexOf(outputtedText[i], row3);
      this.horizontalFlipValue.push(row3[(row3.length - 1) - charactersPlaceInArray]);
    } else if ($.inArray(outputtedText[i], row4) != -1) {
      charactersPlaceInArray = row4.indexOf(outputtedText[i], row4);
      this.horizontalFlipValue.push(row4[(row4.length - 1) - charactersPlaceInArray]);
    } else {
      this.horizontalFlipValue.push(outputtedText[i]);
    }
  }
  outputtedText = this.horizontalFlipValue;
}

//fungsi Vertical Flip 
TransformedText.prototype.verticalFlip = function (outputtedText) {
  this.verticalFlipValue = [];
  for (var i = 0; i < outputtedText.length; i ++)
  {
    if ($.inArray(outputtedText[i], row1) != -1) {
      charactersPlaceInArray = row1.indexOf(outputtedText[i], row1);
      this.verticalFlipValue.push(row4[charactersPlaceInArray]);
    } else if ($.inArray(outputtedText[i], row2) != -1) {
      charactersPlaceInArray = row2.indexOf(outputtedText[i], row2);
      this.verticalFlipValue.push(row3[charactersPlaceInArray]);
    } else if ($.inArray(outputtedText[i], row3) != -1) {
      charactersPlaceInArray = row3.indexOf(outputtedText[i], row3);
      this.verticalFlipValue.push(row2[charactersPlaceInArray]);
    } else if ($.inArray(outputtedText[i], row4) != -1) {
      charactersPlaceInArray = row4.indexOf(outputtedText[i], row4);
      this.verticalFlipValue.push(row1[charactersPlaceInArray]);
    } else {
      this.verticalFlipValue.push(outputtedText[i]);
    }
  }
  outputtedText = this.verticalFlipValue;
}


