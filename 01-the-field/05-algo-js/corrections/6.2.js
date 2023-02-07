class Person {
  constructor(firstname, lastname) {
    this.firstname = firstname;
    this.lastname = lastname;
  }
  sayHello() {
    console.log("Hello, My name is " + this.firstname + " " + this.lastname);
  }
}

let object1 = new Person("Johnny", "Hallyday");
object1.sayHello();
