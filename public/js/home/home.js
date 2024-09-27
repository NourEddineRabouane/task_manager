// import { foo } from "./footer.js";
// console.log("hello world");

// foo.forEach((e) => console.log(e));

let a = document.querySelectorAll(".nav a");
console.log(a);
a.forEach((element) => {
    element.addEventListener("click", () => {
        console.log(element.attributes["to"]);
    });
});
