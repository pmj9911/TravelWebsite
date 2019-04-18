function myFunction() {
    var txt;
    var person = prompt("Please enter your name:");
    if (person == null || person == "") {
      txt = "User cancelled the prompt.";
    } else {
      txt = "Hello " + person + "! How are you today?";
    }
    document.getElementById("demo").innerHTML = txt;

    document.getElementById("helloButton").style.display="none";
  }