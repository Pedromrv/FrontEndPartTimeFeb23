// 1
const parentListOfMatters = document.querySelector("ol");
const ListOfMatters = parentListOfMatters.children;
const lastMatter = ListOfMatters[ListOfMatters.length - 1]
parentListOfMatters.insertBefore(lastMatter, ListOfMatters[0]); 

// 2 Move the <h2> of the third section in the second one 
// and vice-versa
const h2ThirdSection = document.querySelectorAll("h2")[1];
const h2SecondSection = document.querySelectorAll("h2")[2];

const section2 = h2ThirdSection.parentNode;
const section3 = document.querySelectorAll("section")[2]
const section3ChildOfDiv = section3.childNodes[1];

section2.replaceChild(h2SecondSection, h2ThirdSection);
section3ChildOfDiv.replaceChild(
  h2ThirdSection,
  section3ChildOfDiv.childNodes[1]
);

// 3 Delete the last section from the DOM, we don't need it anyways
section3.remove()