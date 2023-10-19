phaseToTest = "      TaCO .... CAT";
for (
  i = 0, backIndex = phaseToTest.length - 1;
  i < phaseToTest.length;
  i++, backIndex--
) {
  if (backIndex < i) {
    console.log("pally!");
    break;
  }
  while (phaseToTest[i] == " " || phaseToTest[i] == ".") {
    i++;
  }
  while (phaseToTest[backIndex] == " " || phaseToTest[backIndex] == ".") {
    backIndex--;
  }
  console.log(i, phaseToTest[i], backIndex, phaseToTest[backIndex]);
  // check if front chracter and back character are the same
  if (phaseToTest[i].toLowerCase() != phaseToTest[backIndex].toLowerCase()) {
    console.log("not a palindrome");
    break;
  }
}
