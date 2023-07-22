const qs = document.querySelector.bind(document);

const qsa = document.querySelectorAll.bind(document);

const observerOptions = {
  root: qs("#app"),
  rootMargin: "0px",
  threshold: [0],
};

const observerCallback = (entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.style.backgroundColor = "green";
      console.log(entry);
    } else {
      entry.target.style.backgroundColor = "transparent";
    }
  });
};

const observer = new IntersectionObserver(observerCallback, observerOptions);

qsa(".box").forEach((box) => {
  observer.observe(box);
});
