class Person {
  constructor(firstname, lastname) {
    this.firstname = firstname;
    this.lastname = lastname;
  }

  /**
   * @param {string} text
   */
  set setName(text) {
    let arr_nam = text.split(" ");
    this.firstname = arr_nam[0];
    this.lastname = arr_nam[1];
  }
  get getName() {
    return `${this.firstname} ${this.lastname}`;
  }
}

let johnny = new Person("Johnny", "Hallyday");
// johnny.name = "Johnny Hallyday";
console.log(johnny.getName());
// "Johnny Halliday"

johnny.setName = "Jean-Phillipe Smet";
console.log(johnny.getName());
// "Jean-Philippe Smet"
