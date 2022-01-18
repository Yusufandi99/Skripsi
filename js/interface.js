$(document).ready(function() {
  $("form#text-input-form").submit(function(event) {
    event.preventDefault();

//Input teks awal & nilai transformasi
    var inputtedText = $("textarea#text-to-change").val();
    //Ubah semua nilai transformasi menjadi huruf besar, hapus spasi & pisahkan dengan pemisahan koma
    var transformationValues = $("input#tranformation-values").val().toUpperCase().replace(/\s/g, "").split(",");

//Buat array untuk menghasilkan teks yang diubah untuk setiap transformasi
    outputtedText = inputtedText.toLowerCase().split(''); //Ubah semua huruf besar menjadi huruf kecil & pisahkan berdasarkan karakter

//Buat objek teks baru yang diubah
    var newTransformedText = new TransformedText (outputtedText);

//Ulangi nilai transformasi
    for (var i = 0; i < transformationValues.length; i ++) {
      if (transformationValues[i] === "H") {
        newTransformedText.horizontalFlip(outputtedText);
        outputtedText = newTransformedText.horizontalFlipValue;
      } else if (transformationValues[i] === "V") {
        newTransformedText.verticalFlip(outputtedText);
        outputtedText = newTransformedText.verticalFlipValue;
      } 
    }

//Output 
    $("#output-text").html(outputtedText.join("").replace(/(\r|\n)/g, "<br />")); //Remove commas in final array & keep initial indents/paragraph spacing
  });
});
