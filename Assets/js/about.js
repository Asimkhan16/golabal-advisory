function tabChange() {
  var tabs = $(".abt-nav-tabs > li");
  var active = tabs.filter(".active");
  var next = active.next("li").length
    ? active.next("li").find("a")
    : tabs.filter(":first-child").find("a");
  next.tab("show");
}

var tabCycle = setInterval(tabChange, 5000); // Auto-switch tabs every 5 seconds

$(".abt-nav-tabs a").click(function (e) {
  e.preventDefault(); // Prevent default link behavior
  clearInterval(tabCycle); // Stop auto-switching when a tab is clicked
  $(this).tab("show"); // Show the clicked tab
});
