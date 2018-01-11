function validateForm() {

    var text = document.myform.text.value;

    var regx = /[^A-Za-z0-9]/g;;
      var lowRegStr = text.toLowerCase().replace(regx, '');
      var reverseStr = lowRegStr.split('').reverse().join('');

    if (text == null || text == "" ) {
            alert("Text cannot be empty!");
        }else if (text.length > 255){
          alert("You have entered more than 255 characters!");
      }else if (text == "palindrome"){
          alert("You have entered the word 'palindrome'!");
      }else if (lowRegStr === reverseStr){
          alert(text + " is a palindrome!!!!");
      }else {
          alert(text + " is not a palindrome!");
      }
}
